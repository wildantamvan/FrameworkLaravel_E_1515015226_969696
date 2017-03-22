<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;
class ruangancontroller extends Controller
{
    public function awal(){
    	return "hallo dari ruangan controller";
    }

    public function tambah()
    {
    	return $this->simpan();
}

    public function simpan()
    {
    	$ruangan = new ruangan();
    	$ruangan -> title = 'Ruang 404';
        
        $ruangan -> save(); 
return "data ruangan dengan kode {$ruangan->title} telah disimpan";
    }

}
