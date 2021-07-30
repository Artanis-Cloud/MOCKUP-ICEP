@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>
    @media print {
        p.bodyText {font-family:georgia, times, serif;}
        .footer {
            display:none;
        }
        .btn {
            display:none;
        }
        }
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

/* selected link */
a:active {
  color: white !important;

}

.container-fluid{
    width: 100%;
    height: 100^%;

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

/* The Modal (background) */


/* Modal Content */


/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
 <div class="container-fluid">
    {{-- <div class="row" style="justify-content: center;">

      <div class="col-md-8" style="padding: 3%;">
      <div class="rounded-lg card">
            <div class="card-body">
                <div class="card-title"> Hotel Comparison Table</div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">
                        <thead>
                            <tr class="text-center">
                                <th><p class="mb-0">Hotel Name</p></th>
                                <th><p class="mb-0">Radius from KLCC (car)</p></th>
                                <th><p class="mb-0">Radius from KLCC (walk)</p></th>
                                <th><p class="mb-0">Room Type</p></th>
                                <th><p class="mb-0">Room Size</p></th>
                                <th><p class="mb-0">Type of Bed</p></th>
                                <th><p class="mb-0">View</p></th>
                                <th><p class="mb-0">Single Rate</p></th>
                                <th><p class="mb-0">Double Rate</p></th>
                                <th><p class="mb-0">Corporate Rate</p></th>

                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($room as $data)
                            <tr class="text-center">
                                <td><p class="mb-0 font-weight-normal">{{ $data->hotels->hotel_name ? $data->hotels->hotel_name : "-" }}</p></td>
                                <td><p class="mb-0 font-weight-normal">{{ $data->hotels->car_radius ? $data->hotels->car_radius : "-" }}</p></td>
                                <td><p class="mb-0 font-weight-normal">{{ $data->hotels->walking_radius ? $data->hotels->walking_radius : "-" }}</p></td>
                                <td><p class="mb-0 font-weight-normal">{{ $data->room_type ? $data->room_type : "-" }}</p></td>
                                <td><p class="mb-0 font-weight-normal">{{ $data->size ? $data->size : "-" }} sq.ft</p></td>
                                <td><p class="mb-0 font-weight-normal">{{ $data->type_of_bed ? $data->type_of_bed : "-" }}</p></td>
                                <td><p class="mb-0 font-weight-normal">{{ $data->view ? $data->view : "-" }}</p></td>
                                <td><p class="mb-0 font-weight-normal">RM {{ $data->single_rate ? $data->single_rate : "-" }}</p></td>
                                <td><p class="mb-0 font-weight-normal">RM {{ $data->double_rate ? $data->double_rate : "-" }}</p></td>
                                <td><p class="mb-0 font-weight-normal">RM {{ $data->corporate_rate ? $data->corporate_rate : "-" }}</p></td>
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
    </div> --}}
        <div class="container p-4">

            <div class="row">
                <div class="text-center col">
                    <h2> Accommodation Comparison</h2>
                </div>
            </div>
            <br><br>

            <form action="{{ route('compareHotel') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-11"></div>
                    <div class="col-md-1">
                     <button  class="btn btn-primary" onclick="window.print()">Print</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="first_hotel"><b>First Venue</b></label>
                        <select id="product-col-1" class="custom-select " name="first_hotel">
                            <option value="" selected hidden disabled>Please Choose Venue</option>
                            @forelse($hotel as $data)
                                @if ($data->hotel_name != 'Kuala Lumpur Convention Center')
                                    @if ($hotel_1)
                                        <option value="{{ $data->id }}"
                                            {{ $hotel_1->id == $data->id ? 'selected="selected"' : '' }}>
                                            {{ $data->hotel_name }}</option>
                                    @else
                                        <option value="{{ $data->id }}">
                                            {{ $data->hotel_name }}</option>
                                    @endif
                                @endif
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <div class="col">
                        <label for="second_hotel"><b>Second Venue</b></label>
                        <select id="product-col-2" class="custom-select " name="second_hotel">
                            <option value="" selected hidden disabled>Please Choose Venue</option>
                            @forelse($hotel as $data)
                                @if ($data->hotel_name != 'Kuala Lumpur Convention Center')
                                    @if ($hotel_2)
                                        <option value="{{ $data->id }}"
                                            {{ $hotel_2->id == $data->id ? 'selected="selected"' : '' }}>
                                            {{ $data->hotel_name }}</option>
                                    @else
                                        <option value="{{ $data->id }}">
                                            {{ $data->hotel_name }}</option>
                                    @endif
                                @endif
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <div class="col">
                        <label for="third_hotel"><b>Third Venue</b></label>
                        <select id="product-col-3" class="custom-select " name="third_hotel">
                            <option value="" selected hidden disabled>Please Choose Venue</option>
                            @forelse($hotel as $data)
                                @if ($data->hotel_name != 'Kuala Lumpur Convention Center')
                                    @if ($hotel_3)
                                        <option value="{{ $data->id }}"
                                            {{ $hotel_3->id == $data->id ? 'selected="selected"' : '' }}>
                                            {{ $data->hotel_name }}</option>
                                    @else
                                        <option value="{{ $data->id }}">
                                            {{ $data->hotel_name }}</option>
                                    @endif
                                @endif
                            @empty
                            @endforelse
                        </select>
                    </div>
                </div>
                <br>

                <div class="rounded-lg card">
                    <div class="card-body">
                        <div class="card-title">Filtering</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="f-name-1">Size (s.q ft)</label>
                                    <select name="size" id="" class="form-control bg-light">
                                        <option value="" selected disable hidden>Please choose size</option>
                                        <option value="500"
                                            {{ $sizeselected == '500' ? 'selected="selected"' : '' }}class="">0-500
                                        </option>
                                        <option value="1000"
                                            {{ $sizeselected == '1000' ? 'selected="selected"' : '' }}class="">501-1000
                                        </option>
                                        <option value="1500"
                                            {{ $sizeselected == '1500' ? 'selected="selected"' : '' }}class="">1001-1500
                                        </option>
                                        <option value="2000"
                                            {{ $sizeselected == '2000' ? 'selected="selected"' : '' }}class="">1501-2000
                                        </option>
                                        <option value="2001"
                                            {{ $sizeselected == '2001' ? 'selected="selected"' : '' }}class="">2001 and
                                            above</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Create 3 row -->
                        <div class="row">
                            <!-- 1st row -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f-name-1">Types of bed</label>
                                    <div class="slidecontainer">
                                        <select name="type_of_bed" id="" class="form-control bg-light">
                                            {{-- <option selected disabled hidden value="">Choose Type of Bed</option> --}}
                                            @forelse($bed_type as $data)
                                                <option value="{{ $data->type_of_bed }}"
                                                    {{ $typebed == $data->type_of_bed ? 'selected="selected"' : '' }}
                                                    class="">
                                                    {{ $data->type_of_bed }}</option>
                                            @empty
                                                No Data
                                            @endforelse

                                        </select>
                                        {{-- <input type="text" name="type_of_bed" value="" class="form-control bg-light"> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f-name-1">Single Rate</label>
                                    <select name="single" id="" class="form-control bg-light">
                                        <option value="" selected disable hidden>Please choose single rate</option>
                                        <option value="500"
                                            {{ $singlerateselected == '500' ? 'selected="selected"' : '' }} class="">
                                            0-500</option>
                                        <option value="1000"
                                            {{ $singlerateselected == '1000' ? 'selected="selected"' : '' }} class="">
                                            501-1000</option>
                                        <option value="1500"
                                            {{ $singlerateselected == '1500' ? 'selected="selected"' : '' }} class="">
                                            1001-1500</option>
                                        <option value="2000"
                                            {{ $singlerateselected == '2000' ? 'selected="selected"' : '' }} class="">
                                            1501-2000</option>
                                        <option value="2001"
                                            {{ $singlerateselected == '2001' ? 'selected="selected"' : '' }} class="">
                                            2001 and above</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f-name-1">Double Rate</label>
                                    <select name="double" id="" class="form-control bg-light">
                                        <option value="" selected disable hidden>Please choose double rate</option>
                                        <option value="500" {{ $doubleselected == '500' ? 'selected="selected"' : '' }}
                                            class="">0-500</option>
                                        <option value="1000" {{ $doubleselected == '1000' ? 'selected="selected"' : '' }}
                                            class="">501-1000</option>
                                        <option value="1500" {{ $doubleselected == '1500' ? 'selected="selected"' : '' }}
                                            class="">1001-1500</option>
                                        <option value="2000" {{ $doubleselected == '2000' ? 'selected="selected"' : '' }}
                                            class="">1501-2000</option>
                                        <option value="2001" {{ $doubleselected == '2001' ? 'selected="selected"' : '' }}
                                            class="">2001 and above</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f-name-1">Corporate Rate</label>
                                    <select name="corporate" id="" class="form-control bg-light">
                                        <option value="" selected disable hidden>Please choose corporate rate</option>
                                        <option value="500"
                                            {{ $corporateselected == '500' ? 'selected="selected"' : '' }} class="">0-500
                                        </option>
                                        <option value="1000"
                                            {{ $corporateselected == '1000' ? 'selected="selected"' : '' }} class="">
                                            501-1000</option>
                                        <option value="1500"
                                            {{ $corporateselected == '1500' ? 'selected="selected"' : '' }} class="">
                                            1001-1500</option>
                                        <option value="2000"
                                            {{ $corporateselected == '2000' ? 'selected="selected"' : '' }} class="">
                                            1501-2000</option>
                                        <option value="2001"
                                            {{ $corporateselected == '2001' ? 'selected="selected"' : '' }} class="">2001
                                            and above</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
                @if ($hotel_1)
                    <div id="product1" class="text-center product-col col compare-col-1" style="padding-top: 2%">
                        <div class="card">
                            {{-- <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap"> --}}
                            <img class="card-img-top"
                                src="{{ asset($image_path = str_replace('public', 'storage', $hotel_1->thumbnail)) }}"
                                style="width: 100%; height: 200px;" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title">{{ $hotel_1->hotel_name ? $hotel_1->hotel_name : '-' }}</h5>
                                {{-- <p class="card-text">Address</p> --}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Radius from KLCC
                                    (walking)<br>{{ $hotel_1->walking_radius ? $hotel_1->walking_radius : '-' }} km</li>
                                <li class="list-group-item">Radius from KLCC
                                    (car)<br>{{ $hotel_1->car_radius ? $hotel_1->car_radius : '-' }} km</li>

                                <li class="list-group-item"><b>Room Available</b><br>
                                    @if ($room_1)
                                        @forelse($room_1 as $data)
                                            {{ $data->room_type ? $data->room_type : '-' }} <br>
                                        @empty
                                            No Room Available
                                        @endforelse
                                    @endif
                                </li>


                            </ul>

                        </div>
                    </div>
                @endif
                @if ($hotel_2)
                    <div id="product1" class="text-center product-col col compare-col-1" style="padding-top: 2%">
                        <div class="card">
                            {{-- <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap"> --}}
                            <img class="card-img-top"
                                src="{{ asset($image_path = str_replace('public', 'storage', $hotel_2->thumbnail)) }}"
                                style="width: 100%; height: 200px;" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title">{{ $hotel_2->hotel_name ? $hotel_2->hotel_name : '-' }}</h5>
                                {{-- <p class="card-text">Address</p> --}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Radius from KLCC
                                    (walking)<br>{{ $hotel_2->walking_radius ? $hotel_2->walking_radius : '-' }} km</li>
                                <li class="list-group-item">Radius from KLCC
                                    (car)<br>{{ $hotel_2->car_radius ? $hotel_2->car_radius : '-' }} km</li>
                                <li class="list-group-item"><b>Room Available</b><br>
                                    @if ($room_2)
                                        @forelse($room_2 as $data)
                                            {{ $data->room_type ? $data->room_type : '-' }} <br>
                                        @empty
                                            No Room Available
                                        @endforelse
                                    @endif
                                </li>

                            </ul>
                            </ul>

                        </div>
                    </div>
                @endif
                @if ($hotel_3)
                    <div id="product1" class="text-center product-col col compare-col-1" style="padding-top: 2%">
                        <div class="card">
                            {{-- <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap"> --}}
                            <img class="card-img-top"
                                src="{{ asset($image_path = str_replace('public', 'storage', $hotel_3->thumbnail)) }}"
                                style="width: 100%; height: 200px;" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title">{{ $hotel_3->hotel_name ? $hotel_3->hotel_name : '-' }}</h5>
                                {{-- <p class="card-text">Address</p> --}}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Radius from KLCC
                                    (walking)<br>{{ $hotel_3->walking_radius ? $hotel_3->walking_radius : '-' }} km</li>
                                <li class="list-group-item">Radius from KLCC
                                    (car)<br>{{ $hotel_3->car_radius ? $hotel_3->car_radius : '-' }} km</li>
                                <li class="list-group-item"><b>Room Available</b><br>
                                    @if ($room_3)
                                        @forelse($room_3 as $data)
                                            {{ $data->room_type ? $data->room_type : '-' }} <br>
                                        @empty
                                            No Room Available
                                        @endforelse
                                    @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>

    <script>
        $(".product-selector").each(function() {
            $(this).data('__old', this.value);
        }).change(function() {
            var $this = $(this),
                value = $this.val(),
                oldValue = $this.data('__old'),
                col = $this.attr('id').replace('product-col-', ''),
                dupe, dupeCol;

            dupe = $(".product-selector").not(this).filter(function() {
                return this.value == value;
            });
            if (dupe.length) {
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
