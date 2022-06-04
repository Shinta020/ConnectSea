<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- end: Css -->

    <!-- script icon-->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src=" {{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
    <script src=" {{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>



    <!-- <link rel="shortcut icon" href="asset/img/logomi.png"> -->

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
                        <img src="{{ asset('connectsea\logo.png') }}" width="50px" height="50px"
                            class="logo-header">
                    </div>
                    <div class="col-md-0">
                        <title>@yield('title')</title>
                    </div>

                    <div class="col-md-7">
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
                                <img src="{{ asset('asset/img/avatar.jpg') }}" class="img-circle avatar"
                                    alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" />
                                <ul class="">
                            </li>
                        </ul>
                    </div>


                    <div class="col-md-1">
                        <a href="/keranjangbelanja/"><img src="{{ asset('connectsea\keranjang-belanja-header.png') }}" width="40px" height="40px"
                            class="keranjang-belanja-header"></a>
                    </div>

                <div class="col-md-1">
                    <img src=" {{asset('connectsea\logo.png')}}"width="50px" height="50px" class="logo-header">
                </div>
                <div class="col-md-0">
                    <title>@yield('title')</title>
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
                                <center> <img src="{{ asset('connectsea\header-left.png') }}" width="135px"
                                        height="135px" class="header-left"> </center>
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
                </div>
            </div>
            <!-- end: Left Menu -->

            <!-- start: content -->
            <div id="content">

                <div class="col-md-1">
                    <img src="{{asset('connectsea\keranjang-belanja-header.png')}}" width="40px" height="40px" class="keranjang-belanja-header">
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
                        <a class=" nav-header">
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
</body>

</html>
