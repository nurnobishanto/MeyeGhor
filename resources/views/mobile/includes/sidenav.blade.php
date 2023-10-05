<!--start sidenav-->
<div class="sidenav">
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidenav">
        @if(session()->get('jwtToken',false))
        <div class="offcanvas-header bg-dark border-bottom border-light">
            <div class="hstack gap-3">
                <div class="">
                    <img src="{{asset('app')}}/images/avatars/01.webp" width="45" class="rounded-3 p-1 bg-white" alt=""/>
                </div>
                <div class="details">
                    <h6 class="mb-0 text-white">{{session()->get('first_name')}}</h6>
                </div>
            </div>
            <div data-bs-dismiss="offcanvas"><i class="bi bi-x-lg fs-5 text-white"></i></div>
        </div>
        @else
            <div class="offcanvas-header bg-dark border-bottom border-light">
                <div class="hstack gap-3">
                    <div class="details">
                        <a href="{{route('login')}}"><h6 class="mb-0 text-white">Login</h6></a>

                    </div>
                </div>
                <div data-bs-dismiss="offcanvas"><i class="bi bi-x-lg fs-5 text-white"></i></div>
            </div>
        @endif
        <div class="offcanvas-body p-0">
            <nav class="sidebar-nav">
                <ul class="metismenu" id="sidenav">
                    <li>
                        <a href="home.html">
                            <i class="bi bi-house-door me-2"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <i class="bi bi-person-circle me-2"></i>
                            Account
                        </a>
                        <ul>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="my-orders.html">My Orders</a></li>
                            <li><a href="my-profile.html">My Profile</a></li>
                            <li><a href="addresses.html">Addresses</a></li>
                            <li><a href="notification.html">Notification</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="about-us.html">
                            <i class="bi bi-emoji-smile me-2"></i>
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="contact-us.html">
                            <i class="bi bi-headphones me-2"></i>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="offcanvas-footer border-top p-3">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="DarkMode" onchange="toggleTheme()">
                <label class="form-check-label" for="DarkMode">Dark Mode</label>
            </div>
        </div>
    </div>
</div>
<!--end sidenav-->
