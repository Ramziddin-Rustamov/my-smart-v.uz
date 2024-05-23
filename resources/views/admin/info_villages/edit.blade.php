@extends('admin.admin_layout.app')

@section('title', 'Taxrirlash ...')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Info Village</div>

                <img src="{{asset('assets/images/template/template.jpg')}}" alt="" class=" img-fluid ">
                <div class="card-body">
                    <form method="POST" action="{{ route('info_villages.update', $infoVillage->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h4>Oldingi Rasmi </h4>
                        <a href="{{asset($infoVillage->image)}}">
                            <img src="{{asset($infoVillage->image)}}" class=" img-fluid w-25 " alt=""> 
                          </a>
                        <div class="form-group">
                            <label for="image">Rasmi:[o'zgartirish majburiy emas ]</label>
                            <input type="file" class="form-control" name="image" id="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="number">Mavjud:</label>
                            <input type="number" class="form-control" name="number" id="number" value="{{ old('number', $infoVillage->number) }}">
                            @error('number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Sarlovha</label>
                            <select class="form-control" name="title" id="title">
                                <option value="Maktab" {{ old('title') == 'Maktab' ? 'selected' : '' }}>Maktab</option>
                                <option value="Kollej" {{ old('title') == 'Kollej' ? 'selected' : '' }}>Kollej</option>
                                <option value="Shifoxona" {{ old('title') == 'Shifoxona' ? 'selected' : '' }}>Shifoxona</option>
                                <option value="Maktabgacha ta'lim" {{ old('title') == "Maktabgacha ta'lim" ? 'selected' : '' }}>Maktabgacha T'alim</option>
                                <option value="Masjid" {{ old('title') == 'Masjid' ? 'selected' : '' }}>Masjid</option>
                                <option value="Do`kon" {{ old('title') == 'Do`kon' ? 'selected' : '' }}>Do'kon</option>
                            </select>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        

                        <div class="form-group">
                            <label for="territory">Maydoni:</label>
                            <input type="text" class="form-control" name="territory" id="territory" value="{{ old('territory', $infoVillage->territory) }}">
                            @error('territory')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="workers_count">Ishchilari</label>
                            <input type="number" class="form-control" name="workers_count" id="workers_count" value="{{ old('workers_count', $infoVillage->workers_count) }}">
                            @error('workers_count')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="rooms">Xonalari:</label>
                            <input type="number" class="form-control" name="rooms" id="rooms" value="{{ old('rooms', $infoVillage->rooms) }}">
                            @error('rooms')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="condition">Holati:</label>
                            <input type="text" class="form-control" name="condition" id="condition" value="{{ old('condition', $infoVillage->condition) }}">
                            @error('condition')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="about">Biroz gap shu haqida [kamida 300 char max 340]:</label>
                            <textarea class="form-control" name="about" id="about">{{ old('about', $infoVillage->about) }}</textarea>
                            @error('about')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="customers">Mijozlari [bimor , o'quvchilari ]:</label>
                            <input type="number" class="form-control" name="customers" id="customers" value="{{ old('customers', $infoVillage->customers) }}">
                            @error('customers')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary my-2">Update Info Village</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection