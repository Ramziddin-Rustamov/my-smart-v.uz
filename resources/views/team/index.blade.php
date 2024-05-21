@extends('layouts.app')

@section('title', 'Jamo Azolari ')
@section('content')
<!-- Team 1 - Bootstrap Brain Component -->
<section class="bg-light py-3  py-md-5 py-xl-8" style="margin-top:90px">

    <div class="container">
      <div class="row  justify-content-around">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center">Bizning Ishchi Jamoa</h2>
          <p class="text-secondary mb-5 text-center lead fs-4">Bizning Mangitobod Mahallamizda ishlab kelayotgan ishchi jamoamiz bilan tanishing !</p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>

    <div class="container overflow-hidden">
      <div class="row gy-4 gy-lg-0 gx-xxl-5">
        @if (is_null($teamMembers))
          @foreach ($teamMembers as $user )
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
              <div class="card-body p-0">
                <figure class="m-0 p-0">
                  <img class="img-fluid" loading="lazy" 
                  src="{{asset($user->image)}}" alt="Flora Nyra">
                  <figcaption class="m-0 p-4">
                    <h4 class="mb-1 text-info">{{ $user->first_name .' '. $user->last_name .' '.$user->father_name }}</h4>
                    <p class="text-secondary mb-0">{{ $user->profiles->job ?? ' Hozircha kasbi kiritilmagan' }}</p>
                    <div class="row">
                      <div class="col-12 py-2 d-flex justify-content-around">
                          @if($user->profiles && $user->profiles->instagram)
                              <a href="https://instagram.com/{{$user->profiles->instagram}}" class="btn btn-info me-1 flex-grow-1">
                                  <i class="fab fa-instagram"></i> Instagram
                              </a>
                          @endif
                          @if($user->profiles && $user->profiles->telegram)
                              <a href="https://t.me/{{$user->profiles->telegram}}" class="btn btn-info me-1 flex-grow-1">
                                  <i class="fab fa-telegram"></i> Telegram
                              </a>
                          @endif
                      </div>
                      <div class="col-12 py-2 d-flex justify-content-around">
                          @if($user->profiles && $user->profiles->whatsup)
                              <a href="https://wa.me/{{$user->profiles->whatsup}}" class="btn btn-primary me-1 flex-grow-1">
                                  <i class="fab fa-whatsapp"></i> WhatsApp
                              </a>
                          @endif
                          @if($user->profiles && $user->profiles->phone)
                              <a href="tel:{{$user->profiles->phone}}" class="btn btn-primary me-1 flex-grow-1">
                                  <i class="fas fa-phone"></i> Telefon 
                              </a>
                          @endif
                      </div>
                  </div>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
          @endforeach
        @else
         <div class="vh-100 pb-5">
           <h4 class="vh-100 text-center">Jamoa azolari qo'shilmagan.</h4>
         </div>
        @endif
    

      </div>
    </div>
  </section>
@endsection
