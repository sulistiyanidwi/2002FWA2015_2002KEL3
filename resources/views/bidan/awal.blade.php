@extends('master_admin')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Bidan</strong>
		<a href="{{url('bidan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> Bidan</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Nik</th>
			<th>Alamat</th>
			<th>No. Telpon</th>
			<th>Tanggal Lahir</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $bidan)
		<td>{{ $x++ }}</td>
		<td>{{ $bidan->nama or 'nama Kosong'}}</td>
		<td>{{ $bidan->nik or 'nik Kosong'}}</td>
		<td>{{ $bidan->alamat or 'alamat Kosong'}}</td>
		<td>{{ $bidan->tlp or 'no. telpon Kosong'}}</td>
		<td>{{ $bidan->tgl or 'tgl Kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('bidan/edit/'.$bidan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('bidan/lihat/'.$bidan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('bidan/hapus/'.$bidan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop