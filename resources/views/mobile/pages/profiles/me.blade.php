@extends('layouts.mobile')
@section('top_bar')
    @include('mobile.includes.back_top_bar',['title'=>'My Profile'])
@endsection
@section('content')
    <!--start to page content-->
    <div class="page-content">

        <div class="profile-img mb-3 border p-3 text-center rounded-3 bg-light">
            <img src="{{asset('app')}}/images/avatars/01.webp" width="90" height="90" class="rounded-circle" alt="">
            <h6 class="mb-0 fw-bold mt-3 text-dark">Michael Clarke</h6>
        </div>

        <div class="card rounded-3 border-0 bg-transparent">
            <div class="card-body p-0">
                <form>
                    <div class="row row-cols-1 g-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-3" id="floatingInputName" placeholder="Name" value="{{session()->get('first_name')}}">
                                <label for="floatingInputName">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-3" id="floatingInputName" placeholder="Name" value="{{session()->get('last_name')}}">
                                <label for="floatingInputName">Last ame</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-3" id="floatingInputNumber" placeholder="Name" value="+99-85XXXXXXXX">
                                <label for="floatingInputNumber">Mobile Number</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-3" id="floatingInputEmail" placeholder="Email" value="name@example.com">
                                <label for="floatingInputEmail">Email</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="date" class="form-control rounded-3" id="floatingInputDOB" value="">
                                <label for="floatingInputDOB">Date of Birth</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-3" id="floatingInputLocation" placeholder="Location" value="United Kingdom">
                                <label for="floatingInputLocation">Location</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--end to page content-->
@endsection
@section('bottom_bar')
    <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center gap-3">
        <a href="#OrderCancleModal" data-bs-toggle="modal" class="btn btn-ecomm btn-outline-dark rounded-3 flex-fill">Save</a>
        <div class="vr"></div>
        <a href="javascript:;" class="btn btn-ecomm btn-dark rounded-3 flex-fill">Cancel</a>
    </footer>
    <!--end to footer-->
@endsection
