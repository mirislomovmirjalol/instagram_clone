@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row offset-lg-2">
            <div class="col-sm-3 col-lg-3 p-5 ">
                <img
                    src="{{ $user->profile->profileImage() }}"
                    alt="" class="rounded-circle w-100" srcset="">
            </div>
            <div class="col-sm-9 col-lg-6 pt-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>
                        {{ $user->username }}
                    </h2>

                    @if ($authUser!=$user->id)
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endif
                    @can('update', $user->profile)
                        <a class="btn btn-primary px-4" href="/profile/{{ $user->id }}/edit">
                            Edit
                        </a>
                    @endcan
                </div>

                <div class="d-flex justify-content-between">
                    <div class=""><strong>{{ $postCount }}</strong> Posts</div>
                    <div class=""><strong>{{ $followersCount }}</strong> Followers</div>
                    <div class=""><strong>{{ $followingCount }}</strong> Following</div>
                </div>
                <div class="pt-4 font-weight-bold">
                    {{ $user->profile->title }}
                </div>
                <div>
                    {{ $user->profile->description }}
                </div>
                <div>
                    <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
                </div>
                <hr>
            </div>
            @can('update', $user->profile)
                <div class="col-lg-12 d-flex justify-content-center">
                    <a class="btn btn-primary px-4" href="{{ url('p/create') }}">
                        Add
                    </a>
                </div>
            @endcan
        </div>

        <div class="row pt-4">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="{{ url('p', $post->id) }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection
