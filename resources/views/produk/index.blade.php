@extends('layout.template')
@section('content')

	<h3>Data Produk</h3>

	<a href="/produk/tambah"> + Tambah Produk Baru</a>

	<br/>
	<br/>

	<div class="col-8" style="color:black">
        @foreach($produk as $p)
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
                {{ $p->imgproduk }}
            </div>
        </div>
        @endforeach
    </div>

@endsection
