@extends('layout.template')

@section('content')
<style>
    .btn {
        font-family:Lora;
        font-size:18px;
    }

    </style>
    <div class="container header-left background-all">
        <br>
        <div id="flip1"><i>Apa itu Website ConnectSea?</i>
            {{-- <span id="arrow" style='font-size:25px;'>&#8897;</span> --}}
        </div>
        <div class="col" id="panel1">
            Website ConnectSea adalah sebuah sistem perangkat lunak pada perangkat PC/laptop yang berfungsi untuk
            menghubungkan
            nelayan, pembudidaya hasil laut, dan pengepul hasil tangkap laut dengan pelanggan (pemilik restoran,
            konsumen umum,
            dll). Dengan adanya website ini, diharapkan dapat mempermudah interaksi jual beli antara nelayan,
            pembudidaya hasil
            laut, dan pengepul hasil tangkapan laut dengan pelanggan tanpa harus bertemu secara langsung dan dapat
            meningkatkan
            taraf ekonomi nelayan, pembudidaya hasil laut, dan pengepul hasil tangkapan laut di masa pandemi.
        </div>
        <br>
        <div id="flip2"><i>Bagaimana cara menggunakan ConnectSea?</i>
            {{-- <span id="arrow" style='font-size:25px;'>&#8897;</span> --}}
        </div>
        <div class="col" id="panel2">
            <p>Berikut merupakan alur untuk bisa menggunakan fitur pada ConnectSea.</p>
            <li>Pengguna melakukan Login/Register</li>
            <li>Pengguna mencari produk yang ingin dibeli</li>
            <li>Pengguna dapat menambahkan produk tersebut ke keranjang belanja</li>
            <li>Pengguna melakukan checkout dan pembayaran</li>
        </div>
        <br>
        <div id="flip3"><i>Fitur apa saja yang ada di Website ConnectSea?</i>
            {{-- <span id="arrow" style='font-size:25px;'>&#8897;</span> --}}
        </div>
        <div class="col" id="panel3">
            <p>Berikut berbagai fitur pada ConnectSea.</p>
            <li>Chat</li>
            <li>Jual/beli</li>
            <li>Checkout</li>
        </div>
        <br>
        <div id="flip4"><i>Bagaimana cara melihat history orders?</i>
            {{-- <span id="arrow" style='font-size:25px;'>&#8897;</span> --}}
        </div>
        <div class="col" id="panel4">
            <li>Pengguna bisa membuka menu Profile</li>
            <li>Kemudian, mengklik submenu History Orders</li>
        </div>
        <br>
        <div id="flip5"><i>Bagaimana cara mengubah alamat pengiriman?</i>
            {{-- <span id="arrow" style='font-size:25px;'>&#8897;</span> --}}
        </div>
        <div class="col" id="panel5">
            <p>Berikut berbagai fitur pada ConnectSea.</p>
            <li>Chat</li>
            <li>Jual/beli</li>
            <li>Checkout</li>
        </div>
        <br>
        <div class="button text-right">
            <a href="https://wa.me/6285806951149" class="btn btn-primary text-right">Hubungi Admin</a>
        </div>
        <br>
    </div>

@endsection
