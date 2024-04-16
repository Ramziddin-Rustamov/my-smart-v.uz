@extends('layouts.app')

@section('title', 'About user')

@section('content')
<section class="section about-section gray-bg" id="about">
    <div class="container">
        <!-- Back Button -->
        <a href="{{ url()->previous() }}" class="btn btn-primary mb-4">{{ _('Orqaga qaytish !') }}</a>

        <div class="row">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    
                    <div class="row about-list card">
                        <h3 class="dark-color card-header">Foydalanuvchi haqida</h3>
                    <h6 class="theme-color lead">
                        <h3>Kasbi </h3>
                    <h5 class="bold text-end">
                       {{ $user->profiles->job ?? 'Foydalanuvchi kasbi kiritilmagan' }}
                    </h5>
                    </h6>
                    <h3>Biosi </h3>
                    <p class="card-title">{{ $user->profiles->about }}</p>
                        <div class="col-md-6 card-body">
                            <div class="media">
                                <label>Birthday</label>
                                <p>{{ $user->birthday }}</p>
                            </div>
                            <div class="media">
                                <label>Tug'ilgan sana </label>
                                <p>{{ $user->profiles->birthday }} Yil </p>
                            </div>
                            <div class="media">
                                <label>Manzili :</label>
                                <p>{{ $user->profiles->location ?? 'No location yet' }}</p>
                            </div>
                            <div class="media">
                                <label>Uyi </label>
                                <p>{{ $user->profiles->address ?? 'No address yet' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>{{ $user->email }}</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>{{ $user->phone }}</p>
                            </div>
                            <div class="media">
                                <label>Skype</label>
                                <p>{{ $user->profiles->skype ?? 'No Skype yet' }}</p>
                            </div>
                            <div class="media">
                                <label>Freelance</label>
                                <p>{{ $user->profiles->freelance ?? 'Not available' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar card-body">
                    <img class="img-fluid img-thumbnail " src="{{ asset($user->image) }}" alt="{{ $user->first_name }} image">
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection
