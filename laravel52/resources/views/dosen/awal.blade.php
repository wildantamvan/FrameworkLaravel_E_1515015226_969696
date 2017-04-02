@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>seluruh data dosen</strong>
		<a href="{{ url('dosen/tambah')}}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i>dosen </a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>nama</th>
				<th>nim</th>
				<th>alamat</th>
			<th>pengguna_id</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $dosen)
			<tr>
				<td>{{ $x++ }}</td>
				<td>{{ $dosen->id or 'id kosong'}}</td>
				<td>{{ $dosen->nama or 'nama kosong'}}</td>
				<td>{{ $dosen->nim or 'nim kosong'}}</td>
				<td>{{ $dosen->alamat or 'alamat kosong'}}</td>
				<td>{{ $dosen->pengguna_id or 'id pengguna kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('dosen/edit/'.$dosen->id)}}" class="btn btn-arning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
						<i class="fa fa-pencil"></i></a>

						<a href="{{url('dosen/'.$dosen->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('dosen/hapus/'.$dosen->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop