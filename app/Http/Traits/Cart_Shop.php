<?php
namespace App\Http\Traits ;
use Illuminate\Support\Facades\DB;

trait Cart_Shop
{



    public function get_info_cart($prodect_id, $category){
        if(isset($_COOKIE["CL"])){
            $cookies = $_COOKIE["CL"]; 
            $account = DB::select("SELECT * FROM `users` WHERE `cookies` = '$cookies'") ;
            $user = $account[0]->email ; 
            $cart_product = DB::select("SELECT * FROM `cart_shop` WHERE `user` = '$user' AND `id` = '$prodect_id' AND `category` = '$category'");
            if(count($cart_product) >= 1){
                return "true" ;
            }else{
                return "false" ; 
            }
        }else{
            return 0 ; 
        }
    }




    public function get_count(){
        if(isset($_COOKIE["CL"])){

            $cookies = $_COOKIE["CL"]; 
            $account = DB::select("SELECT * FROM `users` WHERE `cookies` = '$cookies'") ;
            if($account){
                $user = $account[0]->email ; 
                $cart_product = DB::select("SELECT * FROM `cart_shop` WHERE `user` = '$user'");
                return $cart_product ;
            }
        }
    }



}