<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dana extends Model
{
    protected $table = 'dana';
    protected $fillable = ['nama_proyek', 'jumlah_dana', 'jenis_mata_uang', 'deskripsi'];

    
}
