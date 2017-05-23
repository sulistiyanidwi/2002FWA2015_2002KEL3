<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bayi;
use App\Ibu;
use App\JadwalBidan;
use App\Keterangan;
use App\Http\Requests\BayiRequest;
class BayiController extends Controller
{
    public function awal ()
    {
    	// return "Hello dari BayiController";
      $semuaBayi= Bayi::all();
      return view('bayi.awal',compact('semuaBayi'));
    }
    public function tambah()
   {
   	  $ibu = new ibu;
      $jadwalbidan = new JadwalBidan;
      $keterangan = new keterangan;
      return view('bayi.tambah', compact('ibu','jadwalbidan','keterangan'));
   }
   public function simpan(BayiRequest $input){
    $bayi= new bayi($input->only('nama','id_ibu','id_jadwalbidan','id_keterangan'));
        if ($bayi->save()) $this->informasi = 'Berhasil Simpan jadwal bayi ';
        return redirect('bayi')->with(['informasi'=>$this->informasi]);
   }
   public function edit($id)
   {
    $bayi = Bayi::find($id);
    $ibu = new ibu;
    $jadwalbidan = new jadwalbidan;
    $keterangan = new keterangan;
     return view('bayi.edit',compact('bayi','ibu','jadwalbidan','keterangan'));
   }        
   public function lihat($id)
   {
    $bayi = Bayi::find($id);
      return view('bayi.lihat',compact('bayi'));
    }
   public function update($id, BayiRequest $input)
   {
    $bayi = Bayi::find($id);
    $bayi->nama = $input->nama;
    $bayi->id_ibu = $input->id_ibu;
    $bayi->id_jadwalbidan = $input->id_jadwalbidan;
    $bayi->id_keterangan = $input->id_keterangan;
    $informasi = $bayi->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('bayi') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $bayi = Bayi::find($id);
    $informasi = $bayi->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('bayi') ->with (['informasi'=>$informasi]);
   }}
