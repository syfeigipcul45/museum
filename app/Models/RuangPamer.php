<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangPamer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'deskripsi',
        'link_gambar',
        'link_media',
        'jenis_id'
    ];    

    public function jenisId(){
        return $this->belongsTo(JenisRuang::class, 'jenis_id');
    }
}
