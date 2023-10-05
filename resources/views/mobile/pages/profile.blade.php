@extends('layouts.mobile')
@section('top_bar')
    @include('mobile.includes.back_top_bar',['title'=>'Profile'])
@endsection
@section('content')
    <!--start to page content-->
    <div class="page-content">

        <div class="profile-img mb-3 border p-3 text-center rounded-3 bg-light">
            <img src="{{asset('app')}}/images/avatars/01.webp" width="90" height="90" class="rounded-circle" alt="">
            <h6 class="mb-0 fw-bold mt-3">{{session()->get('first_name')}} {{session()->get('last_name')}}</h6>
        </div>

        <div class="mb-3">
            <a class="profile-item" href="{{route('my_profile')}}">
                <div class="card rounded-3">
                    <div class="card-body py-2">
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <div><i class="bi bi-person"></i></div>
                            <div class="flex-grow-1">My Profile</div>
                            <div><i class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="mb-3">
            <a class="profile-item" href="my-orders.html">
                <div class="card rounded-3">
                    <div class="card-body py-2">
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <div><i class="bi bi-basket3"></i></div>
                            <div class="flex-grow-1">My Order</div>
                            <div><i class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="mb-3">
            <a class="profile-item" href="addresses.html">
                <div class="card rounded-3">
                    <div class="card-body py-2">
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <div><i class="bi bi-geo"></i></div>
                            <div class="flex-grow-1">Addresses</div>
                            <div><i class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="mb-3">
            <a class="profile-item" href="notification.html">
                <div class="card rounded-3">
                    <div class="card-body py-2">
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <div><i class="bi bi-bell"></i></div>
                            <div class="flex-grow-1">Notification</div>
                            <div><i class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="mb-3">
            <a class="profile-item" href="wishlist.html">
                <div class="card rounded-3">
                    <div class="card-body py-2">
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <div><i class="bi bi-heart"></i></div>
                            <div class="flex-grow-1">Wishlist</div>
                            <div><i class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="mb-3">
            <a class="profile-item" href="{{route('logout')}}">
                <div class="card rounded-3">
                    <div class="card-body py-2">
                        <div class="d-flex align-items-center gap-3 fs-6">
                            <div><i class="bi bi-box-arrow-right"></i></div>
                            <div class="flex-grow-1">Logout</div>
                            <div><i class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <!--end to page content-->
@endsection




