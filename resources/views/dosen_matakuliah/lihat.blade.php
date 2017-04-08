@extends('master')
@section('container')
<div class="panel panel-warning">
	<div classs="panel-heading">
		<strong><a href="{{url('dosen_matakuliah')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Dosen Mengajar</strong>
	</div>
	<table class="table">
		<tr>
			<td>nama Dosen</td>
			<td>:</td>
			<td>{{$dosen_matakuliah->dosen->nama}}</td>
		</tr>
		<tr>
			<td>nama Matakuliah</td>
			<td>:</td>
			<td>{{$dosen_matakuliah->matakuliah->title}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen_matakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen_matakuliah->updated_at}}</td>
		</tr>
	</table>
</div>
@stop