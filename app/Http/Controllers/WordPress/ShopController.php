<?php

namespace App\Http\Controllers\WordPress;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view('mobile.pages.shop');
    }
}
