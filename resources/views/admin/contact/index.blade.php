@extends('admin.admin_layout.app')
@section('title', ' Contacted Users')
@section('content')
<div class="container">
   <div class="row">
    <div class="col-11 offset-1">
      <div class="text-center">
        @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
          @endif
       </div>

       <table class="table table-hover table-primary responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ismi</th>
            <th scope="col">Telefon raqami</th>
            <th scope="col">Sababi</th>
            <th scope="col">Xabar matni</th>
            <th scope="col">Yuborilgan vaqti</th>
            <th scope="col">Amallar</th>
          </tr>
        </thead>
        <tbody>
          @if ($contacts->count())
          @foreach ($contacts as $contact)
          <tr>       
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $contact->name }}</td>
                <td>
                    <a href="tel:{{$contact->phone}}">
                        {{ $contact->phone }}
                    </a>
                </td>
                <td>{{ $contact->reason }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{ $contact->created_at->diffForHumans() }}</td>                
            <td>
                <a class="btn btn-primary" title="Learn more" href="{{ route('admin.contact.show',['id'=>$contact->id]) }}"><i class="bi bi-eye"></i></a>
                @can('super-admin')
                  <form method="POST" action="{{ route('admin.contact.delete',['id'=>$contact->id]) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger my-md-2 mx-sm-2 my-xs-2"><i class="bi bi-trash"></i></button>
                  </form>
                @endcan
              </td>
          </tr>
          @endforeach
          @else
          <h4 class="text-center py-2">Hozircha hech qaysi fuqora murojat yullamadi !</h4>
          @endif
        </tbody>
      </table>
      {{ $contacts->links() }}

    </div>
   </div>
   </div>
@endsection