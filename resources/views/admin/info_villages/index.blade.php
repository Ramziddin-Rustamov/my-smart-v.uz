@extends('admin.admin_layout.app')

@section('title', 'Barchasi')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Info Villages</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Number</th>
                                <th scope="col">Territory</th>
                                <th scope="col">Workers Count</th>
                                <th scope="col">Rooms</th>
                                <th scope="col">Condition</th>
                                <th scope="col">Customers</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($infoVillages as $infoVillage)
                            <tr>
                                <td>{{ $infoVillage->number }}</td>
                                <td>{{ $infoVillage->territory }}</td>
                                <td>{{ $infoVillage->workers_count }}</td>
                                <td>{{ $infoVillage->rooms }}</td>
                                <td>{{ $infoVillage->condition }}</td>
                                <td>{{ $infoVillage->customers }}</td>
                                <td>
                                    <a href="{{ route('info_villages.show', $infoVillage->id) }}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ route('info_villages.edit', $infoVillage->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="{{ route('info_villages.destroy', $infoVillage->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

@endsection