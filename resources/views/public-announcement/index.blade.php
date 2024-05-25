@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 120px;">
        <div class="row">
            <div class="col text-start">
                <h2 class="mb-4">Barcha E'lonlar To'plami </h2>
            </div>
            <div class="col text-end">
                <a class="btn btn-info"
                    title="Siz bergan e`lon hamma
            joydalanuvchilarga  yuboriladi va hamma bundan xabar topadi "
                    href="{{ route('announcements.index') }}"> E'lon berish </a>
            </div>
        </div>

        @if ($announcements->isEmpty())
            <div class="alert alert-info ">
                Hali E'lon Joylanmangan
            </div>
            <div style="height: 50vh">
            </div>
        @else
            <div class="row">
                @foreach ($announcements as $announcement)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset($announcement->photo) }}" class="card-img-top"
                                alt="{{ $announcement->name }}">
                            <div class="card-body">
                                <h5 class="card-title"><span class="text-info my-1">E'lon bergan kishi:</span> <br>
                                    <a href="{{ route('people.show', ['id' => $announcement->user->id]) }}">
                                        {{ $announcement->user->first_name . ' ' . $announcement->user->last_name }}
                                    </a>
                                </h5>
                                <h5 class="card-title"><span class="text-info my-1">E'lon nomi: </span> <br>
                                    {{ $announcement->name }}</h5>
                                <p class="card-text">{{ $announcement->description }}</p>
                                <p class="card-text"><span class="text-info my-1 h5">Joylagan Sanasi:
                                        <br></span>{{ $announcement->created_at }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
