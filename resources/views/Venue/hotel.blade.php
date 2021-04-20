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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        {{-- <a href="#"><img src="https://upload.wikimedia.org/wikipedia/ms/archive/9/93/20090423144020%21Coat_of_arms_of_Malaysia.png" style="height: 50px;" alt="Kerajaan Selangor"></a> --}}
        <a href="{{ route('welcome') }}"><img src="http://ezran.my/ACES/wp-content/uploads/2021/02/logo-new.png" style="height: 60px;" alt="Kerajaan Selangor"></a>
      </div>
        <div style="padding-left: 5%;">
            <h3 style="color: #fff;">iCEP - International Conference and Exhibition Professionals</h3>
        </div>

    <br>
      <div>

      </div>



      <nav id="navbar" class="navbar">
        <ul>
          {{-- <li><a class="nav-link scrollto active" href="#hero">Laman Utama</a></li> --}}
          <li><a class="nav-link scrollto " href="{{ route('welcome') }}">HOME</a></li>
          <li class="dropdown"><a href="#"><span>VENUE</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('hotel') }}">HOTEL</a></li>
              <li><a href="{{ route('hall') }}">HALL</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ route('gallery') }}">GALLERY</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact') }}">CONTACT US</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero1">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="10">
      {{-- <h2>Welcome to</h2> --}}
      <h1>iCEP Hotel Venue</h1>
      <!-- You just need to get this field. Start -->
        <script src="https://kit.fontawesome.com/d97b87339f.js" crossorigin="anonymous"></script>

        {{-- <div class="search-box">
        <input class="search-input" type="text" placeholder="Search something..">
        <button class="search-btn"><i class="fas fa-search"></i></button>
        </div> --}}
        <div class="container">
            <div class="card-view">
                    <div class="search-form-box top-search">
                            <div class="input-group">
                                <input type="text" class="form-control click-me h100" placeholder="Search Venue, Hotel....">
                                <div class="input-group-append">
                                        <select class="custom-select">
                                                <option  selected>Kuala Lumpur</option>
                                                <option>Pulau Pinang</option>
                                                <option>Johor</option>														</h2></option>
                                                <option>Sabah</option>
                                            </select>
                                <button type="button" class="btn btn-primary search-btn">
                                <img src="https://md-aqil.github.io/images/Search.png" alt="">
                                </button>

                            </div>
                            <ul class="text-left drop-menu suggestion-search-menu add-scroll">
                                <li>
                                    <a href="#" class="suggestion-anchor">
                                        <div class="sleft">
                                            <div class="media">

                                                <div class="media-body">
                                                    <h5>Kuala Lumpur</h5>
                                                    <p>Kuala Lumpur</p>
                                                </div>
                                                </div>
                                        </div>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="suggestion-anchor">
                                        <div class="sleft">
                                            <div class="media">

                                                <div class="media-body">
                                                    <h5>Kuala Lumpur</h5>
                                                    <p>Kuala Lumpur</p>
                                                </div>
                                                </div>
                                        </div>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="suggestion-anchor">
                                        <div class="sleft">
                                            <div class="media">

                                                <div class="media-body">
                                                    <h5>Kuala Lumpur</h5>
                                                    <p>Kuala Lumpur</p>
                                                </div>
                                                </div>
                                        </div>

                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
            </div>

        </div>
