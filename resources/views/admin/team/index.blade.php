@extends('admin.admin_layout.app')

@section('title', 'Dukonchilar ruyxati ..')

@section('content')
    <h1 class="text-center">Ishchi Jamoa</h1>
    <div class="row justify-content-center">
        

        <div class="container">
            <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                
                <div class="card-body pb-0">
                    <div class="col-8 offset-3">
                        <div class="text-center">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <div class="text-end pb-2">
                            <div>
                                <a class="btn btn-outline-primary" href="{{route('admin.team.create')}}">Yangisini qo'shsih</a>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">T/r</th>
                                    <th scope="col">Rasmi</th>
                                    <th scope="col">Ism familiya </th>
                                    <th scope="col">Amal</th>
                                </tr>
                            </thead>
                            @if(!$teamMembers->isEmpty())
                            <tbody>
                                @foreach ($teamMembers as $teamMember)
                                    <tr>
                                        <th scope="col">{{  ($loop->index+1 )}}</th>
                                        <th scope="row">
                                            <a href="{{ asset($teamMember->user->image) }}">
                                                <img style="width: 81px;height: 70px; object-fit: cover;"
                                                    src="{{ asset($teamMember->user->image) }}" alt="Post image">
                                            </a>
                                        </th>
                                        <td>
                                            <a href="{{ route('admin.shop-owners.show',$teamMember->id) }}"
                                                class="text-primary fw-bold">{{ $teamMember->user->first_name .'  '.$teamMember->user->last_name}}</a>
                                        </td>
                                        <td>
                                            <div class="d-md-flex">
                                              
                                            <form action="{{ route('admin.team.update', ['id' => $teamMember->user->id]) }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <!-- Your form fields for updating the team member -->
                                                <button type="submit" 
                                                 onclick="return confirm('Haqiqatdan ham jamoa safidan chiqarmoqchimsiz ?')"
                                                  class="btn btn-primary">Jamao safidan chiqorish </button>
                                            </form>
                                                        
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            @else
                                <h3 class="text-center text-danger">Hali Jamoa A'zolari Yo'q !</h3>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
