<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\HeroImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HeroImageController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hero_images'] = HeroImage::orderBy('order', 'asc')->get();
        return view('dashboard.hero-images.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hero-images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = HeroImage::latest()->first();
        if ($count == null) {
            $order = 1;
        } else {
            $order = ($count->order + 1);
        }

        try {
            $validator = Validator::make($request->all(), [
                'link_hero' => 'required|max:5000',
                'judul' => 'required',
                'deskripsi' => 'required|max:500',
            ], [
                'link_hero.required' => 'Gambar harus diisi!',
                'link_hero.max' => 'Ukuran gambar maskimal 5MB',
                'judul.required' => 'Judul harus diisi!',
                'deskripsi.required' => 'Deskripsi harus diisi!',
                'deskripsi.max' => 'Karakter maksimal 200 karakter'
            ]);

            if($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            
            $data = [
                "judul" => $request->judul,
                "deskripsi" => $request->deskripsi,
                "url" => $request->url,
                "order" => $order
            ];

            if ($request->hasFile('link_hero')) {
                $file_hero = $request->file('link_hero');
                $path_hero = Storage::disk('public')->putFileAs('hero-image', $file_hero, time()."_".$file_hero->getClientOriginalName());
                $data['link_hero'] = url('/') . '/storage/' . $path_hero;
            }

            if ($request->hasFile('link_image')) {
                $file_image = $request->file('link_image');
                $path_image = Storage::disk('public')->putFileAs('hero-image/img', $file_image, time()."_".$file_image->getClientOriginalName());
                $data['link_image'] = url('/') . '/storage/' . $path_image;
            }

            HeroImage::create($data);
            Session::flash('success', 'Data Berhasil Tersimpan');

            return redirect()->route('dashboard.hero_images.index');
            
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
        $data['hero_image'] = HeroImage::find($id);
        return view('dashboard.hero-images.edit', $data);
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
        $hero_image = HeroImage::find($id);

        try {
            $validator = Validator::make($request->all(), [
                'link_hero' => 'max:5000',
                'judul' => 'required',
                'deskripsi' => 'required|max:500'
            ], [
                'link_hero.max' => 'Ukuran gambar maskimal 5MB',
                'judul.required' => 'Judul harus diisi!',
                'deskripsi.required' => 'Deskripsi harus diisi!',
                'deskripsi.max' => 'Karakter maksimal 500 karakter'
            ]);

            if($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $updateData = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                "url" => $request->url
            ];

            if ($request->hasFile('link_hero')) {
                $file_hero = $request->file('link_hero');
                $path_hero = Storage::disk('public')->putFileAs('hero-image', $file_hero, time()."_".$file_hero->getClientOriginalName());
    
                Storage::disk('public')->delete('/hero-image/' . basename($hero_image->link_hero));
                $updateData['link_hero'] = url('/') . '/storage/' . $path_hero;;
            } else {
                $updateData['link_hero'] = $request->old_link_hero;
            }

            if ($request->hasFile('link_image')) {
                $file_image = $request->file('link_image');
                $path_image = Storage::disk('public')->putFileAs('hero-image/img', $file_image, time()."_".$file_image->getClientOriginalName());
    
                Storage::disk('public')->delete('/hero-image/img' . basename($hero_image->link_image));
                $updateData['link_image'] = url('/') . '/storage/' . $path_image;;
            } else {
                $updateData['link_image'] = $request->old_link_image;
            }

            $hero_image->update($updateData);
            Session::flash('success', 'Data Berhasil Diubah');

            return redirect()->route('dashboard.hero_images.index');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Ada sesuatu yang salah di server!');
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
        $hero_image = HeroImage::find($id);
        $hero_image->delete();
        Storage::disk('public')->delete('/hero-image/' . basename($hero_image->link_hero));
        Storage::disk('public')->delete('/hero-image/img' . basename($hero_image->link_image));
        Session::flash('success', 'Data Berhasil Dihapus');

        return redirect()->back();
    }

    public function increase($id)
    {
        $hero = HeroImage::find($id);

        if ($hero->order > 1) {
            $hero->order = $hero->order - 1;
            $hero->save();
            Session::flash('success', 'Urutan Berhasil Naik');
        } else {
            Session::flash('error', 'Urutan Mencapai Batas Naik');
        }

        return redirect(route('dashboard.hero_images.index'));
    }

    public function decrease($id)
    {
        $hero = HeroImage::find($id);
        $hero->order = $hero->order + 1;
        $hero->save();
        Session::flash('success', 'Urutan Berhasil Turun');
        return redirect(route('dashboard.hero_images.index'));
    }
}
