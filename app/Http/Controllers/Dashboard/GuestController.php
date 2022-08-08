<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadmin|admin');
    }

    public function index()
    {
        $data['guests'] = User::where('is_admin', '=', 0)->orderBy('created_at', 'desc')->get();
        return view('dashboard.guest.index', $data);
    }

    public function update(Request $request, $id)
    {
        $guest = User::find($id);

        $updateData = [
            "is_active" => $request->is_active
        ];

        $guest->update($updateData);

        Session::flash('success', 'Status '.$guest->name.' Berhasil Diubah');
        return redirect()->route('dashboard.guests.index');
    }

    public function destroy($id)
    {
        $guest = User::find($id);
        $guest->delete();

        Session::flash('success', 'Data Berhasil Dihapus');
        return redirect()->route('dashboard.guests.index');
    }
}
