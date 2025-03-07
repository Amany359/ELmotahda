<?php
namespace App\Http\Traits ;

use App\Models\BlockUser;
use App\Models\User; 

trait CheckAccount
{
    public function Checkemail(){
       if(isset($_COOKIE["EH"] ) && isset($_COOKIE["COOKES"] )){
            $token_base = $_COOKIE["TH"] ;
            $email = $_COOKIE["EH"] ;
            $cookies = $_COOKIE["COOKES"] ;
            if(User::where("cookies", "=", $cookies)->exists() == true ){
                $account_user = User::where("cookies", "=", $cookies)->first();
                if( password_verify(  'real_state911' .  $account_user->token_base . 'real_state911'  , $token_base )  ){
                    if( $account_user->status == "Active"){
                        if(BlockUser::where("email", "=", $account_user->email)->exists() === true){
                            return 401; 
                            exit();
                        }else{
                            return $account_user;
                        }
                    }else{ 
                        return 401; 
                        exit();
                    }
                }else{
                    return false ;
                    exit();
                }
            }else{
                return false ;
                exit();
            }
        }else{
            return false ;
            exit();
        }
    }
    
}