<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id"> Nama Dosen</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_matakuliah_id',$dosen->listDosenDanNip(),null,['class'=>'form-control','id'=> 'dosen_id','placeholder'=>"Dosen"]) !!}		
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label"> ruangan</label>
	<div class="col-sm-10">
		{!! Form::select('ruangan_id',$ruangan->lists('title','id'),null,['class'=>'form-control','id'=>'ruangan_id','placeholder'=>"ruangan"]) !!}	
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id"> Nama mahasiswa</label>
	<div class="col-sm-10">
		{!! Form::select('mahasiswa_id',$dosen->listDosenMatakuliahDanMahasiswaDanRuangan(),null,['class'=>'form-control','id'=> 'mahasiswa_id','placeholder'=>"mahasiswa"]) !!}		
	</div>
</div>
