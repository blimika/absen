<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AmbilLogAbsen;
use App\LogAbsen;
use App\TarikLog;
use Illuminate\Support\Facades\DB;
class AbsenController extends Controller
{
    //
    public function depan()
    {
        //
        $today = date('Y-m-d');
        /*
        select * from (select * from logabsen WHERE logabsen.absen_tgl='2020-01-21' GROUP by absen_id,absen_kode) as absen RIGHT JOIN t_pegawai on t_pegawai.absen_id = absen.absen_id ORDER by absen.absen_waktu DESC
        */
        $dataAbsen = DB::table('logabsen')->where('absen_tgl','=',$today)->get();
        //dd($dataAbsen);
        return view('absen.depan',['dataAbsen'=>$dataAbsen]);
    }
    public function index()
    {
        //
        $dataAbsen = LogAbsen::with('AbsenKode')->get();
        //dd($dataAbsen);
        return view('absen.index',['dataAbsen'=>$dataAbsen]);
    }
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
        $dataLog = new TarikLog();
        $dataLog -> pesan = $pesan_error;
        $dataLog -> status = $pesan_status;
        $dataLog -> save();
        $arr = array('data'=>$pesan_error,'status'=>$pesan_status);
        return Response()->json($arr);
    }

    public function AmbilData(Request $request)
    {

    }
}
