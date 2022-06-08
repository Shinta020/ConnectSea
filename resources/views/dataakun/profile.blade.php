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
          <br/>
          @foreach($users as $p)
          <div class="text-center">
            <img src="connectsea/{{ $p->image }}"width="100px" height="100px" class="img-circle">
          </div>
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
          <!--<a href="/profile/delete/{{ $p->id }}" class="btn btn-danger btn-block">Delete Account</a>-->
            <a type="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Delete Account</a>
            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Delete Account</button>-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete Account</h4>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus akun?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <div class="col-sm-10">
                                <a href="/profile/delete/{{ $p->id }}" class="btn btn-primary" role="button">Yes</a>
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
