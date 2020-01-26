<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PolaKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pola_kerja', function (Blueprint $table) {
            $table->bigIncrements('pola_id');
            $table->string('pola_kode',4);
            $table->string('pola_nama',150);
            $table->string('pola_hari',20);
            $table->time('pola_dtg');
            $table->time('pola_plg');
            $table->boolean('pola_status')->default(1);
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
        Schema::dropIfExists('pola_kerja');
    }
}
