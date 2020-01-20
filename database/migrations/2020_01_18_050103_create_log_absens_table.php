<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logabsen', function (Blueprint $table) {
            $table->bigIncrements('log_id');
            $table->string('absen_nama');
            $table->string('absen_id');
            $table->date('absen_tgl');
            $table->time('absen_waktu');
            $table->boolean('absen_kode');
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
        Schema::dropIfExists('logabsen');
    }
}
