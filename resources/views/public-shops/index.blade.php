@extends('layouts.app')

@section('title', 'Barcha do\'konlar')
@section('content')
<!-- Team 1 - Bootstrap Brain Component -->
<section class="bg-light py-3  py-md-5 py-xl-8" style="margin-top:90px">
    {{-- <div class="container">
      <div class="row  justify-content-around">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h5 class="mb-4  text-center">Sizning  Dukoninlaringiz Ruyxati </h5>
          <p class="text-secondary mb-5 text-center lead fs-4"></p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div> --}}

    <div class="container overflow-hidden">
           <div class="row">
            <div class="col py-2">
                <h3 class="text-start">Mahalladagi  Do'konlar </h3>
            </div>
            <div class="col py-2 text-end">
               <a  class="btn btn-info" href="{{route('public.shops.products')}}">
                Maxsulotlarni solishtiring
               </a>
            </div>
           </div>
        <div class="row">
          @if (!$shops->isEmpty())
            @foreach ($shops as $shop)
            <div class="col-12 col-md-4 col-lg-4  my-2 py-2">
                    <a href="{{route('public.shops.products.index',['id'=>$shop->id])}}">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                      <div class="card-body p-md-3">
                        <figure class="m-0 p-0">
                          <img class="img-fluid" loading="lazy" src="{{asset($shop->image)}}" alt="Flora Nyra">
                          <figcaption class="m-0 p-4">
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-1">{{$shop->name}}</h4>
                                </div> 
                            </div>
                            <p class="text-secondary mb-0"> <i class="fas fa-location"></i>Manzili: {{$shop->address}}</p>
                            <p class="text-secondary mb-0"><i class="fas fa-door-open"></i>  Ochilgan sana:
                                {{substr($shop->opened_date, 0, 4) }}</p>
                            <div class="row ">
                              <div class="col">
                                Tegishli: {{$shop->user->first_name .' '. $shop->user->last_name}}ga
                              </div>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                    </a>
                  </div>    
            @endforeach
          @else
          <div class="vh-100">
              <h4 class="text-center ">Siz hali dukon qo'shmagansiz !</h4>
          </div>
          @endif
       </div>
    </div>
  </section>
@endsection
