@extends('admin.admin_layout.app')

@section('title', 'Jamoa Azolarini qushish ')

@section('content')
     <div class="col-8 offset-3">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
        <h1>Yangi foydalanuvchi qo'shish</h1>

    <form method="POST" action="{{ route('admin.team.store') }}">
        @csrf
        <div class="form-group">
            <label for="user_id">Foydalanuvchini Tanlang </label>
            <select class="form-control" id="user_id" name="user_id">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->first_name .' '.$user->last_name .' '. $user->father_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary py-2 my-3">Qo'shish </button>
    </form>
     </div>
@endsection