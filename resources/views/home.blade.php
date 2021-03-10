@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 ">
            <img src="https://instagram.fakx2-1.fna.fbcdn.net/v/t51.2885-19/s320x320/139593037_723089571744236_2777084567510606322_n.jpg?tp=1&_nc_ht=instagram.fakx2-1.fna.fbcdn.net&_nc_ohc=BG2aG7UNL1IAX-aUswr&oh=74a58c91c91dfd1b93483bee9fe2f65e&oe=60705369" alt="" class="rounded-circle w-100" srcset="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>
                    {{ $user->username }}
                </h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>20</strong> Posts</div>
                <div class="pr-5"><strong>1k</strong> Followers</div>
                <div class="pr-5"><strong>212</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                Mirislomov Mirjalol
            </div>
            <div>
                💻Full Stack-Web Developer <br>
               💡UI Design Creator <br>
               🇺🇿Live in Uzbekistan <br>
               ☕️Coffee Lover <br>
            </div>
            <div>
                <a href="http://google.com">google.com</a>
            </div>
        </div>
    </div>
    
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fakx2-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/156683396_751884675719484_4389692242688092248_n.jpg?tp=1&_nc_ht=instagram.fakx2-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=DD1P2TPZPFsAX-4l5ev&oh=4a90a8d400b9e44779e0ab84e21263cf&oe=6071AB06" alt="" class="w-100" srcset="">
        </div>
        <div class="col-4">
            <img src="https://instagram.fakx2-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/156683396_751884675719484_4389692242688092248_n.jpg?tp=1&_nc_ht=instagram.fakx2-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=DD1P2TPZPFsAX-4l5ev&oh=4a90a8d400b9e44779e0ab84e21263cf&oe=6071AB06" alt="" class="w-100" srcset="">
        </div>
        <div class="col-4">
            <img src="https://instagram.fakx2-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/156683396_751884675719484_4389692242688092248_n.jpg?tp=1&_nc_ht=instagram.fakx2-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=DD1P2TPZPFsAX-4l5ev&oh=4a90a8d400b9e44779e0ab84e21263cf&oe=6071AB06" alt="" class="w-100" srcset="">
        </div>
    </div>

</div>
@endsection
