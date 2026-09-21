<?php

use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\PpdbController;
use App\Http\Controllers\Admin\EkskulController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

// ==========================================
// ROUTE FRONTEND (HALAMAN PENGUNJUNG)
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');

Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
})->name('struktur-organisasi');

Route::get('/fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');
// HALAMAN SEMUA BERITA
Route::get('/berita', [HomeController::class, 'berita'])
    ->name('berita');

Route::get('/berita/{slug}', [HomeController::class, 'detailBerita'])->name('berita.detail');

// ==========================================
// ROUTE DASHBOARD ADMIN
// ==========================================
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// ==========================================
// ROUTE PENGATURAN PROFIL (BAWAAN BREEZE)
// ==========================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

// ==========================================
// ROUTE PANEL ADMIN (BERITA & JURUSAN)
// ==========================================
Route::middleware(['auth'])->prefix('admin')->group(function () {
    
    // Kelola Berita (Manual Route)
    Route::get('berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('berita/{berita}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    
    // Kelola Jurusan (Otomatis)
    // Cukup 1 baris ini, Laravel otomatis membuatkan rute index, create, store, edit, update, dan destroy dengan awalan nama 'jurusan.'
    Route::resource('jurusan', JurusanController::class);
    Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::post('jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::get('jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::put('jurusan/{jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::delete('jurusan/{jurusan}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');
    // Route::get('jurusan/{jurusan}', [JurusanController::class, 'show'])->name('jurusan.show');

    Route::resource('pengumuman', PengumumanController::class);
    Route::get('pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
    Route::post('pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store');
    Route::get('pengumuman/{pengumuman}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::put('pengumuman/{pengumuman}', [PengumumanController::class, 'update'])->name('pengumuman.update');
    Route::delete('pengumuman/{pengumuman}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

    Route::resource('guru', GuruController::class);
    Route::get('guru', [GuruController::class, 'index'])->name('guru.index');
    Route::get('guru/create', [GuruController::class, 'create'])->name('guru.create');
    Route::post('guru', [GuruController::class, 'store'])->name('guru.store');
    Route::get('guru/{guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
    Route::put('guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
    Route::delete('guru/{guru}', [GuruController::class, 'destroy'])->name('guru.destroy');

    Route::resource('mitra', MitraController::class);
    Route::get('mitra', [MitraController::class, 'index'])->name('mitra.index');
    Route::get('mitra/create', [MitraController::class, 'create'])->name('mitra.create');
    Route::post('mitra', [MitraController::class, 'store'])->name('mitra.store');
    Route::get('mitra/{mitra}/edit', [MitraController::class, 'edit'])->name('mitra.edit');
    Route::put('mitra/{mitra}', [MitraController::class, 'update'])->name('mitra.update');
    Route::delete('mitra/{mitra}', [MitraController::class, 'destroy'])->name('mitra.destroy');

    // Route Fasilitas Sekolah
    Route::resource('fasilitas', FasilitasController::class);
    Route::get('fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
    Route::get('fasilitas/create', [FasilitasController::class, 'create'])->name('fasilitas.create');
    Route::post('fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
    Route::get('fasilitas/{fasilita}/edit', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
    Route::put('fasilitas/{fasilita}', [FasilitasController::class, 'update'])->name('fasilitas.update');
    Route::delete('fasilitas/{fasilita}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');

    // Route PPDB Online
    Route::resource('ppdb', PpdbController::class)->except(['create', 'store', 'edit', 'update']);
    Route::patch('ppdb/{ppdb}/status', [PpdbController::class, 'updateStatus'])->name('ppdb.status');
    Route::get('ppdb', [PpdbController::class, 'index'])->name('ppdb.index');
    Route::delete('ppdb/{ppdb}', [PpdbController::class, 'destroy'])->name('ppdb.destroy');
    Route::get('ppdb/create', [PpdbController::class, 'create'])->name('ppdb.create');
    Route::post('ppdb', [PpdbController::class, 'store'])->name('ppdb.store');
    Route::get('ppdb/{ppdb}', [PpdbController::class, 'show'])->name('ppdb.show');

    // Route Ekstrakurikuler
    Route::resource('ekskul', EkskulController::class);
    Route::get('ekskul', [EkskulController::class, 'index'])->name('ekskul.index');
    Route::get('ekskul/create', [EkskulController::class, 'create'])->name('ekskul.create');
    Route::post('ekskul', [EkskulController::class, 'store'])->name('ekskul.store');
    Route::get('ekskul/{ekskul}/edit', [EkskulController::class, 'edit'])->name('ekskul.edit');
    Route::put('ekskul/{ekskul}', [EkskulController::class, 'update'])->name('ekskul.update');
    Route::delete('ekskul/{ekskul}', [EkskulController::class, 'destroy'])->name('ekskul.destroy');

});

require __DIR__.'/auth.php';