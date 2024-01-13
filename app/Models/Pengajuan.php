<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $primaryKey = 'idpengajuan';
    protected $table = 'pengajuan';
    protected $fillable = [
        'jenis_pengajuan',
        'jumlah_dana',
        'deskripsi',
        'dokumen_pendukung',
        'user_id',  // Pastikan kolom ini ada di tabel pengajuan
        'nama',  // Pastikan kolom ini ada di tabel pengajuan
        'jenis_kartu_atm',  // Pastikan kolom ini ada di tabel pengajuan
        'no_rek',  // Pastikan kolom ini ada di tabel pengajuan
    ];

    public function riwayats()
    {
        return $this->hasMany(Riwayat::class, 'jenis_pengajuan');
    }
}
