@extends('admin.admin_layout.app')
@section('title', 'About user')
@section('content')
<section class="section about-section gray-bg" id="about">
    <div class="container">
        <!-- Back Button -->
        <a href="{{ url()->previous() }}" class="btn btn-primary mb-4">{{ _('Orqaga qaytish !') }}</a>

        <div class="row card-header">
            <div class="col-lg-6 card-body">
                <div class="about-text ">
                    <h3 class="dark-color">Foydalanuvchi haqida</h3>
                    <h1>{{$user->first_name . ' ' . $user->last_name . ' ' . $user->father_name}}</h1>
                    <h6 class="theme-color lead">
                    <p>
                       {{ $user->profiles->job ?? 'Foydalanuvchi kasbi kiritilmagan' }}
                    </p>
                    </h6>
                    <!-- About User Section -->
                    <p class="">{{ $user->profiles->about ?? 'Ma`lumot kiritilmagan !' }}</p>
                    <div class="row about-list ">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Azo bo'lgan</label>
                                <p>{{ $user->created_at ?? 'Ma`lumot kiritilmagan !' }}</p>
                            </div>
                            <div class="media">
                                <label>Tug'ilgan sana </label>
                                <p>{{ $user->profiles->birthday ?? 'Ma`lumot kiritilmagan !' }} Yil </p>
                            </div>
                            <div class="media">
                                <label>Telegram :</label>
                                <p>{{ $user->profiles->telegram ?? 'Telegrami yo`q' }}</p>
                            </div>
                            <div class="media">
                                <label>Uyi </label>
                                <p>{{ $user->profiles->location ?? 'Ma  ;umot yo`q' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>{{ $user->email ?? 'Ma`lumot kiritilmagan !' }}</p>
                            </div>
                            <div class="media">
                                <label>Telefon</label>
                                <p>{{ $user->profiles->phone ?? 'Ma`lumot kiritilmagan !' }}</p>
                            </div>
                            <div class="media">
                                <label>WhatsApp</label>
                                <p>{{ $user->profiles->whatsup ?? 'WhatsApp yo`q' }}</p>
                            </div>
                            <div class="media">
                                <label>Instagram</label>
                                <p>{{ $user->profiles->instagram ?? 'yo`q' }}</p>
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
