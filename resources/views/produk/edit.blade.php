@extends('layout.template')
@section('content')

	<h3>Edit Pegawai</h3>

	<a href="/produk"> Kembali</a>

	<br/>
	<br/>

	@foreach($produk as $p)
	<form action="/produk/update" method="post">
		{{ csrf_field() }}
		<div class="form-group">
            <label class="control-label col-sm-2" for="kategoriproduk">Kategori Produk</label>
            <div class="col-sm-1">:</div>
            <div class="col-sm-9">
                <select class="form-control" id="kategoriproduk" name="kategoriproduk" value="{{ $p->kategoriproduk }}" required="required">
                    <?php
                    $opt = array('Hasil Laut','Bibit','Pakan Ikan');
                    foreach($opt as $kategoriproduk) echo "<option value='".$kategoriproduk."'>".$kategoriproduk."</option>";
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="namaproduk">Nama Produk</label>
            <div class="col-sm-1">:</div>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="namaproduk" name="namaproduk" value="{{ $p->namaproduk }}" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="qty">Jumlah</label>
            <div class="col-sm-1">:</div>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="qty" name="qty" value="{{ $p->qty }}" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="harga">Harga</label>
            <div class="col-sm-1">:</div>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $p->harga }}" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="berat">Berat</label>
            <div class="col-sm-1">:</div>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="berat" name="berat" value="{{ $p->beratproduk }}" required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="descproduk">Deskripsi</label>
            <div class="col-sm-1">:</div>
            <div class="col-sm-9">
                <textarea class="form-control" rows="5" id="descproduk" name="descproduk" value="{{ $p->descproduk }}" required="required"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="imgproduk">Foto Produk</label>
            <div class="col-sm-1">:</div>
            <div class="col-sm-9">
                <input type="file" class="form-control" id="imgproduk" name="imgproduk" value="{{ $p->imgproduk }}" required="required">
            </div>
        </div>
        <center><button type="submit" class="col-2 form-control btn-secondary" value="kirim">Simpan Data</button></center>
	</form>
	@endforeach

@endsection
