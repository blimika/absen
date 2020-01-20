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
        //dd($hasil);
        var_dump($hasil);
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
