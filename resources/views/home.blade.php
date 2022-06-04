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


        /* CountDown */


        #countdown {
            margin: 0 auto;
            display: block;
            position: relative;
            height: 40px;

        }

        #countdown p {
            color: #555555;
            text-align: center;
            font-size: 30px;
            padding: 20px;
            line-height: 1;
        }

        #clock span {
            float: left;
            text-align: center;
            font-size: 16px;
            margin: 0 5px;
            color: #000;
            padding: 5px;
            width: 52px;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #clock span:nth-child(1) {
            background: #7196da;
        }

        #clock span:nth-child(2) {
            background: #7196da;
        }

        #clock span:nth-child(3) {
            background: #7196da;
        }

        #clock span:nth-child(4) {
            background: #7196da;
            color: #000;
        }

        #clock:after {
            content: &quot;
            &quot;
            ;
            display: block;
            clear: both;
        }

        #units span {
            float: none;
            width: 40px;
            text-align: center;
            margin: 0;
            color: #55555;
            padding: 5px;
            box-sizing: border-box;
            letter-spacing: 1px;
        }

        @media (max-width: 640px) {
            #countdown {
                width: 100%;
                margin: 0 auto;
            }

            #units span {
                font-size: 12px;
            }

            .batas-promo {
                float: none
            }
        }

        @media (max-width: 360px) {
            #countdown {
                width: 100%;
                margin: 0 auto;
            }

            #countdown span {
                font-size: 20px;
            }

            #units span,
            #countdown p {
                font-size: 18px;
            }
        }

    </style>

    {{-- Countdown Timer --}}
    <script>
        /*<![CDATA[*/
        const updateTimer = (deadline) => {
            // calculates time left until deadline
            const time = deadline - new Date();
            return {
                //'days': Math.floor(time / (1000 * 60 * 60 * 24)),
                'hours': Math.floor((time / (1000 * 60 * 60)) % 24),
                'minutes': Math.floor((time / (1000 * 60)) % 60),
                'seconds': Math.floor((time / (1000)) % 60),
                'total': time
            };
        }

        const animateClock = (span) => {
            // animation lasts for 0.5 seconds
            span.className = 'turn';
            setTimeout(() => {
                span.className = '';
            }, 500);
        }

        const startTimer = (id, deadline) => {
            // calls updateTimer every second
            const timeInterval = setInterval(() => {
                const clock = document.getElementById(id);
                let timer = updateTimer(deadline);

                clock.innerHTML =
                    //'<span>' + timer.days + '</span>' +
                    '<span>' + timer.hours + '</span>' +
                    '<span>' + timer.minutes + '</span>' +
                    '<span>' + timer.seconds + '</span>';

                const spans = clock.getElementsByTagName("span");
                animateClock(spans[3]);
                if (timer.seconds == 59) animateClock(spans[2]);
                if (timer.minutes == 59 && timer.seconds == 59) animateClock(spans[1]);
                if (timer.minutes == 23 && timer.minutes == 59 && timer.seconds == 59) animateClock(spans[0]);
                // check if deadline has passed
                if (timer.total < 1) {
                    clearInterval(timeInterval);
                    clock.innerHTML =
                        '<span>0</span><span>0</span><span>0</span><span>0</span>';
                }

            }, 1000);
        }
        /*]]>*/
    </script>
    <div class="container header-left background-all">
        <div>
            <div class="col-4"></div>
            <div class="col-4 bcgrnd">
                <center>
                    <h2 class="ofpro-font">6.6 Special Offer</h2>
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
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="connectsea\ofpro.h1.jpg" alt="promo1">
                    </div>

                    <div class="item">
                        <img src="connectsea\ofpro.h2.jpg" alt="promo2">
                    </div>

                    <div class="item">
                        <img src="connectsea\ofpro.h3.jpg" alt="promo3">
                    </div>

                    <div class="item">
                        <img src="connectsea\ofpro.h4.jpg" alt="promo4">
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
                    <a href="/pakan">
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
                            <div id='clock'></div>
                            <!--<div id='units'>
                                            <span>Hari</span>
                                            <span>Jam</span>
                                            <span>Menit</span>
                                            <span>Detik</span>
                                            </div>-->
                        </div>
                        <script>
                            window.onload = () => {
                                const deadline = new Date("June 2, 2022 00:00:00");
                                startTimer("clock", deadline)
                            };
                            // Ganti tahun bulan tanggal dan jam sesuai dengan batas promo
                        </script>

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
