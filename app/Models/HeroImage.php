<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'link_hero',
        'link_image',
        'url',
        'order'
    ];
}
