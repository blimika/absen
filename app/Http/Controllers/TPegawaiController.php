<?php

namespace App\Http\Controllers;

use App\tPegawai;
use Illuminate\Http\Request;
use App\Helpers\CommunityBPS;

class TPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tPegawai  $tPegawai
     * @return \Illuminate\Http\Response
     */
    public function show(tPegawai $tPegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tPegawai  $tPegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(tPegawai $tPegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tPegawai  $tPegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tPegawai $tPegawai)
    {
        //
    }

    public function sync($kodeprov)
    {
        //
        //dd($kodeprov);
        $h = new CommunityBPS('muslimin4','we9eat');
        $hasil = $h->get_list_pegawai_provinsi($kodeprov);
        $tot=0;
        if ($hasil) {
            //$banyak = count($hasil);
            for ($i=0;$i<count($hasil);$i++)
            {
                if ($i==0) {
                    //pasti kepala
                    if ($hasil[0]!=false) {
                        $count_peg = tPegawai::where('nipbps','=',$hasil[0]['nipbps'])->count();
                        if ($count_peg<1) {
                            //belum ada
                            /*
                            'nama'=>$nama,
                            'nipbps'=>$nipbps,
                            'nippanjang'=>$nippanjang,
                            'email'=>$email,
                            'username'=>$username,
                            'jabatan'=>$jabatan,
                            'satuankerja'=>$satuankerja,
                            'alamatkantor'=>$alamatkantor,
                            'urlfoto'=>$urlfoto
                            */
                            $data = new tPegawai();
                            $data->nama = $hasil[0]['nama'];
                            $data->nipbps = $hasil[0]['nipbps'];
                            $data->nipbaru = $hasil[0]['nippanjang'];
                            $data->email = $hasil[0]['email'];
                            $data->username = $hasil[0]['username'];
                            $data->jabatan = $hasil[0]['jabatan'];
                            $data->satuankerja = $hasil[0]['satuankerja'];
                            $data->urlfoto = $hasil[0]['urlfoto'];
                            $data->save();
                            $tot++;
                        }                
                        
                    }
                }
                else {
                    //langsung simpan
                    for ($j=0;$j<count($hasil[$i]);$j++)
                        {
                            $count_peg = tPegawai::where('nipbps','=',$hasil[$i][$j]['nipbps'])->count();
                            if ($count_peg<1) {
                                //belum ada
                                /*
                                'nama'=>$nama,
                                'nipbps'=>$nipbps,
                                'nippanjang'=>$nippanjang,
                                'email'=>$email,
                                'username'=>$username,
                                'jabatan'=>$jabatan,
                                'satuankerja'=>$satuankerja,
                                'alamatkantor'=>$alamatkantor,
                                'urlfoto'=>$urlfoto
                                */
                                $data = new tPegawai();
                                $data->nama = $hasil[$i][$j]['nama'];
                                $data->nipbps = $hasil[$i][$j]['nipbps'];
                                $data->nipbaru = $hasil[$i][$j]['nippanjang'];
                                $data->email = $hasil[$i][$j]['email'];
                                $data->username = $hasil[$i][$j]['username'];
                                $data->jabatan = $hasil[$i][$j]['jabatan'];
                                $data->satuankerja = $hasil[$i][$j]['satuankerja'];
                                $data->urlfoto = $hasil[$i][$j]['urlfoto'];
                                $data->save();
                                $tot++;
                            }   
                        }
                }
            }
            $pesan_error='Data pegawai sebanyak '.$tot.' sudah disync';
            $pesan_status=true;
        }
        else {
            $pesan_error='Data tidak tersedia';
            $pesan_status=false;
        }
        
        //dd($hasil);
        //var_dump($hasil);
        $arr = array('data'=>$pesan_error,'status'=>$pesan_status);
        return Response()->json($arr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tPegawai  $tPegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(tPegawai $tPegawai)
    {
        //
    }
}
