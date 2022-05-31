@extends('layout.template')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#flip1").click(function() {
                $("#panel1").slideToggle("milimeter");
            });
        });
        $(document).ready(function() {
            $("#flip2").click(function() {
                $("#panel2").slideToggle("milimeter");
            });
        });
        $(document).ready(function() {
            $("#flip3").click(function() {
                $("#panel3").slideToggle("milimeter");
            });
        });
        $(document).ready(function() {
            $("#flip4").click(function() {
                $("#panel4").slideToggle("milimeter");
            });
        });
        $(document).ready(function() {
            $("#flip5").click(function() {
                $("#panel5").slideToggle("milimeter");
            });
        });
    </script>
    <style>

        #flip1, #flip2, #flip3, #flip4, #flip5 {
            padding: 2px;
            text-align: center;
            background-color: rgb(196, 194, 192);
            border: solid 3px rgb(83, 83, 82);
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 25px;
            border-radius: 10px;
            color :black
        }

        #panel1, #panel2, #panel3, #panel4, #panel5 {
            padding: 2px;
            text-align: justify;
            background-color: rgb(255, 255, 255) ;
            border: solid 1px rgb(83, 83, 82);
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 16px;
            padding: 10px;
            display: none;
            border-radius: 10px;
            color :black;
        }

        #arrow {
            text-align: right
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
    </div>

@endsection
