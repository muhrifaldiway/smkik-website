<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PublicPpdbController extends Controller
{
    public function create()
    {
        $jurusans = Jurusan::orderBy('nama_jurusan')->get();

        return view('ppdb.create', compact('jurusans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|string|max:20|unique:ppdbs,nisn',
            'jenis_kelamin' => 'required|in:L,P',
            'asal_sekolah' => 'required|string|max:255',
            'jurusan_pilihan' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
        ]);

        do {
            $nomor = 'PPDB-'.date('Y').'-'.strtoupper(Str::random(5));
        } while (Ppdb::where('no_pendaftaran', $nomor)->exists());

        $pendaftar = Ppdb::create([
            ...$validated,
            'no_pendaftaran' => $nomor,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('ppdb.public.create')
            ->with('success', 'Pendaftaran berhasil. Simpan nomor pendaftaran Anda: '.$pendaftar->no_pendaftaran);
    }
}
