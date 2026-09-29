<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    // Tambahkan baris ini agar model tahu nama tabel yang benar di database
    protected $table = 'pengumumans';

    protected $fillable = [
        'judul',
        'slug',
        'isi',
        'status'
    ];
}