<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwalmatakuliah;

use App\dosen;

use App\matakuliah;
/* kita use model dari dosen, matakuliah dan jadwalmatakuliah */
class jadwalmatakuliahController extends Controller
{
  
public function awal()
    {
        $Semua_Dosen_Matakuliah = jadwalMatakuliah::all();
        return view('jadwalmatakuliah.awal', compact('Semua_Dosen_Matakuliah'));
    }

    public function tambah()
    {      
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('jadwalmatakuliah.tambah',compact('dosen','matakuliah'));
        return $this->simpan();
    }

    public function simpan(Request $input)
    {
        $jadwalmatakuliah = new jadwalmatakuliah($input->only('dosen_id','matakuliah_id','mahasiswa_id'));
            if($jadwalmatakuliah->save()) $this->informasi = "Matakuliah dan Dosen Mengajar berhasil disimpan";
            return redirect('jadwalmatakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function lihat($id){
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        return view('dosen_matakuliah.lihat',compact('dosen_matakuliah'));
    }
    public function edit($id){
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosen_matakuliah.edit',compact('dosen','matakuliah','dosen_matakuliah'));
    }
    public function update($id,Request $input)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save()) $this->informasi = "Matakuliad dan Dosen Mengajar berhasil diperbarui";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id,Request $input)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        if($dosen_matakuliah->delete()) $this->informasi = "Matakuliad dan Mahasiswa berhasil dihapus";
        return redirect('dosen_matakuliah')-> with(['informasi'=>$this->informasi]);
    }
}

