@extends('layout.template')

@section('content')

<div class="container">
	<h3 class="text-center">Detail Voucher</h3>

	<a href="/ofpro2" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($voucher as $p)

        <div class="">
            <div class="col-3"> Kode Voucher </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->kodevoucher }}
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-3"> Deskripsi </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->desc }}
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-3"> Masa Berlaku </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->masaberlaku }}
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-3"> Voucher </div>
            <div class="col-1">:</div>
            <div class="col-8">
                {{ $p->imgvoucher }}
            </div>
        </div>
	@endforeach
</div>

@endsection
