@extends('layouts.app')

@section('content')
@section('title','Do\'kon qo\'shish')
<div class="container " style="padding:100px 0">
    <h2>Yangi Do'kon qo'shing </h2>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="{{ route('shops.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Dokon nomi: </label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Manzili: </label>
            <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" required>
        </div>
        <div class="mb-3">
            <label for="opened_date" class="form-label">Qachon ishga tushirilgan ?</label>
            <input type="date" class="form-control" id="opened_date" name="opened_date" value="{{old('opened_date')}}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Rasmi : [ 3 MG dan oshmasili kerak , yuklamasangiz ham bo'ldi ] </label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Ishchi telefon raqami: </label>
            <input type="text" class="form-control" id="phone" value="{{old('phone')}}" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Qo'shish </button>
        <a href="{{route('shops.index')}}" class="btn btn-danger">Orqaga qaytish </a>
    </form>
</div>
@endsection
