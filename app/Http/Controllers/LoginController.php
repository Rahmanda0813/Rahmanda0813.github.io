<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->is_admin) {
                return redirect('/DataPengajuan');
            }

            return redirect()->intended('/pengajuan');
        }

        return back()->with('loginError', 'Login failed');
    }
}
