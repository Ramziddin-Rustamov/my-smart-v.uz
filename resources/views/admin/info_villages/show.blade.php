@extends('admin.admin_layout.app')
@section('title', 'Ko`rish ...')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Info Village Details</div>

                <div class="card-body">
                    <div class="mb-3">
                        <strong>Image:</strong>
                        @if($infoVillage->image)
                            <img src="{{ asset('storage/' . $infoVillage->image) }}" alt="Info Village Image" class="img-fluid">
                        @else
                            No image available
                        @endif
                    </div>
                    <div class="mb-3">
                        <strong>Number:</strong> {{ $infoVillage->number }}
                    </div>
                    <div class="mb-3">
                        <strong>Territory:</strong> {{ $infoVillage->territory }}
                    </div>
                    <div class="mb-3">
                        <strong>Workers Count:</strong> {{ $infoVillage->workers_count }}
                    </div>
                    <div class="mb-3">
                        <strong>Rooms:</strong> {{ $infoVillage->rooms }}
                    </div>
                    <div class="mb-3">
                        <strong>Condition:</strong> {{ $infoVillage->condition }}
                    </div>
                    <div class="mb-3">
                        <strong>About:</strong> {{ $infoVillage->about }}
                    </div>
                    <div class="mb-3">
                        <strong>Customers:</strong> {{ $infoVillage->customers }}
                    </div>
                    <a href="{{ route('info_villages.edit', $infoVillage->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('info_villages.destroy', $infoVillage->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection