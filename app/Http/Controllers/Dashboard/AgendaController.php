<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AgendaController extends Controller
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
        $data['agenda'] = Agenda::orderBy('tanggal_agenda', 'desc')->get();
        return view('dashboard.agenda.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.agenda.create');
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
                'link_media' => 'required',
                'tanggal_agenda' => 'required',
            ], [
                'title.required' => 'Judul agenda harus diisi!',
                'content.required' => 'Konten agenda harus diisi!',
                'link_media.required' => 'Gambar agenda harus diisi!',
                'tanggal_agenda.required' => 'Tanggal agenda harus diisi!',
            ]);

            if($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            
            $data = [
                "author_id" => Auth::user()->id,
                "title" => $request->title,
                "slug" => Str::slug($request->title, '-'),
                "content" => $request->content,
                "tanggal_agenda" => $request->tanggal_agenda,
            ];

            if ($request->hasFile('link_media')) {
                $file = $request->file('link_media');
                $path = Storage::disk('public')->putFileAs('agenda', $file, time()."_".$file->getClientOriginalName());
                $data['link_media'] = url('/') . '/storage/' . $path;
            }

            Agenda::create($data);
            Session::flash('success', 'Data Berhasil Tersimpan');

            return redirect()->route('dashboard.event.index');
            
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
        $data['agenda'] = Agenda::find($id);
        return view('dashboard.agenda.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['agenda'] = Agenda::find($id);
        return view('dashboard.agenda.edit', $data);
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
        $agenda = Agenda::find($id);

        $updateData = [
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title, '-'),
            "tanggal_agenda" => $request->tanggal_agenda,
        ];

        if ($request->hasFile('link_media')) {
            $file = $request->file('link_media');
            $path = Storage::disk('public')->putFileAs('agenda', $file, time()."_".$file->getClientOriginalName());

            Storage::disk('public')->delete('/agenda/' . basename($agenda->link_media));
            $updateData['link_media'] = url('/') . '/storage/' . $path;;
        } else {
            $updateData['link_media'] = $request->old_link_media;
        }

        $agenda->update($updateData);
        Session::flash('success', 'Data Berhasil Diubah');

        return redirect()->route('dashboard.event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();
        Storage::disk('public')->delete('/agenda/' . basename($agenda->link_media));
        Session::flash('success', 'Data Berhasil Dihapus');

        return redirect()->back();
    }
}
