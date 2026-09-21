<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(10);
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'deskripsi'      => 'nullable|string',
            'kondisi'        => 'required|string|max:50',
            'gambar'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('fasilitas', 'public');
        }

        Fasilitas::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'deskripsi'      => $request->deskripsi,
            'kondisi'        => $request->kondisi,
            'gambar'         => $gambarPath,
        ]);

        return redirect()->route('fasilitas.index')->with('success', 'Data Fasilitas Sekolah berhasil ditambahkan.');
    }

    public function edit(Fasilitas $fasilita) // Perhatikan nama parameter mengikuti route resource singular (fasilita) atau sesuaikan
    {
        $fasilitas = $fasilita;
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, Fasilitas $fasilita)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'deskripsi'      => 'nullable|string',
            'kondisi'        => 'required|string|max:50',
            'gambar'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambarPath = $fasilita->gambar;
        if ($request->hasFile('gambar')) {
            if ($fasilita->gambar && Storage::disk('public')->exists($fasilita->gambar)) {
                Storage::disk('public')->delete($fasilita->gambar);
            }
            $gambarPath = $request->file('gambar')->store('fasilitas', 'public');
        }

        $fasilita->update([
            'nama_fasilitas' => $request->nama_fasilitas,
            'deskripsi'      => $request->deskripsi,
            'kondisi'        => $request->kondisi,
            'gambar'         => $gambarPath,
        ]);

        return redirect()->route('fasilitas.index')->with('success', 'Data Fasilitas Sekolah berhasil diperbarui.');
    }

    public function destroy(Fasilitas $fasilita)
    {
        if ($fasilita->gambar && Storage::disk('public')->exists($fasilita->gambar)) {
            Storage::disk('public')->delete($fasilita->gambar);
        }
        
        $fasilita->delete();
        return redirect()->route('fasilitas.index')->with('success', 'Data Fasilitas Sekolah berhasil dihapus.');
    }
}