<?php
namespace App\Http\Traits ;

use App\Models\User;

trait GetuserInfo
{

    use CleanInput ; 

    public function get_info_user(){
        if(isset($_COOKIE['EH'],$_COOKIE['TH'],$_COOKIE['COOKES'],$_COOKIE['username'])){

            $email = $this->InsertInput('email',  $_COOKIE["EH"] )  ;
            $token = $this->InsertInput('str',  $_COOKIE["TH"] )  ;
            $cookies = $this->InsertInput('str',  $_COOKIE["COOKES"] )  ;

            $user = User::where("cookies", "=", $cookies) ; 
            if($user->exists() === true){
                $account = $user->first() ; 
                if(password_verify("seven_site911". $account->token_base ."seven_site911", $token)){
                    if(password_verify("seven_site911". $account->email ."seven_site911", $email)){
                        if( $account->status == "Active"){
                            return $account ; 
                        }else{
                            return false ; 
                        }
                    }else{
                        return false ;
                    }
                }else{
                    return false ;
                }
            }else{
                return false ;
            }

        }else{
            return false ; 
        }
    }




}