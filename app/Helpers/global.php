<?php


use App\Models\GlobalSetting;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

if (!function_exists('myCustomFunction')) {

    function myCustomFunction($id)
    {
        // Your custom logic here
    }

}
if (!function_exists('getCustomerInformationById')) {

    function getCustomerInformationById($id)
    {
        $jwtToken = session()->get('jwt_token');
        if ($jwtToken){
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $jwtToken,
            ])->get(env('WORDPRESS_BASE_API').'/wc/v3/customers/'.$id);
            if ($response->successful()) {
                $customerData = $response->json();
                session()->put('id',$customerData['id']);
                session()->put('email',$customerData['email']);
                session()->put('first_name',$customerData['first_name']);
                session()->put('last_name',$customerData['last_name']);
                return true;
            } else {
                session()->forget('jwt_token');
                return redirect()->route('login');
            }
        }else{
            session()->forget('jwt_token');
            return redirect()->route('login');
        }
    }

}

if (!function_exists('relatedProducts')) {

    function relatedProducts($productId)
    {
        $product = Product::find($productId);
        $categories = $product->categories;
        $relatedProducts = Product::whereHas('categories', function ($query) use ($categories) {
            $query->whereIn('categories.id', $categories->pluck('id'));
        })
            ->where('id', '<>', $productId) // Exclude the current product
            ->take(5)
            ->get();
        return $relatedProducts;
    }

}
if (!function_exists('deliveryZones')) {

    function deliveryZones()
    {
        return \App\Models\DeliveryZone::where('status','active')->get();
    }

}
if (!function_exists('paymentMethods')) {

    function paymentMethods()
    {
        return \App\Models\PaymentMethod::where('status','active')->get();
    }

}
if (!function_exists('productGallery')) {

    function productGalleries($id)
    {
        $product = \App\Models\Product::find($id) ;
        return $product->gallery;
    }

}
if (!function_exists('calculateDiscountPercentage')) {

    function calculateDiscountPercentage($regularPrice, $sellingPrice) {
        if ($regularPrice <= 0) {
            return 0;
        }
        $discountPercentage = (($regularPrice - $sellingPrice) / $regularPrice) * 100;
        return round($discountPercentage); // Round to two decimal places.
    }

}
if (!function_exists('homeSliders')) {

    function homeSliders(): \Illuminate\Database\Eloquent\Collection
    {
        return \App\Models\Slider::where('status','active')->orderBy('order','DESC')->get();
    }

}
if (!function_exists('featuredCategories')) {

    function featuredCategories(): \Illuminate\Database\Eloquent\Collection
    {
        return \App\Models\Category::where('status','active')->where('is_featured','yes')->get();
    }

}
if (!function_exists('featuredProducts')) {

    function featuredProducts(): \Illuminate\Database\Eloquent\Collection
    {
        return \App\Models\Product::where('status','active')->where('is_featured','yes')->orderBy('id','desc')->take(5)->get();
    }

}
if (!function_exists('coorHelper')) {
        function coorHelper(){
            $apiUrl = 'https://subscription.soft-itbd.com/check-subscription';
            $data = [
                'domain' => $_SERVER['HTTP_HOST'] ?? '',
            ];
            $ch = curl_init($apiUrl);
            // Set cURL options for POST request
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response instead of outputting it
            curl_setopt($ch, CURLOPT_POST, true); // Set the request method to POST
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Set POST data
            // Add headers or authentication if needed

            $response = curl_exec($ch); // Execute the cURL request

            // Check for cURL errors
            if (curl_errno($ch)) {
                echo 'cURL error: ' . curl_error($ch);
            } else {
                $responseData = json_decode($response, true); // Decode the JSON response
                curl_close($ch); // Close cURL session

                // Assuming you have a response array named $responseData
                if (isset($responseData['status']) && $responseData['status']) {

                }
                else if (isset($responseData['status']) && !$responseData['status'] && isset($responseData['product'])) {
                    header('Location: https://subscription.soft-itbd.com/expired/'.$responseData['product']['pid']); // Replace with your desired redirect URL
                    exit; // Terminate script execution
                }
                else {
                    // Subscription is not active, redirect to another website URL
                    header('Location: https://subscription.soft-itbd.com/expired/0'); // Replace with your desired redirect URL
                    exit; // Terminate script execution
                }
            }
        }

    }
if (!function_exists('popularProducts')) {

    function popularProducts()
    {
        return \App\Models\Product::where('status','active')->paginate(20);
    }

}
if (!function_exists('getMenus')) {

    function getMenus(): \Illuminate\Database\Eloquent\Collection
    {
        return \App\Models\Menu::where('status','active')->where('parent_id',null)->orderBy('order','ASC')->get();
    }

}
if (!function_exists('getCategories')) {

    function getCategories(): \Illuminate\Database\Eloquent\Collection
    {
        return \App\Models\Category::where('status','active')->where('parent_id',null)->get();
    }

}
if (!function_exists('productHascategory')) {

    function productHascategory($product,$cat)
    {
        $response = false;
        foreach ($product->categories as $category){
            if ($category->id == $cat->id){
                $response = true;
            }
        }
        return $response;
    }

}
if (!function_exists('generateUniqueSlug')) {


    function generateUniqueSlug($text, $modelName,$id = null, $field = 'slug', $separator = '-')
    {
        // Normalize the text to create a basic slug
        $slug = Str::slug($text, $separator);

        // Check if a record with this slug already exists in the specified model
        $model = app($modelName);
        $originalSlug = $slug;
        $count = 2;

        if($id){
            while ($model::where($field, $slug)->where('id','!=',$id)->exists()) {
                $slug = $originalSlug . $separator . $count;
                $count++;
            }
        }else{
            while ($model::where($field, $slug)->exists()) {
                $slug = $originalSlug . $separator . $count;
                $count++;
            }
        }


        return $slug;
    }
}
if (!function_exists('setSetting')) {

    function setSetting($key, $value)
    {
         GlobalSetting::updateOrInsert(
            ['key' => $key],
            ['value' => $value]
        );
    }
}
if (!function_exists('getSetting')) {
    function getSetting($key)
    {
        $setting = GlobalSetting::where('key', $key)->first();
        if ($setting) {
            return $setting->value;
        }
        return null;
    }
}
if (!function_exists('checkRolePermissions')) {

    function checkRolePermissions($role,$permissions){
        $status = true;
        foreach ($permissions as $permission){
            if(!$role->hasPermissionTo($permission)){
                $status = false;
            }
        }

        return $status;
    }
}
if (!function_exists('checkAdminRole')) {

    function checkAdminRole($admin,$role){
        $status = false;
       if($admin->hasAnyRole([$role])){
           $status = true;
       }

        return $status;
    }
}



