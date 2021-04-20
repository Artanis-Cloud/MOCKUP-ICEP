@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
  <!-- Small card component -->
  <div class="rounded-lg card" style="border-color: #003473 !important;">
    <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">
        List of Venues
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hotels</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Event Spaces</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example" style="width: 100%;">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th><p class="mb-0">ID</p></th>
                                <th><p class="mb-0">Hotel Name</p></th>
                                <th><p class="mb-0">Radius from KLCC (by car)</p></th>
                                <th><p class="mb-0">Radius from KLCC (walking distance)</p></th>
                                <th><p class="mb-0">Room Type</p></th>
                                <th><p class="mb-0">Single Rates (1 breakfast)</p></th>
                                <th><p class="mb-0">Double Rates (2 breakfast)</p></th>
                                <th><p class="mb-0">Corporate Rates</p></th>
                                <th><p class="mb-0">Actions</p></th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            @forelse ($hotels as $data )
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->hotel_name}}</td>
                                    <td>{{$data->car_radius}}</td>
                                    <td>{{$data->walking_radius}}</td>
                                    <td>{{$data->room_type}}</td>
                                    <td>{{$data->single_rate}}</td>
                                    <td>{{$data->double_rate}}</td>
                                    <td>{{$data->corporate_rate}}</td>
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
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example" style="width: 100%;">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th><p class="mb-0">ID</p></th>
                                <th><p class="mb-0">Hotel Name</p></th>
                                <th><p class="mb-0">Radius from KLCC (by car)</p></th>
                                <th><p class="mb-0">Radius from KLCC (walking distance)</p></th>
                                <th><p class="mb-0">Venues</p></th>
                                <th><p class="mb-0">Size (sq.ft.)</p></th>
                                <th><p class="mb-0">Maximum Capacity</p></th>
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
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>{{$data->venue}}</td>
                                    <td>{{$data->size}}</td>
                                    <td>{{$data->capacity}}</td>
                                    <td>{{$data->banquet}}</td>
                                    <td>{{$data->classroom}}</td>
                                    <td>{{$data->theater}}</td>
                                    <td>{{$data->cocktail}}</td>
                                    <td>{{$data->daily_rates}}</td>
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
        </div>
    </div>
</div>
</div>

@endsection
