<?php
namespace app\Http\Traits ;

use Illuminate\Support\Facades\DB;

trait SetNewVistor
{
    public function new_vistor(){
        
        $ip = ''; 
            try {
                //code...
                $ip = $_SERVER['REMOTE_ADDR'] ;
            } catch (\Throwable $th) {
                //throw $th;
            }
        $city = "";
        $region =  "";
        $country =  "";
        $device_name =  gethostname() ;
        $device_type =  "" ;
        try {
            $device_type =  $_SERVER['HTTP_SEC_CH_UA_PLATFORM'] ;
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }

        if($ip != '127.0.0.1'){
            try {
                //code...
                $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                $city =  $details->city;
                $region =  $details->region;
                $country =  $details->country;
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        $location = $city . $region . $country ; 
        $date = date("Y-m-d"); 
        $check_date = DB::select("SELECT * FROM `clients` WHERE `number_apartment` = '$date'");
        if(!$check_date){
            DB::insert("INSERT INTO `clients` VALUES (NULL, '$device_name', '$device_type', '', 'ادخال', '', '$ip', '$location', '$date', '',current_timestamp()	)");
        }
    }
    
}