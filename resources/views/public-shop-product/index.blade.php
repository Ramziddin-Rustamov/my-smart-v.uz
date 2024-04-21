@extends('layouts.app')

@section('title','Barchar maxsulotlar !')
@section('content')
    

    <div class="container" style="padding-top:100px;padding-bottom:490px">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(!$products->isEmpty())
       <div class="col text-start">
        <h3 class="pb-3"> Maxsulotlar !</h3>
      </div>
        <div class="row">
         
           @foreach ($products as $product)
           <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $product->image }}" class="card-img-top img-fluid" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text"><i class="fa-solid text-primary fa-money-bill"></i> {{ $product->price }}</p>
                    <p class="card-text"><i class="fas fa-map text-primary"></i> {{ $product->shop->address }}</p>
                    <p class="card-text"><i class="fas fa-shop text-primary"></i> {{ $product->shop->name }}</p>
                    <h6>Maxsulot haqida</h6>
                    <div class="col">
                        <p>{{ strlen($product->body) > 100 ? substr($product->body, 0, 100) . '...' : $product->body }}</p>
                    </div>
                </div>
            </div>
        </div>

       @endforeach
          
        </div>
        @else
        <h4 class="h-100" style="padding-bottom: 210px">
            Bu dukonga hali maxsulot qo'shilmagan !
        </h4>
   @endif
    </div>
    
@endsection
