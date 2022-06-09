@extends("layout.template")
@section('content')
<style>
    .kotak {
            border-radius: 5px;
            height : 100px;
            background: white;
            padding: 50px;
        }

    .kotak2 {
            border-radius: 5px;
            height : 80px;
            background: white;
            padding: 50px;
        }

    .kotak3 {
            border-radius: 5px;
            height : 50px;
            padding: 20px;
        }

    .box1 {
            background-color: rgb(179, 171, 171);
            height: 325px;
            padding: 10px;
            border-radius: 10px;
        }

    .box2 {
        background-color: rgb(18, 60, 119);
        height: 50px;
        padding: 10px;
        border-radius: 10px;
        }

    #kategori {
            color: rgb(255, 255, 255);
            text-align: center;
        }

    #kategori2 {
            color: rgb(255, 255, 255);
        }
</style>
{{-- <div class="kotak">
    <div class="row row-cols-1">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="box2"><span id="kategori"><center>Belum Bayar</center></span></div>
            </div>
            <div class="col-sm-2">
                <div class="box2"><span id="kategori"><center>Dikemas</center></span></div>
            </div>
            <div class="col-sm-2">
                <div class="box2"><span id="kategori"><center>Dikirim</center></span></div>
            </div>
            <div class="col-sm-2">
                <div class="box2"><span id="kategori"><center>Selesai</center></span></div>
            </div>
            <div class="col-sm-2">
                <div class="box2"><span id="kategori"><center>Dibatalkan</center></span></div>
            </div>
            <div class="col-sm-2">
                <div class="box2"><span id="kategori"><center>Pengembalian</center></span></div>
            </div>
        </div>
    </div>
</div> --}}
<div class="kotak2">
    <div class="row-sm-10">
        <div class="box1"><span id="kategori2">
            <h4>Toko Pak Firman</h4> <p> PESANAN SELESAI </p>
            <hr>
            <div class="col-sm-2">
                <div class="kotak3">
                    <img src=" {{asset('connectsea\bandeng.jpg')}}"width="80px" height="80px" class="rounded">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="kotak3">
                    <h4>Ikan Bandeng</h4>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="kotak3">
                    <h4>10x</h4>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="kotak3">
                    <h4>Rp 150.000</h4>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr>
            <div class="col-sm-8">
                <div class="kotak3">
                    <p>Paket telah diterima oleh: Belva (yang bersangkutan)</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box2">
                    <a href="/getdetailproduk/2"><span id="kategori"><center>Beri Ulasan</center></span></a>
                </div>
            </div>
            {{-- <div class="col-sm-3">
                <div class="box2">
                    <span id="kategori"><center>Beli Lagi</center></span>
                </div>
            </div> --}}
        </span></div>
    </div>
    <br>
    <br>
    <div class="row-sm-10">
        <div class="box1"><span id="kategori2">
            <h4>Agus Fish Store</h4> <p> PESANAN SELESAI </p>
            <hr>
            <div class="col-sm-2">
                <div class="kotak3">
                    <img src=" {{asset('connectsea\gurame.jpg')}}"width="80px" height="80px" class="rounded">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="kotak3">
                    <h4>Ikan Gurame</h4>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="kotak3">
                    <h4>1x</h4>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="kotak3">
                    <h4>Rp 10.000</h4>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr>
            <div class="col-sm-8">
                <div class="kotak3">
                    <p>Paket telah diterima oleh: Alvin (Anggota Keluarga / Teman)</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box2">
                    <a href="/getdetailproduk/3"><span id="kategori"><center>Beri Ulasan</center></span></a>
                </div>
            </div>
            {{-- <div class="col-sm-3">
                <div class="box2">
                    <span id="kategori"><center>Beli Lagi</center></span>
                </div>
            </div> --}}
        </span></div>
    </div>
</div>
@endsection
