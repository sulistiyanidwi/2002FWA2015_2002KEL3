<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ibu;
use App\Ayah;

class IbuController extends Controller
{
   protected $informasi='Gagal aksi';
    public function awal ()
    {
    	// return "Hello dari ibuController";
      $semuaIbu= Ibu::all();
      return view('ibu.awal',compact('semuaIbu'));
    }
    public function tambah()
    {
      return view(' ibu.tambah');
    }
    public function simpan(Request $input)
    {
      $this->validate($input,[
      'nama'=>'required',
      'namaayah'=>'required',
      'alamat'=>'required',
      'tlp'=>'required|numeric|digits:12',
      ]);
        $ibu = new ibu();
        $ibu->nama  = $input->nama;
        $ibu->namaayah  = $input->namaayah;
        $ibu->alamat  = $input->alamat;
        $ibu->tlp  = $input->tlp;
        $informasi = $ibu->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
      return redirect ('ibu') ->with (['Informasi'=>$informasi]);
   }
    public function edit($id)
    {
        $ibu = Ibu::find($id);
        $ayah = new Ayah;
        return view('ibu.edit',compact('ibu','ayah'));
    }
    public function lihat($id)
    {
        $ibu = Ibu::find($id);
        return view('ibu.lihat',compact('ibu'));
    }
    public function update($id, Request $input)
    {
        $this->validate($input,[
      'nama'=>'required',
      'namaayah'=>'required',
      'alamat'=>'required',
      'tlp'=>'required|numeric|digits:12',
      ]);
        $ibu = Ibu::find($id);
        $ibu->nama  = $input->nama;
        $ibu->namaayah  = $input->namaayah;
        $ibu->alamat  = $input->alamat;
        $ibu->tlp  = $input->tlp;
        $informasi = $ibu->save()? 'Berhasil Update Data' : 'Gagal Update Data';
       return redirect('ibu')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ibu = Ibu::find($id);
        $informasi = $ibu->delete()? 'Berhasil Hapus Data':'Gagal Hapus Data';
       return redirect('ibu')->with(['informasi'=>$informasi]);
    }
}
