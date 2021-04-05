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
* {
  margin: 0;
  padding: 0;
}

body {
  color: teal;
  font-size: 2rem;
  background: #07252e;
}

.container {
  padding: 1rem;
}
.container .img-grid {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  grid-gap: 1rem;
}
.container .img-grid .img-box {
  width: 100%;
  height: 100%;
  border-radius: 0.5rem;
  border: 0.1rem solid teal;
  box-sizing: border-box;
  overflow: hidden;
}
.container .img-grid .img-box .img-timg {
  width: 100%;
  height: calc(100% + 1rem);
  object-fit: cover;
}
.container .img-grid .img-box .img-timg:hover {
  cursor: pointer;
}
.container .modal {
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  padding-top: 3rem;
  width: 100%;
  height: 100%;
  overflow: auto;
  background: rgba(0, 0, 0, 0.9);
}
.container .modal .close, .container .modal .previous, .container .modal .next {
  position: absolute;
  color: gray;
  opacity: 0.7;
  user-select: none;
}
.container .modal .close:hover, .container .modal .previous:hover, .container .modal .next:hover {
  cursor: pointer;
  opacity: 1;
  transition: 200ms ease-in;
}
.container .modal .close {
  font-size: 3rem;
  font-weight: bold;
  top: 1rem;
  left: 2rem;
}
.container .modal .previous {
  font-size: 4rem;
  top: 37%;
  left: 2rem;
}
.container .modal .next {
  font-size: 4rem;
  top: 37%;
  right: 2rem;
}
.container .modal .modal-content {
  margin: auto;
  margin-top: 6%;
  display: block;
  width: auto;
  height: 80%;
  border: 0.1rem solid teal;
  border-radius: 0.5rem;
}
.container .modal .caption {
  font-family: Helvetica, Arial, sans-serif;
  font-size: 1rem;
  font-style: italic;
  text-align: center;
  color: gray;
  margin-top: 1rem;
}

@media (max-width: 1100px) {
  .container .modal .previous, .container .modal .next {
    display: none;
  }
}
@media (max-width: 1024px) {
  .container {
    padding: 0;
  }
  .container .modal .modal-content {
    width: 96%;
    height: auto;
    margin-top: 2rem;
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
          <li><a class="nav-link scrollto active" href="#">GALLERY</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact') }}">CONTACT US</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="10">
      {{-- <h2>Welcome to</h2> --}}
      <h1>iCEP image gallery</h1>
      {{-- <script src="https://kit.fontawesome.com/d97b87339f.js" crossorigin="anonymous"></script>

        <div class="search-box">
        <input class="search-input" type="text" placeholder="Search something..">
        <button class="search-btn"><i class="fas fa-search"></i></button>
        </div> --}}
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container">
            <div class="img-grid">
              <div class="img-box">
                <img
                  class="img-timg"
                  src="http://ezran.my/ACES/wp-content/uploads/2021/02/5.jpg"
                >
              </div>
              <div class="img-box">
                <img
                  class="img-timg"
                  src="http://ezran.my/ACES/wp-content/uploads/2021/02/6.jpg"
                >
              </div>
              <div class="img-box">
                <img
                  class="img-timg"
                  src="http://ezran.my/ACES/wp-content/uploads/2021/02/7.jpg"
                >
              </div>
              <div class="img-box">
                <img
                  class="img-timg"
                  src="http://ezran.my/ACES/wp-content/uploads/2021/02/8.jpg"
                >
              </div>
              <div class="img-box">
                <img
                  class="img-timg"
                  src="http://ezran.my/ACES/wp-content/uploads/2021/02/9.jpg"
                >
              </div>
              <div class="img-box">
                <img
                  class="img-timg"
                  src="http://ezran.my/ACES/wp-content/uploads/2021/02/4.jpg"
                >
              </div>
              <div class="img-box">
                <img
                  class="img-timg"
                  src="http://ezran.my/ACES/wp-content/uploads/2021/02/3.jpg"
                >
              </div>
              <div class="img-box">
                <img
                  class="img-timg"
                  src="http://ezran.my/ACES/wp-content/uploads/2021/02/2.jpg"
                >
              </div>
              <div class="img-box">
                <img
                  class="img-timg"
                  src="http://ezran.my/ACES/wp-content/uploads/2021/02/1.jpg"
                >
              </div>
            </div>

            <div class="modal">
              <span class="close">&times;</span>
              <span class="previous">&#8249;</span>
              <span class="next">&#8250;</span>
              <img
                class="modal-content"
                src=""
                alt=""
              >
              <div class="caption"></div>
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
        &copy; Copyright.
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
<script>
    document.addEventListener('DOMContentLoaded', () => {

const images = document.querySelectorAll('.img-timg'),
      modal = document.querySelector('.modal'),
      content = document.querySelector('.modal-content'),
      closeBtn = document.querySelector('.close'),
      prevBtn = document.querySelector('.previous'),
      nextBtn = document.querySelector('.next'),
      caption = document.querySelector('.caption');

let imgIndex;

const openModal = () => {
  modal.style.display = 'block';
}

const closeModal = () => {
  modal.style.display = 'none';
}

const displayImg = () => {
  if (imgIndex > images.length - 1) { imgIndex = 0 };
  if (imgIndex < 0) { imgIndex = images.length - 1 };
  content.src = images[imgIndex].src;
  content.alt = images[imgIndex].alt;
  caption.textContent = images[imgIndex].alt;
}

for (let i = 0; i < images.length; i++) {
  images[i].addEventListener('click', () => {
    imgIndex = i;
    openModal();
    displayImg();
  });
}

closeBtn.addEventListener('click', () => closeModal());

prevBtn.addEventListener('click', () => {
  imgIndex--;
  displayImg();
});

nextBtn.addEventListener('click', () => {
  imgIndex++;
  displayImg();
});

document.addEventListener('keyup', (e) => {
  if (e.key === 'Escape') {
    closeModal();
  }
});

document.addEventListener('keyup', (e) => {
  if (e.key === 'ArrowLeft') {
    imgIndex--;
    displayImg();
  }
});

document.addEventListener('keyup', (e) => {
  if (e.key === 'ArrowRight') {
    imgIndex++;
    displayImg();
  }
});

});

</script>

</html>
