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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pegawai/provinsi/sync/{kodeprov}', 'TPegawaiController@sync')->name('pegawaiprov.sync');
Route::get('/getabsen', 'AbsenController@getabsen')->name('absen.sync');
Route::get('/getdata', 'AbsenController@getdata')->name('getdata');
