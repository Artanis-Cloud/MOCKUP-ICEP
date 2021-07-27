@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
    <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
        <i class="fa fa-user" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
        List of User
      </div>
      <hr style="background-color: black !important;">
      <div style="padding:5px;"></div>
  <!-- Small card component -->
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
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
                <ul class="mb-3 nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-active-tab" data-toggle="pill" href="#pills-active" role="tab" aria-controls="pills-active" aria-selected="true">Active Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-deactivate-tab" data-toggle="pill" href="#pills-deactivate" role="tab" aria-controls="pills-deactivate" aria-selected="false">Deactive Users</a>
                    </li>
                </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" {{-- id="basicDataTable"--}} style="width: 100%;">
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
                            @forelse ($user as $data )
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>
                                        @if(Auth::user()->roles == 1)
                                        <form action="{{route('user.update', $data->id)}}" method="POST">
                                            @csrf
                                            <div class="row">
                                            <div class="col-md-8">
                                              <select id="role" class="custom-select bg-light" name="role" value="{{ old('role', $data->roles) }}">
                                                  <option value="1" {{ old('role',$data->roles)=='1' ? 'selected' : ''  }}>Super Admin</option>
                                                  <option value="2" {{ old('role',$data->roles)=='2' ? 'selected' : ''  }}>Admin</option>
                                                  <option value="3" {{ old('role',$data->roles)=='3' ? 'selected' : ''  }}>User</option>
                                              </select>
                                            </div>
                                            <div class="col-md-2">
                                              <button type="submit" name="submit" onclick=" return confirm('Set Roles ?');" class="mt-4 btn btn-primary">Set</button>
                                            </div>
                                            </div>
                                          </form>
                                          @else
                                            @if($data->roles ==1)
                                                SuperAdmin
                                            @elseif($data->roles ==2)
                                                Admin
                                            @elseif($data->roles ==3)
                                                User
                                            @endif

                                          @endif
                                    </td>

                                    <td class="p-3">
                                        <div class="flex-row d-flex justify-content-around align-items-center">
                                            @if($currentUser->roles == 1)
                                                @if($currentUser->id != $data->id)

                                                    <a href="{{ route('users.deactivate', $data->id) }}" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>

                                                @else
                                                <a href="#" class="btn btn-dark"><i class="fas fa-times-circle"></i></a>
                                                @endif
                                            @elseif($currentUser->roles == 2)
                                                @if($currentUser->id != $data->id)
                                                    @if($data->roles != 1)
                                                    <a href="{{ route('users.deactivate', $data->id) }}" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
                                                    @else
                                                        <a href="#" class="btn btn-dark"><i class="fas fa-times-circle"></i></a>
                                                    @endif
                                                @else
                                                <a href="#" class="btn btn-dark"><i class="fas fa-times-circle"></i></a>
                                                @endif
                                            @endif
                                        </div>
                                  </td>


                                </tr>
                            @empty
                            {{-- <td>Table is Empty</td> --}}
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-deactivate" role="tabpanel" aria-labelledby="pills-deactivate-tab">
                <div class="tab-pane fade show" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" {{--  id="defaultOrderingDataTable"--}} style="width: 100%;">
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
                                @forelse ($user_deact as $data )
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
                                        {{-- <td>
                                             <a href="#" class="mr-1 btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="" method="POST">
                                                @csrf
                                                <button type="submit" class="mr-1 btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td> --}}

                                        <td class="p-3">
                                            <div class="flex-row d-flex justify-content-around align-items-center">
                                                @if($currentUser->roles == 1)
                                                    @if($currentUser->id != $data->id)
                                                        <a href="{{ route('users.deactivate', $data->id) }}" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
                                                    @else
                                                        <a href="#" class="btn btn-dark"><i class="fas fa-times-circle"></i></a>
                                                    @endif
                                                @elseif($currentUser->roles == 2)
                                                    @if($currentUser->id != $data->id)
                                                        @if($data->roles != 1)
                                                            <a href="{{ route('users.deactivate', $data->id) }}" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
                                                        @else
                                                            <a href="#" class="btn btn-dark"><i class="fas fa-times-circle"></i></a>
                                                        @endif
                                                    @else
                                                        <a href="#" class="btn btn-dark"><i class="fas fa-times-circle"></i></a>
                                                    @endif
                                                @endif
                                            </div>
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
</div>
</div>

@endsection
