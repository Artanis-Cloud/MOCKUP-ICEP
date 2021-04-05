@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">

  <div class="flex-row page-heading border-bottom d-flex">

  </div>

  <!-- Small card component -->

  <div class="rounded-lg card" style="border-color: #003473 !important;">
    <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Add New Venue</div>

    <div class="card-body">

        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <!-- <div class="card-title">Tukar Kata Laluan</div> -->
          </div>
        </div>

        <form action="{{ route('venue.submit') }}" method="post" enctype="multipart/form-data">
          @csrf

        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Name</label>
              <input type="text"  class="form-control bg-light @error('name') is-invalid @enderror" name="name" placeholder="Name" required>
              @error('name')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="kategori" state>Type of venue</label>
              <select id="type" class="custom-select  bg-light @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required>
                    <option value="" selected disabled hidden>Choose Venue Type</option>
                    <option value="hall" {{ old('type') == "hall" ? 'selected' : '' }}>Hall</option>
                    <option value="hotel" {{ old('type') == "hotel" ? 'selected' : '' }}>Hotel</option>
                </select>
                @error('kategori')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Number of Pax</label>
              <input type="text"  class="form-control bg-light @error('number_of_pax') is-invalid @enderror" name="number_of_pax" placeholder="Number of pax" required>
              @error('number_of_pax')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Price <strong>(RM)</strong></label>
              <input type="text"  class="form-control bg-light @error('price') is-invalid @enderror" name="price" placeholder="Price" required>
              @error('price')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>

        <div class="row">
          <div class="col-md-2"></div>

          <div class="col-md">
            <div class="form-group">
              <label>Description</label>
              <textarea id="description" name="description" rows="2" cols="50" placeholder="Venue description" class="form-control bg-light @error('description') is-invalid @enderror" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{ old('description') }}</textarea>
              @error('description')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="col-md-2"></div>
        </div>

        <div class="row">
          <div class="col-md-2"></div>

          <div class="col-md">
            <div class="form-group">
              <label>Address</label>
              <textarea id="address" name="address" rows="2" cols="50" placeholder="Address" class="form-control bg-light @error('address') is-invalid @enderror" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{ old('address') }}</textarea>
              @error('address')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="col-md-2"></div>
        </div>


        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Postcode</label>
              <input type="text"  class="form-control bg-light @error('postcode') is-invalid @enderror" maxlength="5" minlength="5" name="postcode" placeholder="Postcode" required>
              @error('name')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="state" state>State</label>
              <select id="state" class="custom-select  bg-light @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}"  required>
                    <option value="" selected disabled hidden>Choose State</option>
                    <option value="Johor" {{ old('state') == "Johor" ? 'selected' : '' }}>Johor</option>
                    <option value="Kedah" {{ old('state') == "Kedah" ? 'selected' : '' }}>Kedah</option>
                    <option value="Kelantan" {{ old('state') == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                    <option value="Melaka" {{ old('state') == "Melaka" ? 'selected' : '' }}>Melaka</option>
                    <option value="Negeri Sembilan" {{ old('state') == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
                    <option value="Pahang" {{ old('state') == "Pahang" ? 'selected' : '' }}>Pahang</option>
                    <option value="Pulau Pinang" {{ old('state') == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                    <option value="Perak" {{ old('state') == "Perak" ? 'selected' : '' }}>Perak</option>
                    <option value="Perlis" {{ old('state') == "Perlis" ? 'selected' : '' }}>Perlis</option>
                    <option value="Sabah" {{ old('state') == "Sabah" ? 'selected' : '' }}>Sabah</option>
                    <option value="Sarawak" {{ old('state') == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                    <option value="Selangor" {{ old('state') == "Selangor" ? 'selected' : '' }}>Selangor</option>
                    <option value="Terengganu" {{ old('state') == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                    <option value="WP Kuala Lumpur" {{ old('state') == "WP Kuala Lumpur" ? 'selected' : '' }}>WP Kuala Lumpur</option>
                    <option value="WP Putrajaya" {{ old('state') == "WP Putrajaya" ? 'selected' : '' }}>WP Putrajaya</option>
                    <option value="WP Labuan" {{ old('state') == "WP Labuan" ? 'selected' : '' }}>WP Labuan</option>
                </select>
              @error('state')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>

        <div class="row">
          <div class="col-md-2"></div>

          <div class="col-md">
            <div class="form-group">
                <label  class="required">Upload Venue Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" required id="image" onchange="return translateUpload('image');" name="image" required>
                    <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                </div>
                <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                @error('image')
                <div class="alert alert-danger">
                  <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
          </div>

          <div class="col-md-2"></div>
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
