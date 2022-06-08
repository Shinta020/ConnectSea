@extends('layout.template')

@section('title', 'product ikan')

@section('content')
    <style>
        #tuna {
            border-radius: 90px;
            width: 200px;
            height: 200px;
        }

        #kotak {
            border-radius: 40px;
            height: 150px;
            background: white;
            padding: 30px;
        }

        h1 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 30px;
            color: white;
        }

        h2 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 20px;
            color: white;
        }

        h6 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 10px;
            color: white;
        }

        #kotak2 {
            border-radius: 40px;
            height: auto;
            background: white;
            padding: 30px;
        }

        .btn {
            width: 150px;
        }

    </style>
    @foreach ($produk as $p)
        <div class="container header-left background-all">
            <h1>{{ $p->namaproduk }}</h1>
            <div class="row">
                <div class="col-sm-3">
                    <center><img src="connectsea/{{$p -> imgproduk}}" alt="Cinque Terre" id="tuna"></center>
                </div>
                <h2>Detail Produk</h2>
                <div class="col-sm-9">
                    <div id="kotak">
                        <div class="row">
                            <label class="control-label col-sm-3" for="kategoriproduk">Kategori Produk</label>
                            <div class="col-sm-1">:</div>
                            <div class="col-sm-5">{{ $p->kategoriproduk }}</div>
                        </div>
                        <div class="row">
                            <label class="control-label col-sm-3" for="kategoriproduk">Stok</label>
                            <div class="col-sm-1">:</div>
                            <div class="col-sm-5">{{ $p->qty }}</div>
                        </div>
                        <div class="row">
                            <label class="control-label col-sm-3" for="kategoriproduk">Berat</label>
                            <div class="col-sm-1">:</div>
                            <div class="col-sm-5">{{ $p->beratproduk }}</div>
                        </div>
                        <div class="row">
                            <label class="control-label col-sm-3" for="kategoriproduk">Harga</label>
                            <div class="col-sm-1">:</div>
                            <div class="col-sm-5">{{ $p->harga }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <h2> Manfaat </h2>
            <div class="row-sm-12">
                <div id="kotak2">
                    <p>Kakap merah mengandung vitamin D dan vitamin E. Kandungan vitamin D dapat membuat tulang kuat dan
                        vitamin
                        E mendukung pertumbuhan sel darah merah yang sehat, membantu transportasi oksigen, dan menjadi
                        antioksidan alami bagi tubuh. Kakap merah mengandung magnesium dan selenium yang penting bagi tubuh.
                    </p>
                </div>
            </div>
            <hr>

            <!-- Input Ulasan by Cahya -->
            <div class="col-md-9"> </div>
            <div class="col-md-3">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Modal Header</h4>
                        </div>

                        <div class="modal-body">
                          <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                      </div>

                    </div>
                  </div>
            </div>

            <!-- Tampilan Ulasan -->
            <div class="row">
                <div class="col-sm-1">
                    <img src="\connectsea\fotoulasan.png" id="foto">
                </div>
                <div class="col-sm-2">
                    <div class="row">
                        <h6>Olden Cantika </h6><br>
                    </div>
                </div>
                <div class="col-sm-1">
                    <img src="\connectsea\bintang.png" id="foto">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="button text-right">
                        <a href="/keranjangbelanja" class="btn btn-primary text-right">
                            <img src="{{ asset('connectsea\keranjang-belanja-header.png') }}" width="20px" height="20px">
                            <span>Add to Cart</span>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="button text-left">
                        <a href="https://wa.me/6285806951149" class="btn btn-primary text-right">Chat</a>
                    </div>
                </div>
            </div>
        </div>


        {{-- <tr>
            <td>{{ $p->namaproduk }}</td>
            <td>{{ $p->harga }}</td>
            <td>{{ $p->descproduk }}</td>
            <td>{{ $p->imgproduk }}</td>
        </tr> --}}
    @endforeach

@endsection
