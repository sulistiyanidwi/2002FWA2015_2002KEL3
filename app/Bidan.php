<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidan extends Model
{
    protected $table = 'bidan';
    // protected $fillable = ['nama','tgl'];
    protected $guarded = ['id'];
    public function jadwal()
	{
		return $this->hasMany('App\jadwal','id_jadwal');
	}
	
	public function jadwalbidan()
	{
		return $this->hasOne(JadwalBidan::class);
	}
	public function bayi()
	{
		return $this->hasMany(bayi::class);
	}
}
