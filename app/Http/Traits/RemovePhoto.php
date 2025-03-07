<?php
namespace App\Http\Traits ;

trait RemovePhoto
{
    public function Remove_old_photo($path, $old_photo){

        $path = realpath("images") . "\\" . $path;   
        $photoOLD = $old_photo ; 
        $image = $path . "\\" ."{$photoOLD}" ;
        if(file_exists($image) == true){
            unlink($image);
        }

    }
    
}