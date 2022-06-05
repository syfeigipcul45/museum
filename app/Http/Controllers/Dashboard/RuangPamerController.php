<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\RuangPamer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RuangPamerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ruang_pamers'] = RuangPamer::orderBy('name', 'asc')->get();
        return view('dashboard.layanan.ruang_pamer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layanan.ruang_pamer.create');
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
                'name' => 'required',
                'deskripsi' => 'required',
                'link_media' => 'required'
            ], [
                'name.required' => 'Nama gambar harus diisi!',
                'deskripsi.required' => 'Deskripsi gambar harus diisi!',
                'link_media.required' => 'File gambar harus diisi!'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $data = [
                "name" => $request->name,
                'slug' => Str::slug($request->name, '-'),
                "deskripsi" => $request->deskripsi,
                "link_media" => $request->link_media,
            ];

            if ($request->hasFile('link_media')) {
                $file = $request->file('link_media');
                $path = Storage::disk('public')->putFileAs('ruang-pamer', $file, time() . "_" . $file->getClientOriginalName());
                $data['link_media'] = url('/') . '/storage/' . $path;
            }

            RuangPamer::create($data);
            Session::flash('success', 'Data Berhasil Tersimpan');

            return redirect()->route('dashboard.ruang_pamer.index');
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
        $data['ruang_pamer'] = RuangPamer::find($id);
        return view('dashboard.layanan.ruang_pamer.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['ruang_pamer'] = RuangPamer::find($id);
        return view('dashboard.layanan.ruang_pamer.edit', $data);
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
        $ruang_pamer = RuangPamer::find($id);

        $updateData = [
            "name" => $request->name,
            'slug' => Str::slug($request->name, '-'),
            "deskripsi" => $request->deskripsi,
        ];

        if ($request->hasFile('link_media')) {
            $file = $request->file('link_media');
            $path = Storage::disk('public')->putFileAs('ruang-pamer', $file, time() . "_" . $file->getClientOriginalName());

            Storage::disk('public')->delete('/ruang-pamer/' . basename($ruang_pamer->link_media));
            $updateData['link_media'] = url('/') . '/storage/' . $path;;
        } else {
            $updateData['link_media'] = $request->old_link_media;
        }

        $ruang_pamer->update($updateData);
        Session::flash('success', 'Data Berhasil Diubah');

        return redirect()->route('dashboard.ruang_pamer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruang_pamer = RuangPamer::find($id);
        $ruang_pamer->delete();
        Storage::disk('public')->delete('/ruang-pamer/' . basename($ruang_pamer->link_media));
        Session::flash('success', 'Data Berhasil Dihapus');

        return redirect()->back();
    }
}
