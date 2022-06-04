@extends('layout.template')
@section('content')

<div class="container-fluid">

	<h3>Data Produk</h3>

	<a href="/produk/tambah"> + Tambah Produk Baru</a>

	<br/>
	<br/>

    <table class="table table-info table-bordered" border="1">
		@foreach($produk as $p)
		<tr style="text-align: center">
            <td>
                <img src="connectsea/{{ $p->imgproduk }}" width="60px" height="60px">
            </td>
			<td>
                <h6> {{ $p->namaproduk }} </h6> <br/>
                <div class="row">
                    <div class="col-2">
                        Kategori Produk :
                    </div>
                    <div class="col-10">
                        {{ $p->kategoriproduk }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Harga :
                    </div>
                    <div class="col-10">
                        {{ $p->harga }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Berat
                    </div>
                    <div class="col-10">
                        {{ $p->beratproduk }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Deskripsi
                    </div>
                    <div class="col-10">
                        {{ $p->descproduk }}
                    </div>
                </div>
            </td>
		</tr>
		@endforeach
	</table>

    <!--
	<div class="container-fluid">
        @foreach($produk as $p)

        <div class="row">
            <label class="col-3" for="kategoriproduk"> Kategori Produk </label>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->kategoriproduk }}
            </div>
        </div>
        <br/>

        <div class="row">
            <label class="col-3" for="namaproduk"> Nama Produk </label>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->namaproduk }}
            </div>
        </div>
        <br/>
        <div class="row">
            <label class="col-3" for="harga"> Harga </label>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->harga }}
            </div>
        </div>
        <br/>
        <div class="row">
            <label class="col-3" for="harga"> Harga </label>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->beratproduk }}
            </div>
        </div>
        <br/>
        <div class="row">
            <label class="col-3" for="descproduk"> Deskripsi </label>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->descproduk }}
            </div>
        </div>
        <br/>
        <div class="row">
            <label class="col-3" for="imgproduk">Select a Picture</label>
            <div class="col-1">:</div>
            <div class="col-8">
                <img src="connectsea/{{ $p->imgproduk }}">
            </div>
        </div>
        @endforeach
    </div>
    -->

</div>

@endsection
