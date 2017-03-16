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

Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal'); 

Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');

Route::get('dosen','dosencontroller@awal'); 

Route::get('dosen/tambah','dosencontroller@tambah');

Route::get('matakuliah','matakuliahcontroller@awal'); 

Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
//==============================================================
Route::get('jadwalmatakuliah','jadwalmatakuliahcontroller@awal'); 

Route::get('jadwalmatakuliah/tambah','jadwalmatakuliahcontroller@tambah');
//==============================================================

Route::get('ruangan','ruangancontroller@awal'); 

Route::get('ruangan/tambah','ruangancontroller@tambah');

Route::get('mahasiswa','mahasiswacontroller@awal'); 

Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('/rubik/{publiks?}', function ($publiks = "test") {
    return "berita $publiks belum dibaca";
});
