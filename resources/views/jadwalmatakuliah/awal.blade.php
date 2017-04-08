@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh jadwal matakuliah mahasiswa</strong>
		<a href="{{url('jadwalmatakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Jadwal mahasiswa</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>nama mahasiswa</th>
				<th>nim</th>
				<th>Nama Matakuliah</th>
				<th>aksi</th>
				
				</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuajadwalmatakuliah as $jadwal)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $jadwal->mahasiswa->nama or 'Nama mahasiswa Kosong' }}</td>
				<td>{{ $jadwal->mahasiswa->nim or 'nim Kosong' }}</td>	
				<td>{{ $jadwal->dosen_matakuliah->matakuliah->title or 'matakuliah Kosong' }}</td>	<td>
					<div class="btn-group" role="group">
						<a href="{{url('jadwalmatakuliah/edit/'.$jadwal->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('jadwalmatakuliah/'.$jadwal->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('jadwalmatakuliah/hapus/'.$jadwal->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop