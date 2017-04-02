@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh jadwal matakuliah mahasiswa</strong>
		<a href="{{url('jadwal_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Jadwal Dosen</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>mahasiswa</th>
				<th>ruangan</th>
				<th>Nama Matakuliah</th>
				</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($Semua_Dosen_Matakuliah as $jadwalmatakuliah)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $jadwalmatakuliah->mahasiswa->nama or 'Nama mahasiswa Kosong' }}</td>
				<td>{{ $jadwalmatakuliah->ruangan->title or 'ruangan Kosong' }}</td	<td>j
					<div class="btn-group" role="group">
						<a href="{{url('jadwalmatakuliah/edit/'.$dosen_matakuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('jadwalmatakuliah/lihat/'.$jdosen_matakuliah->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('jadwalmatakuliah/hapus/'.$dosen_matakuliah->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop