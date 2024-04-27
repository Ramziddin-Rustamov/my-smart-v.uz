@extends('layouts.app')

@section('content')
    

    <div class="container" style="padding-top:100px;padding-bottom:250px">
     <div class="row pt-3">
        <div class="col text-start">
            <h3 class="my-4">Maxsulotlaringiz !</h3>
        </div>
       
        <div class="col text-end">
            <a href="{{route('shops.index')}}" class="btn btn-primary"> <i class="fas fa-shop"></i> </a>
            <a href="{{route('products.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i>  Maxsulot  </a>
        </div>
        
     </div>
     
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($products->isEmpty())
      <h3 class="text-center"> Mahsulot hali qo'shilmagan </h3>
      <div>
        <div style="padding-bottom:270px"></div>
      </div>
    @else
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><i class="fa-solid text-primary fa-money-bill"></i>  {{ $product->price }}</p>
                        <p class="card-text"> <i class="fas fa-shop text-primary"></i> {{ $product->shop->name }}</p>
                        <p class="card-text"> <i class="fas fa-list text-primary"></i>  {{  $product->body }}</p>

                        <div class="d-grid gap-2">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Batafsil</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Taxrirlash </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Haqiqatdan ham o`chirmoqchimisiz ?')">O'chirish</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif
    </div>
    
@endsection
