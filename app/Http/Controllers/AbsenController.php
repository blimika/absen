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
        //$today = '2020-01-21';
        /*
        select * from t_pegawai LEFT join (SELECT log_id as m_id, absen_id as masuk_id, absen_tgl as masuk_tgl, absen_waktu as masuk_waktu from logabsen where logabsen.absen_tgl='2020-01-21' and logabsen.absen_kode=0 GROUP by absen_id,absen_kode) as masuk on t_pegawai.absen_id=masuk.masuk_id left join (SELECT log_id as p_id, absen_id as plg_id, absen_tgl as plg_tgl, absen_waktu as plg_waktu from logabsen where logabsen.absen_tgl='2020-01-21' and logabsen.absen_kode=1 GROUP by absen_id,absen_kode) as pulang on t_pegawai.absen_id=pulang.plg_id order by masuk.masuk_waktu DESC
        */
        $dataAbsen = DB::table('t_pegawai')
                            ->leftJoin(\DB::Raw("(select log_id as m_id,absen_id as masuk_id, absen_tgl as masuk_tgl, absen_waktu as masuk_waktu from logabsen where absen_tgl='$today' and logabsen.absen_kode=0 group by absen_id,absen_kode) as masuk"),'t_pegawai.absen_id','=','masuk.masuk_id')
                            ->leftJoin(\DB::Raw("(SELECT log_id as p_id, absen_id as plg_id, absen_tgl as plg_tgl, absen_waktu as plg_waktu from logabsen where logabsen.absen_tgl='$today' and logabsen.absen_kode=1 GROUP by absen_id,absen_kode) as pulang"),'t_pegawai.absen_id','=','pulang.plg_id')
                            ->where('t_pegawai.aktif','=',1)
                            ->orderBy('masuk.masuk_waktu','desc')->get();
        //dd($dataAbsen);
        $dataLog = TarikLog::orderBy('created_at','desc')->first();
        return view('absen.depan',['dataAbsen'=>$dataAbsen,'dataLog'=>$dataLog]);
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
