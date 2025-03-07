<?php

namespace App\Http\Controllers\admin\DashBoard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Http\Traits\GetAdminInfo;
use App\Http\Traits\SaveImage;
use App\Mail\AdminRegister;
use App\Mail\contact_us;
use App\Mail\order_canceled;
use App\Mail\Out_for_Delivery;
use App\Mail\payment_suucess;
use App\Models\Admin;
use App\Models\analysis;
use App\Models\BlockUser;
use App\Models\cart;
use App\Models\Contact_us as ModelsContact_us;
use App\Models\Engineering;
use App\Models\find_air;
use App\Models\order;
use App\Models\privacy_policy;
use App\Models\product;
use App\Models\product__categories;
use App\Models\product__options;
use App\Models\product__tags;
use App\Models\projects;
use App\Models\review;
use App\Models\Services;
use App\Models\Sessions;
use App\Models\Settings;
use App\Models\shipping;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str ;

class actions extends Controller
{

    use CleanInput ;
    use SaveImage ;
    use GetAdminInfo ;  

    public function register_admin (Request $request){
        
        if(isset($request->username, $request->email, $request->password, $request->conf_password)){
            $ip = $_SERVER['REMOTE_ADDR'] ;

            $username = $this->InsertInput("str", $request->username) ; 
            $email = $this->InsertInput("email", $request->email) ; 
            $password = $this->InsertInput("str", $request->password) ; 
            $conf_password = $this->InsertInput("str", $request->conf_password) ; 

            if($password === $conf_password){

                if(Admin::where("email", $email)->exists() !== true){
                    if(Admin::where("username", $username)->exists() !== true){

                        $password_hash = password_hash("seven_site911" . $password . "seven_site911", PASSWORD_DEFAULT); 
                        $token_base = $this->InsertInput("str", Str::random(60), "%", "") ; 
                        $cookies = $this->InsertInput("str", Str::random(60), "%", "") ; 

                        $device_name =  "" ;
                        $device_type =  "" ; 
                        $city = '';
                        $region = '';
                        $country = '';
                        try {
                            $device_name =  gethostname() ;
                            $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                            $city =  $details->city;
                            $region =  $details->region;
                            $country =  $details->country;
                            $device_type =  $_SERVER['HTTP_SEC_CH_UA_PLATFORM'] ; // Error In Iphone
                            //code...
                        } catch (\Throwable $th) {
                            $device_type =  "Iphone OR Linux" ; // Error In Iphone
                            //throw $th;
                        }
                        $today = new DateTime();
                        $interval = date_interval_create_from_date_string('2 days');
                        $future_date = date_add($today, $interval);
                        $token_verify = $this->InsertInput("str", Str::random(60), "%", "") ; 
                        Sessions::create([
                            "type" => "1",
                            "token" => $token_verify,
                            "date" =>  $future_date->format('Y-m-d'),
                        ]);

                        try {
                            //code...

                            $admin = Admin::create([
                                "username" => $username,
                                "email" => $email,
                                "password" => $password_hash,
                                "token_base" => $token_base,
                                "permation" => "1",
                                "cookies" => $cookies,
                                'device_name' => $device_name,
                                'device_type' => $device_type,
                                'ip_device' => $ip, 
                                'auto_location' => "$city,$region,$country" , 
                            ]);
                            Mail::to($email)->send(new AdminRegister($admin, $token_verify));

                            return response()->json([
                                "status_code" => 200, 
                                "msg" => trans("lan.check_email")
                            ]); 
                        } catch (\Throwable $th) {
                            return response()->json([
                                "status_code" => 400, 
                                "msg" => trans("lan.rongMessage")
                            ]); 
                            //throw $th;
                        }

                    }else{
                        return response()->json([
                            "status_code" => 400,
                            "msg" => trans("lan.username_found")
                        ]); 
                    }
                }else{
                    return response()->json([
                        "status_code" => 400,
                        "msg" => trans("lan.email_found")
                    ]); 
                }


            }else{
                return response()->json([
                    "status_code" => 400,
                    "msg" => trans("lan.c_password")
                ]); 
            }




        }else{
            return response()->json([
                "status_code" => 400,
                "msg" => trans("lan.data is required")
            ]); 
        }

    }


