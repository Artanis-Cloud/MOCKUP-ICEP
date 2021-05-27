@extends('layouts.app-user')

@section('content')
<style>
    #map {
      height: 500px;
      border: 1px solid #000;
    }
    .images-preview-div img
    {
    padding: 10px;
    max-width: 100%;
    height:200px;
    }

    .images-preview-div1 img
    {
    padding: 10px;
    max-width: 100%;
    height:200px;
    }

    .images-preview-div2 img
    {
    padding: 10px;
    max-width: 100%;
    height:200px;
    }
</style>
<div class="p-4 page-body text-dark">
    <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
        <i class="fa fa-building" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
         Edit Event Space
      </div>
      <hr style="background-color: black !important;">
      <div style="padding:5px;"></div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- Small card component -->

            <div class="rounded-lg card" style="border-color: #003473 !important;">
                <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Edit Event Space</div>

                <div class="card-body">

                    <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <!-- <div class="card-title">Tukar Kata Laluan</div> -->
                    </div>
                    </div>

                    <div class="">
                        {{-- @if($eventspace->hotel_id)
                        <form action="{{ route('eventspace_update',$eventspace->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text"  class="form-control bg-light @error('venue') is-invalid @enderror" name="venue" value="{{ $eventspace->venue }}" placeholder="Venue " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    @error('venue')
                                        <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Level</label>
                                    <input type="text"   class="form-control bg-light @error('venue') is-invalid @enderror" name="level" value="{{ $eventspace->level }}" placeholder="Level " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    @error('level')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Size (sq.ft.)</label>
                                        <input type="text" class="form-control bg-light @error('size') is-invalid @enderror" name="size" value="{{ $eventspace->size }}" placeholder="Size of Venue">
                                        @error('size')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>
                                </div>

                                <hr class="">
                                <label>Layout</label>

                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Banquet</label>
                                        <input type="text"  class="form-control bg-light @error('banquet') is-invalid @enderror" name="banquet" value="{{ $eventspace->banquet }}" placeholder="Banquet">
                                        @error('banquet')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Classroom</label>
                                        <input type="text"  class="form-control bg-light @error('classroom') is-invalid @enderror" name="classroom" value="{{ $eventspace->classroom }}" placeholder="Classroom">
                                        @error('classroom')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Theater</label>
                                        <input type="text" class="form-control bg-light @error('theater') is-invalid @enderror" name="theater" value="{{ $eventspace->theater }}" placeholder="Theater">
                                        @error('theater')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cocktail</label>
                                        <input type="text" class="form-control bg-light @error('cocktail') is-invalid @enderror" name="cocktail" value="{{ $eventspace->cocktail }}" placeholder="Cocktail">
                                        @error('cocktail')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Cabaret/Workshop</label>
                                            <input type="text" class="form-control bg-light @error('cabaret') is-invalid @enderror" name="cabaret" value="{{ $eventspace->cabaret }}" placeholder="Cabaret/Workshop">
                                            @error('cabaret')
                                            <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Booth Capacity</label>
                                            <input type="text" class="form-control bg-light @error('booth_capacity') is-invalid @enderror" name="booth_capacity" value="{{ $eventspace->booth_capacity }}" placeholder="Booth Capacity">
                                            @error('booth_capacity')
                                            <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Daily Rate</label>
                                                <input type="text" class="form-control bg-light @error('daily_rate') is-invalid @enderror" name="daily_rate" value="{{ $eventspace->daily_rate }}" placeholder="Daily Rates">
                                                @error('daily_rate')
                                                <div class="alert alert-danger">
                                                    <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label  class="required">Upload Event Space Images</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="photos" onchange="return translateUpload1('photos');" name="photos[]" multiple>
                                                <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                                            </div>
                                            <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                                            @error('photos')
                                            <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mt-1 text-center">
                                            <div class="images-preview-div"> </div>
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

                                <div class="row">
                                    <div class="col-md-12" style="padding-top: 1%">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                        {{ session('message') }}
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </form>
                        @else --}}
                        <form action="{{ route('eventspace_update',$eventspace->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text" class="form-control bg-light @error('venue') is-invalid @enderror" name="venue" value="{{ $eventspace->venue }}" placeholder="Venue " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    @error('venue')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Radius from KLCC (by Car)</label>
                                    <input type="text" class="form-control bg-light @error('car_radius') is-invalid @enderror" name="car_radius" value="{{ $eventspace->car_radius }}" placeholder="Radius from KLCC (by Car)">
                                    @error('car_radius')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Radius from KLCC (Walking Distance)</label>
                                    <input type="text" class="form-control bg-light @error('walking_radius') is-invalid @enderror" name="walking_radius" value="{{ $eventspace->walking_radius }}" placeholder="Radius from KLCC (Walking Distance)">
                                    @error('walking_radius')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    {{-- maps --}}
                                    {{-- <label>Your selected Location is(latitude,Longitude): </label><input id='loc' type='text'  value=''/>
                                    <br/>
                                    <div wire:emit id="map" style="height: 350px; width:100%;"></div> --}}

                                    <body onload="initialize()">
                                        <div class="container_12" id="header">
                                            <div class="clear"></div>
                                            <div class="grid_4">
                                            {{-- <h5>Latitude and Longitude</h5> --}}
                                            <div class="box">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <label>Latitude:</label>
                                                    <input type="text" class="form-control bg-light" name="latitude" value="{{ $eventspace->latitude }}" id="lat" readonly />
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label>Longitude:</label>
                                                    <input type="text" class="form-control bg-light" name="longitude" value="{{ $eventspace->longitude }}" id="lng" readonly />
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div style="clear:both;"></div>
                                            <br />
                                            </div>
                                            <div class="grid_8">
                                            <div id="latlongmap" wire:ignore style="width:100%; height:480px;">
                                            </div>
                                            </div>
                                        </div>
                                </div>
                                <br>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Level</label>
                                    <input type="text" class="form-control bg-light @error('venue') is-invalid @enderror" name="level" value="{{ $eventspace->level }}" placeholder="Level " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    @error('level')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Size (sq.ft.)</label>
                                        <input type="text" class="form-control bg-light @error('size') is-invalid @enderror" name="size" value="{{ $eventspace->size }}" placeholder="Size of Venue">
                                        @error('size')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>
                                </div>

                                <hr class="">
                                <label>Layout</label>

                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Banquet</label>
                                        <input type="text" class="form-control bg-light @error('banquet') is-invalid @enderror" name="banquet" value="{{ $eventspace->banquet }}" placeholder="Banquet">
                                        @error('banquet')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Classroom</label>
                                        <input type="text" class="form-control bg-light @error('classroom') is-invalid @enderror" name="classroom" value="{{ $eventspace->classroom }}" placeholder="Classroom">
                                        @error('classroom')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Theater</label>
                                        <input type="text" class="form-control bg-light @error('theater') is-invalid @enderror" name="theater" value="{{ $eventspace->theater }}" placeholder="Theater">
                                        @error('theater')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cocktail</label>
                                        <input type="text" class="form-control bg-light @error('cocktail') is-invalid @enderror" name="cocktail" value="{{ $eventspace->cocktail }}" placeholder="Cocktail">
                                        @error('cocktail')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Cabaret/Workshop</label>
                                            <input type="text" class="form-control bg-light @error('cabaret') is-invalid @enderror" name="cabaret" value="{{ $eventspace->cabaret }}" placeholder="Cabaret/Workshop">
                                            @error('cabaret')
                                            <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Booth Capacity</label>
                                                <input type="text" class="form-control bg-light @error('booth_capacity') is-invalid @enderror" name="booth_capacity" value="{{ $eventspace->booth_capacity }}" placeholder="Booth Capacity">
                                                @error('booth_capacity')
                                                <div class="alert alert-danger">
                                                    <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Daily Rate</label>
                                                    <input type="text" class="form-control bg-light @error('daily_rate') is-invalid @enderror" name="daily_rate" value="{{ $eventspace->daily_rate }}" placeholder="Cocktail">
                                                    @error('daily_rate')
                                                    <div class="alert alert-danger">
                                                        <strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                </div>
                                                </div>

                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label  class="required">Thumbnails image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="thumbnail" onchange="return translateUpload2('thumbnail');" name="thumbnail">
                                            <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                                        </div>
                                        <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB.</small>
                                        @error('thumbnail')
                                        <div class="alert alert-danger">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mt-1 text-center">
                                            <div class="images-preview-div2"> </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label  class="required">Upload Event Space Images</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="photos1" onchange="return translateUpload('photos1');" name="photos[]" multiple>
                                                <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                                            </div>
                                            <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                                            @error('photos[]')
                                            <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mt-1 text-center">
                                            <div class="images-preview-div1"> </div>
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

                                <div class="row">
                                    <div class="col-md-12" style="padding-top: 1%">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                        {{ session('message') }}
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </form>
                        {{-- @endif --}}
                    </div>

                </div>
            </div>
        <div class="col-md-2"></div>
    </div>
