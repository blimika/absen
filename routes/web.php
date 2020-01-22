<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('start');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pegawai/provinsi/sync/{kodeprov}', 'TPegawaiController@sync')->name('pegawaiprov.sync');
Route::get('/getabsen', 'AbsenController@getabsen')->name('absen.sync');
Route::get('/absen/getdata', 'AbsenController@getdata')->name('getdata');
Route::get('/pegawai/list','TPegawaiController@index')->name('pegawai.list');
Route::get('/absen/list','AbsenController@index')->name('absen.list');
Route::get('/','AbsenController@depan')->name('absen.depan');
Route::post('/pegawai/simpan','TPegawaiController@simpan')->name('pegawai.simpan');
Route::post('/absen/ambildata', 'AbsenController@AmbilData')->name('absen.ambildata');
Route::get('/absen/pegawai/{tanggal?}', function($tanggal=0) {
    $ctrl = new \App\Http\Controllers\AbsenController();
    return $ctrl->presensi($tanggal);
})->name('absen.presensi');
