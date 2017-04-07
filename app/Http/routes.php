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
Route::post('pengguna/simpan','penggunacontroller@simpan');
Route::get('pengguna/edit/{pengguna}','penggunacontroller@edit');
Route::post('pengguna/edit/{pengguna}','penggunacontroller@update');
Route::get('pengguna/hapus/{pengguna}','penggunacontroller@hapus');


Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah'); 
Route::get('dosen_matakuliah/{dosen_matakuliah}','dosen_matakuliahcontroller@lihat');
Route::post('dosen_matakuliah/simpan','dosen_matakuliahcontroller@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahcontroller@hapus');


Route::get('matakuliah','matakuliahcontroller@awal'); 
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
Route::post('matakuliah/simpan','matakuliahcontroller@simpan');

Route::get('matakuliah/{matakuliah}','matakuliahcontroller@lihat');


Route::get('matakuliah/edit/{matakuliah}','matakuliahcontroller@edit'); 
Route::post('matakuliah/edit/{matakuliah}','matakuliahcontroller@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahcontroller@hapus'); 






//==============================================================
Route::get('jadwalmatakuliah','jadwalmatakuliahcontroller@awal'); 

Route::get('jadwalmatakuliah/tambah','jadwalmatakuliahcontroller@tambah');
Route::post('jadwalmatakuliah/simpan','jadwalmatakuliahcontroller@simpan');
Route::get('jadwalmatakuliah/{jadwalmatakuliah}','jadwal_matakuliahcontroller@lihat');
Route::get('jadwalmatakuliah/edit/{jadwalmatakuliah}','jadwalmatakuliahcontroller@edit');
Route::post('jadwalmatakuliah/edit/{jadwalmatakuliah}','jadwalmatakuliahcontroller@update');
Route::get('jadwalmatakuliah/hapus/{jadwalmatakuliah}','jadwalmatakuliahcontroller@hapus');
//==============================================================



Route::get('ruangan','ruangancontroller@awal');
 
Route::get('ruangan/tambah','ruangancontroller@tambah');
Route::post('ruangan/simpan','ruangancontroller@simpan');
Route::get('ruangan/{ruangan}','ruangancontroller@lihat');
Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','ruangancontroller@update');

Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus'); 
/*
================================================
*/

Route::get('dosen','dosencontroller@awal');
 
Route::get('dosen/tambah','dosencontroller@tambah');
Route::post('dosen/simpan','dosencontroller@simpan');
Route::get('dosen/{dosen}','dosencontroller@lihat');
Route::get('dosen/edit/{dosen}','dosencontroller@edit');
Route::post('dosen/edit/{dosen}','dosencontroller@update');

Route::get('dosen/hapus/{dosen}','dosencontroller@hapus'); 
/*===========================================*/
Route::get('mahasiswa','mahasiswacontroller@awal'); 

Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');
Route::post('mahasiswa/simpan','mahasiswacontroller@simpan');

Route::get('mahasiswa/{mahasiswa}','mahasiswacontroller@lihat');

Route::get('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswacontroller@hapus');




Route::get('/rubik/{publiks?}', function ($publiks = "test") {
    return "berita $publiks belum dibaca";
});
