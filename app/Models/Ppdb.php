<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $table = 'ppdbs';

    protected $fillable = [
        'no_pendaftaran',
        'nama_lengkap',
        'nisn',
        'jenis_kelamin',
        'asal_sekolah',
        'jurusan_pilihan',
        'no_hp',
        'alamat',
        'status',
    ];
}