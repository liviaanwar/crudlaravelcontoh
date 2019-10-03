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

Route::get('halo', function(){
    return "HAI!";
});

Route::get('blog','BlogController@home');
Route::get('blog/tentang','BlogController@tentang');
Route::get('blog/kontak','BlogController@kontak');

Route::get('dosen', 'DosenController@index');

Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');

Route::post('/formulir/proses', 'PegawaiController@proses');

//CRUD

Route::get('mahasiswa', 'MahasiswaController@index');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::POST('mahasiswa/store', 'MahasiswaController@store');
Route::get('mahasiswa/edit/{id}','MahasiswaController@edit');
Route::post('mahasiswa/update', 'MahasiswaController@update');
Route::get('mahasiswa/hapus/{id}','MahasiswaController@hapus');


Route::get('excel','ExcelController@index');
Route::post('excel/import','ExcelController@import');
