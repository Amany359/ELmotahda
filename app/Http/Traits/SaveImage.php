<?php
namespace app\Http\Traits ;

trait SaveImage
{
    public function save_photo($photo,$folder,$edit=true,$name=true){
        if($edit === true){
            if($photo != ""){
                $list_extistion = [
                    "png", "jpg", "JPG", "PNG", 'jpeg', "JPEG", "pdf", "PDF", 'webp', "cad", "dwg"
                ];
                $file_extistion = $photo -> getClientOriginalExtension();
                if(in_array($file_extistion, $list_extistion) == true){
                    $file_name = time() . "." . $file_extistion ;
                    $path = "images/$folder" ;
                    $photo -> move($path, $file_name);
                    return $file_name ; 
                }else{
                    return false ;
                }
            }else{
                return false ;
            }
        }else{
            if($photo != ""){
                $list_extistion = [
                    "png", "jpg", "JPG", "PNG", 'jpeg', "JPEG", "pdf", "PDF", 'webp', "cad", "dwg"
                ];
                $file_extistion = $photo -> getClientOriginalExtension();
                if(in_array($file_extistion, $list_extistion) == true){
                    $file_name = $name . "." .$file_extistion ;
                    $path = "images/$folder" ;
                    $photo -> move($path, $file_name);
                    return $file_name ; 
                }else{
                    return false ;
                }
            }else{
                return false ;
            }
        }
    }
    
}