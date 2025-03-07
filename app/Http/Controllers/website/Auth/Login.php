<?php

namespace App\Http\Controllers\website\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Mail\website\SendMail;
use App\Mail\website\UserRegister;
use App\Models\BlockUser;
use App\Models\Sessions;
use App\Models\User;
use App\Models\user_info;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str ;


class Login extends Controller
{



    use CleanInput ; 


    public function singin (Request $request){
        $ip = $_SERVER['REMOTE_ADDR'] ;
        if(isset($request->email, $request->password)){
            $email = $this->InsertInput("email", $request->email);
            $password = $this->InsertInput("str", $request->password);

            
            $user = User::where("email", "=", $email); 
            if($user->exists() === true){
                $account = $user->first() ; 
                if(password_verify( "seven_site911" . $password . "seven_site911", $account->password) === true){
                    $token_base_hash = password_hash("seven_site911" . $account->token_base . "seven_site911", PASSWORD_DEFAULT); 
                    setcookie("EH", password_hash("seven_site911" . $account->email . "seven_site911", PASSWORD_DEFAULT) , time() + 60 * 60 * 24 * 30, '/'); 
                    setcookie("TH", $token_base_hash , time() + 60 * 60 * 24 * 30, '/'); 
                    setcookie("COOKES", $account->cookies , time() + 60 * 60 * 24 * 30, '/');
                    setcookie("username", $account->username , time() + 60 * 60 * 24 * 30, '/');
                   
                    $user->update([
                        'updated_at' => date('Y-m-d H:i:s')
                    ]); 
                
                    if($account->ip_device != $ip){
                        try {
                            //code...
                            if(Lang::locale() == 'ar'){
                                Mail::to($email)->send(new SendMail($account->username, "تنبية أمني", "تم تسجيل الدخول من حساب اخر", $token_base_hash));
                            }else{
                                Mail::to($email)->send(new SendMail($account->username, "Security alert", "Someone logged in from another account", $token_base_hash));
                            }
                        } catch (\Throwable $th) {
                            //throw $th;
                            return $th ; 
                        }
                    }
                    return response()->json([
                        "status_code" => 200,
                        "data" => $account->username  
                    ]);
                }else{
                    return response()->json([
                        "status_code" => 400,
                        "msg" => trans("lan.wrong_password")
                    ]);
                }
            }else{
                return response()->json([
                    "status_code" => 400,
                    "msg" => trans("lan.wrong_password")
                ]);
            }
                


        }else{
            $email = $this->InsertInput("str", $request->email);
            BlockUser::create([
                "ip_device" => $ip,
                "email" => $email,
                "reason" => "Change something in dev tool"
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


    public function change_password (Request $request  ){
        $ip = $_SERVER['REMOTE_ADDR'] ;
        if(isset($request->token_base, $request->username)){
            $username = $this->InsertInput('str', $request->username);
            $token_base = $this->InsertInput('str', $request->token_base);
            if(User::where("username" , $username)->exists() === true){
                $user = User::where("username" , $username)->first() ;
                if(password_verify("seven_site911" .  $user->token_base . "seven_site911", $token_base) === true){
                    $cookies = password_hash("seven_site911" . $user->cookies . "seven_site911" , PASSWORD_DEFAULT) ;  
                    return view("website.Auth.new_pass", ['token_base' => $token_base, 'username' => $username, 'cookies' => $cookies]);
                }else{
                    BlockUser::create([
                        "ip_device" => $ip,
                        "reason" => "try to access link -> (change_password)"
                    ]);
                    setcookie("EH", "null", 0, '/' );
                    setcookie("TH", "null", 0, '/' );
                    setcookie("COOKES", "null", 0, '/');
                    setcookie("username", "null", 0, '/');
                    exit();
                }
            }else{
                BlockUser::create([
                    "ip_device" => $ip,
                    "reason" => "try to access link -> (change_password)"
                ]);
                setcookie("EH", "null", 0, '/' );
                setcookie("TH", "null", 0, '/' );
                setcookie("COOKES", "null", 0, '/');
                setcookie("username", "null", 0, '/');
                exit();
            }
        }else{
            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "try to access link -> (change_password)"
            ]);
            setcookie("EH", "null", 0, '/' );
            setcookie("TH", "null", 0, '/' );
            setcookie("COOKES", "null", 0, '/');
            setcookie("username", "null", 0, '/');
            exit();
        }
    }


    public function register(Request $request) {
        $ip = $_SERVER['REMOTE_ADDR'] ;

        if(isset($request->username, $request->email, $request->phone, $request->password, $request->conf_password)){

            $username = $this->InsertInput("str", $request->username) ; 
            $email =  $this->InsertInput("email", $request->email) ; 
            $phone =  $this->InsertInput("int", $request->phone) ; 
            $password =  $this->InsertInput("str", $request->password) ; 
            $conf_password =  $this->InsertInput("str", $request->conf_password) ; 
            
            if($password === $conf_password){
                    if(strlen($password) >= 8){
                        if(User::where("email", "=", $email )->exists() != true){
                            if(User::where("username", "=", $username )->exists() != true){
                                if(User::where("phone", "=", $phone )->exists() != true){
                                    $password_hash = password_hash("seven_site911" . $password . "seven_site911" , PASSWORD_DEFAULT) ; 
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
                                    //code...
                                    $user = User::create([
                                        'username' => $username,
                                        'phone' => $phone,
                                        'email' => $email,
                                        'password' => $password_hash,
                                        'device_name' => $device_name,
                                        'device_type' => $device_type,
                                        'ip_device' => $ip, 
                                        'auto_location' => "$city,$region,$country" , 
                                        'token_base' =>  $this->InsertInput("str", Str::random(60), "%", ""), 
                                        'cookies' =>  $this->InsertInput("str", Str::random(60), "%", "")
                                    ]);
                                    user_info::create([
                                        "user" => $email,
                                        "image" => "customer.png"
                                    ]);
                                    Mail::to($email)->send(new UserRegister($user, $token_verify));
                                    
                                    return response()->json([
                                        'status_code' => 200,
                                        'msg' => trans("lan.email_created")
                                    ]);
                                 
                            
                            
                                }else{
                                    return response()->json([
                                        'status_code' => 400,
                                        'msg' => trans("lan.phone_found")
                                    ]);
                                }
                            }else{
                                return response()->json([
                                    'status_code' => 400,
                                    'msg' => trans("lan.username_found")
                                ]);
                            }
                        }else{
                            return response()->json([
                                'status_code' => 400,
                                'msg' => trans("lan.email_found")
                            ]);
                        }
                    }else{
                        return response()->json([
                            'status_code' => 400,
                            'msg' => trans("lan.count_password")
                        ]);
                    }
                }else{
                    return response()->json([
                        'status_code' => 400,
                        'msg' => trans("lan.c_password")
                    ]);
                }
      


        }else{
            $email = $this->InsertInput("str", $request->email);
            BlockUser::create([
                "ip_device" => $ip,
                "email" => $email,
                "reason" => "Change something in dev tool"
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

     
    public function verify_Email (Request $request){

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
                    $user = User::where("email", "=", $email) ; 
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
     
    public function sendlinkaccess (Request $request){

        $ip = $_SERVER['REMOTE_ADDR'] ;
        
        if(isset($request->email)){
    
            $email = $this->InsertInput("str", $request->email);
            
            $user = User::where("email", "=", $email) ; 
            
            
            if($user->exists() === true){
                $account = $user->first(); 
                $token_verify = $this->InsertInput("str", Str::random(60), "%", "") ; 
                $today = new DateTime();
                $interval = date_interval_create_from_date_string('2 days');
                $future_date = date_add($today, $interval);


                Mail::to($email)->send(new SendMail($account->username, "أسترجاع الحساب", "تم تسجيل الدخول من حساب اخر", $account->token_base));

                Sessions::create([
                    "type" => "2",
                    "token" => $token_verify,
                    "date" =>  $future_date->format('Y-m-d'),
                ]);

            }else{
                return redirect()->route("index")->with("error", trans('lan.wrong email'));
            }
            

            

        }else{
            $email = $this->InsertInput("str", $request->email);
            BlockUser::create([
                "ip_device" => $ip,
                "email" => $email,
                "reason" => "Change something in verify code"
            ]);
            setcookie("EH", 'null', 0, '/' );
            setcookie("TH", 'null', 0, '/' );
            setcookie("COOKES", 'null', 0, '/');
            setcookie("username", 'null', 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }



}
