<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AmbilLogAbsen;
use App\LogAbsen;
class AbsenController extends Controller
{
    //
    public function getabsen()
    {
        //
        $h = new AmbilLogAbsen();
        //$hasil = AmbilLogAbsen->hari_ini();
        $hasil = $h -> hari_ini();
        if ($hasil['status'] == true) 
        {
            //input ke database
            /*
            $arrData[] = array(
						 'absen_id' => $isi[0],
						 'absen_nama' => $isi[1],
						 'absen_tgl' => $tgl[0],
						 'absen_waktu' => $tgl[1],
						 'absen_kode'=> intval($isi[4])
					 );
            */
            foreach($hasil['data'] as $r)
            {
                $count = LogAbsen::where([['absen_id','=',$r['absen_id']],['absen_nama','=',$r['absen_nama']],['absen_tgl','=',$r['absen_tgl']],['absen_waktu','=',$r['absen_waktu']],['absen_kode','=',$r['absen_kode']]])->count();
                if ($count>0) {
                    //sudah di input
                }
                else {
                    //input ke database;
                    $data = new LogAbsen();
                    $data->absen_id = $r['absen_id'];
                    $data->absen_nama = $r['absen_nama'];
                    $data->absen_tgl = $r['absen_tgl'];
                    $data->absen_waktu = $r['absen_waktu'];
                    $data->absen_kode = $r['absen_kode'];
                    $data->save();
                }
            }
            $pesan_error = 'Data log sebanyak '. $hasil['jumlah_data'] .' sudah diproses';
            $pesan_status = true;
        }
        else {
            $pesan_error='Data tidak tersedia';
            $pesan_status=false;
        }
        $arr = array('data'=>$pesan_error,'status'=>$pesan_status);
        return Response()->json($arr);
    }

    public function AmbilData(Request $request)
    {

    }
}
