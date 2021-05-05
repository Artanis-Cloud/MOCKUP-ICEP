<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'ICEP') }}</title> --}}

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

    <script src="{{ asset('qbadminui/js/vendor/DataTable-1.10.20/datatables.min.js') }}"></script>
    <!-- Data Table script -->
    <script src="{{ asset('qbadminui/js/plugins/dataTable_script.js') }}"></script>

    <meta name="theme-color" content="#fafafa">
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="shadow-sm navbar navbar-expand-md navbar-light" style="background-color: #2F4858;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <a href="#"><img src="{{ asset('/image/user/logo.png') }}" style="height: 60px;" alt="Kerajaan Selangor"></a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="mr-auto navbar-nav" style="text-align: center;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/homepage') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hotel') }}">HOTEL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hall') }}">EVENTS SPACE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comparison') }}">COMPARISON</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="ml-auto navbar-nav" style="text-align: center;">
                        <!-- Authentication Links -->

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><font color="black">
                                        {{ __('Logout') }}
                                    </font></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

            <div>
            @yield('content')
            </div>

            <div class="footer" style="background-color:#2F4858; padding: 1%; color: #fff;">
                             Copyright © 2021 iCEP - International Conference and Exhibition Professionals. All rights reserved.
            </div>
    </div>

    @livewireScripts
</body>
</html>
