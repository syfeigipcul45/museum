<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\FormKontak;
use App\Models\Profil;
use App\Models\RuangPamer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
    public function index()
    {
        $data['agenda'] = Agenda::where('tanggal_agenda', '>=', date('Y-m-d'))->orderBy('tanggal_agenda', 'desc')->get();
        $data['berita'] = Berita::orderBy('created_at', 'desc')->limit(5)->get();
        return view('homepage.index', $data);
    }

    public function getProfil($slug)
    {
        $data['profil'] = Profil::where('slug', $slug)->first();
        return view('homepage.profil.detail', $data);
    }

    public function getBerita()
    {
        $data['berita'] = Berita::orderBy('created_at', 'desc')->paginate(3);
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

    public function storeForm(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'isi_pesan' => $request->isi_pesan
        ];

        FormKontak::create($data);
        Session::flash('success', 'Pesan Telah Terkirim');

        return redirect()->route('homepage.kontak.index');
    }
}
