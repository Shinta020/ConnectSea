@extends('layout.template')

@section('content')
    <style>
        .kotak {
            border-radius: 10px;
            height: 180px;
            background: white;
            padding: 20px;

        }

        .kotak2 {
            border-radius: 10px;
            height: 52px;
            background: white;
            padding: 9px;

        }

        .kotak3 {
            border-radius: 10px;
            height: 45px;
            background: white;
            padding: 13px;

        }
    </style>

    <div class="container header-left background-all">
        <div class="kotak" style="color:#004080">
            <strong> Pengiriman </strong>
            <hr>
            @foreach ($users as $p)
                <div class="col-md-11">
                    <p value="{{ $p->name }}"> Nama : {{ $p->name }}</p>
                    <p value="{{ $p->notelp }}"> No.hp : {{ $p->notelp }}</p>
                    <p value="{{ $p->alamat }}"> Alamat : {{ $p->alamat }}</p>
                </div>
                <div class="col-md-1">
                    <td class="text-center">
                        <a href="/orderdetail/edit/{{ $p->id }}" class="btn">Ubah</a>
                    </td>
                </div>
            @endforeach
        </div>
        <br>
        <div class="kotak" style="color:#004080">
            <strong>
                <div class="col-sm-6">Produk yang Dipesan</div>
                <div class="col-sm-2 text-center">Harga Satuan</div>
                <div class="col-sm-2 text-center">Kuantitas</div>
                <div class="col-sm-2 text-center">Total</div>
            </strong>
            <hr>
        </div>
        <br>
        <div class="row-md-12">
            <div class="col-md-5"></div>
            <div class="kotak3 col-md-7" style="color:#004080">
                <div class="col-md-5">
                    <strong> Total Pembayaran </strong>
                </div>
                <div class="col-md-1"></div>

            </div>
        </div>
        <br><br><br>
        <div class="row-md-12">
            <div class="col-md-5"></div>
            <div class="kotak2 col-md-7" style="color:#004080">
                <div class="col-md-4">
                    <strong> Metode Pembayaran : </strong>
                </div>
                <div class="col-sm-6">
                    <select name="pembayaran" class="btn btn-primary">
                        <option value="0">Pilih Metode Pembayaran</option>
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="E-wallet">E - Wallet</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Checkout</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Tata Cara Pembayaran</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Silahkan Klik <b>kontak seller</b> untuk melakukan konfirmasi pemesanan dan
                                        pembayaran
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <div class="col-sm-10">
                                        <a href="/chat"
                                            class="btn btn-primary" role="button">Kontak Seller</a>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
