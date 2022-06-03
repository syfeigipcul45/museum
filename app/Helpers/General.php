<?php

use App\Models\Profil;

if (!function_exists('getProfil')) {
    function getProfil()
    {
        $result = Profil::orderBy('urutan', 'asc')->get();
        return $result;
    }
}
