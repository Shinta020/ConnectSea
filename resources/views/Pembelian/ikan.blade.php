@extends('layout.template')

@section('title', 'product ikan')

@section('content')

    <!--BARIS PERTAMA IKAN-->
   <div class="container text-center justify-content-center" style="margin-top: 50px">
        <div class="row text-center pertama">
    </div> <br>

    <div class="container mt-3">
        <div class="d-grid">
          <button type="button" class="btn btn-primary btn-block">Ikan</button>
        </div>
    </div> <br>
    <!--KAKAP MERAH-->
    <div class="container">
    <div class="col-sm-2">
        <img src="connectsea\kakapmerah.jpg" alt="ikan1" width="150" height="150">
            <a href="/getdetailproduk/1">Kakap Merah</a> <br> Rp 70.000/KG
    </div>
    <!--TUNA-->
    <div class="col-sm-2">
        <img src="connectsea\tuna.jpg" alt="ikan2" width="150" height="150" >
            <a href="/getdetailproduk/1">Tuna</a> <br> Rp 50.000/KG
    </div>
    <!--TONGKOL-->
    <div class="col-sm-2">
        <img src="connectsea\tongkol.jpg" alt="" width="150" height="150">
            <a href="/getdetailproduk/1">Tongkol</a> <br> Rp 20.000/KG
    </div>
     <!--KERAPU-->
     <div class="col-sm-2">
        <img src="connectsea\kerapu.jpg" alt="" width="150" height="150">
            <a href="/getdetailproduk/1">Kerapu</a> <br> Rp 35.000/KG
    </div>
    <!--BANDENG-->
    <div class="col-sm-2">
        <img src="connectsea\bandeng.jpg" alt="" width="150" height="150">
            <a href="/getdetailproduk/1">Bandeng</a> <br> Rp 15.000/KG
    </div>
    <!--GURAME-->
    <div class="col-sm-2">
        <img src="connectsea\gurame.jpg" alt="" width="150" height="150" >
            <a href="/getdetailproduk/1">Gurame</a> <br> Rp 50.000/KG
    </div>

    <!--BARIS KEDUA UDANG-->
        <div class="d-grid">
          <button type="button" class="btn btn-primary btn-block">Udang</button>
        </div> <br>
        <!--UDANG COKELAT-->
        <div class="col-sm-2">
                  <img src="connectsea\udangcokelat.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Udang Cokelat</a> <br> Rp 30.000/KG
        </div>
        <!--UDANG DOGOL-->
        <div class="col-sm-2">
                <img src="connectsea\udangdogol.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Udang Dogol</a> <br> Rp 25.000/KG
        </div>
          <!--UDANG FLOWER-->
        <div class="col-sm-2">
                  <img src="connectsea\udangflower.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Udang Flower</a> <br> Rp 10.000/KG
        </div>
        <!--UDANG GALAH-->
        <div class="col-sm-2">
                <img src="connectsea\udanggalah.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Udang Galah</a> <br> Rp 20.000/KG
        </div>
          <!--UDANG KARANG-->
        <div class="col-sm-2">
                  <img src="connectsea\udangkarang.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Udang Karang</a> <br> Rp 20.000/KG
        </div>
        <!--UDANG PECI-->
        <div class="col-sm-2">
                <img src="connectsea\udangpeci.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Udang Peci</a> <br> Rp 25.000/KG
        </div>

    <!--BARIS KETIGA LOBSTER-->
        <div class="d-grid">
          <button type="button" class="btn btn-primary btn-block">Lobster</button>
        </div>
        <br>
        <!--LOBSTER MUTIARA-->
        <div class="col-sm-2">
                  <img src="connectsea\lobstermutiara.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Lobster Mutiara</a> <br> Rp 50.000/KG
        </div>
        <!--LOBSTER CRAYFISH-->
        <div class="col-sm-2">
                <img src="connectsea\lobstercrayfish.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Lobster Crayfish</a> <br> Rp 33.000/KG
        </div>
          <!--LOBSTER BAMBU-->
        <div class="col-sm-2">
                  <img src="connectsea\lobsterbambu.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Lobster Bambu</a> <br> Rp 30.000/KG
        </div>
        <!--LOBSTER PASIR-->
        <div class="col-sm-2">
                <img src="connectsea\lobsterpasir.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Lobster Pasir</a> <br> Rp 25.000/KG
        </div>
          <!--LOBSTER KIPAS-->
        <div class="col-sm-2">
                  <img src="connectsea\lobsterkipas.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Lobster Kipas</a> <br> Rp 30.000/KG
        </div>
        <!--LOBSTER PAKISTAN-->
        <div class="col-sm-2">
                <img src="connectsea\lobsterpakistan.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Lobster Pakistan</a> <br> Rp 25.000/KG
        </div>
</div>

@endsection
