@extends('layouts.app')

@section('title', 'Ko`proq ma`lumot ')

@section('content')
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog" style="padding-top:160px;">
        <div class="container" data-aos="fade-up">


            <div class="row">

                <div class="col-lg-12 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <a href="{{ asset($post->image) }}">
                                <img style="width: 100%;
                                     object-fit: cover;
                                     border-radius: 1%;"
                                    src="{{ asset($post->image) }}" alt="Postrasining rasm" class="img-fluid">
                            </a>
                        </div>

                        <h2 class="entry-title">
                            {{ $post->title }}
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                    <time>{{ $post->created_at }}</time>
                                </li>
                                <li class="d-flex align-items-center"><i class="fas fa-message"></i>
                                    {{ $post->comments->count() }}</li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {{ $post->body }}
                            </p>
                        </div>
                        @auth

                            <div class="entry-footer d-flex">
                                <i class="bi bi-like"></i>
                                {{-- for like --}}
                                @if (!$post->likedBy(auth()->user()))
                                    <form action="{{ route('posts.like', $post->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-outline-success" type="submit">
                                            <i class="fas fa-heart text-danger"></i></button>
                                    </form>
                                @else
                                    {{-- for dislike --}}
                                    <form action="{{ route('posts.like', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger ms-1" type="submit">O'chirish <i
                                                class="fa fa-heart ms-1"></i></button><span
                                            class="text-green ps-2 font-weight-bold">{{ $post->likes->count() }}{{ Str::plural('like', $post->likes->count()) }}</span>
                                    </form>
                                @endif
                            </div>
                        @endauth

                    </article><!-- End blog entry -->

                    {{-- starts comment form --}}
                    <div class="reply-form mt-4">
                        <h4 class="pb-2">{{ __('Izoh qoldirish') }}</h4>
                        <form method="POST" action="{{ route('posts.comments.store', ['post' => $post->id]) }}">
                            @csrf
                            @auth
                                <div class="d-flex align-items-start">

                                    <div class="flex-grow-1">
                                        <a href="{{ asset(Auth::user()->image) }}">
                                            <img class=" img-fluid img-thumbnail  " style="width: 55px;"
                                                src="{{ asset(Auth::user()->image) }}" alt="rasmingiz">
                                        </a>
                                        <h5 class="mb-0">{{ auth()->user()->first_name }}</h5>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <textarea rows="4" name="body" class="form-control mt-2" placeholder="{{ __('Izoh qoldiring') }}"></textarea>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary mt-2">
                                                {{ __('Izoh qoldirish') }}
                                            </button>
                                        </div>
                                    </div>
                                @endauth
                                @guest
                                    <p>{{ __('Izoh qoldirish uchun') }} <a
                                            href="{{ route('register') }}">{{ __('ro`yxatdan o`ting') }}</a> yoki </p>
                                    <p><a href="{{ route('login') }}">{{ __('tizimga kiring') }}</a> </p>
                                @endguest
                        </form>
                    </div>
                    {{-- Ends comment form --}}

                    <div class="blog-comments mt-4">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        @if ($post->comments->count())
                            <h4 class="comments-count">{{ $post->comments->count() }} | {{ __('Izohlar') }}</h4>
                            <hr>
                            @foreach ($post->comments as $comment)
                                <div id="comment-{{ $comment->id }}" class="comment mb-4">
                                    <div class="d-flex">
                                        <div class="comment-img me-3" style="width: 35px">
                                            <a href="{{ asset($comment->user->image) }}">
                                                <img class="img-account-profile rounded-circle mb-2"
                                                    src="{{ asset($comment->user->image) }}"
                                                    alt="{{ $comment->user->name }}`s rasmi">
                                            </a>
                                        </div>
                                        <div>
                                            <h5><a
                                                    href="{{ route('people.show', ['id' => $comment->user->id]) }}">{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</a>
                                            </h5>
                                            <time datetime="2020-01-01">{{ $comment->created_at }}</time>
                                            <p style="font-weight: bold; color: #333;">{{ $comment->body }}</p>
                                            @auth
                                                @if ($comment->ownedBy(Auth()->user()))
                                                    <form action="{{ route('comment.delete', ['postid' => $comment->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="mt-1 pt-1 btn  btn-outline-danger btn-sm">O`chirish</button>
                                                    </form>
                                                @endif
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h6 class="text-center">{{ __('Hozircha izohlar mavjud emas') }}</h6>
                            <hr />
                        @endif
                    </div><!-- End blog comments -->
                </div><!-- End blog entries list -->
            </div>

        </div>
    </section><!-- End Blog Single Section -->
@endsection
