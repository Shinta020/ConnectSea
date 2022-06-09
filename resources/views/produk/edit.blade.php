@extends('layout.template')
@section('content')

<div class="col-md-9">
	<center>
        <h3 style="color: #004080; font-weight: bold;">Edit Produk</h3>
    </center>
	<a href="/produk">
        <button type="submit" class="btn btn-primary">Kembali</button>
    </a>

	<br/>
	<br/>

	@foreach($produk as $p)
	<form action="/produk/update" method="post">
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label" style="" for="kategoriproduk">Kategori Produk :</label>
            <select class="form-control" id="kategoriproduk" name="kategoriproduk" value="{{ $p->kategoriproduk }} required="required">
                <?php
                $opt = array('Hasil Laut','Bibit','Pakan Ikan');
                foreach($opt as $kategoriproduk) echo "<option value='".$kategoriproduk."'>".$kategoriproduk."</option>";
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="namaproduk">Nama Produk :</label>
            <input type="text" class="form-control" id="namaproduk" name="namaproduk" value="{{ $p->namaproduk }}" required="required">
        </div>
        <div class="form-group">
            <label class="control-label" for="qty">Jumlah :</label>
            <input type="number" class="form-control" id="qty" name="qty" value="{{ $p->qty }}" required="required">
        </div>
        <div class="form-group">
            <label class="control-label" for="harga">Harga :</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $p->harga }}" required="required">
        </div>
        <div class="form-group">
            <label class="control-label" for="berat">Berat :</label>
            <input type="number" class="form-control" id="berat" name="berat" value="{{ $p->beratproduk }}" required="required">
        </div>
        <div class="form-group">
            <label class="control-label" for="descproduk">Deskripsi dan Manfaat :</label>
            <textarea class="form-control" rows="5" id="descproduk" name="descproduk" value="{{ $p->descproduk }}" required="required"></textarea>
        </div>
        <div class="form-group">
            <label class="control-label" for="imgproduk">Foto Produk :</label>
            <input type="file" id="imgproduk" name="imgproduk" value="{{ $p->imgproduk }}" required="required">
        </div>
        <br/>
        <center>
            <button type="submit" class="btn btn-primary" value="kirim">Simpan Data Produk</button>
        </center>
	</form>
	@endforeach

</div>

<div class="col-md-3">
    <br/>
    <center>
        <img src="{{asset('connectsea\penjual-ikan.jpeg')}}" style="width: 270px;">
    </center>
</div>

@endsection
