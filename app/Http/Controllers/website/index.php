<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Traits\GetuserInfo;
use App\Models\Banner;
use App\Models\BlockUser;
use App\Models\Photo_bar;
use App\Models\privacy_policy;
use App\Models\product;
use App\Models\projects;
use App\Models\Services;
use App\Models\user_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;





class index extends Controller
{

    use GetuserInfo ; 

    public function index (){
        // $banners = Banner::all() ; 
        $products = product::orderBy("product_id", "desc")->get()->take(6) ; 
        $products_discount = product::orderBy("discount", "desc")->get()->take(6) ; 
        // $Photo_bar = Photo_bar::all() ; 
        $user = $this->get_info_user() ; 
        $data = [
            'products' => $products ,
            'products_discount' => $products_discount ,
            // 'Photo_bar' => $Photo_bar ,
            // 'banners' => $banners ,
            'user_info' => $user ,
        ];
        return view('website.index.index', $data);
    }


    public function gallery (){
        return view('website.index.gallery_');
    }

    public function find (){
        return view('website.index.find_air');
    }

    public function engineering (){
        return view('website.index.engineering');
    }


    public function coming_soon (){
        
        return view('website.index.coming_soon');
    }

    public function privacy_policy (){
        $privacy_policy = privacy_policy::first();
        return view('website.index.privacy-policy', ['privacy_policy' => $privacy_policy]);
    }

    public function terms_con (){
        $privacy_policy = privacy_policy::first();
        return view('website.index.terms_con', ['privacy_policy' => $privacy_policy]);
    }

    public function delivery_returns (){
        $privacy_policy = privacy_policy::first();
        return view('website.index.delivery_returns', ['privacy_policy' => $privacy_policy]);
    }

    public function sign_in (){
        return view('website.Auth.sign-in');
    }

    public function sign_up (){
        return view('website.Auth.sign-up');
    }

    public function contact (){
        $user = $this->get_info_user() ; 
        return view('website.index.contact', ['user' => $user]);
    }

    public function about (){
        $user = $this->get_info_user() ; 
        return view('website.index.about', ['user' => $user]);
    }

    public function projects (){
        $user = $this->get_info_user() ; 
        $projects = projects::orderBy('id', 'desc')->get(); 
        return view('website.index.projects', ['user' => $user, 'projects' => $projects]);
    }

    public function services (){
        $user = $this->get_info_user() ; 
        $services = Services::orderBy('id', 'desc')->get(); 
        return view('website.index.services', ['user' => $user, 'services' => $services]);
    }


    public function project_details (Request $request){
        if(isset($request->id)){
            $id = $this->InsertInput("int", $request->id) ; 
            $user = $this->get_info_user() ; 
            $project = projects::where("id", $id)->first() ;
            
            if($project){
                return view('website.index.project_details', ['user' => $user, 'project' => $project]);
            }else{
                return view("website.index.index")->with("error", "Error") ; 
            }
        }
    }


    public function shop (){
        return view('website.index.shop');
    }

    public function cart (){
        return view('website.index.cart');
    }

    public function checkout (){
        return view('website.index.check_out');
    }

    public function user_profile (){
        $user = $this->get_info_user() ;
        $guest = "0" ; 
        $user_info = "" ; 


        if($user === false){
            $guest = "1" ; 
            if(isset($_COOKIE['guest_user'])){
                $user = $_COOKIE['guest_user'] ; 
            }else{
                $user = $this->InsertInput("str" , "guest_" . rand(10, 10000000), "%", "") ;
                setcookie("guest_user", $user , time() + 60 * 60 * 24 * 30, '/'); 
            }
        }else{
            $user_ = $user->email;
            $user_info = user_info::where("user", $user_)->first() ;  
        }
        


        $data = [
            "guest" => $guest,
            "user" => $user,
            "user_info" => $user_info,
        ];

        return view('website.index.profile_user', $data);
    }



    public function product_details (Request $request){
        if(isset($request->id)){
            $id = $this->InsertInput("int", $request->id) ; 

            $product = product::where("product_id", $id)->first();

            if($product){
                
                $options = DB::select("SELECT * FROM `product__options` JOIN `options` ON `product__options`.`option_id` = `options`.`option_id` WHERE `product__options`.`product_id` = '$id' ");
                $review_product = DB::select("SELECT * FROM `review_product` JOIN `users` ON `review_product`.`user` = `users`.`email` JOIN `info_users` ON `review_product`.`user` = `info_users`.`user` WHERE `review_product`.`product_id` = '$id' ") ; 


                $user = $this->get_info_user() ;
                $guest = "0" ; 
        
        
                if($user === false){
                    $guest = "1" ; 
                    if(isset($_COOKIE['guest_user'])){
                        $user = $_COOKIE['guest_user'] ; 
                    }else{
                        $user = $this->InsertInput("str" , "guest_" . rand(10, 10000000), "%", "") ;
                        setcookie("guest_user", $user , time() + 60 * 60 * 24 * 30, '/'); 
                    }
                }

                $data = [
                    'user' => $user,
                    'guest' => $guest,
                    'review_product' => $review_product,
                    'product' => $product,
                    'options' => $options,
                ];

                return view('website.index.product_details', $data);
            }else{
                return redirect()->route("index")->with("error", trans("lan.product is not found")); 
            }

        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;

            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EH", 'null', 0, '/' );
            setcookie("TH", 'null', 0, '/' );
            setcookie("COOKES", 'null', 0, '/');
            setcookie("username", 'null', 0, '/');
            return redirect()->route("index");
        }
    }





}
