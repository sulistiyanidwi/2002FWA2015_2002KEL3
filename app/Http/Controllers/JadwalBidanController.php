<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bidan;
use App\Jadwal;
use App\Ruangan;
use App\JadwalBidan;


class JadwalBidanController extends Controller
{
     protected $informasi='Gagal aksi';
    public function awal ()
    {
    	// return "Hello dari JadwalController";
      $semuaJadwalBidan= JadwalBidan::all();
      return view('jadwalbidan.awal',compact('semuaJadwalBidan'));
    }
    public function tambah()
    {
       $bidan = new Bidan;
       $jadwal = new Jadwal;
   	   return view('jadwalbidan.tambah', compact('bidan','jadwal'));
    }
    public function simpan(Request $input)
    {
   	$jadwalbidan = new Jadwalbidan($input->only('id_bidan','id_jadwal'));
   	  if ($jadwalbidan->save()) $this->informasi = "Jadwal bidan Berhasil Di Simpan";
   	  return redirect('jadwalbidan')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {
        $jadwalbidan = Jadwalbidan::find($id);
        $jadwal = new jadwal;
        $bidan = new bidan;
        return view('jadwalbidan.edit',compact('jadwalbidan','bidan','jadwal'));
    }
    public function lihat($id)
    {
        $jadwalbidan = Jadwalbidan::find($id);
        return view('jadwalbidan.lihat',compact('jadwalbidan'));
    }
    public function update($id, Request $input)
    {
        $jadwalbidan = Jadwalbidan::find($id);
        $jadwalbidan->id_bidan = $input->id_bidan;
        $jadwalbidan->id_jadwal = $input->id_jadwal;
        $informasi = $jadwalbidan->save()? 'Berhasil Update Data' : 'Gagal Update Data';
       return redirect('jadwalbidan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $jadwalbidan = Jadwalbidan::find($id);
        $informasi = $jadwalbidan->delete()? 'Berhasil Hapus Data':'Gagal Hapus Data';
       return redirect('jadwalbidan')->with(['informasi'=>$informasi]);
    }

}
