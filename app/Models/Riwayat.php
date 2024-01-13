<?php
// app/Models/Riwayat.php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model

{
    use HasFactory;

    protected $table = 'riwayat'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id'; // Sesuaikan dengan primary key yang digunakan
    protected $fillable = [
        'user_id',
        'name',
        'nik',
        'jenis_kartu_atm',
        'no_rek',
        'jenis_pengajuan',
        'jumlah_dana',
        'deskripsi',
        'status',
    ];

    // Define relasi dengan model User jika diperlukan
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


