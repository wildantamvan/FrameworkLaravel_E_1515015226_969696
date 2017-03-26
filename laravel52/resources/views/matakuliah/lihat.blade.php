@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('matakuliah') }}"><i style="color:#8a6d3b"  class="fa text-default fa-chevron-left"></i></a>detail data matakuliah</strong>
		</div>
<table class="table">
	<tr>
		<td>id ruang</td>
		<td>:</td>
		<td>{{ $matakuliah->title }}</td>
	</tr>
	<tr>
		<td>no ruang</td>
		<td>:</td>
		<td>{{ $matakuliah->keterangan}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">dibuat tanggal</td>
		<td class="col-xs-1">{{$matakuliah->updated_at}}</td>
	</tr>
</table>
</div>
@stop