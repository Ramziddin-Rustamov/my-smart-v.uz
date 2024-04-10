@extends('layouts.app')
@section('title','Ibodat vaqtlari ')
@section('content')
        <div class="container ">
                  <div class="row justify-content-center ">
                    <div class="col text-center mb-5 mt-5">
                       <h1 class="display-4 font-weight-bolder">Ibodat vaqtlari </h1>
                <p class="lead"> O'zbekiston | Samarqand | Urgut  , 10 - Aprel 2024 </p>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card text-dark card-has-bg click-col position-relative" style="background-image: url('{{ asset('image/pray/sunrise.jpeg') }}');">
                            <img class="card-img d-none" src="{{ asset('image/pray/sunrise.jpeg') }}" alt="Sunrise image">
                            <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                                <h2 class="text-white text-center">Fajr Prayer</h2>
                                <p class="text-white text-center font-weight-bold">5:00 AM</p>
                                <p class="text-white text-center font-weight-bold">April 10, 2024</p>
                            </div>
                        </div>
                    </div>
                    
                   <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image: url('{{ asset('image/pray/peshin.jpeg') }}');">
                       <img class="card-img d-none" src="{{asset('image/pray/peshin.jpeg')}}" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                      <div class="card-img-overlay d-flex flex-column">
                       <div class="card-body">
                          <small class="card-meta mb-2">Thought Leadership</small>
                          <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Creative Manner Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                         <small><i class="far fa-clock"></i> October 15, 2020</small>
                       </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image: url('{{ asset('image/pray/asr.webp') }}');">
                       <img class="card-img d-none" src="{{asset('image/pray/asr.webp')}}" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                      <div class="card-img-overlay d-flex flex-column">
                       <div class="card-body">
                          <small class="card-meta mb-2">Thought Leadership</small>
                          <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Design Studio Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                         <small><i class="far fa-clock"></i> October 15, 2020</small>
                        </div>
                        <div class="card-footer">
                         <div class="media">
                <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
                <div class="media-body">
                  <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                   <small>Director of UI/UX</small>
                </div>
              </div>
                        </div>
                      </div>
                    </div></div>
                 
                  <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image: url('{{ asset('image/pray/shom.webp') }}');">
                       <img class="card-img d-none" src="{{asset('image/pray/shom.webp')}}" alt=" Lorem Ipsum Sit Amet Consectetur dipisi?">
                      <div class="card-img-overlay d-flex flex-column">
                       <div class="card-body">
                          <small class="card-meta mb-2">Thought Leadership</small>
                          <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">UI/UX Design Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                         <small><i class="far fa-clock"></i> October 15, 2020</small>
                        </div>
                        <div class="card-footer">
                         <div class="media">
                <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
                <div class="media-body">
                  <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                   <small>Director of UI/UX</small>
                </div>
              </div>
                        </div>
                      </div>
                    </div></div>
                   <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image: url('{{ asset('image/pray/xufton.jpeg') }}');">
                       <img class="card-img d-none" src="{{asset('image/pray/xufton.jpeg')}}" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                      <div class="card-img-overlay d-flex flex-column">
                       <div class="card-body">
                          <small class="card-meta mb-2">Thought Leadership</small>
                          <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                         <small><i class="far fa-clock"></i> October 15, 2020</small>
                        </div>
                        <div class="card-footer">
                         <div class="media">
                <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
                <div class="media-body">
                  <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                   <small>Director of UI/UX</small>
                </div>
              </div>
                        </div>
                      </div>
                    </div>
                </div>
        </div>
        </div>
@endsection