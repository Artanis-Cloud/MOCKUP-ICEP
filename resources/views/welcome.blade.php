<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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

.btnlogin{
  display: block;
  width: 100px;
  line-height: 40px;
  background:#E89A3D;
  text-align: center;
  position: relative;
  text-decoration: none;
  color: #fff;
  font-size: 10px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.btnlogin:before,
.btnlogin:after{
  position: absolute;
  content: "";
  transition: all .25s;
}

.btnlogin:before{
  border-bottom: 2px solid yellow;
  border-left: 2px solid yellow;
  width: 10%;
  height: 33%;
  left: -10px;
  bottom: -10px;
}

.btnlogin:after{
  border-top: 2px solid yellow;
  border-right: 2px solid yellow;
  width: 10%;
  height: 33%;
  top: -10px;
  right: -10px;
}

.btnlogin:hover:before{
  width: 112%;
  height: 140%;
}

.btnlogin:hover:after{
  width: 112%;
  height: 140%;
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
          <li><a class="nav-link scrollto active" href="#about">HOME</a></li>
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
    @auth
        <a class="btnlogin" href="#" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logoutform').submit();"> LOG KELUAR </a>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth
    @guest

        <a class="btnlogin" href="{{ route('login') }}"> Log In</a>

        {{-- <a href="{{ route('login') }}" class="btn-get-started"> LOG IN </a> --}}
    @endguest
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="10">
      <h2>Welcome to</h2>
      <h1>Venue Management System (VMS)</h1>

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
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h3 class="section-title">About iCEP</h3><br>

          </div>
          <div class="row counters">

            <div class="col-lg-6 col-6 text-center">
                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/3EjkWa3Oekc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6 col-6 text-center">

              <p style="text-align:justify;">Formerly known as WGC 2012 Organising Committee, iCEP aspires to be the professional conference, exhibition and event organiser of choice. We add value to our stakeholders by delivering content relevant conferences and impactful events through creativity and continuous innovation. By continuously nurturing talents, we set the trend and benchmark while continuously enhancing event experiences. Staging insightful and memorable events is our passion, working with stakeholders and partners to ensure we achieve mutual goals. With our total event organising services, we organise every element of conference & exhibition, from concept up to the execution stage.</p>

            </div>

          </div>

        </div>
      </section>

      <section id="fact" style="padding-bottom: 3%;background-color: #E89A3D;">
        <div class="container" data-aos="fade-up">
          <div class="section-header" style="padding-top: 2%;">
            <h3 class="section-title">Most Popular Venue</h3><br>
            {{-- <p class="section-description">Y.B. Dato’ Teng Chang Khim</p> --}}
          </div>
          <div class="row counters">
            <div class="col-lg-6 col-6 text-center">
                {{-- <span data-purecounter-start="0" data-purecounter-end="534" data-purecounter-duration="1" class="purecounter"></span> --}}
                <p style="text-align:justify;color: #fff;font-size: 20px;">BERJAYA HALL, KUALA LUMPUR, MALAYSIA</p>
                <p style="text-align:justify;color: #fff;">An iconic building with traditional architecture steep in custom and history. Variety of halls, meeting rooms in modern settings and open spaces. The flexibility that allows for tailor-made event concepts – for traditional and new formats. Located in the heart of the nation’s capital and 45 minutes from Kuala Lumpur International Airport (KLIA). Accessible via public transport and walking distant from malls, restaurants, entertainment centres and 3 to 5 star hotels. Dedicated and specialised team working with you hand-in-hand to ensure your event runs swimmingly. This is why we are the preferred venue for local and international conventions, concerts, weddings and other prestigious events in Malaysia.</p>

              </div>
            <div class="col-lg-6 col-6 text-center">
                <img src="http:\/\/ezran.my\/ACES\/wp-content\/uploads\/2021\/02\/dewan1.jpg" style="height: 359px;" alt="Kerajaan Selangor">
            </div>


          </div>

        </div>
      </section>
      <!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        <p>&copy; Copyright © 2021 <a href="#" target="_Blank"><font color="black">iCEP - International Conference and Exhibition Professionals</font></a></p>

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
