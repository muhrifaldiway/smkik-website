<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Storage;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $q = $request->get('q');

        $jurusans = Jurusan::when($q, function ($query) use ($q) {
            $query->where('nama_jurusan', 'like', "%{$q}%")
                ->orWhere('singkatan', 'like', "%{$q}%");
        })->orderBy('nama_jurusan')->paginate(10)->withQueryString();

        return view('admin.jurusan.index', compact('jurusans', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|string|max:255',
            'singkatan' => 'nullable|string|max:50',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ikon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['nama_jurusan', 'singkatan', 'deskripsi']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('jurusan', 'public');
        }

        if ($request->hasFile('ikon')) {
            $data['ikon'] = $request->file('ikon')->store('jurusan', 'public');
        }

        Jurusan::create($data);

        // Sesuaikan dengan nama route Anda (bisa 'admin.jurusan.index' atau 'jurusan.index')
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Jurusan $jurusan)
    // {
    //     return view('admin.jurusan.show', compact('jurusan'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $jurusan)
    {
        // Route Model Binding otomatis mencari data Jurusan berdasarkan ID
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $request->validate([
            'nama_jurusan' => 'required|string|max:255',
            'singkatan' => 'nullable|string|max:50',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ikon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['nama_jurusan', 'singkatan', 'deskripsi']);

        // Cek jika ada upload gambar baru
        if ($request->hasFile('gambar')) {
            if ($jurusan->gambar) {
                Storage::disk('public')->delete($jurusan->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('jurusan', 'public');
        }

        // Cek jika ada upload ikon baru
        if ($request->hasFile('ikon')) {
            if ($jurusan->ikon) {
                Storage::disk('public')->delete($jurusan->ikon);
            }
            $data['ikon'] = $request->file('ikon')->store('jurusan', 'public');
        }

        // Update data jurusan
        $jurusan->update($data);

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        // Hapus file gambar jika ada
        if ($jurusan->gambar) {
            Storage::disk('public')->delete($jurusan->gambar);
        }

        // Hapus file ikon jika ada
        if ($jurusan->ikon) {
            Storage::disk('public')->delete($jurusan->ikon);
        }

        // Hapus data dari database
        $jurusan->delete();

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus.');
    }
}