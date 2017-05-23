<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    // protected $fillable = ['nama'];
    protected $guarded = ['id'];
    public function jadwal()
	{
		return $this->hasMany('jadwal','id_ruangan');
	}
}
