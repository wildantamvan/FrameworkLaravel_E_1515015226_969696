@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>seluruh data mahasiswa</strong>
		<a href="{{ url('mahasiswa/tambah')}}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i>mahasiswa </a>
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
			@foreach ($data as $mahasiswa)
			<tr>
				<td>{{ $x++ }}</td>
				<td>{{ $mahasiswa->id or 'id kosong'}}</td>
				<td>{{ $mahasiswa->nama or 'nama kosong'}}</td>
				<td>{{ $mahasiswa->nim or 'nim kosong'}}</td>
				<td>{{ $mahasiswa->alamat or 'alamat kosong'}}</td>
				<td>{{ $mahasiswa->pengguna_id or 'id pengguna kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('mahasiswa/edit/'.$mahasiswa->id)}}" class="btn btn-arning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
						<i class="fa fa-pencil"></i></a>

						<a href="{{url('mahasiswa/'.$mahasiswa->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('mahasiswa/hapus/'.$mahasiswa->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop