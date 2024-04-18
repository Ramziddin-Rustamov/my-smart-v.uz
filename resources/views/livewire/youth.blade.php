<section style="background-color: #95bed394; padding-top:100px">
    <div class="container">
        <div class="row">
             <div class="col-12 ">
                <div class="py-2 ">
                    <input type="text" wire:model="name" class="form-control" placeholder="Ism orqali toping...">
                </div>
             </div>
            @if(count($youth))     
                @foreach($youth as $user)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-3" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <div class="d-flex text-black">
                                <div class="ms-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="flex-shrink-0">
                                                <a href="{{asset($user->image)}}">
                                                    <img src="{{asset($user->image)}}" alt="Generic placeholder image" class="img-fluid " style="width: 100%; border-radius: 10px;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 py-2">
                                            <div class="justify-content-between d-flex">
                                                <h5 class="mb-1">{{ $user->first_name .'  '. $user->last_name }}</h5>
                                            <h6 class="mb-1">{{ $user->father_name }}</h6>
                                            </div>
                                            <p class="mb-2 pb-1" style="color: #2b2a2a;">Kasbi: {{$user->profiles->job ?? 'Kasbi yo`q'}}</p>
                                        </div>

                                        
                                        
                                        <div class="col-12">
                                            @php
                                            $birthday = new DateTime($user->profiles->birthday);
                                            $today = new DateTime();
                                            $age = $today->diff($birthday)->y;
                                            @endphp
                                            <p class="small text-muted mb-1">Yoshi:  {{$age}}</p>
                                            <p class="small text-muted mb-1">Tug'ilgan: {{$user->profiles->birthday}}</p>
                                            <p class="small text-muted mb-1">Azoligi: {{ $user->created_at->diffForHumans() }}</p>
                                        </div>

                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                 Bog'lanish 
                                                </button>
                                              </h2>
                                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row " >
                                                        <div class="col-12 py-2 d-flex justify-content-around">
                                                            @if($user->profiles->instagram)
                                                            <a href="https://instagram.com/{{$user->profiles->instagram}}" class="btn btn-info me-1 flex-grow-1">
                                                                <i class="fab fa-instagram"></i> Instagram
                                                            </a>
                                                           @endif
                                                    
                                                            @if($user->profiles->telegram)
                                                                <a href="https://t.me/{{$user->profiles->telegram}}" class="btn btn-info me-1 flex-grow-1">
                                                                    <i class="fab fa-telegram"></i> Telegram
                                                                </a>
                                                            @endif
                                                        </div>
                                                        <div class="col-12 pb-2 d-flex justify-content-around">
                                                          
                                                                @if($user->profiles)
                                                                @if($user->profiles->whatsup)
                                                                <a href="https://wa.me/{{$user->profiles->whatsup}}" class="btn btn-primary me-1 flex-grow-1">
                                                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                                                </a>
                                                                @endif
                                                        
                                                                @if($user->profiles->phone)
                                                                    <a href="tel:{{$user->profiles->phone}}" class="btn btn-primary me-1 flex-grow-1">
                                                                        <i class="fas fa-phone"></i> Telefon 
                                                                    </a>
                                                                @endif
                                                         </div>   
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  O'zim haqimda 
                                                </button>
                                              </h2>
                                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                   
                                                        <p>{{$user->profiles->about ?? 'O`zi haqida ma`lumot hali joylamagan '}}</p>
                
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item">
                                              <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Manzili 
                                                </button>
                                              </h2>
                                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    @if($user->profiles->location)
                                                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($user->profiles->location ?? 'Manzilini Kiritmagan') }}" target="_blank">
                                                        {{$user->profiles->location }}
                                                    </a>   
                                                    @else
                                                    <p>Manzil kiritilmagan</p>
                                                    @endif
                                                </div>
                                              </div>
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
                <div  class="vh-100">
                    <h2 class="text-center ">Foydalanuvchi topilmadi !</h2>
                </div>
            @endif
        </div>
    </div>
</section>
