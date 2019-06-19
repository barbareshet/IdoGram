@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5">
            <img src="https://instagram.fsdv2-1.fna.fbcdn.net/vp/9302bb0c6fc5046f1817f17e7073c27c/5D842C74/t51.2885-19/s150x150/31501736_418502788623078_7486417250090483712_n.jpg?_nc_ht=instagram.fsdv2-1.fna.fbcdn.net" alt="" class="rounded-circle">
        </div>
        <div class="col-md-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create" class="btn btn-outline-secondary"> Add New Post</a>
            </div>
            <div class="d-flex account-info">
                <div class="pr-5"><strong>436</strong> posts</div>
                <div class="pr-5"><strong>198</strong> followers</div>
                <div class="pr-5"><strong>250</strong> following</div>
            </div>
            <div class="account-name pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div class="account-desc">
                <p>{{ $user->profile->description }}</p>
            </div>
            @if( $user->profile->url )
            <div class="account-website pt-4">
                <a href="http://{{ $user->profile->url }}" rel="nofollow" target="_blank">
                    {{ $user->profile->url }}
                </a>
            </div>
            @endif
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="https://instagram.fsdv2-1.fna.fbcdn.net/vp/e2af72dc7ea09ebed5a51ec9bd194377/5D901D94/t51.2885-15/sh0.08/e35/s640x640/64698940_2299112870136809_289723226403802603_n.jpg?_nc_ht=instagram.fsdv2-1.fna.fbcdn.net" style="object-fit: cover;" alt="" class="w-100 card-img">
                <div class="card-img-overlay">
                    <ul class="list-unstyled interaction-items">
                        <li class="interaction-item">
                            <span class="interaction-item_count text-white">24</span>
                            <span class="interaction-item_icon likes text-white"></span>
                        </li>
                        <li class="interaction-item">
                            <span class="interaction-item_count text-white">0</span>
                            <span class="interaction-item_icon comments text-white"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://instagram.fsdv2-1.fna.fbcdn.net/vp/dbd75b273c735b8f136ca9d18b65a8f0/5D838B7F/t51.2885-15/sh0.08/e35/s640x640/60021976_2791121660959302_2562435087434665850_n.jpg?_nc_ht=instagram.fsdv2-1.fna.fbcdn.net" alt="" class="w-100 card-img">
                <div class="card-img-overlay">
                    <ul class="list-unstyled interaction-items">
                        <li class="interaction-item">
                            <span class="interaction-item_count text-white">24</span>
                            <span class="interaction-item_icon likes text-white"></span>
                        </li>
                        <li class="interaction-item">
                            <span class="interaction-item_count text-white">0</span>
                            <span class="interaction-item_icon comments text-white"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://instagram.fsdv2-1.fna.fbcdn.net/vp/a65250f7ee61f0a0a9632d0802555c24/5D86A984/t51.2885-15/sh0.08/e35/c2.0.1435.1435/s640x640/60741742_2426801200884040_1643638468789073195_n.jpg?_nc_ht=instagram.fsdv2-1.fna.fbcdn.net" style="object-fit: cover;" alt="" class="w-100 card-img">
                <div class="card-img-overlay">
                    <ul class="list-unstyled interaction-items">
                        <li class="interaction-item">
                            <span class="interaction-item_count text-white">24</span>
                            <span class="interaction-item_icon likes text-white"></span>
                        </li>
                        <li class="interaction-item">
                            <span class="interaction-item_count text-white">0</span>
                            <span class="interaction-item_icon comments text-white"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
