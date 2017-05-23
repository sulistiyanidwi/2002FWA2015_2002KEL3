<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalBidan extends Model
{
    protected $table = 'jadwalbidan';
    protected $guarded = ['id'];
    protected $fillable = ['id_bidan','id_jadwal'];
    public function bidan(){
    	return $this->belongsTo('App\bidan','id_bidan');
    }
    public function jadwal(){
    	return $this->belongsTo('App\jadwal','id_jadwal');
    }
    public function kelahiran(){
        $out = [];
        foreach ($this->all() as $jb) {
            $out[$jb->id] ="{$jb->jadwal->tanggal} dan {$jb->jadwal->waktu_operasi}";
        }
        return $out;
    }
    
}