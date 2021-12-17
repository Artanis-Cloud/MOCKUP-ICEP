@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>


    <style>
        a {
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

        .container-fluid {
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

        <div class="container p-4">
            <div class="row">
                {{-- <div class="col-2"></div> --}}
                <div class="col-12">
                    <div class="card">
                      <div class="text-center card-header" style="background-color: #EB831D;"><h4>Tukar Kata Laluan</h4></div>

                      <form method="POST" action="{{ route('tukar-kata-laluan.user') }}">
                      {{ csrf_field() }}

                        <div class="border card-body border-dark">

                            {{-- Flash Message --}}
                            @if ($message = Session::get('success'))
                              <div class="border alert alert-success border-success" style="text-align: center;">{{$message}}</div>
                            @elseif ($message = Session::get('error'))
                              <div class="border alert alert-danger border-danger" style="text-align: center;">{{$message}}</div>
                            @else
                              {{-- Hidden Gap - Just Ignore --}}
                              <div class="alert alert-white" style="text-align: center;"></div>
                              {{-- <div style="padding: 23px;"></div> --}}
                            @endif
                            <div class="row">
                              <div class="col-md-3"></div>
                              <div class="col-md">
                                <label>Kata Laluan Terdahulu</label>
                                <div class="mb-3 input-group">
                                    <input class="form-control @error('old_password') is-invalid @else border-dark @enderror" id="old_password" name="old_password" type="password">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button" id="old_password_button" onclick="visiblePassword('old_password')"><i id="old_password_icon" class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                    </div>
                                    @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-3"></div>
                            </div>

                            <div class="row">
                              <div class="col-md-3"></div>
                              <div class="col-md">
                                <label>Kata Laluan Baru</label>
                                <div class="mb-3 input-group">
                                    <input class="form-control @error('password') is-invalid @else border-dark @enderror" id="password" name="password" type="password">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button" id="password_button" onclick="visiblePassword('password')"><i id="password_icon" class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md">
                                <label>Sahkan Kata Laluan Baru</label>
                                <div class="mb-3 input-group">
                                    <input class="form-control @error('password') is-invalid @else border-dark @enderror" id="password_confirmation" name="password_confirmation" type="password">
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button" id="password_confirmation_button" onclick="visiblePassword('password_confirmation')"><i id="password_confirmation_icon" class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                              </div>
                              <div class="col-md-3"></div>
                            </div>

                            {{-- Submit Button --}}
                            <div class="row">
                              <div class="col-md-3"></div>
                              <div class="col-md-6" style="text-align: center;">
                                <button type="button" class="btn waves-effect waves-light btn-info btn-block" data-toggle="modal" data-target="#confirmation">Tukar Kata laluan</button>
                              </div>
                              <div class="col-md-3"></div>
                            </div>

                            {{-- Hidden Gap - Just Ignore --}}
                            <div class="alert alert-white" style="text-align: center;"></div>
                            {{-- <div style="padding: 25px;"></div> --}}
                        </div>

                        <!-- Modal Confirmation -->
                        <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#f3ce8f  !important">
                                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-exclamation-triangle" style="color:rgb(255, 255, 0)" aria-hidden="true"></i>&nbspPENGESAHAN</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Anda pasti mahu menukar kata laluan baru?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Tukar Kata Laluan</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
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


<script>
    function visiblePassword(id) {

      var x = document.getElementById(id); //fetch input id
      var y = id.concat("_button");        //fetch button id
      var z = id.concat("_icon");          // icon id

      if (x.type === "password") {
        x.type = "text";                                            //change input type
        document.getElementById(y).className = "btn btn-success";   //change button color
        document.getElementById(z).className = "fa fa-eye";         //change icon
      } else {
        x.type = "password";                                        //change input type to default
        document.getElementById(y).className = "btn btn-secondary"; //change button color to default
        document.getElementById(z).className = "fa fa-eye-slash";   //change icon to default
      }
    }
  </script>

@endsection
