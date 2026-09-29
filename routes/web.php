<?php

use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\PpdbController;
use App\Http\Controllers\Admin\EkskulController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PublicPpdbController;
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
// ROUTE PPDB ONLINE PUBLIK (FORMULIR PENDAFTARAN)
// ==========================================
Route::get('/ppdb-online', [PublicPpdbController::class, 'create'])->name('ppdb.public.create');
Route::post('/ppdb-online', [PublicPpdbController::class, 'store'])->name('ppdb.public.store');

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
// ROUTE PANEL ADMIN
// ==========================================
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // Kelola Berita (parameter 'berita' diperlukan karena singular bawaan 'beritum' tidak cocok dengan binding controller)
    Route::resource('berita', BeritaController::class)
        ->except(['show'])
        ->parameters(['berita' => 'berita']);

    // Kelola Jurusan
    Route::resource('jurusan', JurusanController::class)->except(['show']);

    // Kelola Pengumuman
    Route::resource('pengumuman', PengumumanController::class)->except(['show']);

    // Kelola Guru & Staf
    Route::resource('guru', GuruController::class)->except(['show']);

    // Kelola Mitra Industri (DUDI)
    Route::resource('mitra', MitraController::class)->except(['show']);

    // Kelola Fasilitas Sekolah
    Route::resource('fasilitas', FasilitasController::class)->except(['show']);

    // Kelola Ekstrakurikuler
    Route::resource('ekskul', EkskulController::class)->except(['show']);

    // Kelola Galeri Kegiatan
    Route::resource('galeri', GaleriController::class)->except(['show']);

    // Kelola PPDB Online (tanpa create/store/edit karena data dibuat dari formulir publik)
    Route::get('ppdb/export', [PpdbController::class, 'export'])->name('ppdb.export');
    Route::get('ppdb', [PpdbController::class, 'index'])->name('ppdb.index');
    Route::get('ppdb/{ppdb}', [PpdbController::class, 'show'])->name('ppdb.show');
    Route::patch('ppdb/{ppdb}/status', [PpdbController::class, 'updateStatus'])->name('ppdb.status');
    Route::delete('ppdb/{ppdb}', [PpdbController::class, 'destroy'])->name('ppdb.destroy');
});

require __DIR__.'/auth.php';
