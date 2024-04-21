@extends('admin.admin_layout.app')

@section('title', 'Dukonchilar ruyxati ..')

@section('content')
    <h1 class="text-center">Dukon egalari</h1>
    <div class="row justify-content-center">
        

        <div class="container py-5">
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
                        <div class="text-end py-2">
                            <div>
                                <a class="btn btn-outline-primary" href="{{route('admin.shop-owners.create')}}">Yangisini qo'shsih</a>
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
                            <tbody>
                                @foreach ($shopOwners as $owner)
                                    <tr>
                                        <th scope="col">{{  ($loop->index+1 )}}</th>
                                        <th scope="row">
                                            <a href="{{ asset($owner->user->image) }}">
                                                <img style="width: 81px;height: 70px; object-fit: cover;"
                                                    src="{{ asset($owner->user->image) }}" alt="Post image">
                                            </a>
                                        </th>
                                        <td>
                                            <a href="{{ route('admin.shop-owners.show',$owner->id) }}"
                                                class="text-primary fw-bold">{{ $owner->user->first_name .'  '. $owner->user->last_name}}</a>
                                        </td>
                                        <td>
                                            <div class="d-md-flex">
                                                {{-- <a href="{{ route('admin.shop-owners.show',$owner->id) }}"
                                                    class="btn btn-primary my-md-2 mx-sm-2 my-xs-2 "><i
                                                        class="bi bi-eye"></i></a> --}}
                                                <form action="{{ route('admin.shop-owners.delete',['id'=>$owner->id]) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-danger my-md-2 mx-sm-2 my-xs-2"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                            </div>
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
@endsection
