@extends('admin.admin_layout.app')
@section('title' , 'Rasmlar ')
@section('content')

<h1 class="text-center">Rasm asosiy menu uchun</h1>
  <div class="text-center container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
  </div>
  <div class="container py-2">
    <div class="row">
      <div class="col-11 offset-1">
        <div class="table-responsive-sm table-responsive-md table-responsive-lg">
          <div class="card-body pb-0">
              <div class="text-end py-2">
                  <a href="{{ route('slide.create') }}" class="btn btn-primary"> Yangi rasm qo`shish   </a>
              </div>
  
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">T/r</th>
                    <th scope="col">Rasmi</th>
                    <th scope="col">Sarlovha</th>
                    <th scope="col">Yaratildi at</th>
                    <th scope="col">Harakatlar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($slides as $slide)
                    <tr>
                      <th scope="col">{{ $loop->index++}}</th>
                      <th scope="row"><a href="#"><img style="width: 81px;height: 70px; object-fit: cover;" src="{{ $slide->image }}" alt="image"></a></th>
                      <td><a href="#" class="text-primary fw-bold">{{ $slide->title }}</a></td>
                      <td>{{ $slide->created_at->diffForHumans() }}</td>
                      <td class="fw-bold">
                        <div class="d-md-flex">
                           <form action="{{ route('slide.delete',$slide->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                              <button type="submit" class="btn btn-danger my-md-2 mx-sm-2 my-xs-2"><i class="bi bi-trash"></i></button>
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