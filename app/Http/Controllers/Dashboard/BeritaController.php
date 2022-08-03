<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
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
        $data['berita'] = Berita::latest()->get();
        return view('dashboard.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berita.create');
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
                'title' => 'required',
                'content' => 'required',
                'link_media' => 'required'
            ], [
                'title.required' => 'Judul berita harus diisi!',
                'content.required' => 'Konten berita harus diisi!',
                'link_media.required' => 'Gambar berita harus diisi!'
            ]);

            if($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            
            $data = [
                "author_id" => Auth::user()->id,
                "title" => $request->title,
                "slug" => Str::slug($request->title, '-'),
                "content" => $request->content,
            ];

            if ($request->hasFile('link_media')) {
                $file = $request->file('link_media');
                $path = Storage::disk('public')->putFileAs('berita', $file, time()."_".$file->getClientOriginalName());
                $data['link_media'] = url('/') . '/storage/' . $path;
            }

            Berita::create($data);
            Session::flash('success', 'Data Berhasil Tersimpan');

            return redirect()->route('dashboard.berita.index');
            
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
        $data['berita'] = Berita::find($id);
        return view('dashboard.berita.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['berita'] = Berita::find($id);
        return view('dashboard.berita.edit', $data);
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
        $berita = Berita::find($id);

        $updateData = [
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title, '-'),
        ];

        if ($request->hasFile('link_media')) {
            $file = $request->file('link_media');
            $path = Storage::disk('public')->putFileAs('berita', $file, time()."_".$file->getClientOriginalName());

            Storage::disk('public')->delete('/berita/' . basename($berita->link_media));
            $updateData['link_media'] = url('/') . '/storage/' . $path;;
        } else {
            $updateData['link_media'] = $request->old_link_media;
        }

        $berita->update($updateData);
        Session::flash('success', 'Data Berhasil Diubah');

        return redirect()->route('dashboard.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        Storage::disk('public')->delete('/berita/' . basename($berita->link_media));
        Session::flash('success', 'Data Berhasil Dihapus');

        return redirect()->back();
    }
}
