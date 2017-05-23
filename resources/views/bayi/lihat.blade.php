@extends('master_admin')
@section('container')


<div class="panel panel-default">
<div class="panel-heading">
	<strong><a href="{{ url('bayi') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Bayi</strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Bayi</td>
			<td>:</td>
			<td>{{ $bayi->nama }}</td>
		</tr>

		<tr>
			<td>Nama Ibu</td>
			<td>:</td>
			<td>{{ $bayi->ibu->nama }}</td>
		</tr>
		<tr>
			<td>Nama Ayah</td>
			<td>:</td>
			<td>{{ $bayi->ibu->namaayah }}</td>
		</tr>


		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>{{ $bayi->jadwalbidan->jadwal->tanggal }}</td>
		</tr>

		<tr>
			<td>Ruangan</td>
			<td>:</td>
			<td>{{ $bayi->jadwalbidan->jadwal->ruangan->nama }}</td>
		</tr>

		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td>{{ $bayi->keterangan->proses_lahir }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$bayi->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$bayi->updated_at }}</td>
		</tr>
	</table>
</div>
@stop