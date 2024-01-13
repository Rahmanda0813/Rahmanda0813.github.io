<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    public function submit(Request $request)
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;

            $pengajuan = new Pengajuan;

            $pengajuan->jenis_pengajuan = $request->jenis_pengajuan;
            $pengajuan->jumlah_dana = $request->jumlah_dana;
            $pengajuan->deskripsi = $request->deskripsi;
            $pengajuan->user_id = $user_id;

            $pengajuan->save();

            return redirect('/RiwayatClient')->with('success', 'Pengajuan sedang diproses. Mohon tunggu konfirmasi.');
        } else {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
        }
    }
}

