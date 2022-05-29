@extends('layout.template')
@section('content')
@foreach($users as $p)
	<form action="/profile/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->name }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
        No. Telp <input type="number" required="required" name="notelp" value="{{ $p->notelp }}"> <br/>
		Email <input type="text" required="required" name="email" value="{{ $p->email }}"> <br/>
		 <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endforeach

{{-- <div class="container-fluid">
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img src="connectsea\foto-profil-2.jpg" width="100px" height="100px" class="img-circle">
          </div>
          <form>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="file" name="foto" id="foto">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
              </div>
            </div>
          </form>
          <hr>
          <form>
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="phone">No Tlp</label>
              <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection
