<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pengajuan', [
            'title' => 'pengajuan'
        ]);
    }

    public function getRiwayat()
    {
        return view('RiwayatClient', [
            'title' => 'RiwayatClient'
        ]);
    }
}
