@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('ruangan') }}"><i style="color:#8a6d3b"  class="fa text-default fa-chevron-left"></i></a>detail data ruangan</strong>
		</div>
<table class="table">
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>{{ $ruangan->username }}</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td>{{ $ruangan->password }}</td>
	</tr>
	<tr>
		<td class="col-xs-4">dibuat tanggal</td>
		<td class="col-xs-1">{{$ruangan->updated_at}}</td>
	</tr>
</table>
</div>
@stop