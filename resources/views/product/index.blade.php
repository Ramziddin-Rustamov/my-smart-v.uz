@extends('layouts.app')

@section('content')
    

    <div class="container" style="padding-top:100px;padding-bottom:250px">
     <div class="row py-2 my-2">
        <div class="col text-start">
            <h3 class="">Maxsulotlaringiz !</h3>
        </div>
        <div class="col text-end">
            <a href="{{route('shops.index')}}" class="btn btn-primary"> <i class="fas fa-shop"></i> </a>
            <a href="{{route('products.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i>  Maxsulot  </a>
        </div>
     </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text"><i class="fa-solid text-primary fa-money-bill"></i>  {{ $product->price }}</p>
                            <p class="card-text"> <i class="fas fa-shop text-primary"></i> {{ $product->shop->name }}</p>
                            <div class="d-grid gap-2">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
                                {{-- <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Edit</a> --}}
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Haqiqatdan ham o`chirmoqchimisiz ?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection
