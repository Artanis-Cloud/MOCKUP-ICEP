<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
    {{ session('message') }}
    </div>
    @endif

    <div class="row">
        <div class="col-md-12" style="text-align:center;">
            <label><b>Room Rates (per room per night)</b></label>
        </div>
    </div>

    <form>
    <div class=" add-input">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Room Type</label>
                <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model="room_type.0" name="single_rate" placeholder="Room Type">
                @error('single_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Room Size</label>
                    <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model="size.0" name="single_rate" placeholder="Size">
                    @error('single_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Type Of Bed</label>
                        <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model="type_of_bed.0" name="single_rate" placeholder="">
                        @error('single_rate')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>View</label>
                            <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model="view.0" name="single_rate" placeholder="">
                            @error('single_rate')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Single Rate (1 Breakfast)</label>
                                <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model="single_rate.0" name="single_rate" placeholder="Single Rate (1 Breakfast)">
                                @error('single_rate')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Double Rate (2 Breakfast)</label>
                                    <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model="double_rate.0" name="single_rate" placeholder="Double Rate (2 Breakfast)">
                                    @error('single_rate')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Corporate Rate</label>
                                        <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model="corporate_rate.0" name="single_rate" placeholder="Corporate Rate">
                                        @error('single_rate')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    </div>

      <div class="col-md-6">
        <div class="form-group">
            <label>Benefits</label>
            <input type="text"  class="form-control bg-light @error('double_rate') is-invalid @enderror" wire:model="benefits.0" name="double_rate" placeholder="Benefits">
            @error('double_rate')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        </div>


    <div  class="col-md-6">
    <button  id="myDiv" class="text-white btn btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
    </div>
    </div>
    </div>

    @foreach($inputs as $key => $value)
    <div class=" add-input">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Room Type</label>
                    <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" name="single_rate" placeholder="Room Type">
                    @error('single_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Room Size</label>
                        <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" name="single_rate" placeholder="Size">
                        @error('single_rate')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Type Of Bed</label>
                            <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" name="single_rate" placeholder="">
                            @error('single_rate')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>View</label>
                                <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" name="single_rate" placeholder="">
                                @error('single_rate')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Single Rate (1 Breakfast)</label>
                                    <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" name="single_rate" placeholder="Single Rate (1 Breakfast)">
                                    @error('single_rate')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Double Rate (2 Breakfast)</label>
                                        <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" name="single_rate" placeholder="Double Rate (2 Breakfast)">
                                        @error('single_rate')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Corporate Rate</label>
                                            <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" name="single_rate" placeholder="Corporate Rate">
                                            @error('single_rate')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>

          <div class="col-md-6">
            <div class="form-group">
                <label>Benefits</label>
                <input type="text"  class="form-control bg-light @error('double_rate') is-invalid @enderror" name="double_rate" placeholder="Benefits">
                @error('double_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>



                    <div class="col-md-2">
                        <button class="text-white btn btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
                        </div>
    <div class="col-md-2">
    <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
    </div>
    </div>
    </div>
    @endforeach
    <div class="row">
    <div class="col-md-12">
    <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Save</button>
    </div>
    </div>
    </form>
    </div>

    <script>
        function doSomething () {
          // Remove onclick
          var element = document.getElementById("myDiv");
          element.onclick = "";

          // Do your processing here
          alert("Something is done!");

          // Re-enable after processing if you want
          // element.onclick = doSomething;
        }
        </script>
