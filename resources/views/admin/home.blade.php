@extends('admin.admin_layout.app')
@section('title','Dashboard')
@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-primary font-weight-bold text-start py-5 ">
                    <a style="color:#f35525" href="/">
                    <?PHP
                    $words = explode(' ', auth()->user()->quarter->name);
                    $firstWord = $words[0];
                    ?> 
                    {{$firstWord}}
                    <span style="text-info">{{$words[1]}}</span>
                    mahallasining Veb saytining <br> boshqaruv qismiga xush kelibsiz 
                </a>
            </h2>
        </div>
    </div>
</div>
@endsection
