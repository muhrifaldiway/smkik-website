<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $status = $request->get('status');

        $pengumumans = Pengumuman::when($q, function ($query) use ($q) {
            $query->where('judul', 'like', "%{$q}%")
                ->orWhere('isi', 'like', "%{$q}%");
        })->when($status, function ($query) use ($status) {
            $query->where('status', $status);
        })->latest()->paginate(10)->withQueryString();

        return view('admin.pengumuman.index', compact('pengumumans', 'q', 'status'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi'   => 'required',
            'status'=> 'required|in:aktif,nonaktif',
        ]);

        Pengumuman::create([
            'judul'  => $request->judul,
            'slug'   => Str::slug($request->judul) . '-' . time(),
            'isi'    => $request->isi,
            'status' => $request->status,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi'   => 'required',
            'status'=> 'required|in:aktif,nonaktif',
        ]);

        $slug = $pengumuman->judul !== $request->judul
            ? Str::slug($request->judul) . '-' . time()
            : $pengumuman->slug;

        $pengumuman->update([
            'judul'  => $request->judul,
            'slug'   => $slug,
            'isi'    => $request->isi,
            'status' => $request->status,
        ]);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}