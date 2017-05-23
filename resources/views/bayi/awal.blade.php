@extends('master_admin')
@section('container')


<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Bayi</strong>
	<a href="{{ url('bayi/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i> Bayi</a>

		<div class="clearfix"></div>
	</div>
<table class="table table-hover">
			<thead>
					<tr>
						<th>No.</th>
						<th>Nama Bayi</th>
						<th>Tanggal Lahir</th>
						<th>Nama Ibu</th>
						<th>Nama Ayah</th>
						<th>Ruangan</th>
						<th>Keterangan</th>
						<th>Aksi</th>
					</tr>
			</thead>
			<body>
					<?php $x=1 ;?>
					@foreach ($semuaBayi as $bayi)
						<tr>
							<td>{{ $x++ }}</td>
							<td>{{ $bayi->nama or 'nama kosong'}}</td>
							<td>{{ $bayi->jadwalbidan->jadwal->tanggal or 'tanggal kosong'}}</td>
							<td>{{ $bayi->ibu->nama or 'ibu kosong'}}</td>
							<td>{{ $bayi->ibu->namaayah or 'ayah kosong'}}</td>
							<td>{{ $bayi->jadwalbidan->jadwal->ruangan->nama or 'ruangan kosong'}}</td>
							<td>{{ $bayi->keterangan->proses_lahir or 'keterangan kosong'}}</td>
							
							
							<td>
								<div class="btn-group" role="group">
								<a href="{{url('bayi/edit/'.$bayi->id)}}" class="btn btn-warning btn xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i></a>

								<a href="{{url('bayi/'.$bayi->id)}}" class="btn btn-info btn xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i></a>

								<a href="{{url('bayi/hapus/'.$bayi->id)}}" class="btn btn-danger btn xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-remove"></i></a>
						</div>

							</td>
						</tr>
						@endforeach
			</tbody>
</table>
</div>
@stop