@extends('layouts.app-user')

@section('content')


    <!-- Small card component -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="rounded-lg card" style="border-color: #003473 !important;">
                <div class="card-header"
                    style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">
                    File Import/Export
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            {{-- <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hotels</a> --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab"
                                aria-controls="hotel" aria-selected="true">Venue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="rooms-tab" data-toggle="tab" href="#room" role="tab"
                                aria-controls="room" aria-selected="true">Accommodation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Event Spaces</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab"><br>
                            <div class="table-responsive" style="text-align: center">
                                <h4>Download</h4>
                                <a href="{{ route('HotelexportExcel', 'xls') }}"><button class="btn btn-success ">Venue List
                                    Excel
                                    xls</button></a>
                            <a href="{{ route('HotelexportExcel', 'xlsx') }}"><button class="btn btn-success">Venue List
                                    Excel xlsx</button></a>
                            <a href="{{ route('HotelexportExcel', 'csv') }}"><button class="btn btn-success">Venue List
                                    CSV</button></a>

                                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px; text-align:center"
                                    action="{{ route('HotelimportExcel') }}" class="form-horizontal" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="file" name="import_file" />
                                    <button class="btn btn-primary">Import File</button>
                                </form>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-info alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Success!</strong> {{ $message }}
                                </div>
                            @endif

                            </div>
                        </div>

                        <div class="tab-pane" id="room" role="tabpanel" aria-labelledby="room-tab" style="text-align: center"><br>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-info alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Success!</strong> {{ $message }}
                                </div>
                            @endif
                            {!! Session::forget('success') !!}
                            <h4>Download</h4>

                            <a href="{{ route('HotelRoomexportExcel', 'xls') }}"><button class="btn btn-success">Accommodation List
                                    Excel
                                    xls</button></a>
                            <a href="{{ route('HotelRoomexportExcel', 'xlsx') }}"><button class="btn btn-success">Accommodation List
                                    Excel xlsx</button></a>
                            <a href="{{ route('HotelRoomexportExcel', 'csv') }}"><button class="btn btn-success">Accommodation List
                                    CSV</button></a>


                            <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px; text-align: center"
                                action="{{ route('HotelRoomimportExcel') }}" class="form-horizontal" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="import_file" />
                                <button class="btn btn-primary">Import File</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="text-align:center"><br>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-info alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif
                        {!! Session::forget('success') !!}
                        <h4>Download</h4>

                        <a href="{{ route('EventSpaceexportExcel', 'xls') }}"><button class="btn btn-success">Event Space List
                                Excel
                                xls</button></a>
                        <a href="{{ route('EventSpaceexportExcel', 'xlsx') }}"><button class="btn btn-success">Event Space List
                                Excel xlsx</button></a>
                        <a href="{{ route('EventSpaceexportExcel', 'csv') }}"><button class="btn btn-success">Event Space List
                                CSV</button></a>


                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px; text-align: center"
                            action="{{ route('EventSpaceimportExcel') }}" class="form-horizontal" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" name="import_file" />
                            <button class="btn btn-primary">Import File</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <body>
        {{-- <div class="container" style="margin-top: 5rem;">
            @if ($message = Session::get('success'))
                <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Success!</strong> {{ $message }}
                </div>
            @endif
            {!! Session::forget('success') !!}
            <br />



        </div> --}}

    </body>
@endsection
