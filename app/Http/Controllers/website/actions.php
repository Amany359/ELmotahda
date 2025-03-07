<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Http\Traits\GetuserInfo;
use App\Http\Traits\SaveImage;
use App\Mail\confirm_product;
use App\Models\Contact_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contact_us as MailContact_us;
use App\Mail\create_email;
use App\Mail\Engineering as MailEngineering;
use App\Mail\Get_Notified as MailGet_Notified;
use App\Mail\new_order;
use App\Mail\website\UserRegister;
use App\Models\BlockUser;
use App\Models\cart;
use App\Models\Engineering;
use App\Models\find_air;
use App\Models\Get_Notified;
use App\Models\order;
use App\Models\review;
use App\Models\Sessions;
use App\Models\shipping;
use App\Models\User;
use App\Models\user_info;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str ;
use Srmklive\PayPal\Services\ExpressCheckout ;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class actions extends Controller
{
    
    
    use CleanInput; 
    use GetuserInfo ; 
    use SaveImage ; 


    public function contact_us_req (Request $request){


        if(isset($request->email, $request->username, $request->msg, $request->phone, $request->section)){
            $email = $this->InsertInput("email", $request->email);
            $username = $this->InsertInput("str", $request->username);
            $section = $this->InsertInput("str", $request->section);
            $msg = $this->InsertInput("str", $request->msg);
            $phone = $this->InsertInput("int", $request->phone);
            $token = $this->InsertInput("str", Str::random(60), "%", "") ; 
            $today = new DateTime();
            $interval = date_interval_create_from_date_string('2 days');
            $future_date = date_add($today, $interval);

            if($section == "Sales"){
                Mail::to("sales@el-shora.com")->send(new MailContact_us($username, $email, $msg, $phone, $token));

            }else if($section == "Marketing"){
                Mail::to("marketing@el-shora.com")->send(new MailContact_us($username, $email, $msg, $phone, $token));

            }else if($section == "Engineering_Management"){
                Mail::to("engineering@el-shora.com")->send(new MailContact_us($username, $email, $msg, $phone, $token));

            }else{
                Mail::to("info@el-shora.com")->send(new MailContact_us($username, $email, $msg, $phone, $token));

            }




            Sessions::create([
                "type" => "3",
                "token" => $token,
                "date" => $future_date->format('Y-m-d'),
                "email" => $email
            ]);

            Contact_us::create([
                "email" => $email,
                "message" => $msg,
                "phone" => $phone,
                "name" => $username,
                "token" => $token,
            ]);
            

            return response()->json([
                'status_code' => 200,
                "msg" => "success"
            ]);

        }else{
            $email = $this->InsertInput("str", $request->email);
            $ip = $_SERVER['REMOTE_ADDR'] ;

            BlockUser::create([
                "ip_device" => $ip,
                "email" => $email,
                "reason" => "Change something in dev tool"
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

    public function get_notified (Request $request){

        
        
        if(isset($request->email)){

            $email = $this->InsertInput("email", $request->email);

        
            Mail::to("info@el-shora.com")->send(new MailGet_Notified($email, "coming soon alert"));
        
            
            Get_Notified::create([
                "from2" => "coming soon alert",
                "email" => $email
            ]);
        


            return response()->json([
                'status_code' => 200,
                "msg" => "success"
            ]);



        }else{
            $email = $this->InsertInput("str", $request->email);
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "ip_device" => $ip,
                "email" => $email,
                "reason" => "Change something in dev tool in get notified"
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


    public function find_air (Request $request){


        
        
        if(isset($request->service, $request->building)){


            $email = $this->InsertInput("email", $request->email);
            $width = $this->InsertInput("int", $request->width);
            $height = $this->InsertInput("int", $request->height);
            $space = $this->InsertInput("int", $request->space);
            $building = $this->InsertInput("int", $request->building);
            $service = $this->InsertInput("int", $request->service);
            $phone = $this->InsertInput("int", $request->phone);
        
            $data = 0 ; 

            if($space >= 1){
                find_air::create([
                    'space' => $space,
                    'building' => $building,
                    'service' => $service,
                    'phone' => $phone,
                    'email' => $email
                ]);

            }else{
                $space = $width * $height ; 

                find_air::create([
                    'space' => $space,
                    'building' => $building,
                    'service' => $service,
                    'phone' => $phone,
                    'email' => $email
                ]);

            }

            
            $image = url('quote/air-airconditioner.png') ; 
            $text = trans('lan.Air conditioning power') ; 
            $horse = trans('lan.horse') ; 
            $another = trans('lan.Another suggestion') ; 
            

            if($service == '1'){


                


                if($space <= "12"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "20"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "25"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 4 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "35"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "45"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 6 $horse</p>
                                </div>
                            </div>
                        </div>
                        <h3 class='another_way' >
                            $another 
                        </h3>

                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "55"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 7.5 $horse</p>
                                </div>
                            </div>
                        </div>
                        <h3 class='another_way' >
                            $another 
                        </h3>

                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>

                        <h3 class='another_way' >
                            $another 
                        </h3>

                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "70"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 7.5 $horse</p>
                                </div>
                            </div>
                        </div>

                        <h3 class='another_way' >
                            $another 
                        </h3>

                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>

                        <h3 class='another_way' >
                            $another 
                        </h3>

                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>

                    " ;
                }else if($space <= "80"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 4 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>

                        <h3 class='another_way' >
                            $another 
                        </h3>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "90"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>

                      
                    " ;
                }else if($space <= "100"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>

                      
                    " ;
                }else{
                    return response()->json([
                        'status_code' => 500,
                        "msg" => "Error"
                    ]);
                }

            }else{

                if($space <= "12"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 1.5 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "20"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "25"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "35"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 4 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "45"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>

                        <h3 class='another_way' >
                            $another 
                        </h3>

                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "55"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 6 $horse</p>
                                </div>
                            </div>
                        </div>

                        <h3 class='another_way' >
                            $another 
                        </h3>

                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "70"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 7.5 $horse</p>
                                </div>
                            </div>
                        </div>

                        <h3 class='another_way' >
                            $another 
                        </h3>

                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>

                        <h3 class='another_way' >
                            $another 
                        </h3>

                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 2.25 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>

                    " ;
                }else if($space <= "80"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 4 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>

                        <h3 class='another_way' >
                            $another 
                        </h3>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                    " ;
                }else if($space <= "90"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 5 $horse</p>
                                </div>
                            </div>
                        </div>

                      
                    " ;
                }else if($space <= "100"){
                    $data = "
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>
                        <div class='col-6 mb--20'>
                            <div class='single-product-thumbnail axil-product thumbnail-grid'>
                                <div class='thumbnail' style='    display: flex; justify-content: center; align-items: center; flex-direction: column;'>
                                    <img class='img-fluid' src='$image' alt='Product Images'>
                                    <p>$text 3 $horse</p>
                                </div>
                            </div>
                        </div>

                      
                    " ;
                }else{
                    return response()->json([
                        'status_code' => 500,
                        "msg" => "Error"
                    ]);
                }
                





            }
            
            
            

            return response()->json([
                'status_code' => 200,
                "msg" => "success",
                "data" => $data 
            ]);

        }else{
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.confirm_all_data")
            ]);
        }
    }

    public function engineering_management (Request $request){



        
        if(isset($request->company, $request->location, $request->phone, $request->project, $request->file)){
            $email = $this->InsertInput("email", $request->email);
            $location = $this->InsertInput("str", $request->location);
            $company = $this->InsertInput("str", $request->company);
            $message = $this->InsertInput("str", $request->message);
            $project = $this->InsertInput("int", $request->project);
            $phone = $this->InsertInput("int", $request->phone);
            $file = $this->save_photo($request->file, "projects_file");

            try {
                //code...
                Mail::to("engineering@el-shora.com")->send(new MailEngineering($company, $email, $phone, $location, $project, $message, $file));
                Engineering::create([
                    "location" => $location,
                    "email" => $email,
                    "company" => $company,
                    "message" => $message,
                    "project" => $project,
                    "file" => $file,
                    "phone" => $phone
                ]);
                return response()->json([
                    'status_code' => 200,
                    "msg" => "success"
                ]);
            } catch (\Throwable $th) {
                return $th;
                return response()->json([
                    'status_code' => 400,
                    "msg" => "error"
                ]);
           }
            
            
            
            

            

        }else{
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.confirm_all_data")
            ]);
        }
    }


    public function set_comment (Request $request){


        if(isset($request->comment, $request->rating, $request->product_id)){


            $user = $this->get_info_user() ;

            if($user === false){
                return response()->json([
                    "status_code" => 400,
                    "msg" => trans("lan.login_first")
                ]); 
            }


            $comment = $this->InsertInput("str", $request->comment);
            $rating = $this->InsertInput("int", $request->rating);
            $product_id = $this->InsertInput("int", $request->product_id);
            $verify = 0 ; 
            
            $order = order::where("product_id", $product_id)->where("user", $user->email)->first() ; 


            if($order){
                $verify = 1 ; 
            }

            try {
                //code...
                review::create([
                    "user" => $user->email,
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


    public function change_address (Request $request) {
        if(isset($request->value, $request->column)){

            
            $user = $this->get_info_user(); 
            if($user !== false){


                $value = $this->InsertInput("str", $request->value);
                $column = $this->InsertInput("str", $request->column);


                try {
                    //code...
                    user_info::where("user", $user->email)->update([
                        $column => $value
                    ]);
                    return response()->json([
                        'status_code' => 200,
                        "msg" => trans("lan.success_process")
                    ]);
                } catch (\Throwable $th) {
                    return response()->json([
                        'status_code' => 200,
                        "msg" => trans("lan.Error")
                    ]);
                    //throw $th;
                }



            }else{
                return response()->json([
                    'status_code' => 400, 
                    "msg" => trans("lan.wrong email")
                ]);
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
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }

    public function change_account (Request $request) {
        if(isset($request->value, $request->column)){

            
            $user = $this->get_info_user(); 
            if($user !== false){


                $value = $this->InsertInput("str", $request->value);
                $column = $this->InsertInput("str", $request->column);
                
                if($column == "username" || $column == "email" || $column == "phone" ){

                    try {
                        //code...
                        User::where("email", $user->email)->update([
                            $column => $value
                        ]);
                        return response()->json([
                            'status_code' => 200,
                            "msg" => trans("lan.success_process")
                        ]);
                    } catch (\Throwable $th) {
                        return response()->json([
                            'status_code' => 400,
                            "msg" => trans("lan.Error")
                        ]);
                    }

                }else{
                    $ip = $_SERVER['REMOTE_ADDR'] ;
                    $email = $user->email ;
                    BlockUser::create([
                        "email" => $email,
                        "ip_device" => $ip,
                        "reason" => "Change something in dev tool"
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




            }else{
                return response()->json([
                    'status_code' => 400, 
                    "msg" => trans("lan.wrong email")
                ]);
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
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }


    public function checkout(Request $request){


        // if(!isset($request->terms_conditions)){
        //     return response()->json([
        //         "status_code" => 400,
        //         "msg" => trans("lan.Required terms and conditions")
        //     ]); 
        // }

        $user = $this->get_info_user() ;

        if($user === false){
            if(isset($_COOKIE['guest_user'])){
                
                $user = $_COOKIE['guest_user'] ; 

            }else{

                $user = $this->InsertInput("str" , "guest_" . rand(10, 10000000), "%", "") ;
                setcookie("guest_user", $user , time() + 60 * 60 * 24 * 30, '/'); 
            
            }
        }else{
            $user = $user->email; 
        }

        
        if(
            isset(
                $request->name,
                $request->address1,
                $request->country,
                $request->email,
                $request->payment,
                $request->phone,
                $request->town
            )
        ){

            $name = $this->InsertInput("str", $request->name);
            $address1 = $this->InsertInput("str", $request->address1);
            $notif = $this->InsertInput("str", $request->notif);
            $country = $this->InsertInput("str", $request->country);
            $email = $this->InsertInput("str", $request->email);
            $area = $this->InsertInput("str", $request->area);
            $payment = $this->InsertInput("str", $request->payment);
            $phone = $this->InsertInput("int", $request->phone);
            $town = $this->InsertInput("str", $request->town);
            $address2 = $this->InsertInput("str", $request->address2);
            $carts = DB::select("SELECT * FROM `cart` JOIN `product` ON `cart`.`product_id`  = `product`.`product_id` WHERE `cart`.`user` = '$user' ");
            $token = $this->InsertInput("str", "SVN" . rand(1000, 10000), "%", "") ; 
            $order2  = "" ; 
            $sub_total  = 0 ; 
            $shipping = shipping::where("city", $town)->first();
            
            if($shipping){
                if($carts){
                    $price_shipping = $shipping->price ; 
                    
    
                    if(isset($request->account_create)){
                        $username = $this->InsertInput("str", Str::random(10), "%", "") ; 
                        $password = $this->InsertInput("str", $request->password, "%", "") ;
                        $conf_password = $this->InsertInput("str", $request->conf_password, "%", "") ;
                        $password_hash = password_hash("seven_site911" . $password . "seven_site911" , PASSWORD_DEFAULT)  ; 

                        if($password != ""){
                            if($password != $conf_password){
                                return response()->json([
                                    "status_code" => 400,
                                    "msg" => trans("lan.c_password")
                                ]);
                            }
                        }else{
                            return response()->json([
                                "status_code" => 400,
                                "msg" => trans("lan.required Password")
                            ]);
                        }

                        $ip = $_SERVER['REMOTE_ADDR'] ;
                        $device_name =  "" ;
                        $device_type =  "" ; 
                        $city = '';
                        $region = '';
                        $country_ = '';
                        try {
                            $device_name =  gethostname() ;
                            $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                            $city =  $details->city;
                            $region =  $details->region;
                            $country_ =  $details->country;
                            $device_type =  $_SERVER['HTTP_SEC_CH_UA_PLATFORM'] ; // Error In Iphone
                            //code...
                        } catch (\Throwable $th) {
                            $device_type =  "Iphone OR Linux" ; // Error In Iphone
                            //throw $th;
                        }
    
                        try {
                            //code...
                            $user_ = User::create([
                                "email" => $email,
                                "username" => $username,
                                "phone" => $phone,
                                "password" => $password_hash,
                                'device_name' => $device_name,
                                'device_type' => $device_type,
                                'ip_device' => $ip, 
                                'auto_location' => "$city,$region,$country_" , 
                                "cookies" => $this->InsertInput("str", Str::random(60), "%", ""),
                                "token_base" => $this->InsertInput("str", Str::random(60), "%", ""),
                            ]); 
                            user_info::create([
                                "user" => $email,
                                "street" => $address1,
                                "apartment" => $address2,
                                "city" => $town,
                                "area" => $area,
                                "country" => $country
                            ]);
                            Mail::to($email)->send(new create_email($username, $email));
                        } catch (\Throwable $th) {
                            //throw $th;
                        }
                        
    
                    }
                    
    
    
                    if($payment == "cash"){
                        
                        
                        try {
                            //code...
                            foreach($carts as $cart){
                                $order = new order ; 
                                $images = explode("_", $cart->images);
                                $sub_total += $cart->product_price * $cart->cart_quantity ; 
                                $order->order_token = $token ;
                                $order->token = $token ;
                                $order->area = $area ;
                                $order->order_quantity = $cart->cart_quantity ;
                                $order->product_id = $cart->product_id ;
                                $order->user = $user ;
                                $order->payment = $payment ;
                                $order->size = $cart->size ;
                                $order->color = $cart->color ;
                                $order->product_discount = $cart->discount ;
                                $order->process = "1" ;
                                $order->product_image = $images[0] ;
                                $order->product_price = $cart->product_price ;
                                $order->product_name = $cart->product_name ;
                                $order->name = $name ;
                                $order->address1 = $address1 ;
                                $order->address2 = $address2 ;
                                $order->phone = $phone ;
                                $order->country = $country ;
                                $order->shipping = $price_shipping ;
                                $order->town = $town ;
                                $order->email2 = $email ;
                                $order->notif = $notif ;
                                $order2 = $order ; 
                                $order->save();
                            }
                            Mail::to($email)->send(new confirm_product($carts, $order2, $price_shipping, $token));
                            Mail::to("ym052411@gmai.com")->send(new new_order($carts, $order2, $price_shipping, $token));
                            cart::where("user", $user)->delete();
                        } catch (\Throwable $th) {
                            //throw $th;
                            return $th ; 
                        }
    
        
                    }elseif($payment == "fawry"){   
                 

                        ?>                  
                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                                <title>FawryPay</title>
                                <!-- Import FawryPay CSS Library-->
                                
                            

                            </head>

                            <body style="    height: 100vh; display: flex; justify-content: center; align-items: center; overflow: hidden;">
                                <style>
                                    .dot-spinner {
                                    --uib-size: 2.8rem;
                                    --uib-speed: .9s;
                                    --uib-color: #183153;
                                    position: relative;
                                    display: flex;
                                    align-items: center;
                                    justify-content: flex-start;
                                    height: var(--uib-size);
                                    width: var(--uib-size);
                                    }

                                    .dot-spinner__dot {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    display: flex;
                                    align-items: center;
                                    justify-content: flex-start;
                                    height: 100%;
                                    width: 100%;
                                    }

                                    .dot-spinner__dot::before {
                                    content: '';
                                    height: 20%;
                                    width: 20%;
                                    border-radius: 50%;
                                    background-color: var(--uib-color);
                                    transform: scale(0);
                                    opacity: 0.5;
                                    animation: pulse0112 calc(var(--uib-speed) * 1.111) ease-in-out infinite;
                                    box-shadow: 0 0 20px rgba(18, 31, 53, 0.3);
                                    }

                                    .dot-spinner__dot:nth-child(2) {
                                    transform: rotate(45deg);
                                    }

                                    .dot-spinner__dot:nth-child(2)::before {
                                    animation-delay: calc(var(--uib-speed) * -0.875);
                                    }

                                    .dot-spinner__dot:nth-child(3) {
                                    transform: rotate(90deg);
                                    }

                                    .dot-spinner__dot:nth-child(3)::before {
                                    animation-delay: calc(var(--uib-speed) * -0.75);
                                    }

                                    .dot-spinner__dot:nth-child(4) {
                                    transform: rotate(135deg);
                                    }

                                    .dot-spinner__dot:nth-child(4)::before {
                                    animation-delay: calc(var(--uib-speed) * -0.625);
                                    }

                                    .dot-spinner__dot:nth-child(5) {
                                    transform: rotate(180deg);
                                    }

                                    .dot-spinner__dot:nth-child(5)::before {
                                    animation-delay: calc(var(--uib-speed) * -0.5);
                                    }

                                    .dot-spinner__dot:nth-child(6) {
                                    transform: rotate(225deg);
                                    }

                                    .dot-spinner__dot:nth-child(6)::before {
                                    animation-delay: calc(var(--uib-speed) * -0.375);
                                    }

                                    .dot-spinner__dot:nth-child(7) {
                                    transform: rotate(270deg);
                                    }

                                    .dot-spinner__dot:nth-child(7)::before {
                                    animation-delay: calc(var(--uib-speed) * -0.25);
                                    }

                                    .dot-spinner__dot:nth-child(8) {
                                    transform: rotate(315deg);
                                    }

                                    .dot-spinner__dot:nth-child(8)::before {
                                    animation-delay: calc(var(--uib-speed) * -0.125);
                                    }

                                    @keyframes pulse0112 {
                                    0%,
                                    100% {
                                        transform: scale(0);
                                        opacity: 0.5;
                                    }

                                    50% {
                                        transform: scale(1);
                                        opacity: 1;
                                    }
                                    }
                                </style>

                                <div class="dot-spinner">
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                </div>
                            </body>

                            </html>
                        <?php



                        $sub_total = 0 ; 
                        $quantity = 0 ; 
                        foreach($carts as $cart){
                            $quantity +=  $cart->cart_quantity; 
                            $order = new order ; 
                            $images = explode("_", $cart->images);
                            $sub_total += $cart->product_price * $cart->cart_quantity ; 
                            $order->order_token = $token ;
                            $order->token = $token ;
                            $order->area = $area ;
                            $order->order_quantity = $cart->cart_quantity ;
                            $order->product_id = $cart->product_id ;
                            $order->user = $user ;
                            $order->payment = $payment ;
                            $order->size = $cart->size ;
                            $order->color = $cart->color ;
                            $order->product_discount = $cart->discount ;
                            $order->process = "1" ;
                            $order->product_image = $images[0] ;
                            $order->product_price = $cart->product_price ;
                            $order->product_name = $cart->product_name ;
                            $order->name = $name ;
                            $order->address1 = $address1 ;
                            $order->address2 = $address2 ;
                            $order->phone = $phone ;
                            $order->country = $country ;
                            $order->shipping = $price_shipping ;
                            $order->town = $town ;
                            $order->email2 = $email ;
                            $order->notif = $notif ;
                            $order2 = $order ; 
                            $order->save();
                        }

                        // Mail::to($email)->send(new confirm_product($carts, $order2, $price_shipping, $token));
                        // Mail::to("info@el-shora.com")->send(new new_order($carts, $order2, $price_shipping, $token));




                        ?>
                            <script type="text/javascript" src="<?= url("fawry.js")?>"></script>

                            <script>
                                function checkout() {
                                    const configuration = {
                                        locale: "en", //default en
                                        mode: DISPLAY_MODE.SEPARATED, //required, allowed values [SEPARATED,POPUP, INSIDE_PAGE, SIDE_PAGE]
                                    };
                                    FawryPay.checkout(buildChargeRequest(), configuration);
                                }

                                let id_product = "<?= $token?>"; 
                                let desc = ""; 
                                let price = "<?= $sub_total?>"; 
                                let quantity_ = "<?= $quantity?>"; 


                                function buildChargeRequest() {
                                    const chargeRequest = {
                                        merchantCode: "770000019802",
                                        merchantRefNum: "unique-3",
                                        customerMobile: "01000000000",
                                        customerEmail: "a@gmail.com",
                                        customerName: "Customer",
                                        paymentExpiry: "",
                                        customerProfileId: "",
                                        language: "en-gb",
                                        chargeItems: [{
                                            itemId: "1234",
                                            description: "1234",
                                            price: 274.56,
                                            quantity: 1,
                                        }],
                                        paymentMethod: "",
                                        returnUrl: "https://fawrydeveloper.com/",
                                        signature: "dd1b6bc3189b5b76569d61e85f8cb1951865667fd124d8d8a4006cc44ad64dd9",
                                    };
                                    return chargeRequest;
                                };
                                checkout();
                            </script>

                        <?php



                        return "" ; 


                    }elseif($payment == "instapay"){
        
    
    
                           
                        if(!isset($request->screenshot)){
                            return response()->json([
                                "status_code" => 400,
                                "msg" => "screen shot required"
                            ]);
                        }

                        $screen_shot = $this->save_photo($request->screenshot, "payment_screenshot") ; 
    
                        foreach($carts as $cart){
                         
                            $order = new order ; 
                            $images = explode("_", $cart->images);
                            $sub_total += $cart->product_price * $cart->cart_quantity ; 
                            $order->token = $token ;
                            $order->screen_shot = $screen_shot ;
                            $order->area = $area ;
                            $order->order_token = $token ;
                            $order->order_quantity = $cart->cart_quantity ;
                            $order->product_id = $cart->product_id ;
                            $order->user = $user ;
                            $order->payment = $payment ;
                            $order->size = $cart->size ;
                            $order->color = $cart->color ;
                            $order->product_discount = $cart->discount ;
                            $order->process = "1" ;
                            $order->product_image = $images[0] ;
                            $order->product_price = $cart->product_price ;
                            $order->product_name = $cart->product_name ;
                            $order->name = $name ;
                            $order->address1 = $address1 ;
                            $order->address2 = $address2 ;
                            $order->phone = $phone ;
                            $order->country = $country ;
                            $order->shipping = $price_shipping ;
                            $order->town = $town ;
                            $order->email2 = $email ;
                            $order->notif = $notif ;
                            $order2 = $order ; 
                            $order->save();
                        
                        }

                        Mail::to($email)->send(new confirm_product($carts, $order2, $price_shipping, $token));
                        Mail::to("ym052411@gmai.com")->send(new new_order($carts, $order2, $price_shipping, $token));
                        cart::where("user", $user)->delete();
    
    
    
                    }elseif($payment == "paypal"){
    
    
                        $data = [];
                        $total = 0 ; 
                        $data['items'] = [];
                        foreach($carts as $cart){
                            $order = new order ; 
                            $sub_total += $cart->product_price * $cart->cart_quantity ; 
                            array_push($data['items'],
                                [
                                    'name' => $cart->product_name ,
                                    "price" => floatval($cart->product_price) ,
                                    'desc' => trans("lan.discount") . ": $cart->discount",
                                    'qty' => $cart->cart_quantity,
                                ]
                            ); 
                            $images = explode("_", $cart->images);
                            $order->order_token = $token ;
                            $order->token = $token ;
                            $order->order_quantity = $cart->cart_quantity ;
                            $order->product_id = $cart->product_id ;
                            $order->user = $user ;
                            $order->area = $area ;
                            $order->payment = $payment ;
                            $order->size = $cart->size ;
                            $order->color = $cart->color ;
                            $order->product_discount = $cart->discount ;
                            $order->process = "0" ;
                            $order->product_image = $images[0] ;
                            $order->product_price = $cart->product_price ;
                            $order->product_name = $cart->product_name ;
                            $order->name = $name ;
                            $order->address1 = $address1 ;
                            $order->address2 = $address2 ;
                            $order->phone = $phone ;
                            $order->country = $country ;
                            $order->shipping = $price_shipping ;
                            $order->town = $town ;
                            $order->email2 = $email ;
                            $order->notif = $notif ;
                            $order2 = $order ; 
                            $order->save();
                            
    
                        }
    
                        $total = ($sub_total + $price_shipping) ;                 
                        array_push($data['items'],
                            [
                                'name' => trans("lan.Shipping") ,
                                "price" => floatval($price_shipping) ,
                                'desc' => "",
                                'qty' => "",
                            ]
                        );
                        $data['invoice_id'] = 1 ; 
                        $data['invoice_description'] = "order" ; 
                        $data['PAYMENTREQUEST_0_SHIPPINGAMT'] = 3520 ; 
                        $data['total'] = $total  ; 
                        $data['return_url'] = route("success_paypal") ; 
                        $data['cancel_url'] = route("error_paypal") ; 
                        
                        try {
                            //code...
                            $provider = new ExpressCheckout ; 
                            $response  = $provider->setExpressCheckout($data, true);
                        } catch (\Throwable $th) {
                            //throw $th;
                            return $th ; 
                        }
                        
                        if($response['ACK'] == 'Success'){
                            if($response['paypal_link'] != null ){
    
                                $token_ = password_hash("seven_site911" . $response['TOKEN'] . "seven_site911", PASSWORD_DEFAULT)  ; 
                                setcookie("t_pp", $token_ , time() + 60 * 10 , '/');
                                
                                
                                order::where("token", $token)->where("user", $user)->update([
                                    "token" => $response['TOKEN'],
                                ]);
                                Mail::to($email)->send(new confirm_product($carts, $order2, $price_shipping, $token));
                                Mail::to("ym052411@gmai.com")->send(new new_order($carts, $order2, $price_shipping, $response['TOKEN']));
    
                                return response()->json([
                                    "status_code" => 200,
                                    "data" => $response['paypal_link'],
                                ]);
    
    
                            }else{
                                throw new NotFoundHttpException ; 
                                exit();
                            }
                        }else{
                            throw new NotFoundHttpException ; 
                            exit();
                        }
        
    
                    
                    }
    
    
    
    
    
    
    
    
                    return response()->json([
                        "status_code" => 200,
                        "msg" => trans("lan.Thanks for your purchase"),
                    ]);
                    
         
                    
    
                }else{
                    return response()->json([
                        "status_code" => 400,
                        "msg" => trans("lan.There is no product in the shopping cart")
                    ]);
                }
            }else{
                return response()->json([
                    "status_code" => 400,
                    "msg" => trans("lan.data is required")
                ]);
            }







        }else{

            return response()->json([
                "status_code" => 400,
                "msg" => trans("lan.data is required")
            ]);

        }
    }



    public function success_paypal (Request $request){

        if(isset($request->token, $request->PayerID, $_COOKIE['t_pp'])){


            if(password_verify("seven_site911" . $request->token . "seven_site911", $_COOKIE['t_pp']) == true){

                $user = $this->get_info_user() ;
                if($user === false){
                    if(isset($_COOKIE['guest_user'])){
                
                        $user = $_COOKIE['guest_user'] ; 
        
                    }else{
        
                        $user = $this->InsertInput("str" , "guest_" . rand(10, 10000000), "%", "") ;
                        setcookie("guest_user", $user , time() + 60 * 60 * 24 * 30, '/'); 
                    
                    }
                }else{
                    $user = $user->email; 
                }
        
                $token =  $this->InsertInput("str", $request->token) ; 


                order::where("token", $token)->where("user", $user)->update([
                    "process" => '2',
                ]);


                cart::where("user", $user)->delete();

                return redirect()->route("index")->with("success", trans("lan.Thanks for your purchase")) ; 



            }else{
                $user = $this->get_info_user() ;

                if($user === false){
                    $user = ""; 
                }else{
                    $user = $user->email; 
                }
        
                $ip = $_SERVER['REMOTE_ADDR'] ;

                BlockUser::create([
                    "user" => $user,
                    "ip_device" => $ip,
                    "reason" => "Change something in dev tool"
                ]);
                setcookie("EH", 'null', 0, '/' );
                setcookie("TH", 'null', 0, '/' );
                setcookie("COOKES", 'null', 0, '/');
                setcookie("username", 'null', 0, '/');
                throw new NotFoundHttpException ; 
            }


        }else{
            $user = $this->get_info_user() ;

            if($user === false){
                $user = ""; 
            }else{
                $user = $user->email; 
            }
    
            $ip = $_SERVER['REMOTE_ADDR'] ;

            BlockUser::create([
                "user" => $user,
                "ip_device" => $ip,
                "reason" => "Change something in title link to hack you"
            ]);
            setcookie("EH", 'null', 0, '/' );
            setcookie("TH", 'null', 0, '/' );
            setcookie("COOKES", 'null', 0, '/');
            setcookie("username", 'null', 0, '/');
            throw new NotFoundHttpException ; 
        }   



    }

    public function error_paypal (Request $request){
        
        if(isset($request->token, $_COOKIE['t_pp'])){
            

            if(password_verify("seven_site911" . $request->token . "seven_site911", $_COOKIE['t_pp']) == true){

                $user = $this->get_info_user() ;
                if($user === false){
                    throw new NotFoundHttpException ; 
                }else{
                    $user = $user->email; 
                }
        


                $token =  $this->InsertInput("str", $request->token) ; 
                order::where("token", $token)->where("user", $user)->delete();
                return redirect()->route("index") ; 



            }else{
                $user = $this->get_info_user() ;

                if($user === false){
                    $user = ""; 
                }else{
                    $user = $user->email; 
                }
        
                $ip = $_SERVER['REMOTE_ADDR'] ;

                BlockUser::create([
                    "user" => $user,
                    "ip_device" => $ip,
                    "reason" => "paypal hack"
                ]);
                setcookie("EH", 'null', 0, '/' );
                setcookie("TH", 'null', 0, '/' );
                setcookie("COOKES", 'null', 0, '/');
                setcookie("username", 'null', 0, '/');
                throw new NotFoundHttpException ; 
            }


        }else{
            $user = $this->get_info_user() ;

            if($user === false){
                $user = ""; 
            }else{
                $user = $user->email; 
            }
    
            $ip = $_SERVER['REMOTE_ADDR'] ;

            BlockUser::create([
                "user" => $user,
                "ip_device" => $ip,
                "reason" => "paypal hack"
            ]);
            setcookie("EH", 'null', 0, '/' );
            setcookie("TH", 'null', 0, '/' );
            setcookie("COOKES", 'null', 0, '/');
            setcookie("username", 'null', 0, '/');
            throw new NotFoundHttpException ; 
        }   



    }

    public function success_fawry (Request $request){

        

      


        // if(isset($request->token, $_COOKIE['t_pp'])){
            

        //     if(password_verify("seven_site911" . $request->token . "seven_site911", $_COOKIE['t_pp']) == true){

        //         $user = $this->get_info_user() ;
        //         if($user === false){
        //             throw new NotFoundHttpException ; 
        //         }else{
        //             $user = $user->email; 
        //         }
        


        //         $token =  $this->InsertInput("str", $request->token) ; 
        //         order::where("token", $token)->where("user", $user)->delete();
        //         return redirect()->route("index") ; 



        //     }else{
        //         $user = $this->get_info_user() ;

        //         if($user === false){
        //             $user = ""; 
        //         }else{
        //             $user = $user->email; 
        //         }
        
        //         $ip = $_SERVER['REMOTE_ADDR'] ;

        //         BlockUser::create([
        //             "user" => $user,
        //             "ip_device" => $ip,
        //             "reason" => "paypal hack"
        //         ]);
        //         setcookie("EH", 'null', 0, '/' );
        //         setcookie("TH", 'null', 0, '/' );
        //         setcookie("COOKES", 'null', 0, '/');
        //         setcookie("username", 'null', 0, '/');
        //         throw new NotFoundHttpException ; 
        //     }


        // }else{
        //     $user = $this->get_info_user() ;

        //     if($user === false){
        //         $user = ""; 
        //     }else{
        //         $user = $user->email; 
        //     }
    
        //     $ip = $_SERVER['REMOTE_ADDR'] ;

        //     BlockUser::create([
        //         "user" => $user,
        //         "ip_device" => $ip,
        //         "reason" => "paypal hack"
        //     ]);
        //     setcookie("EH", 'null', 0, '/' );
        //     setcookie("TH", 'null', 0, '/' );
        //     setcookie("COOKES", 'null', 0, '/');
        //     setcookie("username", 'null', 0, '/');
        //     throw new NotFoundHttpException ; 
        // }   



    }


    public function send_mail_verify (Request $request){
        if(isset( $request->email)){
            
            $email = $this->InsertInput("email", $request->email);
            $user = User::where("email", $email)->first();
            
            if($user){
                $today = new DateTime();
                $interval = date_interval_create_from_date_string('2 days');
                $future_date = date_add($today, $interval);
                $token_verify = $this->InsertInput("str", Str::random(60), "%", "") ; 
                Sessions::create([
                    "type" => "1",
                    "token" => $token_verify,
                    "date" =>  $future_date->format('Y-m-d'),
                ]);
                
                
                Mail::to($email)->send(new UserRegister($user, $token_verify));
                return response()->json([
                    "status_code" => 200,
                    "msg" => "success"
                ]) ; 
            }


        }else{
            $user = $this->get_info_user() ;

            if($user === false){
                $user = ""; 
            }else{
                $user = $user->email; 
            }
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "user" => $user,
                "ip_device" => $ip,
                "reason" => "send mail verify hack"
            ]);
            setcookie("EH", 'null', 0, '/' );
            setcookie("TH", 'null', 0, '/' );
            setcookie("COOKES", 'null', 0, '/');
            setcookie("username", 'null', 0, '/');
            throw new NotFoundHttpException ; 
        }   



    }

    public function logout (Request $request){
        
        setcookie("EH", 'null', 0, '/' );
        setcookie("TH", 'null', 0, '/' );
        setcookie("COOKES", 'null', 0, '/');
        setcookie("username", 'null', 0, '/');
       
        return redirect()->back(); 

    }



}
