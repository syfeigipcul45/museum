<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'favicon',
        'phone',
        'email',
        'address',
        'whatsapp',
        'facebook',
        'instagram',
        'youtube',
        'profile_url',
        'profile_title',
        'profile_description'
    ];
}
