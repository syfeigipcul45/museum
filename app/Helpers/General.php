<?php

use App\Models\Profil;
use Illuminate\Support\Str;

if (!function_exists('getProfil')) {
    function getProfil()
    {
        $result = Profil::orderBy('urutan', 'asc')->get();
        return $result;
    }
}

if (!function_exists('shrinkText')) {
    function shrinkText($text)
    {
        return Str::limit($text, 225, '...');
    }
}