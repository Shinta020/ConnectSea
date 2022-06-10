@extends('layout.template')
@section('content')

<div class="col-md-9">

    <!-- Judul Utama -->
    <br/>
    <div class="row">
        <div class="col-md-1">
            <center><img src="/connectsea/iconfs.png" id="icon" width="80px" height="80px"></center>
        </div>
        <div class="col-md-11">
            <h2 style="color:#004080;">Flash Sale</h2>
        </div>
    </div>

    <!-- Form Input Produk Flashsale -->
    <div class="col-md-1">

    </div>
    <div class="col-md-10">
        <br/>
        <div class="well">
            <center>
                <h3 style="color: #004080; font-weight: bold;"> Gebyar Flashsale </h3>
                <br/>
            </center>
            <div class="container-fluid">
                <form class="form-group" action="/flashsale" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label" for="idproduk">Nama Produk :</label>
                        <select id="idproduk" name="idproduk" required="required" style="width: 100%">
                            @foreach($produk as $p)
                                <option value="{{ $p->kodeproduk }}"> {{ $p->namaproduk }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="hargaflashsale">Harga Promosi:</label>
                        <input type="number" class="form-control" id="hargaflashsale" name="hargaflashsale" required="required">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="imgflashsale">Foto Produk :</label>
                        <input type="file" class="form-control" id="imgflashsale" name="imgflashsale" required="required">
                        <!--
                        <input id="imgflashsale" type="file" class="form-control" name="imgflashsale" value="{{ old('imgflashsale') }}" required autocomplete="image">
                        -->
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary" value="kirim">Simpan Data Produk</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-1">

    </div>

</div>

<div class="col-md-3">
    <br/>
    <br/>
    <img src="{{asset('connectsea\gebyar-flashsale.png')}}" style="width: 320px;">
</div>

@endsection
