@extends('layout.template')
@section('content')
    <div class="product-card"></div>
        <div class="card">
            <img src="connectsea/{{ $p->imgproduk }}" width="60px" height="60px">
            <div class="header">{{ $p->namaproduk }}</div>
            <div class="body">
                {{ $p->harga }}
            </div>
        </div>
    </div>
@endsection
