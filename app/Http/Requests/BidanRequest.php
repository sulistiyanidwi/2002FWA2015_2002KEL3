<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
class BidanRequest extends Request
{
	public function authorize()
	{
		return true;
	}
	public function rules()
	{
		$validasi=[
			'nama'=>'required',
			'nik'=>'required|numeric|digits:10',
			'alamat'=>'required',
			'tlp'=>'required|numeric|digits:12',
			'tgl'=>'required',
		];
		if($this->is('bidan/tambah')){
			$validasi['password']='required';
		}
		return $validasi;
	}
}