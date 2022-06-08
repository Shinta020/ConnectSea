@extends('layout.template')
@section('content')
    @foreach ($users as $p)
    <div class="container background-all">
        <div class="col-sm-2"></div>
        <div class="col-sm-7" class="">
            <center>
                <br />
                <h3 style="color: white; font-weight: bold;"> Ubah Alamat Pengiriman </h3>
                <br />
            </center>
            <div>
                <form action="/orderdetail/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}"> <br />
                    <div class="form-group">
                        <label class="control-label" style="color: white;" for="namaproduk">Nama :</label>
                        <input type="text" required="required" name="nama" id="nama" value="{{ $p->name }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="color: white;" for="namaproduk">Alamat :</label>
                        <textarea required="required" name="alamat" class="form-control">{{ $p->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="color: white;" for="namaproduk">No Telp :</label>
                        <input type="number" required="required" name="notelp" value="{{ $p->notelp }}"
                            class="form-control">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary" value="kirim">Update</button>
                    </center>
                    <br><br>
                </form>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    @endforeach
@endsection
