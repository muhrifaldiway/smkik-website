<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusans'; // Nama tabel di database

    protected $fillable = [
        'nama_jurusan',
        'singkatan',
        'deskripsi',
        'gambar',
        'ikon',
    ];
}
