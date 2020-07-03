@extends('layouts.app')

@section('content')

<div class="container">
	
	<h3 align="center">Daftar Kategori</h3>
	<center><a href="{{ url('category/create') }}">Tambah Data Kategori</a></center>

	<table align="center" style="border: 2px solid #ccc; border-collapse: collapse;">
		<tr class="bg-danger">
			<td style="border: 1px solid #ccc; padding: 10px;">Nama</td>
			<td align="center" style="border: 1px solid #ccc; padding: 10px;">Text</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Edit</td>
			<td style="border: 1px solid #ccc; padding: 10px;">Hapus</td>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->cat_name }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">{{ $row->cat_text }}</td>
			<td style="border: 1px solid #ccc; padding: 10px;">
				<button type="button" class="btn btn-secondary"><a href="{{ url('category/' . $row->cat_id . '/edit') }}" style="color: black;">Edit</a></button>
			</td>

			<td>
				<form action="{{ url('category/' . $row->cat_id) }}" method="POST">
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