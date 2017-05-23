@extends('master_admin')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Admin</strong>
		<a href="{{url('admin/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">admin</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>No.</th>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($data as $admin)
		<td>{{ $x++ }}</td>
		<td>{{ $admin->username or 'Username Kosong' }}</td>
		<td>{{ $admin->password or 'Password Kosong' }}	</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('admin/edit/'.$admin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('admin/lihat/'.$admin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	