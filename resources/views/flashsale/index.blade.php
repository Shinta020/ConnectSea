@extends('layout.template')

@section('content')

<!-- Style Countdown -->
<style>

    #countdown {
        margin: 0 auto;
        display: block;
        position: relative;
        height: 40px;

    }

    #days,
    #hours,
    #minutes,
    #seconds {
        border-radius: 5px;
        text-align: center;
        padding: 5px;
        font-size: 20px;
        background: #5D87D3;
        width: 55px;
        display: inline-block;
        color: black;
    }

    span.turn {
        animation: turn 0.7s ease;
    }

    @keyframes turn {
        0% {
            transform: rotateX(0deg)
        }

        100% {
            transform: rotateX(360deg)
        }
    }

</style>

{{-- Script Countdown Timer --}}
<script type="text/javascript">
    function animation(span) {
        span.className = "turn";
        setTimeout(function() {
            span.className = ""
        }, 700);
    }

    function Countdown() {

        setInterval(function() {

            //var hari    = document.getElementById("days");
            var jam = document.getElementById("hours");
            var menit = document.getElementById("minutes");
            var detik = document.getElementById("seconds");

            var deadline = new Date("June 9, 2022 23:59:59");
            var waktu = new Date();
            var distance = deadline - waktu;

            //var days    = Math.floor((distance / (1000*60*60*24)));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            //    if (days < 10)
            //    {
            //       days = '0' + days;
            //    }
            if (hours < 10) {
                hours = '0' + hours;
            }
            if (minutes < 10) {
                minutes = '0' + minutes;
            }
            if (seconds < 10) {
                seconds = '0' + seconds;
            }

            //hari.innerHTML    = days;
            jam.innerHTML = hours;
            menit.innerHTML = minutes;
            detik.innerHTML = seconds;
            //animation
            animation(detik);
            if (seconds == 0) animation(menit);
            if (minutes == 0) animation(jam);
            if (hours == 0) animation(hari);

        }, 1000);
    }

    Countdown();
</script>

<br/>

<div class="row">
    <div class="col-md-1">
        <div class="row-sm-1">
            <img src="/connectsea/iconfs.png" id="icon">
        </div>
    </div>
    <div class="col-sm-9">
        <br/>
        <h2 style="color:#004080;">Flash Sale</h2>
    </div>
    <div id='countdown' class="col-md-2">
        <br/>
        <div id="clock">
            <span id="hours"></span>
            <span id="minutes"></span>
            <span id="seconds"></span>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-9">
        <br/>
        <div class="container-fluid" style="color: black;">
            @foreach ($flashsale as $p)
            <div class="row">
                <a href="/getdetailproduk/{{ $p->idproduk }}">
                    <div class="col-md-2">
                        <center><img src="connectsea/{{ $p->imgflashsale }}"width="90px" height="90px"></center>
                    </div>
                    <div class="col-md-8">
                        <h3>{{ $p->namaproduk }}</h3>
                        <p>Rp {{ $p->hargaflashsale }},00</p>
                        <hr>
                    </div>
                    <div class="col-md-2>
                </a>
                    <a href="#">
                        <br/>
                        <button type="button" class="btn btn-primary"> Add to Cart</button>
                    </a>
            </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="col-md-2">
        <img src="{{asset('connectsea\gebyar-flashsale.png')}}" style="width: 280px;">
    </div>
</div>

@endsection
