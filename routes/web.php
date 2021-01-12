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

//memanggil method get pada Object Route NamaObject::nama_method
Route::get('/welcome', function () { //get merupakan cara melakukan pemanggilan /welcome dengan diperbolehkan diketik parameternya
    return view('welcome'); //menampilkan file dengan nama welcome.blade.php yang ada di folder view
})->name('welcome');

//public/halo ---> route/web.php ---> coba.blade.php
Route::get('/halo', function () { return view('coba'); })->name('halo') ;

//route pegawai

Route::get('web', 'PegawaiController@coba');

Route::get('pegawai', 'PegawaiController@index');

Route::get('/pegawai/tambah','PegawaiController@tambah');
//perintah untuk menjalankan method tambah yang ada dalam controller PegawaiController

Route::post('/pegawai/store','PegawaiController@store');
//karena kita mengirimkan data melalui form ke route /pegawai/store

Route::get('/pegawai/edit/{id}','PegawaiController@edit');
//data id yang dikirimkan pada url kita disebut {id}
//perintahkan untuk menjalankan method edit pada controller PegawaiController.php

Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/pegawai/read/{id}','PegawaiController@read');


//route mutasi

Route::get('mutasi', 'MutasiController@indexMutasi');

Route::post('/mutasi/storeMutasi','MutasiController@storeMutasi');

Route::get('/mutasi/editMutasi/{id}','MutasiController@editMutasi');

Route::post('/mutasi/updateMutasi','MutasiController@updateMutasi');

Route::get('/mutasi/hapusMutasi/{id}','MutasiController@hapusMutasi');

Route::get('/mutasi/tambahMutasi','MutasiController@tambahMutasi');

Route::get('/mutasi/cari','MutasiController@cari');


//route bolpen

Route::get('/bolpen','BolpenController@indexBolpen');

Route::get('/bolpen/tambahBolpen','BolpenController@tambahBolpen');

Route::post('/bolpen/storeBolpen','BolpenController@storeBolpen');

Route::get('/bolpen/editBolpen/{id}','BolpenController@editBolpen');

Route::post('/bolpen/updateBolpen','BolpenController@updateBolpen');

Route::get('/bolpen/hapusBolpen/{id}','BolpenController@hapusBolpen');

Route::get('/bolpen/cari','BolpenController@cari');


//route mahasiswa

Route::get('/mahasiswa','MahasiswaController@indexMahasiswa');

Route::get('/mahasiswa/tambahMahasiswa','MahasiswaController@tambahMahasiswa');

Route::post('/mahasiswa/storeMahasiswa','MahasiswaController@storeMahasiswa');

Route::get('/mahasiswa/hapusMahasiswa/{id}','MahasiswaController@hapusMahasiswa');
