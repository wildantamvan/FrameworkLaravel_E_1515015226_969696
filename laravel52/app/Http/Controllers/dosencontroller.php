<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;
use redirect;
class dosencontroller extends Controller
{
  public function awal()
    {
        return view('dosen.awal',['data'=>dosen::all()]);
    }

    public function tambah()
    {
        return view('dosen.tambah');
    }

    public function simpan(request $input)
    {   $dosen = new dosen();
       
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        
        $dosen->alamat = $input->alamat; 
        $dosen->pengguna_id = $input->pengguna_id; 
        
        $informasi = $dosen->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
        
    }
    public function edit($id)
    {
        $dosen = dosen::find($id);
        return view ('dosen.edit')->with (array('dosen'=>$dosen));
    }

    public function lihat($id)
    {
        $dosen=dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }

public function update($id,request $input)
{
    $dosen = dosen::find($id);
    $dosen->nama = $input->nama;
    $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
       $dosen->pengguna_id = $input->alamat;
       $informasi = $dosen->save() ? 'berhasil update data' : 'gagal update data';
       return redirect('dosen')->with(['informasi'=>$informasi]);
}
public function hapus($id)
{
    $dosen = dosen::find($id);
    $informasi = $dosen->delete() ? 'berhasil hapus data' : 'gagal hapus data';
    return redirect('dosen')->with(['informasi'=>$informasi]);
}
}
