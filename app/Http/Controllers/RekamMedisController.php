<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\RekamRequest;

use App\RekamMedis;

use App\Ibu;


class RekamMedisController extends Controller
{
    public function awal ()
    {
      $semuarekam= RekamMedis::all();
      return view('rekammedis.awal',compact('semuarekam'));
    }
    public function tambah()
   {
      $ibu = new Ibu;
      return view('rekammedis.tambah',compact('ibu'));
   }
   public function simpan(RekamRequest $input)
   {
   	$rekammedis = new RekamMedis($input->only('id_ibu'));
   	$rekammedis->tensi_darah = $input->tensi_darah;
   	$rekammedis->gula_darah = $input->gula_darah;
   	$rekammedis->kondisi = $input->kondisi;
   	$rekammedis->kolestrol = $input->kolestrol;
   	  if ($rekammedis->save()) $this->informasi = "Rekam Medis Berhasil Di Simpan";
      return redirect('rekammedis')->with(['informasi'=>$this->informasi]);
   }
   public function edit($id)
   {
    $rekammedis = RekamMedis::find($id);
    $ibu = new ibu;
    return view('rekammedis.edit',compact('ibu','rekammedis'));
   }
   public function lihat($id)
   {
    $rekammedis = RekamMedis::find($id);
      return view('rekammedis.lihat')->with(array('rekammedis'=>$rekammedis));
    }
   public function update($id, RekamRequest $input)
   {
    $rekammedis = RekamMedis::find($id);
    $rekammedis->tensi_darah = $input->tensi_darah;
   	$rekammedis->gula_darah = $input->gula_darah;
   	$rekammedis->kondisi = $input->kondisi;
   	$rekammedis->kolestrol = $input->kolestrol;
    $informasi = $rekammedis->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('rekammedis') ->with (['Informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $rekammedis = RekamMedis::find($id);
    $informasi = $rekammedis->delete()? 'Berhasil hapus data': 'Gagal hapus Data';
      return redirect ('rekammedis') ->with (['informasi'=>$informasi]);
   }
}
