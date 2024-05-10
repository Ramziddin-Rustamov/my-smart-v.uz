<!-- resources/views/admins/create.blade.php -->
@extends('admin.admin_layout.app')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-12 col-md-10 offset-2">

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
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

        <h1>Yangi admin qo'shing </h1>
        
        <form action="{{ route('admins.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id "><strong>Foydalanuvchilar Ruyhati :</strong></label>
                <select name="user_id" id="user_id" class="form-control">
                    <option value="">Admin Tanlang</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->fist_name .' '. $user->last_name. ' ' . $user->father_name }}</option>
                    @endforeach
                </select>
            </div>
            
            {{-- <div class="form-group">
                <label for="quarter_id">Quarter:</label>
                <select name="quarter_id" id="quarter_id" class="form-control">
                    <option value="">Select Quarter</option>
                    @foreach($users as $user)
                        <option value="{{ $users->quarter->id }}">{{ $user->quarter->name }}</option>
                    @endforeach
                </select>
            </div> --}}
            
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>

        </div>
    </div>
 </div>
   
   
 
@endsection
