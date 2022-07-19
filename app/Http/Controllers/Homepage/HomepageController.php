<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\BendaKoleksi;
use App\Models\Berita;
use App\Models\Fasilitas;
use App\Models\FormKontak;
use App\Models\HeroImage;
use App\Models\JenisRuang;
use App\Models\KategoriKoleksi;
use App\Models\Profil;
use App\Models\RuangPamer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
    public function index()
    {
        $data['hero_images'] = HeroImage::orderBy('order', 'asc')->get();
        $data['agenda'] = Agenda::where('tanggal_agenda', '>=', date('Y-m-d'))->orderBy('tanggal_agenda', 'desc')->get();
        $data['berita'] = Berita::orderBy('created_at', 'desc')->limit(5)->get();
        return view('homepage.index', $data);
    }

    public function getBendaKoleksi()
    {
        $data['kategoris'] = KategoriKoleksi::orderBy('name', 'asc')->get();
        $data['count'] = BendaKoleksi::join('kategori_koleksis', 'benda_koleksis.kategori_id', '=', 'kategori_koleksis.id')
        ->orderBy('kategori_koleksi.name', 'asc')->count();
        return view('homepage.benda_koleksi.index', $data);
    }

    public function getDetailKategoriKoleksi($slug)
    {
        $data['kategori'] = KategoriKoleksi::where('slug', '=', $slug)->first();
        $data['koleksi'] = BendaKoleksi::join('kategori_koleksis', 'benda_koleksis.kategori_id', '=', 'kategori_koleksis.id')
        ->where('kategori_koleksis.slug', '=', $slug)->orderBy('benda_koleksis.nama_benda', 'asc')->paginate(12);
        return view('homepage.benda_koleksi.benda_koleksi', $data);
    }

    public function getDetailBendaKoleksi($slug)
    {
        $data['koleksi'] = BendaKoleksi::where('slug_koleksi', '=', $slug)->first();
        return view('homepage.benda_koleksi.detail', $data);
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

    public function getAgenda()
    {
        $data['agenda'] = Agenda::orderBy('created_at', 'desc')->paginate(3);
        return view('homepage.agenda.index', $data);
    }

    public function getDetailAgenda($slug)
    {
        $data['agenda'] = Agenda::where('slug', $slug)->first();
        return view('homepage.agenda.detail', $data);
    }

    public function getJenisRuang()
    {
        $data['jenis_ruangs'] = JenisRuang::orderBy('nama_jenis', 'asc')->get();
        return view('homepage.layanan.ruang_pamer.index', $data);
    }

    public function getRuangPamer($slug)
    {
        $data['jenis_ruang'] = JenisRuang::where('slug_jenis', '=', $slug)->first();
        $data['ruang_pamer'] = RuangPamer::join('jenis_ruangs', 'ruang_pamers.jenis_id', '=', 'jenis_ruangs.id')
        ->where('jenis_ruangs.slug_jenis', '=', $slug)->orderBy('ruang_pamers.name', 'asc')->paginate(12);
        return view('homepage.layanan.ruang_pamer.ruang_pamer', $data);
    }

    public function getDetailRuangPamer($slug)
    {
        $data['ruang_pamer'] = RuangPamer::where('slug', $slug)->first();
        return view('homepage.layanan.ruang_pamer.detail_ruang_pamer', $data);
    }

    public function getFasilitas()
    {
        $data['fasilitas'] = Fasilitas::all();
        return view('homepage.layanan.fasilitas.index', $data);
    }

    public function getDetailFasilitas($slug)
    {
        $data['fasilitas'] = Fasilitas::where('slug', $slug)->first();
        return view('homepage.layanan.fasilitas.detail', $data);
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
