<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwalmatakuliah;

class jadwalmatakuliahcontroller extends Controller
{
  
   public function awal(){
    	return "hallo dari jadwalmatakuliah controller";
    }

    public function tambah()
    {
    	return $this->simpan();
}

    public function simpan()
    {
    	$jadwalmatakuliah = new jadwalmatakuliah();
    	$jadwalmatakuliah -> mahasiswa_id = 3;
    	$jadwalmatakuliah -> ruangan_id = 1;
    	$jadwalmatakuliah -> dosenmatakuliah_id = 20;
        
        $jadwalmatakuliah -> save(); 
return "data jadwalmatakuliah dengan {$jadwalmatakuliah->id} telah disimpan";
    }
  
}
