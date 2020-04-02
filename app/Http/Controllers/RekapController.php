<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tPegawai;
use App\TarikLog;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon\Carbon;
use App\Helpers\Generate;
use App\Helpers\CekAbsen;
use App\LogAbsen;
use App\dataTanggal;

class RekapController extends Controller
{
    //
    public function RekapList()
    {
        $data_bulan = array(
            1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'
        );
        $data_pegawai = tPegawai::all();
        //dd($data_bulan);
        //bila request bulan tidak didefine buat bulan skrg
        if (request('bulan') < 1)
        {
            //bulan tidak di define
            $bulan_filter = date('m');
        }
        else 
        {
            $bulan_filter = request('bulan');
        }
        if (request('tahun') < 1)
        {
            //bulan tidak di define
            $tahun_filter = date('Y');
        }
        else 
        {
            $tahun_filter = request('tahun');
        }
        /*
        $dataAbsen = DB::table('t_pegawai')
                            ->rightJoin(\DB::Raw("(select log_id as m_id,absen_id as masuk_id, absen_tgl as masuk_tgl, absen_waktu as masuk_waktu from logabsen where month(absen_tgl)='$bulan_filter' and logabsen.absen_kode=0 group by absen_id,absen_kode) as masuk"),'t_pegawai.absen_id','=','masuk.masuk_id')
                            ->rightJoin(\DB::Raw("(SELECT log_id as p_id, absen_id as plg_id, absen_tgl as plg_tgl, absen_waktu as plg_waktu from logabsen where month(logabsen.absen_tgl)='$bulan_filter' and logabsen.absen_kode=1 GROUP by absen_id,absen_kode) as pulang"),'t_pegawai.absen_id','=','pulang.plg_id')
                            ->rightJoin(\DB::Raw("(SELECT log_id as lm_id, absen_id as lbrmsk_id, absen_tgl as lbrmsk_tgl, absen_waktu as lbrmsk_waktu from logabsen where month(logabsen.absen_tgl)='$bulan_filter' and logabsen.absen_kode=4 GROUP by absen_id,absen_kode) as lbrmsk"),'t_pegawai.absen_id','=','lbrmsk.lbrmsk_id')
                            ->rightJoin(\DB::Raw("(SELECT log_id as lp_id, absen_id as lbrplg_id, absen_tgl as lbrplg_tgl, absen_waktu as lbrplg_waktu from logabsen where month(logabsen.absen_tgl)='$bulan_filter' and logabsen.absen_kode=5 GROUP by absen_id,absen_kode) as lbrplg"),'t_pegawai.absen_id','=','lbrplg.lbrplg_id')
                            ->where('t_pegawai.aktif','=',1)
                            ->orderBy('masuk.masuk_waktu','desc')->get();
        $dataAbsen = LogAbsen::whereMonth('absen_tgl','=','3')->where('logabsen.absen_id','=','17401')->groupBy('absen_tgl','absen_kode')
        ->leftJoin('t_pegawai','logabsen.absen_id','=','t_pegawai.absen_id')
        ->get();
        */
        $dataAbsen = DB::table('t_tanggal')->whereMonth('tgl_lengkap',$bulan_filter)->whereYear('tgl_lengkap',$tahun_filter)
                    ->leftJoin(\DB::Raw("(select log_id as m_id,absen_id as masuk_id, absen_nama as masuk_nama, absen_tgl as masuk_tgl, absen_waktu as masuk_waktu from logabsen where month(absen_tgl)='$bulan_filter' and year(absen_tgl)='$tahun_filter' and logabsen.absen_kode=0 group by absen_id,absen_tgl,absen_kode) as masuk"),function($join){
                        $join->on('t_tanggal.tgl_lengkap','=','masuk.masuk_tgl')
                        ->on('t_tanggal.tgl_absen_id','=','masuk.masuk_id');
                    })
                    ->leftJoin(\DB::Raw("(SELECT log_id as p_id, absen_id as plg_id,absen_nama as plg_nama, absen_tgl as plg_tgl, absen_waktu as plg_waktu from logabsen where month(logabsen.absen_tgl)='$bulan_filter' and year(absen_tgl)='$tahun_filter' and logabsen.absen_kode=1 GROUP by absen_id,absen_tgl,absen_kode) as pulang"),function($join){
                        $join->on('t_tanggal.tgl_lengkap','=','pulang.plg_tgl')
                        ->on('t_tanggal.tgl_absen_id','=','pulang.plg_id');
                    })
                    ->leftJoin(\DB::Raw("(SELECT log_id as lm_id, absen_id as lbrmsk_id, absen_tgl as lbrmsk_tgl, absen_waktu as lbrmsk_waktu from logabsen where month(logabsen.absen_tgl)='$bulan_filter' and year(absen_tgl)='$tahun_filter' and logabsen.absen_kode=4 GROUP by absen_id,absen_tgl,absen_kode) as lbrmsk"),function($join){
                        $join->on('t_tanggal.tgl_lengkap','=','lbrmsk.lbrmsk_tgl')
                        ->on('t_tanggal.tgl_absen_id','=','lbrmsk.lbrmsk_id');
                    })
                    ->leftJoin(\DB::Raw("(SELECT log_id as lp_id, absen_id as lbrplg_id, absen_tgl as lbrplg_tgl, absen_waktu as lbrplg_waktu from logabsen where month(logabsen.absen_tgl)='$bulan_filter' and year(absen_tgl)='$tahun_filter' and logabsen.absen_kode=5 GROUP by absen_id,absen_tgl,absen_kode) as lbrplg"),function($join){
                        $join->on('t_tanggal.tgl_lengkap','=','lbrplg.lbrplg_tgl')
                        ->on('t_tanggal.tgl_absen_id','=','lbrplg.lbrplg_id');
                    })
                    ->when(request('pegawai'),function ($query){
                        return $query->where('tgl_nipbps',request('pegawai'));
                    })
                    ->get();
                        
        //dd($dataAbsen);
        return view('rekap.list',['dataAbsen'=>$dataAbsen,'dataBulan'=>$data_bulan,'pegawai'=>$data_pegawai,'bulan'=>$bulan_filter,'tahun'=>$tahun_filter]);
    }
    public function tanggalList()
    {
        $data = dataTanggal::all();
        dd($data);
    }
    public function tanggalBuat($tahun,$bulan)
    {
        $data_pegawai = tPegawai::get();
        //dd($data_pegawai);
        foreach ($data_pegawai as $row)
        {
            if ($bulan < 10)
            {
                $tanggal = $tahun.'-0'.$bulan.'-01';
            }
            else 
            {
                $tanggal = $tahun.'-'.$bulan.'-01';
            }
            $awal = Carbon::parse($tanggal)->startOfMonth()->format('Y-m-d');
            $akhir = Carbon::parse($tanggal)->endOfMonth()->format('Y-m-d');
            for ($i = $awal; $i <= $akhir; $i=Carbon::parse($i)->addDay()->format('Y-m-d'))
            {
                $count = dataTanggal::where([['tgl_lengkap','=',$i],['tgl_absen_id','=',$row->absen_id]])->count();
                if ($count == 0) 
                {
                    $data = new dataTanggal();
                    $data->tgl_lengkap = $i;
                    $data->tgl_absen_id = $row->absen_id;
                    $data->tgl_nipbps = $row->nipbps;
                    $data->tgl_nama = $row->nama;
                    $data->tgl_jabatan = $row->jabatan;
                    $data->tgl_satuankerja = $row->satuankerja;
                    $data->save();
                }
                else 
                {
                    $data = dataTanggal::where([['tgl_lengkap','=',$i],['tgl_absen_id','=',$row->absen_id]])->first();
                    $data->tgl_nama = $row->nama;
                    $data->tgl_jabatan = $row->jabatan;
                    $data->tgl_satuankerja = $row->satuankerja;
                    $data->update();
                }
            }
        }
        
        //dd($data);
        
    }
}
