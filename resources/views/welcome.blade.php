@extends('layouts.app')
@section('title', 'Asosiy menu')
@section('content')
    <!-- ======= Header ======= -->
    @if ($slides)
        <div class="main-banner">
            <div class="owl-carousel owl-banner">
                @foreach ($slides as $slide)
                    <div class="item item-1" style="background-image: url({{ $slide->image }})">
                        <div class="header-text">
                            <span class="category  my-3"> <em>{{ $slide->title }}</em></span>
                            <h2 class="category"> {{ $slide->body }}</h2>
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
                        <img class=" img-fluid image card-img border-1 "
                            src="{{ asset($director->image ?? asset('image/user-128.png')) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6>| Mahallamiz RAISi</h6>
                        <h2>{{ $director->first_name ?? ' Ismi ' }} {{ $director->last_name ?? ' Familiyasi ' }}</h2>
                        <p class="text-info">Kasbi: {{ $director->profiles->job ?? 'Mahalla oqsaqoli ' }}</p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Qanday masalar buyicha murojat qilish mumkun ?

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>{{ $villageInfo->what_reasons ?? 'Nima masalalar buyicha yozilishi kerak ' }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Ish soatlar ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $villageInfo->working_hours ?? 'ish soatlari' }} soatlar ichida telefon orqali
                                    aloqaga chiqib ham muammolaringizni hal qilsangiz bo'ladi .
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Mahallamiz muammolari haqida aloqaga chisam bo'ladimi ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>{{ $villageInfo->additional_information ?? '' }}</strong>
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
                                <h4>Ishlash soatlari
                                    <br><span>{{ $villageInfo->working_hours ?? 'ishlash soatlari' }}</span>
                                </h4>
                            </li>
                            <li>
                                <i style="color:#f35525" class="fas fa-phone fa-3x"></i>
                                <h4>Telefon <br><span>{{ $director->profiles->phone ?? 'telefon raqami' }}</span></h4>
                            </li>
                            <li>
                                <i style="color:#f35525" class="fas fa-map-location fa-3x"></i>
                                <h4>Manzili<br><span>{{ $director->quarter->name ?? 'Manzili ' }}</span></h4>
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
                        <h2>Mahalla Haqida Toliqroq Ma'lumot oling !</h2>
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
                        @if (isset($villageInfo->video2_image_cover))
                            <img src="{{ asset($villageInfo->video2_image_cover) }}" alt="">
                        @else
                            <img src="{{ asset('assets/images/cover.default.jpg') }}" alt="">
                        @endif
                        <a href="{{ $villageInfo->video1 ?? 'https://youtube.com' }}" target="_blank"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 mb-1">
                    <div class="video-frame">
                        @if (isset($villageInfo->video2_image_cover))
                            <img src="{{ asset($villageInfo->video2_image_cover) }}" alt="">
                        @else
                            <img src="{{ asset('assets/images/cover.default.jpg') }}" alt="">
                        @endif
                        <a href="{{ $villageInfo->video2 ?? 'https://youtube.com' }}" target="_blank"><i
                                class="fa fa-play"></i></a>
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
                                    <h2 class="timer count-title count-number"
                                        data-to="{{ $villageInfo->population ?? '0' }}" data-speed="1000"></h2>
                                    <p class="count-text ">Aholi <br>Soni</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="{{ $villageInfo->youth ?? '0' }}"
                                        data-speed="1000"></h2>
                                    <p class="count-text ">Yoshlarimiz<br></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number"
                                        data-to="{{ $villageInfo->retailers ?? '0' }}" data-speed="1000"></h2>
                                    <p class="count-text ">Pensiyanerlar<br>dan ko'p</p>
                                </div>
                            </div>
                            <div class="col-lg-4 pb-5">
                                <div class="counter">
                                    <h2 class="timer count-title count-number"
                                        data-to="{{ $villageInfo->schools ?? '0' }}" data-speed="1500"></h2>
                                    <p class="count-text">Maktablar<br>soni</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number"
                                        data-to="{{ $villageInfo->kindergartens ?? '0' }}" data-speed="1000"></h2>
                                    <p class="count-text ">Bog'chalar<br></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number"
                                        data-to="{{ $villageInfo->mosques ?? '0' }}" data-speed="1000"></h2>
                                    <p class="count-text ">Masjidlar<br></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="{{ $villageInfo->shops ?? '0' }}"
                                        data-speed="1000"></h2>
                                    <p class="count-text ">Dukonlar<br></p>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="counter">
                                    <h2 class="timer count-title count-number"
                                        data-to="{{ $villageInfo->hospital ?? '0' }}" data-speed="1000"></h2>
                                    <p class="count-text ">Shifoxona<br>soni</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number"
                                        data-to="{{ $villageInfo->other_services ?? '0' }}" data-speed="1000"></h2>
                                    <p class="count-text ">Xizmatlar</p>
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
                <div class="col-12 col-lg-12">
                    <div class="section-heading">
                        <h6>| Yaqindan</h6>
                        <h6> Tanishing</h6>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="nav-wrapper">
                                <ul class="nav nav-tabs" role="tablist">
                                    @foreach ($infoVillage as $index => $item)
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link {{ $index === 0 ? 'active' : '' }}"
                                                id="tab-{{ $item['id'] }}" data-bs-toggle="tab"
                                                data-bs-target="#content-{{ $item['id'] }}" type="button"
                                                role="tab" aria-controls="content-{{ $item['id'] }}"
                                                aria-selected="{{ $index === 0 ? 'true' : 'false' }}">{{ $item['title'] }}</button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                @foreach ($infoVillage as $index => $item)
                                    <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                        id="content-{{ $item['id'] }}" role="tabpanel"
                                        aria-labelledby="tab-{{ $item['id'] }}">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="info-table">
                                                    <ul>
                                                        <li>Maydoni <span>{{ $item['territory'] }}</span></li>
                                                        <li>Ishchilar <span>{{ $item['workers_count'] }}</span></li>
                                                        <li>Xonalar soni <span>{{ $item['rooms'] }}</span></li>
                                                        <li>Foydanlanganlar <span>{{ $item['customers'] }}</span></li>
                                                        <li>Holati<span>{{ $item['condition'] }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="{{ asset($item['image']) }}" alt="">
                                            </div>
                                            <div class="col-lg-3">
                                                <h4> {{ $item['title'] }} Haqida ko'roq ma'lumot </h4>
                                                <?php
                                                $about = $item['about'];
                                                $shortAbout = strlen($about) > 350 ? substr($about, 0, 340) . '...' : $about;
                                                ?>

                                                <p>{{ $shortAbout }}</p>
                                                <div class="icon-button">
                                                    <a href="property-details.html"><i class="fas fa-info"></i>
                                                        {{ \Carbon\Carbon::now()->toDateString() }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                                <a href="{{ $post->image }}"><img src="{{ asset($post->image) }}" alt=""></a>
                                <span class="category">Yangilik </span>

                                <h6><i class="fas fa-calendar-check"></i> {{ '' . $post->created_at->format('d-m-Y') }}
                                </h6>
                                <h4>
                                    <a href="{{ route('posts.findOne', $post->id) }}">
                                        {{ substr(strip_tags($post->title), 0, 100) }}
                                        {{ strlen(strip_tags($post->title)) > 55 ? '...' : '' }}
                                    </a>
                                </h4>
                                <p>
                                    {{ substr(strip_tags($post->body), 0, 150) }}
                                    {{ strlen(strip_tags($post->body)) > 150 ? '.....' : '' }}
                                </p>
                                <div class="main-button">
                                    <a href="{{ route('posts.findOne', $post->id) }}">Ko'proq o'qish</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class=" justify-content-end text-align-end d-flex pt-2">
                        <div class="main-button">
                            <a href="{{ route('posts.allposts') }}" class="">Barcha Yangiliklar </a>
                        </div>
                    </div>
                    <!-- End blog sidebar -->
                @else
                    <h6 class="text-center font-weight-bold">{{ __('Yangilik joylanmadi ') }}</h6>
                    <hr>
                @endif
            </div>
        </div>
    </div>

    <div class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="mb-5 text-center">
                        <h3>| Biz bilan bog'laning </h3>
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
                        @php
                            $mapUrl = auth()->user()->getMapLocationUrl();
                        @endphp

                        @if ($mapUrl)
                            <iframe src="{{ $mapUrl }}" width="100%" height="600px" frameborder="0"
                                style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
                                allowfullscreen=""></iframe>
                        @else
                            <p>No location found for this user.</p>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item phone">
                                <img src="{{ asset('assets/images/phone-icon.png') }}" alt=""
                                    style="max-width: 52px;">
                                <h6>{{ $villageInfo->phone ?? 'Telefon nomeri ' }}<br><span>Telefon Raqam</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item email">
                                <img src="{{ asset('assets/images/email-icon.png') }}" alt=""
                                    style="max-width: 52px;">
                                <h6>{{ $villageInfo->main_email ?? 'Asossiy emaili ' }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row mt-5 justify-content-center" data-aos="fade-up">
                        <div class="text-center col-lg-10 ">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
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
                    <form id="contact-form" action="{{ route('contact.store') }}" method="POST"
                        class="php-email-form ">
                        @csrf

                        <div class="col-lg-12">
                            <fieldset>
                                <label for="name">F.I.SH</label>
                                <input type="text" name="name" id="name" placeholder="Ismi sharifingiz "
                                    autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="email">Telefon raqam <span class="text-danger"> </span></label>
                                <input type="text" name="phone" id="email"
                                    placeholder="Telefon raqam kiriting " required="">
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                <label for="subject">Nima buyicha ? </label>
                                <input type="text" name="reason" id="subject" placeholder="Masalangiz nima ?"
                                    autocomplete="on">
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
