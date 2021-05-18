@extends('layouts.app-user')

@section('content')

<div class="p-4 page-body text-dark">
    <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
        <i class="fa fa-hotel" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
        List of Venues
      </div>
      <hr style="background-color: black !important;">
      <div style="padding:5px;"></div>
  <!-- Small card component -->
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="rounded-lg card" style="border-color: #003473 !important;">
            <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">
                List of Venues
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                    {{-- <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hotels</a> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="rooms-tab" data-toggle="tab" href="#room" role="tab" aria-controls="room" aria-selected="true">Hotel Rooms</a>
                        </li>
                    <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Event Spaces</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane " id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="example" style="width: 100%;">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th><p class="mb-0">ID</p></th>
                                        <th><p class="mb-0">Hotel Name</p></th>
                                        <th><p class="mb-0">Radius from KLCC (by car)</p></th>
                                        <th><p class="mb-0">Radius from KLCC (walking distance)</p></th>

                                    </tr>
                                </thead>
                                <tbody align="center">
                                    @forelse($rooms as $data )
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->hotel_name}}</td>
                                            <td>{{$data->car_radius}}</td>
                                            <td>{{$data->walking_radius}}</td>
                                            <td>
                                                @forelse ($rooms as $data)
                                                {{$data->room_type}} ,
                                                @empty
                                                    No Room Available
                                                @endforelse

                                            </td>
                                            <td>
                                                <a href="#" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('delete', $data->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="mr-1 btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>

                                        </tr>
                                    @empty
                                    {{-- <td>Table is Empty</td> --}}
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane active" id="room" role="tabpanel" aria-labelledby="room-tab"><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="basicDataTable" style="width: 100%;">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th><p class="mb-0">ID</p></th>
                                        <th><p class="mb-0">Hotel Name</p></th>
                                        <th><p class="mb-0">Radius from KLCC (by car)</p></th>
                                        <th><p class="mb-0">Radius from KLCC (walking distance)</p></th>
                                        <th><p class="mb-0">Room Type</p></th>
                                        <th><p class="mb-0">Room Size</p></th>
                                        <th><p class="mb-0">Type of Bed</p></th>
                                        <th><p class="mb-0">View</p></th>
                                        <th><p class="mb-0">Single Rate</p></th>
                                        <th><p class="mb-0">Double Rate</p></th>
                                        <th><p class="mb-0">Corporate Rate</p></th>
                                        <th><p class="mb-0">Action</p></th>

                                    </tr>
                                </thead>
                                <tbody align="center">
                                    @forelse($rooms as $data )
                                        <tr>
                                            <td><p class="mb-0 font-weight-normal">{{ $data->id ? $data->id  : "-" }}</p></td>
                                            <td><p class="mb-0 font-weight-normal">{{ $data->hotels->hotel_name ? $data->hotels->hotel_name : "-" }}</p></td>
                                            <td><p class="mb-0 font-weight-normal">{{ $data->hotels->car_radius ? $data->hotels->car_radius : "-" }}</p></td>
                                            <td><p class="mb-0 font-weight-normal">{{ $data->hotels->walking_radius ? $data->hotels->walking_radius : "-" }}</p></td>
                                            <td><p class="mb-0 font-weight-normal">{{ $data->room_type ? $data->room_type : "-" }}</p></td>
                                            <td><p class="mb-0 font-weight-normal">{{ $data->size ? $data->size : "-" }} sq.ft</p></td>
                                            <td><p class="mb-0 font-weight-normal">{{ $data->type_of_bed ? $data->type_of_bed : "-" }}</p></td>
                                            <td><p class="mb-0 font-weight-normal">{{ $data->view ? $data->view : "-" }}</p></td>
                                            <td><p class="mb-0 font-weight-normal">RM {{ $data->single_rate ? $data->single_rate : "-" }}</p></td>
                                            <td><p class="mb-0 font-weight-normal">RM {{ $data->double_rate ? $data->double_rate : "-" }}</p></td>
                                            <td><p class="mb-0 font-weight-normal">RM {{ $data->corporate_rate ? $data->corporate_rate : "-" }}</p></td>
                                            <td>
                                                <a href="#" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('delete', $data->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="mr-1 btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>



                                        </tr>
                                    @empty
                                    {{-- <td>Table is Empty</td> --}}
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="defaultOrderingDataTable" style="width: 100%;">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th><p class="mb-0">ID</p></th>
                                        <th><p class="mb-0">Hotel Name</p></th>
                                        <th><p class="mb-0">Radius from KLCC (by car)</p></th>
                                        <th><p class="mb-0">Radius from KLCC (walking distance)</p></th>
                                        <th><p class="mb-0">Venues</p></th>
                                        <th><p class="mb-0">Size (sq.ft.)</p></th>
                                        <th><p class="mb-0">Banquet</p></th>
                                        <th><p class="mb-0">Classroom</p></th>
                                        <th><p class="mb-0">Theater</p></th>
                                        <th><p class="mb-0">Cocktail</p></th>
                                        <th><p class="mb-0">Daily Rates</p></th>
                                        <th><p class="mb-0">Actions</p></th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    @forelse ($eventspaces as $data )
                                        @if($data->hotel_id)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->hotels->hotel_name}}</td>
                                            <td>{{$data->hotels->car_radius}}</td>
                                            <td>{{$data->hotels->walking_radius}}</td>
                                            <td>{{$data->venue}}</td>
                                            <td>{{$data->size}}</td>
                                            <td>{{$data->banquet}}</td>
                                            <td>{{$data->classroom}}</td>
                                            <td>{{$data->theater}}</td>
                                            <td>{{$data->cocktail}}</td>
                                            <td>{{$data->daily_rate}}</td>
                                            <td>
                                                <a href="#" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('delete', $data->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="mr-1 btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>{{$data->venue}}</td>
                                            <td>{{$data->size}}</td>
                                            <td>{{$data->banquet}}</td>
                                            <td>{{$data->classroom}}</td>
                                            <td>{{$data->theater}}</td>
                                            <td>{{$data->cocktail}}</td>
                                            <td>{{$data->daily_rate}}</td>
                                            <td>
                                                <a href="#" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('delete', $data->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="mr-1 btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endif
                                    @empty
                                    {{-- <td>Table is Empty</td> --}}
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
