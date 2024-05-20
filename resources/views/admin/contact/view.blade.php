@extends('admin.admin_layout.app')
@section('title', ' Contacted Users')
@section('content')
 <div class="container py-5">
     <div class="row">
         <div class="col-11 offset-1">
            <h3 class="text-start">Foydalanuvchi</h3><hr>
           
            <h3 class="text-start">Ismi</h3>
            <p class="text-start">{{ $contact->name }}</p>
         </div>
         <div class="col-11 offset-1">
            <h3 class="text-start">Xabari :</h3><hr>
            <p>{{ $contact->message }}</p><hr>
            <h3 class="text-start">Sababi :</h3><hr>
            <span class="text-start">
               {{ $contact->reason }}
            </span> <hr>
            <h3 class="text-start">Vaqti : </h3><hr>
            <span class="text-start">
                 {{ $contact->created_at }}
              </span> <hr>
            <h4 class="text-start">Hozirgacha qancha vaqt o'tdi  </h4><hr>
              <span class="text-start ">
                {{ $contact->created_at->diffForHumans() }}
             </span>
         </div>
         <a href="{{ route('admin.contact.index') }}" class="btn btn-danger mt-3">Orqaga </a>
     </div>
    </div>
@endsection