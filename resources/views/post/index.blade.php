@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Daftar Post</h3>
	<center><a href="{{ url('post/create') }}">Tambah Data Post</a></center>

	<table align="center" style="border: 2px solid #ccc; border-collapse: collapse;">
		<tr class="bg-danger" align="center">
			<td style="border: 1px solid #ccc; padding: 10px;">Date</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Slug</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Title</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Text</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Id Kategori</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Edit</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Delete</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->post_date }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->post_slug }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->post_title }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->post_text }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->cat_id }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">
				<button type="button" class="btn btn-secondary"><a href="{{ url('post/' . $row->post_id . '/edit') }}" style="color: black;">Edit</a></button>
			</td>

			<td>
				<form action="{{ url('post/' . $row->post_id) }}" method="POST">
					<input type="hidden" name="_method" value="DELETE">
					@csrf
					<button>Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection