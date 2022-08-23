<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\FormKontak;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadmin|admin');
    }

    public function index()
    {
        $data['comments'] = FormKontak::orderBy('created_at', 'desc')->get();
        return view('dashboard.komentar.index', $data);
    }

    public function show($id)
    {
        $data['comment'] = FormKontak::find($id);
        return view('dashboard.komentar.show', $data);
    }
}
