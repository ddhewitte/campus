@extends('template')
@section('content')
Tambah mahasiswa
{!! Form::open(['url' => 'home']) !!}
	<table border="1">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{!! Form::text('nama') !!}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{!! Form::text('alamat') !!}</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>{!! Form::text('jurusan') !!}</td>
		</tr>
		<tr>
			<td></td>
			<td>:</td>
			<td>{!! Form::submit('input') !!}</td>
		</tr>
	</table>
		{!! form::close() !!}
		{{ link_to('/','Back') }}
@stop