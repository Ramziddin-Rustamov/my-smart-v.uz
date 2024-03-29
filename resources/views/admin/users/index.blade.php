@extends('admin.admin_layout.app')
@section('title' , 'Foydalanuvchilar')
@section('content')

<h1 class="text-center">Foydalanuvchilar Ruyxati </h1>
  <div class="text-center">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
  @endif
  </div>
  <div class="container py-5">
      <div class="table-responsive-sm table-responsive-md table-responsive-lg">
        <div class="card-body pb-0">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>T <br> R </th>
                  <th scope="col">Rasmi</th>
                  <th scope="col">Ismi</th>
                  <th scope="col">A`zo bo'lgan kun</th>
                  <th scope="col">Holati</th>
                  <th scope="col">Amalllar</th>
                  <th scope="col">Holatini <br> o'zgartirish </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <th scope="col">{{ ($users->currentpage()-1)*$users->perpage() + ($loop->index+1 )}}</th>
                    <th scope="row"><a href="{{ route('admin.user.show',$user->id) }}"><img style="width: 81px;height: 70px; object-fit: cover;" src="{{ asset($user->image) }}" alt="user image"></a></th>
                    <td><a href="{{ route('admin.user.show',$user->id) }}" class="text-primary fw-bold">{{ $user->name }}</a></td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td class="fw-bold">
                        @if($user->active_status == '1')
                         <p class="text-info border-3 p-2 bg-dark">Foal holatda </p>
                        @else
                         <p class="text-info border-3 p-2 bg-danger">Foal emas </p>
                        @endif
                    </td>
                    <td class="fw-bold">
                      <div class="d-md-flex">
                        @can('super-admin')
                        <a  href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-primary my-md-2 mx-sm-2 my-xs-2 "> <i class="bi bi-eye"></i></a>
                        @endcan
                        <form action="{{ route('admin.user.delete',['id'=>$user->id]) }}" method="POST">
                          @method('DELETE')
                          @csrf
                            <button type="submit" class="btn btn-danger my-md-2 mx-sm-2 my-xs-2"><i class="bi bi-trash"></i></button>
                         </form>
                      </div>
                    </td>
                    <td class="fw-bold">
                        <form action="{{ route('admin.user.update',['id'=>$user->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <select class="form-control" name="active_status">
                                <option class="form-control" value="1">Tasdiqlash</option>
                                <option class="form-control" value="0">Foalsizlantirish</option>
                            </select>
                            <button type="submit" class="btn btn-primary my-md-2 mx-sm-2 my-xs-2"><i class="bi bi-pen"></i> Tahrirlash</button>
                        </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <nav aria-label="Page navigation example">
              {{ $users->links() }}
            </nav>
          </div>
      </div>
        
  </div>
@endsection
