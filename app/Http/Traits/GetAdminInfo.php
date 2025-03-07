<?php
namespace App\Http\Traits ;

use App\Models\Admin;

trait GetAdminInfo
{

    use CleanInput ; 

    public function get_info_admin(){
        $cookies = $this->InsertInput('str',  $_COOKIE["COOKESA"] )  ;
        $admin = Admin::where("cookies", "=", $cookies)->first() ; 
        return $admin ;
    }




}