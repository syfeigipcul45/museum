<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\JenisRuang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class JenisRuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jenis_ruang'] = JenisRuang::orderBy('nama_jenis', 'asc')->get();
        return view('dashboard.ruang_pamer.jenis_ruang.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ruang_pamer.jenis_ruang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama_jenis' => 'required'
            ], [
                'nama_jenis.required' => 'Jenis ruang harus diisi!'
            ]);

            if($validator->fails()){
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $data = [
                "nama_jenis" => $request->nama_jenis,
                'slug_jenis' => Str::slug($request->nama_jenis, '-'),
            ];
            JenisRuang::create($data);
            Session::flash('success', 'Data Berhasil Tersimpan');

            return redirect()->route('dashboard.jenis_ruang.index');
        } catch (\Exception $th) {
            return redirect()->back()->with('error', 'Ada sesuatu yang salah di server!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['jenis_ruang'] = JenisRuang::find($id);
        return view('dashboard.ruang_pamer.jenis_ruang.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jenis_ruang = JenisRuang::find($id);

        $updateData = [
            "nama_jenis" => $request->nama_jenis,
            "slug_jenis" => Str::slug($request->nama_jenis, '-'),
        ];

        $jenis_ruang->update($updateData);
        Session::flash('success', 'Data Berhasil Diubah');

        return redirect()->route('dashboard.jenis_ruang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis_ruang = JenisRuang::find($id);
        $jenis_ruang->delete();
        return redirect()->back();
    }
}
