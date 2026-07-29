<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Untuk membuat URL otomatis (slug)
use Illuminate\Support\Facades\Storage; // Untuk menyimpan gambar ke storage

class BeritaController extends Controller
{
    // 1. Menampilkan daftar berita di tabel admin
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('admin.berita.index', compact('berita'));
    }

    // 2. Menampilkan formulir tambah berita
    public function create()
    {
        return view('admin.berita.create');
    }

    // 3. Memproses data dari formulir dan menyimpannya ke database
    public function store(Request $request)
    {
        // Validasi data (pastikan judul dan konten tidak kosong)
        $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048', // Maksimal ukuran 2MB
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul); // Membuat slug otomatis dari judul

        // Jika admin mengupload gambar, simpan ke folder 'storage/app/public/foto_berita'
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('foto_berita', 'public');
        }

        // Simpan ke database
        Berita::create($data);

        // Kembalikan ke halaman daftar berita
        return redirect()->route('berita.index')->with('success', 'Berita berhasil diterbitkan!');
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);

        // Jika admin mengupload gambar baru, simpan dan hapus gambar lama
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('foto_berita', 'public');
        }

        // Update data di database
        $berita->update($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(Berita $berita)
    {
        // Hapus gambar jika ada
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }

        // Hapus berita dari database
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}