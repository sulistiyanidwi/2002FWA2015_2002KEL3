@extends('master_admin')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Proses Lahir</strong>
		<a href="{{url('keterangan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> 
		Proses Lahir</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>No.</th>
			<th>Proses Lahiran</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $keterangan)
		<td>{{ $x++ }}</td>
		<td>{{ $keterangan->proses_lahir or 'Keterangan Kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('keterangan/edit/'.$keterangan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('keterangan/lihat/'.$keterangan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('keterangan/hapus/'.$keterangan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop