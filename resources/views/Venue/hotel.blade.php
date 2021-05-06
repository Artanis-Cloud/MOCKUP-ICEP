@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

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
</style>

<body>




    <div class="container-fluid">
        <div class="row">
          <div class="col-md-4" style="padding: 5%">
            <div class="rounded-lg card">
                                <div class="card-body">
                                    <div class="card-title">Filtering</div>
                                    <!-- Create 2 row -->
                                    <div class="row">
                                        <!-- 1st row -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="f-name-1">Size (s.q ft)</label>
                                                <input id="f-name-1" class="form-control bg-light" type="text" name="fName" placeholder="Enter Size">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Create 2 row -->
                                    <div class="row">
                                        <!-- 1st row -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email-1">Type of Events Hall</label>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                      <label class="custom-control-label" for="customCheck1">Banquet</label>
                                                  </div>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                      <label class="custom-control-label" for="customCheck1">Classroom</label>
                                                  </div>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                      <label class="custom-control-label" for="customCheck1">Theater</label>
                                                  </div>
                                                  <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                      <label class="custom-control-label" for="customCheck1">Cocktail</label>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Create 3 row -->
                                    <div class="row">
                                        <!-- 1st row -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="f-name-1">Maximum Capacity</label>
                                              <div class="slidecontainer">
                                              <input type="range" min="1" max="10000" value="500" class="slider" id="myRange">
                                              <p>Value: <span id="demo"></span></p>
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Create 4 row -->
                                    <div class="row">
                                        <!-- 1st row -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="f-name-1">Radius from KLCC (car)</label>
                                              <div class="slidecontainer">
                                              <input type="range" min="1" max="300" value="50" class="slider" id="km">
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
                                              <input type="range" min="1" max="300" value="100" class="slider" id="walk">
                                              <p>Km: <span id="demowalk"></span></p>
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Create 6 row -->
                                    <div class="row">
                                        <!-- 1st row -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="f-name-1">Map Radius</label>
                                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15935.17731018773!2d101.69481858588372!3d3.148893338671856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPETRONAS%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1618928630135!5m2!1sen!2smy" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
          </div>
          <div class="col-md-8" style="padding: 5%">

            <div class="row">
            @forelse($hotels as $data)
               <div class="col-md-4">
               <center>
                 <div class="card" style="width: 18rem;">
                   <img class="card-img-top" src="{{ asset($image_path=str_replace('public','storage',$data->thumbnail))}}" alt="Card image cap">
                   <div class="card-body">
                     <h5 class="card-title">{{$data->hotels->hotel_name}}</h5>
                     <a href="#" class="btn btn-primary">Details</a>
                   </div>
                 </div>
                 </center>
               </div>
               @empty
           no data
           @endforelse
            </div>

          </div>
        </div>
      </div>

<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
    output.innerHTML = this.value;
    }
    </script>

    <script>
    var slider = document.getElementById("km");
    var output = document.getElementById("demokm");
    output.innerHTML = slider.value;

    slider.oninput = function() {
    output.innerHTML = this.value;
    }
    </script>

    <script>
    var slider = document.getElementById("walk");
    var output = document.getElementById("demowalk");
    output.innerHTML = slider.value;

    slider.oninput = function() {
    output.innerHTML = this.value;
    }
</script>
@endsection



{{-- <livewire:hotels /> --}}
