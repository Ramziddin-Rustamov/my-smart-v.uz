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
<link rel="icon" href="{{ asset('icon/icon.png') }}" type="image/x-icon">
{{-- End --}}
  <!-- Template Main CSS File -->
    @if(Request::is('pray-time'))
      <link href="{{ asset('assets/css/pray.css') }}" rel="stylesheet">
    @endif
  @livewireStyles
</head>
<body>
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background-color: rgba(255, 244, 239, 0.8);
  box-shadow: 11px 11px 35px -10px rgba(66, 68, 90, 1);">
    <div class="container d-flex align-items-center">

      <h1  class="logo me-auto"><a style="color:#f35525" href="/">Mangit <br>
        <span style="padding-left:50px">obod</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Biz haqimizda</a></li>
          <li><a href="{{ route('posts.allposts') }}" class="{{request()->routeIs('posts.allposts') ? 'active' : '' }}">Yangiliklar</a></li>
          <li><a href="{{ route('team.index') }}" class="{{request()->routeIs('team.index') ? 'active' : '' }}">Ishchi jamoa</a></li>
          <li><a href="#">Tibbiyot Birlashmasi</a></li>
          <li class="dropdown">
              <a href="#">
                  <span class="#">Maktablar</span>
                  <i class="fas fa-chevron-down"></i>
                </a>
              <ul>
                  <li><a href="#">84-maktab</a></li>
                  <li><a href="#">48-maktab</a></li>
              </ul>
          </li>
      </ul>      
        <i class="fas fa-align-left mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links ps-2 d-flex">
        <ul class="navbar-nav ms-auto d-md-flex d-lg-flex ">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item ">
                        <a style="{{ (Request::is('login') ? 'color: green; text-decoration: underline;' : '') }}" class="nav-link " href="{{ route('login') }}"><span>{{ __('Kirish') }}</span></a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item active">
                        <a style="{{ (Request::is('register') ? 'color: green; text-decoration: underline;' : '') }}"  class="nav-link {{ (Request::is('register') ? 'active' : '') }}" href="{{ route('register') }}"><span>{{ __('R. O\'tish') }}</span></a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown d-flex "  id="navbarDropdown" >
                    <a class="ps-md-3 " href="{{ asset(Auth::user()->image)  }}">
                      <img style="    background-size: contain;
                      width: 35px;
                      border-radius: 50%;
                      height: 40px;
                      background-position: center;"
                       class="user-circle-image-class "
                      src="{{ asset(Auth::user()->image)  }}"
                      alt="{{ Auth::user()->first_name }} `s image'">
                    </a>
                    <a style="padding-top:16px" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="background-color: rgba(255, 244, 239, 1);
                    box-shadow: 11px 11px 35px -10px rgba(66, 68, 90, 1);">
                            {{-- Main menu --}}
                    <a class="dropdown-item py-3 {{ request()->is('/') ? 'active' : '' }}" href="/">
                        <i class="fas fa-home text-success"></i> {{ __(' Asosiy menu') }}
                    </a>
                    
                    {{-- My Profile --}}
                    <a class="dropdown-item py-3 {{ request()->routeIs('profile.index') ? 'active' : '' }}" href="{{ route('profile.index') }}">
                        <i class="fas fa-user-tie text-success"></i> {{ __(' Mening profilm ') }}
                    </a>

                    @can('shop-owner')
                    <a class="dropdown-item py-3 {{ request()->routeIs('shops.index') ? 'active' : '' }}" href="{{ route('shops.index') }}">
                        <i class="fas fa-store text-success"></i> {{ __('Dukonlarim') }}
                    </a>
                    @endcan

                    <a class="dropdown-item py-3 {{ request()->routeIs('announcements.index') ? 'active' : '' }}" href="{{ route('announcements.index') }}">
                        <i class="fas fa-bullhorn text-success"></i> {{ __('E`lonlarim ') }}
                    </a>

                    <a class="dropdown-item py-3 {{ request()->routeIs('public.announcements.index') ? 'active' : '' }}" href="{{ route('public.announcements.index') }}">
                        <i class="fas fa-bell text-success"></i> {{ __('E`lonlar ') }}
                    </a>

                    <a class="dropdown-item py-3 {{ request()->routeIs('public.shops.index') ? 'active' : '' }}" href="{{ route('public.shops.index') }}">
                        <i class="fas fa-store text-success"></i> {{ __('Dukonlar') }}
                    </a>

                    <a class="dropdown-item py-3 {{ request()->routeIs('people.index') ? 'active' : '' }}" href="{{ route('people.index') }}">
                        <i class="fas fa-user-group text-success"></i> {{ __('Barcha Aholimiz') }}
                    </a>

                    <a class="dropdown-item py-3 {{ request()->routeIs('youth.index') ? 'active' : '' }}" href="{{ route('youth.index') }}">
                        <i class="fas fa-users text-success"></i> {{ __(' Yoshlar ') }}
                    </a>

                    <a class="dropdown-item py-3 {{ request()->routeIs('emergency.index') ? 'active' : '' }}" href="{{ route('emergency.index') }}">
                        <i class="fas fa-hospital text-success"></i> {{ __('Shoshilinch Telefon') }}
                    </a>

                    <a class="dropdown-item py-3 {{ request()->routeIs('pray.index') ? 'active' : '' }}" href="{{ route('pray.index') }}">
                        <i class="fas fa-pray text-success"></i> {{ __('Ibodat vaqtlari') }}
                    </a>

                    <a class="dropdown-item py-3" href="#">
                        <i class="fas fa-hand-holding-heart text-success"></i> {{ __(' Hayriya ') }}
                    </a>

                    {{-- Dashboard --}}
                    @can('super-admin')
                    <a class="dropdown-item py-3 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-cog text-success"></i> {{ __('Boshqaruv') }}
                    </a>
                    @endcan

                    <a class="dropdown-item py-3 {{ request()->routeIs('logout') ? 'active' : '' }}" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out text-success"></i> {{ __('Chiqib ketish') }}
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
    {{-- <h6 class="moving-text">Ushbu tizim hozircha test rejimda ishlamoqda ... </h6> --}}
</header>
<main id="app">
    @yield('content')
</main>
<footer class="bg-dark  py-3 mt-5 mt-3 mt-sm-3 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center mb-0  text-white">
                    Sayt 2024 yil boshida ishlab chiqildi. Agarda sayt ishlash jarayomida xato va kamchiliklar bo'lsa xabar bering, bog'lanish uchun
                    <a rel="nofollow" class="text-primary" href="https://t.me/contactmewitherror">Shu yerga bosing</a>
                </p>
            </div>
        </div>
    </div>
</footer>
  {{-- starts --}}
  @livewireScripts
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/addational.js') }}"></script>
  {{-- End --}}
</body>
</html>
