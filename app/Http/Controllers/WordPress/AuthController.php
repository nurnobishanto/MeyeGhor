<?php

namespace App\Http\Controllers\WordPress;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function signup(){
        $jwtToken = session()->get('jwt_token');
        if ($jwtToken){
            return redirect()->route('home');
        }
        return view('mobile.pages.signup');
    }
    public function login(){
        $jwtToken = session()->get('jwt_token');
        if ($jwtToken){
            return redirect()->route('home');
        }
        return view('mobile.pages.login');
    }
    public function logout(){
        session()->forget('jwt_token');
        return redirect()->route('home');
    }
    public function login_check(Request $request){
        // WooCommerce API Endpoint for customer login
        $url = 'https://meyeghor.com/wp-json/jwt-auth/v1/token';

        // WooCommerce API credentials
        $consumerKey = env('CONSUMER_KEY');
        $consumerSecret = env('CONSUMER_SECRET');

        // Customer login data
        $loginData = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        // Make the POST request to authenticate the customer
        $response = Http::withBasicAuth($consumerKey, $consumerSecret)->post($url, $loginData);

        if ($response->successful()) {
            $token = $response->json('token');
            $request->session()->put('jwt_token', $token);
            toastr()->success('Login successfully');
            return redirect()->route('login');

        } else {
            toastr()->error('Login failed');
            return redirect()->back();
        }
    }
    public function signup_check(Request $request){
        // WooCommerce API Endpoint for creating a customer


        $url = 'https://meyeghor.com/wp-json/wc/v3/customers';

        // WooCommerce API credentials
        $consumerKey = env('CONSUMER_KEY');
        $consumerSecret = env('CONSUMER_SECRET');

        // Customer data to be sent in the request
        $customerData = [
            'email' => $request->input('email'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'password' => $request->input('password'),

        ];

        // Make the POST request to create the customer
        $response = Http::withBasicAuth($consumerKey, $consumerSecret)->post($url, $customerData);

        // Check the response and handle errors
        if ($response->successful()) {
            toastr()->success('Registered successfully');
            return redirect()->route('login');
        } else {
            // Handle errors here
            toastr()->error('Failed to register!');
            return redirect()->route('signup');
        }
    }
}
