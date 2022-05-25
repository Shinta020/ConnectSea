@extends('layout.template')

@section('title', 'offer and promo')

@section('content')

<div class="container header-left background-all">
    <div>
    <div class="col-4"></div>
    <div class="col-4 bcgrnd">
        <center><h2 class="ofpro-font">6.6 Special Offer</h2></center>
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
      <div class="carousel-inner" role="listbox"  >

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
        <div class="col-4"></div>
        <div class="col-4 bcgrnd">
            <center><h2 class="ofpro-font">Diskon terus s/d 50%</h2></center>
        </div>
        <div class="col-4"></div>
    </div>
    <div>
        <div class="col-sm-2">
            <img src="connectsea\Diskon1.png" alt="diskon1" width="150" height="150">
        </div>
        <div class="col-sm-2">
            <img src="connectsea\Diskon2.png" alt="diskon2" width="150" height="150">
        </div>
        <div class="col-sm-2">
            <img src="connectsea\Diskon3.png" alt="diskon3" width="150" height="150">
        </div>
        <div class="col-sm-2">
            <img src="connectsea\Diskon4.png" alt="diskon4" width="150" height="150">
        </div>
        <div class="col-sm-2">
            <img src="connectsea\Diskon5.png" alt="diskon5" width="150" height="150">
        </div>
        <div class="col-sm-2">
            <img src="connectsea\Diskon6.png" alt="diskon6" width="150" height="150">
            <a href="#" class="next">&#8250;</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <div>
        <div>
            <div class="col-4"></div>
            <div class="col-4 bcgrnd">
                <center><h2 class="ofpro-font">Voucher dan Gratis Ongkir</h2></center>
            </div>
            <div class="col-4"></div>
        </div>
        <div>
            <ul>
                <li>
                    <div class="col-sm-6">
                        <img src="connectsea\voucher1.png" alt="diskon1" width="450" height="75">
                    </div>
                    <div class="col-sm-6">
                        <img src="connectsea\voucher1.png" alt="diskon1" width="450" height="75">
                    </div>
                </li>
                <li>
                    <div class="col-sm-6">
                        <img src="connectsea\voucher1.png" alt="diskon1" width="450" height="75">
                    </div>
                    <div class="col-sm-6">
                        <img src="connectsea\voucher1.png" alt="diskon1" width="450" height="75">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


@endsection
