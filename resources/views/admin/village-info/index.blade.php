<!-- resources/views/village_infos/index.blade.php -->

@extends('admin.admin_layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header">
                      @if(!$villageInfo)
                      <a href="{{ route('village_infos.create') }}" class="btn btn-sm btn-primary float-right">Ma'lumotlarni qo'shish </a>
                      @else

                      @endif
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>What Reasons</th>
                                    <th>Working Hours</th>
                                    <!-- Add more table headers as needed -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                  @if($villageInfo)
                                  <tr>
                                    <td>{{ $villageInfo->id}}</td>
                                    <td>{{ $villageInfo->what_reasons }}</td>
                                    <td>{{ $villageInfo->working_hours }}</td>
                                    <!-- Add more table cells for other fields -->
                                    <td>
                                        <a href="{{ route('village_infos.edit', $villageInfo->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('village_infos.destroy', $villageInfo->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                  @else
                                  <h4 class="text-center">Hozircha ma'lumot qo'shilmadi </h4>
                                  @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
