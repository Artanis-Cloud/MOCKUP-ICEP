@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous"></script>


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


/* compare */
.product-col {
  display: none;
}

.compare-col-1 {
  -webkit-box-ordinal-group: 2;
  -webkit-order: 1;
  -ms-flex-order: 1;
  order: 1;
  display: block;
}

.compare-col-2 {
  -webkit-box-ordinal-group: 3;
  -webkit-order: 2;
  -ms-flex-order: 2;
  order: 2;
  display: block;
}

.compare-col-3 {
  -webkit-box-ordinal-group: 4;
  -webkit-order: 3;
  -ms-flex-order: 3;
  order: 3;
  display: block;
}

.compare-col-4 {
  -webkit-box-ordinal-group: 5;
  -webkit-order: 4;
  -ms-flex-order: 4;
  order: 4;
  display: block;
}

.compare-col-5 {
  -webkit-box-ordinal-group: 6;
  -webkit-order: 5;
  -ms-flex-order: 5;
  order: 5;
  display: block;
}

/* gallery */
#gallery{
  position:relative;
  width:100%;
  height:100%;
  min-height:100%;
  display:table;
  transition: all ease 1s;
  background-color:#fff;
  overflow-x: hidden;
}
#gallery .item{
  width:20%;
  display:block;
  float: left;
  transition: all ease 400ms;
  background-color:#000;
  position: relative;
}
#gallery .item:hover,
#gallery .item:focus{
  transform:scale(1.1);
  z-index:50;
  box-shadow:0 0 10px black;}
#gallery .item figure{
  transition: all ease 1s;
  overflow:hidden;
  height:auto;
  padding:0;
  margin:0;
  position: relative;
}
#gallery .item figure img{
  transform: scale(1.4);
  transition: all ease 1s;
}
#gallery .item:hover figure,
#gallery .item:focus figure{
  transition: all ease 400ms;
}
#gallery .item:hover figure img,
#gallery .item:focus figure img{
  transform:scale(1.4);
  transition: all ease 1s;
}
#gallery.hover{
  transition: all ease 1s;
/*   opacity:.7; */
}
#gallery.hover .item{
  opacity:.9;
  filter: blur(1px);
}
#gallery.hover .item:hover,
#gallery.hover .item:focus{
  opacity:1;
  filter: blur(0);
}
#gallery .item figcaption{
  position:absolute;
  font-size:18px;
  color:#fff;
  width:100%;
  height:100%;
  padding:10%;
  display:flex;
  justify-content:center;
  align-items:center;
  text-align:center;
  top:0;
  left:0;
  transform:scale(1.3);
  filter: blur(4px);
  opacity:0;
  transition:500ms;
  background-color: rgba(0,154,178,.6);
  text-transform:uppercase;
  font-weight:bold;
}
#gallery .item:hover figcaption,
#gallery .item:focus figcaption{
  transform:scale(1);
  filter: blur(0);
  opacity:1;
  transition:300ms;}
@media (max-width:1368px){
  #gallery .item{width:25%;}
}
@media (max-width:1080px){
  #gallery .item{width:33.3%;}
}
@media (max-width:800px){
  #gallery .item{width:50%;}
  #gallery .item figure{
    height:250px;
  }
  #gallery .item figure img{
    transform:rotate(0) scale(1);
    transition: all ease 1s;
    width:auto;
    min-width:100%;
    height:100%;
    min-height:250px;
  }
  #gallery .item:hover figure img{
    transform:rotate(0) scale(1);

  }
}
@media (max-width:500px){
  #gallery .item{width:100%;}
  #gallery .item figure{
    height:250px;
  }
}
</style>

