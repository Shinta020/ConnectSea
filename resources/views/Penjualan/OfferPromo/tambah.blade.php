@extends('layout.template')

@section('content')

<div class="container">
	<h3 class="text-center">Tambah Voucher</h3>

	<a href="/ofpro2" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	<form action="/ofpro2/store" method="post" class="table table-success">
		{{ csrf_field() }}
        <div class="">
            <div class="col-4"> Kode Voucher </div>
            <div class="col-8">
                <input type="string" name="kode" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Deskripsi </div>
            <div class="col-8">
                <input type="string" name="deskripsi" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Masa Berlaku </div>
            <div class="col-8">
                <input type="datetime" name="exp" required="required">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Voucher </div>
            <div class="col-8">
                <input type="file" name="img" required="required">
            </div>
        </div><br/>
		<div class="col-12 text-center">
		    <input type="submit" value="Simpan Data">
        </div>
	</form>
</div>
@endsection
