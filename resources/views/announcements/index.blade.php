@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 140px;">
    <div class="row">
        <div class="col text-start">
            <h2 class="mb-4">Mening  E'lonlarim </h2>
        </div>
        <div class="col text-end">
            <a  class="btn btn-info" title="Siz bergan e`lon hamma
            joydalanuvchilarga  yuboriladi va hamma bundan xabar topadi "
             href="{{route('announcements.create')}}"> E'lon berish </a>
        </div>
    </div>

    @if($announcements->isEmpty())
        <div class="alert alert-info">
            Siz hali e'lon joylamadingiz.
        </div>
        <div style="height: 50vh">

        </div>
        
    @else
        <div class="row">
            @foreach($announcements as $announcement)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($announcement->photo) }}" class="card-img-top" alt="{{ $announcement->name }}">
                        <div class="card-body">
                            <h5 class="card-title"> <span class="text-info">E'lon beruvchi: <br></span>{{ $announcement->user->first_name }}</h5>
                            <h5 class="card-title"><span class="text-info">Sarlovhasi: <br></span>{{ $announcement->name }}</h5>

                            <p class="card-text"> <span class="text-info">Batafsil Ma'lumot:  <br></span> {{ $announcement->description }}</p>
                            <p class="card-text"><strong>Holati:</strong> {{ $announcement->is_active ? 'Aktiv holatda' : 'Hech kim ko`rgan emas ' }}</p>
                            <div class="btn-group" role="group">
                                <a href="{{ route('announcements.edit', $announcement->id) }}" class="btn btn-primary  mx-2"> <i class="fas fa-pen"></i> Taxrirlash</a>
                                <form action="{{ route('announcements.destroy', $announcement->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Haqiqatdan ham e`lonni o`chirasizmi ?')" class="btn btn-danger"><i class="fas fa-trash"></i> O'chirish</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
