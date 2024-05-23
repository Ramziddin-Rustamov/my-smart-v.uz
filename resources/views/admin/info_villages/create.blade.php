@extends('admin.admin_layout.app')

@section('title', 'Yaratish ..')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Info </div>

                <div class="card-body">
                <img src="{{asset('assets/images/template/template.jpg')}}" alt="" class=" img-fluid ">

                    <form method="POST" action="{{ route('info_villages.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="image">Rasmi :</label>
                            <input type="file" class="form-control" name="image" id="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title">Sarlovha</label>
                            <select class="form-control" name="title" id="title">
                                <option value="Maktab" {{ old('title') == 'Maktab' ? 'selected' : '' }}>Maktab</option>
                                <option value="Kollej" {{ old('title') == 'Kollej' ? 'selected' : '' }}>Kollej</option>
                                <option value="Shifoxona" {{ old('title') == 'Shifoxona' ? 'selected' : '' }}>Shifoxona</option>
                                <option value="Maktabgacha T\'alim" {{ old('title') == "Maktabgacha T'alim" ? 'selected' : '' }}>Maktabgacha T'alim</option>
                                <option value="Masjid" {{ old('title') == 'Masjid' ? 'selected' : '' }}>Masjid</option>
                            </select>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        


                        <div class="form-group">
                            <label for="number">Nechta bor ?</label>
                            <input type="number" class="form-control" name="number" id="number" value="{{ old('number') }}">
                            @error('number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="territory">Maydoni ?</label>
                            <input type="text" class="form-control" name="territory" id="territory" value="{{ old('territory') }}">
                            @error('territory')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="workers_count">Ishchilar soni ?</label>
                            <input type="number" class="form-control" name="workers_count" id="workers_count" value="{{ old('workers_count') }}">
                            @error('workers_count')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="rooms">Xonalar soni ?</label>
                            <input type="number" class="form-control" name="rooms" id="rooms" value="{{ old('rooms') }}">
                            @error('rooms')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="condition">Holati ?</label>
                            <input type="text" class="form-control" name="condition" id="condition" value="{{ old('condition') }}">
                            @error('condition')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="about">Ko'proq ma'lumott bering .</label>
                            <textarea class="form-control" name="about" id="about">{{ old('about') }}</textarea>
                            @error('about')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="customers">Nechta odam xizmatidan foydalanib chiqib ketdi ?</label>
                            <input type="number" class="form-control" name="customers" id="customers" value="{{ old('customers') }}">
                            @error('customers')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary my-2">Yaratish !</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection