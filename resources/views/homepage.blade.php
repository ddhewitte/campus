@extends('template')
@section('content')
Selamat datang di website list mahasiswa
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Jurusan</td>
		</tr>
		<?php foreach($list_mahasiswa as $val) { ?>
		<tr>
			<td>{{ $val->id }}</td>
			<td>{{ $val->nama }}</td>
			<td>{{ $val->alamat }}</td>
			<td>{{ $val->jurusan }}</td>
		</tr>
		<?php } ?>
	<table>
@stop