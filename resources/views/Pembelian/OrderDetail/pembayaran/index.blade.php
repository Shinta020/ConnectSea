@extends("layout.template")

@section('content')

<div class="container">
	<h3 class="text-center">Promo and Voucher</h3>
	<a href="/ofpro2/tambah" class="btn btn-secondary"> + Tambah Metode Pembayaran</a>
	<br/>
	<table border="1" class="table table-primary mt-3">

		<tr>
            <th>No</th>
			<th>Metode Pembayaran</th>
			<th>Jenis Pemabayaran</th>
			<th>No Rekening</th>
		</tr>

		@foreach($method as $p)

		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $p->metode }}</td>
			<td>{{ $p->jenis }}</td>
            <td>{{ $p->norek }}</td>
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
