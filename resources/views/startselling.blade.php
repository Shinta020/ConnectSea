@extends('layout.template')
@section('content')
    <br />
    <div class="container">

        <!-- Nama Toko -->
        <h2 class="startselling-username" style="color: #004080">Start Selling</h2>

        <!--
        <div class="row">
            <div class="col-11">
                <h2> Nama Toko </h2>
            </div>
            <div class="col-1">
                <img src="{{asset('connectsea\logo.png')}}" width="20px" height="20px">
            </div>
        </div>
        -->

        <br />

        <!-- Carousel StartSelling -->
        <div class="well" style="background-color:#004080;">
            <div id="startsellingCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#startsellingCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#startsellingCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{ asset('connectsea\startselling-carousel1.png')}}" alt="Los Angeles" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="{{ asset('connectsea\startselling-carousel2.png')}}" alt="Chicago" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="startsellingCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#startsellingCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <!-- Kotak-kotak -->
        <div class="grid-startselling">

                    <!-- Choice Atas -->
                    <div class="row" style="background-color:#004080;">
                        <div class="col-sm-2">
                            <br />
                            <p>
                                <center>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    <br/>
                                    <br/>
                                    <a href="/produk"><button type="button" class="btn btn-default">My Product</button></a>
                                </center>
                            </p>
                            <br />
                        </div>
                        <div class="col-sm-2">
                            <br />
                            <p>
                                <center>
                                    <span class="glyphicon glyphicon-usd"></span>
                                    <br/>
                                    <br/>
                                    <a href="/produk/tambah"><button type="button" class="btn btn-default">Input Product</button></a>
                                </center>
                            </p>
                            <br />
                        </div>
                        <div class="col-sm-2">
                            <br />
                            <p>
                                <center>
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    <br/>
                                    <br/>
                                    <a href="#"><button type="button"
                                            class="btn btn-default">Orders</button></a>
                                </center>
                            </p>
                            <br />
                        </div>
                        <div class="col-sm-2">
                            <br />
                            <p>
                                <center>
                                    <span class="glyphicon glyphicon-usd"></span>
                                    <br/>
                                    <br/>
                                    <a href="#"><button type="button" class="btn btn-default">My
                                            Income</button></a>
                                </center>
                            </p>
                            <br />
                        </div>
                        <div class="col-sm-2">
                            <br />
                            <p>
                                <center>
                                    <span class="glyphicon glyphicon-usd"></span>
                                    <br/>
                                    <br/>
                                    <a href="/produk/tambah"><button type="button" class="btn btn-default">Flashsale</button></a>
                                </center>
                            </p>
                            <br />
                        </div>
                        <div class="col-sm-2">
                            <br />
                            <p>
                                <center>
                                    <span class="glyphicon glyphicon-usd"></span>
                                    <br/>
                                    <br/>
                                    <a href="/ofpro2"><button type="button" class="btn btn-default">Offer and Promo</button></a>
                                </center>
                            </p>
                            <br />
                        </div>
                    </div>

        </div>


@endsection
