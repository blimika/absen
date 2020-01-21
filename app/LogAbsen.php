<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogAbsen extends Model
{
    //
    protected $table = 'logabsen';
    protected $fillable = ["absen_nama", "absen_id", "absen_tgl","absen_waktu","absen_kode"];
    public function AbsenKode()
    {
        return $this->belongsTo('App\KodeAbsen', 'absen_kode', 'kode_id');
    }
    public function Pegawai()
    {
        return $this->belongsTo('App\tPegawai', 'absen_id', 'absen_id');
    }
}
