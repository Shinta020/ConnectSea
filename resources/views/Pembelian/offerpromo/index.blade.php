@extends("layout.template")

@section('content')

<div class="container">
	<br/>
    <h3 class="text-center" style="color: #004080; font-weight: bold;">Promo and Voucher</h3>
	<br/>
    <a href="/ofpro2/tambah">
        <button type="submit" class="btn btn-primary">+ Tambah Voucher</button>
    </a>
	<br/>
    <br/>

	<table border="2" class="table table-primary mt-3">

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
                <a href="/ofpro2/detail/{{ $p->id }}" class="btn btn-info">View Detail</a>
                <a href="/ofpro2/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
				<a href="/ofpro2/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
            </td>
		</tr>
		@endforeach
	</table>
</div>

@endsection