<body>

 <div class="container-fluid">

     <div class="row">
      <div class="col-md-12" style="padding-left: 5%; padding-right: 5%; padding-top: 5%;">
      <div class="rounded-lg card border-1">
                                    <!-- Card body -->
                                    <div class="p-0 card-body">
                                        <!-- Card title -->
                                        <div class="flex-row p-3 m-0 card-title d-flex align-items-center justify-content-between">
                                            <h1>Room Details</h1>
                                        </div>
                                        <!-- Activity details -->
                                        @forelse($rooms as $data)

                                        <div class="flex-row p-3 d-flex justify-content-between border-bottom">
                                            <div class="flex-grow-1">
                                            <h3 class="m-0 font-weight-normal">{{ $data->hotels->hotel_name }}</h3>
                                            <img class="card-img-top" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/49/b7/75/exterior.jpg?w=900&h=-1&s=1" alt="Card image cap" style="width: 250px; height: 200px;">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h4 class="text-muted">Radius from KLCC (car)</h4>
                                                <h5 class="m-0 font-weight-normal">{{ $data->hotels->car_radius }}</h5>
                                                <br>
                                                <h4 class="text-muted">Radius from KLCC (walk)</h4>
                                                <h5 class="m-0 font-weight-normal">{{ $data->hotels->walking_radius }}</h5>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h4 class="text-muted">Room Type</h4>
                                                <h5 class="m-0 font-weight-normal">{{ $data->room_type }}</h5>
                                                <br>
                                                <h4 class="text-muted">Single Rates ( 1 Breakfast)</h4>
                                                <h5 class="m-0 font-weight-normal">{{ $data->single_rate }}</h5>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h4 class="text-muted">Double Rates ( 2 Breakfast)</h4>
                                                <h5 class="m-0 font-weight-normal">{{ $data->double_rate }}</h5>
                                                <br>
                                                <h4 class="text-muted">Corporate Rates</h4>
                                                <h5 class="m-0 font-weight-normal">{{ $data->corporate_rate }}</h5>
                                            </div>

                                        </div>
                                        @empty

                                    @endforelse

                                        <div class="border-0 rounded-lg card" style="padding: 5%">
                                         <!-- Tab nav -->
                                         <ul class="mb-3 nav nav-pills" id="pills-tab" role="tablist" style="background-color: #2F4858; justify-content: space-evenly;">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><font color="white">Photo Gallery</font></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><font color="white">Meeting Space</font></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><font color="white">Nearby</font></a>
                                            </li>
                                        </ul>
                                        <!-- Tab content -->

                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div id="gallery">
                                                    @forelse($photos as $photo)
                                                    <div class="item">
                                                    <a href="{{ asset($image_path=str_replace('public','storage',$photo->photos))}}" data-fancybox="gallery" data-caption="My caption">
                                                        <figure>
                                                            <img class="card-img-top" src="{{ asset($image_path=str_replace('public','storage',$photo->photos))}}" style="width:100%;" alt="Card image cap">
                                                        {{-- <figcaption>This is a caption with a long text to test</figcaption> --}}
                                                        </figure>
                                                    </a>
                                                    </div>
                                                    @empty

                                                    @endforelse
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                            <div class="table-responsive">
                                    <table class="table text-dark table-borderless">
                                        <thead>
                                            <tr class="text-center">
                                                <th><p class="mb-0">Meeting rooms</p></th>
                                                <th><p class="mb-0">Size</p></th>
                                                <th><p class="mb-0">Maximum capacity</p></th>
                                                <th><p class="mb-0">Banquet</p></th>
                                                <th><p class="mb-0">Classroom</p></th>
                                                <th><p class="mb-0">Theater</p></th>
                                                <th><p class="mb-0">Cocktail</p></th>
                                                <th><p class="mb-0">Radius from KLCC (car)</p></th>
                                                <th><p class="mb-0">Radius from KLCC (walk )</p></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Table data -->
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">Boardroom</p></td>
                                                <td><p class="mb-0 font-weight-normal">300 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">2000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">1.5 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">3.0 km</p></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">Meeting Room</p></td>
                                                <td><p class="mb-0 font-weight-normal">400 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">1000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">250</p></td>
                                                <td><p class="mb-0 font-weight-normal">250</p></td>
                                                <td><p class="mb-0 font-weight-normal">250</p></td>
                                                <td><p class="mb-0 font-weight-normal">250</p></td>
                                                <td><p class="mb-0 font-weight-normal">2.5 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">5.0 km</p></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">MR6</p></td>
                                                <td><p class="mb-0 font-weight-normal">500 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">3000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">750</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">5.0 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">10.0 km</p></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">Majestic</p></td>
                                                <td><p class="mb-0 font-weight-normal">1000 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">5000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">1000</p></td>
                                                <td><p class="mb-0 font-weight-normal">2000</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">20.0 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">30.0 km</p></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><p class="mb-0 font-weight-bold">Shangri La</p></td>
                                                <td><p class="mb-0 font-weight-normal">700 s.q ft</p></td>
                                                <td><p class="mb-0 font-weight-normal">3000 person</p></td>
                                                <td><p class="mb-0 font-weight-normal">1000</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">500</p></td>
                                                <td><p class="mb-0 font-weight-normal">5.5 km</p></td>
                                                <td><p class="mb-0 font-weight-normal">10.0 km</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15935.17731018773!2d101.69481858588372!3d3.148893338671856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPETRONAS%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1618928630135!5m2!1sen!2smy" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                            </div>
                                        </div>
                                        </div>

                                    </div>

                                </div>
      </div>
     </div>

   </div>


<script>
$( "#gallery .item" ).hover(
  function() {
    $( '#gallery' ).addClass( "hover" );
    $( this ).addClass( "hover" );
  },function() {
    $( this ).removeClass( "hover" );
    $( '#gallery' ).removeClass( "hover" );
  }
);
</script>


@endsection

