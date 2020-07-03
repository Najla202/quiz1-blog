@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Tambah Data Album</h3>
	<form action="{{ url('/album') }}" method="POST">
		@csrf
		<table align="center" style="border: 2px solid #ccc; border-collapse: collapse;">
			<tr align="center">
				<td style="border: 1px solid #ccc; padding: 10px;">Nama</td>
				<td><input type="text" name="album_nama"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Text</td>
				<td><input type="text" name="album_text"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Id Photo</td>
				<td><input type="text" name="photos_id"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;"></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</div>

@endsection