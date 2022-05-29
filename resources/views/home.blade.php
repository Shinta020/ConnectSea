@extends('layout.template')

@section('content')
    <style>
        .kotak {
            border-radius: 10px;
            height : 300px;
            background: white;
            padding: 50px;

        }

        .box1 {
            background-color: rgb(148, 143, 143);
            height: 50px;
            padding: 10px;
            border-radius: 10px;
        }

        .box2 {
            background-color: rgb(148, 143, 143);
            height: 100px;
            padding: 10px;
            border-radius: 10px;
        }

        #kategori {
            color: black;
            text-align: center;
        }

        .fa-angle-right {
            justify-content: right;
        }

    </style>
    <div class="container header-left background-all">
        <div>
            <div class="col-4"></div>
            <div class="col-4 bcgrnd">
                <center>
                    <h2 class="ofpro-font">6.6 Special Offer</h2>
                </center>
            </div>
            <div class="col-4"></div>
        </div>

        <div class="bcgrnd">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="connectsea\ofpro.h1.jpg" alt="promo1">
                    </div>

                    <div class="item">
                        <img src="connectsea\ofpro.h2.jpg" alt="promo2">
                    </div>

                    <div class="item">
                        <img src="connectsea\ofpro.h3.jpg" alt="promo3">
                    </div>

                    <div class="item">
                        <img src="connectsea\ofpro.h4.jpg" alt="promo4">
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <br>

        <div class="kotak">
            <div class="col-sm-4">
                <div class="row-sm-5"><a href="/ikan">
                        <div class="box1"><span id="kategori">Hasil Laut</span></div>
                    </a>
                </div>
                <br>
                <div class="row-sm-5"><a href="#">
                        <div class="box1"><span id="kategori">Pakan</span></div>
                    </a>
                </div>
                <br>
                <div class="row-sm-5"><a href="#">
                        <div class="box1"><span id="kategori">Bibit</span></div>
                    </a>
                </div>
                <br>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-5">
                <div class="row"><a href="#">
                        <div class="box1"><span id="kategori">Flash Sale</span></div>
                    </a>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box2"><span id="kategori">PRODUK A</span></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box2"><span id="kategori">PRODUK B</span></div>
                    </div>

                    <div class="col-sm-4">
                        <div class="box2"><span id="kategori">PRODUK C</span></div>
                    </div>

                </div>
            </div>
            <br>
        </div>
        <br>
        <br>
    </div>
@endsection
