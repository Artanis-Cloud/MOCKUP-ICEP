@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
  <!-- Small card component -->
  <div class="rounded-lg card" style="border-color: #003473 !important;">
    <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">
        List of Users
    </div>
    <div class="card-body">
        @if(Auth::user()->roles == 1)
        <div class="row" style="margin-left:0;">
            <a href="{{ route('user_add') }}" class="btn btn-primary">Add New User</a>
        </div>
        @else
        @endif
        <br>

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="example" style="width: 100%;">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th><p class="mb-0">ID</p></th>
                        <th><p class="mb-0">Name</p></th>
                        <th><p class="mb-0">Email</p></th>
                        <th><p class="mb-0">Roles</p></th>
                        <th><p class="mb-0">Actions</p></th>
                    </tr>
                </thead>
                <tbody align="center">
                    @forelse ($users as $data )
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>
                                @if($data->roles == '1')
                                Super Admin
                                @else
                                Admin
                                @endif
                            </td>
                            <td>
                                {{-- <a href="#" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a> --}}
                                <form action="" method="POST">
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

@endsection
