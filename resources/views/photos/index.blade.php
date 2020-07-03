@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Daftar Photos</h3>
	<center><a href="{{ url('photos/create') }}">Tambah Data Photos</a></center>

	<table align="center" style="border: 2px solid #ccc; border-collapse: collapse;">
		<tr class="bg-danger" align="center">
			<td style="border: 1px solid #ccc; padding: 10px;">Date</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Title</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Text</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Id Post</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Edit</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Delete</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->photos_date }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->photos_title }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->photos_text }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->post_id }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">
				<button type="button" class="btn btn-secondary"><a href="{{ url('photos/' . $row->photos_id . '/edit') }}" style="color: black;">Edit</a></button>
			</td>
			<td>
				<form action="{{ url('photos/' . $row->photos_id) }}" method="POST">
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