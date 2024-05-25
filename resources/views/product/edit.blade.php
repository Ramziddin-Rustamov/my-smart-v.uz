@extends('layouts.app')

@section('content')
    <div class="container" style="padding:100px 0">
        <div class="row py-2 my-2">
            <div class="card-body">
                <div class="px-2">
                    <h5 class="card-title">Maxsulotni tahrirlash</h5>
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
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nomi</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $product->name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Narxi [misol uchun : 1000 sum]</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{ old('price', $product->price) }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Rasmni yuklang [majburiy emas, agar yangi rasmmni
                                yuklmasangiz oldingisini o'chirish uchun maydonni bo'sh qoldiring]</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="body" class="form-label">Maxsulot haqida... </label>
                            <textarea class="form-control" id="body" name="body">{{ old('body', $product->body) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Qancha bor ? [ majburiy emas ]</label>
                            <input type="text" class="form-control" id="quantity" name="quantity"
                                value="{{ old('quantity', $product->quantity) }}">
                        </div>
                        <button type="submit" class="btn btn-primary px-2 py-2">Saqlash</button>
                        <a href="{{ route('products.index') }}" class="btn btn-danger px-2 py-2">Bekor qilish</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
