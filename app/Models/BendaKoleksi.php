<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BendaKoleksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_benda',
        'slug',
        'kategori_id',
        'deskripsi',
        'link_media'
    ];

    public function kategoriId()
    {
        return $this->belongsTo(KategoriKoleksi::class, 'kategori_id');
    }
}
