@extends("layout.template")
@section('content')
<style>
    .kotak {
            border-radius: 5px;
            height : 100px;
            background: white;
            padding: 50px;
        }

    .kotak2 {
            border-radius: 5px;
            height : 80px;
            background: white;
            padding: 50px;
        }

    .kotak3 {
            border-radius: 5px;
            height : 50px;
            padding: 20px;
        }

    .box1 {
            background-color: rgb(18, 60, 119);
            height: 325px;
            padding: 10px;
            border-radius: 10px;
        }

    .box2 {
        background-color: rgb(179, 171, 171);
        height: 50px;
        padding: 10px;
        border-radius: 10px;
        }

    #kategori {
            color: rgb(255, 255, 255);
            text-align: center;
        }

    #kategori2 {
            color: rgb(255, 255, 255);
        }
</style>
<div class="kotak2">
    <div class="row-sm-10">
        <div class="box1"><span id="kategori2">
            <center><h4>Nama Toko</h4></center>
            <hr>
            <center><p>Silahkan untuk menghubungi kontak di bawah ini</p></center>
            <br>
            <br>
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <div class="box2">
                    <a href="https://wa.me/+6281284025527?text=Halo%20admin%20saya%20ingin%20melakukan%20pembayaran%20"><span id="kategori"><center>Kontak Seller</center></span>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr>
    </div>
</div>
@endsection

{{-- @extends('layout.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>

                <div class="panel-body">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer">
                    <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
