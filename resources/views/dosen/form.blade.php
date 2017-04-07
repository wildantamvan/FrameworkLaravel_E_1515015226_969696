<div class="form-group">
<label class="col-sm-2 control-label">nama dosen</label>
<div class="col-sm-10">
	{!! form::text('nama',null,['class'=>'form-control','placeholder'=>"nama dosen"]) !!}
</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">nip dosen</label>
	<div class="col-sm-10">
		{!! form::text('nip',null,['class'=>'form-control','placeholder'=>"nomor induk dosen"]) !!}
	</div>			
</div>



		<div class="form-group">
<label class="col-sm-2 control-label">alamat dosen</label>
<div class="col-sm-10">
	{!! form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat', 'placeholder'=>"alamat dosen"]) !!}
</div>
</div>
				



				</div>
		<div class="form-group">
	<label class="col-sm-2 control-label">username</label>
	<div class="col-sm-10">
		{!!Form::text('username',null,['class'=>'form-control','placeholder'=>"Pengguna ID"])!!}
	</div>
</div>



<div class="form-group">
	<label class="col-sm-2 control-label">password</label>
	<div class="col-sm-10">
		{!!Form::password('password',['class'=>'form-control','placeholder'=>"Password"])!!}
	</div>
</div>
