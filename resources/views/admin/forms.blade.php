@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
    <div class="container">
        <div class="row" style="text-align:center;padding-top: 20%;">
            <div class="col-md-12" >
                <h5>Please choose type of venue</h5>
            </div>
        </div>
        <br>
        <div class="row" style="text-align:center;padding-bottom: 30%;">
            <div class="mt-3 col-sm-6 col-md-2 col-lg-2 mt-lg-0"></div>
            <a href="{{ route('hotel.add') }}" class="mt-3 col-sm-6 col-md-4 col-lg-4 mt-lg-0">
                <div class="rounded-lg-6 border-1 card">
                <!-- Card body -->
                    <div class="card-body">

                        <div class="flex-row d-flex justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fas fa-hotel card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="text-center small-card-text w-100">
                                <p class="m-0 font-weight-normal text-muted">Add New Hotel</p>
                                {{-- <h4 class="m-0 font-weight-normal text-primary">205</h4> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </a>

            <a href="{{ route('eventspace.add') }}" class="mt-3 col-sm-6 col-md-4 col-lg-4 mt-lg-0">
                <div class="rounded-lg-6 border-1 card">
                    <!-- Card body -->
                    <div class="card-body">

                        <div class="flex-row d-flex justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fas fa-building card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="text-center small-card-text w-100">
                                <p class="m-0 font-weight-normal text-muted">Add New Event Space</p>
                                {{-- <h4 class="m-0 font-weight-normal text-primary">205</h4> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </a>
            <div class="mt-3 col-sm-6 col-md-2 col-lg-2 mt-lg-0"></div>
        </div>
    </div>
</div>

@endsection