    public function dashboard_analysis (){
        $curent_month = date('m') ;
        $curent_year = date('Y') ;
        $comming_soon = 0 ; 
      
        // visitors
            $list_visitors = [];
            $visitors = analysis::orderBy('created_at', 'asc')->where("created_at", "LIKE", "$curent_year%")->get();

            $count_month = 0 ;
            $count = 0 ;
            $curent_month_vistors = -1 ;
            $count_old_month = 1 ;
            $old_month = 0 ;
            if($curent_month == '01'){
                $old_month = "12"; 
            }else{
                $old_month = $curent_month - 1 ; 
            }

            foreach($visitors as $vistor){
                $month_vistor = substr($vistor->created_at, 5, 2) ;
                if($vistor->page == "coming_soon"){
                    $comming_soon += 1; 
                }
                if($curent_month_vistors == -1){
                    $count_month = $month_vistor ; 
                    $curent_month_vistors = 0 ; 
                }
                if($month_vistor == $curent_month){
                    $curent_month_vistors += 1 ;
                }
                if($month_vistor == $old_month){
                    $count_old_month += 1 ;
                }
                if($month_vistor == $count_month){
                    $count += 1;                 
                }else{
                    $count_month = $month_vistor ; 
                    array_push($list_visitors, $count);
                    $count = 1 ; 
                }
            }

            array_push($list_visitors, $count);

            
            // all visitor
            $rate_vistors = ( $curent_month_vistors * 100 ) / $count_old_month ;  
        // end visitor

        
        // reviews
            $list_reviews = [];

            $reviews = review::orderBy('created_at', 'asc')->where("created_at", "LIKE", "$curent_year%")->get();
            $curent_month_reviews = -1 ; // all review in this month 
            $count_month_reviews = 0 ;
            $count_month = 0 ; // all review in every month 
            $count_old_month_reviews = 1 ; 

            foreach($reviews as $reviews){
                $month_reviews = substr($reviews->created_at, 5, 2) ;
                if($curent_month_reviews == -1){
                    $count_month_reviews = $month_reviews ; 
                    $curent_month_reviews = 0 ; 
                }
                if($month_reviews == $curent_month){
                    $curent_month_reviews += 1 ;
                }


                if($month_reviews == $count_month_reviews){
                    $count_month += 1;                 
                }else{
                    $count_month_reviews = $month_reviews ; 
                    array_push($list_reviews, $count_month);
                    $count_month = 1 ; 
                }
            }
            array_push($list_reviews, $count_month);
            $rate_reviews = ( $curent_month_reviews * 100 ) / $count_old_month_reviews ;  
        // end 
        
        
        // total orders
            $list_profit = [];
            $total = 0 ;
            $total_monthly = 0 ;
            $annual_income = 0 ;
            $orders = order::orderBy('order_token', 'desc')->get();
            $profit_start = -1 ; 
            $every_year = 0 ; 
            $total_year = 0 ; 
            foreach ($orders as $order) {
                if($order->process == '4'){
                    $month = substr($order->created_at, 5, 2) ; 
                    $year = substr($order->created_at, 0, 4) ; 
                    if($profit_start == -1){
                        $profit_start = 0 ;
                        $every_year = $year ; 
                    }

                    if($every_year == $year){
                        $total_year += ($order->product_price * $order->order_quantity) ; 
                    }else{
                        array_push($list_profit, $total_year);
                        $total_year = 0 ; 
                        $every_year = $year ; 
                        $total_year += ($order->product_price * $order->order_quantity) ; 
                    }

                    if($year == $curent_year){
                        if($month == $curent_month){
                            // get monthly
                            $total_monthly += ( $order->product_price * $order->order_quantity  ) ; 
                        }
                        // get curent year
                        $annual_income += ( $order->product_price * $order->order_quantity  ) ; 
                    }
                    // total global
                    $total += ( $order->product_price * $order->order_quantity  ) ; 
                }
            }
            array_push($list_profit, $total_year);
        //


        // Weekly Stats
            $find_air = find_air::where("created_at", "LIKE", "$curent_year-$curent_month%")->get(); 
            $engineering_management = Engineering::where("created_at", "LIKE", "$curent_year-$curent_month%")->get();
            $contact_us = ModelsContact_us::where("created_at", "LIKE", "$curent_year-$curent_month%")->get();
        // end

        // new member 
            $users = User::where("created_at", "LIKE", "$curent_year-$curent_month%")->get(); 
            $all_users = ""; 
            foreach($users as $user){
                $image = url("images/profile/customer.png"); 
                $all_users = $all_users . "
                    <li class='ms-n8'>
                        <a href='javascript:void(0)' class='me-1'>
                            <img src='$image' 
                            class='rounded-circle border border-2 border-white' width='44' height='44' alt='modernize-img' />
                        </a>
                    </li>
                ";
            }

        // end

 
       
        
        
        return response()->json([
            "status_code" => 200,
            "total" => $total,
            "find_air" => count($find_air),
            "engineering_management" => count($engineering_management),
            "contact_us" => count($contact_us),
            "users" => $all_users,
            "list_profit" => $list_profit,
            "comming_soon" => $comming_soon,
            "rate_reviews" => (int)$rate_reviews,
            "rate_vistors" => (int)$rate_vistors,
            "reviews" => $curent_month_reviews,
            "visitors" => $curent_month_vistors,
            "list_reviews" => $list_reviews,
            "list_visitors" => $list_visitors,
            "total_monthly" => $total_monthly,
            "annual_income" => $annual_income,
        ]);

    }
    

    

