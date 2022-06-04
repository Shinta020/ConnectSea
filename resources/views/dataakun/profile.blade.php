@extends("layout.template")
@section('content')
<style>
    .kotak {
            border-radius: 5px;
            height : 100px;
            background: white;
            padding: 50px;

        }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-8 col-md-8">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img src="connectsea\foto-profil-2.jpg" width="100px" height="100px" class="img-circle">
          </div>
          @foreach($users as $p)
          <h3 class="profile-username text-center" value="{{ $p->name }}" >{{ $p->name }}</h3>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
            Alamat
          </strong>
          <p class="text-muted">
            {{ $p->alamat }}
          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
            {{ $p->email }}
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            {{ $p->notelp }}
          </p>
          <hr>
          <a href="/profile/edit/{{ $p->id }}" class="btn btn-primary btn-block">Edit Profile</a>
          <a href="/profile/delete/{{ $p->id }}" class="btn btn-danger btn-block">Delete Account</a>
        @endforeach
        </div>
      </div>
    </div>

    <div class="col col-lg-4 col-md-4">
    <div class="kotak">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title text-center">Option</h3>
          </div>
          <div class="card-body">
            <a href="/historyorder" class="btn btn-info btn-block">History Orders</a>
            <br>
            <a href="/profile/edit" class="btn btn-info btn-block">Pendings Review</a>
            <br>
            <a href="/profile/edit" class="btn btn-info btn-block">FAQ</a>
            <br>
            <a href="/profile/edit" class="btn btn-info btn-block">Change Password</a>
            <br>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
@endsection
