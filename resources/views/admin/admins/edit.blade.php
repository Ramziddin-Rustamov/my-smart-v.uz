<!-- resources/views/admins/edit.blade.php -->
@extends('admin.admin_layout.app')

@section('content')
    <h1>Edit Admin</h1>

    <form action="{{ route('admins.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $admin->user_id }}">
        </div>
        <div class="form-group">
            <label for="quarter_id">Quarter ID:</label>
            <input type="text" name="quarter_id" id="quarter_id" class="form-control" value="{{ $admin->quarter_id }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
