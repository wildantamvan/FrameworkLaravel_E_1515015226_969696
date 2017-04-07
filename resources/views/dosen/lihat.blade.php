@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('dosen') }}"><i style="color:#8a6d3b"  class="fa text-default fa-chevron-left"></i></a>detail data dosen</strong>
		</div>
<table class="table">
	<tr>
		<td>ruang</td>
		<td>:</td>
		<td>{{ $dosen->nama }}</td>
	</tr>
	<tr>
		<td>no ruang</td>
		<td>:</td>
		<td>{{ $dosen->nip}}</td>
	</tr>
		<tr>
		<td>alamat</td>
		<td>:</td>
		<td>{{ $dosen->alamat}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">dibuat tanggal</td>
		<td class="col-xs-1">{{$dosen->created_at}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">dirubah tanggal</td>
		<td class="col-xs-1">{{$dosen->updated_at}}</td>
	</tr>
</table>
</div>
@stop