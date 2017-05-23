<div class="form-group">
	<label class="col-sm-2 control-label" >Waktu Operasi</label>
	<div class="col-sm-10">
		{!! Form::time('waktu_operasi',null,['class'=>'form-control']) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" >Tanggal</label>
	<div class="col-sm-10">
		{!! Form::date('tanggal',null,['class'=>'form-control','placeholder'=>"Tanggal"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="ruangan_id">Ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('id_ruangan',$ruangan->lists('nama','id'),null,['class'=>'form-control','id'=>'id_ruangan','placeholder'=>"Ruangan"]) !!}
		</div>
</div>