<!-- You just need to get this field. End -->

    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->

    <section id="about">
      <div class="row">
        <div class="container">
            <div class="row">
            <h2 class="" style="text-align: center;">Hotel in Malaysia</h2>
            </div>
            <div class="row" id="search">
                <form id="search-form">
                    <div class="form-group col-xs-9">
                        <input class="form-control" type="text" placeholder="Search" />
                    </div>
                    <div class="form-group col-xs-3">
                        <button type="submit" class="btn btn-block btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            {{-- <div class="form-group col-sm-1 col-xs-3">
                <span class="">Price Range</span>
                <input type="range" min="1" max="2000" value="50" id="myRange" style="margin-top: 3%;">
                <p>Value: <span id="demo"></span></p>
            </div> --}}
        <div class="wrapper">
            <div class="cards">
                @foreach($hotel as $data)
                <div class="card">
                  <div class="card__img">
                      <picture>
                        <img src="{{ asset( $image_path = str_replace('public', 'storage',  $data->image)) }}" width="100%" height="200">
                      </picture>
                  </div>
                  <div class="card__details">
                    <h3 for="cozyroom">{{ $data->name }}</h3>
                    <div class="address">{{ $data->address }}</div>
                    <div class="price">
                      <div class="price__l">
                        <span class="price__label">RM {{ $data->price }}</span>
                        <span class="measure__label">/ days</span>
                      </div>
                    </div>
                    <button data-toggle="modal" data-target="#exampleModal2{{ $data->id }}">Detail</button>
                  </div>
                  <div class="modal fade" id="exampleModal2{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Venue Details</h5>
                        </div>
                        <div class="modal-body">
                            <p>Venue: {{ $data->name }}</p>
                            <p>Address: {{ $data->address }}</p>
                            <p>Number of Pax: {{ $data->number_of_pax }}</p>
                            <p>Price: {{ $data->price }}</p>
                            <p>Description: {{ $data->description }}</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                @endforeach


            </div>
        </div>
      </div>
      </div>
      </section>
      <br>
      {{-- <section id="fact" style="padding-bottom: 30%;">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h3 class="section-title">Comparison Venue</h3><br>
          </div>
          <form action="{{ route('comparehotel') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-5" style="text-align: center;">
                    <select name="venue1" id="" class="">
                        @foreach($hotel as $data)
                        <option value="{{ $data->name }}" class="">{{ $data->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col-md-5" style="text-align: center;">
                    <select name="venue2">
                        @foreach($hotel as $data)
                        <option value="{{ $data->name }}" class="">{{ $data->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-2" style="text-align: center;">
                    <button class="btn btn-primary" type="submit"> Compare</button>
                </div>
            </div>
         </form>

        </div>
      </section> --}}
      <!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        <p>&copy; Copyright © 2021 <a href="https://www.forestry.gov.my/my/" target="_Blank"><font color="black">iCEP - International Conference and Exhibition Professionals</font></a></p>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Regna/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('Regna/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Regna/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('Regna/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('Regna/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('Regna/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('Regna/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Regna/assets/js/main.js') }}"></script>

</body>
<script>
  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 1500,
        easing: 'linear',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>


{{-- search function --}}
<script>
    $('.drop').click(function () {
	$(this).toggleClass('open').siblings().removeClass('open');
})

$('.drop-menu li').each(function() {
var delay = $(this).index() * 100 + 'ms';

$(this).css({
	'-webkit-transition-delay': delay,
	'-moz-transition-delay': delay,
	'-o-transition-delay': delay,
	'transition-delay': delay
});
});



(function() {
	$('select').each(function() {
		$(this).hide();
		makeElement($(this));
	});

	function makeElement(select) {
		var
		$div = $('<div />', {class:'ui-select'}).insertAfter(select),
		$nav = $('<span />').click(function() {
			$(this).parent().toggleClass('open');
		}).appendTo($div),
		$el = $('<ul />').appendTo($div);
		select.find('option').map(function(i) {

			var li = $('<li />').append($(this).text());
				li.click(onSelect.bind($div, li, $(this).val(), select, $nav));
			if($(this).attr('selected')) {
				li.addClass('selected');
			}
			var delay = i * 100 + 'ms';
			li.css({
				'-webkit-transition-delay': delay,
		        '-moz-transition-delay': delay,
		        '-o-transition-delay': delay,
		        'transition-delay': delay
			});
			$el.append(li);
		});
		var selected = $el.find('li.selected');
			selected = selected.length ? selected.html() : $el.find('li:first-child').addClass('selected').html();
		$nav.html(selected);
		// addAnimateDelay($el);
	}

<div class="container-fluid">
    <div class="row" style="">
		<div class="col-md-4">

		</div>
		<div class="col-md-8">

		</div>

	</div>
</div>

@endsection
