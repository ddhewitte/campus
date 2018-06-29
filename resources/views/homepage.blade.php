@extends('template')
@section('content')
Selamat datang di website list mahasiswa
	<table border="1">
		<tr bgcolor="grey">
			<td>ID</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Jurusan</td>
			<td>Foto</td>
			<td>Action</td>
		</tr>
		<?php foreach($list_mahasiswa as $val) { ?>
		<tr>
			<td>{{ $val->id }}</td>
			<td>{{ $val->nama }}</td>
			<td>{{ $val->alamat }}</td>
			<td>{{ $val->jurusan }}</td>
			<td>{{ $val->foto }}</td>
			<td>{{ link_to('home/'.$val->id ,'Detail', ['class' => 'none']) }} | Ubah | Hapus</td>
		</tr>
		<?php } ?>
	<table>
	Total : {{ $total_mahasiswa }} <br>
	Halaman : 
@stop