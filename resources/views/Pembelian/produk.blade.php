<!--@extends("layout")
@section("judul" , "Produk")
@section("content")
    <table border="1" cellpadding="10"></table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
        <?php $no=1;?>
        @foreach ($produk as $pro)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$pro->namaproduk}}</td>
            <td>{{$pro->harga}}</td>
            <td>
                <a href="{{url('/cart/tambah/'.$pro->kodeproduk)}}">Add to Cart </a>
            </td>
        </tr>
        @endforeach
    </table>

    @endsection -->
