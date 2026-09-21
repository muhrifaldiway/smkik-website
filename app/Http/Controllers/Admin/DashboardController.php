<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Ekskul;
use App\Models\Fasilitas;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Mitra;
use App\Models\Pengumuman;
use App\Models\Ppdb;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'berita' => Berita::count(),
            'pengumuman' => Pengumuman::count(),
            'jurusan' => Jurusan::count(),
            'guru' => Guru::count(),
            'mitra' => Mitra::count(),
            'fasilitas' => Fasilitas::count(),
            'ppdb' => Ppdb::count(),
            'ppdb_pending' => Ppdb::where('status', 'pending')->count(),
            'ekskul' => Ekskul::count(),
        ];

        $beritaTerbaru = Berita::latest()->take(5)->get();
        $pengumumanTerbaru = Pengumuman::latest()->take(5)->get();
        $ppdbTerbaru = Ppdb::latest()->take(5)->get();

        return view('dashboard', compact('stats', 'beritaTerbaru', 'pengumumanTerbaru', 'ppdbTerbaru'));
    }
}
