<?php

namespace App\Http\Controllers\WordPress;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function profile(){
        $jwtToken = session()->get('jwt_token');
        if ($jwtToken){
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $jwtToken,
            ])->get('https://meyeghor.com/wp-json/wp/v2/users/me');

            if ($response->successful()) {
                $customerData = $response->json();
                session()->put('myId',$customerData['id']);
                 getCustomerInformationById($customerData['id']);
                return view('mobile.pages.profile');
            } else {
                session()->forget('jwt_token');
                return redirect()->route('login');
            }

        }
        return redirect()->route('login');
    }
    public function my_profile(){
        return view('mobile.pages.profiles.me');
    }
}
