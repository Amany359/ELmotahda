<?php

namespace App\Http\Controllers\admin\DashBoard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Http\Traits\GetAdminInfo;
use App\Http\Traits\SaveImage;
use App\Models\Photo_bar;
use App\Models\Banner;
use App\Models\BlockUser ;
use Illuminate\Http\Request;

class Banners extends Controller
{
    use GetAdminInfo ; 
    use SaveImage ; 
    use CleanInput ; 


    public function banner() {
        $admin = $this->get_info_admin();

        $data = [
            'admin' => $admin
        ]; 
        return view("Admin.index.banner", $data);
    }

    public function Photo_bar() {
        $admin = $this->get_info_admin();

        $data = [
            'admin' => $admin
        ]; 
        return view("Admin.index.Photo_bar", $data);
    }


    public function get_banner (Request $request){
        $banners = Banner::all() ; 

        foreach($banners as $banner){

            ?>

            <div class="card">
                <div class="position-relative">
                    <img class="card-img-top" src="<?= url("images/Banners/$banner->image")?>" alt="Card image cap" style="max-height: 450px; object-fit:cover">
                
                </div>
                <div class="card-footer text-bg-white">
                    <div class="row">
                        <div class="col-12">
                            <div class="row text-center">
                                <div class="col-6 col-md-2 border-end" style="    height: 48px;">
                                    <input type="button" onclick="delete_banner('<?= $banner->id?>')" class="btn btn-danger" value="Delete banner" >
                                </div>
                                <div class="col-6 col-md-2 border-end" style="      display: flex; justify-content: center; align-items: center;  height: 48px;">
                                    <?= $banner->admin?>
                                </div>
                                <div class="col-6 col-md-2 border-end" style="     display: flex; justify-content: center; align-items: center;   height: 48px;">
                                    <?= $banner->created_at?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }

    }






    public function add_banner (Request $request){
        $ip = $_SERVER['REMOTE_ADDR'] ;

        if(isset($request->image)){
            $admin = $this->get_info_admin();
            $image = $this->save_photo($request->image, "Banners/") ; 


            try {
                //code...
                Banner::create([
                    "image" => $image,
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




    public function delete_banner (Request $request){
        $ip = $_SERVER['REMOTE_ADDR'] ;

        if(isset($request->id)){
            $id = $this->InsertInput("int", $request->id);

            try {
                //code...
                Banner::where("id", $id)->delete();
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


    



    public function add_photo_bar (Request $request){
        $ip = $_SERVER['REMOTE_ADDR'] ;

        if(isset($request->image, $request->background)){
            $admin = $this->get_info_admin();
            $image = $this->save_photo($request->image, "Photo_bar/") ; 
            $background = $this->save_photo($request->background, "Photo_bar/", false, time() + 5) ; 


            try {
                //code...
                Photo_bar::create([
                    "image" => $image,
                    "background" => $background,
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

    public function get_photo_bar (Request $request){
        $photos = Photo_bar::all() ; 

        foreach($photos as $photo){

            ?>

                <div class="card overflow-hidden">
                      <div class="card-body p-0">

                          <input type="file" style="display: none;" name="background" id="background_1">
                          <label for="background_1">
                            <img style="cursor: pointer" src="<?= url("images/Photo_bar/$photo->background")?>" alt="modernize-img" class="img-fluid">
                          </label>
                          
                          <div class="row align-items-center">
                              <div class="col-lg-4 order-lg-1 order-2">
                                    <div class="d-flex align-items-center justify-content-around m-4">
                                        <div class="text-center">
                                            <button onclick="delete_photo_bar('<?= $photo->id?>')" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                              </div>
                              <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                                  <div class="mt-n5">
                                      <div class="d-flex align-items-center justify-content-center mb-2">
                                          <div class="d-flex align-items-center justify-content-center round-110" style="width:534px; ">
                                              <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100" style="    width: 534px; height: 150px; object-fit: contain;border-radius:0px !important; ">
                                                <input type="file" style="display: none;" name="image" id="background_2">
                                                <label for="background_2">
                                                  <img style="object-fit: cover; cursor: pointer" src="<?= url("images/Photo_bar/$photo->image")?>" alt="modernize-img" class="w-100 h-100">
                                                </label>
                                              </div>
                                          </div>
                                      </div>
                                    
                                  </div>
                              </div>
                              <div class="col-lg-4 order-last">
                                  <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-end my-3 mx-4 pe-xxl-4 gap-3">
                                     
                                      <li>
                                          <button class="btn btn-primary text-nowrap">Add new photo</button>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                         
                      </div>
                  </div>

            <?php
        }

    }


    public function delete_gallery (Request $request){
        $ip = $_SERVER['REMOTE_ADDR'] ;

        if(isset($request->id)){
            $id = $this->InsertInput("int", $request->id);

            try {
                //code...
                Photo_bar::where("id", $id)->delete();
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
