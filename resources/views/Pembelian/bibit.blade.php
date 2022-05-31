@extends('layout.template')

@section('title', 'product bibit')

@section('content')

    <!--BARIS PERTAMA KERAPU MACAM-->
    <div class="container text-center justify-content-center" style="margin-top: 50px">
        <div class="row text-center pertama">
    </div> <br>

    <div class="container mt-3">
        <div class="d-grid">
          <button type="button" class="btn btn-primary btn-block">Bibit Kerapu Macan</button>
        </div>
    </div> <br>
    <!--KAKAP MERAH-->
    <div class="container">
    <div class="col-sm-2">
        <img src="connectsea\jayaperkasa.jpg" alt="ikan1" width="150" height="150">
            <a href="/getdetailproduk/1">PT Jaya Perkasa</a> <br> Rp 15.000/KG
    </div>
    <!--TUNA-->
    <div class="col-sm-2">
        <img src="connectsea\aquacristal.png" alt="ikan2" width="150" height="150" >
            <a href="/getdetailproduk/1">Aquacristal</a> <br> Rp 17.000/KG
    </div>
    <!--TONGKOL-->
    <div class="col-sm-2">
        <img src="connectsea\usaaa.jpg" alt="" width="150" height="150">
            <a href="/getdetailproduk/1">USAAAA</a> <br> Rp 10.000/KG
    </div>
     <!--KERAPU-->
     <div class="col-sm-2">
        <img src="connectsea\budilaksono.jpeg" alt="" width="150" height="150">
            <a href="/getdetailproduk/1">Budi Laksono</a> <br> Rp 14.000/KG
    </div>
    <!--BANDENG-->
    <div class="col-sm-2">
        <img src="connectsea\mosi.jpg" alt="" width="150" height="150">
            <a href="/getdetailproduk/1">Mosi</a> <br> Rp 13.000/KG
    </div>
    <!--GURAME-->
    <div class="col-sm-2">
        <img src="connectsea\ephinephelus.jpg" alt="" width="150" height="150" >
            <a href="/getdetailproduk/1">Ephinephelus</a> <br> Rp 20.000/KG
    </div>

    <!--BARIS KEDUA UDANG-->
        <div class="d-grid">
          <button type="button" class="btn btn-primary btn-block">Bibit Udang</button>
        </div><br>
        <!--UDANG COKELAT-->
        <div class="col-sm-2">
                  <img src="connectsea\udangsarbini.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Sarbini</a> <br> Rp 10.000/KG
        </div>
        <!--UDANG DOGOL-->
        <div class="col-sm-2">
                <img src="connectsea\sambas.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Sambas</a> <br> Rp 20.000/KG
        </div>
          <!--UDANG FLOWER-->
        <div class="col-sm-2">
                  <img src="connectsea\gilan.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Gilan</a> <br> Rp 13.000/KG
        </div>
        <!--UDANG GALAH-->
        <div class="col-sm-2">
                <img src="connectsea\genethics.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Genethics</a> <br> Rp 20.000/KG
        </div>
          <!--UDANG KARANG-->
        <div class="col-sm-2">
                  <img src="connectsea\megahwindu.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Megah Windu</a> <br> Rp 20.000/KG
        </div>
        <!--UDANG PECI-->
        <div class="col-sm-2">
                <img src="connectsea\lapaksahira.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Lapak Sahira</a> <br> Rp 25.000/KG
        </div>

    <!--BARIS KETIGA LOBSTER-->
      <div class="d-grid">
        <button type="button" class="btn btn-primary btn-block">Bibit Kepiting</button>
      </div><br>
        <!--LOBSTER MUTIARA-->
        <div class="col-sm-2">
                  <img src="connectsea\bakau.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Bakau</a> <br> Rp 5.000/KG
        </div>
        <!--LOBSTER CRAYFISH-->
        <div class="col-sm-2">
                <img src="connectsea\soka.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Soka</a> <br> Rp 15.000/KG
        </div>
          <!--LOBSTER BAMBU-->
        <div class="col-sm-2">
                  <img src="connectsea\kenari.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Kenari</a> <br> Rp 20.000/KG
        </div>
        <!--LOBSTER PASIR-->
        <div class="col-sm-2">
                <img src="connectsea\rajungan.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Rajungan</a> <br> Rp 25.000/KG
        </div>
          <!--LOBSTER KIPAS-->
        <div class="col-sm-2">
                  <img src="connectsea\yuyu.jpg" alt="" width="150" height="150" >
                        <a href="/getdetailproduk/1">Yuyu</a> <br> Rp 8.000/KG
        </div>
        <!--LOBSTER PAKISTAN-->
        <div class="col-sm-2">
                <img src="connectsea\garuntu.jpg" alt="" width="150" height="150">
                        <a href="/getdetailproduk/1">Garuntu</a> <br> Rp 25.000/KG
        </div>
</div>

@endsection
