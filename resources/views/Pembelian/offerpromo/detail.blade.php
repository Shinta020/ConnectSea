@extends('layout.template')

@section('title', 'offer and promo')

@section('content')

    <div class="container header-left background-all">
        <center>
            <br />
            <h3 style="color: white; font-weight: bold;"> Detail Voucher </h3>
            <br />
        </center>
        <a href="/ofpro" class="btn btn-danger" role="button"> Kembali</a>
        <br />
        <br />

        @foreach ($voucher as $p)
            <div class="form-group">
                <label class="control-label" style="color: white;" for="namaproduk"> Kode Voucher </label>
                <input type="text" style="color: #004080;" required="required" name="nama" id="nama" value="{{ $p->kodevoucher }}"
                    class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label" style="color: white;" for="namaproduk"> Deskripsi </label>
                <input type="text" style="color: #004080;" required="required" name="nama" id="nama" value=" {{ $p->desc }}"
                    class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label" style="color: white;" for="namaproduk"> Masa Berlaku </label>
                <input type="text" style="color: #004080;" required="required" name="nama" id="nama" value=" {{ $p->masaberlaku }}"
                    class="form-control">
            </div>
        @endforeach
    </div>

@endsection
