<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    protected $table = 'ibu';
    protected $fillable = ['nama','alamat','tlp'];
    protected $guarded = ['id'];
    public function rekammedis()
	{
		return $this->hasMany('App\Rekammedis','id_rekammedis');
	}

	public function bayi()
	{
		return $this->hasMany('App\Bayi','id_bayi');
	}
	public function ayah(){
		return $this->belongsTo('App\ayah','id');
	}
	public function AyahDanIbu(){
		$out = [];
		foreach ($this->all() as $ab) {
			$out[$ab->id] ="{$ab->nama} dan {$ab->namaayah}";
		}
		return $out;
	}
}
