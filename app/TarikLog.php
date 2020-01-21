<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarikLog extends Model
{
    //
    protected $table = "tariklog";
    protected $fillable = ["pesan", "status"];
}
