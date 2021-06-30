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
                        <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">Venues</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="rooms-tab" data-toggle="tab" href="#room" role="tab" aria-controls="room" aria-selected="true">Accommodation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Event Spaces</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab"><br>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="" style="width: 100%;">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th><p class="mb-0">ID</p></th>
                                        <th><p class="mb-0">Venue Name</p></th>
                                        <th><p class="mb-0">Radius from KLCC (by car)</p></th>
                                        <th><p class="mb-0">Radius from KLCC (walking distance)</p></th>
                                        <th><p class="mb-0">Action</p></th>


                                    </tr>
                                </thead>
                                <tbody align="center">
                                    @forelse($hotels as $data )
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->hotel_name}}</td>
                                            <td>{{$data->car_radius}}</td>
                                            <td>{{$data->walking_radius}}</td>
                                            <td>
                                                <a href="{{ route('hotel_edit', $data->id) }}" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                                <form action="{{ route('hotel.delete', $data->id) }}" method="POST">
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

                    <div class="tab-pane" id="room" role="tabpanel" aria-labelledby="room-tab"><br>
                        @livewire('edit-room')
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab"><br>
                        @livewire('edit-event')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
