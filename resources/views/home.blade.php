@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 p-5">
                <img src="https://instagram.fsdv2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/31501736_418502788623078_7486417250090483712_n.jpg?_nc_ht=instagram.fsdv2-1.fna.fbcdn.net&_nc_ohc=XC5CB48FbdIAX_zquDx&oh=5f973e8be1da71314d8c53dabc213587&oe=5EC09474" alt="" class="rounded-circle">
            </div>
            <div class="col-md-9 p-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>Ido Barnea</h1>
                    <a href="/p/create" class="btn btn-outline-secondary"> Add New Post</a>
                </div>
                <div class="d-flex account-info">
                    <div class="pr-5"><strong>436</strong> posts</div>
                    <div class="pr-5"><strong>198</strong> followers</div>
                    <div class="pr-5"><strong>250</strong> following</div>
                </div>
                <div class="account-name pt-4"><strong>IdoB</strong></div>
                <div class="account-desc">
                    <p>short description</p>
                </div>
{{--                @if( $user->profile->url )--}}
{{--                    <div class="account-website pt-4">--}}
{{--                        <a href="http://{{ $user->profile->url }}" rel="nofollow" target="_blank">--}}
{{--                            {{ $user->profile->url }}--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                @endif--}}
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://instagram.fsdv2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/83829690_119633662714429_5810507324962329388_n.jpg?_nc_ht=instagram.fsdv2-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=2Yswkt72Qy8AX_QjsTI&amp;oh=d4173c5e0871f75f81d557f6dd272fc4&amp;oe=5ECFC819" style="object-fit: cover;" alt="" class="w-100 card-img">
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
                    <img src="https://instagram.fsdv2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/84693856_162882668497834_8851619077670722066_n.jpg?_nc_ht=instagram.fsdv2-1.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=1r2eIVCeRvoAX-XwK-W&amp;oh=f63fd391d4995e5c7b698626f92a8ae1&amp;oe=5EC9EF05" style="object-fit: cover;" alt="" class="w-100 card-img">
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
                    <img src="https://instagram.fsdv2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/84693856_162882668497834_8851619077670722066_n.jpg?_nc_ht=instagram.fsdv2-1.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=1r2eIVCeRvoAX-XwK-W&amp;oh=f63fd391d4995e5c7b698626f92a8ae1&amp;oe=5EC9EF05" style="object-fit: cover;" alt="" class="w-100 card-img">
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
