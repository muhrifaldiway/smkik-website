<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ekskuls', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ekskul');
            $table->string('pembina')->nullable();
            $table->string('jadwal')->nullable(); // Contoh: Setiap Hari Jumat, 15:30 WIB
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ekskuls');
    }
};