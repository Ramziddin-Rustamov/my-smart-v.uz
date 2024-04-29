<section style="background-color: #95bed394; padding-top:100px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="text-info py-4">Odamlarning ismi yoki familyasi orqali izlang: </h4>
                <div class="py-2">
                    <input type="text" wire:model="name" class="form-control" placeholder="Shu yerga foydalanuvchini ismi yoki familyasini yozing...">
                </div>
            </div>
            <h4 class="text-start text-center my-4"> Barcha Aholimiz</h4>
            @if(!$users->isEmpty())
                @foreach($users as $user)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-3" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <div class="d-flex text-black">
                                <div class="ms-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="flex-shrink-0">
                                                <a href="{{asset($user->image)}}">
                                                    <img src="{{asset($user->image)}}" alt="Generic placeholder image" class="img-fluid" style="width: 100%; border-radius: 10px;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 py-2">
                                            <div class="justify-content-between d-flex">
                                                <a href="{{route('people.show',['id'=>$user->id])}}">
                                                <h5 class="mb-1 text-info">{{ $user->first_name .'  '. $user->last_name }}</h5>
                                                </a>
                                                <h6 class="mb-1">{{ $user->father_name }}</h6>
                                            </div>
                                            <p class="mb-2 pb-1" style="color: #2b2a2a;">Kasbi: {{$user->profiles->job ?? 'Kasbi yo`q'}}</p>
                                        </div>
                                        <div class="col-12">
                                            @php
                                            $birthday = new DateTime($user->profiles->birthday ?? '1999-11-22');
                                            $today = new DateTime();
                                            $age = $today->diff($birthday)->y;
                                        @endphp
                                        
                                            <p class="small text-muted mb-1">Yoshi:  {{$age}}</p>
                                            <p class="small text-muted mb-1">Tug'ilgan: {{$user->profiles->birthday ?? 'yo`q'}}</p>
                                            <p class="small text-muted mb-1">Azoligi: {{ $user->created_at->diffForHumans() }}</p>
                                        </div>
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
                                            <div class="col-12 pb-2 d-flex justify-content-around">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            <div class="col-12">
                <div class="vh-100">
                    <h2 class="text-center">Foydalanuvchi topilmadi!</h2>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
