@extends('layout.template')
@section('content')
@foreach($users as $p)
	<form action="/profile/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
            <div class="container-fluid">
            <div class="row">
                <div class="col col-lg-4 col-md-4">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                    {{-- <div class="text-center">
                        <img src="connectsea/{{ $p->image }}" width="100px" height="100px" class="img-circle">
                    </div> --}}
                    <form>
                        <div class="text-center">
                            <img src="connectsea/{{ $p->image }}" width="100px" height="100px" class="img-circle">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <input type="file"value="{{ $p->image }}" name="image" id="image">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" required="required" name="nama" id="nama" value="{{ $p->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="phone">Alamat</label>
                        <textarea required="required" name="alamat" class="form-control">{{ $p->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">No Telp</label>
                            <input type="number" required="required" name="notelp" value="{{ $p->notelp }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" required="required" name="email" value="{{ $p->email }}" class="form-control">
                        </div>
                        <div class="form-group">
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