</div>
</main>
<script >
    $(function() {
    // Multiple images preview with JavaScript
    var previewImages = function(input, imgPreviewPlaceholder) {
    if (input.files) {
    var filesAmount = input.files.length;
    for (i = 0; i < filesAmount; i++) {
    var reader = new FileReader();
    reader.onload = function(event) {
    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
    }
    reader.readAsDataURL(input.files[i]);
    }
    }
    };
    $('#photos').on('change', function() {
    previewImages(this, 'div.images-preview-div');
    });
    });
</script>
<script >
    $(function() {
    // Multiple images preview with JavaScript
    var previewImages = function(input, imgPreviewPlaceholder) {
    if (input.files) {
    var filesAmount = input.files.length;
    for (i = 0; i < filesAmount; i++) {
    var reader = new FileReader();
    reader.onload = function(event) {
    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
    }
    reader.readAsDataURL(input.files[i]);
    }
    }
    };
    $('#photos1').on('change', function() {
    previewImages(this, 'div.images-preview-div1');
    });
    });
</script>
<script >
    $(function() {
    // Multiple images preview with JavaScript
    var previewImages = function(input, imgPreviewPlaceholder) {
    if (input.files) {
    var filesAmount = input.files.length;
    for (i = 0; i < filesAmount; i++) {
    var reader = new FileReader();
    reader.onload = function(event) {
    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
    }
    reader.readAsDataURL(input.files[i]);
    }
    }
    };
    $('#thumbnail').on('change', function() {
    previewImages(this, 'div.images-preview-div2');
    });
    });
