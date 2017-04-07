@extends('master')
@section('container')
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{url('jadwalmatakuliah')}}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a> Tambah Data jadwal mahasiswa</strong>
	</div>
	{!!Form::open(['url'=>'jadwalmatakuliah/simpan','class'=>'form-horizontal'])!!}
	@include('jadwalmatakuliah.form', ['submit_text' => 'Tambah Data'])
	<div style="width: 100%:text-align:right;">
		<button class="btn btn-pr
		imary"><i class="fa fa-save"></i> Simpan</button>
		<button class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
	</div>
	{!!Form::close()!!}
</div>
@stop