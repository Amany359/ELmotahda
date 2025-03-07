<?php

namespace App\Http\Controllers\admin\DashBoard;

use App\Http\Controllers\Controller;
use App\Http\Traits\GetAdminInfo;
use App\Models\Admin;
use App\Models\BlockUser;
use App\Models\Engineering;
use App\Models\Gallary;
use App\Models\order;
use App\Models\privacy_policy;
use App\Models\product;

use App\Models\Sessions;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Index extends Controller
{

    use GetAdminInfo ; 
    public function index() {
        $admin = $this->get_info_admin() ;
        $products = product::all() ; 
        $Gallary = Gallary::all() ; 
        $users = User::all() ; 
        $admins = Admin::all() ; 
        $orders = order::all() ; 
        $curent_year = date('Y') ;
        $curent_month = date('m') ;
        

        $data = [
            'admin' => $admin,
            'products' => $products,
            'orders' => $orders,
            'users' => $users,
            'curent_month' => $curent_month,
            'curent_year' => $curent_year,
            'admins' => $admins,
            'Gallary' => $Gallary
        ];
        
        return view("Admin.index.index", $data);
    }

    public function orders_admin() {
        $admin = $this->get_info_admin() ;

        $data = [
            'admin' => $admin,
        ];
        
        return view("Admin.index.orders", $data);
    }

    public function sign_up_admin() {
        $admin = $this->get_info_admin() ;

        $data = [
            'admin' => $admin,
        ];
        
        return view("Admin.index.register", $data);
    }

    public function shipping_areas() {
        $admin = $this->get_info_admin() ;
   



        $data = [
            'admin' => $admin,
        ];
        
        
        return view("Admin.index.shipping_areas", $data);
    }

    public function privacy() {
        $admin = $this->get_info_admin() ;
   

        $privacy = privacy_policy::first() ; 

        $data = [
            'privacy' => $privacy,
            'admin' => $admin,
        ];
        
        
        return view("Admin.index.privacy", $data);
    }

    public function users() {
        $admin = $this->get_info_admin() ;



        $data = [
            'admin' => $admin,
        ];
        
        
        return view("Admin.index.users", $data);
    }


    public function user_details(Request $request) {

        if(isset($request->id)){
            $id = $this->InsertInput("int", $request->id);
            $user = DB::select("SELECT * FROM `users` JOIN `info_users` ON `users`.`email` = `info_users`.`user` WHERE `users`.`id` = '$id' "); 
            
            if(isset($user[0])){
                $admin = $this->get_info_admin() ;
                $email = $user[0]->email ;
                $comments = DB::select("SELECT * FROM `review_product` JOIN `product` ON  `review_product`.`product_id` = `product`.`product_id` WHERE `review_product`.`user` = '$email' ORDER BY `review_product`.`id_review` ASC") ; 
                $data = [
                    'user' => $user[0],
                    'admin' => $admin,
                    'comments' => $comments,
                ];
                
                return view("Admin.index.user_details", $data);
            }else{
                return redirect()->back(); 
            }
        }else{
            return redirect()->back(); 
        }
    }


    public function all_quote(Request $request) {
       

        $admin = $this->get_info_admin() ;
        $data = [

            'admin' => $admin,

        ];
        return view("Admin.index.all_quote", $data);
        
    }

    public function conditioning_statistics(Request $request) {
        $date = new DateTime();
        $month = $date->format('m');
        $year = $date->format('Y');

        $find_air = DB::select("SELECT * FROM `find_air` WHERE `created_at` LIKE '$year%' ");


        $part = count($find_air);
        $whole = 1000;
        
        $percentage = ($part / $whole) * 100;
        
        
        $admin = $this->get_info_admin() ;
        $data = [

            'percentage' => $percentage,
            'admin' => $admin,
            'find_air' => $find_air

        ];
        return view("Admin.index.conditioning_statistics", $data);
        
    }

    public function contact_us_admin(Request $request) {
        $date = new DateTime();
        $month = $date->format('m');
        $year = $date->format('Y');

        $contact_us = DB::select("SELECT * FROM `contact_us` WHERE `created_at` LIKE '$year-$month-%% %%%%%%%%' ");


        $part = count($contact_us);
        $whole = 300;
        
        $percentage = ($part / $whole) * 100;
        
        
        $admin = $this->get_info_admin() ;
        $data = [

            'percentage' => $percentage,
            'admin' => $admin,
            'contact_us' => $contact_us

        ];
        return view("Admin.index.contact_us_admin", $data);
        
    }



    public function verify_Email_Admin (Request $request){

        $ip = $_SERVER['REMOTE_ADDR'] ;
        
        if(isset($request->email, $request->token, $request->token_verify)){
            $email = $this->InsertInput("email", $request->email);
            $token = $this->InsertInput("str", $request->token);
            $token_verify = $this->InsertInput("str", $request->token_verify);

            if(Sessions::where("token" , $token_verify)->exists() === true){
                $session_verify = Sessions::where("token" , $token_verify)->first() ; 

                $date = $session_verify->date ; 
                $datenow = date("Y-m-d");
                
                if($datenow < $date){
                    $user = Admin::where("email", "=", $email) ; 
                    if($user->exists() === true){
                        $account = $user->first() ; 
                        if($account->token_base == $token){
                            if($account->email_verified_at == null){
                                $date_time = Carbon::now();
                                $account->update([
                                    "email_verified_at" => $date_time,
                                ]);
                                Sessions::where('token', $token_verify)->delete() ; 
                                return redirect()->route("index")->with("success", trans("lan.verified success"));
                            }else{
                                return redirect()->route("index")->with("info", trans("lan.already Verify"));
                            }
                        }else{
                            return redirect()->route("index")->with("error", trans("lan.rongMessage"));
                        }
                    }else{
                        return redirect()->route("index")->with("error", trans('lan.wrong email'));
                    }

                }else{
                    return redirect()->route("index")->with("error", trans('lan.expiry_link'));
                }


            }else{
                return redirect()->route("index")->with("error", trans('lan.expiry_link'));
            }


        }else{
            $email = $this->InsertInput("str", $request->email);
            BlockUser::create([
                "ip_device" => $ip,
                "email" => $email,
                "reason" => "Change something in verify code"
            ]);
            setcookie("EH", "null", 0, '/' );
            setcookie("TH", "null", 0, '/' );
            setcookie("COOKES", "null", 0, '/');
            setcookie("username", "null", 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }



}
