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
  <section id="hero1">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="10">
      {{-- <h2>Welcome to</h2> --}}
      <h1>iCEP Hotel Venue</h1>
      <!-- You just need to get this field. Start -->
        <script src="https://kit.fontawesome.com/d97b87339f.js" crossorigin="anonymous"></script>

        <div class="search-box">
        <input class="search-input" type="text" placeholder="Search something..">
        <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
<!-- You just need to get this field. End -->

    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="wrapper">
            <div class="cards">
              <div class="card">
                <div class="card__img">
                    <picture>
                      <source media="(max-width: 320px)"
                              srcset="https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80">

                      <source media="(min-width: 538px)"
                              srcset="https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&h=200&q=1500">

                      <img src="https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&h=200&q=1500">
                    </picture>
                </div>
                <div class="card__details">
                  <h3 for="cozyroom">Cozying Room</h3>
                  <div class="address">St.lorem ipsum des</div>
                  <div class="price">
                    <div class="star">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                    </div>
                    <div class="price__l">
                      <span class="price__label">IDR 1500K /</span>
                      <span class="measure__label">night</span>
                    </div>
                  </div>
                  <button>Detail</button>
                </div>
              </div>

              <div class="card">
                <div class="card__img">
                    <picture>
                      <source media="(max-width: 400px)"
                              srcset="https://images.unsplash.com/photo-1507038772120-7fff76f79d79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80">

                      <source media="(min-width: 481px)"
                              srcset="https://images.unsplash.com/photo-1507038772120-7fff76f79d79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&h=200&q=80">


                      <img src="https://images.unsplash.com/photo-1507038772120-7fff76f79d79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80">
                    </picture>
                </div>
                <div class="card__details">
                  <h3 for="tomato">House sweet</h3>
                  <div class="address">Gandaria</div>
                  <div class="price">
                    <div class="star">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                    </div>
                    <div class="price__l">
                      <span class="price__label">IDR 950K /</span>
                      <span class="measure__label">night</span>
                    </div>
                  </div>
                  <button>Detail</button>
                </div>
              </div>

              <div class="card">
                  <div class="card__img">
                      <picture>
                        <source media="(max-width: 400px)"
                                srcset="https://images.unsplash.com/photo-1541123356219-284ebe98ae3b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80">

                        <source media="(min-width: 481px)"
                                srcset="https://images.unsplash.com/photo-1541123356219-284ebe98ae3b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&h=200&q=100">

                        <img src="https://images.unsplash.com/photo-1541123356219-284ebe98ae3b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80">
                      </picture>
                  </div>
                  <div class="card__details">
                    <h3 for="cozyroom">Makau Homestay</h3>
                    <div class="address">Cipete</div>

                    <div class="price">
                      <div class="star">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      </div>
                      <div class="price__l">
                        <span class="price__label">IDR 2500K /</span>
                        <span class="measure__label">night</span>
                      </div>
                    </div>
                    <button>Detail</button>
                  </div>
              </div>

              <div class="card">
                  <div class="card__img">
                      <picture>
                        <source media="(max-width: 320px)"
                                srcset="https://images.unsplash.com/photo-1545022388-9e6d95c77174?ixlib=rb-1.2.1&auto=format&fit=crop&w=335&h=200&q=80">

                        <source media="(max-width: 500px)"
                                srcset="https://images.unsplash.com/photo-1545022388-9e6d95c77174?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&h=200&q=100">

                        <img src="https://images.unsplash.com/photo-1545022388-9e6d95c77174?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=200&q=80">
                      </picture>
                  </div>
                  <div class="card__details">
                    <h3 for="cozyroom">Bogor Cozy Homestay</h3>
                    <div class="address">Bogor</div>

                    <div class="price">
                      <div class="star">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      </div>
                      <div class="price__l">
                        <span class="price__label">IDR 2500K /</span>
                        <span class="measure__label">night</span>
                      </div>
                    </div>
                    <button>Detail</button>
                  </div>
              </div>

              <div class="card">
                  <div class="card__img">
                      <picture>
                        <source media="(max-width: 320px)"
                                srcset="https://images.unsplash.com/photo-1540518614846-7eded433c457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80">

                        <source media="(max-width: 500px)"
                                srcset="https://images.unsplash.com/photo-1540518614846-7eded433c457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&h=200&q=100">

                        <img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=200&q=80">
                      </picture>
                  </div>
                  <div class="card__details">
                    <h3 for="cozyroom">Tribeca BedMy</h3>
                    <div class="address">Jakarta</div>

                    <div class="price">
                      <div class="star">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      </div>
                      <div class="price__l">
                        <span class="price__label">IDR 750K /</span>
                        <span class="measure__label">night</span>
                      </div>
                    </div>
                    <button>Detail</button>
                  </div>
              </div>

              <div class="card">
                  <div class="card__img">
                      <picture>
                        <source media="(max-width: 320px)"
                                srcset="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=335&h=200&q=80">

                        <source media="(max-width: 500px)"
                                srcset="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&h=200&q=100">

                        <img src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&h=200&q=80">
                      </picture>
                  </div>
                  <div class="card__details">
                    <h3 for="cozyroom">Les't Carrot</h3>
                    <div class="address">Bandung</div>

                    <div class="price">
                      <div class="star">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                        <img src="https://image.flaticon.com/icons/svg/291/291205.svg" alt="">
                      </div>
                      <div class="price__l">
                        <span class="price__label">IDR 1750K /</span>
                        <span class="measure__label">night</span>
                      </div>
                    </div>
                    <button>Detail</button>
                  </div>
              </div>


            </div>
          </div>
      </section>
      <br>
      <section id="fact" style="padding-bottom: 4%;">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h3 class="section-title">Most Popular Venue</h3><br>
            {{-- <p class="section-description">Y.B. Dato’ Teng Chang Khim</p> --}}
          </div>
          <div class="row counters">

            <div class="col-lg-6 col-6 text-center">
                <img src="http:\/\/ezran.my\/ACES\/wp-content\/uploads\/2021\/02\/dewan1.jpg" style="height: 359px;" alt="Kerajaan Selangor">
            </div>

            <div class="col-lg-6 col-6 text-center">
              {{-- <span data-purecounter-start="0" data-purecounter-end="534" data-purecounter-duration="1" class="purecounter"></span> --}}
              <p style="text-align:justify;">BERJAYA HALL, KUALA LUMPUR, MALAYSIA</p>

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

</html>
