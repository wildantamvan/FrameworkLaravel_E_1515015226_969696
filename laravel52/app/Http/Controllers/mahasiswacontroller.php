<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
use app\pengguna;
class mahasiswacontroller extends Controller
{
     public function awal()
    {
        return view('mahasiswa.awal',['data'=>mahasiswa::all()]);
    }

    public function tambah()
    {
        return view('mahasiswa.tambah');
    }

    public function simpan(request $input)
    {   $mahasiswa = new mahasiswa();
       
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nim = $input->nim;
        
        $mahasiswa->alamat = $input->alamat; 
        $mahasiswa->pengguna_id = $input->pengguna_id; 
        
        $informasi = $mahasiswa->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);
        
    }
    public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view ('mahasiswa.edit')->with (array('mahasiswa'=>$mahasiswa));
    }

    public function lihat($id)
    {
        $mahasiswa=mahasiswa::find($id);
        return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }

public function update($id,request $input)
{
    $mahasiswa = mahasiswa::find($id);
    $mahasiswa->nama = $input->nama;
    $mahasiswa->nip = $input->nip;
        $mahasiswa->alamat = $input->alamat;
       $mahasiswa->pengguna_id = $input->alamat;
       $informasi = $mahasiswa->save() ? 'berhasil update data' : 'gagal update data';
       return redirect('mahasiswa')->with(['informasi'=>$informasi]);
}
public function hapus($id)
{
    $mahasiswa = mahasiswa::find($id);
    $informasi = $mahasiswa->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('mahasiswa')->with(['informasi'=>$informasi]);
}
}
