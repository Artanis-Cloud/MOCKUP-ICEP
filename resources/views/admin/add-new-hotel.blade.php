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
@endsection

