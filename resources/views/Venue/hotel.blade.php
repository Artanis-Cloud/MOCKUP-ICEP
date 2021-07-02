@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>
a{
  font-size: 100% !important;
}
/* unvisited link */
a:link {
  color: black !important;
}

/* visited link */
a:visited {
  color: white !important;
}

/* selected link */
a:active {
  color: white !important;

}

.container-fluid{
    width: 100%;
    height: 100^%;

}

/* search */
input[type=search] {
  -webkit-appearance: none !important;
  background-clip: padding-box;
  background-color: white;
  vertical-align: middle;
  border-radius: 0.25rem;
  border: 1px solid #e0e0e5;
  font-size: 1rem;
  width: 100%;
  line-height: 2;
  padding: 0.375rem 1.25rem;
  transition: border-color 0.2s;
}

input[type=search]:focus {
  transition: all 0.5s;
  box-shadow: 0 0 40px #f9d442b9;
  border-color: #f9d342;
  outline: none;
}

form.search-form {
  display: flex;
  justify-content: center;
}

label {
  flex-grow: 1;
  flex-shrink: 0;
  flex-basis: auto;
  align-self: center;
  margin-bottom: 0;
}

input.search-field {
  margin-bottom: 0;
  flex-grow: 1;
  flex-shrink: 0;
  flex-basis: auto;
  align-self: center;
  height: 51px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

input.search-submit {
  height: 51px;
  margin: 0;
  padding: 1rem 1.3rem;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
  font-family: "Font Awesome 5 Free";
  font-size: 1rem;
}

.screen-reader-text {
  clip: rect(1px, 1px, 1px, 1px);
  position: absolute !important;
  height: 1px;
  width: 1px;
  overflow: hidden;
}

.button {
  display: inline-block;
  font-weight: 600;
  font-size: 0.8rem;
  line-height: 1.15;
  letter-spacing: 0.1rem;
  text-transform: uppercase;
  background: #f9d342;
  color: #292826;
  border: 1px solid transparent;
  vertical-align: middle;
  text-shadow: none;
  transition: all 0.2s;
}

.button:hover,
.button:active,
.button:focus {
  cursor: pointer;
  background: #E89A3D;
  color: #292826;
  outline: 0;
}

/* slider */
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

/* The Modal (background) */


/* Modal Content */


/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<body>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-4" style="padding: 5%">
            <div class="rounded-lg card">
                                <div class="card-body">
                                    <div class="card-title">Filtering</div>
                                    <!-- Create 2 row -->
                                    <form action="{{ route('room_filter') }}" class="POST">
                                        @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="f-name-1">Size (s.q ft)</label>
                                                <select name="size" id="" class="form-control bg-light">
                                                    <option value="" selected disable hidden>Please choose size</option>
                                                    <option value="500" class="">0-500</option>
                                                    <option value="1000" class="">501-1000</option>
                                                    <option value="1500" class="">1001-1500</option>
                                                    <option value="2000" class="">1501-2000</option>
                                                    <option value="2001" class="">2001 and above</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Create 3 row -->
                                    <div class="row">
                                        <!-- 1st row -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="f-name-1">Types of bed</label>
                                              <div class="slidecontainer">
                                                <select name="type_of_bed" id="" class="form-control bg-light">
                                                    {{-- <option selected disabled hidden value="">Choose Type of Bed</option> --}}
                                                    @forelse($bed_type as $data)
                                                    <option value="{{ $data->type_of_bed }}" class="">{{ $data->type_of_bed }}</option>
                                                    @empty
                                                        No Data
                                                    @endforelse

                                                </select>
                                              {{-- <input type="text" name="type_of_bed" value="" class="form-control bg-light"> --}}
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="row">
                                        <!-- 1st row -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="f-name-1">Single Rate</label>
                                                <input type="text" name="single" value="0" class="form-control bg-light" id="single">

                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="f-name-1">Single Rate</label>
                                                <select name="single" id="" class="form-control bg-light">
                                                    <option value="" selected disable hidden>Please choose single rate</option>
                                                    <option value="500" class="">0-500</option>
                                                    <option value="1000" class="">501-1000</option>
                                                    <option value="1500" class="">1001-1500</option>
                                                    <option value="2000" class="">1501-2000</option>
                                                    <option value="2001" class="">2001 and above</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="row">
                                        <!-- 1st row -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="f-name-1">Double Rate</label>
                                                <input type="text" name="double" value="0" class="form-control bg-light" id="double">

                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="f-name-1">Double Rate</label>
                                                <select name="double" id="" class="form-control bg-light">
                                                    <option value="" selected disable hidden>Please choose double rate</option>
                                                    <option value="500" class="">0-500</option>
                                                    <option value="1000" class="">501-1000</option>
                                                    <option value="1500" class="">1001-1500</option>
                                                    <option value="2000" class="">1501-2000</option>
                                                    <option value="2001" class="">2001 and above</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="row">
                                        <!-- 1st row -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="f-name-1">Corporate Rate</label>
                                                <input type="text" name="corporate" value="0" class="form-control bg-light" id="corporate">

                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="f-name-1">Corporate Rate</label>
                                                <select name="corporate" id="" class="form-control bg-light">
                                                    <option value="" selected disable hidden>Please choose corporate rate</option>
                                                    <option value="500" class="">0-500</option>
                                                    <option value="1000" class="">501-1000</option>
                                                    <option value="1500" class="">1001-1500</option>
                                                    <option value="2000" class="">1501-2000</option>
                                                    <option value="2001" class="">2001 and above</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </form>
                                </div>
                            </div>
                            <br>
                    <div class="rounded-lg card">
                        <div class="row">
                            <!-- 1st row -->
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="f-name-1">Map Radius</label>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15935.17731018773!2d101.69481858588372!3d3.148893338671856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPETRONAS%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1618928630135!5m2!1sen!2smy" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <!-- Trigger/Open The Modal -->
                                <span>Click Here to Open Maps</span>
                                <button id="myBtn" class="btn btn-primary">Open Maps</button>

                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15935.17731018773!2d101.69481858588372!3d3.148893338671856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPETRONAS%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1618928630135!5m2!1sen!2smy" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
          </div>
          <div class="col-md-8" style="padding: 5%">

            <div class="row">
            @forelse($hotels as $data)
               <div class="col-md">
               <center>
                 <div class="card" style="width: 18rem; height:360px;">
                   <img class="card-img-top" src="{{ asset($image_path=str_replace('public','storage',$data->thumbnail))}}" alt="Card image cap" style="width:100%;height:200px;padding-top:5%;">
                   <div class="card-body">
                     <h5 class="card-title">{{$data->hotel_name}}</h5>
                     <button type="button" data-toggle="modal" data-target="#exampleModal{{ $data->id }}" class="btn btn-primary">Details</button>
                   </div>
                 </div>
                 <br>
                 </center>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $data->hotel_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <img class="card-img-top" src="{{ asset($image_path=str_replace('public','storage',$data->thumbnail))}}" alt="Card image cap">
                        <h5 class="">Details</h5>
                        <p>Radius from KLCC (by car): {{ $data->car_radius }}</p>
                        <p>Radius from KLCC (walking distance): {{ $data->walking_radius }}</p>
                        <p>Room Type</p>
                        <form action="{{ route('room_detail') }}" class="" method="POST">
                            @csrf
                            <select name="room_id" id="" class="form-control bg-light @error('room_id') is-invalid @enderror"">
                                <option selected="true" disabled="disabled" hidden value="0">Choose Room Type</option>
                                @forelse ($room_type as $dataRoom)
                                    @if($data->id == $dataRoom->hotel_id)
                                        <option value="{{ $dataRoom->id }}" >{{ $dataRoom->room_type }}</option>
                                    @endif
                                @empty
                                    <option selected="true" disabled="disabled" value="">No Room Available</option>
                                @endforelse
                            </select>
                        </div>
                        <input type="hidden" name="hotel_id" value="{{ $data->id }}">
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Room Detail</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>




               @empty
           no data
           @endforelse
            </div>
            {{ $hotels->links() }}
          </div>
        </div>




<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
@endsection
</body>
