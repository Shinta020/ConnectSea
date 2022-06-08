@extends('layout.template')

@section('title', 'offer and promo')

@section('content')
    <style>
        .kotak {
            border-radius: 10px;
            background: rgb(135, 86, 86);
            padding: 20px;

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
        <div>
            <div>
                <div class="col-4"></div>
                <div class="col-4 bcgrnd">
                    <center>
                        <h2 class="ofpro-font">Promo and Voucher</h2>
                    </center>
                </div>
                <div class="col-4"></div>
            </div>
            <br />

            @foreach ($voucher as $p)
                <div>
                    <center>
                        <tr class="font-voucher">
                            <td class="text-center"><img src="connectsea/{{ $p->imgvoucher }}"></td>
                            <td class="text-center">
                                <a href="/ofpro2/detail/{{ $p->id }}" class="btn btn-info">View Detail</a>
                            </td>
                        </tr>
                    </center>
                </div>
            @endforeach

        </div>
        <br>
        <div>
            <div class="col-4"></div>
            <div class="col-4 bcgrnd">
                <center>
                    <h2 class="ofpro-font">Diskon terus s/d 50%</h2>
                </center>
            </div>
            <div class="col-4"></div>
        </div>
        <div>
            <div class="col-sm-2">
                <a href=""> <img src="connectsea\Diskon1.png" alt="diskon1" width="150" height="150"> </a>
            </div>
            <div class="col-sm-2">
                <a href=""> <img src="connectsea\Diskon2.png" alt="diskon2" width="150" height="150"> </a>
            </div>
            <div class="col-sm-2">
                <a href=""> <img src="connectsea\Diskon3.png" alt="diskon3" width="150" height="150"> </a>
            </div>
            <div class="col-sm-2">
                <a href=""> <img src="connectsea\Diskon4.png" alt="diskon4" width="150" height="150"> </a>
            </div>
            <div class="col-sm-2">
                <a href=""> <img src="connectsea\Diskon5.png" alt="diskon5" width="150" height="150"> </a>
            </div>
            <div class="col-sm-2">
                <a href=""> <img src="connectsea\Diskon6.png" alt="diskon6" width="150" height="150"> </a>
                <a href="#" class="next">&#8250;</a>
            </div>
        </div>
        <br>
    </div>



@endsection
