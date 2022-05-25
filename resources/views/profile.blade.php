@extends("layout.template")
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-8 col-md-8">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img src="connectsea\foto-profil-2.jpg" width="100px" height="100px" class="img-circle">
          </div>
          <h3 class="profile-username text-center">Akihiko Avaron</h3>
          <p class="text-muted text-center">Bergabung sejak : 20 Des 2020</p>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
            Alamat
          </strong>
          <p class="text-muted">
            Sidoarjo, Jawa Timur
          </p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
            akahikoa@gmail.com
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            081284025527
          </p>
          <hr>
          <a href="/profile/edit" class="btn btn-primary btn-block">Edit Profile</a>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-md-4">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title text-center">Option</h3>
          </div>
          <div class="card-body">
            <a href="/profile/edit" class="btn btn-info btn-block">History Orders</a>
            <br>
            <a href="/profile/edit" class="btn btn-info btn-block">Pendings Review</a>
            <br>
            <a href="/profile/edit" class="btn btn-info btn-block">FAQ</a>
            <br>
            <a href="/profile/edit" class="btn btn-info btn-block">Change Password</a>
            <br>
            <a href="/profile/edit" class="btn btn-danger btn-block">Delete Account</a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
