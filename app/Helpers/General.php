<?php

use App\Models\BendaKoleksi;
use App\Models\Pengaturan;
use App\Models\Profil;
use Illuminate\Support\Str;

if (!function_exists('getPengaturan')) {
    function getPengaturan()
    {
        $result = Pengaturan::first();
        return $result;
    }
}

if (!function_exists('getProfil')) {
    function getProfil()
    {
        $result = Profil::orderBy('urutan', 'asc')->get();
        return $result;
    }
}

if (!function_exists('convertWhatsappNumber')) {
    function convertWhatsappNumber($whatsapp)
    {
        $whatsappNumber = null;
        if (substr($whatsapp, 0, 2) == '08') {
            $whatsappNumber = '628' . substr($whatsapp, 2);
        } elseif (substr($whatsapp, 0, 3) == '+62') {
            $whatsappNumber = '62' . substr($whatsapp, 3);
        } else {
            $whatsappNumber = $whatsapp;
        }
        return $whatsappNumber;
    }
}

if (!function_exists('shrinkText')) {
    function shrinkText($text)
    {
        return Str::limit($text, 500, '...');
    }
}

if (!function_exists('getDeskripsi')) {
    function getDeskripsi($text)
    {
        return Str::limit($text, 50, '...');
    }
}

if (!function_exists('getCount')) {
    function getCount($kategori_id)
    {
        $result = BendaKoleksi::join('kategori_koleksis', 'benda_koleksis.kategori_id', '=', 'kategori_koleksis.id')
        ->where('benda_koleksis.kategori_id', '=', $kategori_id)
        ->orderBy('kategori_koleksi.name', 'asc')->count();
        return $result;
    }
}
