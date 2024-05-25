@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 140px; margin-bottom:100px ">
        <h2 class="py-2">Yangi E'lon Joylang</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <form action="{{ route('announcements.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group pb-3">
                <label>E'lon nima haqida ? [Misol : mashina bor Sotiladi !]</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group  pb-3">
                <label>To'liqroq ma'lumot bering </label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group  pb-3">
                <label>Rasmi : [majburiy easm ] </label>
                <input type="file" name="photo" class="form-control">
            </div>
            <div class="form-check  pb-1">
                <input type="checkbox" name="is_active" class="form-check-input" value="1" checked>
                <label class="form-check-label">Hamma yuborilsinmi ?</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Yuborish !</button>
        </form>
    </div>
@endsection
