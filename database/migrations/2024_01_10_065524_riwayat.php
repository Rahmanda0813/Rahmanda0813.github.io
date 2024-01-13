<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class riwayat extends Migration
{
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('nik')->unique();
            $table->string('jenis_kartu_atm')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('jenis_pengajuan');
            $table->decimal('jumlah_dana', 20, 2);
            $table->text('deskripsi');
            $table->enum('status', ['Diterima', 'Ditolak'])->default('Diterima'); 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat');
    }
}

