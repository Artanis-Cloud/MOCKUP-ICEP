@extends('layouts.app-user')

@section('content')
<div class="p-4 page-body text-dark">

  <div class="flex-row page-heading border-bottom d-flex">

  </div>

  <!-- Small card component -->

  <div class="rounded-lg card" style="border-color: #003473 !important;">
    <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Add New Vanue</div>

    <div class="card-body">

        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <!-- <div class="card-title">Tukar Kata Laluan</div> -->
          </div>
        </div>

        <form action="{{ route('vanue.create') }}" method="post">
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
              <label>Type of Hall</label>
              <input type="text"  class="form-control bg-light @error('type') is-invalid @enderror" name="type" placeholder="Name" required>
              @error('type')
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
              <label>Price</label>
              <input type="text"  class="form-control bg-light @error('name') is-invalid @enderror" name="name" placeholder="Name" required>
              @error('name')
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
              <input type="text"  class="form-control bg-light @error('name') is-invalid @enderror" name="name" placeholder="Name" required>
              @error('name')
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
              <input type="text"  class="form-control bg-light @error('name') is-invalid @enderror" name="name" placeholder="Name" required>
              @error('name')
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
              <label>State</label>
              <input type="text"  class="form-control bg-light @error('name') is-invalid @enderror" name="name" placeholder="Name" required>
              @error('name')
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
              <label>Upload</label>
              <input type="text"  class="form-control bg-light @error('name') is-invalid @enderror" name="name" placeholder="Name" required>
              @error('name')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          <div class="col-md-2"></div>
        </div>

        

          <div class="row">
            <div class="col-md-3">

            </div>
              <div class="col-md-6">
                <button type="submit" onclick="return confirm('Anda pasti untuk tukar kata laluan?')" class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-75">Add Vanue</button>
              </div>
          </div>
        </form>
    </div>
  </div>
</div>
</main>

@endsection
