@extends('admin.admin_layout.app')
@section('title', 'Edit Post')
@section('content')
<h1 class="text-center">Edit post</h1>

<div class="container py-5">

  <div class="row justify-content-center">
       <div class="text-center">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
       </div>
      <div class="col-md-8">
        <div class="text-start border-bottom mb-3">
          <a href="{{ route('posts.index') }}" class="btn btn-danger mb-1">Back </a>
        </div>
        <form method="post" action="{{ route('posts.update',$post->id) }}" class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')
          <div class="col-md-6">
            <label for="validationCustom01" class="form-label"> Sarlovha </label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="validationCustom01" name="title" value="{{ old('title_uz') ?? $post->title}}" required>
            <div class="valid-feedback">
              Yaxshi !
            </div>
          </div>
            @error('title_uz')
              <div class="text-start">
                  {{ $message }}
              </div>
            @enderror


          <div class="col-md-6">
            <div class="mb-3">
              <label for="validationCustomUsernam" class="form-label">Matn Qismi </label>
              <textarea class="form-control @error('body_uz') is-invalid @enderror" id="validationTextarea" name="body" rows="6" cols="4"  placeholder="Body_uz" required> value="{{ old('body') ?? $post->body}}"</textarea>
              <div class="invalid-feedback">
               Xabarnoma
              </div>
          </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <input type="file" class="form-control" name="image" aria-label="file example" value="{{ old('image') ?? $post->image }}">
              <div class="invalid-feedback @error('image') is-invalid @enderror">Rasm yuklash majburiy </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Edit</button>
          </div>
        </form>
      </div>
  </div>
</div>
@endsection
