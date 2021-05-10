<form wire:submit.prevent="addEvent" >
    @csrf

<div>
        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <label>Hotel Name</label>
            <select name="hotel_id" id="" wire:model='hotel_id' class="form-control bg-light @error('hotel_name') is-invalid @enderror"">
                <option selected disabled hidden value="" >Enter Hotel Name</option>
                @forelse ($hotel_name as $data)
                <option value="{{ $data->id }}" >{{ $data->hotel_name }}</option>
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
            <input type="text"  wire:model='venue' class="form-control bg-light @error('venue') is-invalid @enderror" name="venue" placeholder="Venue " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" required>
            @error('name')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label>Level</label>
            <input type="text"  wire:model='level' class="form-control bg-light @error('venue') is-invalid @enderror" name="level" placeholder="Level " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" required>
            @error('level')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Size (sq.ft.)</label>
                <input type="text"  wire:model='size' class="form-control bg-light @error('size') is-invalid @enderror" name="size" placeholder="Size of Venue" required>
                @error('number_of_pax')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>
        </div>

        <hr class="">
        <label>Layout</label>

        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Banquet</label>
                <input type="text"  wire:model='banquet' class="form-control bg-light @error('banquet') is-invalid @enderror" name="banquet" placeholder="Banquet" required>
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
                <input type="text"  wire:model='classroom' class="form-control bg-light @error('classroom') is-invalid @enderror" name="classroom" placeholder="Classroom" required>
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
                <input type="text" wire:model='theater' class="form-control bg-light @error('theater') is-invalid @enderror" name="theater" placeholder="Theater" required>
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
                <input type="text"  wire:model='cocktail' class="form-control bg-light @error('cocktail') is-invalid @enderror" name="cocktail" placeholder="Cocktail" required>
                @error('cocktail')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Cabaret/Workshop</label>
                    <input type="text"  wire:model='cabaret' class="form-control bg-light @error('cabaret') is-invalid @enderror" name="cabaret" placeholder="Cabaret/Workshop" required>
                    @error('cabaret')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Booth Capacity</label>
                        <input type="text"  wire:model='booth_capacity'class="form-control bg-light @error('booth_capacity') is-invalid @enderror" name="booth_capacity" placeholder="Booth Capacity" required>
                        @error('booth_capacity')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Daily Rate</label>
                            <input type="text"  wire:model='daily_rate' class="form-control bg-light @error('daily_rate') is-invalid @enderror" name="Daily Rate" placeholder="Cocktail" required>
                            @error('daily_rate')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>


        </div>


        {{-- <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label  class="required">Upload Event Space Image</label>
                <div class="custom-file">
                    <input type="file" wire:model='image' class="custom-file-input" required id="image" onchange="return translateUpload('image');" name="thumbnail" multiple>
                    <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                </div>
                <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB. You can upload multiple images.</small>
                @error('thumbnail')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">

                <button type="submit" onclick="return confirm('Confirm Submit?')" class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-75">Add Venue</button>
            </div>
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
