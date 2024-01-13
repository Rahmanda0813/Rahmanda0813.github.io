<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pendaftaran', [
            'title' => 'pendaftaran'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => ['required', 'string', 'max:12', 'unique:users'],
            'name' => ['required', 'string', 'max:45'],
            'jenis_kelamin' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'tgl_lahir' => ['required', 'date'],
            'agama' => ['required', 'string'],
            'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'max:255'],
            'jenis_kartu_atm' => ['required', 'string'],
            'no_rek' => ['nullable', 'string'],
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'registration successful, please login');
        return redirect('/login')->with('success', 'registration successful, please login');
    }
}

