<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\KategoriKoleksi;
use App\Models\RuangPamer;
use Illuminate\Http\Request;



class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['berita'] = Berita::count();
        $data['agenda'] = Agenda::count();
        // $data['model'] = RuangPamer::count();
        $data['kategori'] = KategoriKoleksi::orderBy('name', 'asc')->get();
        return view('dashboard.dashboard.index', $data);
    }
}