</script>

<script type="text/javascript">

  $('#photos1').on('change',function(){
      //get the file name
      var fileName = $(this).val();
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
  })

  function translateUpload(x){
    console.log("translate upload fungsi");
    fileValidation(x);
    document.getElementById("photos1").setCustomValidity('');
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

<script type="text/javascript">

    $('#photos').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })

    function translateUpload1(x){
      console.log("translate upload fungsi");
      fileValidation(x);
      document.getElementById("photos").setCustomValidity('');
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

<script type="text/javascript">

    $('#thumbnail').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })

    function translateUpload2(x){
      console.log("translate upload fungsi");
      fileValidation(x);
      document.getElementById("thumbnail").setCustomValidity('');
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

<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
    var map;
        var geocoder;
        var marker;
        function initialize() {
        var latlng = new google.maps.LatLng(3.157968, 101.711205);
        var myOptions = {
          zoom: 15,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.HYBRID
        };
        map = new google.maps.Map(document.getElementById("latlongmap"),
            myOptions);
      geocoder = new google.maps.Geocoder();
      marker = new google.maps.Marker({
          position: latlng,
          map: map
      });

        map.streetViewControl=false;
            google.maps.event.addListener(map, 'click', function(event) {
            marker.setPosition(event.latLng);
            var yeri = event.latLng;
            document.getElementById('lat').value=yeri.lat().toFixed(6);
            document.getElementById('lng').value=yeri.lng().toFixed(6);
        });
        google.maps.event.addListener(map, 'mousemove', function(event) {
        var yeri = event.latLng;
        // document.getElementById("mlat").value = yeri.lat().toFixed(6);
        // document.getElementById("mlong").value = yeri.lng().toFixed(6);

        var lat = yeri.lat().toFixed(6);
        var lng = yeri.lng().toFixed(6);

        Livewire.emit('lat', lat);
        Livewire.emit('lng', lng);

    });
    }
  </script>

<script type="text/javascript">

    $('#photos1').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })

    function translateUpload(x){
      console.log("translate upload fungsi");
      fileValidation(x);
      document.getElementById("photos1").setCustomValidity('');
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
