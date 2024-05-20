@extends('admin.admin_layout.app')

@section('title', 'Jamoa A`zolari Ruyxati')

@section('content')
    <div class="container">
        <h1 class="text-center">Ishchi Jamoa</h1>
        <div class="row justify-content-center">
            <div class="col-11 offset-1">
                <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                    <div class="text-center">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="text-end pb-2">
                        <div>
                            <a class="btn btn-info" href="{{ route('admin.team.create') }}">Yangisini qo'shsih</a>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        @if(!$teamMembers->isEmpty())
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">T/r</th>
                                        <th scope="col">Rasmi</th>
                                        <th scope="col">Ism familiya </th>
                                        <th scope="col">Amal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teamMembers as $teamMember)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <a href="{{ asset($teamMember->image) }}">
                                                    <img style="width: 81px;height: 70px; object-fit: cover;"
                                                        src="{{ asset($teamMember->image) }}" alt="Post image">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.shop-owners.show',$teamMember->id) }}"
                                                    class="text-primary fw-bold">{{ $teamMember->first_name .'  '.$teamMember->last_name}}</a>
                                            </td>
                                            <td>
                                                <div class="d-md-flex">
                                                    <form action="{{ route('admin.team.update', ['id' => $teamMember->id]) }}" method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <!-- Your form fields for updating the team member -->
                                                        <button type="submit" onclick="return confirm('Haqiqatdan ham jamoa safidan chiqarmoqchimsiz ?')" class="btn btn-danger">Jamaodan chiqarish </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h3 class="text-center text-danger">Hali Jamoa A'zolari Yo'q !</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
