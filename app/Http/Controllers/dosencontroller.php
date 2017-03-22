<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use pp\dosen;

class dosencontroller extends Controller
{
   public function awal(){
    	return "hallo dari dosen controller";
    }

    public function tambah()
    {
    	return $this->simpan();
}

    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen -> nama = 'didi tarbutar';
    	$dosen -> nip = '14405';
    	$dosen -> alamat = 'dirumah hasil kerja kerasnya';
        $dosen -> pengguna_id = 1;
        
        $dosen -> save(); 
return "data dengan username {$dosen->nama} telah disimpan";
    }

}
