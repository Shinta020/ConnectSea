@extends('layout.template')

@section('content')
    <style>
        #kotak {
            border-radius: 10px;
            height: 340px;
            background: white;
            padding: 30px;

        }

        #box1 {
            background-color: #F5F3F3;
            height: 70px;
            padding: 18px;
            border-radius: 10px;
            text-decoration: none;
        }

        #box2 {
            background-color: #F5F3F3;
            height: 200px;
            padding: 18px;
            border-radius: 10px;
        }

        #kategori {
            color: #2D4C85;
            text-align: center;
            font-size: 25px;
            font-family: Lusitana;
            font-weight: bold;
            text-decoration: none;
        }

        .fa-angle-right {
            justify-content: right;
        }

        #panah {
            font-size: 30px;
            margin-top: 140px;
        }

        #panah2 {
            padding: 7px;
            font-size: 20px;
            float: right;
            text-decoration: none;
        }

        #icon {
            width: 70px;
            length: 70px;
        }

        #fs {
            padding-left: 40px;
            color: #22478A;
            font-family: Lora;
            font-weight: bold;
            font-style: italic;
            font-size: 27px;
            text-align: center;
        }

        #fsimg {
            width: 75px;
            height: 80px;
            border-radius: 50px;
            margin: 5px;

        }

        #textfs {
            color: black;
            font-family: Lora;
            font-weight: bold;
            font-size: 18px;
            text-align: center;

        }

        #home, #home1, #home2 {
            width:550px;
            height:200px;
        }


        /* CountDown */
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

    {{-- Countdown Timer --}}
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
    <div class="container header-left background-all">
        <div>
            <div class="col-4"></div>
            <div class="col-4 bcgrnd">
                <center>
                    <h2 class="ofpro-font">ConnectSea</h2>
                </center>
            </div>
            <div class="col-4"></div>
        </div>

        <div class="bcgrnd">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="connectsea\home.png" alt="promo1" id="home">
                    </div>

                    <div class="item">
                        <img src="connectsea\home1.png" alt="promo2" id="home1">
                    </div>

                    <div class="item">
                        <img src="connectsea\home2.png" alt="promo3" id="home2">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <br>

        <div id="kotak">
            <div class="col-sm-1">
                <div class="row-sm-1">
                    <img src="/connectsea/kategorihasillaut.png" id="icon">
                </div>
                <br>
                <br>
                <div class="row-sm-1">
                    <div id="icon">
                        <img src="/connectsea/kategoripakan.png" id="icon">
                    </div>
                </div>
                <br>
                <br>
                <div class="row-sm-1">
                    <div id="icon">
                        <img src="/connectsea/kategoribibit.png" id="icon">
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="row-sm-5">
                    <a href="/ikan">
                        <div id="box1"><span id="kategori">Hasil Laut</span>
                            <span class="glyphicon glyphicon-chevron-right" id="panah2"></span>
                        </div>
                    </a>
                </div>
                <br>
                <br>
                <div class="row-sm-5">
                    <a href="/pakan">
                        <div id="box1"><span id="kategori">Pakan</span>
                            <span class="glyphicon glyphicon-chevron-right" id="panah2"></span>
                        </div>
                    </a>
                </div>
                <br>
                <br>
                <div class="row-sm-5">
                    <a href="/bibit">
                        <div id="box1"><span id="kategori">Bibit</span>
                            <span class="glyphicon glyphicon-chevron-right" id="panah2"></span>
                        </div>
                    </a>
                </div>
                <br>
            </div>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="row-sm-1">
                            <img src="/connectsea/iconfs.png" id="icon">
                        </div>
                    </div>
                    <div id="box1">
                        <div class="col-sm-6">
                            <p id="fs">Flash Sale</p>
                        </div>
                        <div id='countdown' class="col-sm">
                            <div id="clock">
                                {{-- <div><span id="days"></span>
                                <p>Hari</p>
                            </div> --}}
                                <span id="hours"></span>
                                <span id="minutes"></span>
                                <span id="seconds"></span>

                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="/getdetailproduk/1">
                            <div id="box2">
                                <center><img src="{{ asset('connectsea/bandeng.jpg') }}" id="fsimg">
                                    <center>
                                        <span id="textfs">Bandeng</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="/getdetailproduk/1">
                            <div id="box2">
                                <center><img src="{{ asset('connectsea/tongkol.jpg') }}" id="fsimg">
                                    <center>
                                        <span id="textfs">Tongkol</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="/getdetailproduk/1">
                            <div id="box2">
                                <center><img src="{{ asset('connectsea/takari.jpg') }}" id="fsimg">
                                    <center>
                                        <span id="textfs">Takari</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
                <div id="panah"><a class="right" href="#myCarousel">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <br>
        </div>
        <br>
    </div>
@endsection
