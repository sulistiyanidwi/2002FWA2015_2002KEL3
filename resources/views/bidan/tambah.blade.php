@extends('master_admin')
@section('container')


<div class="panel panel-default">
<div class="panel-heading">
	<strong><a href="{{ url('bidan') }}">
	<i style="color:white;" class="fa text-default fa-chevron-left"></i></a>
	Tambah Data Bidan</strong>
	</div>
		{!! Form::open(['url'=>'bidan/simpan','class'=>'form-horizontal']) !!}
		@include('bidan.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
				<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop

