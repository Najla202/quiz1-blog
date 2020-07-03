@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Edit Data Kategori</h3>
	<form action="{{ url('/category/' . $row->cat_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table align="center" style="border: 2px solid #ccc; border-collapse: collapse;">
			<tr align="center">
				<td style="border: 1px solid #ccc; padding: 10px;">Nama</td>
				<td><input type="text" name="cat_name" value="{{ $row->cat_name }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Text</td>
				<td><input type="text" name="cat_text" value="{{ $row->cat_text }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;"></td>
				<td><input type="submit" value="UPDATE"></td> 
			</tr>
		</table>
	</form>
</div>

@endsection