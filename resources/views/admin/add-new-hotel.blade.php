@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
    <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
        <i class="fa fa-hotel" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
        Add New Hotel
      </div>
      <hr style="background-color: black !important;">
      <div style="padding:5px;"></div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="rounded-lg card" style="border-color: #003473 !important;">
            <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Add New Hotel</div>

            <div class="card-body">

                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-8">
                    <!-- <div class="card-title">Tukar Kata Laluan</div> -->
                  </div>
                </div>

                <form action="{{ route('hotel.submit') }}" method="post" enctype="multipart/form-data">
                  @csrf

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Hotel Name</label>
                      <input type="text"  class="form-control bg-light @error('hotel_name') is-invalid @enderror" name="hotel_name" placeholder="Hotel Name" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" required>
                      @error('hotel_name')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Room</label>
                      <input type="text"  class="form-control bg-light @error('room_type') is-invalid @enderror" name="room_type" placeholder="Room" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" required>
                      @error('room_type')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Radius from KLCC (by Car)</label>
                      <input type="text"  class="form-control bg-light @error('car_radius') is-invalid @enderror" name="car_radius" placeholder="Radius from KLCC (by Car)" required>
                      @error('car_radius')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Radius from KLCC (Walking Distance)</label>
                      <input type="text"  class="form-control bg-light @error('walking_radius') is-invalid @enderror" name="walking_radius" placeholder="Radius from KLCC (Walking Distance)" required>
                      @error('walking_radius')
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align:center;">
                        <label><b>Room Rates (per room per night)</b></label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Single Rate (1 Breakfast)</label>
                        <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" name="single_rate" placeholder="Single Rate (1 Breakfast)" required>
                        @error('single_rate')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Double Rate (2 Breakfast)</label>
                        <input type="text"  class="form-control bg-light @error('double_rate') is-invalid @enderror" name="double_rate" placeholder="Double Rate (2 Breakfast)" required>
                        @error('double_rate')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Corporate Rate</label>
                        <input type="text"  class="form-control bg-light @error('corporate_rate') is-invalid @enderror" name="corporate_rate" placeholder="Corporate Rate" required>
                        @error('corporate_rate')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                  </div>


                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label  class="required">Upload Thumbnail Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" required id="image" onchange="return translateUpload('image');" name="thumbnail" required>
                            <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                        </div>
                        <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                        @error('thumbnail')
                        <div class="alert alert-danger">
                          <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                  </div>
                </div>



                  <div class="row">
                    <div class="col-md-3">

                    </div>
                      <div class="col-md-6">

                        <button type="submit" onclick="return confirm('Confirm Submit?')" class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-75">Add Venue</button>
                      </div>
                  </div>
                </form>
            </div>
          </div>
    </div>
    <div class="col-md-2"></div>
</div>

  <!-- Small card component -->


</div>
</main>
<script type="text/javascript">

  $('#image').on('change',function(){
      //get the file name
      var fileName = $(this).val();
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
  })

  function translateUpload(x){
    console.log("translate upload fungsi");
    fileValidation(x);
    document.getElementById("image").setCustomValidity('');
  }

  function fileValidation(name){
    console.log(name);

    var fileInput = document.getElementById(name);
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpeg|\.jpg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload in format .jpeg , .jpg and .png only!');
        fileInput.value = '';
        return false;
    }
  }
</script>
@endsection
