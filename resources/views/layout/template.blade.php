<!DOCTYPE html>
<html lang="en">
    <style>
        .chat {
          list-style: none;
          margin: 0;
          padding: 0;
        }

        .chat li {
          margin-bottom: 10px;
          padding-bottom: 5px;
          border-bottom: 1px dotted #B3A9A9;
        }

        .chat li .chat-body p {
          margin: 0;
          color: #777777;
        }

        .panel-body {
          overflow-y: scroll;
          height: 350px;
        }

        ::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
          background-color: #F5F5F5;
        }

        ::-webkit-scrollbar {
          width: 12px;
          background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
          background-color: #555;
        }
      </style>
<head>

    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="Isna Nur Azis">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ConnectSea</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

    <!-- plugins -->

    <link rel="stylesheet" href="{{ asset('asset/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/plugins/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/plugins/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/plugins/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/jquery.ui.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >

    <!-- end: Css -->

    <!-- script icon-->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src=" {{ url ('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
    <script src=" {{ url ('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"  referrerpolicy="no-referrer"></script>

    <!-- <link rel="shortcut icon" href="asset/img/logomi.png"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body id="mimin" class="dashboard">

    <div class="container-fluid">

    <!-- start: Header -->
    <nav class="navbar navbar-default header navbar-fixed-top">
        <div class="col-md-12 nav-wrapper">
            <div class="navbar-header col-md-2" style="width:100%;">
                <div class="opener-left-menu is-open">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>

                <div class="col-md-1">
                    <img src="{{asset('connectsea\logo.png')}}"width="50px" height="50px" class="logo-header">
                </div>
                <div class="col-md-0">
                    <title>@yield('title')</title>
                </div>

                <div class="col-md-7">
                    <!--
                    <div class="form-group row" style="margin-top: 10px;" action="/produk" method="GET">
                        <div class="col-md-4"><input class="form-control" type="text" name="cari" placeholder="Type anywhere to Search" value="{{ old('cari') }}"></div>
                        <div class="col-md-1"><input class="form-control btn btn-link" type="submit" value="Telusuri"></div>
                        <div class="col-md-7"> </div>
                    </div>
                    -->
                    <ul class="nav navbar-nav search-nav">
                        <li>
                            <div class="search">
                                <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                                <div class="form-group form-animate-text">
                                    <input type="text" class="form-text" required>
                                    <span class="bar"></span>
                                    <label class="label-search">Type anywhere to <b>Search</b> </label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <ul class="nav navbar-nav navbar-right user-nav">
                        <li class="user-name"><span>Akihiko Avaron</span></li>
                        <li class="dropdown avatar-dropdown">
                            <img src="{{asset('asset/img/avatar.jpg')}}" class="img-circle avatar" alt="user name"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" />
                            <ul class="">
                        </li>
                    </ul>
                </div>


                <div class="col-md-1">
                    <a href="/cart"><img src="{{asset('connectsea\keranjang-belanja-header.png')}}" width="40px" height="40px" class="keranjang-belanja-header"></a>
                </div>

            </div>
    </nav>
    <!-- end: Header -->

    <div class="container-fluid mimin-wrapper">

        <!-- start:Left Menu -->
        <div id="left-menu">
            <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li>
                        <div>
                            <center> <img src="{{ asset('connectsea\header-left.png')}}" width="135px" height="135px"
                                    class="header-left"> </center>
                        </div>
                    </li>
                    <li><a href="/home" class=" nav-header">
                        <span class="fa fa-home" aria-hidden="true"></span> Home <span
                            class="fa-angle-right fa right-arrow text-right"></span> </a>
                    </li>
                    <li>
                        <a href="/profile" class=" nav-header">
                            <span class="fa fa-user"></span> Profile
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/chat" class=" nav-header">
                            <span class="fa fa-envelope" aria-hidden="true"></span> Chat
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/historyorder" class=" nav-header">
                            <span class="fa fa-history" aria-hidden="true"></span> History Orders
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                        </a>
                    </li>
                    <li><a href="/ofpro" class="  nav-header">
                            <span class="fa fa-tags" aria-hidden="true"></span> Offer and Promo <span
                                class="fa-angle-right fa right-arrow text-right"></span> </a>
                    </li>
                    <li><a href="/privacypolicy" class=" nav-header"><span
                                class="fa fa-sticky-note-o"></span>
                            Privacy Policy <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    </li>
                    <li><a href="help" class=" nav-header"><span class="fa fa-shield"></span>
                            Help <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    </li>
                    <li><a href="/startselling" class="nav-header"><span class="glyphicon glyphicon-equalizer"></span>
                            Start Selling <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="fa fa-check-square-o"></span> Sign Out
                        <span class="fa-angle-right fa right-arrow text-right"></span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
            </div>
        </div>
                        <!-- end: Left Menu -->

                        <!-- start: content -->
                        <div id="content">

                                @section('content')
                                @show

                        </div>
                        <!-- end: content -->

                                <!-- start: Javascript -->
                                         <!-- start: Javascript -->
                                        <script src=" {{ asset('asset/js/jquery.min.js') }}"></script>
                                        <script src=" {{ asset('asset/js/bootstrap.min.js') }}"></script>
                                        <script src=" {{ asset('asset/js/jquery.ui.min.js') }}"></script>
                                        <script src=" {{ asset('asset/js/main.js') }}"></script>


                                        <!-- plugins -->
                                        <script src=" {{ asset('asset/js/plugins/moment.min.js') }}"></script>
                                        <script src=" {{ asset('asset/js/plugins/fullcalendar.min.js') }}"></script>
                                        <script src=" {{ asset('asset/js/plugins/jquery.nicescroll.js') }}"></script>
                                        <script src=" {{ asset('asset/js/plugins/jquery.vmap.min.js') }}"></script>
                                        <script src=" {{ asset('asset/js/plugins/maps/jquery.vmap.world.js') }}"></script>
                                        <script src=" {{ asset('asset/js/plugins/jquery.vmap.sampledata.js') }}"></script>
                                        <script src=" {{ asset('asset/js/plugins/chart.min.js') }}"></script>

                                        <!-- dropdown -->
                                        <script>
                                            /* Saat pengguna mengklik tombol,
                                            toggle antara menyembunyikan dan menampilkan konten dropdown */
                                            function myFunction() {
                                              document.getElementById("myDropdown").classList.toggle("show");
                                            }

                                            // Tutup dropdown jika pengguna mengklik di luarnya
                                            window.onclick = function(event) {
                                              if (!event.target.matches('.dropbtn')) {
                                                var dropdowns = document.getElementsByClassName("dropdown-content");
                                                var i;
                                                for (i = 0; i < dropdowns.length; i++) {
                                                  var openDropdown = dropdowns[i];
                                                  if (openDropdown.classList.contains('show')) {
                                                    openDropdown.classList.remove('show');
                                                  }
                                                }
                                              }
                                            }
                                            </script>
                                        <!-- custom -->
                                        <script src="{{ asset('asset/js/main.js') }}"></script>
                                        <script type="text/javascript">
                                    (function(jQuery) {
                                        // start: Chart =============
                                        Chart.defaults.global.pointHitDetectionRadius = 1;
                                        Chart.defaults.global.customTooltips = function(tooltip) {
                                            var tooltipEl = $('#chartjs-tooltip');
                                            if (!tooltip) {
                                                tooltipEl.css({
                                                    opacity: 0
                                                });
                                                return;
                                            }
                                            tooltipEl.removeClass('above below');
                                            tooltipEl.addClass(tooltip.yAlign);
                                            var innerHtml = '';
                                            if (undefined !== tooltip.labels && tooltip.labels.length) {
                                                for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                                                    innerHtml += [
                                                        '<div class="chartjs-tooltip-section">',
                                                        '   <span class="chartjs-tooltip-key" style="background-color:' + tooltip
                                                        .legendColors[i].fill + '"></span>',
                                                        '   <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                                                        '</div>'
                                                    ].join('');
                                                }
                                                tooltipEl.html(innerHtml);
                                            }
                                            tooltipEl.css({
                                                opacity: 1,
                                                left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
                                                top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
                                                fontFamily: tooltip.fontFamily,
                                                fontSize: tooltip.fontSize,
                                                fontStyle: tooltip.fontStyle
                                            });
                                        };
                                        var randomScalingFactor = function() {
                                            return Math.round(Math.random() * 100);
                                        };
                                        var lineChartData = {
                                            labels: ["January", "February", "March", "April", "May", "June", "July"],
                                            datasets: [{
                                                label: "My First dataset",
                                                fillColor: "rgba(21,186,103,0.4)",
                                                strokeColor: "rgba(220,220,220,1)",
                                                pointColor: "rgba(66,69,67,0.3)",
                                                pointStrokeColor: "#fff",
                                                pointHighlightFill: "#fff",
                                                pointHighlightStroke: "rgba(220,220,220,1)",
                                                data: [18, 9, 5, 7, 4.5, 4, 5, 4.5, 6, 5.6, 7.5]
                                            }, {
                                                label: "My Second dataset",
                                                fillColor: "rgba(21,113,186,0.5)",
                                                strokeColor: "rgba(151,187,205,1)",
                                                pointColor: "rgba(151,187,205,1)",
                                                pointStrokeColor: "#fff",
                                                pointHighlightFill: "#fff",
                                                pointHighlightStroke: "rgba(151,187,205,1)",
                                                data: [4, 7, 5, 7, 4.5, 4, 5, 4.5, 6, 5.6, 7.5]
                                            }]
                                        };
                                        var doughnutData = [{
                                                value: 300,
                                                color: "#129352",
                                                highlight: "#15BA67",
                                                label: "Alfa"
                                            },
                                            {
                                                value: 50,
                                                color: "#1AD576",
                                                highlight: "#15BA67",
                                                label: "Beta"
                                            },
                                            {
                                                value: 100,
                                                color: "#FDB45C",
                                                highlight: "#15BA67",
                                                label: "Gamma"
                                            },
                                            {
                                                value: 40,
                                                color: "#0F5E36",
                                                highlight: "#15BA67",
                                                label: "Peta"
                                            },
                                            {
                                                value: 120,
                                                color: "#15A65D",
                                                highlight: "#15BA67",
                                                label: "X"
                                            }
                                        ];
                                        var doughnutData2 = [{
                                                value: 100,
                                                color: "#129352",
                                                highlight: "#15BA67",
                                                label: "Alfa"
                                            },
                                            {
                                                value: 250,
                                                color: "#FF6656",
                                                highlight: "#FF6656",
                                                label: "Beta"
                                            },
                                            {
                                                value: 100,
                                                color: "#FDB45C",
                                                highlight: "#15BA67",
                                                label: "Gamma"
                                            },
                                            {
                                                value: 40,
                                                color: "#FD786A",
                                                highlight: "#15BA67",
                                                label: "Peta"
                                            },
                                            {
                                                value: 120,
                                                color: "#15A65D",
                                                highlight: "#15BA67",
                                                label: "X"
                                            }
                                        ];
                                        var barChartData = {
                                            labels: ["January", "February", "March", "April", "May", "June", "July"],
                                            datasets: [{
                                                    label: "My First dataset",
                                                    fillColor: "rgba(21,186,103,0.4)",
                                                    strokeColor: "rgba(220,220,220,0.8)",
                                                    highlightFill: "rgba(21,186,103,0.2)",
                                                    highlightStroke: "rgba(21,186,103,0.2)",
                                                    data: [65, 59, 80, 81, 56, 55, 40]
                                                },
                                                {
                                                    label: "My Second dataset",
                                                    fillColor: "rgba(21,113,186,0.5)",
                                                    strokeColor: "rgba(151,187,205,0.8)",
                                                    highlightFill: "rgba(21,113,186,0.2)",
                                                    highlightStroke: "rgba(21,113,186,0.2)",
                                                    data: [28, 48, 40, 19, 86, 27, 90]
                                                }
                                            ]
                                        };
                                        window.onload = function() {
                                            var ctx = $(".doughnut-chart")[0].getContext("2d");
                                            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
                                                responsive: true,
                                                showTooltips: true
                                            });
                                            var ctx2 = $(".line-chart")[0].getContext("2d");
                                            window.myLine = new Chart(ctx2).Line(lineChartData, {
                                                responsive: true,
                                                showTooltips: true,
                                                multiTooltipTemplate: "<%= value %>",
                                                maintainAspectRatio: false
                                            });
                                            var ctx3 = $(".bar-chart")[0].getContext("2d");
                                            window.myLine = new Chart(ctx3).Bar(barChartData, {
                                                responsive: true,
                                                showTooltips: true
                                            });
                                            var ctx4 = $(".doughnut-chart2")[0].getContext("2d");
                                            window.myDoughnut2 = new Chart(ctx4).Doughnut(doughnutData2, {
                                                responsive: true,
                                                showTooltips: true
                                            });
                                        };
                                        //  end:  Chart =============
                                        // start: Calendar =========
                                        $('.dashboard .calendar').fullCalendar({
                                            header: {
                                                left: 'prev,next today',
                                                center: 'title',
                                                right: 'month,agendaWeek,agendaDay'
                                            },
                                            defaultDate: '2015-02-12',
                                            businessHours: true, // display business hours
                                            editable: true,
                                            events: [{
                                                    title: 'Business Lunch',
                                                    start: '2015-02-03T13:00:00',
                                                    constraint: 'businessHours'
                                                },
                                                {
                                                    title: 'Meeting',
                                                    start: '2015-02-13T11:00:00',
                                                    constraint: 'availableForMeeting', // defined below
                                                    color: '#20C572'
                                                },
                                                {
                                                    title: 'Conference',
                                                    start: '2015-02-18',
                                                    end: '2015-02-20'
                                                },
                                                {
                                                    title: 'Party',
                                                    start: '2015-02-29T20:00:00'
                                                },
                                                // areas where "Meeting" must be dropped
                                                {
                                                    id: 'availableForMeeting',
                                                    start: '2015-02-11T10:00:00',
                                                    end: '2015-02-11T16:00:00',
                                                    rendering: 'background'
                                                },
                                                {
                                                    id: 'availableForMeeting',
                                                    start: '2015-02-13T10:00:00',
                                                    end: '2015-02-13T16:00:00',
                                                    rendering: 'background'
                                                },
                                                // red areas where no events can be dropped
                                                {
                                                    start: '2015-02-24',
                                                    end: '2015-02-28',
                                                    overlap: false,
                                                    rendering: 'background',
                                                    color: '#FF6656'
                                                },
                                                {
                                                    start: '2015-02-06',
                                                    end: '2015-02-08',
                                                    overlap: true,
                                                    rendering: 'background',
                                                    color: '#FF6656'
                                                }
                                            ]
                                        });
                                        // end : Calendar==========
                                        // start: Maps============
                                        jQuery('.maps').vectorMap({
                                            map: 'world_en',
                                            backgroundColor: null,
                                            color: '#fff',
                                            hoverOpacity: 0.7,
                                            selectedColor: '#666666',
                                            enableZoom: true,
                                            showTooltip: true,
                                            values: sample_data,
                                            scaleColors: ['#C8EEFF', '#006491'],
                                            normalizeFunction: 'polynomial'
                                        });
                                        // end: Maps==============
                                    })(jQuery);
                                </script>
                                <!-- end: Javascript -->
    </div>
</body>

</html>
