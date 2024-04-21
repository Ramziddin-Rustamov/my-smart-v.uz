@extends('layouts.app')

@section('title', 'Dukonlaringiz Ruyxati  ')
@section('content')
<!-- Team 1 - Bootstrap Brain Component -->
<section class="bg-light py-3  py-md-5 py-xl-8" style="margin-top:90px">
    <div class="container">
      <div class="row  justify-content-around">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h5 class="mb-4  text-center">Sizning  Dukoninlaringiz Ruyxati </h5>
          <p class="text-secondary mb-5 text-center lead fs-4"></p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>

    <div class="container overflow-hidden">
  
        <div class="row gy-4 gy-lg-0 gx-xxl-5">
          @if ($shops)
            @foreach ($shops as $shop)
           
                <div class="col-10 offset-1 col-md-6 col-lg-4">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                      <div class="card-body p-md-3">
                        <figure class="m-0 p-0">
                          <img class="img-fluid" loading="lazy" src="{{asset($shop->image)}}" alt="Flora Nyra">
                          <figcaption class="m-0 p-4">
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-1">{{$shop->name}}</h4>
                                </div>
                                <div class="col text-end">
                                    {{$shop->created_at}}
                                </div>
                            </div>
                            <p class="text-secondary mb-0">{{$shop->address}}</p>
                            <div class="row py-2 my-2">
                              <div class="col">
                                Tegishli: {{$shop->user->first_name .' '. $shop->user->last_name}}ga
                              </div>
                            </div>
                            <div class="row">
                                  
                            
                            <div class="col text-start">
                                <form action="{{ route('shops.destroy', $shop->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="col text-end">
                                <a href="" class="btn btn-primary">
                                    <i class="fas fa-cart-arrow-down"></i>
                                </a>
                            </div>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                  </div>
            @endforeach
            <div class="text-end">
                <a href="{{ route('shops.create') }}" class="btn btn-primary">Yangi dukon qo'ng </a>
              </div>
          @else
              <h4 class="text-center">Siz hali dukonlaringiz qo'shmagansiz !</h4>
          @endif
       </div>
    </div>
  </section>
@endsection
