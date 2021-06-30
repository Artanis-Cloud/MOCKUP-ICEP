<div class="">
    {{-- <div class="row">
        <button class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-25" wire:click="$emit('showFormHotel')">Have Hotel</button>
        <button class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-25" wire:click="$emit('showFormNotHotel')">No Hotel</button>
    </div> --}}


    {{-- @if($show == 1)
    <form wire:submit.prevent="addEvent" >
        @csrf
        <div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label>Hotel Name</label>
                <select name="hotel_id" id="" wire:model='hotel_id' class="form-control bg-light @error('hotel_id') is-invalid @enderror"">
                    <option disabled="disabled" hidden value="0">Choose Hotel</option>
                    @forelse ($hotel_name as $data)
                        <option value="{{ $data->id }}" >{{ $data->hotel_name }}</option>
                    @empty
                        <option selected="true" disabled="disabled" value="0">Please Insert Hotel Information in Hotel Add</option>
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
                <input type="text"  wire:model='venue' class="form-control bg-light @error('venue') is-invalid @enderror" name="venue" placeholder="Venue " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                @error('venue')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                    </div>
                @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                <label>Level</label>
                <input type="text"  wire:model='level' class="form-control bg-light @error('venue') is-invalid @enderror" name="level" placeholder="Level " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                @error('level')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                    </div>
                @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Size (sq.ft.)</label>
                    <input type="text"  wire:model='size' class="form-control bg-light @error('size') is-invalid @enderror" name="size" placeholder="Size of Venue">
                    @error('size')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
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
                    <input type="text"  wire:model='banquet' class="form-control bg-light @error('banquet') is-invalid @enderror" name="banquet" placeholder="Banquet">
                    @error('banquet')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Classroom</label>
                    <input type="text"  wire:model='classroom' class="form-control bg-light @error('classroom') is-invalid @enderror" name="classroom" placeholder="Classroom">
                    @error('classroom')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label>Theater</label>
                    <input type="text" wire:model='theater' class="form-control bg-light @error('theater') is-invalid @enderror" name="theater" placeholder="Theater">
                    @error('theater')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Cocktail</label>
                    <input type="text"  wire:model='cocktail' class="form-control bg-light @error('cocktail') is-invalid @enderror" name="cocktail" placeholder="Cocktail">
                    @error('cocktail')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Cabaret/Workshop</label>
                        <input type="text"  wire:model='cabaret' class="form-control bg-light @error('cabaret') is-invalid @enderror" name="cabaret" placeholder="Cabaret/Workshop">
                        @error('cabaret')
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Booth Capacity</label>
                            <input type="text"  wire:model='booth_capacity'class="form-control bg-light @error('booth_capacity') is-invalid @enderror" name="booth_capacity" placeholder="Booth Capacity">
                            @error('booth_capacity')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Daily Rate</label>
                                <input type="text"  wire:model='daily_rate' class="form-control bg-light @error('daily_rate') is-invalid @enderror" name="Daily Rate" placeholder="Daily Rates">
                                @error('daily_rate')
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                            </div>


            </div>


            <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                    <label  class="required">Thumbnails image</label>
                    <div class="custom-file">
                        <input type="file" wire:model='image' class="custom-file-input" required id="image" onchange="return translateUpload('image');" name="thumbnail">
                        <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                    </div>
                    <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB.</small>
                    @error('thumbnail')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                </div>
            </div> --}}
            {{-- <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    @if ($image)
                        <p>Photo Preview:</p>
                        <img src="{{ $image->temporaryUrl() }}" style="width:100%;height:30vh;">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label  class="required">Upload Event Space Images</label>
                        <div class="custom-file">
                            <input wire:model="photos.0" type="file" class="custom-file-input" id="photos" onchange="return translateUpload1('photos');" name="photos" multiple>
                            <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                        </div>
                        <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                        @error('photos')
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    @if($photos)
                    <p>Photo Preview:</p>
                        @foreach ( $photos as $photo )
                            @foreach($photo as $data)
                                @if ($data)
                                <img src="{{ $data->temporaryUrl() }}" style="width:100%;height:30vh;">
                                @endif
                            @endforeach
                        @endforeach
                    @endif
                </div>
            </div>
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
    @else --}}
    <form wire:submit.prevent="addEventOnly" >
        @csrf
        <div>
            <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                <label>Event Space Name</label>
                <input type="text"  wire:model='venue' class="form-control bg-light @error('venue') is-invalid @enderror" name="venue" placeholder="Event Space Name " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                @error('venue')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                    </div>
                @enderror
                </div>
            </div>
{{--
            <div class="col-md-6">
                <div class="form-group">
                <label>Radius from KLCC (by Car)</label>
                <input type="text" wire:model='car_radius' class="form-control bg-light @error('car_radius') is-invalid @enderror" name="car_radius" placeholder="Radius from KLCC (by Car)">
                @error('car_radius')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                    </div>
                @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Radius from KLCC (Walking Distance)</label>
                <input type="text" wire:model='walking_radius' class="form-control bg-light @error('walking_radius') is-invalid @enderror" name="walking_radius" placeholder="Radius from KLCC (Walking Distance)">
                @error('walking_radius')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                    </div>
                @enderror
                </div>
            </div> --}}

            {{-- <div class="col-md-12">

                <body onload="initialize()">
                    <div class="container_12" id="header">
                        <div class="clear"></div>
                        <div class="grid_4">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-6">
                                <label>Latitude:</label>
                                <input type="text" class="form-control bg-light" name="lat" id="lat" value="0" disabled />
                                </div>
                                <div class="col-md-6">
                                <label>Longitude:</label>
                                <input type="text" class="form-control bg-light" name="lng" id="lng" value="0" disabled />
                                </div>
                            </div>
                        </div>
                        <br>
                        <div style="clear:both;"></div>
                        <br />
                        </div>
                        <div class="grid_8">
                        <div id="latlongmap" wire:ignore style="width:100%; height:480px;">
                        </div>
                        </div>
                    </div>
            </div> --}}
            <br>

            <div class="col-md-6">
                <div class="form-group">
                <label>Level</label>
                <input type="text"  wire:model='level' class="form-control bg-light @error('venue') is-invalid @enderror" name="level" placeholder="Level " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                @error('level')
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                    </div>
                @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Size (sq.ft.)</label>
                    <input type="text"  wire:model='size' class="form-control bg-light @error('size') is-invalid @enderror" name="size" placeholder="Size of Venue">
                    @error('size')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                </div>
            </div>

            <hr class="">
            <div class="col-md-12">
                <div class="form-group">

                <label>Venue</label>
                {{-- <label style="color:red;">If venue has hotel, Please insert hotel name.</label> --}}
                <select name="hotel_id" id="" wire:model='hotel_id' class="form-control bg-light @error('hotel_id') is-invalid @enderror"">
                    <option disabled="disabled" hidden value="0">Choose Venue</option>
                    @forelse ($hotel_name as $data)
                        <option value="{{ $data->id }}" >{{ $data->hotel_name }}</option>
                    @empty
                        <option selected="true" disabled="disabled" value="0">Please Insert Venue Information in Venue Add</option>
                    @endforelse


                </select>
                @error('hotel_name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <hr class="">
            <label>Layout</label>

            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label>Banquet</label>
                    <input type="text"  wire:model='banquet' class="form-control bg-light @error('banquet') is-invalid @enderror" name="banquet" placeholder="Banquet">
                    @error('banquet')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Classroom</label>
                    <input type="text"  wire:model='classroom' class="form-control bg-light @error('classroom') is-invalid @enderror" name="classroom" placeholder="Classroom">
                    @error('classroom')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label>Theater</label>
                    <input type="text" wire:model='theater' class="form-control bg-light @error('theater') is-invalid @enderror" name="theater" placeholder="Theater">
                    @error('theater')
                    <<div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label>Cocktail</label>
                    <input type="text"  wire:model='cocktail' class="form-control bg-light @error('cocktail') is-invalid @enderror" name="cocktail" placeholder="Cocktail">
                    @error('cocktail')
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Cabaret/Workshop</label>
                        <input type="text"  wire:model='cabaret' class="form-control bg-light @error('cabaret') is-invalid @enderror" name="cabaret" placeholder="Cabaret/Workshop">
                        @error('cabaret')
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Booth Capacity</label>
                            <input type="text"  wire:model='booth_capacity'class="form-control bg-light @error('booth_capacity') is-invalid @enderror" name="booth_capacity" placeholder="Booth Capacity">
                            @error('booth_capacity')
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Daily Rate</label>
                                <input type="text"  wire:model='daily_rate' class="form-control bg-light @error('daily_rate') is-invalid @enderror" name="Daily Rate" placeholder="Cocktail">
                                @error('daily_rate')
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
                        <label  class="required">Upload Event Space Images</label>
                        <div class="custom-file">
                            <input wire:model="photos.0" type="file" class="custom-file-input" onchange="return translateUpload('photos1');" id="photos1" name="photos">
                            <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                        </div>
                        <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                        @error('photos')
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label  class="">Images Caption</label>
                        <input type="text"  wire:model='caption.0' class="form-control bg-light @error('caption') is-invalid @enderror" placeholder="Image Caption">
                        @error('caption')
                        <div class="alert alert-danger">
                            <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                @if($show)
                <div class="col-md-1" style="text-align: center;">
                    <label  class="">Action</label><br>
                    <button  id="myDiv" class="btn btn-primary"  wire:click="$set('show', true)" wire:click.prevent="add({{$i}})">Add</button>
                </div>
                @endif

            </div>
            @foreach($inputs as $key => $value)
            <div class="add-input">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label  class="required">Upload Event Space Images</label>
                            <div class="custom-file">
                                <input wire:model="photos.{{ $value }}" type="file" class="custom-file-input" onchange="return translateUpload('photos1');" id="photos1" name="photos">
                                <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                            </div>
                            <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                            @error('photos.'.$value)
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label  class="">Images Caption</label>
                            <input type="text"  wire:model='caption.{{ $value }}' class="form-control bg-light @error('caption') is-invalid @enderror" placeholder="Image Caption">
                            @error('caption.'.$value)
                            <div class="alert alert-danger">
                                <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    @if($show)
                    <div class="col-md-1" style="text-align: center;">
                        <label  class="">Action</label><br>
                        <button  id="myDiv" class="btn btn-danger"  wire:click.prevent="remove({{$key}})">Delete</button>
                    </div>
                    @endif


                </div>

                {{-- @if($show)
                    <div class="col-md-1" style="text-align: center;">
                        <label  class="">Action</label><br>
                        <button  id="myDiv" class="btn btn-primary"  wire:click="$set('show', true)" wire:click.prevent="add({{$i}})">Add</button>
                    </div>
                @endif --}}
            </div>
            @endforeach


            {{-- <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    @if($photos)
                    <p>Photo Preview:</p>
                        @foreach ( $photos as $photo )
                            @foreach($photo as $data)
                                @if ($data)
                                <img src="{{ $data->temporaryUrl() }}" style="width:100%;height:30vh;">
                                @endif
                            @endforeach
                        @endforeach
                    @endif
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
    {{-- @endif --}}
    <script type="text/javascript">

        $('#photos1').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })

        function translateUpload(x){
          console.log("translate upload fungsi");
          fileValidation(x);
          document.getElementById("photos1").setCustomValidity('');
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

      <script type="text/javascript">

          $('#photos').on('change',function(){
              //get the file name
              var fileName = $(this).val();
              //replace the "Choose a file" label
              $(this).next('.custom-file-label').html(fileName);
          })

          function translateUpload1(x){
            console.log("translate upload fungsi");
            fileValidation(x);
            document.getElementById("photos").setCustomValidity('');
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

      <script type="text/javascript">

          $('#thumbnail').on('change',function(){
              //get the file name
              var fileName = $(this).val();
              //replace the "Choose a file" label
              $(this).next('.custom-file-label').html(fileName);
          })

          function translateUpload2(x){
            console.log("translate upload fungsi");
            fileValidation(x);
            document.getElementById("thumbnail").setCustomValidity('');
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
</div>
