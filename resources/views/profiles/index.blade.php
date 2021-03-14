@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5 ">
                <img
                    src="https://instagram.fakx2-1.fna.fbcdn.net/v/t51.2885-19/s320x320/139593037_723089571744236_2777084567510606322_n.jpg?tp=1&_nc_ht=instagram.fakx2-1.fna.fbcdn.net&_nc_ohc=BG2aG7UNL1IAX-aUswr&oh=74a58c91c91dfd1b93483bee9fe2f65e&oe=60705369"
                    alt="" class="rounded-circle w-100" srcset="">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>
                        {{ $user->username }}
                    </h1>

                    @can('update', $user->profile)
                        <a href="{{ url('p/create') }}">
                            Add New Posts
                        </a>
                    @endcan

                </div>

                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">
                        Edit Profile
                    </a>
                @endcan

                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                    <div class="pr-5"><strong>1k</strong> Followers</div>
                    <div class="pr-5"><strong>212</strong> Following</div>
                </div>
                <div class="pt-4 font-weight-bold">
                    {{ $user->profile->title }}
                </div>
                <div>
                    {{ $user->profile->description }}
                </div>
                <div>
                    <a href="#">{{ $user->profile->url }}</a>
                </div>
            </div>
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
