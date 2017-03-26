<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class mahasiswacontroller extends Controller
{
   public function awal(){
    	return "hallo dari mahasiswa controller";
    }

    public function tambah()
    {
    	return $this->simpan();
}

    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa -> nama = 'Sajid Muhammad Wildan';
        $mahasiswa -> nim = '1515015226';
        $mahasiswa -> alamat = 'dirumah bukan dikosan';
    	$mahasiswa -> pengguna_id = 1;
        
        $mahasiswa -> save(); 
return "data mahasiswa dengan nama {$mahasiswa->nama} dan nim {$mahasiswa->nim} telah disimpan";
    }

}
