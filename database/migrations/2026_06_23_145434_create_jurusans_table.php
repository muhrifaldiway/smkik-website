<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jurusan'); // Contoh: Teknik Komputer dan Jaringan
            $table->string('singkatan')->nullable(); // Contoh: TKJ
            $table->text('deskripsi'); // Penjelasan tentang jurusan
            $table->string('gambar')->nullable(); // Foto kegiatan jurusan
            $table->string('ikon')->nullable(); // Ikon kecil jurusan (opsional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusans');
    }
};
