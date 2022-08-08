<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = User::where('email', $request->email)->first();
            if ($user->roles[0]->name === 'superadmin' || $user->roles[0]->name === 'admin') {
                return redirect()->intended(route('beranda'));
            } elseif ($user->roles[0]->name === "user") {
                if ($user->is_active === 1) {
                    return redirect()->intended(route('home'));
                } else {
                    return redirect()->route('login')->with('error', 'Akun anda belum aktif. Silahkan hubungi admin.');
                }
            } else {
                return redirect()->route('login')->with('error', 'Akun anda belum aktif. Silahkan hubungi admin.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Gagal Login. Pastikan email dan password anda benar.');
        }
        return redirect()->route('login')->with('error', 'Gagal Login. Pastikan email dan password anda benar.');
    }
}
