<form wire:submit.prevent="addHotel">
    @csrf

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
            <label >Hotel Name</label>
            <input type="text"  wire:model='hotel_name' class="form-control bg-light @error('hotel_name') is-invalid @enderror" name="hotel_name" placeholder="Hotel Name" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
            @error('hotel_name')
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
            <input type="text" wire:model='car_radius' class="form-control bg-light @error('car_radius') is-invalid @enderror" name="car_radius" placeholder="Radius from KLCC (by Car)">
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
            <input type="text" wire:model='walking_radius' class="form-control bg-light @error('walking_radius') is-invalid @enderror" name="walking_radius" placeholder="Radius from KLCC (Walking Distance)">
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
                    <input wire:model='image' type="file" class="custom-file-input" id="image" onchange="return translateUpload('image');" name="thumbnail">
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

    <div class="row" >
        <div class="col-md-12">
            <label>Your selected Location is(latitude,Longitude): </label><input id='loc' type='text'  value=''/>
            <br/>
            <div wire:emit id="map" style="height: 350px; width:100%;"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">

        </div>

        <div class="row" style="padding: 1%">
            <div class="col-md-12">
                @livewire('room')
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
