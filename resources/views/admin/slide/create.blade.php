@extends('admin.admin_layout.app')
@section('title','Create new slide')
@section('content')
  <div class="container">
      <div class="text-center text-danger">
        @if($errors->any())
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-item">{{ $error }}</li>
            @endforeach
        </ul>
       @endif
      </div>
      <div class="text-start">
        <form action="{{ route('slide.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="form-group col-md-12">
                <label for="inputEmail4">Rasmi </label>
                <input type="file" class="form-control" name="image" id="inputEmail4">
              </div>
              <div class="form-group col-md-12">
                <label for="inputPassword4">Sarlovha</label>
                <input type="text" name="title" class="form-control" id="inputPassword4">
              </div>
            </div>
           
            <div class="form-group">
              <label for="inputAddress2">Matn qismi  </label>
              <input type="text" name="body" class="form-control" id="inputAddress2">
            </div>
            <button type="submit" class="btn btn-primary my-2">Yaratish </button>
          </form>
      </div>
  </div>
@endsection