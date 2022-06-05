@extends('layout.template')
@section('content')

    <div class="container">
        <br/>
        <form class="form-horizontal" action="/produk" method="get" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!--
            <div class="form-group">
                <label class="control-label col-sm-2" for="kategoriproduk">Kategori Produk</label>
                <div class="col-sm-1">:</div>
                <div class="col-sm-9">
                    <select class="form-control" id="kategoriproduk" name="kategoriproduk">
                        <option>Hasil Laut</option>
                        <option>Bibit</option>
                        <option>Pakan</option>
                    </select>
                </div>
            </div>
            -->



            <div class="form-group">
                <label class="control-label col-sm-2" for="kategoriproduk">Kategori Produk</label>
                <div class="col-sm-1">:</div>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="kategoriproduk" name="kategoriproduk" required="required">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="namaproduk">Nama Produk</label>
                <div class="col-sm-1">:</div>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namaproduk" name="namaproduk" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="harga">Harga</label>
                <div class="col-sm-1">:</div>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="harga" name="harga" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="berat">Berat</label>
                <div class="col-sm-1">:</div>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="berat" name="berat" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="descproduk">Deskripsi</label>
                <div class="col-sm-1">:</div>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="5" id="descproduk" name="descproduk" required="required"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="imgproduk">Foto Produk</label>
                <div class="col-sm-1">:</div>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="imgproduk" name="imgproduk" required="required">
                </div>
            </div>
            <center><button type="submit" class="col-2 form-control btn-secondary">Simpan Data</button></center>
        </form>
    </div>

@endsection
