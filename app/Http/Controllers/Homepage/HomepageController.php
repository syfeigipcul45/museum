<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\RuangPamer;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('homepage.index');
    }

    public function ruangPamer()
    {
        $data['ruang_pamers'] = RuangPamer::orderBy('name', 'asc')->get();
        return view('homepage.layanan.ruang_pamer', $data);
    }
}
