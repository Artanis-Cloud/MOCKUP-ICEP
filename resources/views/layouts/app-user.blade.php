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

    <meta name="theme-color" content="#fafafa">
    @livewireStyles
</head>
<body class="position-relative">
    @livewireScripts
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <div class="px-0 container-fluid">
        <!-- The side bar -->
        <div class="side-bar side-bar-lg-active" data-theme="purple">
            <!-- Brand details -->
            <div class="mt-3 side-menu-brand d-flex flex-column justify-content-center align-items-center clear">
                <img src="{{ asset('/image/admin/logo.png') }}" style="width:100%" alt="bran_name" class="brand-img">
                <a href="{{ route('home') }}" class="mt-2 ml-2 brand-name font-weight-bold" style="text-align: center; font-size: 20px !important;padding-top: 10%;">iCEP - International Conference and Exhibition Professionals</a>
            </div>
            @if(Auth::user())
            <!-- Side bar menu -->
            <div class="mt-5 the_menu">
                <!-- Heading -->
                <div class="side-menu-heading d-flex">
                    <h6 class="pb-2 mx-3 font-weight-bold"> {{ucwords(strtolower((Auth::user()->name)))}} </h6>
                    <a  class="px-3 ml-auto font-weight-bold"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    >
                        <i class="fas fa-sign-out-alt" data-toggle="tooltip" data-placement="top" title="Log Out"></i>
                    </a>
                </div>

                <!-- Menu item -->
                <div id="accordion">
                    <ul class="p-0 m-0 mt-3 side-menu">
                        <li class="px-3 side-menu-item"><a href="{{ route('home') }}" class="py-3 pl-4 w-100">Dashboard</a></li>

                        <li class="px-3 side-menu-item"><a href="{{ route('forms') }}" class="py-3 pl-4 w-100">Add New Venue</a></li>

                        <li class="px-3 side-menu-item"><a href="{{ route('venue') }}" class="py-3 pl-4 w-100">List of Venues</a></li>

                        <li class="px-3 side-menu-item"><a href="{{ route('user') }}" class="py-3 pl-4 w-100">User Management</a></li>

                        <li class="px-3 side-menu-item"><a href="{{ route('admin.announcement.list') }}" class="py-3 pl-4 w-100">Announcement</a></li>

                        <li class="px-3 side-menu-item"><a href="{{ route('importExportView') }}" class="py-3 pl-4 w-100">File Upload</a></li>

                        <li class="px-3 side-menu-item"><a href="{{ route('admin.audit-trail.audit-trail-log') }}" class="py-3 pl-4 w-100">Audit Trails</a></li>



                        {{-- <li class="px-3 side-menu-item"><a href="#" class="py-3 pl-4 w-100 sub-menu-parent" data-toggle="collapse" data-target="#table-sub-menu3" aria-expanded="false" aria-controls="table-sub-menu">Senarai Permohonan </a></li>
                        <div id="table-sub-menu3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <ul class="p-0 side-sub-menu">
                                <li class="px-3 side-sub-menu-item"><a href="#" class="pl-4 w-100">Application Processing </a></li>
                                <li class="px-3 side-sub-menu-item"><a href="#" class="pl-4 w-100">Application Passed </a></li>
                                <li class="px-3 side-sub-menu-item"><a href="#" class="pl-4 w-100">Application Failed </a></li>
                                <li class="px-3 side-sub-menu-item"><a href="#" class="pl-4 w-100">Application Not Applicable </a></li>
                                <li class="px-3 side-sub-menu-item"><a href="#" class="pl-4 w-100">Request Cancel </a></li>
                            </ul>
                        </div> --}}

                        <!-- <li class="px-3 side-menu-item"><a href="#" class="py-3 pl-4 w-100" >Manual Pengguna</a></li> -->




                    </ul>
                </div>
            </div>
            @endif

        </div>

        <!-- Main section -->
        <main class="bg-light main-full-body" style="background-color: #fff!important;">

            <!-- Theme changer -->
            <!-- <div class="p-4 theme-option">
                <div class="theme-pck" data-toggle="tooltip" data-placement="left" title="Bahasa | Language">
                    <i class="fas fa-cog fa-lg"></i>
                </div>
                <p>Colour Theme:</p>
                <div class="flex-row side-nav-themes d-flex">
                    <p class="p-3 rounded side-nav-theme-primary side-nav-theme" theme-color="purple"></p>
                    <p class="p-3 ml-2 rounded side-nav-theme-light side-nav-theme" theme-color="light"></p>
                </div>
            </div> -->


            @if ($message = Session::get('success'))
            <script type="text/javascript">
                 $(document).ready(function() {
                     $('#modal').modal();
                 });
             </script>
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content alert alert-card alert-success">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Successful!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>{{$message}}</p>
                    </div>
                </div>
                </div>
            </div>
            @elseif ($message = Session::get('error'))
            <script type="text/javascript">
                 $(document).ready(function() {
                     $('#error_modal').modal();
                 });
             </script>
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content alert alert-card warning-danger">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Failed!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>{{$message}}</p>
                    </div>
                </div>
                </div>
            </div>
            @endif
            <!-- The navbar -->
            <nav class="py-3 navbar navbar-expand navbar-light bg-light" style="background-color: #fff!important;">
                <p class="pb-0 mb-0 navbar-brand">
                    <span></span>
                    <span></span>
                    <span></span>


                </p>



                <a href="{{ url()->previous() }}" class="m-2 btn btn-outline-primary" style="font-size:150%;color:#fff;"><i class="fa fa-chevron-circle-left" aria-hidden="true" style="color: #000;"></i> Back</a>

                <a href="{{ url('/homepage') }}" target="_blank" class="m-2 btn btn-outline-primary" style="font-size:150%;color:#fff;"><i class="fas fa-home" aria-hidden="true" style="color: #000;"></i> View</a>


                <!-- Navbar search section -->
                <!-- <div class="ml-5 navb-search d-none d-md-block">
                    <form action="#" method="POST">
                        <div class="input-group search-round">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="border btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div> -->
                <!-- Navbar right menu section -->
                <div class="flex-row ml-auto navb-menu d-flex">

                    <!-- Message dropdown -->
                    <div class="pt-1 mx-2 text-center dropdown dropdown-arow-none d-contents">
                        <!-- Icon -->

                    </div>

                    <!-- Notification dropdown -->
                    <div class="pt-1 mx-2 text-center dropdown dropdown-arow-none d-contents">
                        <!-- icon -->
                        {{-- <a href="#" class="w-100 dropdown-toggle text-muted position-relative" data-toggle="dropdown">

                            <i class="far fa-bell fa-2x" data-toggle="tooltip" data-placement="left" title="Notifikasi" style="color: #fff;"></i>
                            <span class="badge badge-primary position-absolute notification-badge">31231</span>
                        </a> --}}
                        {{-- @if($count_notification != 0)
                        <!-- Dropdown menu -->
                        <div class="p-0 dropdown-menu dropdown-menu-right dropdown-menu-max-height">
                            <!-- Menu item -->
                            @foreach($permohonan_admin as $permohonan)
                              @foreach($permohonan->unreadNotifications->sortByDesc('created_at') as $notification)
                                @if($notification->data['kepada_id'] == Auth::user()->id)
                                <a href="{{route('notification.mark-as-read', $notification->id)}}" class="p-0 dropdown-item text-secondary-light">
                                      <div class="flex-row d-flex border-bottom">
                                          <div class="px-3 pt-3 pb-3 notification-icon bg-secondary-c"><i class="pt-3 far fa-envelope text-primary fa-lg"></i></div>
                                          <div class="px-3 py-3 flex-grow-1">
                                              <p class="mb-0"> {{date('H:i:s d-m-Y', strtotime($permohonan->created_at))}} &ensp;<span class="badge badge-pill badge-primary">Baru</span></p>
                                              <small>{{$notification->data['tajuk'] }}</small>
                                          </div>
                                      </div>
                                  </a>
                                  @endif
                                @endforeach
                              @endforeach
                        </div>
                        @endif --}}
                    </div>

                    <!-- Profile action dropdown -->
                    <div class="mx-2 text-center dropdown dropdown-arow-none d-contents">
                        <!-- Icon -->
                        <a href="#" class="w-100 dropdown-toggle text-muted" data-toggle="dropdown">

                          @if(Auth::user()->profile_picture == null)

                          <img src="{{ asset('image/profile.png') }}" alt="profile" style="height:40px; width:40px;" data-toggle="tooltip" data-placement="left" title="Profile">
                          @else
                          <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px; " data-toggle="tooltip" data-placement="left" title="Profile">
                          @endif
                        </a>
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-max-height">
                            <!-- Menu items -->

                            <a href="#" class="dropdown-item disabled small"><i class="mr-1 far fa-user"></i>{{explode(' ',trim(ucwords(strtolower((Auth::user()->name)))))[0]}} </a>
                            <a href="{{ route('admin.update-profile') }}" class="dropdown-item text-secondary-light">Update Profile</a>
                            {{-- <a href="#" class="dropdown-item text-secondary-light">Change Password</a> --}}

                            <!-- <a href="#" class="dropdown-item text-secondary-light">Billing history</a> -->
                            <a  class="dropdown-item text-secondary-light"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            >Log out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

    @yield('content')

    <!-- Footer section -->
    <footer class="flex-row p-4 footer-full-body d-flex justify-content-between text-secondary" style="background: #fff !important;">
        <p>&copy; Copyright Reserved 2021. <a href="#" target="_Blank"><font color="black">iCEP - International Conference and Exhibition Professionals</font></a></p>
        <p>Version 1.0</p>
    </footer>
  </div>


    <script src="{{ asset('qbadminui/js/vendor/bootstrap-4.3.1/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('qbadminui/js/vendor/popper-js/popper1.14.7.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/bootstrap-4.3.1/bootstrap.min.js') }}"></script>
    <!-- eChart -->
    <script src="{{ asset('qbadminui/js/vendor/eChart/echarts.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/eChart/echarts.option.min.js') }}"></script>
    <!-- eChart script -->
    <script src="{{ asset('qbadminui/js/plugins/echart_drw.js') }}"></script>
    <script src="{{ asset('qbadminui/js/plugins.js') }}"></script>
    <script src="{{ asset('qbadminui/js/main.js') }}"></script>
    <!-- Data Table -->
    <script src="{{ asset('qbadminui/js/vendor/DataTable-1.10.20/datatables.min.js') }}"></script>
    <!-- Data Table script -->
    <script src="{{ asset('qbadminui/js/plugins/dataTable_script.js') }}"></script>

</body>
</html>
<script type="text/javascript">
$("document").ready(function(){
  setTimeout(function(){
     $("div.alert").remove();
  }, 5000 ); // 5 secs

});
</script>
