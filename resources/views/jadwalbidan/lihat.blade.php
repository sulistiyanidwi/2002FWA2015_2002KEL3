@extends('master_admin')
@section('container')


<div class="panel panel-default">
<div class="panel-heading">
	<strong><a href="{{ url('jadwalbidan') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data jadwalbidan Matakuliah</strong>
	</div>
	<table class="table">
		<tr>
			<td>Waktu operasi</td>
			<td>:</td>
			<td>{{ $jadwalbidan->jadwal->waktu_operasi }}</td>
		</tr>

		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td>{{ $jadwalbidan->jadwal->tanggal }}</td>
		</tr>

		<tr>
			<td>Bidan</td>
			<td>:</td>
			<td>{{ $jadwalbidan->bidan->nama or 'kosong' }}</td>
		</tr>

		<tr>
			<td>Ruangan</td>
			<td>:</td>
			<td>{{ $jadwalbidan->ruangan->nama or 'kosong' }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwalbidan->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$jadwalbidan->updated_at }}</td>
		</tr>
	</table>
</div>
@stop