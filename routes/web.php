<?php

use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// ==========================================
// ROUTE FRONTEND (HALAMAN PENGUNJUNG)
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/berita/{slug}', [HomeController::class, 'detailBerita'])->name('berita.detail');

// ==========================================
// ROUTE DASHBOARD ADMIN
// ==========================================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
    Route::resource('jurusan', JurusanController::class)->except(['show']);
    Route::get('jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::put('jurusan/{jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::delete('jurusan/{jurusan}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');
    Route::get('jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::post('jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::get('jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    
});

require __DIR__.'/auth.php';