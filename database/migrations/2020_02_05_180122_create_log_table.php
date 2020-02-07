<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->bigIncrements('log_id');
            $table->String('nim_pengguna');
            $table->foreign('nim_pengguna')->references('nim')->on('mahasiswa');
            $table->String('kegiatan');
            $table->String('no_pc');
            $table->DateTime('waktu_masuk');
            $table->DateTime('waktu_keluar');
            $table->timestamp('last_modified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log');
    }
}
