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
               <!--     <center><img src="connectsea/{{$p -> imgproduk}}" alt="Cinque Terre" id="tuna"></center> -->
                </div>
                <h2> Detail Produk</h2>
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

            <h2> Deskripsi dan Manfaat </h2>
            <div class="row-sm-12">
                <div id="kotak2">
                    <p>{{ $p->descproduk }}</p>
                </div>
            </div>
            <hr>

            <!-- Input Ulasan by Cahya -->
            <div class="col-md-10"> </div>
            <div class="col-md-2">
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Beri Ulasan</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <center><strong><h4 class="modal-title" style="color: black;">Ulasan Produk</h4></strong></center>
                        </div>
                        <form class="form-group" action="/getdetailproduk" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label" for="tglulasan">Tanggal Ulasan :</label>
                                    <input type="date" id="tglulasan" name="tglulasan" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="nama">Nama :</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="kodeproduk">Nama Produk :</label>
                                    <select id="kodeproduk" name="kodeproduk" required="required" style="width: 100%">
                                        @foreach($produk as $p)
                                            <option value="{{ $p->kodeproduk }}"> {{ $p->namaproduk }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="desculasan">Deskripsi Ulasan :</label>
                                    <input type="text" class="form-control" id="desculasan" name="desculasan" required="required">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="gambar">Gambar :</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="color: black;">Close</button>
                                <button type="submit" class="btn btn-primary" value="kirim">Kirim Ulasan</button>
                            </div>
                        </form>
                      </div>

                    </div>
                  </div>
            </div>

            <!-- Tampilan Ulasan -->
            <div class="row">
                <div class="col-sm-1">
                  <!--  <img src="\connectsea\fotoulasan.png" id="foto"> -->
                </div>
                <div class="col-sm-2">
                    <div class="row">
                    <!--    <h6>Olden Cantika </h6><br> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $p->kodeproduk }}" name="kodeproduk">
                        <input type="hidden" value="{{ $p->namaproduk }}" name="namaproduk">
                        <input type="hidden" value="{{ $p->harga }}" name="harga">
                        <input type="hidden" value="{{ $p->imgproduk }}" name="imgproduk">
                        <input type="hidden" value="1" name="quantity">
                       <center><button class="btn btn-primary rounded">Add to Cart</button></center>
                    </form>
                </div>

                <div class="col-sm-5">
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
