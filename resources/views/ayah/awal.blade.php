@extends('master_admin')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Ayah</strong>
		<a href="{{url('ayah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"> Ayah</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No.Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $ayah)
		<td>{{ $x++ }}</td>
		<td>{{ $ayah->nama or 'nama Kosong'}}</td>
		<td>{{ $ayah->alamat or 'alamat Kosong'}}</td>
		<td>{{ $ayah->tlp or 'tlp Kosong'}}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('ayah/edit/'.$ayah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('ayah/lihat/'.$ayah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('ayah/hapus/'.$ayah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop