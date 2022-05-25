@extends('layout.template')

@section('title', 'product ikan')

@section('content')
<h1>Halaman detail</h1>

@foreach($produk as $p)
		<tr>
			<td>{{ $p->namaproduk }}</td>
			<td>{{ $p->harga }}</td>
			<td>{{ $p->descproduk }}</td>
			<td>{{ $p->imgproduk  }}</td>
		</tr>
		@endforeach

@endsection
