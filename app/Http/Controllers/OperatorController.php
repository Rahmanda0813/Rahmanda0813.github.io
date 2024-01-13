<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\User;
use App\Models\Dana;

class OperatorController extends Controller
{
    public function index()
    {
        return view('operator', [
            'title' => 'operator',
        ]);
    }

    public function getDataPengajuan()
    {
        $pengajuanData = Pengajuan::all();
        $danaBernas = $this->getDanaBernas();
    
        return view('DataPengajuan', [
            'title' => 'Data Pengajuan',
            'pengajuanData' => $pengajuanData,
            'danaBernas' => $danaBernas,
        ]);
    }

    public function getDataPengguna()
    {
        try {
            
            $userData = User::all();
    
            return view('DataPengguna', [
                'title' => 'Data Pengguna',
                'userData' => $userData,
            ]);
        } catch (\Exception $e) {
            
            dd($e->getMessage());
        }
    }
    

    public function getPersentase()
    {
        return view('Persentase', [
            'title' => 'Persentase',
        ]);
    }

    public function getriwayat()
    {
        return view('riwayat', [
            'title' => 'riwayat',
        ]);
    }
    public function getDanaBernas()
    {
        $danaBernas = Dana::where('nama_proyek', 'Bernas')->first();
        return $danaBernas;
    }
    

    public function hapusPengguna($id)
    {
    try {
        
        $id = (int)$id;
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan.');
        }
        $user->delete();

        return redirect()->back()->with('success', 'Pengguna berhasil dihapus.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Gagal menghapus pengguna. ' . $e->getMessage());
    }
    }

    public function TampilData($id)
    {
    $data = User::findOrFail($id);
    return view('TampilData', compact('data'));
    }

    public function UpdateData(Request $request, $id)
    {
    try {
        $data = User::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('DataPengguna')->with('success', 'Pengguna berhasil diperbarui.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Gagal memperbarui pengguna. ' . $e->getMessage());
    }
    }
    public function tolak($idpengajuan)
{
    try {
        $pengajuanData = Pengajuan::find($idpengajuan);

        if (!$pengajuanData) {
            return redirect()->route('DataPengajuan')->with('error', 'Pengajuan tidak ditemukan.');
        }

        $pengajuanData->delete();

        return redirect()->route('DataPengajuan')->with('success', 'Pengajuan ditolak.');
    } catch (\Exception $e) {
        return redirect()->route('DataPengajuan')->with('error', 'Gagal menolak pengajuan. ' . $e->getMessage())->withInput();
    }
}

public function terima($idpengajuan)
{
    try {
        $pengajuanData = Pengajuan::find($idpengajuan);

        if (!$pengajuanData) {
            return redirect()->route('DataPengajuan')->with('error', 'Pengajuan tidak ditemukan.');
        }

        $danaBernas = $this->getDanaBernas();

        if ($pengajuanData->jumlah_dana > $danaBernas->jumlah_dana) {
            return redirect()->route('DataPengajuan')->with('error', 'Pengajuan tidak dapat diterima. Dana Bernas tidak mencukupi.');
        }

        $danaBernas->jumlah_dana -= $pengajuanData->jumlah_dana;
        $danaBernas->save();

        $pengajuanData->delete();

        return redirect()->route('DataPengajuan')->with('success', 'Pengajuan diterima. Dana dikurangi.');
    } catch (\Exception $e) {
        return redirect()->route('DataPengajuan')->with('error', 'Gagal menerima pengajuan. ' . $e->getMessage());
    }
}
};
