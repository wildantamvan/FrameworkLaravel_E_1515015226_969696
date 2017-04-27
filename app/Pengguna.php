<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Password\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Pengguna extends Model implements AuthenticatableContract
{
	use Authenticatable;
    protected $table ='pengguna';
protected $fillable = ['username', 'password'];

public function dosen(){
	return $this->hasOne(Dosen::class);
}

    public function mahasiswa(){
    return $this->hasOne(Mahasiswa::class);

    }
public function peran(){
	return $this->belongstoMany(peran::class);
}
}
