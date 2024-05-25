@extends('layouts.app')
@section('title', 'Ibodat vaqtlari ')
@section('content')
    <div class="container " style="padding-top:50px">
        <div class="row justify-content-center ">
            <div class="col text-center mb-5">
                <h1 class="display-4 font-weight-bolder text-dark">Ibodat vaqtlari </h1>
                <p class="lead"> Samarqand | Urgut {{ now()->format('d-m-y') }}</p>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col position-relative"
                    style="background-image: url('{{ asset('image/pray/sunrise.jpeg') }}');">
                    <img class="card-img d-none" src="{{ asset('image/pray/sunrise.jpeg') }}" alt="Sunrise image">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center ">
                        <h2 class="text-centr">Bomdod Nomozi</h2>
                        <h4 class=" text-center"> Kirish <br> {{ $time['data']['timings']['Fajr'] }}</h4>
                        <h4 class=" text-center"> Chiqish <br> {{ $time['data']['timings']['Sunrise'] }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col position-relative"
                    style="background-image: url('{{ asset('image/pray/peshin.jpeg') }}');">
                    <img class="card-img d-none" src="{{ asset('image/pray/peshin.jpeg') }}" alt="Sunrise image">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center ">
                        <h2 class="text-centr">Peshin Nomozi </h2>
                        <h4 class=" text-center"> Kirish <br> {{ $time['data']['timings']['Dhuhr'] }}</h4>
                        <h4 class=" text-center"> Chiqish <br> {{ $time['data']['timings']['Asr'] }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col position-relative"
                    style="background-image: url('{{ asset('image/pray/asr.webp') }}');">
                    <img class="card-img d-none" src="{{ asset('image/pray/asr.webp') }}" alt="Sunrise image">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center ">
                        <h2 class="text-centr">Asr Nomozi </h2>
                        <h4 class=" text-center"> Kirish <br> {{ $time['data']['timings']['Asr'] }}</h4>
                        <h4 class=" text-center"> Chiqish <br> {{ $time['data']['timings']['Sunset'] }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col position-relative"
                    style="background-image: url('{{ asset('image/pray/shom.webp') }}');">
                    <img class="card-img d-none" src="{{ asset('image/pray/shom.webp') }}" alt="Sunrise image">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center ">
                        <h2 class="text-centr">Shom Nomozi </h2>
                        <h4 class=" text-center"> Kirish <br> {{ $time['data']['timings']['Sunset'] }}</h4>
                        <h4 class=" text-center"> Chiqish <br> {{ $time['data']['timings']['Isha'] }}</h4>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col position-relative"
                    style="background-image: url('{{ asset('image/pray/xufton.jpeg') }}');">
                    <img class="card-img d-none" src="{{ asset('image/pray/xufton.jpeg') }}" alt="Sunrise image">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center ">
                        <h2 class="text-centr">Xufton Nomozi</h2>
                        <h4 class=" text-center"> Kirish <br> {{ $time['data']['timings']['Isha'] }}</h4>
                        <h4 class=" text-center"> Chiqish <br> {{ $time['data']['timings']['Imsak'] }}</h4>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-dark card-has-bg click-col position-relative"
                    style="background-image: url('{{ asset('image/pray/night.webp') }}');">
                    <img class="card-img d-none" src="{{ asset('image/pray/night.webp') }}" alt="Sunrise image">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center ">
                        <h2 class="text-centr">Tun</h2>
                        <h4 class=" text-center"> Boshlanishi <br> {{ $time['data']['timings']['Firstthird'] }}</h4>
                        <h4 class=" text-center"> Yarim Kecha <br> {{ $time['data']['timings']['Midnight'] }}</h4>
                        <h4 class=" text-center"> Tun chiqishi <br> {{ $time['data']['timings']['Lastthird'] }}</h4>
                        {{-- <p class="text-dark text-bold" > Tun Boshlanishi {{$time['data']['timings']['Firstthird']}} <br>
                                Yarim tun  {{$time['data']['timings']['Midnight']}} <br>
                                Tun tugashi  {{$time['data']['timings']['Lastthird']}} <br>
                               </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
