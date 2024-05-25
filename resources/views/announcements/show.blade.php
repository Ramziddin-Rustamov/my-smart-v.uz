@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Announcement Details</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" value="{{ $announcement->name }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" rows="4" readonly>{{ $announcement->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo:</label><br>
                            @if ($announcement->photo)
                                <img src="{{ asset('storage/' . $announcement->photo) }}" alt="{{ $announcement->name }}"
                                    style="max-width: 300px;">
                            @else
                                No photo available
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status:</label>
                            <input type="text" class="form-control" id="is_active"
                                value="{{ $announcement->is_active ? 'Active' : 'Inactive' }}" readonly>
                        </div>
                        <a href="{{ route('announcements.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