    public function product_details (Request $request){
        $admin = $this->get_info_admin();
        $product_id = $this->InsertInput('int', $request->product_id) ;

        $product = product::where("product_id", $product_id)->first() ; 
        
        if(isset($product)){
            $categories = DB::select("SELECT * FROM `product__categories` JOIN `categories` ON `product__categories`.`category_id` = `categories`.`category_id` WHERE `product__categories`.`product_id` = '$product->product_id' ");
            $options = DB::select("SELECT * FROM `product__options` JOIN `options` ON `product__options`.`option_id` = `options`.`option_id` WHERE `product__options`.`product_id` = '$product->product_id' ");
            $data = [
                'admin' => $admin,
                'categories' => $categories,
                'options' => $options,
                'product' => $product
            ]; 
            return view("Admin.index.product_details", $data);
        }else{
            $data = [
                'admin' => $admin
            ]; 
            return view("Admin.index.shop", $data);
        }

    }

    public function edit_product (Request $request){
        $admin = $this->get_info_admin();
        $product_id = $this->InsertInput('int', $request->product_id) ;

        $product = product::where("product_id", $product_id)->first() ; 

        if(isset($product)){
            $categories = DB::select("SELECT * FROM `product__categories` JOIN `categories` ON `product__categories`.`category_id` = `categories`.`category_id` WHERE `product__categories`.`product_id` = '$product->product_id' ");
            $options = DB::select("SELECT * FROM `product__options` JOIN `options` ON `product__options`.`option_id` = `options`.`option_id` WHERE `product__options`.`product_id` = '$product->product_id' ");

            
            $data = [
                'admin' => $admin,
                'categories' => $categories,
                'options' => $options,
                'product' => $product
            ]; 
            return view("Admin.index.edit_product", $data);
        }else{
            $data = [
                'admin' => $admin
            ]; 
            return view("Admin.index.shop", $data);
        }

    }
    
    public function request_edit_product (Request $request){

        if(isset(
            $request->product_name,
            $request->content_ar,
            $request->content_en,
            $request->price,
            $request->discount,
            $request->vat,
            $request->quantity,
            $request->status
        )){
            $product_name = $this->InsertInput("str", $request->product_name); 
            $discount = $this->InsertInput("str", $request->discount); 
            $price = $this->InsertInput("int", $request->price); 
            $vat = $this->InsertInput("int", $request->vat); 
            $status = $this->InsertInput("int", $request->status); 
            $quantity = $this->InsertInput("int", $request->quantity); 
            $product_id = $this->InsertInput("int", $request->product_id); 
            $content_ar = $request->content_ar; 
            $content_en = $request->content_en; 
            $categories = $request->categories; 
            $tags = $request->tags; 
            $product_name = $this->InsertInput("str", $request->product_name); 
            $variation_key = $request->variation_key ; //list
            $variation_value = $request->variation_value ; //list

   

            if($discount == "customrange"){
                $discount = $this->InsertInput("str", $request->customrange) . "%"; 
            }elseif($discount == "fixed_price"){
                $discount = $this->InsertInput("int", $request->fixed_price); 
            }else{
                $discount = 0 ; 
            }


            product::where("product_id", $product_id)->update([
                "product_name" => $product_name,
                "product_price" => $price,
                "desc_ar" => $content_ar,
                "desc_en" => $content_en,
                "quantity" => $quantity,
                "status" => $status,
                "vat" => $vat,
                "discount" => $discount
            ]);
            


            if(isset($variation_key)){
                for ($i=0; $i < count($variation_key) ; $i++) {
                    if($variation_value[$i] != ""){
                        product__options::create([
                            "product_id" => $product_id,
                            "option_id" =>  $this->InsertInput('int', $variation_key[$i]),  
                            "value" => $this->InsertInput("str", $variation_value[$i] ) 
                        ]);
                    }
                }

            }

            
            if(isset($categories)){
                for ($z=0; $z < count($categories) ; $z++) {
                    if($categories[$z] != ""){
                        product__categories::create([
                            "product_id" => $product_id,
                            "category_id" =>  $this->InsertInput('int', $categories[$z]),
                        ]);
                    }
                }
            }


            
            if($tags != ""){
                for ($y=0; $y < count($tags) ; $y++) {
                    if($tags[$y] != ""){
                        product__tags::create([
                            "product_id" => $product_id,
                            "tag_id" =>  $this->InsertInput('int', $tags[$y]),
                        ]);
                    }
                }
            }

            
            return response()->json([
                "status_code" => 200, 
                "msg" => "Success"
            ]);


            
        }else{
            return response()->json([
                "status_code" => 400, 
                "msg" => "All Data Is Requierd"
            ]);
        }
    }


