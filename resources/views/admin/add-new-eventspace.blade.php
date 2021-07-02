@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
    <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
        <i class="fa fa-building" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
         Add New Event Space
      </div>
      <hr style="background-color: black !important;">
      <div style="padding:5px;"></div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- Small card component -->

            <div class="rounded-lg card" style="border-color: #003473 !important;">
                <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Add New Event Space</div>

                <div class="card-body">

                    <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                        <!-- <div class="card-title">Tukar Kata Laluan</div> -->
                    </div>
                    </div>

                   @livewire('event')
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
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
    // codeAddress();
    }

    // function codeAddress() {
    //     var address = document.getElementById("gadres").value;
    //     geocoder.geocode( { 'address': address}, function(results, status) {
    //       if (status == google.maps.GeocoderStatus.OK) {
    //         map.setCenter(results[0].geometry.location);
    //         document.getElementById('lat').value=results[0].geometry.location.lat().toFixed(6);
    //         document.getElementById('lng').value=results[0].geometry.location.lng().toFixed(6);
    // var latlong = "(" + results[0].geometry.location.lat().toFixed(6) + " , " +
    //     + results[0].geometry.location.lng().toFixed(6) + ")";

    //  var infowindow = new google.maps.InfoWindow({
    //         content: latlong
    //     });

    //         marker.setPosition(results[0].geometry.location);
    //         map.setZoom(16);

    // google.maps.event.addListener(marker, 'click', function() {
    //       infowindow.open(map,marker);
    //     });

    //       } else {
    //         alert("Lat and long cannot be found.");
    //       }
    //     });
    //   }
  </script>
  <style>
    #map {
      height: 500px;
      border: 1px solid #000;
    }
    </style>
@endsection
