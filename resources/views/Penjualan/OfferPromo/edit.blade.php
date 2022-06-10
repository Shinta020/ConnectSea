@extends('layout.template')

@section('content')

<div class="container">
	<h3 class="text-center">Edit Voucher</h3>

	<a href="/ofpro2" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

	@foreach($voucher as $p)
	<form action="/ofpro2/update" method="post" class="table table-success">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        <div class="">
            <div class="col-4"> Kode Voucher </div>
            <div class="col-8">
                <input type="string" required="required" name="kode" value="{{ $p->kodevoucher }}">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Deskripsi </div>
            <div class="col-8">
                <input type="string" required="required" name="desc" value="{{ $p->desc }}">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Masa Berlaku </div>
            <div class="col-8">
                <input type="datetime" required="required" name="exp" value="{{ $p->masaberlaku }}">
            </div>
        </div><br/>
        <div class="mt-5">
            <div class="col-4"> Voucher </div>
            <div class="col-8">
                <input type="file" required="required" name="img" value="{{ $p->imgvoucher }}">
            </div>
        </div><br/>
		<div class="col-12 text-center">
		    <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach
</div>

@endsection
