@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Daftar Album</h3>
	<center><a href="{{ url('album/create') }}">Tambah Data Album</a></center>

	<table align="center" style="border: 2px solid #ccc; border-collapse: collapse;">
		<tr class="bg-danger" align="center">
			<td style="border: 1px solid #ccc; padding: 10px;">Nama</td>
			<td align="center" style="border: 1px solid #ccc; padding: 10px;">Text</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Id Photo</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Edit</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Delete</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->album_nama }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->album_text }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->photos_id }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">
				<button type="button" class="btn btn-secondary"><a href="{{ url('album/' . $row->album_id . '/edit') }}" style="color: black;">Edit</a></button>
			</td>
			<td>
				<form action="{{ url('album/' . $row->album_id) }}" method="POST">
					<input type="hidden" name="_method" value="DELETE">
					@csrf
					<button>Hapus</button>
		</tr>
		@endforeach
	</table>
</div>

@endsection