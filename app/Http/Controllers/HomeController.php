<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; // Memanggil model Berita
use App\Models\Jurusan; // Memanggil model Jurusan

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil 3 berita terbaru dari database
        $berita_terbaru = Berita::latest()->take(3)->get();
        $jurusans = Jurusan::all(); // Mengambil semua data jurusan dari database

        // Mengirim data berita ke view home.blade.php
        return view('home', compact('berita_terbaru', 'jurusans'));
    }

    // TAMBAHKAN FUNGSI INI
    public function detailBerita($slug)
    {
        // Mencari berita berdasarkan slug (URL)
        $berita = Berita::where('slug', $slug)->firstOrFail();
        
        // Membuka halaman detail dan mengirimkan datanya
        return view('berita-detail', compact('berita'));
    }

    // Fungsi untuk menampilkan halaman Profil Sekolah
    public function profil()
    {
        return view('profil');
    }
}