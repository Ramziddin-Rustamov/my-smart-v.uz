@extends('layouts.app')
@section('title', 'My profile')
@section('content')
 {{-- <div class="page-content page-container " id="page-content" style="padding-top:125px;">
    <div class="padding">
        <div class="row  d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <a href="{{ asset($user->image) }}">
                                    <img class="img-account-profile rounded-circle mb-2" style="width: 102px; height: 100px; object-fit: cover" src="{{ asset($user->image) }}" alt="{{ $user->name }}`image">
                                    </a>
                                </div>
                                <h6 class="f-w-600">{{ $user->name }}</h6>
                                <p>{{ ($user->job ) ?? 'No Job yet' }}</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">{{ __('Information') }}</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">{{ __('Email') }}</p>
                                        <h6 class="text-muted f-w-400">{{ $user->email  }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">{{ __('Phone') }}</p>
                                        <h6 class="text-muted f-w-400">{{ $user->phone ?? 'Update phone' }}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">{{ __('About') }}</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">{{ __('Profession') }}</p>
                                        <h6 class="text-muted f-w-400">{{ $user->job ??'Update job' }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">{{ __('Location') }}</p>
                                        <h6 class="text-muted f-w-400">{{ $user->location ?? 'Update location' }}</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a  title="linkedin" href="{{$user->linkedin }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="bi bi-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a title="telegram" href="{{ $user->telegram }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="bi bi-telegram" aria-hidden="true"></i></a></li>
                                        <li><a title="instagram" href="{{ $user->instagram }}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="bi bi-instagram" aria-hidden="true"></i></a></li>
                                        <li><a title="github" href="{{ $user->github }}"    data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="bi bi-github" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10" >
                                        <li><a  href="{{ route('profile.edit',['id' =>$user->id]) }}" title="Edit"><i class="bi bi-pen" ></i></a></li>
                                        <li><a href="{{ route('profile.show',['id' =>$user->id]) }}" title="Public view"><i class="bi bi-eye" ></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             @if ($user->about_uz ||$user->telegram ||$user->instagram ||$user->linkedin )
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-12">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">{{ __('About Yourself') }}</h6>
                                    <div class="row">
                                        @if ($user->about_uz)
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">{{ __('About yourself') }}</p>
                                            <h6 class="text-muted f-w-600"> {{ substr(strip_tags($user->about_uz), 0, 500) }}
                                                {{ strlen(strip_tags($user->about_uz)) > 50 ? ".." : "" }}</h6>

                                            <hr>
                                        </div>
                                        @endif
                                        @if ($user->telegram )
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">{{ __('Telegram Account') }}</p>
                                            <h6 class="text-muted f-w-400">{{ $user->telegram }}</h6>
                                        </div>
                                        @endif
                                        @if ($user->instagram)
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">{{ __('Instagram Account') }}</p>
                                            <h6 class="text-muted f-w-400">{{ $user->instagram }}</h6>
                                        </div>
                                        @endif
                                        @if ($user->linkedin)
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">{{ __('Linkedin') }}</p>
                                            <h6 class="text-muted f-w-400">{{ $user->linkedin }}</h6>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             @endif
        </div>
    </div>
</div> --}}
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
                <a href="{{ asset($user->image) }}">
                  <img class="img-account-profile rounded-circle mb-2" style="width: 102px; height: 100px; object-fit: cover" src="{{ asset($user->image) }}" alt="{{ $user->name }}`image">
                </a>
              <h5 class="my-3">{{ $user->name }}</h5>
              <p class="text-muted mb-1">{{ ($user->job ) ?? 'Kasbi kiritilmagan ' }}</p>
              {{-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> --}}
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
                  <p class="mb-0">{{$user->telegram ?? 'Telegram haqida ma`lumot  yo`q'}}</p>
                </li>
                {{-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li> --}}
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">{{$user->instagram ?? 'Instagram yo`q'}}</p>
                </li>
                {{-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li> --}}
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
                    <p class="text-muted mb-0">{{$user->name}}</p>
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
                    <p class="text-muted mb-0">{{ $user->phone ?? 'Telefon raqam yo\'q' }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0"><i class="fas fa-birthday-cake"></i> Tug'ilgan kuni</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ $user->birthday ?? 'Ma\'lumot topilmadi' }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Manzili</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{$user->location ?? 'Manzilingizni kiriting'}}</p>
                  </div>
                </div> <hr>
                <div class="row">
                      <h3  class="mb-2 text-center"><i class="fas fa-map-info"></i> Biografiya</h3> <br>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{$user->about ?? 'O`zingiz haqingizda ma`lumot kiritmadingiz '}}</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>
@endsection
