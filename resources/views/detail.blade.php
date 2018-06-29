@extends('template')
@section('content')
Detail mahasiswa
	<table border="1">
		<tr>
			<td>ID</td>
			<td>:</td>
			<td>{{ $detail_mahasiswa->id }}</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $detail_mahasiswa->nama }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $detail_mahasiswa->alamat }}</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>{{ $detail_mahasiswa->jurusan }}</td>
		</tr>
	<table>
		{{ link_to('/','Back') }}
@stop