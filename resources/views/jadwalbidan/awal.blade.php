@extends('master_admin')
@section('container')


<div class="panel panel-default">
<div class="panel-heading">
	<strong>Seluruh Data Jadwal</strong>
	<a href="{{ url('jadwalbidan/tambah')}}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa-plus"></i> Jadwalbidan</a>

		<div class="clearfix"></div>
	</div>
<table class="table table-hover">
			<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>Waktu</th>
						<th>Tanggal</th>
						<th>Ruangan</th>
						<th>Aksi</th>
					</tr>
			</thead>
			<body>
					<?php $x=1 ;?>
					@foreach ($semuaJadwalBidan as $jadwalbidan)
						<tr>
							<td>{{ $x++ }}</td>
							<td>{{ $jadwalbidan->bidan->nama or 'nama kosong'}}</td>
							<td>{{ $jadwalbidan->jadwal->waktu_operasi or 'waktu_operasi kosong'}}</td>
							<td>{{ $jadwalbidan->jadwal->tanggal or 'tanggal kosong'}}</td>
							<td>{{ $jadwalbidan->jadwal->ruangan->nama or 'ruangan kosong'}}</td>
							
							<td>
								<div class="btn-group" role="group">
								<a href="{{url('jadwalbidan/edit/'.$jadwalbidan->id)}}" class="btn btn-warning btn xs" data-toggle="tooltip" data-placement="top" title="Ubah">
								<i class="fa fa-pencil"></i></a>

								<a href="{{url('jadwalbidan/lihat/'.$jadwalbidan->id)}}" class="btn btn-info btn xs" data-toggle="tooltip" data-placement="top" title="Lihat">
								<i class="fa fa-eye"></i></a>

								<a href="{{url('jadwalbidan/hapus/'.$jadwalbidan->id)}}" class="btn btn-danger btn xs" data-toggle="tooltip" data-placement="top" title="Hapus">
								<i class="fa fa-remove"></i></a>
						</div>

							</td>
						</tr>
						@endforeach
			</tbody>
</table>
</div>
@stop