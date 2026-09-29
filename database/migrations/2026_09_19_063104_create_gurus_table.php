<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->nullable();
            $table->string('jabatan'); // Contoh: Kepala Sekolah, Guru Mapel, Staff TU
            $table->string('mapel')->nullable(); // Mata pelajaran yang diampu
            $table->string('foto')->nullable();
            $table->enum('kategori', ['guru', 'staf'])->default('guru');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};