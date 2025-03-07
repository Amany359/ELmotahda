<?php

namespace App\Http\Controllers\admin\DashBoard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Http\Traits\GetAdminInfo;
use App\Models\BlockUser;
use App\Models\categories;
use App\Models\Contact_us;
use App\Models\country;
use App\Models\Engineering;
use App\Models\find_air;
use App\Models\options;
use App\Models\order;
use App\Models\product;
use App\Models\product__options;
use App\Models\Settings;
use App\Models\shipping;
use App\Models\tags;
use App\Models\user_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class requests extends Controller
{

    use CleanInput ; 
    use GetAdminInfo  ; 

    public function get_variation (){
        $options = options::all(); 

     
        foreach($options as $option){
            ?>
                <option value="<?= $option->option_id?>"><?= $option->option_key?></option>
            <?php
        }
    }

    public function get_category (){
        $categories = categories::all(); 

        foreach($categories as $category){
            ?>
                <option value="<?= $category->category_id?>"><?= $category->category_name?></option>
            <?php
        }
    }

    public function get_tags (){
        $tags = tags::all(); 

        foreach($tags as $tag){
            ?>
                <option value="<?= $tag->tag_id?>"><?= $tag->tag_name?></option>
            <?php
        }
    }


    
    public function last_orders (){
        $curent_month = date('m') ;
        $curent_year = date('Y') ;
        $orders = order::orderBy('order_token', 'desc')->where("created_at", "LIKE", "$curent_year-$curent_month%")->get();


        foreach($orders as $order){
            $images = explode("_", $order->product_image);

            ?>

                <tr>
                    <td class="ps-0">
                        <a href="<?= route("product", ['id' => $order->product_id])?>">
                            <div class="d-flex align-items-center">
                                <div class="me-2 pe-1">
                                    <img src="<?= url("images/product/$images[0]")?>" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                                </div>
                                <div>
                                    <h6 class="fw-semibold mb-1"><?= $order->product_name?></h6>                                
                                </div>
                            </div>
                        </a>
                    </td>
                    <td>
                        <p class="mb-0 fs-3"><?= $order->order_quantity?></p>
                    </td>
                    <td>
                        <?php
                            if($order->process == '1' ){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-primary-subtle text-primary'><?= trans('lan.under process')?></span>
                                <?php
                            }else if($order->process == '0'){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-primary-subtle text-primary'><?= trans('lan.payment check')?></span>
                                <?php
                            }else if($order->process == '2'){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-info-subtle text-info'><?= trans('lan.Confirm')?></span>
                                <?php

                            }else if($order->process == '3'){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-info-subtle text-info'><?= trans('lan.Out for Delivery')?></span>
                                <?php

                            }else if($order->process == '4'){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-info-subtle text-info'><?= trans('lan.Delivered')?></span>
                                <?php

                            }
                        ?>
                        
                     
                        
                    </td>
                    <td>
                        <p class="fs-3 text-dark mb-0"><?= $order->product_price?> EGP</p>
                    </td>
                </tr>

            <?php
        }
    }

    
    public function get_orders_month (Request $request){
        $curent_month = $request->month;
        $curent_year = date('Y') ;

        $orders = order::orderBy('order_token', 'desc')->where("created_at", "LIKE", "$curent_year-$curent_month%")->get();


        foreach($orders as $order){
            $images = explode("_", $order->product_image);

            ?>

                <tr>
                    <td class="ps-0">
                        <a href="<?= route("product", ['id' => $order->product_id])?>">
                            <div class="d-flex align-items-center">
                                <div class="me-2 pe-1">
                                    <img src="<?= url("images/product/$images[0]")?>" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                                </div>
                                <div>
                                    <h6 class="fw-semibold mb-1"><?= $order->product_name?></h6>                                
                                </div>
                            </div>
                        </a>
                    </td>
                    <td>
                        <p class="mb-0 fs-3"><?= $order->order_quantity?></p>
                    </td>
                    <td>
                        <?php
                            if($order->process == '1' ){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-primary-subtle text-primary'><?= trans('lan.under process')?></span>
                                <?php
                            }else if($order->process == '0'){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-primary-subtle text-primary'><?= trans('lan.payment check')?></span>
                                <?php
                            }else if($order->process == '2'){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-info-subtle text-info'><?= trans('lan.Confirm')?></span>
                                <?php

                            }else if($order->process == '3'){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-info-subtle text-info'><?= trans('lan.Out for Delivery')?></span>
                                <?php

                            }else if($order->process == '4'){
                                ?>
                                <span class='badge fw-semibold py-1 w-85 bg-info-subtle text-info'><?= trans('lan.Delivered')?></span>
                                <?php

                            }
                        ?>
                        
                     
                        
                    </td>
                    <td>
                        <p class="fs-3 text-dark mb-0"><?= $order->product_price?> EGP</p>
                    </td>
                </tr>

            <?php
        }
    }

    public function get_products (){
        $products = product::all(); 
        $categories_product = DB::select("SELECT * FROM `product__categories` JOIN `categories` ON `product__categories`.`category_id` = `categories`.`category_id` ") ; 


        $options = DB::select("SELECT * FROM `product__options` JOIN `options` ON `options`.`option_id` = `product__options`.`option_id` ") ; 


    

        foreach($products as $product){
            $images = explode("_", $product->images);
            
            ?>
            <div class="col-sm-6 col-xxl-4 product_filter"
            <?php
            
            for ($i=0; $i < count($options) ; $i++) { 
                # code...
                if($options[$i]->product_id == $product->product_id){
                    ?>
                    data-<?= $options[$i]->option_key?> = '<?= $options[$i]->value?>'
                    <?php
                }
            }

            foreach($categories_product as $category){
                if($category->product_id == $product->product_id){
                    ?>
                    data-<?= $category->category_name?>="<?= $category->category_id?>"
                    <?php
                }
            }
            
            ?>

            >
                    <div class="card hover-img overflow-hidden">
                        <div class="position-relative">
                            <a href="<?= route('product_details', ['product_id' => $product->product_id])?>">
                                <img src="<?= url("images/product/$images[0]")?>" class="card-img-top" style="width:268px ; height:268px; object-fit:contain;" alt="modernize-img">
                            </a>


                            <a style="cursor: pointer;" onclick="add_product_cart('<?= $product->product_id?>')" class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart">
                                <i class="ti ti-basket fs-4"></i>
                            </a>
                    

                        </div>

                        <div class="card-body pt-3 p-4">
                            <h6 class="fs-4"><?= $product->product_name?></h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fs-4 mb-0">
                                    <?= $product->product_price?> 
                                  
                                    <span class="ms-2 fw-normal text-muted fs-3">
                                        <del>
                                            <?php
                                                if(strpos($product->discount, "%") !== false){
                                                    $discount = str_ireplace("%", "", $product->discount) ; 
                                                    $per = (100 - $discount) / 100 ; 
                                                    echo $product->product_price / $per ; 
                                                }elseif($product->discount != "0"){
                                                    echo $product->discount + $product->product_price ;
                                                }
                                            ?>
                                        </del>
                                    </span>
                                </h6>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                    <li>
                                        <a class="me-1" href="javascript:void(0)">
                                            <i class="ti ti-star text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)">
                                            <i class="ti ti-star text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)">
                                            <i class="ti ti-star text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="me-1" href="javascript:void(0)">
                                            <i class="ti ti-star text-warning"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="ti ti-star text-warning"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="row">
                                   
                                    <a  class="justify-content-center w-100 btn mb-1 btn-rounded btn-dark d-flex align-items-center" href="<?= route('edit_product', ['product_id' =>  $product->product_id])?>">
                                        <i class="fs-5 ti ti-file-description"></i>
                                        Update
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            <?php
        }

     
    }


    public function filter_options (){
        $categories = categories::all(); 
        $options = options::all();


        ?>

            <ul class="list-group pt-2 border-bottom rounded-0">
                <h6 class="my-3 mx-4">Filter by Category</h6>

                <?php 

                foreach($categories as $category){
                    ?>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2" >
                            <a onclick="product_filter('<?= $category->category_name?>', '<?= $category->category_id?>' , this)" class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded" style="cursor: pointer;">
                                <i class="ti ti-circles fs-5"></i>
                                <?= $category->category_name?>
                            </a>
                        </li>
                    <?php
                }
                ?>
     
            </ul>



            <?php
                $list_values = [];

                foreach($options as $option){
                    $list_values = []; 
                    if($option->option_key == "color"){



                        ?>
                            <div class="by-colors border-bottom rounded-0">
                                <h6 class="mt-4 mb-3 mx-4 fw-semibold"><?= $option->option_key?></h6>
                                <div class="pb-4 px-4">
                                    <ul class="list-unstyled d-flex flex-wrap align-items-center gap-2 mb-0">


                                        

                                        <?php 
                                            $values = product__options::where("option_id", $option->option_id)->get();    
                                            foreach($values as $value){
                                                if(!in_array($value->value, $list_values)){
                                                    ?>
                                                        <li class="shop-color-list" >
                                                            <a onclick="product_filter('<?= $option->option_key?>', '<?= $value->value?>' )" style="background-color: <?= $value->value?>;" class="fil_<?= $option->option_key?> shop-colors-item rounded-circle d-block shop-colors-1" href="javascript:void(0)"></a>
                                                        </li>
                                                    <?php
                                                    array_push($list_values, $value->value) ;     
                                                }
                                            }
                                        ?>
                                   
                                    </ul>
                                </div>
                            </div>
                        <?php



                    }else{




                        ?>
                            <ul class="list-group pt-2 border-bottom rounded-0">
                                <h6 class="my-3 mx-4"><?= $option->option_key?></h6>

                                <?php 
                                    $list_values = [];
                                    $values = product__options::where("option_id", $option->option_id)->get();    
                                    foreach($values as $value){
                                        if(!in_array($value->value, $list_values)){

                                            ?>
                                                <li class="list-group-item border-0 p-0 mx-4 mb-2" >
                                                    <a onclick="product_filter('<?= $option->option_key?>', '<?= $value->value?>' , this)" class="fil_<?= $option->option_key?> rounded d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" style="cursor: pointer;">
                                                        <i class="ti ti-circles fs-5"></i>
                                                        <?= $value->value?>
                                                    </a>
                                                </li>
                                            <?php
                                            array_push($list_values, $value->value) ;     
                                        }
                                    }
                                ?>
                    
                            </ul>
                        <?php





                    }
                }
            ?>
            
           
            <div class="p-4" >
                <a href="javascript:void(0)" onclick="reset_products()" class="btn btn-primary w-100">Reset Filters</a>
            </div>

        <?php
    

    }



    public function get_cart_shop (){
        $admin = $this->get_info_admin(); 
        $carts = DB::select("SELECT * FROM `cart` JOIN `product` ON `cart`.`product_id` = `product`.`product_id` WHERE `cart`.`user` = '$admin->email' "); 
        $settings = Settings::first();


        ?>

        <div class="offcanvas-header justify-content-between py-4">
            <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">
                Shopping Cart
            </h5>
            <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm"><?= count($carts)?> new</span>
        </div>
        <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
            <ul class="mb-0" id="cart_products">
                <?php
                $sub_total = 0 ; 
                $total = 0 ; 
                $Discount = 0 ; 
                foreach($carts as $cart){
                    
                        $sub_total += $cart->product_price * $cart->cart_quantity ; 
                    
    
                        if(strpos($cart->discount, "%") !== false){
                            
                            $discount_number = str_ireplace("%", "", $cart->discount);
                            $per = (100 - $discount_number) / 100 ; 
                            $total_before_dis = ($cart->product_price * $cart->cart_quantity) / $per ; 

                            $Discount += $total_before_dis - $sub_total  ; 

    
                        }elseif($cart->discount >= 1){
                            $Discount += $cart->discount * $cart->cart_quantity ; 
                        }else{
                            $Discount += $cart->discount * $cart->cart_quantity ; 
                        }
                        $total = ($sub_total + $settings->shipping)  ; 
                        $images = explode("_", $cart->images);

                        ?>
                            <li class="pb-7">
                                <div class="d-flex align-items-center">
                                    <img src="<?= url("images/product/$images[0]")?>" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" style="object-fit: contain;" alt="modernize-img" />
                                    <div>
                                        <h6 class="mb-1"><?= $cart->product_name?></h6>
                                        <p class="mb-0 text-muted fs-2"><?php echo html_entity_decode(substr($cart->desc_en, 0, 50)); ?></p>
                                        <div class="d-flex align-items-center justify-content-between mt-2">
                                            <h6 class="fs-2 fw-semibold mb-0 text-muted"><?= $cart->product_price?></h6>
                                            <div class="input-group input-group-sm w-50">
                                                <input type="number" class="form-control " onchange="quantity_product('<?= $cart->product_id?>', this)"
                                                value="<?= $cart->cart_quantity?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                <button type="button" onclick="remove_cart('<?= $cart->product_id?>')" class="btn btn-rounded btn-danger" style="    padding: 2px 16px;">
                                Remove
                                </button>
                                </div>
                            </li>
                        <?php
                    



                }
                ?>
            </ul>
            <div class="align-bottom">
                <div class="d-flex align-items-center pb-7">
                    <span class="text-dark fs-3">Sub Total</span>
                    <div class="ms-auto">
                        <span class="text-dark fw-semibold fs-3 total_cart_shop"><?= $total?></span>
                    </div>
                </div>
         
                <a href="<?= route('check_out')?>" class="btn btn-outline-primary w-100">Go to check out</a>
            </div>
        </div>
      <?php

    }


    public function product_check_out (Request $request){
        $admin = $this->get_info_admin(); 
        $products = DB::select("SELECT * FROM `cart` JOIN `product` ON `cart`.`product_id` = `product`.`product_id` WHERE `cart`.`user` = '$admin->email' ") ;
        $categories = DB::select("SELECT * FROM `product__categories` JOIN `categories` ON `product__categories`.`category_id` = `categories`.`category_id` 
        ") ;


        foreach ($products as $product){
            $images = explode("_", $product->images);
            ?>
                <tr>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-3 overflow-hidden">
                        <img src="<?= url("images/product/$images[0]")?>" alt="matdash-img" class="img-fluid rounded" width="80" style="height:100px; object-fit:contain">
                        <div>
                          <h6 class="fw-semibold fs-4 mb-0"><?= $product->product_name?></h6>
                          <p class="mb-0">
                            <?php
                                foreach($categories as $category){
                                    if($category->product_id == $product->product_id){
                                        echo $category->category_name . " <br>"; 
                                    }
                                }
                            ?>
                          </p>
                          <a style="cursor:pointer" onclick="remove_cart('<?= $product->product_id?>', 'check_out')" class="text-danger fs-4">
                            <i class="ti ti-trash"></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <div class="input-group input-group-sm flex-nowrap rounded">
                        <input type="number" class="form-control" onchange="quantity_product('<?= $product->product_id?>', this, 'check_out')" style="    max-width: 70px;" value="<?= $product->cart_quantity?>">
                      </div>
                    </td>
                    <td class="text-end border-bottom-0">
                      <h6 class="fs-4 fw-semibold mb-0"><?= $product->product_price?></h6>
                    </td>
                 
                </tr>





            <?php
        }
         
    }

    public function get_order_sum (){
        $admin = $this->get_info_admin(); 
        $products = DB::select("SELECT * FROM `cart` JOIN `product` ON `cart`.`product_id` = `product`.`product_id` WHERE `cart`.`user` = '$admin->email' ") ;
        $sub_total  = 0 ; 
        $Discount = 0  ; 
        $Shipping = Settings::first()  ; 
        $discount_type = "" ; 

        foreach ($products as $product){
            $sub_total += $product->product_price * $product->cart_quantity ; 
            if(strpos($product->discount, "%") !== false){

                
                $discount_number = str_ireplace("%", "", $product->discount);
                $per = (100 - $discount_number) / 100 ; 
                $total_before_dis = ($product->product_price * $product->cart_quantity) / $per ; 

                $Discount += $total_before_dis - $sub_total  ; 

                $discount_type = "( $product->discount )" ; 
            }elseif($product->discount >= 1){
                $Discount += $product->discount * $product->cart_quantity ; 
                $discount_type = "( $product->discount EGP )" ; 
            }else{
                $Discount += $product->discount * $product->cart_quantity ; 
            }
        }


        
        $total_after_Discount = ($sub_total + $Shipping->shipping)  ; 

        ?>
            <h5 class="fs-5 fw-semibold mb-4">Order Summary</h5>
            <div class="d-flex justify-content-between mb-4">
              <p class="mb-0 fs-4">Sub Total</p>
              <h6 class="mb-0 fs-4 fw-semibold"><?= $sub_total?></h6>
            </div>

            <?php 
            if($discount_type != ""){
                ?>

                <div class="d-flex justify-content-between mb-4">
                <p class="mb-0 fs-4">Discount <?= $discount_type?></p>
                <h6 class="mb-0 fs-4 fw-semibold text-danger">-<?= $Discount?></h6>
                </div>
                <?php
            }
            ?>

            <div class="d-flex justify-content-between mb-4">
                <p class="mb-0 fs-4">Shipping</p>
                <h6 class="mb-0 fs-4 fw-semibold text-success">+<?= $Shipping->shipping?></h6>
            </div>
            <div class="d-flex justify-content-between">
              <h6 class="mb-0 fs-4 fw-semibold">Total</h6>
              <h6 class="mb-0 fs-5 fw-semibold"><?= $total_after_Discount?></h6>
            </div>
        <?php
         
    }




    public function get_orders (){
        $orders = order::query()->where("status" , "1")
        ->orderBy('order_token', 'asc')
        ->get(); 

        $token = "" ;
        $total = 0 ;

        foreach($orders as $order){
            

            
            if($order->order_token != $token){
                $total = 0 ;

                foreach($orders as $order2){
                    if($order->order_token == $order2->order_token){
                        $total += $order2->product_price *  $order2->order_quantity ; 
                    }
                }
                $total += $order->shipping ; 

                if($order->process == '0'){
                    echo '<div class="col-md-4 single-note-item All payment_check">' ;
                }else if($order->process == '1'){
                    echo '<div class="col-md-4 single-note-item All under_process">' ;
                }else if($order->process == '2'){
                    echo '<div class="col-md-4 single-note-item All confirm">' ;
                }else if($order->process == '3'){
                    echo '<div class="col-md-4 single-note-item All Out_for_Delivery">' ;
                }else{
                    echo '<div class="col-md-4 single-note-item All Delivered">' ;
                }
                $token = $order->order_token ; 

                ?>

                        <div class="card card-body">
                        <?php
                        if($order->process == '1'){
                            echo '<span class="side-stick2"></span>';
                        }else{
                            echo '<span class="side-stick"></span>';
                        }
                        ?>
                        <h6 class="note-title text-truncate w-75 mb-3" data-noteHeading="Total : <?= $total?>"> 
                            <a style="color: white;" href="<?= route("details_order", ['token' => $order->order_token])?>">
                                Total :  <?= $total?>
                            </a>
                        </h6>
                        <h6 class="note-title text-truncate w-75 mb-3" data-noteHeading="ID : <?= $order->order_token?>">
                            <a style="color: white;" href="<?= route("details_order", ['token' => $order->order_token])?>">
                                ID :  <?= $order->order_token?>
                            </a>
                        </h6>
                        
                        <p class="note-date fs-2"><?= $order->created_at?></p>
                        <div class="note-content">
                            <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                User : <?= $order->name?>
                            </p>
                            <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                Email : <?= $order->email2?>
                            </p>
                            <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                Phone : <?= $order->phone?>
                            </p>
                            <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                Payment : <?= $order->payment?>
                            </p>
                            <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                Notification : <?= $order->notif?>
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                    
                                <?php
                                    if($order->process == '1'){
                                        ?>
                                            
                                            <a href="javascript:void(0)" onclick="delete_order('<?= $order->order_token?>')" class="link text-danger ms-2">
                                                <i class="ti ti-trash fs-4 remove-note"></i>
                                            </a>
                                            <div class="ms-auto">
                                            <div class="category-selector btn-group">

                                            <a onclick="change_status(2, '<?= $order->order_token?>')" class='justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center'>
                                                <i class='ti ti-send fs-4 me-2'></i>
                                                Confirm
                                            </a>
                                        <?php
                                    }else if($order->process == "2"){
                                        ?>
                                            
                                            <a href="javascript:void(0)" onclick="delete_order('<?= $order->order_token?>')" class="link text-danger ms-2">
                                                <i class="ti ti-trash fs-4 remove-note"></i>
                                            </a>
                                            <div class="ms-auto">
                                            <div class="category-selector btn-group">

                                            <a onclick="change_status(3, '<?= $order->order_token?>')"  class='justify-content-center w-100 btn mb-1 btn-dark d-flex align-items-center'>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' 
                                                    viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'
                                                    stroke-linecap='round' stroke-linejoin='round' 
                                                    class='icon icon-tabler icons-tabler-outline icon-tabler-truck'><path 
                                                    stroke='none' d='M0 0h24v24H0z' fill='none'/><path d='M7 17m-2 0a2 2 0 1
                                                    0 4 0a2 2 0 1 0 -4 0'/><path d='M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0'/>
                                                    <path d='M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5'/>
                                                </svg>
                                                Out for Delivery
                                            </a>
                                        <?php
                                    }else if($order->process == "3"){
                                            ?>
                                                
                                                <a href="javascript:void(0)" onclick="delete_order('<?= $order->order_token?>')" class="link text-danger ms-2">
                                                    <i class="ti ti-trash fs-4 remove-note"></i>
                                                </a>
                                                <div class="ms-auto">
                                                <div class="category-selector btn-group">

                                                <a onclick="change_status(4, '<?= $order->order_token?>')"  class='justify-content-center w-100 btn mb-1 btn-dark d-flex align-items-center'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' 
                                                        viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2'
                                                        stroke-linecap='round' stroke-linejoin='round' 
                                                        class='icon icon-tabler icons-tabler-outline icon-tabler-truck'><path 
                                                        stroke='none' d='M0 0h24v24H0z' fill='none'/><path d='M7 17m-2 0a2 2 0 1
                                                        0 4 0a2 2 0 1 0 -4 0'/><path d='M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0'/>
                                                        <path d='M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5'/>
                                                    </svg>
                                                    Delivered
                                                </a>
                                            <?php
                                    }else if($order->process == "4"){
                                            ?>
                                                <div class="ms-auto">
                                                <div class="category-selector btn-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-dasharray="24" stroke-dashoffset="24" stroke-linecap="round" 
                                                    stroke-linejoin="round" stroke-width="2" d="M5 11L11 17L21 7">
                                                        <animate  fill="freeze" attributeName="stroke-dashoffset" dur="0.48s" values="24;0"/>
                                                    </path>
                                                </svg>
                                            <?php
                                    }else if($order->process == "0"){
                                        ?>
                                            <a href="javascript:void(0)" onclick="delete_order('<?= $order->order_token?>')" class="link text-danger ms-2">
                                                <i class="ti ti-trash fs-4 remove-note"></i>
                                            </a>
                                            <div class="ms-auto">
                                            <div class="category-selector btn-group">
                                        <?php
                                    }
                                ?>

                                <div class="dropdown-menu dropdown-menu-right category-menu">
                              
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php

                
            }else{

            }




        }
         
    }


    public function details_order (Request $request){
        $admin = $this->get_info_admin(); 
        $email = $admin->email ; 
        if($request->token){
            $token = $this->InsertInput("str", $request->token);
            $order = order::where("order_token", $token); 

            
            if($order->exists() === true){
                $orders = $order->get() ;
                $info_user = user_info::where("user", $order->first()->user)->first();
                
                $data = [
                    'info_user' => $info_user,
                    'admin' => $admin,
                    'orders' => $orders,
                    'order' => $order->first(),
                ]; 

                return view("Admin.index.order_details", $data);




            }else{
                $ip = $_SERVER['REMOTE_ADDR'] ;
                BlockUser::create([
                    "email" => $email,
                    "ip_device" => $ip,
                    "reason" => "order token is not found"
                ]);
                setcookie("EHA", "null", 0, '/' );
                setcookie("THA", "null", 0, '/' );
                setcookie("COOKESA", "null", 0, '/');
                setcookie("usernameA", "null", 0, '/');
                return redirect()->back() ; 
                
            }



        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $email,
                "ip_device" => $ip,
                "reason" => "order token is not found"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return redirect()->back() ; 
        }
    }


    public function get_reviews (Request $request){
        if($request->token){
            $token = $this->InsertInput("str", $request->token);
            $order = order::where("order_token", $token); 

            
            if($order->exists() === true){
                $orders = $order->get() ;
                foreach($orders as $order_){
                    $reviews = DB::select("SELECT * FROM `review_product` JOIN `info_users` ON `review_product`.`user` = `info_users`.`user` JOIN `product` ON `review_product`.`product_id` = `product`.`product_id` WHERE `review_product`.`product_id` = '$order_->product_id'  ");


                    ?>
                        <img src="<?= url("images/product/$order_->product_image")?>" style="    object-fit: contain !important;" alt="modernize-img" height="360" class="rounded-4 w-100 object-fit-cover">


                        <div class="d-flex align-items-center my-3">
                            All comments 
                        </div>

                    <?php
                    foreach($reviews as $review ){
                        ?>
                        


                            <div class="position-relative" >



                                <div class="p-4 rounded-4 text-bg-light mb-3">
                                    <div class="d-flex align-items-center gap-6 flex-wrap">
                                    <img src="<?= url("images/profile/$review->image")?>" alt="modernize-img" class="rounded-circle" width="33" height="33">
                                    <h6 class="mb-0"><?= $review->user?></h6>
                                    <span class="fs-2">
                                        <span class="p-1 text-bg-muted rounded-circle d-inline-block"></span> <?= $review->created_at?>
                                    </span>
                                    <span class="fs-2" style="    color: lime;">
                                        <?php 
                                            if($review->verify == '1'){
                                                echo "Verified purchase" ;
                                                ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-dashed-check">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95" />
                                                <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44" />
                                                <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92" />
                                                <path d="M8.56 20.31a9 9 0 0 0 3.44 .69" />
                                                <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95" />
                                                <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44" />
                                                <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92" />
                                                <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69" />
                                                <path d="M9 12l2 2l4 -4" />
                                                </svg>
                                                <?php
                                            }
                                                ?>
                                    </span>
                                    </div>
                                    <p class="my-3">
                                        <?= $review->comment?>
                                    </p>
                                    <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <a onclick="remove_comment(`<?= $review->id_review?>`)" class="d-inline-flex align-items-center justify-content-center btn btn-danger rounded-circle btn-lg round-48">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                            </svg>                                        
                                        </a>
                                        <span class="text-dark fw-semibold"><?= $review->rating?> star</span>
                                    </div>
                                    </div>
                                </div>

                            
                            </div>
                        <?php
                    }
                }




            }else{
                $ip = $_SERVER['REMOTE_ADDR'] ;
                BlockUser::create([
                    "ip_device" => $ip,
                    "reason" => "order token is not found"
                ]);
                setcookie("EHA", "null", 0, '/' );
                setcookie("THA", "null", 0, '/' );
                setcookie("COOKESA", "null", 0, '/');
                setcookie("usernameA", "null", 0, '/');
                return redirect()->back() ; 
                
            }



        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "order token is not found"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return redirect()->back() ; 
        }
    }

    public function purchases_user (Request $request){
        if($request->user){
            $user = $this->InsertInput("email", $request->user);
            $order = order::where("user", $user); 

            
            if($order->exists() === true){
                $orders = $order->get() ;
                $count_ = 0 ;
                $count = 0 ;
                foreach($orders as $order_){
                    if($count_ != $order_->order_token){
                        $count_ = $order_->order_token ; 
                        $count += 1; 
                    }    
                }
                    ?>
                                 
                    <div class="d-sm-flex align-items-center justify-content-between mt-3 mb-4">
                        <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">purchases <span class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2"><?= $count?></span></h3>
                    </div>
                    <div class="row" >

                <?php
               
                $token = "" ;
                foreach($orders as $order_){

                    if($token != $order_->order_token){
                        $token = $order_->order_token ; 

                        ?>
                            
                            
                            <div class=" col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-4 d-flex align-items-center gap-6 flex-wrap">
                                <div>
                                    <h5 class="fw-semibold mb-0">Id : <?= $token?></h5>
                                    <span class="fs-2 d-flex align-items-center">
                                        <?= $order_->created_at?>
                                    </span>
                                </div>
                                <a href="<?= route("details_order", ['token' => $token])?>" class="btn btn-primary py-1 px-2 ms-auto">Details order</a>
                                </div>
                            </div>
                            </div>



                        <?php
                    }
                   
                }
                ?>
                    </div>
                <?php



            }else{
                $ip = $_SERVER['REMOTE_ADDR'] ;
                BlockUser::create([
                    "ip_device" => $ip,
                    "reason" => "order token is not found"
                ]);
                setcookie("EHA", "null", 0, '/' );
                setcookie("THA", "null", 0, '/' );
                setcookie("COOKESA", "null", 0, '/');
                setcookie("usernameA", "null", 0, '/');
                return redirect()->back() ; 
                
            }



        }else{
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "ip_device" => $ip,
                "reason" => "order token is not found"
            ]);
            setcookie("EHA", "null", 0, '/' );
            setcookie("THA", "null", 0, '/' );
            setcookie("COOKESA", "null", 0, '/');
            setcookie("usernameA", "null", 0, '/');
            return redirect()->back() ; 
        }
    }

    public function all_users (Request $request){
        $users = DB::select("SELECT * FROM `users` JOIN `info_users` ON `users`.`email` = `info_users`.`user`  ");
            
            foreach($users as $user){
                $orders = []; 
                $all_orders = DB::select("SELECT * FROM `orders` WHERE `user` = '$user->email' AND `process` = '4' ");

                foreach($all_orders as $order){
                    if(!in_array($order->order_token, $orders)){
                        array_push($orders, $order->order_token); 
                    }
                }
                ?>


                            
                    <div class="col-lg-4 col-md-6" style="    margin: 0px 20px;">
                        <div class="card text-center">
                            <div class="card-body">

                            <img src="<?= url("images/profile/$user->image")?>" class="rounded-1 img-fluid" width="90" />

                            <div class="mt-n2">
                                <?php 
                                    if($user->status == "Active"){
                                        echo "<span class='badge text-bg-success'>Active</span>" ; 
                                    }else{
                                        echo '<span class="badge text-bg-danger">Blocked</span>' ; 
                                    }
                                ?>
                                <h3 class="card-title mt-3"><?= $user->username?></h3>
                                <?php 
                                    if($user->email_verified_at != ""){
                                        echo "<p class='card-subtitle'> 
                                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' 
                                        viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' 
                                        stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler 
                                        icons-tabler-outline icon-tabler-rosette-discount-check'>
                                        <path stroke='none' d='M0 0h24v24H0z' fill='none' />
                                        <path d='M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1' />
                                        <path d='M9 12l2 2l4 -4' />
                                        </svg> 
                                        Verify at $user->email_verified_at
                                        </p>" ; 
                                    }else{
                                        ?>
                                        <p class="card-subtitle"> 
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" 
                                       stroke="currentColor" stroke-width="1" stroke-linecap="round" 
                                       stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-rosette-discount-check-off">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 12l2 2l1.5 -1.5m2 -2l.5 -.5" />
                                        <path d="M8.887 4.89a2.2 2.2 0 0 0 .863 -.53l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.528 .858m-.757 3.248a2.193 2.193 0 0 1 -1.555 .644h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1c0 -.604 .244 -1.152 .638 -1.55" />
                                        <path d="M3 3l18 18" />
                                        </svg>
                                        Not Yet <a onclick="send_mail_verify('<?= $user->email?>')"  style="text-decoration: underline; color:#0d6efd; cursor:pointer"> Send mail</a>
                                        </p>
                                        <?php
                                    }
                                ?>
                            </div>

                            <div class="row mt-3 justify-content-center">
                                <div class="col-6">
                                <div class="py-2 px-3 text-bg-light rounded-4 d-flex align-items-center">
                                    <span class="text-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-truck-delivery">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                    <path d="M3 9l4 0" />
                                    </svg>
                                    </span>
                                    <div class="ms-2 text-start">
                                    <h6 class="fw-normal text-muted mb-0">orders</h6>
                                    <h4 class="mb-0 fs-5"><?= count($orders)?></h4>
                                    </div>
                                </div>
                                </div>
                                <div class="col-6">
                                <div class="py-2 px-3 text-bg-light rounded-4 d-flex align-items-center">
                                    <span class="text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                    stroke-linecap="round" stroke-linejoin="round" 
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-ce">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 6a6 6 0 1 0 0 12" />
                                    <path d="M21 6a6 6 0 1 0 0 12" />
                                    <path d="M15 12h6" />
                                    </svg>
                                    </span>
                                    <div class="ms-2 text-start">
                                    <h6 class="fw-normal text-muted mb-0">Products</h6>
                                    <h4 class="mb-0 fs-5"><?= count($all_orders)?></h4>
                                    </div>
                                </div>

                              
                                    
                                
                                </div>
                            </div>

                            <div class="row" style="margin: 10px 0px;">
                                <a href="<?= route("user_details", ['id' => $user->id])?>" class="btn btn-outline-secondary" style="margin: 10px 0px;">
                                    View details
                                </a>
                                <a onclick="active_user('<?= $user->id?>')" class="btn btn-outline-success" style="margin: 10px 0px;">
                                    Active
                                </a>
                                <a onclick="block_user('<?= $user->id?>')" class="btn btn-outline-danger" style="margin: 10px 0px;">
                                    Block
                                </a>
                            </div>


                            </div>
                        </div>
                    </div>


                <?php



            }

    }

    public function all_admins (Request $request){
        $admins = DB::select("SELECT * FROM `admins` ");
            
            foreach($admins as $admin){
            
                ?>


                <div class="col-md-4 col-lg-2">
                    <div class="card text-center bg-white alert-dismissible fade show alert p-0 card-hover rounded-4" role="alert">
                    <button type="button"  class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="p-2 d-block mt-3">
                        <img src="<?= url("admin/assets/images/profile/user-5.jpg")?>" width="75" class="rounded-circle img-fluid" />
                        <h5 class="card-title mt-3"><?= $admin->username?></h5>

                        <?php 
                        if($admin->status == "Active"){
                            ?>
                            <span class="badge bg-primary-subtle text-primary mb-3">
                                <?= trans("lan.active")?>
                            </span>
                            <a onclick="block_admin('<?= $admin->id?>')" class="btn btn-outline-danger  d-block w-100" style="margin: 10px 0px;">
                                <?= trans("lan.block")?>
                            </a>
                            <?php
                        }else{
                            ?>

                            <span class="badge text-bg-danger">
                                <?= trans("lan.blocked_")?>
                            </span>
                            <a onclick="active_admin('<?= $admin->id?>')" class="btn btn-primary  d-block w-100" style="margin: 10px 0px;">
                                <?= trans("lan.active")?>
                            </a>
                            <?php
                        }
                        ?>
                       

                    </div>
                    </div>
                </div>
                            
                    


                <?php



            }

    }

    public function get_all_quote (Request $request){
        $engineerings = Engineering::orderBy('id', 'desc')->get();
        $list_engineerings = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $first_loop = -1 ; 
        $all_engineering = ""; 
        $curent_month = date('m') ;
        $month_loop = 0 ; 
        $count_month_loop = 0 ; 
        $month_count = 0 ;






        foreach($engineerings as $engineering){

            $month = substr($engineering->created_at, 5, 2) ;

            if($first_loop == -1){
                $first_loop = 0 ; 
                $month_loop = $month ; 
            }



            if($month_loop == $month){
                $count_month_loop += 1; 
            }else{
                $list_engineerings[(int)$month_loop] = $count_month_loop ; 
                $count_month_loop = 1 ;
                $month_loop = $month;
            }










            if($curent_month == $month){
                if($engineering->project == '1'){
                    $project = trans('lan.hotel'); 
                }else if($engineering->project == '2'){
                    $project = trans('lan.Restaurants'); 
                }else if($engineering->project == '3'){
                    $project = trans('lan.office building'); 
                }else if($engineering->project == '4'){
                    $project = trans('lan.Residential unit'); 
                }else if($engineering->project == '5'){
                    $project = trans('lan.Compound'); 
                }else if($engineering->project == '6'){
                    $project = trans('lan.Mall'); 
                }else if($engineering->project == '7'){
                    $project = trans('lan.pharmacy'); 
                }
                $projects_file = url("images/projects_file/$engineering->file"); 
                $month_count += 1;
                $all_engineering .= "
                    <tr class='search-items'>
                        <td>
                          <div class='action-btn'>
                             <a href='javascript:void(0)' onclick='delete_quote('$engineering->id')' class='text-dark delete ms-2'>
                                <i class='ti ti-trash fs-5' style='color: red;'></i>
                             </a>
                          </div>
                       </td>
                       <td>
                             $engineering->company
                       </td>
                       <td>
                             $engineering->email
                       </td>
                       <td>
                             $engineering->location
                       </td>
                       <td>
                             $engineering->message
                       </td>
                       <td>
                            $project
                       </td>
                       <td>
                             $engineering->phone
                       </td>
                       <td>
                            <a style='text-decoration: underline;' target='_blank' href='$projects_file'>
                                ". trans('lan.open file') ."
                            </a>
                       </td>
                       <td>
                             $engineering->created_at
                       </td>
                     
                    </tr>
                "; 
            }
            
        }
        $list_engineerings[(int)$month_loop] = $count_month_loop ; 


        return response()->json([
            "status_code" => 200,
            "engineerings" => $all_engineering,
            "curent_month" => $curent_month,
            "month_count" => $month_count,
            "list_engineerings" => $list_engineerings,
        ]); 

    }

    public function get_all_conditioning (Request $request){
        $curent_year = date('Y') ;
        $find_air = find_air::orderBy('created_at', 'desc')->where("created_at", "LIKE", "$curent_year%")->get();
        $all_find = "" ;
        $curent_month = date('m') ;
        $first_loop = -1 ; 
        $month_loop = 0 ; 
        $count_month_loop = 0 ; 
        $list_find_air = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $month_count = 0 ;
        

        
        foreach($find_air as $find){
            $month = substr($find->created_at, 5, 2) ;

            if($first_loop == -1){
                $first_loop = 0 ; 
                $month_loop = $month ; 
            }

           


            if($month_loop == $month){
                $count_month_loop += 1; 
            }else{

                $list_find_air[(int)$month_loop] = $count_month_loop ; 
                $count_month_loop = 1 ;
                $month_loop = $month;
            }



            if($month == $curent_month){
                $month_count += 1;
                $all_find .= "
                    <tr class='search-items'>
                        <td>
                          <div class='action-btn'>
                             <a href='javascript:void(0)' onclick='delete_conditioning('$find->id')' class='text-dark delete ms-2'>
                                <i class='ti ti-trash fs-5' style='color: red;'></i>
                             </a>
                          </div>
                       </td>
                       <td>
                            $find->space
                       </td>
                       <td>
                            $find->service
                       </td>
                       <td>
                            $find->building
                       </td>
                       <td>
                            $find->email
                       </td>
                       <td>
                            $find->phone
                       </td>
                       <td>
                            $find->created_at
                       </td>
                     
                    </tr>
                "; 
            }

        }


        $list_find_air[(int)$month_loop] = $count_month_loop ; 

        return response()->json([
            "status_code" => 200, 
            "all_find" => $all_find,
            "curent_month" => $curent_month,
            "month_count" => $month_count,
            "list_find_air" => $list_find_air,
        ]);

        

    }

    public function get_Contact (Request $request){
        $find_air = Contact_us::orderBy('id', 'desc')->get();
            
            foreach($find_air as $find){
            
                ?>
                    <tr class="search-items">
                       
                    
                       <td>
                            <?= $find->name?>
                       </td>
                       <td>
                            <?= $find->message?>
                       </td>
                       <td>
                            <?= $find->email?>
                       </td>
                       <td>
                            <?= $find->phone?>
                       </td>
                       <td>
                            <?php 
                                if($find->confirm == "1"){
                                    echo trans("lan.confirm") ;
                                }else{
                                    echo "false" ;
                                }
                            ?>
                       </td>
                       <td>
                            <?= $find->admin?>
                       </td>
                       <td>
                            <?= $find->created_at?>
                       </td>
                     
                    </tr>

                <?php



            }

    }

    public function get_areas (Request $request){
        $areas = shipping::all();
            
            foreach($areas as $area){
             
              
                ?>
                    <a class="dropdown-item" href="javascript:void(0)"><?= $area->countrs . " ___ " .$area->city . "  ___  " . $area->type . "  ___  " . $area->price?> <span onclick="remove_area('<?= $area->id?>')" style="color:red"> Remove</span></a>
                <?php



            }

    }

    public function get_countrs (){
        $countrs = country::all();
            
            foreach($countrs as $country){
             
              
                ?>
                    <option value="<?= $country->country?>"><?= $country->country?></option>
                <?php



            }

    }




    

}
