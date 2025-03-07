<?php
namespace App\Http\Traits ;

trait CleanInput
{
    public function InsertInput($type, $text = '', $search = '', $replace = ''){

        if($text != "" || $text != null){
            if($type == "str"){
                $filter = filter_var($text, FILTER_SANITIZE_STRING);
                return strip_tags(str_ireplace($search,$replace,$filter));
            }else if($type == "int"){
                $filter = strip_tags(filter_var($text, FILTER_SANITIZE_NUMBER_INT));
                return $filter;
            }else if($type == "email"){
                $filter = filter_var($text, FILTER_SANITIZE_EMAIL);
                return strip_tags(str_ireplace($search,$replace,$filter)) ;
            }
        }else {
            return null ; 
        }
    }
    
}