<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    //
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
    // protected $guarded = ['id'];

    public function Dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function Matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }

       public function Jadwal_Matakuliah()
    {
        return $this->hasMany(Jadwal_Matakuliah::class);
    }

    public function getNamadosenAttribute(){
        return $this->dosen->nama;
    }

    public function getNipdosenAttribute(){
        return $this->dosen->nip;
    }
    
    public function getTitlematakuliahAttribute(){
        return $this->matakuliah->title;
    }

    public function listDosenDanMatakuliah()
    {
        $out = [];
        foreach ($this->all() as $dsnMtk) {
            $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} {$dsnMtk->dosen->nip} (Matakuliah {$dsnMtk->matakuliah->title})";
        }
        return $out;
    }
}
































