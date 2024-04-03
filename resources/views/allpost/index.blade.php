@extends('layouts.app')
@section('title' ,'Yangiliklar ')
@section('content')
<div class="properties section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| O'chrashuvlar | Bajarilgan ishlar </h6>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($allposts->count())
                @foreach ($allposts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <a href="{{$post->image}}"><img src="{{$post->image}}" alt=""></a>
                            <span class="category">Yangilik </span>

                            <h6><i class="fas fa-calendar-check"></i>  {{ ''.$post->created_at->format('d-m-Y')}}</h6>
                            <h4>
                                <a href="{{ route('posts.findOne',$post->id) }}">
                                    {{ substr(strip_tags($post->title_uz), 0, 100) }}
                                    {{ strlen(strip_tags($post->title_uz)) > 55 ? "..." : "" }}
                                </a>
                            </h4>
                            <p>
                                {{ substr(strip_tags($post->body_uz), 0, 150) }}
                                {{ strlen(strip_tags($post->body_uz)) > 150 ? "....." : "" }}
                            </p>
                            <div class="main-button">
                                <a href="{{ route('posts.findOne',$post->id) }}">Ko'proq o'qish</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $allposts->links()}}
            @else
                <h6 class="text-center font-weight-bold">{{ __('Yangilik joylanmadi ') }}</h6><hr>
            @endif
        </div>
    </div>
</div>
<!-- End Blog Section -->
@endsection