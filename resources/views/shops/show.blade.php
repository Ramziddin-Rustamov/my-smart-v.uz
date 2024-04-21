@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Shop Details</h2>
    <div class="mb-3">
        <label class="fw-bold">ID:</label>
        <p>{{ $shop->id }}</p>
    </div>
    <div class="mb-3">
        <label class="fw-bold">Name:</label>
        <p>{{ $shop->name }}</p>
    </div>
    <div class="mb-3">
        <label class="fw-bold">Description:</label>
        <p>{{ $shop->description }}</p>
    </div>
    <a href="{{ route('shops.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
