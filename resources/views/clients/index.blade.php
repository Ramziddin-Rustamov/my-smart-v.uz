@extends('layouts.app')
@section('title' ,'Bizga bildirilgan fikrlar')
@section('content')
   <!-- ======= Testimonials Section ======= -->
   <section class="pt-3" style="background-color: #eee;">
    <div class="pt-5 ">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8 mt-5">
          @if(count($clientviews))
          <div class="card ">
            <div class="card-header pt-3 ">Bizga bildirilgan fikrlar</div>
            <div class="card-body">
              @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif        

              <div class="row">
                @foreach ($clientviews as $view )

                <div class="col-12">
                  <div class="d-flex flex-start align-items-center">
                    <div>
                      <div class="d-flex">
                        <a href="{{route('people.show',['id'=>$view->user->id])}}">
                          <h6 class="fw-bold text-primary mb-1">{{$view->user->first_name .' ' . $view->user->last_name .' '. $view->user->father_name }}</h6>
                        </a>
                      </div>
                      <p class="text-dark">
                          {{ $view->clientView }}
                      </p>
                      <p class=" text-start text-info pb-4">
                        Sanasi {{ $view->created_at->format('d-m-y') }}
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach
                <div class="text-end">
                  {{$clientviews->links()}}
                </div>
              </div>
             
            </div>
          </div>
          @else
          <h4 style="padding-bottom:400px" class="text-center ">Hali fikrlar joylanmagan</h4>
        @endif
        </div>
      </div>     
    </div>
    <div style="padding-bottom: 120px" >
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8 pt-2">
          <div class="card ">
                  <form action="{{route('client.view.store')}}" method="POST" class=" form-control">
                    @csrf
                     <div data-mdb-input-init class="form-outline w-100">
                    <textarea class="form-control my-2" id="textAreaExample" rows="4" name="clientView" style="background: #fff;"></textarea>
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm">{{ __('Fikr Qoldirish') }}</button>
                  </div>
                  </form>
        </div>
      </div>
       
    </div>
  </section>
  
  <!-- End Testimonials Section -->
  @endsection
 