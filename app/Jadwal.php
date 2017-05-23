<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $guarded = ['id'];

    public function bidan(){
    	return $this->belongsTo('App\bidan','id_bidan');
    }
    public function ruangan(){
    	return $this->belongsTo('App\ruangan','id_ruangan');
    }

    public function bayi()
	{
		return $this->hasMany(bayi::class);
	}
     public function jadwalbidan()
    {
        return $this->hasOne(jadwalbidan::class);
    }
    public function WaktuTanggal(){
        $out = [];
        foreach ($this->all() as $jd) {
            $out[$jd->id] = "{$jd->waktu_operasi} Tanggal ({$jd->tanggal})";
        }
        return $out;
    }
}