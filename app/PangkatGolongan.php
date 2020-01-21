<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PangkatGolongan extends Model
{
    //
    public $timestamps = false;
    protected $table = "t_gol";
    protected $fillable = ["kode", "gol", "pangkat"];
}
