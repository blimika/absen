<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataPegawaiCommunity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pegawai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('absen_id',18)->nullable();
            $table->string('nipbps',9)->unique();
            $table->string('nipbaru',18)->unique();
            $table->string('email')->nullable();
            $table->string('username')->nullable();
            $table->string('jabatan',20);
            $table->string('satuankerja');
            $table->string('urlfoto');
            $table->boolean('jk')->unsigned();
            $table->string('gol',3)->nullable();
            $table->boolean('pegawaihonor')->default(0);
            $table->boolean('aktif')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pegawai');
    }
}
