@extends('master_admin')
@section('container')


<div class="panel panel-default">
<div class="panel-heading">
	<strong><a href="{{ url('ayah') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data ayah</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $ayah->nama }}</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $ayah->alamat }}</td>
		</tr>
		<tr>
			<td>No.Telepon</td>
			<td>:</td>
			<td>{{ $ayah->tlp }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ayah->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$ayah->updated_at }}</td>
		</tr>
	</table>
</div>
@stop