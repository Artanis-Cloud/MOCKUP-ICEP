<div>
    {{-- <div class="row">
        <div class="col-md-12" style="text-align:center;">
            <label><b>Room Rates (per room per night)</b></label>
        </div>
    </div> --}}

    <form>
        <div class="row">
        <div class="col-md">
            <div class="form-group">

                <label>Venue</label>
                {{-- <label style="color:red;">If venue has hotel, Please insert hotel name.</label> --}}
                <select name="hotel_id" id="" wire:model='hotel_id'
                    class="form-control bg-light @error('hotel_id') is-invalid @enderror"">
                <option disabled=" disabled" hidden value="0">Choose Venue</option>
                    @forelse ($hotel_name as $data)
                        <option value="{{ $data->id }}">{{ $data->hotel_name }}</option>
                    @empty
                        <option selected="true" disabled="disabled" value="0">Please Insert Venue Information in Add New
                            Venue</option>
                    @endforelse


                </select>
                @error('hotel_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
        <div class="add-input">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Room Type</label>
                        <input type="text" class="form-control bg-light @error('room_type.0') is-invalid @enderror"
                            wire:model="room_type.0" name="room_type" placeholder="Room Type">
                        @error('room_type.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Room Size</label>
                        <input type="text" class="form-control bg-light @error('size') is-invalid @enderror"
                            wire:model="size.0" name="size" placeholder="Size">
                        @error('size.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Type Of Bed</label>
                        <input type="text" class="form-control bg-light @error('type_of_bed') is-invalid @enderror"
                            wire:model="type_of_bed.0" name="type_of_bed" placeholder="">
                        @error('type_of_bed.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>View</label>
                        <input type="text" class="form-control bg-light @error('view') is-invalid @enderror"
                            wire:model="view.0" name="view" placeholder="">
                        @error('view.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Single Rate (1 Breakfast)</label>
                        <input type="text" class="form-control bg-light @error('single_rate') is-invalid @enderror"
                            wire:model="single_rate.0" name="single_rate" placeholder="Single Rate (1 Breakfast)">
                        @error('single_rate.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Double Rate (2 Breakfast)</label>
                        <input type="text" class="form-control bg-light @error('double_rate') is-invalid @enderror"
                            wire:model="double_rate.0" name="double_rate" placeholder="Double Rate (2 Breakfast)">
                        @error('double_rate.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Corporate Rate</label>
                        <input type="text" class="form-control bg-light @error('corporate_rate') is-invalid @enderror"
                            wire:model="corporate_rate.0" name="corporate_rate" placeholder="Corporate Rate">
                        @error('corporate_rate.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="">Upload Photos</label>
                        <div class="custom-file">
                            <input wire:model="photos.0" type="file" class="custom-file-input" id="photos.0[]"
                                name="photos">
                            <label class="custom-file-label bg-light" for="inputGroupFile02"
                                aria-describedby="inputGroupFileAddon02">Upload Image</label>
                        </div>
                        <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                        @error('photos.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="">Images Caption</label>
                        <input type="text" wire:model='caption.0'
                            class="form-control bg-light @error('caption') is-invalid @enderror"
                            placeholder="Image Caption">
                        @error('caption')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                @if ($showgambar)
                    <div class="col-md-1" style="text-align: center;">
                        <label class="">Action</label><br>
                        <button class="btn btn-primary" wire:click="$set('showgambar', true)"
                            wire:click.prevent="addgambar({{ $j }})">Add</button>
                    </div>
                @endif
            </div>
            @foreach ($inputphotos as $key => $value)
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="">Upload Event Space Images</label>
                            <div class="custom-file">
                                <input wire:model="photos.{{ $value }}" type="file" class="custom-file-input"
                                    onchange="return translateUpload('photos1');" id="photos1" name="photos">
                                <label class="custom-file-label bg-light" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Upload Image</label>
                            </div>
                            <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                            @error('photos.' . $value)
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="">Images Caption</label>
                            <input type="text" wire:model='caption.{{ $value }}'
                                class="form-control bg-light @error('caption') is-invalid @enderror"
                                placeholder="Image Caption">
                            @error('caption.' . $value)
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    @if ($showgambar)
                        <div class="col-md-1" style="text-align: center;">
                            <label class="">Action</label><br>
                            <button id="myDiv" class="btn btn-danger"
                                wire:click.prevent="removegambar({{ $key }})">Delete</button>
                        </div>
                    @endif


                </div>
            @endforeach

        </div>

        @foreach ($inputs as $key => $value)
            <div class="add-input">

                <hr>
                {{-- <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <label><b>Room Rates (per room per night)</b></label>
            </div>
        </div> --}}

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Room Type</label>
                            <input type="text" class="form-control bg-light @error('room_type') is-invalid @enderror"
                                wire:model="room_type.{{ $value }}" name="room_type" required
                                placeholder="Room Type">
                            @error('room_type.' . $value)
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Room Size</label>
                            <input type="text" class="form-control bg-light @error('size') is-invalid @enderror"
                                wire:model="size.{{ $value }}" name="size" required placeholder="Size">
                            @error('size.' . $value)
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Type Of Bed</label>
                            <input type="text" class="form-control bg-light @error('type_of_bed') is-invalid @enderror"
                                wire:model="type_of_bed.{{ $value }}" required name="type_of_bed"
                                placeholder="">
                            @error('type_of_bed.' . $value)
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>View</label>
                            <input type="text" class="form-control bg-light @error('view') is-invalid @enderror"
                                wire:model="view.{{ $value }}" name="view" required placeholder="">
                            @error('view.' . $value)
                                <<div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Single Rate (1 Breakfast)</label>
                        <input type="text" class="form-control bg-light @error('single_rate') is-invalid @enderror"
                            wire:model="single_rate.{{ $value }}" name="single_rate" required
                            placeholder="Single Rate (1 Breakfast)">
                        @error('single_rate.' . $value)
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Double Rate (2 Breakfast)</label>
                        <input type="text" class="form-control bg-light @error('double_rate') is-invalid @enderror"
                            wire:model="double_rate.{{ $value }}" name="double_rate" required
                            placeholder="Double Rate (2 Breakfast)">
                        @error('double_rate.' . $value)
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Corporate Rate</label>
                        <input type="text" class="form-control bg-light @error('corporate_rate') is-invalid @enderror"
                            wire:model="corporate_rate.{{ $value }}" name="corporate_rate" required
                            placeholder="Corporate Rate">
                        @error('corporate_rate.' . $value)
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="">Upload Photos</label>
                        <div class="custom-file">
                            <input wire:model="photos.0" type="file" class="custom-file-input" id="photos.0[]"
                                name="photos">
                            <label class="custom-file-label bg-light" for="inputGroupFile02"
                                aria-describedby="inputGroupFileAddon02">Upload Image</label>
                        </div>
                        <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                        @error('photos.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="">Images Caption</label>
                        <input type="text" wire:model='caption.0'
                            class="form-control bg-light @error('caption') is-invalid @enderror"
                            placeholder="Image Caption">
                        @error('caption.0')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                @if ($showgambar)
                    <div class="col-md-1" style="text-align: center;">
                        <label class="">Action</label><br>
                        <button class="btn btn-primary" wire:click="$set('showgambar', true)"
                            wire:click.prevent="addgambar({{ $j }})">Add</button>
                    </div>
                @endif
            </div>
            @foreach ($inputphotos as $key => $value)
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="">Upload Event Space Images</label>
                            <div class="custom-file">
                                <input wire:model="photos.{{ $value }}" type="file" class="custom-file-input"
                                    onchange="return translateUpload('photos1');" id="photos1" name="photos">
                                <label class="custom-file-label bg-light" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Upload Image</label>
                            </div>
                            <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                            @error('photos.' . $value)
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="">Images Caption</label>
                            <input type="text" wire:model='caption.{{ $value }}'
                                class="form-control bg-light @error('caption') is-invalid @enderror"
                                placeholder="Image Caption">
                            @error('caption.' . $value)
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    @if ($showgambar)
                        <div class="col-md-1" style="text-align: center;">
                            <label class="">Action</label><br>
                            <button id="myDiv" class="btn btn-danger"
                                wire:click.prevent="removegambar({{ $key }})">Delete</button>
                        </div>
                    @endif


                </div>
            @endforeach

            <div class="row">
                {{-- @if ($add)
        <div class="col-md-6">
            <button class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-50" wire:click="$set('add', false)" wire:click.prevent="add({{$i}})">Add</button>
        </div>
        @endif --}}
                <div class="col-md-12">
                    <button class="m-auto btn btn-danger btn-outline-primary badge-pill btn-block w-50"
                        wire:click.prevent="remove({{ $key }})">Remove</button>
                </div>
            </div>

</div>

@endforeach
@if ($show)
    <div class="row" style="padding-top: 2%">
        <div class="col-md-12">
            <button id="myDiv" class="m-auto btn btn-success btn-outline-primary badge-pill btn-block w-50"
                wire:click="$set('show', true)" wire:click.prevent="add({{ $i }})">Add Room</button>
        </div>
    </div>
@endif
{{-- <div class="row" style="padding-top: 2%">
        <div class="col-md-12">
        <button type="button" wire:click.prevent="store()" class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-50" style="background: #e89a3d !important;">Save</button>
        </div>
    </div> --}}


<div class="col-md-12" style="padding-top: 1%">

    <button type="submit" wire:click.prevent='store'
        class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-75"
        style="background: #e89a3d !important;">Submit</button>

</div>

</form>



</div>

<script>
    function doSomething() {
        // Remove onclick
        var element = document.getElementById("myDiv");
        element.onclick = "";

        // Do your processing here
        alert("Something is done!");

        // Re-enable after processing if you want
        // element.onclick = doSomething;
    }
</script>

<script>
    function hide() {
        var div = document.getElementyById('whatYouWantToHide');
        div.style.display = 'none';
    }
</script>
