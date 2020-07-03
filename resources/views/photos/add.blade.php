@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Tambah Data Photos</h3>
	<form action="{{ url('/photos') }}" method="POST">
		@csrf
		<table align="center" style="border: 2px solid #ccc; border-collapse: collapse;">
			<tr align="center">
				<td style="border: 1px solid #ccc; padding: 10px;">Date</td>
				<td><input type="date" name="photos_date"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Title</td>
				<td><input type="text" name="photos_title"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Text</td>
				<td><input type="text" name="photos_text"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Id Post</td>
				<td><input type="text" name="post_id"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;"></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>

@endsection