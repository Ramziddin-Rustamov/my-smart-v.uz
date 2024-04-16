@extends('admin.admin_layout.app')
@section('title' , 'Create Post')
@section('content')
  <h1 class="text-center">Create New post</h1>

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
              <a href="{{ route('posts.index') }}" class="btn btn-danger mb-1">Back</a>
            </div>
            <form method="post" action="{{ route('posts.create') }}" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
              @csrf
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label"> Sarlovha </label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="validationCustom01" name="title" value="{{ old('title') }}" required>
                <div class="valid-feedback">
                  Yaxshi!
                </div>
              </div>
                @error('title')
                  <div class="text-start">
                      {{ $message }}
                  </div>
                @enderror
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="validationCustomUsername" class="form-label">Matn qilsmi</label>
                  <textarea class="form-control @error('body') is-invalid @enderror" id="validationTextarea" name="body" rows="10" cols="10"  value="{{ old('body') }}" placeholder="Matn qimsmi " required></textarea>
                  <div class="invalid-feedback">
                    Please enter a message in the textarea.
                  </div>
              </div>
              </div>

              <div class="col-md-12">
                <div class="mb-3">
                  <input type="file" class="form-control" name="image" aria-label="file example" >
                  <div class="invalid-feedback @error('image') is-invalid @enderror">Rasm yuklash majburiy </div>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit">Create new Post</button>
              </div>
            </form>
          </div>
      </div>
  </div>
@endsection
