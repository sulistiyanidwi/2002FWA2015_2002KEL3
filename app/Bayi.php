<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    protected $table = 'bayi';
    protected $guarded = ['id'];

    public function ibu()
	{
		return $this->belongsTo('App\Ibu','id_ibu');
	}
	public function ayah()
	{
		return $this->belongsTo('App\Ayah','id_ayah');
	}

	public function keterangan()
	{
		return $this->belongsTo('App\Keterangan','id_keterangan');
	}
	public function jadwalbidan()
	{
		return $this->belongsTo('App\jadwalbidan','id_jadwalbidan');
	}
	public function ruangan()
	{
		return $this->belongsTo('App\Ruangan','id_ruangan');
	}
	  public function bidan()
	{
		return $this->belongsTo('App\bidan','id_bidan');
	}

}
