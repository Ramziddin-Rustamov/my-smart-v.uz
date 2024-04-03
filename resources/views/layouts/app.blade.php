<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/i.png') }} " rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->


  {{-- start --}}
<link href="{{ asset('assets/css/google-fonts.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/templatemo-villa-agency.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bundle.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/addational.css') }}" rel="stylesheet">
{{-- End --}}


  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @if(Request::is('profile'))
    <link href="{{ asset('assets/vendor/custom/style.css') }}" rel="stylesheet">
  @endif
  <style>

        .main-banner .item {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 220px 20% 320px 20%;
        margin-top: 0px;
        }

        .main-banner .item-1 {
        background-image: url({{ asset('images/navbar/1.jpg') }});
        }

        .main-banner .item-2 {
        background-image: url({{ asset('images/navbar/2.jpg') }});
        }

        .main-banner .item-3 {
        background-image: url({{ asset('images/navbar/3.jpg') }});
        }

        .main-banner .item-4 {
        background-image: url({{ asset('images/navbar/4.jpg') }});
        }
  </style>
</head>
<body>

    <!-- ***** Preloader Start ***** -->
  {{-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --}}
  <!-- ***** Preloader End ***** -->

  {{-- <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> mangitobod@gmail.com</li>
            <li><i class="fa fa-map"></i> Mangitobod Neighborhood</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- ***** Header Area Start ***** -->
 {{-- <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <h1 style="color:#f35525">MANGITOBOD</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre id="dropdownMenu">
                                Qo'shimcha ma'lumotlar
                            </a>
                            <div class="dropdown-menu dropdown-menu-end position-absolute z-index-1000" aria-labelledby="dropdownMenu">
                                <!-- User Profile Dropdown -->
                                @guest
                                    <a style="background-color: #f35525;border-radius: 20px; " class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Tizimga kirish
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        @if (Route::has('login'))
                                            <a style="{{ (Request::is('login') ? 'color: green; text-decoration: underline;' : '') }}" class="nav-link" href="{{ route('login') }}"><span>{{ __('Login') }}</span></a>
                                        @endif

                                        @if (Route::has('register'))
                                            <a style="{{ (Request::is('register') ? 'color: green; text-decoration: underline;' : '') }}"  class="nav-link" href="{{ route('register') }}"><span>{{ __('Register') }}</span></a>
                                        @endif
                                    </div>
                                @else
                                    <a style="background-color: #f35525;border-radius: 20px; " class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img src="{{ asset(Auth::user()->image) }}" alt="{{ Auth::user()->name }}'s image"class="rounded-circle position-relative" style="width: 30px; height: 30px; margin-right: 8px; border-radius: 20px; right: -4px; bottom: 8px;">
                                        {{ explode(" ", Auth::user()->name)[0] }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        {{-- Main menu --}}
                                        {{-- <a class="dropdown-item py-3" href="/">
                                            <i class="bx bx-home text-success"></i>    {{ __('Main Page') }}
                                        </a> --}}
                                        {{-- My Profile
                                        <a class="dropdown-item py-3" href="{{ route('profile.index') }}">
                                            <i class="bx bx-user text-success"></i>    {{ __('My profile') }}
                                        </a>
                                        {{-- Dashboard --}}
                                        {{-- @can('super-admin')
                                            <a class="dropdown-item py-3" href="{{ route('home') }}">
                                                <i class="bx bx-message text-success"></i>   {{ __('Dashboard') }} <i class="fa fa-list"></i>
                                            </a>
                                        @endcan
                                        <a class="dropdown-item py-3" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="bx bx-exit text-success"></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div> --}}
                                {{-- @endguest
                            </div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div> --}}
{{-- </header> --}}

  <!-- ***** Header Area End ***** -->


     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top mb-5 " style="margin-bottom: 200px ">
    <div class="container d-flex align-items-center">

      <h1  class="logo me-auto"><a style="color:#f35525" href="/">M</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" class="{{ (Request::is('/') ? 'active' : '') }}">Yangiliklar</a></li>

          <li class="dropdown "><a href="#"><span class="{{ (Request::is('about') ? 'active' : '') }} {{ (Request::is('view') ? 'active' : '') }}">Qo'shimcha</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li ><a href="{{ route('about') }}" class="{{ (Request::is('/about') ? 'active' : '') }}" >Biz haqimizda </a></li>
              <li><a href="{{ route('view') }} ">Yangiliklar</a></li>
              <li><a href="{{ route('view') }} ">Ishchi jamoa</a></li>
              <li><a href="{{ route('view') }} ">Tibbiyot Birlashmasi</a></li>
              <li><a href="{{ route('view') }} ">84-maktab</a></li>
              <li><a href="{{ route('view') }} ">48-maktab</a></li>
            </ul>
          </li>

          {{-- <li><a href="{{ route('services') }}"    class="{{ (Request::is('services') ? 'active' : '') }}">Services</a></li>
          <li><a href="{{ route('portfolio') }}"   class="{{ (Request::is('portfolio') ? 'active' : '') }}">84-Maktab</a></li>
          <li><a href="{{ route('question.index') }}" class="{{ (Request::is('question') ? 'active' : '') }}">Masjid</a></li>
          <li><a href="{{ route('contact') }}"     class="{{ (Request::is('contact') ? 'active' : '') }}">48-Maktab</a></li>
          <li><a href="{{ route('contact') }}"     class="{{ (Request::is('contact') ? 'active' : '') }}">Tibbiy shifoxona </a></li> --}}

        </ul>
        <i class="fas fa-align-left mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links ps-2 d-flex">
        <ul class="navbar-nav ms-auto d-md-flex d-lg-flex ">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item ">
                        <a style="{{ (Request::is('login') ? 'color: green; text-decoration: underline;' : '') }}" class="nav-link " href="{{ route('login') }}"><span>{{ __('Login') }}</span></a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item active">
                        <a style="{{ (Request::is('register') ? 'color: green; text-decoration: underline;' : '') }}"  class="nav-link {{ (Request::is('register') ? 'active' : '') }}" href="{{ route('register') }}"><span>{{ __('Register') }}</span></a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown d-flex "  id="navbarDropdown">
                    <a class="ps-md-3 " href="{{ asset(Auth::user()->image)  }}">
                      <img style="width:35px; border-radius:50%"
                       class="user-circle-image-class "
                      src="{{ asset(Auth::user()->image)  }}"
                      alt="{{ Auth::user()->name }} `s image'">
                    </a>
                    <a style="padding-top:16px" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ explode(" ", Auth::user()->name)[0] }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      {{-- Main menu  --}}
                         <a class="dropdown-item py-3  " href="/">
                        <i class="bx bx-home text-success"></i>    {{ __('Main Page') }}
                      </a>
                      {{-- My Profile --}}
                       <a class="dropdown-item py-3  " href="{{ route('profile.index') }}">
                         <i class="bx bx-user text-success"></i>    {{ __('My profile') }}
                       </a>
                      {{-- dashboard --}}
                       @can('super-admin')
                      <a class="dropdown-item py-3" href="{{ route('home') }}">
                        <i class="bx bx-message text-success"></i>   {{ __('Dashboard') }} <i class="fa fa-list"></i>
                      </a>
                      @endcan
                        <a class="dropdown-item py-3" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        <i class="bx bx-exit text-success"></i> {{ __('Logout') }}
                       </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
         <!-- Right Side Of Navbar -->
      </div>
    </div>
</header>
  <!--!End Header-->

        <main id="app " style="margin-top:90px;">
            @yield('content')
        </main>

         <!-- ======= Footer ======= -->
  {{-- <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Company</h3>
            <p>
              Władysława Korotyńskieg <br>
              14, 02-121 Warszawa, Poland<br>
              Warsaw <br><br>
              <strong>Phone:</strong> +48732786924<br>
              <strong>Email:</strong> rustamovvramziddin@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mobile App</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>
       <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>{{ __('Our link') }}</h4>
            <img style="width: 166px;
            height: auto;
            background-repeat: no-repeat;" src="{{ asset('assets/img/ic.png') }}" alt="Web site link">
        </div>
          <div class=" col-12 col-lg-3 col-md-6 footer-newsletter ">
            <h4>{{ __('Map') }}</h4>
            <div style="width: 100%"><iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=300&amp;hl=en&amp;q=W%C5%82adys%C5%82awa%20Koroty%C5%84skiego%2014,%2002-121%20Warszawa,%20Poland+(iCoders)&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>iCoder</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

          Designed by <a href="https://t.me/ramziddinrustamov">iCoders</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://github.com/Ramziddin-Rustamov" class="instagram"><i class="bx bxl-github"></i></a>
        <a href="https://www.linkedin.com/in/ramziddin-rustamov-0a1320227/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="https://t.me/ramziddin_rustamov" class="telegram"><i class="bx bxl-telegram"></i></a>
      </div>
    </div>
  </footer> --}}
  <!-- End Footer -->

  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}



  <!-- Vendor JS Files -->
  {{-- <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script> --}}
<footer class="bg-dark  py-3 mt-5 mt-3 mt-sm-3 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center mb-0  text-white">
                    Sayt 2024 yil boshida ishlab chiqildi. Agarda sayt ishlash jarayomida xato va kamchiliklar bo'lsa xabar bering, bog'lanish uchun <a rel="nofollow" class="text-primary" href="https://t.me/ramziddinrustamm">Shu yerga bosing</a>
                </p>
            </div>
        </div>
    </div>
</footer>



  {{-- starts --}}
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/addational.js') }}"></script>
  {{-- End --}}
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
