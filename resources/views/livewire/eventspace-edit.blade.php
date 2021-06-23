
<div>

        <div class="p-4 page-body text-dark">
            {{-- <div  style="font-size: 180%;color: rgb(0, 0, 0);" >
                <i class="fa fa-hotel" aria-hidden="true" style="color: rgb(0, 0, 0);"></i>
                Edit Hotel Room
            </div> --}}
            {{-- <hr style="background-color: black !important;"> --}}
            <div style="padding:5px;"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rounded-lg card" style="border-color: #003473 !important;">
                        <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Edit Event Space</div>
                        <div class="card-body">

                            <form wire:submit.prevent="update()">
                                @csrf
                            <div>
                                <div class="row">
                                    <input type="hidden"  class="form-control bg-light" wire:model='id_event'>

                                <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Venue</label>
                                    <input type="text" class="form-control bg-light @error('venue') is-invalid @enderror" wire:model='venue' placeholder="Venue " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    @error('venue')
                                    <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                    </div>
                                </div>
                                <br>

                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label>Level</label>
                                    <input type="text" class="form-control bg-light @error('level') is-invalid @enderror" wire:model='level' placeholder="Level " oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
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
                                        <input type="text" class="form-control bg-light @error('size') is-invalid @enderror" wire:model='size' placeholder="Size of Venue">
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
                                        <input type="text" class="form-control bg-light @error('banquet') is-invalid @enderror" wire:model='banquet' placeholder="Banquet">
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
                                        <input type="text" class="form-control bg-light @error('classroom') is-invalid @enderror" wire:model='classroom' placeholder="Classroom">
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
                                        <input type="text" class="form-control bg-light @error('theater') is-invalid @enderror" wire:model='theater' placeholder="Theater">
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
                                        <input type="text" class="form-control bg-light @error('cocktail') is-invalid @enderror" wire:model='cocktail' placeholder="Cocktail">
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
                                            <input type="text" class="form-control bg-light @error('cabaret') is-invalid @enderror" wire:model='cabaret' placeholder="Cabaret/Workshop">
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
                                                <input type="text" class="form-control bg-light @error('booth_capacity') is-invalid @enderror" wire:model='booth_capacity' placeholder="Booth Capacity">
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
                                                    <input type="text" class="form-control bg-light @error('daily_rate') is-invalid @enderror" wire:model='daily_rate' placeholder="Cocktail">
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
                            <label  class="required">Upload Photos</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" wire:model='photos.0'>
                                <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                            </div>
                            <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                            @error('photo.0')
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
                            <label  class="required">Upload Photos</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" wire:model='photos.{{ $value }}'>
                                <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
                            </div>
                            <small id="saiz_data" class="form-text text-secondary">Upload cannot exceeed 10MB</small>
                            @error('photo.'.$value)
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


                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
          <!-- Small card component -->
        </div>

        <script >
            $(function() {
            // Multiple images preview with JavaScript
            var previewImages = function(input, imgPreviewPlaceholder) {
            if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();
            reader.onload = function(event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
            }
            reader.readAsDataURL(input.files[i]);
            }
            }
            };
            $('#photos').on('change', function() {
            previewImages(this, 'div.images-preview-div');
            });
            });
        </script>

        <script type="text/javascript">

          $('#photos').on('change',function(){
              //get the file name
              var fileName = $(this).val();
              //replace the "Choose a file" label
              $(this).next('.custom-file-label').html(fileName);
          })

          function translateUpload(x){
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



        {{-- maps --}}
        <script type="text/javascript">
            function process()
            {
            var xxhi = parseInt(document.getElementById("lng").value)+5;
            var xxlo = parseInt(document.getElementById("lng").value)-5;
            var yyhi = parseInt(document.getElementById("lat").value)+5;
            var yylo = parseInt(document.getElementById("lat").value)-5;
            var url="http://mynasadata.larc.nasa.gov/las/UI.vm#panelHeaderHidden=false;differences=false;autoContour=false;globalMin=0.018759;globalMax=99.6;xCATID=2B0BBF6A0A4C3C7A7D051B183657F99F;xDSID=cloud_coverage;varid=cldarea_total_daynight_mon-id-9bce6de9df;imageSize=auto;over=xy;compute=Nonetoken;tlo=15-Jan-2013;thi=15-Jan-2013;catid=2B0BBF6A0A4C3C7A7D051B183657F99F;dsid=cloud_coverage;varid=cldarea_total_daynight_mon-id-9bce6de9df;avarcount=0;xlo=" + xxlo + ";xhi=" + xxhi + ";ylo=" + yylo + ";yhi=" + yyhi + ";operation_id=Plot_2D_XY_zoom;view=xy";
            location.href=url;
            return false;
            }
          </script>

        <script type="text/javascript">

            $('#photos').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })

            function translateUpload(x){
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
</div>
