@extends('layouts.app-user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="card" style="border-color: #003473 !important;">
                {{-- <div class="card-header">{{ __('Add New User') }}</div> --}}
            <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Add New Hotel</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('useradd') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="roles" class="col-md-4 col-form-label text-md-right">Roles</label>
                            <div class="col-md-6">
                            <select id="roles" class="form-control @error('roles') is-invalid @enderror" name="roles" value="{{ old('roles') }}" required>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">User</option>
                            </select>

                            @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
