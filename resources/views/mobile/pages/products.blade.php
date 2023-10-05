@extends('layouts.mobile')
@section('top_bar')
    @include('mobile.includes.back_top_bar',['title'=>$title])
@endsection
@section('content')
    <!--start to page content-->
    <div class="page-content p-0">
        <!--start produt grid-->
        <div class="product-grid">
            <div class="row row-cols-2 row-cols-sm-4 row-cols-md-5 g-0" id="product_container">
            </div><!--end row-->
        </div>
        <div id="loading_spinner" class="text-center mt-3">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only"></span>
            </div>
            <!--end produt grid-->
        </div>

    </div>
@endsection
@section('bottom_bar')
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center">
        <div class="hstack align-items-center justify-content-center gap-3 w-100">
            <div class="short-by">
                <a href="#offcanvasSortBy" data-bs-toggle="offcanvas" class="btn btn-ecomm"><i class="bi bi-arrow-down-up me-3"></i>Sort By</a>
            </div>
{{--            <div class="vr"></div>--}}
{{--            <div class="filter-btn">--}}
{{--                <a href="#offcanvasFilter" data-bs-toggle="offcanvas" class="btn btn-ecomm"><i class="bi bi-filter-left me-3"></i>Filter</a>--}}
{{--            </div>--}}
        </div>
    </footer>
    <!--end to footer-->

    <!--start sort by offcanvas-->
    <div class="offcanvas offcanvas-bottom h-auto" tabindex="-1" id="offcanvasSortBy">
        <div class="offcanvas-header border-bottom justify-content-center">
            <h6 class="offcanvas-title mb-0 fw-bold text-uppercase text-dark">Sort By</h6>
        </div>
        <div class="offcanvas-body p-0">
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item fw-bold text-uppercase">Price: Low to High</li>
                <li class="list-group-item fw-bold text-uppercase">Price: High to Low</li>
                <li class="list-group-item fw-bold text-uppercase">Discount</li>
                <li class="list-group-item fw-bold text-uppercase">Popularity</li>
                <li class="list-group-item fw-bold text-uppercase">Newest</li>
            </ul>
        </div>
    </div>
    <!--end short by offcanvas-->

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            var page = 1; // Initialize the page number
            var loading = false; // Flag to prevent multiple requests
            var consumerKey = '{{env('CONSUMER_KEY')}}';
            var consumerSecret = '{{env('CONSUMER_SECRET')}}';

            // Function to load products
            function loadProducts() {

                if (loading) return;
                loading = true;
                $('#loading_spinner').show();
                // WooCommerce API endpoint for products
                var apiUrl = '{{env('WORDPRESS_BASE_API')}}/wc/v3/products?category={{$id}}';
                console.log(apiUrl);
                $.ajax({
                    type: 'GET',
                    url: apiUrl,
                    data: {
                        page: page,
                    },
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader('Authorization', 'Basic ' + btoa(consumerKey + ':' + consumerSecret));
                    },
                    success: function (products) {

                        if (products.length > 0) {
                            // Loop through the products and display them
                            $.each(products, function (index, product) {
                                var productName = product['name'];
                                if (productName.length > 20) {
                                    productName = productName.substring(0, 20) + '...';
                                }
                                var regularPrice = parseFloat(product['regular_price']);
                                var salePrice = parseFloat(product['sale_price']);
                                var discountPercentage = ((regularPrice - salePrice) / regularPrice) * 100;
                                var discount = Math.floor(discountPercentage);
                                discount_text='';
                                if(discount>0){
                                    var discount_text = '('+discount+'% Off)'
                                }
                                var categoryName = product['categories'][0]['name'];

                                var productHtml = '<div class="col">' +
                                    '<div class="card rounded-0">' +
                                    '<div class="position-relative overflow-hidden">' +
                                    '<a href="product-details.html">' +
                                    '<img src="'+product['images'][0]['src']+'" class="img-fluid rounded-0" alt="Image"></a>' +
                                    '</div><div class="card-body">' +
                                    '<div class="hstack align-items-center justify-content-between">' +
                                    '<h5 class="mb-0 fw-bold product-short-title">'+productName+'</h5>' +
                                    '<div class="wishlist"><i class="bi bi-heart"></i></div>' +
                                    '</div>' +
                                    '<p class="mt-1 mb-0 product-short-name font-12 fw-bold">'+categoryName+'</p>' +
                                    '<div class="product-price d-flex align-items-center gap-1 mt-2 font-12">' +
                                    '<div class="fw-bold text-dark">৳'+product['sale_price']+'</div>' +
                                    '<div class="fw-light text-muted text-decoration-line-through">৳'+product['regular_price']+'</div>' +
                                    '<div class="fw-bold text-danger">'+discount_text+'</div></div></div></div></div>';
                                $('#product_container').append(productHtml);
                            });
                            page++; // Increment the page number for the next request
                        } else {
                            // No more products to load
                        }
                    },
                    complete: function () {
                        loading = false;
                        $('#loading_spinner').hide();
                    },
                });
            }

            // Load products when the page initially loads
            $('#loading_spinner').show();
            loadProducts();

            // Load more products as the user scrolls
            $(window).scroll(function () {
                if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
                    loadProducts();
                }
            });
        });
    </script>
@endsection
