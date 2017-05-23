
<div class="form-group">
	<label class="col-sm-2 control-label" id="id_bidan">Bidan</label>
	<div class="col-sm-10">
		{!! Form::select('id_bidan',$bidan->lists('nama','id'),null,['class'=>'form-control','id'=>'id_bidan','placeholder'=>"Bidan"]) !!}
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" >Waktu Operasi</label>
	<div class="col-sm-10">
		{!! Form::select('id_jadwal',$jadwal->WaktuTanggal(),null,['class'=>'form-control']) !!}
		</div>
</div>





