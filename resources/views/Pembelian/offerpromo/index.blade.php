@extends("layout.template")

@section('content')

<div class="container">
	<h3 class="text-center">Promo and Voucher</h3>
	<a href="/ofpro2/tambah" class="btn btn-secondary"> + Tambah Voucher</a>
	<br/>
	<div class="container" align="center">
        <p>Cari Voucher Berdasarkan Nama :</p>
	    <form action="/ofpro2/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari voucher .." value="{{ old('cari') }}">
            <input class="form-control btn-success" type="submit" value="CARI">
	    </form>
    </div>
	<table border="1" class="table table-primary mt-3">

		<tr>
            <th>No</th>
            <th>Kode Voucher</th>
			<th>Deskripsi</th>
			<th>Masa Berlaku</th>
			<th>Voucher</th>
		</tr>

		@foreach($voucher as $p)

		<tr>
			<td>{{ $loop->iteration }}</td>
            <td>{{ $p->kodevoucher }}</td>
			<td>{{ $p->desc }}</td>
			<td>{{ $p->masaberlaku }}</td>
			<td>{{ $p->imgvoucher }}</td>
            <td>
                <a href="/Pembelian/offerpromo/detail/{{ $p->kodevoucher }}" class="btn btn-info">View Detail</a>
            </td>
		</tr>
		@endforeach
	</table>



</div>

@endsection
