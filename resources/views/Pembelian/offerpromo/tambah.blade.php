@extends('layout.template')

@section('content')

<div class="col-md-6">
    <div class="container-fluid">
        <br/>
        <h3 class="text-center" style="color: #004080; font-weight: bold;">Promo and Voucher</h3>

        <br/>
        <br/>

        <a href="/ofpro2" class="btn btn-secondary"> Kembali</a>

        <br/>
        <br/>

        <div class="well">
            <form action="/ofpro2/store" method="post" class="table table-success">
                {{ csrf_field() }}
                <div class="">
                    <div class="col-4"> Kode Voucher </div>
                    <div class="col-8">
                        <input type="string" name="kode" required="required">
                    </div>
                </div><br/>
                <div class="mt-5">
                    <div class="col-4"> Deskripsi </div>
                    <div class="col-8">
                        <input type="string" name="deskripsi" required="required">
                    </div>
                </div><br/>
                <div class="mt-5">
                    <div class="col-4"> Masa Berlaku </div>
                    <div class="col-8">
                        <input type="datetime" name="exp" required="required">
                    </div>
                </div><br/>
                <div class="mt-5">
                    <div class="col-4"> Voucher </div>
                    <div class="col-8">
                        <input type="file" name="img" required="required">
                    </div>
                </div><br/>
                <div class="col-12 text-center">
                    <input type="submit" value="Simpan Data">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="col-md-6">
    <br/>
    <br/>
    <img src="{{asset('connectsea\pasar-ikan.jpg')}}" style="width: 600px;">
</div>
@endsection
