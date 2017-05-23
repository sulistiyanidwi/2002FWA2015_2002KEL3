@extends('master_admin')
@section('container')


<div class="panel panel-default">
<div class="panel-heading">
	<strong><a href="{{ url('keterangan') }}">
	<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>
	Detail Data Keterangan</strong>
	</div>
	<table class="table">
		<tr>
			<td>Proses Lahiran</td>
			<td>:</td>
			<td>{{ $keterangan->proses_lahir }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$keterangan->created_at }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$keterangan->updated_at }}</td>
		</tr>
	</table>
</div>
@stop