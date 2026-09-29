<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $galeris = Galeri::when($q, function ($query) use ($q) {
            $query->where(function ($sub) use ($q) {
                $sub->where('judul', 'like', "%{$q}%")
                    ->orWhere('kategori', 'like', "%{$q}%");
            });
        })->latest()->paginate(12)->withQueryString();

        return view('admin.galeri.index', compact('galeris', 'q'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'deskripsi'=> 'nullable|string',
            'gambar'   => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambarPath = $request->file('gambar')->store('galeri', 'public');

        Galeri::create([
            'judul'     => $request->judul,
            'kategori'  => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $gambarPath,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'kategori' => 'nullable|string|max:100',
            'deskripsi'=> 'nullable|string',
            'gambar'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambarPath = $galeri->gambar;
        if ($request->hasFile('gambar')) {
            if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
                Storage::disk('public')->delete($galeri->gambar);
            }
            $gambarPath = $request->file('gambar')->store('galeri', 'public');
        }

        $galeri->update([
            'judul'     => $request->judul,
            'kategori'  => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $gambarPath,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
            Storage::disk('public')->delete($galeri->gambar);
        }

        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Foto galeri berhasil dihapus.');
    }
}
