@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Edit Data Post</h3>
	<form action="{{ url('/post/' . $row->post_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table align="center" style="border: 2px solid #ccc; border-collapse: collapse;">
			<tr align="center">
				<td style="border: 1px solid #ccc; padding: 10px;">Date</td>
				<td><input type="date" name="post_date" value="{{ $row->post_date }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Slug</td>
				<td><input type="text" name="post_slug" value="{{ $row->post_slug }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Title</td>
				<td><input type="text" name="post_title" value="{{ $row->post_title }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Text</td>
				<td><input type="text" name="post_text" value="{{ $row->post_text }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;">Id Kategori</td>
				<td><input type="text" name="cat_id" value="{{ $row->cat_id }}"></td>
			</tr>
			<tr>
				<td style="border: 1px solid #ccc; padding: 10px;"></td>
				<td><input type="submit" value="UPDATE"></td> 
			</tr>
		</table>
	</form>
</div>

@endsection