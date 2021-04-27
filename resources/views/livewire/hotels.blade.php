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
            <div class="col-md-4" style="padding: 2%">
            <center>
                <div class="card" style="width: 100%;">
                <img class="card-img-top" src="{{ asset($image_path=str_replace('public','storage',$data->thumbnail))}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> {{$data->hotel_name}}</h5>
                    <a href="{{ route('details') }}" class="btn btn-primary">Details</a>
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
