
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
                        <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Edit Hotel Room</div>
                        <div class="card-body">

                            <form wire:submit.prevent="update()">
                                @csrf
                                <div class=" add-input">
                                    <input type="hidden"  class="form-control bg-light" wire:model='id_room'>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Room Type</label>
                                            <input type="text"  class="form-control bg-light" wire:model='room_type'  placeholder="Room Type">
                                            @error('room_type')
                                                <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Room Size</label>
                                            <input type="text"  class="form-control bg-light @error('size') is-invalid @enderror" wire:model='size'  placeholder="Size">
                                            @error('size')
                                                <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group" >
                                            <label>Type Of Bed</label>
                                            <input type="text"  class="form-control bg-light @error('type_of_bed') is-invalid @enderror"  wire:model='type_of_bed' placeholder="">
                                            @error('type_of_bed')
                                                <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>View</label>
                                            <input type="text"  class="form-control bg-light @error('view') is-invalid @enderror" wire:model='view'  placeholder="">
                                            @error('view')
                                                <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Single Rate (1 Breakfast)</label>
                                            <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model='single_rate'   placeholder="Single Rate (1 Breakfast)">
                                            @error('single_rate')
                                                <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Double Rate (2 Breakfast)</label>
                                            <input type="text"  class="form-control bg-light @error('double_rate') is-invalid @enderror" wire:model='double_rate'   placeholder="Double Rate (2 Breakfast)">
                                            @error('double_rate')
                                                <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Corporate Rate</label>
                                            <input type="text"  class="form-control bg-light @error('corporate_rate') is-invalid @enderror" wire:model='corporate_rate'  placeholder="Corporate Rate">
                                            @error('corporate_rate')
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
                                            <label  class="">Upload Photos</label>
                                            <div class="custom-file">
                                                <input wire:model="photos.0" type="file" class="custom-file-input" id="photos.0[]" name="photos">
                                                <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Image</label>
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
                                            <label  class="">Images Caption</label>
                                            <input type="text"  wire:model='caption.0' class="form-control bg-light @error('caption') is-invalid @enderror" placeholder="Image Caption">
                                            @error('caption.0')
                                            <div class="alert alert-danger">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @if($show)
                                    <div class="col-md-1" style="text-align: center;">
                                        <label  class="">Action</label><br>
                                        <button class="btn btn-primary"  wire:click="$set('show', true)" wire:click.prevent="add({{$i}})">Add</button>
                                    </div>
                                    @endif
                                </div>
                                @foreach($inputs as $key => $value)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label  class="required">Upload Photos</label>
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
                                @endforeach

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
