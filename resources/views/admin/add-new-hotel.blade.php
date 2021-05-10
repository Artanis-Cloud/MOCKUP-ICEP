@extends('layouts.app-user')

@section('content')

<link rel="stylesheet" href="https://maps.google.com/maps/api/js?sensor=false">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script>

<style>
#map {
  height: 500px;
  border: 1px solid #000;
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

                    @livewire('hotels')

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
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

<script>
    //the maps api is setup above
window.onload = function() {

var latlng = new google.maps.LatLng(3.1580,101.7118); //Set the default location of map

var map = new google.maps.Map(document.getElementById('map'), {

    center: latlng,

    zoom: 18, //The zoom value for map

    mapTypeId: google.maps.MapTypeId.ROADMAP

});

var marker = new google.maps.Marker({

    position: latlng,

    map: map,

    title: 'Place the marker for your location!', //The title on hover to display

    draggable: true //this makes it drag and drop

});

google.maps.event.addListener(marker, 'dragend', function(a) {

    console.log(a);

    document.getElementById('loc').value = a.latLng.lat().toFixed(4) + ', ' + a.latLng.lng().toFixed(4); //Place the value in input box



});

};
</script>
@endsection

