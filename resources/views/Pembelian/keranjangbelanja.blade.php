@extends('layout.template')
@section('content')
    <style>
        #kotak {
            border-radius: 10px;
            height: 30px;
            background: white;
            padding:5px;

        }
        #kotak1 {
            border-radius: 10px;
            height: 100px;
            background: white;
            padding:5px;

        }
        p {
            text-align: center;
        }
    </style>
    <div class="container header-left background-all">
        <br>
        <div id="kotak">
                <div class="col-sm-4">
                    <p>Produk</p>
                </div>
                <div class="col-sm-2">
                    <p>Harga Satuan</p>
                </div>
                <div class="col-sm-2">
                    <p>Kuantitas</p>
                </div>
                <div class="col-sm-2">
                    <p>Total</p>
                </div>
                <div class="col-sm-2">
                    <p>Aksi</p>
                </div>
            </div>

        <br>
        <div id="kotak1">
                <div class="col-sm-4">
                    <img src="connectsea\kakapmerah.jpg">
                </div>
                <div class="col-sm-2">
                    <p>Rp 1jeti</p>
                </div>
                <div class="col-sm-2">
                    <p>10</p>
                </div>
                <div class="col-sm-2">
                    <p>Rp 10jeti</p>
                </div>
                <div class="col-sm-2">
                    <p>Delete</p>
                </div>
            </div>
        </div>
    </div>
    <table border="1">
        <tr>
            <th>ID Keranjang</th>
            <th>Kode Produk</th>
            <th>ID Akun</th>
        </tr>
        @foreach ($keranjang_belanja as $k)
            <tr>
                <td>{{ $k->idkeranjang }}</td>
                <td>{{ $k->kodeproduk }}</td>
                <td>{{ $k->akunid }}</td>
                {{-- <td>
            <a href="/pegawai/edit/{{ $p->pegawai_id }}">Checkout</a>
            |
            <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
        </td> --}}
            </tr>
        @endforeach
    </table>
@endsection
