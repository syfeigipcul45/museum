<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FasilitasController extends Controller
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
        $data['fasilitas'] = Fasilitas::all();
        return view('dashboard.layanan.fasilitas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layanan.fasilitas.create');
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
                'nama_judul' => 'required',
                'deskripsi' => 'required',
                'icon'  => 'required'
            ], [
                'nama_judul.required' => 'Nama menu harus diisi!',
                'deskripsi.required' => 'Deskripsi harus diisi!',
                'icon.required' => 'Icon harus diisi!',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $data = [
                "nama_judul" => $request->nama_judul,
                "deskripsi" => $request->deskripsi,
                "slug" => Str::slug($request->nama_judul),
                "icon" => $request->icon
            ];

            // if ($request->hasFile('link_media')) {
            //     $file = $request->file('link_media');
            //     $path = Storage::disk('public')->putFileAs('profil', $file, time()."_".$file->getClientOriginalName());
            //     $data['link_media'] = url('/') . '/storage/' . $path;
            // }

            if ($request->hasFile('link_media')) {
                for ($i = 0; $i < count($request->link_media); $i++) {
                    $file = $request->file('link_media')[$i];
                    $path = Storage::disk('public')->putFileAs('fasilitas', $file, time() . "_" . $file->getClientOriginalName());
                    $image = url('/') . '/storage/' . $path;
                    array_push($images, $image);
                }
            }
            $data['link_media'] = json_encode($images);

            Fasilitas::create($data);
            Session::flash('success', 'Data Berhasil Tersimpan');

            return redirect()->route('dashboard.fasilitas.index');
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
        $data['fasilitas'] = Fasilitas::find($id);
        return view('dashboard.layanan.fasilitas.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['fasilitas'] = Fasilitas::find($id);
        return view('dashboard.layanan.fasilitas.edit', $data);
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
        $fasilitas = Fasilitas::find($id);
        try {
            $images = [];
            $validator = Validator::make($request->all(), [
                'nama_judul' => 'required',
                'deskripsi' => 'required',
                'icon'  => 'required'
            ], [
                'nama_judul.required' => 'Nama menu harus diisi!',
                'deskripsi.required' => 'Deskripsi harus diisi!',
                'icon.required' => 'Icon harus diisi!',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $updateData = [
                "nama_judul" => $request->nama_judul,
                "deskripsi" => $request->deskripsi,
                "slug" => Str::slug($request->nama_judul),
                "icon" => $request->icon
            ];

            // if ($request->hasFile('link_media')) {
            //     $file = $request->file('link_media');
            //     $path = Storage::disk('public')->putFileAs('profil', $file, time() . "_" . $file->getClientOriginalName());

            //     Storage::disk('public')->delete('/profil/' . basename($profil->link_media));
            //     $updateData['link_media'] = url('/') . '/storage/' . $path;;
            // } else {
            //     $updateData['link_media'] = $request->old_link_media;
            // }

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
                    $path = Storage::disk('public')->putFileAs('fasilitas', $file, time() . "_" . $file->getClientOriginalName());
                    Storage::disk('public')->delete('/fasilitas/' . basename($fasilitas->link_media));
                    $image = url('/') . '/storage/' . $path;
                    array_push($images, $image);
                }
            }
            // dd($images);
            $updateData['link_media'] = json_encode($images);

            $fasilitas->update($updateData);
            Session::flash('success', 'Data Berhasil Diubah');

            return redirect()->route('dashboard.fasilitas.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Ada sesuatu yang salah di server!' . ' ' . $exception->getMessage());
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
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();
        Storage::disk('public')->delete('/fasilitas/' . basename($fasilitas->link_media));
        Session::flash('success', 'Data Berhasil Dihapus');

        return redirect()->back();
    }
}
