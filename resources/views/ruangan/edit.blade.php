@extends('master_admin')
@section('container')
<div class="panel panel-default">
<div class="panel-heading">
	<strong><a href="{{ url('ruangan') }}">
	<i style="color:#8a6d3b;" class="fa text-default fa-chevron-left"></i>Perbarui Data Ruangan</a>
	</strong>
	</div>
		{!! Form::model($ruangan,['url'=>'ruangan/edit/'.$ruangan->id,'class'=>'form-horizontal']) !!}
		@include('ruangan.form')
		<div style="width: 100%;text-align: right;">
				<button class="btn btn-info"><i class="fa fa-save"></i>Perbarui</button>
				<button type"reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
</div>
{!! Form::close() !!}
</div>

@stop