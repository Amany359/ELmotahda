<?php

namespace App\Http\Controllers\admin\DashBoard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Http\Traits\GetAdminInfo;
use App\Http\Traits\SaveImage;
use App\Models\BlockUser;
use App\Models\product;
use App\Models\product__categories;
use App\Models\product__options;
use App\Models\product__tags;
use App\Models\projects;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ecommerce extends Controller
{
    //
    use GetAdminInfo ; 
    use SaveImage ; 
    use CleanInput ; 

    public function product_page (){
        $admin = $this->get_info_admin();

        $data = [
            'admin' => $admin
        ]; 
        return view("Admin.index.add_product", $data);

    }

    public function add_project_page (){
        $admin = $this->get_info_admin();

        $data = [
            'admin' => $admin
        ]; 
        return view("Admin.index.add_project", $data);

    }

    public function add_service_page (){
        $admin = $this->get_info_admin();

        $data = [
            'admin' => $admin
        ]; 
        return view("Admin.index.add_service", $data);

    }

    public function porjects_admin (){
        $admin = $this->get_info_admin();
        $projects = projects::all();

        $data = [
            'admin' => $admin,
            'projects' => $projects
        ]; 
        return view("Admin.index.projects", $data);

    }

    public function services_admin (){
        $admin = $this->get_info_admin();
        $services = Services::all();

        $data = [
            'admin' => $admin,
            'services' => $services
        ]; 
        return view("Admin.index.services", $data);

    }

    public function edit_project (Request $request){
        if(isset($request->id)){
            $id = $this->InsertInput("int", $request->id);
            $admin = $this->get_info_admin();
            $project = projects::where('id', $id)->first();
    
            $data = [
                'admin' => $admin,
                'project' => $project
            ]; 
            return view("Admin.index.edit_project", $data);
        }
    }

    public function product_details (Request $request){
        $admin = $this->get_info_admin();
        $product_id = $this->InsertInput('int', $request->product_id) ;

        $product = product::where("product_id", $product_id)->first() ; 
        
        if(isset($product)){
            $categories = DB::select("SELECT * FROM `product__categories` JOIN `categories` ON `product__categories`.`category_id` = `categories`.`category_id` WHERE `product__categories`.`product_id` = '$product->product_id' ");
            $options = DB::select("SELECT * FROM `product__options` JOIN `options` ON `product__options`.`option_id` = `options`.`option_id` WHERE `product__options`.`product_id` = '$product->product_id' ");
            $data = [
                'admin' => $admin,
                'categories' => $categories,
                'options' => $options,
                'product' => $product
            ]; 
            return view("Admin.index.product_details", $data);
        }else{
            $data = [
                'admin' => $admin
            ]; 
            return view("Admin.index.shop", $data);
        }

    }

    public function edit_product (Request $request){
        $admin = $this->get_info_admin();
        $product_id = $this->InsertInput('int', $request->product_id) ;

        $product = product::where("product_id", $product_id)->first() ; 

        if(isset($product)){
            $categories = DB::select("SELECT * FROM `product__categories` JOIN `categories` ON `product__categories`.`category_id` = `categories`.`category_id` WHERE `product__categories`.`product_id` = '$product->product_id' ");
            $options = DB::select("SELECT * FROM `product__options` JOIN `options` ON `product__options`.`option_id` = `options`.`option_id` WHERE `product__options`.`product_id` = '$product->product_id' ");

            
            $data = [
                'admin' => $admin,
                'categories' => $categories,
                'options' => $options,
                'product' => $product
            ]; 
            return view("Admin.index.edit_product", $data);
        }else{
            $data = [
                'admin' => $admin
            ]; 
            return view("Admin.index.shop", $data);
        }

    }


    public function shop_page (){
        $admin = $this->get_info_admin();

        $data = [
            'admin' => $admin
        ]; 
        return view("Admin.index.shop", $data);

    }


    public function check_out (){
        $admin = $this->get_info_admin();
        
        $data = [
            'admin' => $admin,
        ]; 
        return view("Admin.index.check_out", $data);

    }




    public function add_product (Request $request){
        // fixed_price
        // customrange
        // tags     (list)
        
  

        if(isset(
            $request->product_name,
            $request->content_ar,
            $request->content_en,
            $request->file,
            $request->variation_key, // (list)
            $request->variation_value, // (list)
            $request->price,
            $request->discount,
            $request->vat,
            $request->categories, // (list)
            $request->quantity,
            $request->status
        )){
            $product_name = $this->InsertInput("str", $request->product_name); 
            $discount = $this->InsertInput("str", $request->discount); 
            $price = $this->InsertInput("int", $request->price); 
            $vat = $this->InsertInput("int", $request->vat); 
            $status = $this->InsertInput("int", $request->status); 
            $quantity = $this->InsertInput("int", $request->quantity); 
            $content_ar = $request->content_ar; 
            $content_en = $request->content_en; 
            $categories = $request->categories; 
            $tags = $request->tags; 
            $file = $request->file; // list
            $product_name = $this->InsertInput("str", $request->product_name); 
            $variation_key = $request->variation_key ; //list
            $variation_value = $request->variation_value ; //list
            $photos_name = [];
            $product = new product ; 

            

            for ($x=0; $x < 6 ; $x++) { 
                if(isset($file[$x])){
                    $image = $this->save_photo($file[$x], "product", false, time() . $x) ; 
                    array_push($photos_name, $image) ; 
                }
            }

            $images = implode("_", $photos_name);

            if($discount == "customrange"){
                $discount = $this->InsertInput("str", $request->customrange) . "%"; 
            }elseif($discount == "fixed_price"){
                $discount = $this->InsertInput("int", $request->fixed_price); 
            }else{
                $discount = 0 ; 
            }

            $product->product_name = $product_name ; 
            $product->product_price = $price ; 
            $product->desc_ar = $content_ar ; 
            $product->desc_en = $content_en ; 
            $product->status = $status ; 
            $product->discount = $discount ; 
            $product->quantity = $quantity ; 
            $product->publish = 1 ; 
            $product->vat = $vat ;
            $product->images = $images ;
            $product->save(); 
            $id = $product->id;
            


            for ($i=0; $i < count($variation_key) ; $i++) {
                if($variation_value[$i] != ""){
                    product__options::create([
                        "product_id" => $id,
                        "option_id" =>  $this->InsertInput('int', $variation_key[$i]),  
                        "value" => $this->InsertInput("str", $variation_value[$i] ) 
                    ]);
                }
            }

            for ($z=0; $z < count($categories) ; $z++) {
                if($categories[$z] != ""){
                    product__categories::create([
                        "product_id" => $id,
                        "category_id" =>  $this->InsertInput('int', $categories[$z]),
                    ]);
                }
            }

            if($tags != ""){
                for ($y=0; $y < count($tags) ; $y++) {
                    if($tags[$y] != ""){
                        product__tags::create([
                            "product_id" => $id,
                            "tag_id" =>  $this->InsertInput('int', $tags[$y]),
                        ]);
                    }
                }
            }

            
            return response()->json([
                "status_code" => 200, 
                "msg" => "Success"
            ]);


            
        }else{
            return response()->json([
                "status_code" => 400, 
                "msg" => "All Data Is Requierd"
            ]);
        }
    }







    public function remove_product (Request $request){
        if(isset($request->product_id)){
            $product_id = $this->InsertInput("int", $request->product_id); 


            product::where("product_id" , $product_id)->delete(); 
            


        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            $admin = $this->get_info_admin();

            BlockUser::create([

                "email" => $admin->email,

                "ip_device" => $ip,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", 'null', 0, '/' );
            setcookie("THA", 'null', 0, '/' );
            setcookie("COOKESA", 'null', 0, '/');
            setcookie("usernameA", 'null', 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }



    public function ed_remove_category (Request $request){
        if(isset($request->id)){

            $id = $this->InsertInput("int", $request->id); 
            product__categories::where("count_product_category" , $id)->delete(); 

        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            $admin = $this->get_info_admin();

            BlockUser::create([
                "ip_device" => $ip,
                "email" => $admin->email,
                "reason" => "Change something in dev tool"
            ]);
            setcookie("EHA", 'null', 0, '/' );
            setcookie("THA", 'null', 0, '/' );
            setcookie("COOKESA", 'null', 0, '/');
            setcookie("usernameA", 'null', 0, '/');
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.blocked")
            ]);
        }
    }



    public function change_edit_photo (Request $request){
        if(isset($request->id)){
            $id = $this->InsertInput("int", $request->id);
            $index = $this->InsertInput("str", $request->index);

            $check = product::where("product_id", $id);

            if($check->exists() === true){
                $product = $check->first(); 
                $image = explode("_", $product->images);

                 




                if($index != "none_"){
                    // $file_name = $this->save_photo($request->image, 'product');
                    if(in_array($index, $image)){
                        $file_name = $this->save_photo($request->image, 'product');
                        $key = array_search($index, $image) ; 
                        $image[$key] = $file_name ;
                        $db_images = implode("_", $image);
                        $check->update([
                            "images" => $db_images 
                        ]);
                        return response()->json([
                            "status_code" => 200,
                            "msg" => "Success edit"
                        ]);
                    }else{
                        $file_name = $this->save_photo($request->image, 'product');
                        array_push($image, $file_name);
                        $db_images = implode("_", $image);
                        $check->update([
                            "images" => $db_images 
                        ]);
                        return response()->json([
                            "status_code" => 200,
                            "msg" => "Success add"
                        ]);
                    }

                }else{
                    $file_name = $this->save_photo($request->image, 'product');
                    array_push($image, $file_name);
                    $db_images = implode("_", $image);
                    $check->update([
                        "images" => $db_images 
                    ]);
                    return response()->json([
                        "status_code" => 200,
                        "msg" => "Success add"
                    ]);
                }


            }else{
                return response()->json([
                    'status_code' => 400,
                    "msg" => "product is not found"
                ]);
            }

        }else{
    
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.data is required")
            ]);
        }
    }


    public function remove_photo (Request $request){
        if(isset($request->id, $request->index)){
            $id = $this->InsertInput("int", $request->id);
            $index = $this->InsertInput("str", $request->index);

            $check = product::where("product_id", $id);

            if($check->exists() === true){
                $product = $check->first(); 
                $image = explode("_", $product->images);

                 



                if($index != "none_"){
                    // $file_name = $this->save_photo($request->image, 'product');
                    if(in_array($index, $image)){
                        
                        $file_name = $this->save_photo($request->image, 'product');
                        $key = array_search($index, $image) ; 
                        // $image[$key] = null ;
                        unset($image[$key] ) ;
                        $db_images = implode("_", $image);
                        $check->update([
                            "images" => $db_images 
                        ]);
                        return response()->json([
                            "status_code" => 200,
                            "msg" => "Success remove"
                        ]);
                        
                    }else{
                        
                        return response()->json([
                            "status_code" => 200,
                            "msg" => "Success remove"
                        ]);

                    }

                }else{
                    $file_name = $this->save_photo($request->image, 'product');
                    array_push($image, $file_name);
                    $db_images = implode("_", $image);
                    $check->update([
                        "images" => $db_images 
                    ]);
                    return response()->json([
                        "status_code" => 200,
                        "msg" => "Success add"
                    ]);
                }


            }else{
                return response()->json([
                    'status_code' => 400,
                    "msg" => "product is not found"
                ]);
            }

        }else{            
            return response()->json([
                'status_code' => 400,
                'msg' => trans("lan.data is required")
            ]);
        }
    }





}
