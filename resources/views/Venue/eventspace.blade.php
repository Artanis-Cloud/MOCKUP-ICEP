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
  color: white !important;
}

/* visited link */
a:visited {
  color: white !important;
}

/* mouse over link */
a:hover {
  color: #E89A3D !important;
}

/* selected link */
a:active {
  color: white !important;

}

.container-fluid{
    width: 100%;
    height: auto;

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
                            <form action="{{ route('eventspace_filter') }}" class="POST">
                                @csrf

                                {{-- <div class="row">
                                    <!-- 1st row -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="f-name-1">Radius from KLCC (car)</label>
                                          <div class="slidecontainer">
                                          <input type="range" min="1" name="car" max="30" value="50" class="slider" id="km">
                                          <p>Km: <span id="demokm"></span></p>
                                          </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Create 5 row -->
                                <div class="row">
                                    <!-- 1st row -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="f-name-1">Radius from KLCC (walk)</label>
                                          <div class="slidecontainer">
                                          <input type="range" min="1" name="walk" max="30" value="100" class="slider" id="walk">
                                          <p>Km: <span id="demowalk"></span></p>
                                          </div>
                                        </div>
                                    </div>
                                </div> --}}
                               <!-- Create 2 row -->
                               <div class="row">
                                <!-- 1st row -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="f-name-1">Size (s.q ft)</label>
                                        <input type="text" name="size" value="" class="form-control bg-light">
                                        {{-- <input type="range" name="size" min="0" max="5000" value="" class="slider" id="size">
                                        <p>Value: <span id="demosize"></span></p> --}}
                                    </div>
                                </div>
                            </div>
                               <!-- Create 2 row -->
                               <p>Setup Style</p>
                               <div class="row">
                                   <!-- 1st row -->
                                   <div class="col-md-1"></div>
                                   <div class="col-md-11">
                                       <div class="form-group">
                                           <label for="email-1">Banquet</label>
                                            <input type="text" name="banquet" value="" class="form-control bg-light">
                                            {{-- <input type="range" min="1" name="banquet" max="30000" value="1000" class="slider" id="banquet">
                                            <p>Value: <span id="demobanquet"></span></p> --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="email-1">Classroom</label>
                                            <input type="text" name="classroom" value="" class="form-control bg-light">
                                             {{-- <input type="range" min="1" name="classroom" max="30000" value="1000" class="slider" id="classroom">
                                             <p>Value: <span id="democlassroom"></span></p> --}}
                                         </div>
                                         <div class="form-group">
                                            <label for="email-1">Theater</label>
                                            <input type="text" name="theater" value="" class="form-control bg-light">
                                             {{-- <input type="range" min="1" name="theater" max="30000" value="1000" class="slider" id="theater">
                                             <p>Value: <span id="demotheater"></span></p> --}}
                                         </div>
                                         <div class="form-group">
                                            <label for="email-1">Cocktail</label>
                                            <input type="text" name="cocktail" value="" class="form-control bg-light">
                                             {{-- <input type="range" min="1" name="cocktail" max="30000" value="1000" class="slider" id="cocktail">
                                             <p>Value: <span id="demococktail"></span></p> --}}
                                         </div>
                                         <div class="form-group">
                                            <label for="email-1">Cabaret/Workshop</label>
                                            <input type="text" name="cabaret" value="" class="form-control bg-light">
                                             {{-- <input type="range" min="1" name="cabaret" max="30000" value="1000" class="slider" id="cabaret">
                                             <p>Value: <span id="democabaret"></span></p> --}}
                                         </div>
                                         <div class="form-group">
                                            <label for="email-1">Booth Capacity</label>
                                            <input type="text" name="booth_capacity" value="" class="form-control bg-light">
                                             {{-- <input type="range" min="1" name="booth" max="30000" value="1000" class="slider" id="booth">
                                             <p>Value: <span id="demobooth"></span></p> --}}
                                         </div>

                                             {{-- <div class="custom-control custom-checkbox">
                                                 <input type="checkbox" name="cocktail" class="custom-control-input" id="customCheck4">
                                                 <label class="custom-control-label" for="customCheck4">Cocktail</label>
                                             </div> --}}
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
       @forelse($eventspace as $data)
            {{-- @else --}}
            <div class="col-md-4">
                <center>
                <div class="card" style="width: 18rem;">

                    <img class="card-img-top" src="{{ asset($image_path=str_replace('public','storage',$data->thumbnail))}}" alt="Card image cap" style="width:100%;height:200px;padding-top:5%;">
                    <div class="card-body">
                    <h5 class="card-title">{{$data->venue}}</h5>
                    <form action="{{ route('eventspace_details', $data->id) }}" method="get">
                        @csrf
                        @if($data->hotel_id)
                            <input type="hidden" name="hotel_id" value="{{ $data->hotel_id }}">
                            <button type="submit" class="btn btn-primary">Details</a>

                        @else
                            <button type="submit" class="btn btn-primary">Details</a>
                        @endif

                    </form>
                    </div>
                </div>
                <br>
                </center>
            </div>


            {{-- @endif --}}

        @empty
        no data
        @endforelse
       </div>
       {{ $eventspace->links() }}
     </div>
   </div>
 </div>


    <script>
var slider = document.getElementById("size");
var output = document.getElementById("demosize");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<script>
var slider1 = document.getElementById("km");
var output1 = document.getElementById("demokm");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
output1.innerHTML = this.value;
}
</script>

<script>
var slider2 = document.getElementById("walk");
var output2 = document.getElementById("demowalk");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
output2.innerHTML = this.value;
}
</script>

<script>
var slider3 = document.getElementById("banquet");
var output3 = document.getElementById("demobanquet");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
output3.innerHTML = this.value;
}
</script>

<script>
var slider4 = document.getElementById("classroom");
var output4 = document.getElementById("democlassroom");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
output4.innerHTML = this.value;
}
</script>

<script>
var slider5 = document.getElementById("theater");
var output5 = document.getElementById("demotheater");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
output5.innerHTML = this.value;
}
</script>

<script>
var slider6 = document.getElementById("cocktail");
var output6 = document.getElementById("demococktail");
output6.innerHTML = slider6.value;

slider6.oninput = function() {
output6.innerHTML = this.value;
}
</script>

<script>
var slider7 = document.getElementById("cabaret");
var output7 = document.getElementById("democabaret");
output7.innerHTML = slider7.value;

slider7.oninput = function() {
output7.innerHTML = this.value;
}
</script>

<script>
var slider8 = document.getElementById("booth");
var output8 = document.getElementById("demobooth");
output8.innerHTML = slider8.value;

slider8.oninput = function() {
output8.innerHTML = this.value;
}
</script>

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
