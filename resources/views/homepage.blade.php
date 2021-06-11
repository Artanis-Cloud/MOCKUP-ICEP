
@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

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
    height: 100vh;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url({{ asset('/qbadminui/img/home/background.jpg') }});
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
</style>

<body>

  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-4">
  		</div>
  		<div class="col-md-4" style="text-align: center;color: rgb(255, 255, 255); padding-top: 15%;">
              <h1>Welcome to <br>iCEP's Venue Management System (VMS)</h1>
  		</div>
  		<div class="col-md-4">
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4">
  		</div>
  		<div class="col-md-4">

                  {{-- <div class="container">
                    <form role="search" method="get" class="search-form form" action="">
                      <label>
                          <span class="screen-reader-text">Search for...</span>
                          <input type="search" class="search-field" placeholder="Type something..." value="" name="s" title="">
                      </label>
                      <input type="submit" class="search-submit button" value="">
                  </form>
                  </div> --}}

  		</div>
  		<div class="col-md-4">
  		</div>
  	</div>
  </div>
@endsection
