<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
class BayiRequest extends Request
{
	public function authorize()
	{
		return true;
	}
	public function rules()
	{
		$validasi=[
		'nama'=>'required',
		'id_ibu'=>'required',
		'id_jadwalbidan'=>'required',
		'id_keterangan'=>'required',
		];
return $validasi;
}
}