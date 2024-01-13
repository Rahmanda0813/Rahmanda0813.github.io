<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanaTable extends Migration
{
    public function up()
    {
        Schema::create('dana', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->decimal('jumlah_dana', 20, 2); 
            $table->string('jenis_mata_uang');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dana');
    }
}

