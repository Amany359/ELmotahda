<?php

namespace App\Http\Middleware;

use App\Http\Traits\CleanInput;
use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CheckAdmin
{
   
    use CleanInput ; 
    public function handle(Request $request, Closure $next): Response
    {
        if(isset($_COOKIE["COOKESA"] , $_COOKIE["THA"] , $_COOKIE["EHA"])){
            $cookies = $this->InsertInput('str',  $_COOKIE["COOKESA"] )  ;
            $token_base = $this->InsertInput('str',  $_COOKIE["THA"] ) ;
            $email = $this->InsertInput('str',  $_COOKIE["EHA"] );
            $admin = Admin::where("cookies", "=", $cookies) ; 
            
            if($admin->exists() == true ){
                $account_user = $admin->first();
                if( password_verify(  'seven_site911' .  $account_user->token_base . 'seven_site911'  , $token_base )  ){
                    if( password_verify(  'seven_site911' .  $account_user->email . 'seven_site911'  , $email )  ){
                        if( $account_user->status == "Active"){
                            

                            return $next($request);

                        }else{ 
                            setcookie("EHA", 'null', 0, '/' );
                            setcookie("THA", 'null', 0, '/' );
                            setcookie("COOKESA", 'null', 0, '/');
                            setcookie("usernameA", 'null', 0, '/');
                            throw new NotFoundHttpException() ; 
                            exit();
                        }
                    }else{
                        setcookie("EHA", 'null', 0, '/' );
                        setcookie("THA", 'null', 0, '/' );
                        setcookie("COOKESA", 'null', 0, '/');
                        setcookie("usernameA", 'null', 0, '/');
                        throw new NotFoundHttpException() ; 
                        exit();
                    }
                }else{
                    setcookie("EHA", 'null', 0, '/' );
                    setcookie("THA", 'null', 0, '/' );
                    setcookie("COOKESA", 'null', 0, '/');
                    setcookie("usernameA", 'null', 0, '/');
                    return new NotFoundHttpException() ; 
                    exit();
                }
            }else{
                setcookie("EHA", 'null', 0, '/' );
                setcookie("THA", 'null', 0, '/' );
                setcookie("COOKESA", 'null', 0, '/');
                setcookie("usernameA", 'null', 0, '/');
                throw new NotFoundHttpException() ; 
                exit();
            }
        }else{
            return redirect()->route("login_admin") ; 
            exit();
        }
    }
}
