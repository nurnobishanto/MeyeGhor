<!--start to header-->
<header class="top-header fixed-top border-bottom d-flex align-items-center">
    <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
        <div class="nav-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidenav"><a href="javascript:;"><i class="bi bi-list"></i></a></div>
        <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
        <div class="account-profile">
            <h6 class="mb-0 fw-bold text-dark">{{$title}}</h6>
        </div>
        <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon start-0 ms-4"><i class="bi bi-search"></i></div>
            <input class="form-control px-5" type="text" placeholder="Search for anything">
            <div class="position-absolute top-50 translate-middle-y end-0 search-close-icon me-4"><i class="bi bi-x-lg"></i></div>
        </form>
        <ul class="navbar-nav ms-auto d-flex align-items-center top-right-menu">
            <li class="nav-item mobile-search-button">
                <a class="nav-link" href="javascript:;"><i class="bi bi-search"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="wishlist.html"><i class="bi bi-heart"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link position-relative" href="cart.html">
                    <div class="cart-badge">8</div>
                    <i class="bi bi-bag"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>
