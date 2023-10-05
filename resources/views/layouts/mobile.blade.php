@include('mobile.includes.head')

<!--start wrapper-->
<div class="wrapper">
    @yield('top_bar')
    @yield('content')
    @yield('bottom_bar')
    @include('mobile.includes.sidenav')
</div>
<!--end wrapper-->


@include('mobile.includes.footer')
