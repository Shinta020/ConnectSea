<!DOCTYPE html>
<html>
<head>
	<title>Input Produk</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">Input Produk</a></h2>
	<h3>Data Produk</h3>

	<a href="/produk"> Kembali</a>

	<br/>
	<br/>

	<form action="/produk/store" method="post">
		{{ csrf_field() }}
		<div class="col-8" style="color:black">
            <div class="row">
                <label class="col-3" for="namaproduk"> Nama Produk </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="text" name="namaproduk" required="required" style="width: 100%">
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="harga"> Harga </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="text" name="harga" required="required" style="width: 100%">
                </div>
            </div>
            <br/>

            <div class="row">
                <label class="col-3" for="descproduk"> Deskripsi </label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <textarea name="descproduk" required="required" style="width: 100%"></textarea>
                </div>
            </div>
            <br/>
            <div class="row">
                <label class="col-3" for="imgproduk">Select a Picture</label>
                <div class="col-1">:</div>
                <div class="col-8">
                    <input type="file" name="imgproduk">
                </div>
            </div>
            <br/>
            <center><button type="submit" class="col-2 form-control btn-secondary">Input Produk</button></center>
        </div>
	</form>

</body>
</html>
