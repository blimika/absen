<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogAbsen extends Model
{
    //
    protected $table = 'logabsen';
    protected $fillable = ["absen_nama", "absen_id", "absen_tgl","absen_waktu","absen_kode"];
    public function KodeAbsen()
    {
        return $this->hasMany('App\KodeAbsen', 'kode_id', 'absen_kode');
    }
}
