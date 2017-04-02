@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('dosen') }}"><i style="color:#8a6d3b"  class="fa text-default fa-chevron-left"></i></a>detail data mahasiswa</strong>
		</div>
<table class="table">
	<tr>
		<td>id ruang</td>
		<td>:</td>
		<td>{{ $dosen->title }}</td>
	</tr>
	<tr>
		<td>no ruang</td>
		<td>:</td>
		<td>{{ $dosen->keterangan}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">dibuat tanggal</td>
		<td class="col-xs-1">{{$dosen->updated_at}}</td>
	</tr>
</table>
</div>
@stop