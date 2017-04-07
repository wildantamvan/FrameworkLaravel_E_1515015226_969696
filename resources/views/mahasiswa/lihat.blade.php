@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('mahasiswa') }}"><i style="color:#8a6d3b"  class="fa text-default fa-chevron-left"></i></a>detail data mahasiswa</strong>
		</div>
<table class="table">
	<tr>
		<td>ruang</td>
		<td>:</td>
		<td>{{ $mahasiswa->nama }}</td>
	</tr>
	<tr>
		<td>no ruang</td>
		<td>:</td>
		<td>{{ $mahasiswa->nim}}</td>
	</tr>
		<tr>
		<td>alamat</td>
		<td>:</td>
		<td>{{ $mahasiswa->alamat}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">dibuat tanggal</td>
		<td class="col-xs-1">{{$mahasiswa->created_at}}</td>
	</tr>
	<tr>
		<td class="col-xs-4">dirubah tanggal</td>
		<td class="col-xs-1">{{$mahasiswa->updated_at}}</td>
	</tr>
</table>
</div>
@stop