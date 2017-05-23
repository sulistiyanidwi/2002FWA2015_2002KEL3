<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    protected $table = 'ayah';
    //protected $fillable = ['nama','alamat','tlp'];
    protected $guarded = ['id'];
    public function ibu()
	{
		return $this->hasOne('App\ibu','id_ayah');
	}
}
