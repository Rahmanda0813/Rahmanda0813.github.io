<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dana;

class DanaSeeder extends Seeder
{
    public function run()
    {
        Dana::create([
            'nama_proyek' => 'Bernas',
            'jumlah_dana' => 10000000000,
            'jenis_mata_uang' => 'IDR',
            'deskripsi' => 'Deskripsi Proyek A',
        ]);

        Dana::create([
            'nama_proyek' => 'Proyek B',
            'jumlah_dana' => 150000.00,
            'jenis_mata_uang' => 'USD',
            'deskripsi' => 'Deskripsi Proyek B',
        ]);

      
    }
}

