@extends('template')
@section('content')
Ubah mahasiswa
{!! Form::model($row_mahasiswa, ['method' => 'PATCH', 'action' => ['HomeController@update', $row_mahasiswa->id]]) !!} <!-- model binding -->
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
			<td>{!! Form::submit('ubah') !!}</td>
		</tr>
	</table>
		{!! form::close() !!}
		{{ link_to('/','Back') }}
@stop