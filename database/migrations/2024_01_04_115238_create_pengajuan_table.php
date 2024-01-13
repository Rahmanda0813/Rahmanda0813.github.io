<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanTable extends Migration
{
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id('idpengajuan'); 
            $table->string('jenis_pengajuan');
            $table->decimal('jumlah_dana', 20, 2); 
            $table->text('deskripsi');
            $table->string('dokumen_pendukung')->nullable();
            $table->unsignedBigInteger('user_id'); // Tambahkan kolom 'user_id'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
}

