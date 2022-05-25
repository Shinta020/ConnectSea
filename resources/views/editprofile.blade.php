@extends('layout.template')
@section('content')
<div class="container-fluid">
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
</div>
@endsection
