@extends('layout.template')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#flip1").click(function() {
                $("#panel1").slideUp("fast");
            });
        });

        $(document).ready(function() {
            $("#flip2").click(function() {
                $("#panel2").slideDown("slow");
            });
        });

        $(document).ready(function() {
            $("#flip3").click(function() {
                $("#panel3").slideToggle("milimeter");
            });
        });
    </script>
    <style>
        h1,
        h2,
        h3 {
            font-family: Arial, Helvetica, sans-serif;
        }

        #flip3 {
            padding: 2px;
            text-align: center;
            background-color: peachpuff;
            border: solid 3px burlywood;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 25px;
            border-radius: 10px;
        }

        #panel3 {
            padding: 2px;
            text-align: justify;
            background-color: cornsilk;
            border: solid 1px burlywood;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 16px;
            padding: 10px;
            display: none;
            border-radius: 10px;
        }

        #arrow {
            text-align: right
        }

    </style>

    <div class="container header-left background-all">
        <br>
        <div id="flip3"><i>Apa itu Website ConnectSea?</i>
            <span id="arrow" style='font-size:25px;'>&#8897;</span>
        </div>
        <div class="col" id="panel3">
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
    </div>
    </div>
@endsection
