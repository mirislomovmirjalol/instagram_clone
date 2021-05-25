@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-sm-12 col-md-10 offset-md-1">
                    <div class="d-flex align-items-center my-2">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100"
                                 style="max-width: 40px" alt="">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a class="text-dark" href="/profile/{{ $post->user->id }}">
                                    {{ $post->user->username }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="
                    {{ route('post.show',['post' => $post->id]) }}">
                        <img src="/storage/{{ $post->image }}" class="w-100" alt="">
                    </a>
                </div>
            </div>
            <div class="row pt-2 pb-4">
                <div class="col-lg-6 offset-lg-3 col-sm-12 col-md-10 offset-md-1">
                    <div>
                        <p>
                        <span class="font-weight-bold">
                            <a class="text-dark" href="/profile/{{ $post->user->id }}">
                                {{ $post->user->username }}
                            </a>
                        </span>
                            {{ $post->caption }}
                        </p>
                    </div>
                    <hr>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
