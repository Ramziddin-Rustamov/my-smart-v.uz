@extends('layouts.app')
@section('title', 'Profile Public view')
@section('content')
      <section class="vh-100" style="background-color: #798388;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-md-9 col-lg-7 col-xl-5">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                  <div class="d-flex text-black">
                    <div class="flex-shrink-0">
                      <a href="{{asset($user->image)}}">
                        <img src="{{asset($user->image)}}"
                        alt="Generic placeholder image" class="img-fluid"
                        style="width: 180px; border-radius: 10px;">
                      </a>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-1">{{ $user->name }}</h5>
                        </div>
                      @if($user->instagram)
                      <div class="col-md-6 text-end">
                        <a href="https://instagram.com/{{$user->instagram}}" class="btn btn-info me-1 flex-grow-1"><i class="fa-brands fa-instagram"></i>
                        </a>        
                      </div>
                      @endif
                      </div>
                      <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$user->job}}</p>
                      <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                        style="background-color: #efefef;">
                        <div>
                            @php
                            // Assuming $user->birthday is a valid date string
                            $birthday = new DateTime($user->birthday);
                            $today = new DateTime();
                            $age = $today->diff($birthday)->y;
                            @endphp
                          <p class="small text-muted mb-1">Yoshi</p>
                          <p class="mb-0">{{$age}}</p>
                        </div>
                        <div class="px-3">
                          <p class="small text-muted mb-1">Azoligi</p>
                          <p class="mb-0">{{ $user->created_at->diffForHumans() }}</p>

                        </div>
                        <div>
                          <p class="small text-muted mb-1">Foaligi</p>
                          <p class="mb-0">4.5</p>
                        </div>
                      </div>
                      <div class="d-flex pt-1">
                        <a href="tel:{{$user->phone}}" class="btn btn-primary me-1 flex-grow-1">Telefon qilish </a>
                        <a href="https://t.me/{{$user->telegram}}" class="btn btn-info me-1 flex-grow-1">Telegram</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
