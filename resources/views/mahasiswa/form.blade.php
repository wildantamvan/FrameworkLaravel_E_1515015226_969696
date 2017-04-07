<div class="form-group">
<label class="col-sm-2 control-label">nama mahasiswa</label>
<div class="col-sm-10">
	{!! form::text('nama',null,['class'=>'form-control','placeholder'=>"nama mahasiswa"]) !!}
</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">nim mahasiswa</label>
	<div class="col-sm-10">
		{!! form::text('nim',null,['class'=>'form-control','placeholder'=>"nomor induk mahasiswa"]) !!}
	</div>			
</div>



		<div class="form-group">
<label class="col-sm-2 control-label">alamat mahasiswa</label>
<div class="col-sm-10">
	{!! form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat', 'placeholder'=>"alamat mahasiswa"]) !!}
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
