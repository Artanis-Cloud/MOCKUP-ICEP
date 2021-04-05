<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
{{--
  {{-- <title>Rumah Ibadat</title> --}}
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Regna/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('Regna/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Regna/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('Regna/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('Regna/assets/css/search.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Regna - v4.1.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
.charts_orb {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  flex-wrap: wrap;
  font-family: arial;
  color: white;
}
.charts_orb .orb {
  padding: 20px;
}
.charts_orb .orb .orb_graphic {
  position: relative;
}
.charts_orb .orb .orb_graphic .orb_value {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2.5em;
  font-weight: bold;
}
.charts_orb .orb .orb_label {
  text-transform: uppercase;
  text-align: center;
  margin-top: 1em;
}
.charts_orb svg {
  width: 110px;
  height: 110px;
}
.charts_orb svg circle {
  transform: rotate(-90deg);
  transform-origin: 50% 50%;
  stroke-dasharray: 314.16, 314.16;
  stroke-width: 2;
  fill: transparent;
  r: 50;
  cx: 55;
  cy: 55;
}
.charts_orb svg circle.fill {
  stroke: #D3D3D3;
}
.charts_orb svg circle.progress {
  stroke: #ff0000;
  transition: stroke-dashoffset 0.35s;
  stroke-dashoffset: 214.16;
  -webkit-animation: NAME-YOUR-ANIMATION 1.5s forwards;
  -webkit-animation-timing-function: linear;
}

@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700");
* {
  margin: 0;
  padding: 0;
}

html, body {
  height: 100%;
}

ul {
  list-style: none;
  display: flex;
  justify-content: flex-end;
}

.top__header {
  position: relative;
  height: 45px;
  padding: 10px;
  background: #51D6FB;
  color: #FFFFFF;
  font-size: 12px;
  font-family: "Roboto", sans-serif;
  text-align: center;
  overflow: hidden;
}
.top__header .icon__menu .menu__mobile {
  text-align: left;
  margin-top: -5px;
}
.top__header .icon__menu .menu__desktop {
  display: none;
}
.top__header h3 {
  position: absolute;
  bottom: 10px;
  width: 100%;
  text-align: center;
}
.top__header:before {
  content: "";
  width: 100%;
  border-radius: 10px 10px 0 0;
  background: #1fcafa;
  height: 100%;
  display: block;
  position: absolute;
  top: 32px;
  left: 0;
}

.cards {
  margin-top: 1rem;
  padding: 10px;
  display: grid;
  grid-gap: 20px;
  font-family: "Roboto", sans-serif;
}
.cards .card {
  position: relative;
  max-height: 340px;
  padding: 10px;
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(auto-fit, minmax(auto, 1fr));
}
.cards .card__img {
  max-height: 200px;
  border-radius: 10px;
  overflow: hidden;
}
.cards .card__details {
  position: relative;
  top: -36px;
  width: 90%;
  padding: 10px;
  margin: 0 auto;
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(3, 6, 31, 0.15);
  display: grid;
  grid-gap: 5px;
}
.cards .card__details h3 {
  font-size: 22px;
  font-weight: 400;
}
.cards .card__details .address {
  color: #777777;
  font-size: 12px;
}
.cards .card__details .price {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.cards .card__details .price .price__l {
  width: 100%;
  text-align: right;
}
.cards .card__details .price .price__l .price__label {
  font-weight: 600;
  text-align: right;
}
.cards .card__details .price .star img {
  width: 14px;
}
.cards .card__details button {
  cursor: pointer;
  width: 100%;
  padding: 15px;
  border: none;
  border-radius: 5px;
  background: #51D6FB;
  color: #FFFFFF;
}
.cards .card__details button:focus {
  outline: none;
}
.cards .card .credit-img {
  position: absolute;
  right: 0;
  bottom: 0;
  padding: 10px;
  font-size: 10px;
  text-align: right;
}

@media (max-width: 347px) {
  .cards .card__details .price {
    align-items: baseline;
  }
  .cards .card__details .price .price__l {
    font-size: 12px;
  }
}
@media (min-width: 425px) {
  .top__header .icon__menu .menu__mobile {
    display: none;
  }
  .top__header .icon__menu .menu__desktop {
    display: block;
  }
  .top__header .icon__menu .menu__desktop ul.desktop__menu li {
    cursor: pointer;
    margin: 0 1rem;
    padding: 2px 10px;
  }
  .top__header .icon__menu .menu__desktop ul.desktop__menu li.promo {
    background: #D7493A;
    border-radius: 5px;
  }
  .top__header .icon__menu .menu__desktop ul.desktop__menu li.promo:hover {
    background: #b93425;
  }
}
@media (min-width: 768px) and (max-width: 1024px) {
  .cards .card {
    grid-template-columns: 1fr 1fr;
  }
  .cards .card__details {
    top: 0;
    align-items: flex-start;
    align-content: center;
    grid-gap: 10px;
  }
  .cards .card__details .price {
    grid-template-columns: auto 1fr;
    font-size: 15px;
  }
  .cards .card__details .address {
    margin-top: -7px;
  }
  .cards .card .credit-img {
    padding: 15px 25px;
  }
}
@media (min-width: 481px) and (max-width: 767px) {
  .cards .card {
    grid-template-columns: 1fr 1fr;
  }
  .cards .card__details {
    top: 0;
    align-items: flex-start;
    align-content: center;
    grid-gap: 10px;
  }
  .cards .card__details .price {
    grid-template-columns: auto 1fr;
    font-size: 15px;
  }
  .cards .card__details .address {
    margin-top: -7px;
  }
  .cards .card .credit-img {
    padding: 15px 25px;
  }
}
@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
  .cards {
    grid-template-columns: 1fr 1fr;
  }
  .cards .credit-img {
    font-size: 8px !important;
  }
}
@media (min-width: 1025px) {
  .wrapper {
    width: 960px;
    margin: auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  }
  .wrapper .cards {
    grid-template-columns: 1fr 1fr 1fr;
  }
  .wrapper .cards .card__details h3 {
    font-size: 18px;
  }

  .search-box {
  width: 350px;
  position: relative;
  display: flex;
  bottom: 0;
  left: 0;
  right: 0;
}

.search-input {
  width: 100%;
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
  padding: 15px 45px 15px 15px;
  background-color: #eaeaeb;
  color: #6c6c6c;
  border-radius: 6px;
  border:none;
  transition: all .4s;
}

.search-input:focus {
  border:none;
  outline:none;
  box-shadow: 0 1px 12px #b8c6db;
  -moz-box-shadow: 0 1px 12px #b8c6db;
  -webkit-box-shadow: 0 1px 12px #b8c6db;
}

.search-btn {
  background-color: transparent;
  font-size: 18px;
  padding: 6px 9px;
  margin-left:-45px;
  border:none;
  color: #6c6c6c;
  transition: all .4s;
  z-index: 10;
}

.search-btn:hover {
  transform: scale(1.2);
  cursor: pointer;
  color: black;
}

.search-btn:focus {
  outline:none;
  color:black;
}

}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        {{-- <a href="#"><img src="https://upload.wikimedia.org/wikipedia/ms/archive/9/93/20090423144020%21Coat_of_arms_of_Malaysia.png" style="height: 50px;" alt="Kerajaan Selangor"></a> --}}
        <a href="#"><img src="http://ezran.my/ACES/wp-content/uploads/2021/02/logo-new.png" style="height: 60px;" alt="Kerajaan Selangor"></a>
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
          <li><a class="nav-link scrollto " href="{{ route('welcome') }}">ABOUT</a></li>
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
  <section id="hero2">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="10">
      {{-- <h2>Welcome to</h2> --}}
      <h1>iCEP Hall Venue</h1>
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
                            <ul class="drop-menu text-left suggestion-search-menu add-scroll">
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
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="wrapper">
            <div class="cards">

              @foreach($hall as $data)
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
                    {{-- <div class="star">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                    </div> --}}
                    <div class="price__l">
                      <span class="price__label">RM {{ $data->price }}</span>
                      <span class="measure__label">/ days</span>
                    </div>
                  </div>
                  <button data-toggle="modal" data-target="#exampleModal2{{ $data->id }}">Detail</button>
                </div>
                    <!-- Modal -->
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
      </section>
      <br>
      <section id="fact" style="padding-bottom: 4%;">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h3 class="section-title">Comparison Venue</h3><br>
            {{-- <p class="section-description">Y.B. Dato’ Teng Chang Khim</p> --}}
          </div>

          <div class="row">
              <div class="col-md-6" style="text-align: center;">
            <div class="dropdown">
                <button class="btn btn-primary btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%;">
                    Venue
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);width: 100%;">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>

                <div class="card" style="margin-top: 5%;">
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&h=200&q=1500" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Cras justo odio</li>
                      <li class="list-group-item">Dapibus ac facilisis in</li>
                      <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>


            </div>

              </div>
              <div class="col-md-6" style="text-align: center;">
                <div class="dropdown">
                    <button class="btn btn-primary btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%;">
                        Venue
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);width: 100%;">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>

                    <div class="card" style="margin-top: 5%;">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1540518614846-7eded433c457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=200&q=80" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>
                </div>
                  </div>
          </div>

        </div>
      </section>
      <!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <p>&copy; Hakcipta Terpelihara 2021. <a href="https://www.forestry.gov.my/my/" target="_Blank"><font color="black">iCEP - International Conference and Exhibition Professionals</font></a></p>
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
        {{-- Designed by <a href="https://bootstrapmade.com/">Arghhdann</a> --}}
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

	function onSelect(li, value, select, $nav) {
		this.removeClass('open');
		li.addClass('selected').siblings().removeClass('selected');
		select.val(value).trigger('change');
		$nav.html(li.html());
	}
})();
$('.click-me').click(function () {
	$('.drop-menu').toggleClass('open');
})

</script>

</html>
