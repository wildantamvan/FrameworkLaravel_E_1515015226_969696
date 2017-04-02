<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table='ruangan';
        protected $fillable = ['title'];



public function jadwalmatakuliah(){
	return $this->hasMany(jadwalmatakuliah::class); /*jadwalmatakuliah memiliki  relasi many dengan ruangan dimana ruangan hanya menjadi entitas
*/
}

}
