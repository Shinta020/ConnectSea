@extends('layout.template')
@section('content')
    @foreach ($users as $p)
        <form action="/orderdetail/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}"> <br />
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-lg-4 col-md-4">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <hr>
                                <form>
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" required="required" name="nama" id="nama"
                                            value="{{ $p->name }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea required="required" name="alamat" class="form-control">{{ $p->alamat }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="notelp">No Telp</label>
                                        <input type="number" required="required" name="notelp" value="{{ $p->notelp }}"
                                            class="form-control">
                                    </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
