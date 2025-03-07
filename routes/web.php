<?php

use App\Http\Controllers\website\actions;
use App\Http\Controllers\website\Auth\Login;
use App\Http\Controllers\website\cart;
use App\Http\Controllers\website\get_data;
use App\Http\Controllers\website\index;
use App\Http\Controllers\website\requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;






Route::group(["prefix" => LaravelLocalization::setlocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', "BlockUser"]], function () {




    route::group(['middleware' => ['Analysis']], function (){

        // pages
        Route::get('/', [index::class, "index"])->name("index");
        Route::get('/gallery', [index::class, "gallery"])->name("gallery");
        Route::get('/contact', [index::class, "contact"])->name("contact");
        Route::get('/about', [index::class, "about"])->name("about");
        Route::get('/shop', [index::class, "shop"])->name("shop");
        Route::get('/projects', [index::class, "projects"])->name("projects");
        Route::get('/services', [index::class, "services"])->name("services");
        Route::get('/project_details', [index::class, "project_details"])->name("project_details");
        Route::get('/product', [index::class, "product_details"])->name("product");
        Route::get('/cart', [index::class, "cart"])->name("cart");
        Route::get('/checkout', [index::class, "checkout"])->name("checkout");
        Route::get('/sign_in', [index::class, "sign_in"])->name("sign_in");
        Route::get('/sign_up', [index::class, "sign_up"])->name("sign_up");
        Route::get('/profile', [index::class, "user_profile"])->name("user_profile");
        Route::get('/privacy-policy', [index::class, "privacy_policy"])->name("privacy_policy");
        Route::get('/Terms and Conditions', [index::class, "terms_con"])->name("terms_con");
        Route::get('/Delivery returns', [index::class, "delivery_returns"])->name("delivery_returns");
        Route::get('/Coming_Soon', [index::class, "coming_soon"])->name("coming_soon");
        Route::get('/At_your_service', [index::class, "find"])->name("find");
        Route::get('/engineering', [index::class, "engineering"])->name("engineering");


    }); 

    // requests
    Route::post('/get_banners_html', [get_data::class, "get_banners_html"])->name("get_banners_html");
    Route::post('/get_gallary_html', [get_data::class, "get_gallary_html"])->name("get_gallary_html");
    Route::post('/get_category_html', [get_data::class, "get_category_html"])->name("get_category_html");
    Route::post('/good_categories', [get_data::class, "good_categories"])->name("good_categories");



    Route::get('/Confirm_Request', [requests::class, "Confirm_Request"])->name("Confirm_Request");
    Route::post('/product_shop', [requests::class, "product_shop"])->name("product_shop");
    Route::post('/related_products', [requests::class, "related_products"])->name("related_products");



    // cart
    Route::post('/cart_shop_mobile', [cart::class, "cart_shop_mobile"])->name("cart_shop_mobile");
    Route::post('/get_cart_shop_web', [cart::class, "get_cart_shop_web"])->name("get_cart_shop_web");
    Route::post('/categories', [cart::class, "categories"])->name("categories");
    Route::post('/cart_shop_data', [cart::class, "cart_shop_data"])->name("cart_shop_data");
    Route::post('/add_cart', [cart::class, "add_cart"])->name("add_cart");
    Route::post('/shop_add_cart', [cart::class, "shop_add_cart"])->name("shop_add_cart");
    Route::post('/remove_cart_web', [cart::class, "remove_cart_web"])->name("remove_cart_web");
    Route::post('/change_count_cart', [cart::class, "change_count_cart"])->name("change_count_cart");


    //check out
    Route::post('/subtotal_checkout', [requests::class, "subtotal_checkout"])->name("subtotal_checkout");
    Route::post('/shipping_method', [requests::class, "shipping_method"])->name("shipping_method");
    Route::post('/details_form', [requests::class, "details_form"])->name("details_form");
    Route::post('/cart_user', [requests::class, "cart_user"])->name("cart_user");
    Route::post('/checkout', [actions::class, "checkout"])->name("checkout");


    // actions
    Route::post('/contact_us_req', [actions::class, "contact_us_req"])->name("contact_us_req");
    Route::post('/find_air', [actions::class, "find_air"])->name("find_air");
    Route::post('/change_address', [actions::class, "change_address"])->name("change_address");
    Route::post('/change_account', [actions::class, "change_account"])->name("change_account");
    Route::get('/success_paypal', [actions::class, "success_paypal"])->name("success_paypal");
    Route::get('/error_paypal', [actions::class, "error_paypal"])->name("error_paypal");
    Route::get('/success_fawry', [actions::class, "success_fawry"])->name("success_fawry");
    Route::post('/set_comment', [actions::class, "set_comment"])->name("set_comment");
    Route::post("/send_mail_verify", [actions::class, "send_mail_verify"])->name("send_mail_verify"); 
    Route::post("/logout", [actions::class, "logout"])->name("logout"); 
    Route::post("/engineering_management", [actions::class, "engineering_management"])->name("engineering_management"); 
    Route::post("/get_notified", [actions::class, "get_notified"])->name("get_notified"); 

    



    Route::get("test", function (Request $request){
        $ip = $_SERVER['REMOTE_ADDR'] ;

        $device_name =  gethostname() ;
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        $city =  $details->city;
        $region =  $details->region;
        $country =  $details->country;
        $device_type =  $_SERVER['HTTP_SEC_CH_UA_PLATFORM'] ; // Error In Iphone
        echo $device_type ;
        return $device_type ; 
    })->name("test");

















 
    Route::prefix('Auth')->group(function () {
        Route::post('/login', [Login::class, "singin"])->name("login");
        Route::post('/register', [Login::class, "register"])->name("register");
        Route::get('/forgetpassword', function (){
            return view("website.Auth.ForgetPassword") ; 
        })->name("forgetpassword");
        Route::get('/change_password', [Login::class, "change_password"])->name("change_password");
        Route::get("mail", [Login::class, "verify_Email"])->name("mail");
        Route::post("sendlinkaccess", [Login::class, "sendlinkaccess"])->name("sendlinkaccess");
    });



    

});
