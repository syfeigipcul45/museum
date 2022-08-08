<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BendaKoleksi;
use App\Models\KategoriKoleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class BendaKoleksiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:superadmin|admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['koleksi'] = BendaKoleksi::orderBy('nama_benda', 'asc')->get();
        return view('dashboard.benda_koleksi.koleksi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategoris'] = KategoriKoleksi::orderBy('name', 'asc')->get();
        return view('dashboard.benda_koleksi.koleksi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = [];
        try {
            $validator = Validator::make($request->all(), [
                'nama_benda' => 'required',
                'deskripsi' => 'required',
                'link_media' => 'required',
                'kategori_id' => 'required'
            ], [
                'nama_benda.required' => 'Nama benda koleksi harus diisi!',
                'deskripsi.required' => 'Deskripsi harus diisi!',
                'link_media.required' => 'File foto harus diisi!',
                'kategori_id' => 'Kategori harus diisi!'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $data = [
                "nama_benda" => $request->nama_benda,
                'slug_koleksi' => Str::slug($request->nama_benda, '-'),
                "deskripsi" => $request->deskripsi,
                "kategori_id" => $request->kategori_id
                // "link_media" => $request->link_media,
            ];

            if ($request->hasFile('link_media')) {
                for ($i = 0; $i < count($request->link_media); $i++) {
                    $file = $request->file('link_media')[$i];
                    $path = Storage::disk('public')->putFileAs('benda-koleksi', $file, time() . "_" . $file->getClientOriginalName());
                    $image = url('/') . '/storage/' . $path;
                    array_push($images, $image);
                }
            }

            $data['link_media'] = json_encode($images);

            BendaKoleksi::create($data);
            Session::flash('success', 'Data Berhasil Tersimpan');

            return redirect()->route('dashboard.koleksi.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Ada sesuatu yang salah di server!' . ' ' . $exception->getMessage());
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
        $data['koleksi'] = BendaKoleksi::find($id);
        $data['kategoris'] = KategoriKoleksi::orderBy('name', 'asc')->get();
        return view('dashboard.benda_koleksi.koleksi.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['koleksi'] = BendaKoleksi::find($id);
        $data['kategoris'] = KategoriKoleksi::orderBy('name', 'asc')->get();
        return view('dashboard.benda_koleksi.koleksi.edit', $data);
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
        $images = [];
        $koleksi = BendaKoleksi::find($id);

        $updateData = [
            "nama_benda" => $request->nama_benda,
            'slug_koleksi' => Str::slug($request->nama_benda, '-'),
            "deskripsi" => $request->deskripsi,
            "kategori_id" => $request->kategori_id
        ];

        if (!empty($request->old_link_media)) {
            for ($i = 0; $i < count($request->old_link_media); $i++) {
                $file = $request->old_link_media[$i];
                $image = $file;
                array_push($images, $image);
            }
        }

        if ($request->hasFile('link_media')) {
            for ($i = 0; $i < count($request->link_media); $i++) {
                $file = $request->file('link_media')[$i];
                $path = Storage::disk('public')->putFileAs('benda-koleksi', $file, time() . "_" . $file->getClientOriginalName());
                Storage::disk('public')->delete('/benda-koleksi' . basename($koleksi->link_media));
                $image = url('/') . '/storage/' . $path;
                array_push($images, $image);
            }
        }
        // dd($images);
        $updateData['link_media'] = json_encode($images);

        $koleksi->update($updateData);
        Session::flash('success', 'Data Berhasil Diubah');

        return redirect()->route('dashboard.koleksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $koleksi = BendaKoleksi::find($id);
        foreach(json_decode($koleksi->link_media) as $key) {
            Storage::disk('public')->delete('/benda-koleksi' . basename($koleksi->link_media));
        }
        $koleksi->delete();
        return redirect()->back();
    }
}
