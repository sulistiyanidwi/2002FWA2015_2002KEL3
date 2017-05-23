<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
class RekamRequest extends Request
{
	public function authorize()
	{
		return true;
	}
	public function rules()
	{
		$validasi=[
			'id_ibu'=>'required',
			'tensi_darah'=>'required',
			'gula_darah'=>'required',
			'kondisi'=>'required',
			'kolestrol'=>'required',
		];
		if($this->is('rekammedis/tambah')){
			$validasi['password']='required';
		}
		return $validasi;
	}
}