<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodeAbsen extends Model
{
    //
    protected $table = 't_kodeabsen';
    public function AbsenKode()
    {
        return $this->belongsTo('App\LogAbsen', 'absen_kode', 'kode_id');
    }
}
