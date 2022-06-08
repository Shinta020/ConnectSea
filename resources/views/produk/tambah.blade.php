@extends('layout.template')
@section('content')

<div class="col-md-9" style="color:black; font-family: verdana;">

    <center>
        <br/>
        <h3 style="color: #004080; font-weight: bold;"> Input New Product </h3>
        <br/>
    </center>
    <div class="container-fluid">
        <form class="form-group" action="/produk" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label" style="" for="kategoriproduk">Kategori Produk :</label>
                <select class="form-control" id="kategoriproduk" name="kategoriproduk" required="required">
                    <?php
                    $opt = array('Hasil Laut','Bibit','Pakan Ikan');
                    foreach($opt as $kategoriproduk) echo "<option value='".$kategoriproduk."'>".$kategoriproduk."</option>";
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="namaproduk">Nama Produk :</label>
                <input type="text" class="form-control" id="namaproduk" name="namaproduk" required="required">
            </div>
            <div class="form-group">
                <label class="control-label" for="qty">Jumlah :</label>
                <input type="number" class="form-control" id="qty" name="qty" required="required">
            </div>
            <div class="form-group">
                <label class="control-label" for="harga">Harga :</label>
                <input type="number" class="form-control" id="harga" name="harga" required="required">
            </div>
            <div class="form-group">
                <label class="control-label" for="berat">Berat :</label>
                <input type="number" class="form-control" id="berat" name="berat" required="required">
            </div>
            <div class="form-group">
                <label class="control-label" for="descproduk">Deskripsi dan Manfaat :</label>
                <textarea class="form-control" rows="5" id="descproduk" name="descproduk" required="required"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="id_toko">Toko :</label>
                <select id="id_toko" name="id_toko" required="required" style="width: 100%">
                    @foreach($users as $p)
                        <option value="{{ $p->id }}"> {{ $p->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="imgproduk">Foto Produk :</label>
                <input type="file" class="form-control" id="imgproduk" name="imgproduk" required="required">
            </div>
            <br/>
            <center>
                <button type="submit" class="btn btn-primary" value="kirim">Simpan Data Produk</button>
            </center>
        </form>
    </div>

</div>

<div class="col-md-3">
<br/>
<br/>
<center> <h4 style="color: #004080; font-weight: bold;">Website Connectsea</h4> </center>
<img src="{{asset('connectsea\proud-of-indonesia.png')}}" style="width: 300px;">
<br/>
<br/>
<br/>
<p class="well" style="color: black;">
    “Setinggi apapun pangkat yang dimiliki, kamu tetaplah pegawai. Sekecil apapun usaha yang kamu punya, kamu adalah bosnya.”
    <br/>
    – Bob Sadino
</p>
</div>

@endsection
