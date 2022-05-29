@extends("layout.template")
@section('content')
<table border="1">
    <tr>
        <th>ID Keranjang</th>
        <th>Kode Produk</th>
        <th>ID Akun</th>
    </tr>
    @foreach($keranjang_belanja as $k)
    <tr>
        <td>{{ $k->idkeranjang }}</td>
        <td>{{ $k->kodeproduk }}</td>
        <td>{{ $k->akunid }}</td>
        {{-- <td>
            <a href="/pegawai/edit/{{ $p->pegawai_id }}">Checkout</a>
            |
            <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
        </td> --}}
    </tr>
    @endforeach
</table>
@endsection
