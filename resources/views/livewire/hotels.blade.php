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

    <div class="row">
        <div class="col-md-3">

        </div>


        @livewire('room')

        <div class="col-md-12">

            <button type="submit" class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-75">Add Venue</button>
        </div>
    </div>
    </form>
