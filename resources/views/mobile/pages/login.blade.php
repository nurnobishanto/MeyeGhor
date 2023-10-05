@extends('layouts.mobile')
@section('top_bar')
    <header class="top-header fixed-top border-bottom d-flex align-items-center">
        <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
            <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
            <div class="account-profile">
                <h6 class="mb-0 fw-bold text-dark">Log In</h6>
            </div>
        </nav>
    </header>
@endsection
@section('content')
    <!--start to page content-->
    <div class="page-content">

        <div class="login-body">
            <h5 class="fw-bold">Welcome Back</h5>
            <p class="mb-0">Login to your account to continue your shopping</p>
            <form action="{{route('login_check')}}" method="post" class="mt-4">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" name="username" class="form-control rounded-3" id="floatingInputEmail" placeholder="name@example.com" >
                    <label for="floatingInputEmail">Email</label>
                </div>

                <div class="input-group mb-3" id="show_hide_password">
                    <div class="form-floating flex-grow-1">
                        <input name="password" type="password" class="form-control rounded-3 rounded-end-0 border-end-0" id="floatingInputPassword" placeholder="Enter Password" >
                        <label for="floatingInputPassword">Password</label>
                    </div>
                    <span class="input-group-text bg-transparent rounded-start-0 rounded-3"><i class="bi bi-eye-slash"></i></span>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="form-check">
                        <input name="remember" type="checkbox" class="form-check-input" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Remember</label>
                    </div>
                    <div class=""><a href="authentication-otp-varification.html" class="forgot-link">Forgot Password?</a></div>
                </div>
                <div class="mb-0 d-grid">
                    <input type="submit"  class="btn btn-dark btn-ecomm rounded-3" value="Log in">
                </div>
                {{--                <div class="separator my-4">--}}
                {{--                    <div class="line"></div>--}}
                {{--                    <p class="mb-0 fw-bold px-3">Or</p>--}}
                {{--                    <div class="line"></div>--}}
                {{--                </div>--}}
                {{--                <div class="social-login d-flex flex-row gap-2 justify-content-center">--}}
                {{--                    <a href="javascript:;" class="bg-facebook">--}}
                {{--                        <i class="bi bi-facebook"></i>--}}
                {{--                    </a>--}}
                {{--                    <a href="javascript:;" class="bg-pinterest">--}}
                {{--                        <i class="bi bi-google"></i>--}}
                {{--                    </a>--}}
                {{--                    <a href="javascript:;" class="bg-linkedin">--}}
                {{--                        <i class="bi bi-linkedin"></i>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
            </form>
        </div>

    </div>
    <!--end to page content-->
@endsection
@section('bottom_bar')
    <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center">
        <p class="mb-0 rounded-0">Don't have an account? <a href="{{route('signup')}}" class="text-danger">Sign Up</a></p>
    </footer>
    <!--end to footer-->
@endsection
@section('js')
    <script src="{{asset('app')}}/js/show-hide-password.js"></script>
@endsection

