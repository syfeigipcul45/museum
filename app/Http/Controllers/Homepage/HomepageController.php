<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\RuangPamer;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('homepage.index');
    }

    public function getProfil($slug)
    {
        $data['profil'] = Profil::where('slug', $slug)->first();
        return view('homepage.profil.detail', $data);
    }

    public function getBerita()
    {
        $data['berita'] = Berita::orderBy('created_at', 'asc')->paginate(3);
        return view('homepage.berita.index', $data);
    }

    public function getDetailBerita($slug)
    {
        $data['berita'] = Berita::where('slug', $slug)->first();
        return view('homepage.berita.detail', $data);
    }

    public function getRuangPamer()
    {
        $data['ruang_pamer'] = RuangPamer::orderBy('name', 'asc')->paginate(6);
        return view('homepage.layanan.ruang_pamer', $data);
    }

    public function getDetailRuangPamer($slug)
    {
        $data['ruang_pamer'] = RuangPamer::where('slug', $slug)->first();
        return view('homepage.layanan.detail_ruang_pamer', $data);
    }

    public function getFasilitas()
    {
        return view('homepage.layanan.fasilitas');
    }

    public function getKontak()
    {
        return view('homepage.kontak.index');
    }
    
}
