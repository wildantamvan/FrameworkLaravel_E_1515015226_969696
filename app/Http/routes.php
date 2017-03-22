<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('/public/{publik}', function ($publik) {
    return "hi haha $publik";
    //return view('public');

});

Route::get('pengguna','penggunacontroller@awal'); 

Route::get('pengguna/tambah','penggunacontroller@tambah');

Route::get('pengguna/{pengguna}','penggunacontroller@lihat');
Route::get('pengguna/simpan','penggunacontroller@simpan');
Route::get('pengguna/edit/{pengguna}','penggunacontroller@edit');
Route::post('pengguna/edit/{pengguna}','penggunacontroller@update');
Route::get('pengguna/edit/{pengguna}','penggunacontroller@hapus');










Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal'); 

Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');

Route::get('dosen','dosencontroller@awal'); 

Route::get('dosen/tambah','dosencontroller@tambah');



Route::get('matakuliah/{matakuliah}','matakuliahcontroller@lihat');
Route::get('matakuliah/simpan','matakuliahcontroller@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahcontroller@edit'); 
Route::post('matakuliah/edit/{matakuliah}','matakuliahcontroller@update');
Route::get('matakuliah','matakuliahcontroller@hapus'); 




Route::get('matakuliah','matakuliahcontroller@awal'); 


Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
//==============================================================
Route::get('jadwalmatakuliah','jadwalmatakuliahcontroller@awal'); 

Route::get('jadwalmatakuliah/tambah','jadwalmatakuliahcontroller@tambah');
//==============================================================



Route::post('ruangan/simpan','ruangancontroller@simpan');

Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::get('ruangan/edir/{ruangan}','ruangancontroller@update');

Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus'); 



Route::get('ruangan','ruangancontroller@awal'); 

Route::get('ruangan/tambah','ruangancontroller@tambah');

Route::get('mahasiswa','mahasiswacontroller@awal'); 

Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('/rubik/{publiks?}', function ($publiks = "test") {
    return "berita $publiks belum dibaca";
});
