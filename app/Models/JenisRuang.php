<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisRuang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_jenis',
        'slug_jenis',
        'link_media',
        'deskripsi'
    ];
}
