@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
  <!-- Small card component -->
  <div class="rounded-lg card" style="border-color: #003473 !important;">
    <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">
        List of Venue
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example" style="width: 100%;">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th><p class="mb-0">ID</p></th>
                        <th><p class="mb-0">Name</p></th>
                        <th><p class="mb-0">Description</p></th>
                        <th><p class="mb-0">Address</p></th>
                        <th><p class="mb-0">Price</p></th>
                        <th><p class="mb-0">Status</p></th>
                        <th><p class="mb-0">Action</p></th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach ($venue as $data )
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->description}}</td>
                            <td>{{$data->address}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->status}}</td>
                            <td>
                                <a href="#" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#" class="btn btn-danger mr-1"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
@endsection
