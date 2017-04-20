<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


use App\Http\Requests\Request;

class RuanganRequest extends Request
{
    //
public function authorize()
{
	return true;
}

public function rules()
{
	$validasi = [
	'title'=>'required'
	
	];
if($this->is('ruangan/tambah')){
	
}
return $validasi;
}

}

