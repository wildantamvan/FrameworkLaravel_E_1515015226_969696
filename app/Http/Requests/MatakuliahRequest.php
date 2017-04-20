<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


use App\Http\Requests\Request;

class MatakuliahRequest extends Request
{
    //
public function authorize()
{
	return true;
}

public function rules()
{
	$validasi = [
	'title'=>'required',
	'keterangan'=>'required'
	];
if($this->is('matakuliah/tambah')){
	
}
return $validasi;
}

}

