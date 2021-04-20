@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- Small card component -->

            <div class="rounded-lg card" style="border-color: #003473 !important;">
                <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Add New Event Space</div>

                <div class="card-body">

                    <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                        <!-- <div class="card-title">Tukar Kata Laluan</div> -->
                    </div>
                    </div>

                    <form action="{{ route('eventspace.submit') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Hotel Name</label>
                        <select name="hotel_name" id="" class="form-control bg-light @error('hotel_name') is-invalid @enderror"">
                            <option selected disabled hidden value="" >Enter Hotel Name</option>
                            @forelse ($hotel_name as $data)
                            <option value="{{ $data-> hotel_name }}" >{{ $data-> hotel_name }}</option>
                            @empty

                            @endforelse


                        </select>
                        @error('hotel_name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Venue</label>
                        <input type="text"  class="form-control bg-light @error('venue') is-invalid @enderror" name="venue" placeholder="Venue " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" required>
                        @error('name')
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
                            <label>Size (sq.ft.)</label>
                            <input type="text"  class="form-control bg-light @error('size') is-invalid @enderror" name="size" placeholder="Size of Venue" required>
                            @error('number_of_pax')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Maximum Capacity</label>
                            <input type="text"  class="form-control bg-light @error('capacity') is-invalid @enderror" name="capacity" placeholder="Maximum capacity" required>
                            @error('number_of_pax')
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
                            <label>Banquet</label>
                            <input type="text"  class="form-control bg-light @error('banquet') is-invalid @enderror" name="banquet" placeholder="Banquet" required>
                            @error('banquet')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Classroom</label>
                            <input type="text"  class="form-control bg-light @error('classroom') is-invalid @enderror" name="classroom" placeholder="Classroom" required>
                            @error('classroom')
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
                            <label>Theater</label>
                            <input type="text"  class="form-control bg-light @error('theater') is-invalid @enderror" name="theater" placeholder="Theater" required>
                            @error('theater')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Cocktail</label>
                            <input type="text"  class="form-control bg-light @error('cocktail') is-invalid @enderror" name="cocktail" placeholder="Cocktail" required>
                            @error('cocktail')
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
                            <label>Daily Rate</label>
                            <input type="text"  class="form-control bg-light @error('daily_rates') is-invalid @enderror" name="daily_rates" placeholder="Daily Rate" required>
                            @error('daily_rates')
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
        <div class="col-md-2"></div>
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
@endsection
