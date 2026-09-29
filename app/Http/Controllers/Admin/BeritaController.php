<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $berita = Berita::when($q, function ($query) use ($q) {
            $query->where('judul', 'like', "%{$q}%")
                ->orWhere('konten', 'like', "%{$q}%");
        })->latest()->paginate(10)->withQueryString();

        return view('admin.berita.index', compact('berita', 'q'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only(['judul', 'konten']);
        $data['slug'] = $this->uniqueSlug($request->judul);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('foto_berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diterbitkan!');
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only(['judul', 'konten']);

        // Slug baru hanya jika judul berubah, agar URL berita tidak berubah seiring waktu
        if ($berita->judul !== $request->judul) {
            $data['slug'] = $this->uniqueSlug($request->judul, $berita->id);
        }

        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('foto_berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(Berita $berita)
    {
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }

    private function uniqueSlug(string $judul, ?int $ignoreId = null): string
    {
        $base = Str::slug($judul) ?: Str::slug(Str::random(8));
        $slug = $base;
        $counter = 1;

        $query = Berita::where('slug', $slug);
        if ($ignoreId) {
            $query->where('id', '!=', $ignoreId);
        }

        while ($query->exists()) {
            $slug = $base . '-' . $counter;
            $counter++;

            $query = Berita::where('slug', $slug);
            if ($ignoreId) {
                $query->where('id', '!=', $ignoreId);
            }
        }

        return $slug;
    }
}
