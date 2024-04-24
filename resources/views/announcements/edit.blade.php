@extends('layouts.app')

@section('content')
<div class="container pb-5" style="padding-top:120px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Taxrirlash </div>

                <div class="card-body">
                    <form action="{{ route('announcements.update', $announcement->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Nima Haqidan E'lon ?</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $announcement->name) }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Batafsilroq yozing:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $announcement->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="photo">Rasmi: [majburiy emas ]</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                            @if($announcement->photo)
                            <h4 class="my-3">Avvalgi Rasmi:</h3>           
                                    <img src="{{ asset($announcement->photo) }}" alt="{{ $announcement->name }}" style="max-width: 100px;">
                            @endif
                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="is_active">Status:</label>
                            <select class="form-control @error('is_active') is-invalid @enderror" id="is_active" name="is_active">
                                <option value="1" {{ old('is_active', $announcement->is_active) ? 'selected' : '' }}>Aktive qilish</option>
                                <option value="0" {{ !old('is_active', $announcement->is_active) ? 'selected' : '' }}>Ko'rinmas qilish !</option>
                            </select>
                            @error('is_active')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary my-2 ">Taxrirlash Yakunlash</button>
                        <a href="{{ route('announcements.index') }}" class="btn btn-secondary mx-2" >Orqaga </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
