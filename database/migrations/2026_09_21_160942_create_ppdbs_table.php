<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran')->unique();
            $table->string('nama_lengkap');
            $table->string('nisn')->unique();
            $table->string('jenis_kelamin');
            $table->string('asal_sekolah');
            $table->string('jurusan_pilihan');
            $table->string('no_hp');
            $table->text('alamat');
            $table->enum('status', ['pending', 'diterima', 'ditolak'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ppdbs');
    }
};