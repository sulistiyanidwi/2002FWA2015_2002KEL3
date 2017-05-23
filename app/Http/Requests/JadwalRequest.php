<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
class JadwalRequest extends Request
{
	public function authorize()
	{
		return true;
	}
	public function rules()
	{
		$validasi=[
			'waktu_operasi'=>'required',
			'tanggal'=>'required',
			'id_ruangan'=>'required',
		];
		return $validasi;
	}
}