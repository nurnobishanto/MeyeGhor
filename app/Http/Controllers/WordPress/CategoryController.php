<?php

namespace App\Http\Controllers\WordPress;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function categories(Request $request){
        $page = $request->page??1;
        $per_page = $request->per_page??20;
        $url = env('WORDPRESS_BASE_API').'/wc/v2/products/categories';
        $consumerKey = env('CONSUMER_KEY');
        $consumerSecret = env('CONSUMER_SECRET');
        $loginData = [
           'parent' => 0,
           'page' => $page,
           'per_page' => $per_page,
           'hide_empty' => true,
           'order' => 'asc',
        ];

        // Make the POST request to authenticate the customer
        $response = Http::withBasicAuth($consumerKey, $consumerSecret)->get($url, $loginData);
        $categories = $response->json();
        $count = count($categories);
        $title = 'All Categories';
        return view('mobile.pages.categories',compact(['categories','title','page','per_page','count']));
    }
    public function category(Request $request, $id){
        $page = $request->page??1;
        $per_page = $request->per_page??19;
        $categories_url = env('WORDPRESS_BASE_API').'/wc/v2/products/categories';

        // WooCommerce API credentials
        $consumerKey = env('CONSUMER_KEY');
        $consumerSecret = env('CONSUMER_SECRET');
        $data = [
            'parent' => $id,
            'page' => $page,
            'per_page' => $per_page,
            'hide_empty' => true,
            'order' => 'asc',
        ];
        $response = Http::withBasicAuth($consumerKey, $consumerSecret)->get($categories_url, $data);
        $categories = $response->json();
        $count = count($categories);

        if($count>0){
            $title = $request->name??'All Categories';
            return view('mobile.pages.categories',compact(['categories','title','page','per_page','count']));
        }

        $title = $request->name??'All Products';
        return view('mobile.pages.products',compact(['title','id']));
    }
}
