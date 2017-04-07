<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
	
	protected $table = 'dosen';
	protected $fillable =['nama','nip','alamat',];

	public function pengguna(){
		return $this->belongsTo(Pengguna::class);
	}

	public function dosen_matakuliah(){
		return $this->hasMany(Dosen_Matakuliah::class);
	}

	public function getUsernameAttribute(){
		return $this->pengguna->username;
	}
	
}
