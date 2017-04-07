<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalmatakuliah extends Model
{
    protected $table='jadwalmatakuliah';

protected $fillable=['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

public function ruangan(){
	return $this->belongsTo(ruangan::class); /*perlu ada relasi balik dari ruangan sehingga didefinisikan kembali class ruangan menggunakan fungsi belongsTo */
}


public function dosen_matakuliah(){
	return $this->belongsTo(dosen_matakuliah::class); /*perlu ada relasi balik dari dosensehingga didefinisikan kembali class dosen menggunakan fungsi belongsTo
*/
}
public function mahasiswa(){
	return $this->belongsTo(mahasiswa::class); /*perlu ada relasi balik dari dosensehingga didefinisikan kembali class dosen menggunakan fungsi belongsTo
*/
}



 public function getNamadsnAttribute(){
         return $this->dosen_matakuliah->dosen->nama;
    }
     public function getNipdsnAttribute(){
         return $this->dosen_matakuliah->dosen->nip;
     }
     public function getMKdsnAttribute(){
         return $this->dosen_matakuliah->matakuliah->title;
     }
    
     public function getNamamhsAttribute(){
         return $this->mahasiswa->nama;
     }

     public function getNimAttribute(){
         return $this->mahasiswa->nim;
     }
     public function getTitleruanganAttribute(){
         return $this->ruangan->title;
     }

    

    
     public function listDosenMatakuliahDanMahasiswaDanRuangan()
    {
      $out = [];
      foreach ($this->all() as $jdwlMtk) {
          $out[$jdwlMtk->id] = "{$jdwlMtk->dosen_matakuliah->dosen->nama} {$jdwlMtk->dosen_matakuliah->dosen->nama} {$jdwlMtk->mahasiswa->nama} (Ruangan {$jdwlMtk->ruangan->title})";
      }
      return $out;
     }
    
} 
