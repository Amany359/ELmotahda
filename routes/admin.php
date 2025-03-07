<?php

use App\Http\Controllers\admin\Auth\login;
use App\Http\Controllers\admin\DashBoard\Banners;
use App\Http\Controllers\admin\DashBoard\ecommerce;
use App\Http\Controllers\admin\DashBoard\Gallary;
use App\Http\Controllers\admin\DashBoard\Index;
use App\Http\Controllers\admin\DashBoard\actions;
use App\Http\Controllers\admin\DashBoard\requests;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(["prefix" => LaravelLocalization::setlocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', "BlockUser"]], function () {
    Route::prefix('Admin')->group(function () {
        Route::get('/login', function (){
            return view("Admin.Auth.login") ; 
        })->name("login_admin");    
        Route::post("sign_in", [login::class, "sign_in"])->name("sign_in_admin");
        




        Route::group(['middleware' => ['CheckAdmin']], function (){


            Route::group(['middleware' => ['Monthly']], function (){

                // pages
                Route::get("/", [Index::class, "index"])->name("Dashboard");
                Route::get("/product_page", [ecommerce::class, "product_page"])->name("product_page");
                Route::get("/add_project_page", [ecommerce::class, "add_project_page"])->name("add_project_page");
                Route::get("/add_service_page", [ecommerce::class, "add_service_page"])->name("add_service_page");
                Route::get("/porjects_admin", [ecommerce::class, "porjects_admin"])->name("porjects_admin");
                Route::get("/services_admin", [ecommerce::class, "services_admin"])->name("services_admin");
                Route::get("/edit_project", [ecommerce::class, "edit_project"])->name("edit_project");
                Route::get("/shop_page", [ecommerce::class, "shop_page"])->name("shop_page");
                Route::get("/check_out", [ecommerce::class, "check_out"])->name("check_out");
                Route::get("/confrim_order_admin", [ecommerce::class, "confrim_order_admin"])->name("confrim_order_admin");
                Route::get("/orders_admin", [Index::class, "orders_admin"])->name("orders_admin");
                Route::get("/users", [Index::class, "users"])->name("users");
                Route::get("/user_details", [Index::class, "user_details"])->name("user_details");
                Route::get("/privacy_admin", [Index::class, "privacy"])->name("privacy");
                Route::get("/shipping_areas", [Index::class, "shipping_areas"])->name("shipping_areas");
                Route::get("/sign_up_admin", [Index::class, "sign_up_admin"])->name("sign_up_admin");
                Route::get("/verify_Email_Admin", [Index::class, "verify_Email_Admin"])->name("verify_Email_Admin");
                Route::get("/all_quote", [Index::class, "all_quote"])->name("all_quote");
                Route::get("/conditioning_statistics", [Index::class, "conditioning_statistics"])->name("conditioning_statistics");
                Route::get("/contact_us_admin", [Index::class, "contact_us_admin"])->name("contact_us_admin");

            });
                
            
            // banner
            Route::get("/banner", [Banners::class, "banner"])->name("banner");
            Route::post("/add_banner", [Banners::class, "add_banner"])->name("add_banner");
            Route::post("/get_banner", [Banners::class, "get_banner"])->name("get_banner");
            Route::post("/delete_banner", [Banners::class, "delete_banner"])->name("delete_banner");
            
            // Photo_bar
            Route::get("/Photo_bar", [Banners::class, "Photo_bar"])->name("Photo_bar");
            Route::post("/add_photo_bar", [Banners::class, "add_photo_bar"])->name("add_photo_bar");
            Route::post("/get_photo_bar", [Banners::class, "get_photo_bar"])->name("get_photo_bar");
            Route::post("/delete_photo_bar", [Banners::class, "delete_photo_bar"])->name("delete_photo_bar");

            // gallary
            Route::get("/gallary", [Gallary::class, "gallary"])->name("gallary");
            Route::post("/get_categories", [Gallary::class, "get_categories"])->name("get_categories");
            Route::post("/get_gallary", [Gallary::class, "get_gallary"])->name("get_gallary");
            Route::post("/add_gallary", [Gallary::class, "add_gallary"])->name("add_gallary");
            Route::post("/delete_gallery", [Gallary::class, "delete_gallery"])->name("delete_gallery");

            // product
            Route::post("/add_product", [ecommerce::class, "add_product"])->name("add_product");
            Route::post("/remove_product", [ecommerce::class, "remove_product"])->name("remove_product");
            
            // edit product
            Route::post("/ed_remove_category", [ecommerce::class, "ed_remove_category"])->name("ed_remove_category");
            Route::post("/change_edit_photo", [ecommerce::class, "change_edit_photo"])->name("change_edit_photo");
            Route::post("/remove_photo", [ecommerce::class, "remove_photo"])->name("remove_photo");

            
            //Variation
            Route::post("/get_variation", [requests::class, "get_variation"])->name("get_variation");
            Route::post("/get_category", [requests::class, "get_category"])->name("get_category");
            Route::post("/get_tags", [requests::class, "get_tags"])->name("get_tags");

            
            // shop
            Route::post("/get_products", [requests::class, "get_products"])->name("get_products");
            Route::post("/filter_options", [requests::class, "filter_options"])->name("filter_options");

            
            // cart 
            Route::post("/get_cart_shop", [requests::class, "get_cart_shop"])->name("get_cart_shop");

            
            // orders
            Route::post("/get_orders", [requests::class, "get_orders"])->name("get_orders");
            Route::post("/change_status_order", [actions::class, "change_status_order"])->name("change_status_order");
            Route::post("/delete_order", [actions::class, "delete_order"])->name("delete_order");
            Route::get("/details_order", [requests::class, "details_order"])->name("details_order");
            Route::post("/get_reviews", [requests::class, "get_reviews"])->name("get_reviews");
            Route::post("/remove_comment", [actions::class, "remove_comment"])->name("remove_comment");
            Route::post("/purchases_user", [requests::class, "purchases_user"])->name("purchases_user");

            
            // actions 
            Route::post("/change_edit_photo_project", [actions::class, "change_edit_photo_project"])->name("change_edit_photo_project");
            Route::post("/remove_photo_project", [actions::class, "remove_photo_project"])->name("remove_photo_project");
            Route::post("/add_project", [actions::class, "add_project"])->name("add_project");
            Route::post("/add_service", [actions::class, "add_service"])->name("add_service");
            Route::get("/product_details", [actions::class, "product_details"])->name("product_details");
            Route::get("/edit_product", [actions::class, "edit_product"])->name("edit_product");
            Route::post("/request_edit_product", [actions::class, "request_edit_product"])->name("request_edit_product");
            Route::post("/request_edit_project", [actions::class, "request_edit_project"])->name("request_edit_project");
            Route::post("/delete_variation", [actions::class, "delete_variation"])->name("delete_variation");
            Route::post("/delete_project", [actions::class, "delete_project"])->name("delete_project");
            Route::post("/delete_quote", [actions::class, "delete_quote"])->name("delete_quote");
            Route::post("/delete_conditioning", [actions::class, "delete_conditioning"])->name("delete_conditioning");
            Route::post("/delete_service", [actions::class, "delete_service"])->name("delete_service");
            Route::post("/change_variation", [actions::class, "change_variation"])->name("change_variation");
            Route::post("/quantity_product", [actions::class, "quantity_product"])->name("quantity_product");
            Route::post("/add_product_cart", [actions::class, "add_product_cart"])->name("add_product_cart");
            Route::post("/remove_cart", [actions::class, "remove_cart"])->name("remove_cart");
            Route::post("/count_cart_shop", [actions::class, "count_cart_shop"])->name("count_cart_shop");
            Route::post("/request_order", [actions::class, "request_order"])->name("request_order");
            Route::post("/block_user", [actions::class, "block_user"])->name("block_user");
            Route::post("/block_admin", [actions::class, "block_admin"])->name("block_admin");
            Route::post("/active_user", [actions::class, "active_user"])->name("active_user");
            Route::post("/active_admin", [actions::class, "active_admin"])->name("active_admin");
            Route::post("/set_comment_admin", [actions::class, "set_comment_admin"])->name("set_comment_admin");
            Route::post("/edit_policy", [actions::class, "edit_policy"])->name("edit_policy"); 
            Route::post("/create_area", [actions::class, "create_area"])->name("create_area"); 
            Route::post("/remove_area", [actions::class, "remove_area"])->name("remove_area"); 
            Route::post("/register_admin", [actions::class, "register_admin"])->name("register_admin"); 
            Route::post("/dashboard_analysis", [actions::class, "dashboard_analysis"])->name("dashboard_analysis"); 



            // check out
            Route::post("/product_check_out", [requests::class, "product_check_out"])->name("product_check_out");
            Route::post("/get_order_sum", [requests::class, "get_order_sum"])->name("get_order_sum");
            
            
            // request
            Route::post("/all_users", [requests::class, "all_users"])->name("all_users");
            Route::post("/all_admins", [requests::class, "all_admins"])->name("all_admins");
            Route::post("/get_areas", [requests::class, "get_areas"])->name("get_areas"); 
            Route::post("/get_countrs", [requests::class, "get_countrs"])->name("get_countrs"); 
            Route::post("/get_all_quote", [requests::class, "get_all_quote"])->name("get_all_quote"); 
            Route::post("/get_all_conditioning", [requests::class, "get_all_conditioning"])->name("get_all_conditioning"); 
            Route::post("/get_all_quote", [requests::class, "get_all_quote"])->name("get_all_quote"); 
            Route::post("/get_Contact", [requests::class, "get_Contact"])->name("get_Contact"); 
            Route::post("/last_orders", [requests::class, "last_orders"])->name("last_orders"); 
            Route::post("/get_orders_month", [requests::class, "get_orders_month"])->name("get_orders_month"); 

        });
    });
});
