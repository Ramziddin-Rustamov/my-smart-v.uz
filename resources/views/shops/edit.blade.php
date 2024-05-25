@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Shop</h2>
        <form action="{{ route('shops.update', $shop->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $shop->name }}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $shop->address }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="opened_date" class="form-label">Opened Date</label>
                <input type="date" class="form-control" id="opened_date" name="opened_date"
                    value="{{ $shop->opened_date }}" required>
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <input type="number" class="form-control" id="user_id" name="user_id" value="{{ $shop->user_id }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $shop->phone }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Update Shop</button>
        </form>
    </div>
@endsection
