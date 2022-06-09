@extends('layout.template')

@section('title', 'product bibit')

@section('content')

    <div class="container text-center justify-content-center" style="margin-top: 50px">
        <div class="row text-center pertama">
   </div> <br>

    <!--<div class="container mt-3">
        <div class="d-grid">
          <button type="button" class="btn btn-primary btn-block">Bibit Kerapu Macan</button>
        </div>
    </div> <br> -->

    <!--PRODUK BIBIT-->
    <div class="container">
        @foreach($produk as $p)
    <div class="col-sm-2">
        <img src="connectsea/{{$p -> imgproduk}}" alt="ikan1" width="150" height="150">
            <a href="/getdetailproduk/{{ $p->kodeproduk}}">{{ $p->namaproduk }}</a> <br>Rp {{ $p->harga }}/KG
    </div>
    @endforeach
@endsection
