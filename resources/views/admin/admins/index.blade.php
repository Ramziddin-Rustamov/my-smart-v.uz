<!-- resources/views/admins/index.blade.php -->
@extends('admin.admin_layout.app')

@section('content')

   <div class="container">
      <div class="row">
        
         <div class="col-12 col-md-8 offset-md-2">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
            @endif
            <a href="{{route('admins.create')}}" class="btn btn-info">Yangi admin belgilang </a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Ismi & Familiyasi </th>
                        <th>Mahalla Admini </th>
                        <th>Holati </th>
                        <th>Holatini o'zgartiring  </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{ $admin->user->first_name }}  {{ $admin->user->last_name }}</td>
                            <td>{{$admin->quarter->name}}</td>
                            <td>
                                @if(!$admin->is_active)
                                <strong class="text-danger">Aktive emas</strong>
                                @else
                                <strong class="text-primary">Aktive</strong>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admins.update', $admin->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="active">Holati </label>
                                        <select name="is_active" id="is_active" class="form-control">
                                            <option value="1" {{ $admin->active == 1 ? 'selected' : '' }}>Aktivlashtirish</option>
                                            <option value="0" {{ $admin->active == 0 ? 'selected' : '' }}>Huquqni vaqtincha olib tashlang</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary my-2">Update</button>
                                </form>
                            </td>
                            <td>
                                {{-- <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-info">View</a> --}}
                                <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