    public function delete_variation (Request $request){
        if(isset($request->option_id)){
            $option_id = $this->InsertInput('int', $request->option_id) ; 

         
            product__options::where("count_product_option", $option_id)->delete() ; 

        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }
    
    
    public function remove_photo_project (Request $request){
        if(isset($request->id, $request->index)){
            $id = $this->InsertInput("int", $request->id);
            $index = $this->InsertInput("str", $request->index);

            $check = projects::where("id", $id);

            if($check->exists() === true){
                $project = $check->first(); 
                $image = explode("_", $project->images);

                 



                if($index != "none_"){
                    // $file_name = $this->save_photo($request->image, 'product');
                    if(in_array($index, $image)){
                        
                        $file_name = $this->save_photo($request->image, 'projects');
                        $key = array_search($index, $image) ; 
                        // $image[$key] = null ;
                        unset($image[$key] ) ;
                        $db_images = implode("_", $image);
                        $check->update([
                            "images" => $db_images 
                        ]);
                        return response()->json([
                            "status_code" => 200,
                            "msg" => "Success remove"
                        ]);
                        
                    }else{
                        
                        return response()->json([
                            "status_code" => 200,
                            "msg" => "Success remove"
                        ]);

                    }

                }else{
                    $file_name = $this->save_photo($request->image, 'projects');
                    array_push($image, $file_name);
                    $db_images = implode("_", $image);
                    $check->update([
                        "images" => $db_images 
                    ]);
                    return response()->json([
                        "status_code" => 200,
                        "msg" => "Success add"
                    ]);
                }


            }else{
                return response()->json([
                    'status_code' => 400,
                    "msg" => "project is not found"
                ]);
            }

        }else{            
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.data is required")
            ]);
        }
    }


    public function change_edit_photo_project (Request $request){
        if(isset($request->id)){
            $id = $this->InsertInput("int", $request->id);
            $index = $this->InsertInput("str", $request->index);

            $check = projects::where("id", $id);

            if($check->exists() === true){
                $projects = $check->first(); 
                $image = explode("_", $projects->images);

                 



                if($index != "none_"){
                    // $file_name = $this->save_photo($request->image, 'product');
                    if(in_array($index, $image)){
                        $file_name = $this->save_photo($request->image, 'projects');
                        $key = array_search($index, $image) ; 
                        $image[$key] = $file_name ;
                        $db_images = implode("_", $image);
                        $check->update([
                            "images" => $db_images 
                        ]);
                        return response()->json([
                            "status_code" => 200,
                            "msg" => "Success edit"
                        ]);
                    }else{
                        $file_name = $this->save_photo($request->image, 'projects');
                        array_push($image, $file_name);
                        $db_images = implode("_", $image);
                        $check->update([
                            "images" => $db_images 
                        ]);
                        return response()->json([
                            "status_code" => 200,
                            "msg" => "Success add"
                        ]);
                    }

                }else{
                    $file_name = $this->save_photo($request->image, 'projects');
                    array_push($image, $file_name);
                    $db_images = implode("_", $image);
                    $check->update([
                        "images" => $db_images 
                    ]);
                    return response()->json([
                        "status_code" => 200,
                        "msg" => "Success add"
                    ]);
                }


            }else{
                return response()->json([
                    'status_code' => 400,
                    "msg" => "project is not found"
                ]);
            }

        }else{
    
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.data is required")
            ]);
        }
    }

    public function delete_project (Request $request){
        if(isset($request->id)){
            $id = $this->InsertInput('int', $request->id) ; 

         
            projects::where("id", $id)->delete() ; 

            return response()->json([
                'status_code' => 200,
                'msg' => trans("lan.success_process")
            ]);
        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "Change something in dev tool ( delete projects )"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }
    
    public function delete_quote (Request $request){
        if(isset($request->id)){
            $id = $this->InsertInput('int', $request->id) ; 

         
            Engineering::where("id", $id)->delete() ; 

            return response()->json([
                'status_code' => 200,
                'msg' => trans("lan.success_process")
            ]);
        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "Change something in dev tool ( delete quote )"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }
    
    
    public function delete_conditioning (Request $request){
        if(isset($request->id)){
            $id = $this->InsertInput('int', $request->id) ; 

         
            find_air::where("id", $id)->delete() ; 

            return response()->json([
                'status_code' => 200,
                'msg' => trans("lan.success_process")
            ]);
        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "Change something in dev tool ( delete conditioning )"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }
    
    public function delete_service (Request $request){
        if(isset($request->id)){
            $id = $this->InsertInput('int', $request->id) ; 

         
            Services::where("id", $id)->delete() ; 

            return response()->json([
                'status_code' => 200,
                'msg' => trans("lan.success_process")
            ]);
        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "Change something in dev tool ( delete projects )"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }
    

    
    public function add_project (Request $request){
        // fixed_price
        // customrange
        // tags     (list)
          

        if(isset(
            $request->title_ar,
            $request->content_ar,
            $request->desc_ar,
            $request->file,
            $request->status
        )){
            $status = $this->InsertInput("int", $request->status); 
            $title_ar = $request->title_ar; 
            $title_en = $request->title_en; 
            $desc_ar = $request->desc_ar; 
            $desc_en = $request->desc_en; 
            $content_ar = $request->content_ar; 
            $content_en = $request->content_en; 
            $file = $request->file; // list
            $photos_name = [];

            

            for ($x=0; $x < 6 ; $x++) { 
                if(isset($file[$x])){
                    $image = $this->save_photo($file[$x], "projects", false, time() . $x) ; 
                    array_push($photos_name, $image) ; 
                }
            }
            $images = implode("_", $photos_name);


            try {
                //code...
                projects::create([
                    "title_ar" => $title_ar,
                    "title_en" => $title_en,
                    "desc_ar" => $desc_ar,
                    "desc_en" => $desc_en,
                    "content_ar" => $content_ar,
                    "content_en" => $content_en,
                    "images" => $images,
                    "status" => $status
                ]);
                return response()->json([
                    "status_code" => 200, 
                    "msg" => "Success"
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    "status_code" => 400, 
                    "msg" => $th
                ]);
                //throw $th;
            }
            
            


            
        }else{
            return response()->json([
                "status_code" => 400, 
                "msg" => "All Data Is Requierd"
            ]);
        }
    }

    
    public function add_service (Request $request){
        // fixed_price
        // customrange
        // tags     (list)
          

        if(isset(
            $request->name_ar,
            $request->name_en,
            $request->file
        )){
            $name_ar = $request->name_ar; 
            $name_en = $request->name_en; 
            $file = $this->save_photo($request->file, "services"); // list

            

            try {
                //code...
                try {
                    //code...
                    Services::create([
                        "name_ar" => $name_ar,
                        "name_en" => $name_en,
                        "image" => $file
                    ]);
                } catch (\Throwable $th) {
                    return $th ; 
                    //throw $th;
                }
                return response()->json([
                    "status_code" => 200, 
                    "msg" => "Success"
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    "status_code" => 400, 
                    "msg" => $th
                ]);
                //throw $th;
            }
            
            


            
        }else{
            return response()->json([
                "status_code" => 400, 
                "msg" => "All Data Is Requierd"
            ]);
        }
    }

    
    public function request_edit_project (Request $request){

        if(isset(
            $request->id,
            $request->title_ar,
            $request->content_ar,
            $request->desc_ar,
            $request->status
        )){
            $status = $this->InsertInput("int", $request->status); 
            $id = $this->InsertInput("int", $request->id); 
            $title_ar = $request->title_ar; 
            $title_en = $request->title_en; 
            $desc_ar = $request->desc_ar; 
            $desc_en = $request->desc_en; 
            $content_ar = $request->content_ar; 
            $content_en = $request->content_en; 

            

            try {
                //code...
               
                projects::where("id", $id)->update([
                    "title_ar" => $title_ar,
                    "title_en" => $title_en,
                    "desc_ar" => $desc_ar,
                    "desc_en" => $desc_en,
                    "content_ar" => $content_ar,
                    "content_en" => $content_en,
                    "status" => $status
                ]);

                return response()->json([
                    "status_code" => 200, 
                    "msg" => "Success"
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    "status_code" => 400, 
                    "msg" => $th
                ]);
                //throw $th;
            }
            
            


            
        }else{
            return response()->json([
                "status_code" => 400, 
                "msg" => "All Data Is Requierd"
            ]);
        }
    }


    public function change_variation (Request $request){
        if(isset($request->id, $request->value)){
            $id = $this->InsertInput('int', $request->id) ; 
            $value = $this->InsertInput('str', $request->value) ; 

            product__options::where("count_product_option", $id)->update([
                'value' => $value
            ]) ; 
            

        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    public function quantity_product (Request $request){
        if(isset($request->product_id, $request->value)){
            $value = $this->InsertInput('int', $request->value) ; 
            $product_id = $this->InsertInput('int', $request->product_id) ; 


            try {
                //code...
                cart::where('product_id', $product_id)->update([
                    "cart_quantity" => $value
                ]);
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else{
            $admin = $this->get_info_admin(); 
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    public function add_product_cart (Request $request){
        
        if(isset($request->product_id)){
            $product_id = $this->InsertInput('int', $request->product_id) ; 
            $admin = $this->get_info_admin(); 

            $cart = cart::where("product_id", $product_id)->where("user", $admin->email)->first();

            if($cart){
                $cart_quantity = $cart->cart_quantity + 1 ; 
                cart::where('product_id', $product_id)->update([
                    "cart_quantity" => $cart_quantity
                ]);
                return response()->json([
                    'status_code' => 200
                ]);
            }else{
                cart::create([
                    "cart_quantity" => 1,
                    "product_id" => $product_id,
                    "user" => $admin->email
                ]);
                return response()->json([
                    'status_code' => 200
                ]);
            }
         

        }else{
            $admin = $this->get_info_admin(); 
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    
    public function remove_cart (Request $request){
        if(isset($request->product_id)){
            $product_id = $this->InsertInput('int', $request->product_id) ; 
            $admin = $this->get_info_admin(); 

         
            DB::delete("DELETE FROM `cart` WHERE `product_id` = '$product_id' AND `user` = '$admin->email' "); 
         

        }else{
            $admin = $this->get_info_admin(); 
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    public function count_cart_shop (Request $request){
        $admin = $this->get_info_admin(); 


        $cart = cart::where("user", $admin->email)->get() ; 

        return response()->json([
            "count" => count($cart) 
        ]);
         
    }

    public function request_order (Request $request){
        $admin = $this->get_info_admin(); 

        if(isset($request->name, $request->phone)){

            $name = $this->InsertInput('str', $request->name); 
            $phone = $this->InsertInput("int", $request->phone);
            $email = $this->InsertInput("email", $request->email) ;
            $sub_total  = 0 ; 
            $Discount = 0  ; 
            $total = 0  ; 
            $settings = Settings::first();

            $cart_products = DB::select("SELECT * FROM `cart` JOIN `product` ON `cart`.`product_id` = `product`.`product_id` WHERE `cart`.`user` = '$admin->email' ") ;

            if($cart_products){
                $token =  $this->InsertInput("str", Str::random(60), "%", "") ;  
                foreach($cart_products as $cart){
                    $images = explode("_", $cart->images);

                    $sub_total += $cart->product_price * $cart->cart_quantity ; 
                
        
                    if(strpos($cart->discount, "%") !== false){
                        $discount_number = str_ireplace("%", "", $cart->discount);
                        $Discount += (($cart->product_price * $cart->cart_quantity) * $discount_number)  / 100 ; 
        
                    }elseif($cart->discount >= 1){
                        $Discount += $cart->discount * $cart->cart_quantity ; 
                    }else{
                        $Discount += $cart->discount * $cart->cart_quantity ; 
                    }
                    $total = ($sub_total + $settings->shipping)  ; 


                    //code...
                    order::create([
                        "product_id" => $cart->product_id,
                        "order_quantity" => $cart->cart_quantity,
                        "product_name" => $cart->product_name,
                        "product_price" => $cart->product_price,
                        "product_image" => $images[0],
                        "product_discount" => $cart->discount,
                        "user" => $admin->email,
                        "name" => $name,
                        "email2" => $email,
                        "total" => $total,
                        "token" => $token,
                        "payment" => "dash",
                        "process" => 1,
                        "phone_order" => $phone,
                    ]);
                }
                cart::where("user", $admin->email)->delete(); 

                return response()->json([
                    'status_code' => 200,
                    "msg" => "success"
                ]);

            }else{
                return response()->json([
                    "status_code" => 400,
                    "msg" => "There are no products in cart"
                ]);
            }



        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    public function change_status_order (Request $request){
        $admin = $this->get_info_admin(); 

        if(isset($request->id, $request->token)){

            $id = $this->InsertInput('int', $request->id); 
            $token = $this->InsertInput('str', $request->token); 
            $email = ""; 

            $orders = DB::select("SELECT * FROM `orders` JOIN `product` ON `orders`.`product_id` = `product`.`product_id` WHERE `orders`.`order_token` = '$token' ") ;



            if($orders){
                $list_product = []; 
                $list_quantity = []; 

                foreach($orders as $order){

                    $check_product = product::where("product_id", $order->product_id) ; 
                    if($id == "2"){
                        if($check_product->exists()){
                            $product = $check_product->first(); 
                            if($product->quantity >= $order->order_quantity){    
                                if(count($list_product) == 0){
                                    if(count($list_quantity) == 0){
                                        $new_quantity = $product->quantity - $order->order_quantity ; 
                                        $check_product->update([
                                            "quantity" => $new_quantity
                                        ]);
                                        order::where("order_token", $token)->update([
                                            "process" => $id
                                        ]);
                                        $email = $order->email2 ;
                                    }else{
                                        return response()->json([
                                            "status_code" => 400,
                                            "msg" => "There is a product out of stock"
                                        ]);
                                    }
                                }else{
                                    return response()->json([
                                        "status_code" => 400,
                                        "msg" => "There is a product that is not available"
                                    ]);
                                }
                            }else{
                                array_push($list_quantity, $order->product_id); 
                            }
                        }else{
                            array_push($list_product, $order->product_id); 
                        }

                    }else{
                        order::where("order_token", $token)->update([
                            "process" => $id
                        ]);
                        $email = $order->email2 ;    
                    }
                }

                if($id == '3'){
                    $link = $request->link ; 
                    $number = $request->number ; 
                    Mail::to($email)->send(new Out_for_Delivery($orders, $token, $link, $number ));
                }else if($id == "2"){
                    $link = $request->link ; 
                    Mail::to($email)->send(new payment_suucess($orders, $token, $link));
                }

                return response()->json([
                    "status_code" => 200,
                    "msg" => "Success"
                ]);

                

            }else{
                return response()->json([
                    "status_code" => 400,
                    "msg" => "There is are no products"
                ]);
            }



        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }


    public function delete_order (Request $request){
        $admin = $this->get_info_admin(); 

        if(isset($request->token)){

            $token = $this->InsertInput('str', $request->token); 
            $reason = $this->InsertInput('str', $request->reason); 

        


            $check_order = order::where("order_token", $token);  


            if($check_order->exists() == true){

                $orders = $check_order->get(); 
                
                $email = $check_order->first()->email2; 

                try {
                    //code...
                    Mail::to($email)->send(new order_canceled($orders, $token, $reason ));
                        
                    $check_order->update([
                        "status" => 0,
                        "reason" => $reason 
                    ]); 

                } catch (\Throwable $th) {
                    //throw $th;
                    return response()->json([
                        "status_code" => 400,
                        "msg" => "Error"
                    ]);
                }



            }else{
                return response()->json([
                    "status_code" => 400,
                    "msg" => "order is not found"
                ]);
            }




            return response()->json([
                "status_code" => 200,
                "msg" => "success"
            ]);


        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    public function remove_comment (Request $request){
        $admin = $this->get_info_admin(); 

        if(isset($request->id)){

            $id = $this->InsertInput('int', $request->id); 

            review::where("id_review", $id)->delete();  

            return response()->json([
                "status_code" => 200,
                "msg" => "success"
            ]);


        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "need to remove comment without id "
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    public function block_user (Request $request){
        $admin = $this->get_info_admin(); 

        if(isset($request->id)){

            $id = $this->InsertInput('int', $request->id); 

            User::where("id", $id)->update([
                "status" => "Block"
            ]);

            return response()->json([
                "status_code" => 200,
                "msg" => "success"
            ]);


        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "need to remove Users without id "
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    public function block_admin (Request $request){
        $admin = $this->get_info_admin(); 

        if(isset($request->id)){

            $id = $this->InsertInput('int', $request->id); 

            Admin::where("id", $id)->update([
                "status" => "Block"
            ]);

            return response()->json([
                "status_code" => 200,
                "msg" => "success"
            ]);


        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "need to remove Admin without id "
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }


    public function active_user (Request $request){
        $admin = $this->get_info_admin(); 

        if(isset($request->id)){

            $id = $this->InsertInput('int', $request->id); 

            User::where("id", $id)->update([
                "status" => "Active"
            ]);

            return response()->json([
                "status_code" => 200,
                "msg" => "success"
            ]);


        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "need to remove comment without id "
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    

    public function active_admin (Request $request){
        $admin = $this->get_info_admin(); 

        if(isset($request->id)){

            $id = $this->InsertInput('int', $request->id); 

            Admin::where("id", $id)->update([
                "status" => "Active"
            ]);

            return response()->json([
                "status_code" => 200,
                "msg" => "success"
            ]);


        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $admin->email,
                "ip_device" => $ip,
                "reason" => "need to remove comment without id "
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    
    public function set_comment_admin (Request $request){


        if(isset($request->comment, $request->rating, $request->product_id, $request->user)){



            $user = $this->InsertInput("str", $request->user);
            $comment = $this->InsertInput("str", $request->comment);
            $rating = $this->InsertInput("int", $request->rating);
            $product_id = $this->InsertInput("int", $request->product_id);
            $verify = 0 ; 
            
            $order = order::where("product_id", $product_id)->where("user", $user)->first() ; 


            if($order){
                $verify = 1 ; 
            }

            try {
                //code...
                review::create([
                    "user" => $user,
                    "product_id" => $product_id,
                    "rating" => $rating,
                    "comment" => $comment,
                    "verify" => $verify,
                ]);
                return response()->json([
                    "status_code" => 200,
                    "msg" => trans("lan.success")
                ]); 

            } catch (\Throwable $th) {
                //throw $th;
                return response()->json([
                    "status_code" => 400,
                    "msg" => trans("lan.Error")
                ]); 
            }



        }else{
            return response()->json([
                "status_code" => 400,
                "msg" => "rating, email and comment is required"
            ]);
        }
    }


    public function edit_policy (Request $request){


        if(isset($request->content_ar, $request->content_en)){
            
            $content_ar = $request->content_ar ;
            $content_en = $request->content_en ;
            $type = $this->InsertInput("int", $request->type) ;

            try {
                //code...
                if($type == "1"){
                    privacy_policy::where("id", '1')->update([
                        "text_ar" => $content_ar,
                        "text_en" => $content_en,
                    ]);
                }elseif($type == "2"){
                    privacy_policy::where("id", '1')->update([
                        "desc_ar" => $content_ar,
                        "desc_en" => $content_en,
                    ]);
                }elseif($type == "3"){
                    privacy_policy::where("id", '1')->update([
                        "delivery_ar" => $content_ar,
                        "delivery_en" => $content_en,
                    ]);
                }
                return response()->json([
                    "status_code" => 200,
                    "msg" => "Success"
                ]);
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json([
                    "status_code" => 400,
                    "msg" => "Error"
                ]);
            }


        } 

    }


    public function create_area (Request $request){

        if(isset($request->city, $request->zone, $request->price, $request->countrs)){
            
            $city = $this->InsertInput("str", $request->city) ;
            $zone = $this->InsertInput("str", $request->zone) ;
            $countrs = $this->InsertInput("str", $request->countrs) ;
            $price = $this->InsertInput("int", $request->price) ;

            try {
                //code...
                shipping::create([
                    "city" => $city,
                    "countrs" => $countrs,
                    "type" => $zone,
                    "price" => $price
                ]);
                return response()->json([
                    "status_code" => 200,
                    "msg" => "Success"
                ]);
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json([
                    "status_code" => 400,
                    "msg" => "Error"
                ]);
            }


        } 

    }

    public function remove_area (Request $request){

        if(isset($request->id)){

            
            $id = $this->InsertInput("int", $request->id) ;

            try {
                //code...
                shipping::where("id", $id)->delete();
                
                return response()->json([
                    "status_code" => 200,
                    "msg" => "Success"
                ]);
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json([
                    "status_code" => 400,
                    "msg" => "Error"
                ]);
            }


        } 

    }


}
