@extends('layout.template')
@section('content')

<div class="container-fluid">

	<h3>Data Produk</h3>

	<a href="/produk/tambah"> + Tambah Produk Baru</a>

	<br/>
	<br/>

    <table class="table table-info table-bordered" border="1">
		<tr>
			<th><center>Foto Produk</center></th>
			<th><center>Nama Produk</center></th>
            <th><center>Kategori Produk</center></th>
            <th><center>Jumlah</center></th>
			<th><center>Harga</center></th>
            <th><center>Berat</center></th>
            <th><center>Deskripsi</center></th>
            <th><center>Toko</center></th>
            <th><center>Aksi</center></th>
		</tr>
		@foreach($produk as $p)
		<tr style="text-align: center">
			<td><img src="connectsea/{{ $p->imgproduk }}" width="60px" height="60px"></td>
			<td>{{ $p->namaproduk }}</td>
			<td>{{ $p->kategoriproduk }}</td>
            <td>{{ $p->qty }}</td>
            <td>Rp {{ $p->harga }},00</td>
            <td>{{ $p->beratproduk }} kg</td>
            <td>{{ $p->descproduk }}</td>
            <td>{{ $p->name }}</td>
            <td>
                <a href="/produk/edit/{{ $p->kodeproduk }}"><button class="btn btn-warning"> Edit </button></a>
				|
				<a href="/produk/hapus/{{ $p->kodeproduk }}"><button class="btn btn-danger"> Hapus </button></a>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection
