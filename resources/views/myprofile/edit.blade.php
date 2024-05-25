@extends('layouts.app')
@section('title', 'Mening Ma`lumotlarim ')
@section('content')

    <div class="container-xl px-4 mt-4" style="padding-top:100px">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('profile.update', ['user' => $user->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">{{ __('Ramsingiz ') }}</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" style="width:190px;"
                                src="{{ asset($user->image) }}" alt="{{ $user->first_name }}`image">

                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">{{ __('Rasm 5 mg dan  oshmasligi kerak') }}</div>
                            <!-- Profile picture upload button-->
                            <div class="mb-3">
                                <label for="formFile"
                                    class="form-label">{{ __('Rasmingizni o`zgartirmoqchi bo`lsangiz yangi rasm tanlang  ') }}</label>
                                <input class="form-control" type="file" id="image" name="image"
                                    value="{{ $user->image ?? old('image') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header ">{{ __('Siz haqingizda batafsilroq ') }}</div>
                        <div class="card-body">

                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">{{ __('Ismingiz :') }}</label>
                                <input class="form-control @error('first_name') is-invalid @enderror" id="inputUsername"
                                    type="text" name="first_name" placeholder="Enter your username"
                                    value="{{ old('first_name') ?? $user->first_name }}">
                            </div>
                            @error('first_name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">{{ __('Familayngiz :') }}</label>
                                <input class="form-control @error('last_name') is-invalid @enderror" id="inputUsername"
                                    type="text" name="last_name" placeholder="Enter your username"
                                    value="{{ old('last_name') ?? $user->last_name }}">
                            </div>
                            @error('last_name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">{{ __('Otangizni ismi :') }}</label>
                                <input class="form-control @error('father_name') is-invalid @enderror" id="inputUsername"
                                    type="text" name="father_name" placeholder="Enter your username"
                                    value="{{ old('father_name') ?? $user->father_name }}">
                            </div>
                            @error('father_name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (instagram)-->
                                <div class="col-md-6">
                                    <label class="small mb-1"
                                        for="inputFirstName">{{ __('Instagramda foydalanuvchi ismi : [misol: tishavoy ]') }}</label>
                                    <input class="form-control  @error('instagram') is-invalid @enderror"
                                        id="inputFirstName" type="text" name="instagram"
                                        placeholder="instagram hisobingiz bo'lsa kiriting "
                                        value="{{ old('instagram') ?? $user->profiles->instagram }}">
                                </div>
                                @error('instagram')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <!-- Form Group (telegram)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="Telegram">{{ __('Telegram [misol: alijon ]') }}</label>
                                    <input class="form-control @error('telegram') is-invalid @enderror" id="Telegram"
                                        type="text" name="telegram" placeholder="Telegram foydalanuvchi ismi"
                                        value="{{ old('telegram') ?? $user->profiles->telegram }}">
                                </div>
                                @error('telegram')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="col-md-6">
                                    <label class="small mb-1"
                                        for="Telegram">{{ __('WhatsApp raqam : [misol : +998 99 777 77 77] ') }}</label>
                                    <input class="form-control @error('whatsup') is-invalid @enderror" id="Telegram"
                                        type="text" name="whatsup" placeholder="Whatsup foydalanuvchi ismi"
                                        value="{{ old('whatsup') ?? $user->profiles->whatsup }}">
                                </div>
                                @error('whatsup')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <!-- Form Group (phone)-->
                                <div class="col-md-12">
                                    <label class="small mb-1"
                                        for="phone">{{ __('Telefon Raqam : [misol: +998 99 777 77 77]') }}</label>
                                    <input class="form-control @error('phone') is-invalid @enderror" id="phone"
                                        type="text" name="phone" placeholder="Telefon raqamingiz ?"
                                        value="{{ old('phone') ?? $user->profiles->phone }}">
                                </div>
                                @error('phone')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group ()-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="job">{{ __('Kasbi :') }}</label>
                                    <input class="form-control @error('job') is-invalid @enderror" id="Job"
                                        type="text" name="job" placeholder="Kasbingiz ?"
                                        value="{{ old('job') ?? $user->profiles->job }}">
                                </div>
                                @error('job')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <!-- Form Group ()-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="job">{{ __('Manzil : ') }}</label>
                                    <input class="form-control @error('location') is-invalid @enderror" id="location"
                                        type="text" name="location" placeholder="Manzilingiz kiriting  "
                                        value="{{ old('location') ?? $user->profiles->location }}">
                                </div>
                                @error('location')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Form Group (email address)-->
                            {{-- <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">{{ __('Email address') }}</label>
                            <input class="form-control "  id="inputEmailAddress" type="email" name="email" placeholder="Enter your email address" value="{{ $user->email }}">
                        </div> --}}
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-12">
                                    <label class="small mb-1"
                                        for="about">{{ __('O`zingiz haqingizda qisqacha yozing !') }}</label>
                                    <textarea class="form-control @error('about') is-invalid @enderror" id="about" name="about"
                                        placeholder="Biografiya ">{{ old('about') ?? $user->profiles->about }}</textarea>
                                </div>
                                @error('about')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary m-sm-3 "
                                type="submit">{{ __('O`zgarishlarni saqlang ') }}</button>
                            <a class="btn btn-danger" href="{{ route('profile.index') }}">{{ __('Orqaga qaytish') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
