<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PolaTurunan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_polaturunan', function (Blueprint $table) {
            $table->bigIncrements('pola_turunan_id');
            $table->bigInteger('pola_id')->unsigned();
            $table->boolean('pola_turunan_hari')->nullable();
            $table->boolean('pola_turunan_libur')->default(0);
            $table->time('pola_turunan_dtg');
            $table->time('pola_turunan_plg');
            $table->boolean('pola_turunan_status')->default(1);
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
        Schema::dropIfExists('t_polaturunan');
    }
}
