<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPengajuanTable extends Migration
{
    public function up()
    {
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->string('name')->after('idpengajuan');
            $table->string('jenis_kartu_atm')->after('name')->nullable();
            $table->string('no_rek')->after('jenis_kartu_atm')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('jenis_kartu_atm');
            $table->dropColumn('no_rek');
        });
    }
}

