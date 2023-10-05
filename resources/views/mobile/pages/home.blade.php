@extends('layouts.mobile')
@section('top_bar')
    @include('mobile.includes.top_bar')
@endsection
@section('content')
    <!--start to page content-->
    <div class="page-content">

        <!--start category-->
        <div class="category">
            <div class="d-flex align-items-center gap-3 justify-content-between">
                <div class="category-img">
                    <figure>
                        <a href="shop.html">
                            <img src="{{asset('app')}}/images/category/01.webp" class="img-fluid" alt="">
                        </a>
                        <figcaption>Men</figcaption>
                    </figure>
                </div>
                <div class="category-img">
                    <figure>
                        <a href="shop.html">
                            <img src="{{asset('app')}}/images/category/02.webp" class="img-fluid" alt="">
                        </a>
                        <figcaption>Women</figcaption>
                    </figure>
                </div>
                <div class="category-img">
                    <figure>
                        <a href="shop.html">
                            <img src="{{asset('app')}}/images/category/03.webp" class="img-fluid" alt="">
                        </a>
                        <figcaption>Kids</figcaption>
                    </figure>
                </div>
                <div class="category-img">
                    <figure>
                        <a href="shop.html">
                            <img src="{{asset('app')}}/images/category/04.webp" class="img-fluid" alt="">
                        </a>
                        <figcaption>On Sales</figcaption>
                    </figure>
                </div>

            </div>
        </div>
        <!--end category-->

        <div class="py-2"></div>

        <!--start banner slider-->
        <div class="banner-slider">
            <div class="banner-item">
                <a href="shop.html"><img src="{{asset('app')}}/images/banner-sliders/01.webp" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
                <a href="shop.html"><img src="{{asset('app')}}/images/banner-sliders/02.webp" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
                <a href="shop.html"><img src="{{asset('app')}}/images/banner-sliders/03.webp" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
                <a href="shop.html"><img src="{{asset('app')}}/images/banner-sliders/04.webp" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
                <a href="shop.html"><img src="{{asset('app')}}/images/banner-sliders/05.webp" class="img-fluid rounded-3" alt=""></a>
            </div>
            <div class="banner-item">
                <a href="shop.html"><img src="{{asset('app')}}/images/banner-sliders/06.webp" class="img-fluid rounded-3" alt=""></a>
            </div>
        </div>
        <!--end banner slider-->


        <div class="py-2"></div>

        <!--start features-->
        <div class="features-section">
            <div class="row row-cols-2 row-cols-md-4 g-3">
                <div class="col d-flex">
                    <div class="card rounded-3 w-100">
                        <div class="card-body">
                            <div class="icon-wrapper text-center">
                                <div class="noti-box mb-1 mx-auto bg-primary">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <p class="fw-bold mb-0 text-dark">Free Delivery</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-3 w-100">
                        <div class="card-body">
                            <div class="icon-wrapper text-center">
                                <div class="noti-box mb-1 mx-auto bg-purple">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                                <p class="fw-bold mb-0 text-dark">Secure Payment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-3 w-100">
                        <div class="card-body">
                            <div class="icon-wrapper text-center">
                                <div class="noti-box mb-1 mx-auto bg-red">
                                    <i class="bi bi-minecart-loaded"></i>
                                </div>
                                <p class="fw-bold mb-0 text-dark">Free Returns</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-3 w-100">
                        <div class="card-body">
                            <div class="icon-wrapper text-center">
                                <div class="noti-box mb-1 mx-auto bg-green">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <p class="fw-bold mb-0 text-dark">24/7 Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end features-->

        <div class="py-2"></div>

        <!--start trending category-->
        <div class="trending-category">
            <h4 class="my-2 text-center fw-bold section-title">Trending</h4>
            <div class="row row-cols-2 row-cols-md-3 g-3">
                <div class="col d-flex">
                    <div class="card rounded-0 w-100 rounded-3 overflow-hidden">
                        <a href="shop.html"><img src="{{asset('app')}}/images/trending/01.webp" class="img-fluid" alt=""></a>
                        <div class="card-body text-center">
                            <p class="mb-0 fw-bold">Denim Shirts</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-0 w-100 rounded-3 overflow-hidden">
                        <a href="shop.html"><img src="{{asset('app')}}/images/trending/02.webp" class="img-fluid" alt=""></a>
                        <div class="card-body text-center">
                            <p class="mb-0 fw-bold">Casual Shirts</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-0 w-100 rounded-3 overflow-hidden">
                        <a href="shop.html"><img src="{{asset('app')}}/images/trending/03.webp" class="img-fluid" alt=""></a>
                        <div class="card-body text-center">
                            <p class="mb-0 fw-bold">Women Tops</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-0 w-100 rounded-3 overflow-hidden">
                        <a href="shop.html"><img src="{{asset('app')}}/images/trending/04.webp" class="img-fluid" alt=""></a>
                        <div class="card-body text-center">
                            <p class="mb-0 fw-bold">Women Shirts</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-0 w-100 rounded-3 overflow-hidden">
                        <a href="shop.html"><img src="{{asset('app')}}/images/trending/05.webp" class="img-fluid" alt=""></a>
                        <div class="card-body text-center">
                            <p class="mb-0 fw-bold">Women Jeans</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card rounded-0 w-100 rounded-3 overflow-hidden">
                        <a href="shop.html"><img src="{{asset('app')}}/images/trending/06.webp" class="img-fluid" alt=""></a>
                        <div class="card-body text-center">
                            <p class="mb-0 fw-bold">Nightwear</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end trending category-->

        <div class="py-2"></div>

        <!--start reviews section-->
        <div class="reviews-section">
            <h4 class="my-2 text-center fw-bold section-title">Client Reviews</h4>

            <div class="review-slider">
                <div class="review-item p-3 border rounded-3 bg-light">
                    <h6 class="client-name fw-bold">Michael Clarke</h6>
                    <div class="ratings mb-2">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="review-text">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <p class="text-end mb-0 reviw-date">10/06/2022 at 14:20:18</p>
                    </div>
                </div>
                <div class="review-item p-3 border rounded-3 bg-light">
                    <h6 class="client-name fw-bold">Michael Clarke</h6>
                    <div class="ratings mb-2">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="review-text">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <p class="text-end mb-0 reviw-date">10/06/2022 at 14:20:18</p>
                    </div>
                </div>
                <div class="review-item p-3 border rounded-3 bg-light">
                    <h6 class="client-name fw-bold">Michael Clarke</h6>
                    <div class="ratings mb-2">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <div class="review-text">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        <p class="text-end mb-0 reviw-date">10/06/2022 at 14:20:18</p>
                    </div>
                </div>
            </div>

        </div>
        <!--end reviews section-->

        <div class="py-2"></div>

        <!--start sales category section with slider-->
        <div class="sales-category-wrapper">
            <h4 class="my-2 text-center fw-bold section-title">Trending In Shoes</h4>
            <div class="sales-category-slider">
                <div class="card rounded-0 rounded-3 overflow-hidden">
                    <a href="shop.html"><img src="{{asset('app')}}/images/trending-shoes/01.webp" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                        <p class="mb-0 fw-bold">Women Heels</p>
                    </div>
                </div>
                <div class="card rounded-0 rounded-3 overflow-hidden">
                    <a href="shop.html"><img src="{{asset('app')}}/images/trending-shoes/02.webp" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                        <p class="mb-0 fw-bold">Sports Shoes</p>
                    </div>
                </div>
                <div class="card rounded-0 rounded-3 overflow-hidden">
                    <a href="shop.html"><img src="{{asset('app')}}/images/trending-shoes/03.webp" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                        <p class="mb-0 fw-bold">Leather Shoes</p>
                    </div>
                </div>
                <div class="card rounded-0 rounded-3 overflow-hidden">
                    <a href="shop.html"><img src="{{asset('app')}}/images/trending-shoes/04.webp" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                        <p class="mb-0 fw-bold">Sneakes</p>
                    </div>
                </div>

            </div>
        </div>
        <!--end sales section with slider-->

        <div class="py-2"></div>

        <!--start brands slider-->
        <div class="sales-category-wrapper">
            <h4 class="my-2 text-center fw-bold section-title">Top Brands</h4>
            <div class="brands-slider">
                <div class="card rounded-3">
                    <div class="card-body">
                        <a href="shop.html"><img src="{{asset('app')}}/images/brands/01.webp" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="card rounded-3">
                    <div class="card-body">
                        <a href="shop.html"><img src="{{asset('app')}}/images/brands/02.webp" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="card rounded-3">
                    <div class="card-body">
                        <a href="shop.html"><img src="{{asset('app')}}/images/brands/03.webp" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="card rounded-3">
                    <div class="card-body">
                        <a href="shop.html"><img src="{{asset('app')}}/images/brands/04.webp" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="card rounded-3">
                    <div class="card-body">
                        <a href="shop.html"><img src="{{asset('app')}}/images/brands/05.webp" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="card rounded-3">
                    <div class="card-body">
                        <a href="shop.html"><img src="{{asset('app')}}/images/brands/06.webp" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="card rounded-3">
                    <div class="card-body">
                        <a href="shop.html"><img src="{{asset('app')}}/images/brands/07.webp" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="card rounded-3">
                    <div class="card-body">
                        <a href="shop.html"><img src="{{asset('app')}}/images/brands/08.webp" class="img-fluid" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
        <!--end brands slider-->

        <div class="py-2"></div>

        <!--start sales category section with slider-->
        <div class="sales-category-wrapper">
            <h4 class="my-2 text-center fw-bold section-title">Accessories</h4>
            <div class="sales-accessories-slider">
                <div class="card rounded-3 overflow-hidden">
                    <a href="shop.html"><img src="{{asset('app')}}/images/accessories/01.webp" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                        <p class="mb-0 fw-bold">Women Caps</p>
                    </div>
                </div>
                <div class="card rounded-3 overflow-hidden">
                    <a href="shop.html"><img src="{{asset('app')}}/images/accessories/02.webp" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                        <p class="mb-0 fw-bold">Men Belts</p>
                    </div>
                </div>
                <div class="card rounded-3 overflow-hidden">
                    <a href="shop.html"><img src="{{asset('app')}}/images/accessories/03.webp" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                        <p class="mb-0 fw-bold">Ladies Purse</p>
                    </div>
                </div>
                <div class="card rounded-3 overflow-hidden">
                    <a href="shop.html"><img src="{{asset('app')}}/images/accessories/04.webp" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                        <p class="mb-0 fw-bold">Headphones</p>
                    </div>
                </div>

            </div>
        </div>
        <!--end sales section with slider-->

    </div>
    <!--end to page content-->
@endsection
@section('bottom_bar')
    @include('mobile.includes.bottom_bar')
@endsection
