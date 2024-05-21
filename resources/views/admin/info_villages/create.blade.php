@extends('admin.admin_layout.app')

@section('title', 'Yaratish ..')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Info Village</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('info_villages.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control-file" name="image" id="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="number">Number:</label>
                            <input type="number" class="form-control" name="number" id="number" value="{{ old('number') }}">
                            @error('number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="territory">Territory:</label>
                            <input type="text" class="form-control" name="territory" id="territory" value="{{ old('territory') }}">
                            @error('territory')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="workers_count">Workers Count:</label>
                            <input type="number" class="form-control" name="workers_count" id="workers_count" value="{{ old('workers_count') }}">
                            @error('workers_count')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="rooms">Rooms:</label>
                            <input type="number" class="form-control" name="rooms" id="rooms" value="{{ old('rooms') }}">
                            @error('rooms')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="condition">Condition:</label>
                            <input type="text" class="form-control" name="condition" id="condition" value="{{ old('condition') }}">
                            @error('condition')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="about">About:</label>
                            <textarea class="form-control" name="about" id="about">{{ old('about') }}</textarea>
                            @error('about')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="customers">Customers:</label>
                            <input type="number" class="form-control" name="customers" id="customers" value="{{ old('customers') }}">
                            @error('customers')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create Info Village</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection