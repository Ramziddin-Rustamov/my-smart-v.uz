@extends('layouts.app')
@section('title', 'My profile')
@section('content')
<section style="background-color: #eee;" style="padding-top:160px">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
                <a href="{{ asset($user->image) }}">
                  <img class="img-account-profile rounded-circle mb-2" style="width: 102px; height: 100px; object-fit: cover" src="{{ asset($user->image) }}" alt="{{ $user->first_name }}`image">
                </a>
              <h5 class="my-3">{{ $user->first_name }}</h5>
              <p class="text-muted mb-1">{{ ($user->profiles->job ) ?? 'Kasbi kiritilmagan ' }}</p>
              <div class="d-flex justify-content-center mb-2">
                <a  class="btn btn-outline-info px-2 mx-2"  href="{{ route('profile.edit',['id' =>$user->id]) }}" title="Edit"><i class="fas fa-pen" ></i> Tarirlash</a>
                <a class="btn btn-outline-info" href="{{ route('profile.show',['id' =>$user->id]) }}" title="Public view"><i class="fas fa-eye" ></i> Ko'rinish </a>
              </div>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                 <div class="text-center py-2 my-2">
                    <i class="  py-2 text-center fas fa-globe fa-lg text-warning"></i>
                 </div> <hr>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-telegram fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">{{$user->profiles->telegram ?? 'Telegram haqida ma`lumot  yo`q'}}</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fab fa-whatsapp fa-lg" style="color: #333333;"></i>
                    <p class="mb-0">{{$user->profiles->whatsup ?? 'WhatsApp haqida ma`lumot  yo`q'}}</p>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <i class="fas fa-phone fa-lg" style="color: #333333;"></i>
                    <p class="mb-0">{{$user->profiles->phone ?? 'Telefon haqida ma`lumot  yo`q'}}</p>
                  </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">{{$user->profiles->instagram ?? 'Instagram yo`q'}}</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <h3 class="text-capitalize text-center py-2">
                  <i class="fas fa-user"></i> Ma'lumotlar
                </h3>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0"><i class="fas fa-user"></i> Ismi</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$user->first_name}}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0"><i class="fas fa-user-gear"></i> Otangizni Ismi</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$user->father_name}}</p>
                    </div>
                  </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0"><i class="fas fa-envelope"></i> Mail Pochta</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $user->email }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0"><i class="fas fa-phone"></i> Telefon raqami</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $user->profiles->phone ?? 'Telefon raqam yo\'q' }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0"><i class="fas fa-birthday-cake"></i> Tug'ilgan kuni</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $user->profiles->birthday ?? 'Ma\'lumot topilmadi' }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Manzili</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$user->profiles->location ?? 'Manzilingizni kiriting'}}</p>
                  </div>
                </div> <hr>
                <div class="row">
                      <h3  class="mb-2 text-center"><i class="fas fa-map-info"></i> Biografiya</h3> <br>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$user->profiles->about ?? 'O`zingiz haqingizda ma`lumot kiritmadingiz '}}</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>
@endsection
