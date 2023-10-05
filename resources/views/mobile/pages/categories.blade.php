@extends('layouts.mobile')
@section('top_bar')
    @include('mobile.includes.back_top_bar',['title'=>$title])
@endsection
@section('content')
    <!--start to page content-->
    <div class="page-content">

        <div class="row row-cols-2 g-3">
            @foreach( $categories as $category)
            <div class="col">
                <a href="{{route('category',['id'=>$category['id'],'name'=>$category['name']])}}">
                    <div class="card rounded-3 mb-0">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-column-reverse align-items-center justify-content-between gap-2">
                                <div class="category-name">
                                    <h6 class="mb-0 fw-bold text-dark fs-5">{{$category['name']}} ({{$category['count']}})</h6>
                                </div>
                                <div class="category-img">
                                    @if (isset($category['image']) && isset($category['image']['src']))
                                        <img src="{{ $category['image']['src'] }}" class="img-fluid" width="100" alt="{{ $category['name'] }} Image">
                                    @else
                                        <img src="{{asset('app/images/placeholder-image.png')}}" class="img-fluid" width="100" alt="{{ $category['name'] }} Image">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div><!--end row-->
        <div class="mt-2 text-center">
            @if($page>1)
            <a href="{{route('categories',['page'=>$page-1])}}" class="btn btn-warning">Previous Page</a>
            @endif
            @if($count===$per_page)
            <a href="{{route('categories',['page'=>$page+1])}}" class="btn btn-warning">Next Page</a>
            @endif
        </div>


    </div>
    <!--end to page content-->
@endsection
@section('bottom_bar')
    @include('mobile.includes.bottom_bar')
@endsection
