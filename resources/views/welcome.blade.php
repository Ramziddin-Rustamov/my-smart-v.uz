@extends('layouts.app')
@section('title','Asosiy menu')
@section('content')
  <!-- ======= Header ======= -->
   @if($slides)
     <div class="main-banner">
        <div class="owl-carousel owl-banner">
          @foreach ($slides as $slide )
            {{-- {{dd($slides)}} --}}
          <div class="item item-1" style="background-image: url({{$slide->image}})">
            <div class="header-text">
              <span class="category  my-3"> <em>{{$slide->title}}</em></span>
              <h2 class="category"> {{$slide->body}}</h2>
            </div>
          </div>
          
          @endforeach
        </div>
      </div>
     {{-- end 1 --}}

   @else
     <h1 class="text-center">No slide </h1>
   @endif
  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="https://images.ctfassets.net/lh3zuq09vnm2/3JFYi0nAqOxgVXHTYzQsL9/8b5d3b077342437c38678cb7b94d5800/what-is-usability-testing-1_FJaO9XF.svg" alt="">
            {{-- <img src="{{asset('assets/images/featured.jpg') }}" alt=""> --}}
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Mahallamiz RAISi</h6>
            <h2>Faxriddin Qurbonov </h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Qanday masalar buyicha murojat qilish mumkun ?

                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Get <strong>the best school</strong> website template in HTML CSS and Bootstrap for your business. TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates" target="_blank">best free CSS templates</a> in the world. Please tell your friends about it.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Ish soatlar ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Mahallamiz muammolari haqida aloqaga chisam bo'ladimi ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <i style="color:#f35525" class="fas fa-clock fa-3x"></i>
                <h4>Ishlash soatlari <br><span>08:00 - 17: 00</span></h4>
              </li>
              {{-- <li>
                <i style="color:#f35525" class="fas fa-mail-bulk fa-3x"></i>
                <h4>Email<br><span>email@gmail.com</span></h4>
              </li> --}}
              <li>
                <i style="color:#f35525" class="fas fa-phone fa-3x"></i>
                <h4>Telefon <br><span>+9989 771 39 09</span></h4>
              </li>
              <li>
                <i style="color:#f35525" class="fas fa-map-location fa-3x"></i>
                <h4>Manzili<br><span>mangitobod fuqorolar yig'ini</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- video section s --}}


  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Vedio orqali </h6>
            <h2>Mahalla  Haqida Toliqroq Ma'lumot oling !</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-1">
          <div class="video-frame">
            <img src="{{asset('assets/images/video1.jpg')}}" alt="">
            <a href="https://www.youtube.com/watch?v=wZnSb7zqTbs&pp=ygUUbWFuZ2l0b2JvZCBtYWhhbGxhc2k%3D" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>

        <div class="col-lg-6 mb-1">
            <div class="video-frame">
              <img src="{{asset('assets/images/video2.jpg')}}" alt="">
              <a href="https://t.me/mangitobod_village/2" target="_blank"><i class="fa fa-play"></i></a>
            </div>
          </div>
      </div>
    </div>
  </div>
  {{-- video section end  --}}

  {{-- facts section started --}}

  <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4 pb-5 ">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="8500" data-speed="1000"></h2>
                   <p class="count-text ">Aholi <br>Soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="3400" data-speed="1000"></h2>
                   <p class="count-text ">Yoshlarimiz<br>dan ko'p</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="334" data-speed="1000"></h2>
                   <p class="count-text ">Pensiyanerlar<br>dan ko'p</p>
                </div>
              </div>
              <div class="col-lg-4 pb-5">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="2" data-speed="1500"></h2>
                   <p class="count-text">Maktablar<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                  <p class="count-text ">Bog'cha<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="2" data-speed="1000"></h2>
                  <p class="count-text ">Masjidlari<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="200" data-speed="1000"></h2>
                  <p class="count-text ">Dukonlar<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4 ">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="1" data-speed="1000"></h2>
                  <p class="count-text ">Shifoxona<br>soni</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="10" data-speed="1000"></h2>
                  <p class="count-text ">Xizmat ko'<br>rsatish</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- facts section ened  --}}

  {{-- facts 2 section started --}}


  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Eng yaxshi jihatlarimz</h6>
            <h2>Yaqindan tanishing </h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#young" type="button" role="tab" aria-controls="young" aria-selected="true">Yoshlar haqida</button>
                  </li>
                  <li class="nav-item " role="presentation">
                    <button class="nav-link " id="hospital-tab" data-bs-toggle="tab" data-bs-target="#hospital" type="button" role="tab" aria-controls="hospital" aria-selected="false">Shifoxonamiz</button>
                  </li>
				  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="kindergarten-tab" data-bs-toggle="tab" data-bs-target="#kindergarten" type="button" role="tab" aria-controls="kindergarten" aria-selected="false">Maktabgacha ta'lim</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="school-tab" data-bs-toggle="tab" data-bs-target="#school" type="button" role="tab" aria-controls="school" aria-selected="false">Maktablarimiz</button>
                  </li>

                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <!-- young start -->
				<div class="tab-pane fade show active" id="young" role="tabpanel" aria-labelledby="young-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Yoshlar <span>1 400 ta </span></li>
                          <li>Sovrindorlari <span>200</span></li>
                          <li>Til buyicha s.t<span>4</span></li>
                          <li>Alimpeyada sovrindorlari <span>20 ta </span></li>
                          <li>Oliy ta'limda  <span>30 ta </span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img class="thuminale" src="{{asset('assets/images/youth.jpg ')}}" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Property</h4>
                      <p>
                        Rahmat! Sizga kerakli ma'lumotlarni taqdim etishim mumkin. "TemplateMo" veb-sayti, bepul CSS shriftlarini taklif etadi va ommaviy veb-saytlarida qidiruv motorlarida "TemplateMo" nomini qidirishingiz yoki "TemplateMo Portfolio", "TemplateMo One Page Layouts"
                        kabi so'rovlarni kiriting. Bu usullar orqali siz uyingiz uchun mos veb-dizaynlarni topishingiz mumkin..</p>
                      <div class="icon-button">
                        <a href="{{route('youth.index')}}"><i class="fas fa-info"></i>Ko'proq malumot olish </a>
                      </div>
                    </div>
                  </div>
                </div>
				<!-- young end -->

               <!-- hospital -->
			   <div class="tab-pane fade" id="hospital" role="tabpanel" aria-labelledby="hospital-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Maydoni <span> 50 m2</span></li>
                          <li>Shifokorlar <span>26</span></li>
                          <li>Xonalar soni <span>8</span></li>
                          <li>Bir yillik bemorlar  <span>2,000</span></li>
                          <li>Holati<span> Tamirlangan</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="{{asset('assets/images/hospital.avif')}}" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Detail Info About Villa</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fas fa-info"></i>Ko'proq malumot olish </a>
                      </div>
                    </div>
                  </div>
                </div>
			   <!-- hospital -->

				<div class="tab-pane fade" id="school" role="tabpanel" aria-labelledby="school-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>O'quvchilar <span>2500</span></li>
                          <li>O'qituvchilar <span>40</span></li>
                          <li> Maktablar soni <span>2</span></li>
                          <li>Maydoni  <span>150 m2 / 500 m2</span></li>
                          <li>Nomi<span>84 & 48 - maktablar</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="{{asset('assets/images/school.png')}}" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Detail Info About Villa</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fas fa-info"></i> Ko'proq ma'lumot olish </a>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="tab-pane fade" id="kindergarten" role="tabpanel" aria-labelledby="kindergarten-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Soni  <span> 4</span></li>
                          <li>Umumiy hajmi <span>300 bola uchun</span></li>
                          <li>Ta'lim sifati <span>Tarbiya/Asosiy mat</span></li>
                          <li>Tarbiyachilar soni<span>100</span></li>
                          <li> <span> Holati</span>O'rta</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <img src="{{asset('assets/images/kindergarten.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Penthouse</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                      <div class="icon-button">
                        <a href="property-details.html"><i class="fas fa-info"></i>ko'proq ma'lumot olish </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- facts 2 ended  --}}

  {{-- contact and others started  --}}

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| O'chrashuvlar | Bajarilgan ishlar </h6>
            <h2>Biz yaxshi bilganlarimizni siz bilan ilindik !</h2>
          </div>
        </div>
      </div>
      <div class="row">
        @if ($postCount)
        @foreach ($posts as $post)

        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="{{$post->image}}"><img src="{{asset($post->image)}}" alt=""></a>
                <span class="category">Yangilik </span>

            <h6><i class="fas fa-calendar-check"></i>  {{ ''.$post->created_at->format('d-m-Y')}}</h6>
            <h4>
            <a href="{{ route('posts.findOne',$post->id) }}">
                {{ substr(strip_tags($post->title), 0, 100) }}
                {{ strlen(strip_tags($post->title)) > 55 ? "..." : "" }}
            </a></h4>
           <p>
            {{ substr(strip_tags($post->body), 0, 150) }}
            {{ strlen(strip_tags($post->body)) > 150 ? "....." : "" }}
           </p>
            <div class="main-button">
              <a href="{{ route('posts.findOne',$post->id) }}">Ko'proq o'qish</a>
            </div>
          </div>
        </div>
        @endforeach
        <div class=" justify-content-end text-align-end d-flex pt-2">
          <a href="{{ route('posts.allposts') }}" class="btn btn-primary text-center font-weight-bold">Hamma xabarlarni ko'rish</a>
        </div>
        <!-- End blog sidebar -->
        @else
        <h6 class="text-center font-weight-bold">{{ __('Yangilik joylanmadi ') }}</h6><hr>
        @endif
      </div>
    </div>
  </div>

  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Biz bilan bog'laning </h6>
            <h2>Biz bilan aloqaga chiqing </h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div id="map">
            <iframe src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Mangitobod%20Neighborhood%20Samarkand+(Mangitobod%20mahallasi)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="{{asset('assets/images/phone-icon.png')}}" alt="" style="max-width: 52px;">
                <h6>+998 99 771 39 09<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="{{asset('assets/images/email-icon.png')}}" alt="" style="max-width: 52px;">
                <h6>email@.uz<br><span> Email Pochtamiz</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="text-center col-lg-10 ">
                  @if($errors->any())
                      @foreach ($errors->all() as $error )
                        <strong>{{ $error }}</strong>
                      @endforeach
                  @endif
                </div>
                <div class="text-center col-lg-10 ">
                  @if (session('success'))
                      <div class="alert alert-success mb-1 py-2">
                          {{ session('success') }}
                      </div>
                  @endif
              </div>
              </div>
            <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="php-email-form ">
             @csrf

              <div class="col-lg-12">
                <fieldset>
                  <label for="name">F.I.SH</label>
                  <input type="text" name="name" id="name" placeholder="Ismi sharifingiz " autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Telefon raqam <span class="text-danger"> </span></label>
                  <input type="text" name="phone" id="email"  placeholder="Telefon raqam kiriting " required="">
                </fieldset>
              </div>

              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Nima buyicha  ? </label>
                  <input type="text" name="reason" id="subject" placeholder="Masalangiz nima ?" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Masalangiz buyicha xabr qoldiring !</label>
                  <textarea name="message" id="message" placeholder="Xabaringizni shu yerga yozib qoldiring ..."></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Xabarni yuborish </button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
