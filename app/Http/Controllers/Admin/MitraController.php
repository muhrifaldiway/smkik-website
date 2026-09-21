<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    public function index()
    {
        $mitras = Mitra::latest()->paginate(10);
        return view('admin.mitra.index', compact('mitras'));
    }

    public function create()
    {
        return view('admin.mitra.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mitra'   => 'required|string|max:255',
            'bidang_usaha' => 'required|string|max:255',
            'alamat'       => 'nullable|string',
            'kontak'       => 'nullable|string|max:100',
            'logo'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('mitra', 'public');
        }

        Mitra::create([
            'nama_mitra'   => $request->nama_mitra,
            'bidang_usaha' => $request->bidang_usaha,
            'alamat'       => $request->alamat,
            'kontak'       => $request->kontak,
            'logo'         => $logoPath,
        ]);

        return redirect()->route('mitra.index')->with('success', 'Data Mitra Industri berhasil ditambahkan.');
    }

    public function edit(Mitra $mitra)
    {
        return view('admin.mitra.edit', compact('mitra'));
    }

    public function update(Request $request, Mitra $mitra)
    {
        $request->validate([
            'nama_mitra'   => 'required|string|max:255',
            'bidang_usaha' => 'required|string|max:255',
            'alamat'       => 'nullable|string',
            'kontak'       => 'nullable|string|max:100',
            'logo'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $logoPath = $mitra->logo;
        if ($request->hasFile('logo')) {
            if ($mitra->logo && Storage::disk('public')->exists($mitra->logo)) {
                Storage::disk('public')->delete($mitra->logo);
            }
            $logoPath = $request->file('logo')->store('mitra', 'public');
        }

        $mitra->update([
            'nama_mitra'   => $request->nama_mitra,
            'bidang_usaha' => $request->bidang_usaha,
            'alamat'       => $request->alamat,
            'kontak'       => $request->kontak,
            'logo'         => $logoPath,
        ]);

        return redirect()->route('mitra.index')->with('success', 'Data Mitra Industri berhasil diperbarui.');
    }

    public function destroy(Mitra $mitra)
    {
        if ($mitra->logo && Storage::disk('public')->exists($mitra->logo)) {
            Storage::disk('public')->delete($mitra->logo);
        }
        
        $mitra->delete();
        return redirect()->route('mitra.index')->with('success', 'Data Mitra Industri berhasil dihapus.');
    }
}

