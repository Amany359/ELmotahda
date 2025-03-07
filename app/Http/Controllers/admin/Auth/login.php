<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Models\Admin;
use App\Models\BlockUser;
use Illuminate\Http\Request;

class login extends Controller
{
    //

    
    use CleanInput ; 
    public function sign_in (Request $request) {
        $ip = $_SERVER['REMOTE_ADDR'] ;
        
        if(isset($request->email, $request->password)){
            $email = $this->InsertInput("email", $request->email);
            $password = $this->InsertInput("str", $request->password);

            
                $admin = Admin::where("email", "=", $email); 
                if($admin->exists() === true){
                    $account = $admin->first() ; 
                    if(password_verify( "seven_site911" . $password . "seven_site911", $account->password) === true){
                        
                        $token_base_hash = password_hash("seven_site911" . $account->token_base . "seven_site911", PASSWORD_DEFAULT); 
                        setcookie("EHA", password_hash("seven_site911" . $account->email . "seven_site911", PASSWORD_DEFAULT) , time() + 60 * 60 * 24 * 30, '/'); 
                        setcookie("THA", $token_base_hash , time() + 60 * 60 * 24 * 30, '/'); 
                        setcookie("COOKESA", $account->cookies , time() + 60 * 60 * 24 * 30, '/');
                        setcookie("usernameA", $account->username , time() + 60 * 60 * 24 * 30, '/');

                       
                        $admin->update([
                            'updated_at' => date('Y-m-d H:i:s')
                        ]); 

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
            setcookie("EHA", null, 0, '/' );
            setcookie("THA", null, 0, '/' );
            setcookie("COOKESA", null, 0, '/');
            setcookie("usernameA", null, 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }
}
