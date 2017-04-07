<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwalmatakuliah;

use App\dosen;
use App\mahasiswa;
use App\ruangan;
use App\dosen_matakuliah;

/* kita use model dari dosen, matakuliah dan jadwalmatakuliah */
class jadwalmatakuliahController extends Controller
{
  protected $informasi = 'gagal melakukan aksi';
  protected $guarded = ['id'];
public function awal()
    {
        $semuajadwalmatakuliah = jadwalMatakuliah::all();
        return view('jadwalmatakuliah.awal', compact('semuajadwalmatakuliah'));
    }

    public function tambah()
    {      
        $mahasiswa = new mahasiswa;
        $ruangan = new ruangan;
        $dosen_matakuliah= new dosen_matakuliah;
        return view('jadwalmatakuliah.tambah',compact('mahasiswa','ruangan','dosen_matakuliah'));
        
    }

    public function simpan(Request $input)
    {
        $jadwalmatakuliah = new jadwalmatakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
            if($jadwalmatakuliah->save()) $this->informasi = "jadwal mahasiswa berhasil disimpan";
            return redirect('jadwalmatakuliah')->with(['informasi'=>$this->informasi]);
    }

    public function lihat($id){
        $jadwalmatakuliah = jadwalmatakuliah::find($id);
        return view('jadwalmatakuliah.lihat',compact('jadwalmatakuliah'));
    }
    public function edit($id){
        $jadwalmatakuliah = jadwalmatakuliah::find($id);
        $dosen_matakuliah = new dosen_matakuliah;
        $mahasiswa = new Mahasiswa;
        $ruangan = new ruangan;
        return view('jadwalmatakuliah.edit',compact('mahasiswa','ruangan','dosen_matakuliah','jadwalmatakuliah'));
    }
    public function update($id,Request $input)
    {
        $jadwalmatakuliah = jadwalmatakuliah::find($id);
        $jadwalmatakuliah->ruangan_id=$input->ruangan_id;
        $jadwalmatakuliah->dosen_matakuliah_id=$input->dosen_matakuliah_id;
        $jadwalmatakuliah->mahasiswa_id= $input->mahasiswa_id;
        $informasi = $jadwalmatakuliah->save() ? 'berhasil update data' : 'gagal update data';
        return redirect('jadwalmatakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id,Request $input)
    {
        $jadwalmatakuliah = jadwalmatakuliah::find($id);
        $informasi = $jadwalmatakuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('jadwalmatakuliah')-> with(['informasi'=>$informasi]);
    }
}

