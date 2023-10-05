<!doctype html>
<html lang="en">

<!-- Mirrored from codervent.com/mobile/synrok/demo/authentication-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 04:25:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Synrok - Mobile HTML Template</title>

    <!--CSS Files-->
    <link href="{{asset('app')}}/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="{{asset('app')}}/css/style.css" rel="stylesheet"/>
</head>
<body>

<!--page loader-->
<div class="loader-wrapper">
    <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-white" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
<!--end loader-->

<!--start wrapper-->
<div class="wrapper">

    <!--start to header-->
    <header class="top-header fixed-top border-bottom d-flex align-items-center">
        <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
            <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
            <div class="account-sign-up">
                <h6 class="mb-0 fw-bold text-dark">Sign Up</h6>
            </div>
        </nav>
    </header>
    <!--end to header-->

    <!--start to page content-->
    <div class="page-content">

        <div class="login-body">
            <h5 class="fw-bold">Sign Up</h5>
            <p class="mb-0">Create an account to continue your all shopping</p>
            <form method="post" action="{{route('signup_check')}}" class="mt-4">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="first_name" class="form-control rounded-3" id="floatingInputName" placeholder="Enter First Name">
                    <label for="floatingInputName">First Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="last_name" class="form-control rounded-3" id="floatingInputName" placeholder="Enter Last Name">
                    <label for="floatingInputName">Last Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control rounded-3" id="floatingInputEmail" placeholder="name@example.com">
                    <label for="floatingInputEmail">Email</label>
                </div>

                <div class="input-group mb-3" id="show_hide_password">
                    <div class="form-floating flex-grow-1">
                        <input type="password" name="password" class="form-control rounded-3 border-end-0 rounded-end-0" id="floatingInputPassword" placeholder="Enter Password" value="password123">
                        <label for="floatingInputPassword">Password</label>
                    </div>
                    <span class="input-group-text bg-transparent rounded-3 rounded-start-0"><i class="bi bi-eye-slash"></i></span>
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input required class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to Terms and Conditions
                        </label>
                    </div>
                </div>

                <div class="mb-0 d-grid">
                    <input type="submit"  class="btn btn-dark btn-ecomm rounded-3" value="Sign Up">
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


    <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center">
        <p class="mb-0 rounded-0">Already have an account? <a href="{{route('login')}}" class="text-danger">Log In</a></p>
    </footer>
    <!--end to footer-->

</div>
<!--end wrapper-->


<!--JS Files-->
<script src="{{asset('app')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('app')}}/js/jquery.min.js"></script>
<script src="{{asset('app')}}/js/show-hide-password.js"></script>
<script src="{{asset('app')}}/js/loader.js"></script>

</body>

</html>
