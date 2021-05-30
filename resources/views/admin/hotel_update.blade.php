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
</style>

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

                    <form action="{{ route('hotel_update',$hotels->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label >Hotel Name</label>
                                <input type="text" value="{{ $hotels->hotel_name }}" class="form-control bg-light @error('hotel_name') is-invalid @enderror" name="hotel_name" placeholder="Hotel Name" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                @error('hotel_name')
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
                                <label>Radius from KLCC (by Car)</label>
                                <input type="text" value="{{ $hotels->car_radius }}" class="form-control bg-light @error('car_radius') is-invalid @enderror" name="car_radius" placeholder="Radius from KLCC (by Car)">
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
                                <input type="text" value="{{ $hotels->walking_radius }}" class="form-control bg-light @error('walking_radius') is-invalid @enderror" name="walking_radius" placeholder="Radius from KLCC (Walking Distance)">
                                @error('walking_radius')
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
                                        <input type="file" class="custom-file-input" id="image" onchange="return translateUpload('image');" name="thumbnail">
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
                            <div class="col-md-12">
                                <div class="mt-1 text-center">
                                    <div class="images-preview-div"> </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                @if ($hotels->thumbnail)
                                    <p>Photo Preview:</p>
                                    <img src="{{ $hotels->thumbnail->temporaryUrl() }}" style="width:100%;height:30vh;">
                                @endif
                            </div>
                        </div> --}}

                        <div class="row" >
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
                                                <input type="text" class="form-control bg-light" name="latitude" id="lat" value="{{ $hotels->latitude }}" readonly />
                                              </div>
                                              <div class="col-md-6">
                                                <label>Longitude:</label>
                                                <input type="text" class="form-control bg-light" name="longitude" id="lng" value="{{ $hotels->longitude }}" readonly />
                                              </div>
                                            </div>
                                        </div>
                                        <br>
                                        {{-- <div class="box">
                                            <h5>Mouse Over the map below for your latitude and longitude.</h5>
                                          <table>
                                            <tr>
                                              <td><strong>Lat:</strong></td>
                                              <td>
                                                <input type="text"  name="latitude" id="mlat" value="0" />
                                              </td>
                                            </tr>
                                            <tr>
                                              <td><strong>Long:</strong></td>
                                              <td>
                                                <input type="text"  name="longitude" id="mlong" value="0" />
                                              </td>
                                            </tr>
                                          </table>
                                        </div> --}}
                                        {{-- <br /> --}}
                                        <div style="clear:both;"></div>
                                        <br />
                                      </div>
                                      <div class="grid_8">
                                        <div id="latlongmap" wire:ignore style="width:100%; height:480px;">
                                        </div>
                                      </div>
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">

                            </div>

                            <div class="row" style="padding: 1%">
                                <div class="col-md-12">
                                </div>
                            </div>



                            <div class="col-md-12" style="padding-top: 1%">

                                <button type="submit" class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-75" style="background: #e89a3d !important;">Submit</button>

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


                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
  <!-- Small card component -->
</div>

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
    $('#image').on('change', function() {
    previewImages(this, 'div.images-preview-div');
    });
    });
</script>

<script type="text/javascript">

  $('#image').on('change',function(){
      //get the file name
      var fileName = $(this).val();
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
  })
</script>

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



{{-- maps --}}
<script type="text/javascript">
    function process()
    {
    var xxhi = parseInt(document.getElementById("lng").value)+5;
    var xxlo = parseInt(document.getElementById("lng").value)-5;
    var yyhi = parseInt(document.getElementById("lat").value)+5;
    var yylo = parseInt(document.getElementById("lat").value)-5;
    var url="http://mynasadata.larc.nasa.gov/las/UI.vm#panelHeaderHidden=false;differences=false;autoContour=false;globalMin=0.018759;globalMax=99.6;xCATID=2B0BBF6A0A4C3C7A7D051B183657F99F;xDSID=cloud_coverage;varid=cldarea_total_daynight_mon-id-9bce6de9df;imageSize=auto;over=xy;compute=Nonetoken;tlo=15-Jan-2013;thi=15-Jan-2013;catid=2B0BBF6A0A4C3C7A7D051B183657F99F;dsid=cloud_coverage;varid=cldarea_total_daynight_mon-id-9bce6de9df;avarcount=0;xlo=" + xxlo + ";xhi=" + xxhi + ";ylo=" + yylo + ";yhi=" + yyhi + ";operation_id=Plot_2D_XY_zoom;view=xy";
    location.href=url;
    return false;
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
@endsection

