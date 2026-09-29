<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkskulController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $ekskuls = Ekskul::when($q, function ($query) use ($q) {
            $query->where(function ($sub) use ($q) {
                $sub->where('nama_ekskul', 'like', "%{$q}%")
                    ->orWhere('pembina', 'like', "%{$q}%")
                    ->orWhere('jadwal', 'like', "%{$q}%");
            });
        })->orderBy('nama_ekskul')->paginate(10)->withQueryString();

        return view('admin.ekskul.index', compact('ekskuls', 'q'));
    }

    public function create()
    {
        return view('admin.ekskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ekskul' => 'required|string|max:255',
            'pembina'     => 'nullable|string|max:255',
            'jadwal'      => 'nullable|string|max:255',
            'deskripsi'   => 'nullable|string',
            'gambar'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('ekskul', 'public');
        }

        Ekskul::create([
            'nama_ekskul' => $request->nama_ekskul,
            'pembina'     => $request->pembina,
            'jadwal'      => $request->jadwal,
            'deskripsi'   => $request->deskripsi,
            'gambar'      => $gambarPath,
        ]);

        return redirect()->route('ekskul.index')->with('success', 'Data Ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit(Ekskul $ekskul)
    {
        return view('admin.ekskul.edit', compact('ekskul'));
    }

    public function update(Request $request, Ekskul $ekskul)
    {
        $request->validate([
            'nama_ekskul' => 'required|string|max:255',
            'pembina'     => 'nullable|string|max:255',
            'jadwal'      => 'nullable|string|max:255',
            'deskripsi'   => 'nullable|string',
            'gambar'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambarPath = $ekskul->gambar;
        if ($request->hasFile('gambar')) {
            if ($ekskul->gambar && Storage::disk('public')->exists($ekskul->gambar)) {
                Storage::disk('public')->delete($ekskul->gambar);
            }
            $gambarPath = $request->file('gambar')->store('ekskul', 'public');
        }

        $ekskul->update([
            'nama_ekskul' => $request->nama_ekskul,
            'pembina'     => $request->pembina,
            'jadwal'      => $request->jadwal,
            'deskripsi'   => $request->deskripsi,
            'gambar'      => $gambarPath,
        ]);

        return redirect()->route('ekskul.index')->with('success', 'Data Ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy(Ekskul $ekskul)
    {
        if ($ekskul->gambar && Storage::disk('public')->exists($ekskul->gambar)) {
            Storage::disk('public')->delete($ekskul->gambar);
        }
        
        $ekskul->delete();
        return redirect()->route('ekskul.index')->with('success', 'Data Ekstrakurikuler berhasil dihapus.');
    }
}