<?php

namespace App\Http\Controllers\admin\DashBoard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Http\Traits\GetAdminInfo;
use App\Http\Traits\SaveImage;
use App\Models\BlockUser;
use App\Models\Gallary as ModelsGallary;
use Illuminate\Http\Request;

class Gallary extends Controller
{
    use GetAdminInfo ; 
    use CleanInput ; 
    use SaveImage ; 


    public function gallary() {
        $admin = $this->get_info_admin();

        $data = [
            'admin' => $admin
        ]; 
        return view("Admin.index.gallary", $data);
    }


    public function get_gallary (Request $request){
        $gallary = ModelsGallary::all()->sortBy("category") ; 


        ?>
         <div class="mt-5">
            <h4 class="card-title text-dark">Gallery</h4>
            <p class="card-subtitle mb-3">
              you can make gallery like this
            </p>
          </div>
        <?php


        foreach($gallary as $ph){

            ?>

               
         
          <div class="col-md-4 box" style="position: relative;">
  
  
            <div class="card overflow-hidden" >
              <div class="el-card-item pb-3">
                <div class="
                    el-card-avatar
                    mb-3
                    el-overlay-1
                    w-100
                    overflow-hidden
                    position-relative
                    text-center
                  ">
                  <a class="image-popup-vertical-fit" target="_blank" href="<?= url("images/Gallary/$ph->image")?>">
                    <img src="<?= url("images/Gallary/$ph->image")?> " style="width:368px; height:300px; object-fit:contain" class="d-block position-relative w-100" alt="<?= $ph->category?>" />
                  </a>
                </div>
                <div class="el-card-content text-center">
                    <h4 class="mb-0 card-title"><?= $ph->category?></h4>
                    <p class="card-subtitle">Gallary Photo</p>
                    <button type="button" onclick="delete_gallery('<?= $ph->id?>')" class="btn waves-effect waves-light btn-rounded bg-danger-subtle text-danger">
                      Delete
                    </button>
                </div>
              </div>
            </div>
          


          </div>


            <?php
        }
        ?>
         
        <?php

    }

    public function get_categories (Request $request){
        $categories = ModelsGallary::all() ; 
        $list_category = [] ; 

        ?>
            <option value="" selected>Choose...</option>

        <?php
        foreach($categories as $category){
            if(!in_array($category->category, $list_category)){

            ?>
                <option value="<?= $category->category?>"><?= $category->category?></option>

            <?php
            array_push($list_category, $category->category); 
            }
        }

    }


    
    public function add_gallary (Request $request){
        $ip = $_SERVER['REMOTE_ADDR'] ;

        if(isset($request->image)){
            $admin = $this->get_info_admin();
            
            $image = $this->save_photo($request->image, "Gallary/") ; 
            $category = $this->InsertInput("str", $request->category) ; 
            $exists_category = $this->InsertInput("str", $request->exists_category) ; 
            $cat = '';


            if($exists_category != ""){
                $cat = $exists_category ; 
            }elseif($category != ""){
                $cat = $category ; 
            }else{
                return response()->json([
                    'status_code' => 400,
                    'msg' => "Category is requierd"
                ]);
                exit(); 
            }

            
            try {
                //code...
                ModelsGallary::create([
                    "image" => $image,
                    "category" => $cat,
                    "admin" => $admin->email,
                    "created_at" => date('Y-m-d H:i:s')
                ]);
                return response()->json([
                    'status_code' => 200,
                    'msg' => "Success Created"
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status_code' => 400,
                    'msg' => "Error"
                ]);
                //throw $th;
            }


        }else{
            BlockUser::create([
                "ip_device" => $ip,
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


    public function delete_gallery (Request $request){
        $ip = $_SERVER['REMOTE_ADDR'] ;

        if(isset($request->id)){
            $id = $this->InsertInput("int", $request->id);

            try {
                //code...
                ModelsGallary::where("id", $id)->delete();
                return response()->json([
                    'status_code' => 200,
                    'msg' => "Success Deleted"
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status_code' => 400,
                    'msg' => "Error"
                ]);
                //throw $th;
            }


        }else{
            BlockUser::create([
                "ip_device" => $ip,
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
