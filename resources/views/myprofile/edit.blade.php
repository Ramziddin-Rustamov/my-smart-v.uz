@extends('layouts.app')
@section('title', 'My profile')
@section('content')

 <div class="container-xl px-4 mt-4" style="padding-top:125px;">
  <form method="post" action="{{ route('profile.update',['user'=> $user->id]) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">{{ __('Profile Picture') }}</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" style="width:190px;" src="{{ asset($user->image) }}" alt="{{ $user->name}}`image">

                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">{{ __('JPG or PNG no larger than 10 MB') }}</div>
                    <!-- Profile picture upload button-->
                    <div class="mb-3">
                        <label for="formFile" class="form-label">{{ __('Choose your new image If you want') }}</label>
                        <input class="form-control" type="file" id="image" name="image" value="{{ $user->image ?? old('image')}}">
                      </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header ">{{ __('Account Details') }}</div>
                <div class="card-body">

                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">{{ __('Name') }}</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="inputUsername" type="text" name="name" placeholder="Enter your username" value="{{ old('name') ?? $user->name  }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger" >
                                {{ $message }}
                            </div>
                        @enderror
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (instagram)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">{{ __('Instagram [ majburiy emas ]') }}</label>
                                <input class="form-control  @error('instagram') is-invalid @enderror" id="inputFirstName" type="text" name="instagram" placeholder="instagram hisobingiz bo'lsa kiriting " value="{{ old('instagram') ?? $user->instagram }}">
                            </div>
                            @error('instagram')
                            <div class="alert alert-danger" >
                                {{ $message }}
                            </div>
                           @enderror
                            <!-- Form Group (telegram)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="Telegram">{{ __('Telegram  [ username ] ') }}</label>
                                <input class="form-control @error('telegram') is-invalid @enderror" id="Telegram" type="text" name="telegram" placeholder="Telegram foydalanuvchi ismi" value="{{old('telegram') ?? $user->telegram }}">
                            </div>
                            @error('telegram')
                            <div class="alert alert-danger" >
                                {{ $message }}
                            </div>
                           @enderror
                            <!-- Form Group (phone)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="phone">{{ __('Telefon Raqam') }}</label>
                                <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" name="phone" placeholder="Telefon qamingiz ?" value="{{ old('phone') ?? $user->phone }}">
                            </div>
                            @error('phone')
                            <div class="alert alert-danger" >
                                {{ $message }}
                            </div>
                           @enderror
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group ()-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="job">{{ __('Kasbi') }}</label>
                                <input class="form-control @error('job') is-invalid @enderror" id="Job" type="text" name="job" placeholder="Kasbingiz ?" value="{{old('job') ?? $user->job }}">
                            </div>
                            @error('job')
                            <div class="alert alert-danger" >
                                {{ $message }}
                            </div>
                           @enderror
                            <!-- Form Group ()-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="job">{{ __('Manzili ') }}</label>
                                <input class="form-control @error('location') is-invalid @enderror" id="location" type="text" name="location" placeholder="Manzilingiz kiriting  " value="{{old('location') ?? $user->location }}">
                            </div>
                            @error('location')
                            <div class="alert alert-danger" >
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
                                <label class="small mb-1" for="about">{{ __('O`zingiz haqingizda qisqacha yozing !') }}</label>
                                <textarea class="form-control @error('about') is-invalid @enderror" id="about" name="about" placeholder="Biografiya " >{{ old('about') ?? $user->about }}</textarea>
                            </div>
                            @error('about')
                            <div class="alert alert-danger" >
                                {{ $message }}
                            </div>
                           @enderror
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">{{ __('O`zgarishlarni saqlang ') }}</button>
                        <a class="btn btn-danger" href="{{ route('profile.index') }}">{{ __('Orqaga qaytish') }}</a>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
