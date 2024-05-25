@extends('layouts.app')
@section('title', 'Sizni ommaga ko\'rinishingiz')
@section('content')
    <section style="background-color: #95bed394; padding-top:100px">
        <div class="container">
            <div class="row">
                @if ($user)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card mb-3" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <div class="d-flex text-black">
                                    <div class="ms-3">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="flex-shrink-0">
                                                    <a href="{{ asset($user->image) ?? '' }}">
                                                        <img src="{{ asset($user->image) }}" alt="Profile Image"
                                                            class="img-fluid" style="border-radius: 10px;">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2">
                                                <div class="justify-content-between d-flex">
                                                    <h5 class="mb-1 text-info">
                                                        {{ $user->first_name . '  ' . $user->last_name }}</h5>

                                                    <h6 class="mb-1">{{ $user->father_name }}</h6>
                                                </div>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;">Kasbi:
                                                    {{ $user->profiles ? $user->profiles->job ?? 'Kasbi yo`q' : 'Kasbi yo`q' }}
                                                </p>
                                            </div>

                                            <div class="col-12">
                                                @php
                                                    $birthday = new DateTime($user->profiles->birthday);
                                                    $today = new DateTime();
                                                    $age = $today->diff($birthday)->y;
                                                @endphp
                                                <p class="small text-muted mb-1">Yoshi: {{ $age }}</p>
                                                <p class="small text-muted mb-1">Tug'ilgan:
                                                    {{ $user->profiles ? $user->profiles->birthday : 'Noma\'lum' }}</p>
                                                <p class="small text-muted mb-1">Azoligi:
                                                    {{ $user->created_at->diffForHumans() }}</p>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 py-2 d-flex justify-content-around">
                                                    @if ($user->profiles && $user->profiles->instagram)
                                                        <a href="https://instagram.com/{{ $user->profiles->instagram }}"
                                                            class="btn btn-info me-1 flex-grow-1">
                                                            <i class="fab fa-instagram"></i> Instagram
                                                        </a>
                                                    @endif
                                                    @if ($user->profiles && $user->profiles->telegram)
                                                        <a href="https://t.me/{{ $user->profiles->telegram }}"
                                                            class="btn btn-info me-1 flex-grow-1">
                                                            <i class="fab fa-telegram"></i> Telegram
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="col-12 py-2 d-flex justify-content-around">
                                                    @if ($user->profiles && $user->profiles->whatsup)
                                                        <a href="https://wa.me/{{ $user->profiles->whatsup }}"
                                                            class="btn btn-primary me-1 flex-grow-1">
                                                            <i class="fab fa-whatsapp"></i> WhatsApp
                                                        </a>
                                                    @endif
                                                    @if ($user->profiles && $user->profiles->phone)
                                                        <a href="tel:{{ $user->profiles->phone }}"
                                                            class="btn btn-primary me-1 flex-grow-1">
                                                            <i class="fas fa-phone"></i> Telefon
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
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card mb-3" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <h5 class="text-start">Foydalanuvchi haqida.</h5>
                                <div class="d-flex text-black">
                                    <p>{{ $user->profiles->about ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <h5 style="padding-bottom:400px" class="text-center text-info">Foydalanuvchi bor, lekin hali admin
                        tomonidan kimligi tasdiqlanmagan</h5>
                @endif

            </div>
        </div>
    </section>

    </section>
@endsection
