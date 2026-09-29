<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $kategori = $request->get('kategori');

        $gurus = Guru::when($q, function ($query) use ($q) {
            $query->where(function ($sub) use ($q) {
                $sub->where('nama', 'like', "%{$q}%")
                    ->orWhere('jabatan', 'like', "%{$q}%")
                    ->orWhere('mapel', 'like', "%{$q}%")
                    ->orWhere('nip', 'like', "%{$q}%");
            });
        })->when($kategori, function ($query) use ($kategori) {
            $query->where('kategori', $kategori);
        })->orderBy('nama')->paginate(10)->withQueryString();

        return view('admin.guru.index', compact('gurus', 'q', 'kategori'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'nip'      => 'nullable|string|max:50',
            'jabatan'  => 'required|string|max:255',
            'mapel'    => 'nullable|string|max:255',
            'foto'     => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori' => 'required|in:guru,staf',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('guru', 'public');
        }

        Guru::create([
            'nama'     => $request->nama,
            'nip'      => $request->nip,
            'jabatan'  => $request->jabatan,
            'mapel'    => $request->mapel,
            'foto'     => $fotoPath,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('guru.index')->with('success', 'Data Guru/Staf berhasil ditambahkan.');
    }

    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'nip'      => 'nullable|string|max:50',
            'jabatan'  => 'required|string|max:255',
            'mapel'    => 'nullable|string|max:255',
            'foto'     => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kategori' => 'required|in:guru,staf',
        ]);

        $fotoPath = $guru->foto;
        if ($request->hasFile('foto')) {
            if ($guru->foto && Storage::disk('public')->exists($guru->foto)) {
                Storage::disk('public')->delete($guru->foto);
            }
            $fotoPath = $request->file('foto')->store('guru', 'public');
        }

        $guru->update([
            'nama'     => $request->nama,
            'nip'      => $request->nip,
            'jabatan'  => $request->jabatan,
            'mapel'    => $request->mapel,
            'foto'     => $fotoPath,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('guru.index')->with('success', 'Data Guru/Staf berhasil diperbarui.');
    }

    public function destroy(Guru $guru)
    {
        if ($guru->foto && Storage::disk('public')->exists($guru->foto)) {
            Storage::disk('public')->delete($guru->foto);
        }
        
        $guru->delete();
        return redirect()->route('guru.index')->with('success', 'Data Guru/Staf berhasil dihapus.');
    }
}