@extends('layouts.app-user')

@section('content')

{{-- <link rel="stylesheet" href="https://maps.google.com/maps/api/js?sensor=false"> --}}
{{-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script> --}}

<script type="text/javascript">
//     $(document).ready(function() {
//        $("#gadres")
//         .css("color", "#555555")
//         .focus(function(){
//             $(this).css("color", "black"); $(this).css("background-color", "#ffffff");$(this).select();
//         })
//         .blur(function(){
//             $(this).css("color", "#555555"); $(this).css("background-color", "#fafafa");
//         });
//     $("#gadres").keyup(function(event){
//         if(event.keyCode == 13){
//             codeAddress();
//         }
//     });
//      });
//   </script>

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

<div class="p-4 page-body text-dark">
    <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
        <i class="fa fa-hotel" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
        Add New Accommodation
    </div>
    <hr style="background-color: black !important;">
    <div style="padding:5px;"></div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="rounded-lg card" style="border-color: #003473 !important;">
                <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Add New Accommodation</div>
                <div class="card-body">

                    @livewire('room')

                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
  <!-- Small card component -->
</div>


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
@endsection

