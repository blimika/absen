<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JadwalKerjaPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_jadwalkerja', function (Blueprint $table) {
            $table->bigIncrements('kerja_id');
            $table->string('kerja_absenid',18)->nullable();
            $table->string('kerja_nipbps',9)->nullable();
            $table->string('kerja_nipbaru',18)->nullable();
            $table->date('kerja_tgl');
            $table->int('kerja_kode',3)->default(1);
            $table->time('jadwal_datang');
            $table->time('jadwal_pulang');
            $table->time('jadwal_lembur_datang')->nullable();
            $table->time('jadwal_lembur_pulang')->nullable();
            $table->time('kerja_datang')->nullable();
            $table->time('kerja_pulang')->nullable();
            $table->time('kerja_lembur_datang')->nullable();
            $table->time('kerja_lembur_pulang')->nullable();
            $table->string('kerja_ket')->nullable();
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
        Schema::dropIfExists('t_jadwalkerja');
    }
}
