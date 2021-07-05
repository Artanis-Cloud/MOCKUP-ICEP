<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ICEP') }}</title>
    <link rel="icon" href="https://icep.com.my/clients/asset_172EE6EE-CA98-4240-A1D9-F5479A8B786F/contentMS/img/favicon.ico">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('qbadminui/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/vendor/bootstrap-4.3.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('qbadminui/css/vendor/DataTable-1.10.20/datatables.min.css') }}"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <!-- <script src="{{ asset('qbadminui/js/vendor/DataTable-1.10.20/datatables.min.js') }}"></script> -->
    <!-- Data Table script -->
    <!-- <script src="{{ asset('qbadminui/js/plugins/dataTable_script.js') }}"></script> -->

    <meta name="theme-color" content="#fafafa">

@livewireStyles

    <style>
        .dropdown {
        position: relative;
        display: inline-block;
        font-size: 100%;
        padding-top: 7px;
        color: #fff;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #2f4858;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }
       /* announcement */
        .marquee {
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
        }
        .marquee:hover .marquee__item {
        -webkit-animation-play-state: paused;
                animation-play-state: paused;
        }
        .marquee__seperator {
        margin: 0 2rem;
        }
        .marquee__item {
        display: inline-block;
        will-change: transform;
        -webkit-animation: marquee 50s linear infinite;
                animation: marquee 50s linear infinite;
        }

        @-webkit-keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
        }

        @keyframes marquee {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
        }
        .marquee {
        background-color: #01586f;
        padding: 1rem 0;
        color: #fff;
        text-align: center;
        width: 100%;
        }


            nav ul li{
            list-style:none;
            float:left;
            padding-right:20px;
            }
            nav ul li a{
            text-decoration:none;
            color:rgb(255, 255, 255);
            /* background-color:#ccc; */
            padding:4px 5px;
            }
            a:hover{
                color: #000 !important;
            }
            .active{
            background-color: #e89a3d;
            color:#fff;

            }


    </style>
</head>
<body>
    <div id="app">
        <nav class="shadow-sm navbar navbar-expand-md navbar-light" style="background-color: #2F4858;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <a href="{{ url('/homepage') }}"><img src="{{ asset('/image/user/logo.png') }}" style="height: 60px;" alt=""></a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <nav >
                        <ul id="navi" class="mr-auto navbar-nav">
                    <li class="nav-item"><a class="nav-link menu" href=""></a></li>
                     <li class="nav-item"><a class="nav-link menu {{ (request()->is('eventspace')) ? 'active' : '' }}" href="{{ route('eventspace') }}">EVENT SPACE</a></li>
                     <li class="nav-item"><a class="nav-link menu {{ (request()->is('hotel')) ? 'active' : '' }}" href="{{ route('hotel') }}">ACCOMMODATION</a></li>
                     <li class="nav-item"><a class="nav-link menu {{ (request()->is('eventspace-comparison')) ? 'active' : '' }}" href="{{ route('comparison-eventspace') }}">EVENT SPACE COMPARISON</a></li>
                     <li class="nav-item"><a class="nav-link menu {{ (request()->is('hotel-comparison')) ? 'active' : '' }}" href="{{ route('comparison-hotel') }}">ACCOMMODATION COMPARISON</a></li>
                   </ul>
                     </nav>

                    {{-- <ul class="mr-auto navbar-nav" style="text-align: center;">

                        <li class="nav-item">
                            <a class="nav-link" href=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('eventspace') }}">EVENT SPACE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hotel') }}">ACCOMMODATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comparison-eventspace') }}">EVENT SPACE COMPARISON</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comparison-hotel') }}">ACCOMMODATION COMPARISON</a>
                        </li>

                    </ul> --}}



                    <!-- Right Side Of Navbar -->
                    <ul class="ml-auto navbar-nav" style="text-align: center;">
                        <!-- Authentication Links -->




                            <li class="nav-item dropdown">
                                <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();

                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}
                                    </font></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> --}}

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                </div>

                            </li>

                    </ul>
                </div>
            </div>
        </nav>

            <div>
            @yield('content')
            </div>

            <div class="marquee">
                <div class="marquee__item">
                    @if($announcement)
                        @forelse ( $announcement as $data)
                        <i class="fa fa-building"></i>&nbsp {{ $data->user_message }} <span class=""> &nbsp &nbsp</span>
                        @empty

                        @endforelse
                    @endif

                </div>
            </div>
            <div class="footer" style="background-color:#2f4858; padding: 1%; color: #fff; text-align: center;">


                    Copyright © 2021 iCEP - International Conference and Exhibition Professionals. All rights reserved.

            </div>
    </div>

@livewireScripts

</body>
</html>
<script type="text/javascript">
    $("document").ready(function(){
      setTimeout(function(){
         $("div.alert").remove();
      }, 5000 ); // 5 secs

    });
    </script>

<script>
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});
    </script>
