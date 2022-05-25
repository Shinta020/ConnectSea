@extends('layout.template')

@section('title', 'product ikan')

@section('content')

    <!--BARIS PERTAMA-->
    <div class="container text-center justify-content-center" style="margin-top: 40px">
        <div class="row text-center pertama">
    <div class="row mt-2">

    <!--KAKAP MERAH-->
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
                <img src="connectsea\kakapmerah.jpg" alt="" style="width:70%">
                <div class="caption">
                  <p>KAKAP MERAH <br>
                 Rp 70.000/kg</p>
                </div>
              </a>
            </div>
          </div>
    <!--TUNA-->
    <div class="col-md-4">
        <div class="thumbnail">
            <img src="connectsea\tuna.jpg" alt="" style="width:50%">
            <div class="caption">
              <p>TUNA <br>
                Rp 50.000/kg</p>
            </div>
          </a>
        </div>
      </div>
    <!--TONGKOL-->
    <div class="col-md-4">
        <div class="thumbnail">
            <img src="connectsea\tongkol.jpg" alt="Fjords" style="width:50%">
            <div class="caption">
              <p>TUNA <br>
                Rp 20.000/kg</p>
            </div>
          </a>
        </div>
      </div>
</div>

@endsection
