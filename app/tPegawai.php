<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tPegawai extends Model
{
    //
    protected $table = 't_pegawai';
    public function LogAbsen()
    {
        return $this->oneToMany('App\tPegawai', 'absen_id', 'absen_id');
    }
}
