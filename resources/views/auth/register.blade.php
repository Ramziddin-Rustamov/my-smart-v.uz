@extends('layouts.app')
@section('title','Register now')

@section('content')
<div class="container pb-5"style="padding-top:80px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ro\'yatdan o\'tish formasi') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- for register google account --}}
                        {{-- <div class="row mb-3">
                        <label for="google" class="col-md-4 col-form-label text-md-end">{{ __('Google') }}</label>

                        <div class="col-md-6">
                            <a id="google" class="form-control btn btn-danger" href="{{ route('login.google') }}">Register By Google <i class="fa fa-google"></i></a>

                            @error('google')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                        {{-- for register Facebbok account --}}
                        {{-- <div class="row mb-3">
                        <label for="Facebbok" class="col-md-4 col-form-label text-md-end">{{ __('Facebbok') }}</label>

                        <div class="col-md-6">
                            <a id="Facebbok" class="form-control btn btn-primary" href="{{ route('login.facebook') }}">Register By Facebook <i class="fa fa-facebook"></i></a>

                            @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                        {{-- for register facebook account --}}
                        {{-- <div class="row mb-3">
                        <label for="Git Hub" class="col-md-4 col-form-label text-md-end">{{ __('Git Hub') }}</label>

                        <div class="col-md-6">
                            <a id="Git Hub"  class="form-control btn btn-dark" href="{{ route('login.github') }}">Register By Git Hub <i class="fa fa-github fa-1g"></i></a>

                            @error('Git Hub')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}

                    {{-- <h5 class="text-center offset-md-2 font-weight-bold"><i class="fa fa-upper "></i> OR </h5> --}}


                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('Ismingiz ?') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Ism" id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Familyangiz ?') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Familiya" id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="father_name" class="col-md-4 col-form-label text-md-end">{{ __('Otangizni ismi ?') }}</label>

                            <div class="col-md-6">
                                <input placeholder="" id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{ old('father_name') }}" required autocomplete="father_name" autofocus>

                                @error('father_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Pochta') }}</label>

                            <div class="col-md-6">
                                <input placeholder="email pochta manzilingiz " id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Telefon nomer') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="+998 99 123 45 67" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthday" class="col-md-4 col-form-label text-md-end">{{ __('Tug\'ilgan kun') }}</label>

                            <div class="col-md-6">
                                <input id="birthday" placeholder="Tug'ilgan kuningiz ?" type="date"  class="form-control @error('birthday') is-invalid @enderror" name="birthday"  required autocomplete="birthday" autofocus>

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Parol') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Parol" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Parolni Tasdiqlang ') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Parolni qaytadan tering" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ro\'yxatdan o\'tish') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
