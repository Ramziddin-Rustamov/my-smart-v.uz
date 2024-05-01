@extends('layouts.app')

@section('content')
    <<div class="container" style="padding-top:100px">
        <div class="row py-2 my-2">
            <div class="card-body">
                <div class="px-2">
                    <h5 class="card-title">Yangi maxsulot qo'shish ! </h5>
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
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
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="shop_id">Qaysi dukonga </label>
                            <select class="form-control" id="shop_id" name="shop_id">
                                @foreach ($shops as $shop)
                                    <option value="{{ $shop->id }}" {{ old('shop_id', isset($product) ? $product->shop_id : '') == $shop->id ? 'selected' : '' }}>{{ $shop->name }}ga qo'shish</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nomi</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Narxi [misol uchun : 1000 sum]</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Rasmini yulang [ majburiy emas yuklamasangiz ham bo'ladi ]</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="body" class="form-label">Maxsulot haqida... </label>
                            <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Qancha bor ? [ majburiy emas ]</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
                        </div>
                        <button type="submit" class="btn btn-primary px-2 py-2">Qo`shish </button>
                        <a href="{{route('products.index')}}" class="btn btn-danger px-2 py-2 ">Orqaga </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
