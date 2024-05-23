@extends('admin.admin_layout.app')

@section('title', 'Barchasi')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Error Message -->
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                
                <div class="card-header">Info Villages</div>
                <img src="{{asset('assets/images/template/template.jpg')}}" alt="" class="img-fluid">
                
                <h4> 
                    <a href="{{route('info_villages.create')}}" class="btn btn-primary p-2 m-2">Yangi qo'shish</a>
                </h4>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Rasmi</th>
                                    <th scope="col">Mavjud</th>
                                    <th scope="col">Sarlavha</th>
                                    <th scope="col">Maydoni</th>
                                    <th scope="col">Ishchilari</th>
                                    <th scope="col">Xonalari</th>
                                    <th scope="col">Holati</th>
                                    <th scope="col">Mijolari</th>
                                    <th scope="col">Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($infoVillages as $infoVillage)
                                <tr>
                                    <td>
                                        <a href="{{asset($infoVillage->image)}}">
                                            <img src="{{asset($infoVillage->image)}}" class="img-fluid w-25" alt="">
                                        </a>
                                    </td>
                                    <td>{{ $infoVillage->number }} ta</td>
                                    <td>{{ $infoVillage->territory }}</td>
                                    <td>{{ $infoVillage->workers_count }}</td>
                                    <td>{{ $infoVillage->rooms }}</td>
                                    <td>{{ $infoVillage->condition }}</td>
                                    <td>{{ $infoVillage->customers }}</td>
                                    <td>
                                        <a href="{{ route('info_villages.show', $infoVillage->id) }}" class="btn btn-primary btn-sm mb-3">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('info_villages.edit', $infoVillage->id) }}" class="btn btn-secondary btn-sm">
                                            <i class="bi bi-pen"></i>
                                        </a>
                                        <form action="{{ route('info_villages.destroy', $infoVillage->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mt-2">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
