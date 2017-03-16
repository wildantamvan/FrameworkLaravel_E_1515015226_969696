<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
 use App\matakuliah;

class matakuliahcontroller extends Controller
{
     public function awal(){
    	return "hallo dari matakuliah controller";
    }

    public function tambah()
    {
    	return $this->simpan();
}

    public function simpan()
    {
    	$matakuliah = new matakuliah();
    	$matakuliah -> title = 'sistem Keamanan komputer';
    	$matakuliah -> Keterangan = 'matakuliah yang mempelajari sistem keamanan komputer';
    	$matakuliah -> save(); 
return "matakuliah dengan title {$matakuliah->title} dengan Keterangan {$matakuliah->Keterangan} telah disimpan";
  
}
}