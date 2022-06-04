<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
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
        $data['profil'] = Profil::orderby('urutan', 'asc')->get();
        return view('dashboard.profil.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Profil::latest()->first();
        if ($count == null) {
            $urutan = 1;
        } else {
            $urutan = ($count->id + 1);
        }

        try {
            $validator = Validator::make($request->all(), [
                'submenu' => 'required',
                'link_media' => 'required',
                'deskripsi' => 'required'
            ], [
                'submenu.required' => 'Nama submenu harus diisi!',
                'deskripsi.required' => 'Deskripsi harus diisi!',
                'link_media.required' => 'Gambar harus diisi!'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $data = [
                "submenu" => $request->submenu,
                "deskripsi" => $request->deskripsi,
                "slug" => Str::slug($request->submenu),
                "urutan" => $urutan
            ];

            if ($request->hasFile('link_media')) {
                $file = $request->file('link_media');
                $path = Storage::disk('public')->putFileAs('profil', $file, time()."_".$file->getClientOriginalName());
                $data['link_media'] = url('/') . '/storage/' . $path;
            }

            Profil::create($data);
            Session::flash('success', 'Data Berhasil Tersimpan');

            return redirect()->route('dashboard.profil.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Ada sesuatu yang salah di server!'.' '.$exception->getMessage());
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
        $data['profil'] = Profil::find($id);
        return view('dashboard.profil.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['profil'] = Profil::find($id);
        return view('dashboard.profil.edit', $data);
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
        $profil = Profil::find($id);
        try {
            $validator = Validator::make($request->all(), [
                'submenu' => 'required',
                'deskripsi' => 'required'
            ], [
                'submenu.required' => 'Nama submenu harus diisi!',
                'deskripsi.required' => 'Deskripsi harus diisi!',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $updateData = [
                "submenu" => $request->submenu,
                "deskripsi" => $request->deskripsi,
                "slug" => Str::slug($request->submenu)
            ];

            if ($request->hasFile('link_media')) {
                $file = $request->file('link_media');
                $path = Storage::disk('public')->putFileAs('profil', $file, time()."_".$file->getClientOriginalName());

                Storage::disk('public')->delete('/profil/' . basename($profil->link_media));
                $updateData['link_media'] = url('/') . '/storage/' . $path;;
            } else {
                $updateData['link_media'] = $request->old_link_media;
            }

            $profil->update($updateData);
            Session::flash('success', 'Data Berhasil Diubah');

            return redirect()->route('dashboard.profil.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Ada sesuatu yang salah di server!'.' '.$exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil = Profil::find($id);
        $profil->delete();
        Storage::disk('public')->delete('/profil/' . basename($profil->link_media));
        Session::flash('success', 'Data Berhasil Dihapus');

        return redirect()->back();
    }

    public function increase($id)
    {
        $profil = Profil::find($id);

        if ($profil->urutan > 1) {
            $profil->urutan = $profil->urutan - 1;
            $profil->save();
            Session::flash('success', 'Urutan Berhasil Naik');
        } else {
            Session::flash('error', 'Urutan Mencapai Batas Naik');
        }

        return redirect(route('dashboard.profil.index'));
    }

    public function decrease($id)
    {
        $profil = Profil::find($id);
        $profil->urutan = $profil->urutan + 1;
        $profil->save();
        Session::flash('success', 'Urutan Berhasil Turun');
        return redirect(route('dashboard.profil.index'));
    }
}
