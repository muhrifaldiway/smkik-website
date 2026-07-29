<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'gambar',
    ];
}
