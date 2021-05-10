@extends('layouts.app')

@section('content')
<style>
    a{
      font-size: 100% !important;
    }
    /* unvisited link */
    a:link {
      color: white !important;
    }

    /* visited link */
    a:visited {
      color: white !important;
    }

    /* mouse over link */
    a:hover {
      color: #E89A3D !important;
    }

    /* selected link */
    a:active {
      color: white !important;

    }

    .container-fluid{
        width: 100%;
        height: auto;

    }

    /* search */
    input[type=search] {
      -webkit-appearance: none !important;
      background-clip: padding-box;
      background-color: white;
      vertical-align: middle;
      border-radius: 0.25rem;
      border: 1px solid #e0e0e5;
      font-size: 1rem;
      width: 100%;
      line-height: 2;
      padding: 0.375rem 1.25rem;
      transition: border-color 0.2s;
    }

    input[type=search]:focus {
      transition: all 0.5s;
      box-shadow: 0 0 40px #f9d442b9;
      border-color: #f9d342;
      outline: none;
    }

    form.search-form {
      display: flex;
      justify-content: center;
    }

    label {
      flex-grow: 1;
      flex-shrink: 0;
      flex-basis: auto;
      align-self: center;
      margin-bottom: 0;
    }

    input.search-field {
      margin-bottom: 0;
      flex-grow: 1;
      flex-shrink: 0;
      flex-basis: auto;
      align-self: center;
      height: 51px;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    input.search-submit {
      height: 51px;
      margin: 0;
      padding: 1rem 1.3rem;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
      font-family: "Font Awesome 5 Free";
      font-size: 1rem;
    }

    .screen-reader-text {
      clip: rect(1px, 1px, 1px, 1px);
      position: absolute !important;
      height: 1px;
      width: 1px;
      overflow: hidden;
    }

    .button {
      display: inline-block;
      font-weight: 600;
      font-size: 0.8rem;
      line-height: 1.15;
      letter-spacing: 0.1rem;
      text-transform: uppercase;
      background: #f9d342;
      color: #292826;
      border: 1px solid transparent;
      vertical-align: middle;
      text-shadow: none;
      transition: all 0.2s;
    }

    .button:hover,
    .button:active,
    .button:focus {
      cursor: pointer;
      background: #E89A3D;
      color: #292826;
      outline: 0;
    }

    /* slider */
    .slidecontainer {
      width: 100%;
    }

    .slider {
      -webkit-appearance: none;
      width: 100%;
      height: 15px;
      border-radius: 5px;
      background: #d3d3d3;
      outline: none;
      opacity: 0.7;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    .slider:hover {
      opacity: 1;
    }

    .slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      background: #4CAF50;
      cursor: pointer;
    }

    .slider::-moz-range-thumb {
      width: 25px;
      height: 25px;
      border-radius: 50%;
      background: #4CAF50;
      cursor: pointer;
    }
    </style>
 <div class="container-fluid">
    <div class="row" style="justify-content: center;">
      <div class="col-md-8" style="padding: 5%;">
      <div class="rounded-lg card">
                            <div class="card-body">
                                <div class="card-title">Event Space Comparison Table</div>
                                <!-- Table -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="dataTable2" style="width: 100%;">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"></p></th>
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"><i class="fas fa-car" style="font-size: 25px;"></i></p></th>
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"><i class="fas fa-walking" style="font-size: 25px;"></i></p></th>
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"><i class="fas fa-person-booth" style="font-size: 25px;"></i></p></th>
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"><i class="fas fa-building" style="font-size: 25px;"></i></p></th>
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"><i class="fas fa-bed" style="font-size: 25px;"></i></p></th>
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"><i class="fas fa-street-view" style="font-size: 25px;"></i></p></th>
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"><i class="fas fa-dollar-sign" style="font-size: 25px;"></i></p></th>
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"><i class="fas fa-dollar-sign" style="font-size: 25px;"></i></p></th>
                                                <th style="border: 0px none #ffffff;"><p class="mb-0"><i class="fas fa-dollar-sign" style="font-size: 25px;"></i></p></th>
                                            </tr>
                                            <tr class="text-center">
                                                <th><p class="mb-0">Hotel Name</p></th>
                                                <th><p class="mb-0">Radius from KLCC (car)</p></th>
                                                <th><p class="mb-0">Radius from KLCC (walk)</p></th>
                                                <th><p class="mb-0">Venue</p></th>
                                                <th><p class="mb-0">Level</p></th>
                                                <th><p class="mb-0">Size</p></th>
                                                <th><p class="mb-0">Banquet</p></th>
                                                <th><p class="mb-0">Classroom</p></th>
                                                <th><p class="mb-0">Theater</p></th>
                                                <th><p class="mb-0">Cocktail</p></th>
                                                <th><p class="mb-0">Cabaret</p></th>
                                                <th><p class="mb-0">Booth Capacity</p></th>
                                                <th><p class="mb-0">Daily Rate</p></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Table data -->
                                            @forelse ($eventspace as $data)
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-normal">{{ $data->hotels->hotel_name ? $data->hotels->hotel_name : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">{{ $data->hotels->car_radius ? $data->hotels->car_radius : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">{{ $data->hotels->walking_radius ? $data->hotels->walking_radius : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">{{ $data->venue ? $data->venue : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">{{ $data->level ? $data->level : "-" }} sq.ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">{{ $data->size ? $data->size : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">{{ $data->banquet ? $data->banquet : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">RM {{ $data->classroom ? $data->classroom : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">RM {{ $data->theater ? $data->theater : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">RM {{ $data->cocktail ? $data->cocktail : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">RM {{ $data->cabaret ? $data->cabaret : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">RM {{ $data->booth_capacity ? $data->booth_capacity : "-" }}</p></td>
                                                <td><p class="mb-0 font-weight-normal">RM {{ $data->daily_rate ? $data->daily_rate : "-" }}</p></td>
                                            </tr>
                                            @empty
                                                No Data
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
      </div>
    </div>
   <div class="container p-4">

     <div class="row">
       <div class="text-center col">
            <h2> Event Space Comparison</h2>
       </div>
    </div>
    <br><br>

    <form action="{{ route('compareHotel') }}" method="POST">
        @csrf
    <div class="row">
       <div class="col">
           <label for="first_hotel"><b>First Hotel</b></label>
            <select id="product-col-1" class="custom-select " name="first_hotel">
                <option value="" selected hidden disabled>Please Choose Hotel</option>
                @forelse($hotel as $data)
                <option value="{{ $data->id }}">{{ $data->hotel_name }}</option>
                @empty
                @endforelse
   			</select>
       </div>
       <div class="col">
        <label for="second_hotel"><b>Second Hotel</b></label>
            <select id="product-col-2" class="custom-select " name="second_hotel">
                <option value="" selected hidden disabled>Please Choose Hotel</option>
                @forelse($hotel as $data)
                <option value="{{ $data->id }}">{{ $data->hotel_name }}</option>
                @empty
                @endforelse
            </select>
       </div>
       <div class="col">
        <label for="third_hotel"><b>Event Space</b></label>
            <select id="product-col-3" class="custom-select " name="third_hotel">
                <option value="" selected hidden disabled>Please Choose Event Space</option>
                @forelse($hotel as $data)
                <option value="{{ $data->id }}">{{ $data->hotel_name }}</option>
                @empty
                @endforelse
            </select>
       </div>
     </div>
     <br>
     <div class="row">

        <div class="text-center col">
            <button class="btn btn-primary" type="submit" style="width:100%;">Compare</button>
        </div>
     </div>
    </form>
     <div class="row">
           <div id="product1" class="text-center product-col col compare-col-1" style="padding-top: 2%">
             <div class="card">
              <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hotel Kuala Lumpur</h5>
                <p class="card-text">Address</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
              </ul>

            </div>
           </div>
           <div id="product2" class="text-center product-col col compare-col-2" style="padding-top: 2%">
             <div class="card">
              <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hotel Kuala Lumpur</h5>
                <p class="card-text">Address</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
              </ul>

            </div>
           </div>
           <div id="product3" class="text-center product-col col compare-col-3" style="padding-top: 2%">
             <div class="card">
              <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hotel Kuala Lumpur</h5>
                <p class="card-text">Address</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
                <li class="list-group-item">Comparison</li>
              </ul>

            </div>
           </div>
     </div>
   </div>

 </div>

<script>
$(".product-selector").each(function(){
  $(this).data('__old', this.value);
}).change(function() {
  var $this = $(this), value = $this.val(), oldValue = $this.data('__old'), col = $this.attr('id').replace('product-col-', ''), dupe, dupeCol;

  dupe = $(".product-selector").not(this).filter(function(){
      return this.value == value;
  });
  if(dupe.length){
      dupe.val(oldValue).data('__old', oldValue);
      dupeCol = dupe.attr('id').replace('product-col-', '');
      $(".product-col").removeClass('compare-col-' + dupeCol);
      $("#" + oldValue).addClass('compare-col-' + dupeCol);
  }

  $(".product-col").removeClass('compare-col-' + col);
  $("#" + value).addClass('compare-col-' + col);

  $this.data('__old', value)
});
</script>


@endsection
