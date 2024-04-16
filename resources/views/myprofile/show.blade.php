@extends('layouts.app')
@section('title', 'Profile Public view')
@section('content')
<section class="vh-100" style="background-color: #798388;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-7 col-xl-5">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">
                            <div class="flex-shrink-0">
                                <a href="{{asset($user->image)}}" target="_blank">
                                    <img src="{{asset($user->image)}}" alt="Profile Image"
                                        class="img-fluid rounded-circle" style="max-width: 180px;">
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">{{ $user->first_name }}</h5>
                                <p class="mb-2 pb-1" style="color: #2b2a2a;">{{ $user->job }}</p>
                                <div class="d-flex justify-content-start align-items-center mb-2">
                                    @php
                                    // Assuming $user->birthday is a valid date string
                                    $birthday = new DateTime($user->profiles->birthday);
                                    $today = new DateTime();
                                    $age = $today->diff($birthday)->y;
                                    @endphp
                                    <div class="me-3">
                                        <p class="small text-muted mb-1">Yoshi</p>
                                        <p class="mb-0">{{ $age }}</p>
                                    </div>
                                    <div class="me-3">
                                        <p class="small text-muted mb-1">Azoligi</p>
                                        <p class="mb-0">{{ $user->created_at->diffForHumans() }}</p>
                                    </div>
                                    <div>
                                        <p class="small text-muted mb-1">Foaligi</p>
                                        <p class="mb-0">4.5</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-1">
                                    @if ($user->profiles->phone)
                                    <a href="tel:{{$user->profiles->phone}}" class="btn btn-primary me-1 flex-grow-1">Telefon
                                        qilish </a>
                                    @endif
                                    @if ($user->telegram)
                                    <a href="https://t.me/{{$user->profiles->telegram}}" class="btn btn-info me-1 flex-grow-1"
                                        target="_blank">Telegram</a>
                                    @endif
                                    @if ($user->instagram)
                                    <a href="https://instagram.com/{{$user->profiles->instagram}}"
                                        class="btn btn-info me-1 flex-grow-1" target="_blank"><i
                                            class="fa-brands fa-instagram"></i>
                                    </a>
                                    @endif
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
