<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Http\Traits\GetuserInfo;
use App\Models\BlockUser;
use App\Models\cart as ModelsCart;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;

session_start(); 

class cart extends Controller
{
    //

    use CleanInput ; 
    use GetuserInfo ; 

    public function cart_shop_mobile (){

        $user = $this->get_info_user() ;
        
        if($user === false){
            if(isset($_COOKIE['guest_user'])){
                $user = $_COOKIE['guest_user'] ; 
            }else{
                $user = $this->InsertInput("str" , "guest_" . rand(10, 10000000), "%", "") ;
                setcookie("guest_user", $user , time() + 60 * 60 * 24 * 30, '/'); 
            }
        }else{
            $user = $user->email ; 
        }

        $carts = DB::select("SELECT * FROM `cart` JOIN `product` ON `cart`.`product_id` = `product`.`product_id` WHERE `cart`.`user` = '$user' "); 


        ?>

            <a itemprop="url" class="eltd-header-cart" style="color: white;    height: 20px; " href="<?= route('cart')?>">


                <i class="flaticon-shopping-cart" style="font-size: 23px;"></i> 
                <span style="color: #c8ff0b; font-weight: bold;" >
                    <?= count($carts)?>

                </span>


            </a>
          

        <?php
    }

    public function categories (){
        $categories = categories::get();

        
        foreach($categories as $category){
            ?>
                <li class="category-parent  menu-item menu-item-type-taxonomy menu-item-object-product_cat">
                    <a href="<?= route("shop", ['category' => $category->category_id])?>">
                        <?php
                        if($category->icon != ""){
                            ?>
                               <span class="menu-icon">
                                    <img style="width: 22px; height:22px; object-fit:contain; " src="<?= url("images/categories/$category->icon")?>" alt="">
                                </span>
                            <?php 
                        }else{
                            ?>
                                <span class="menu-icon">
                                    <i class="klbth-icon-car-tools"></i>
                                </span>
                            <?php
                        }
                        ?>
                        <?= $category->category_name?>
                    </a>
                </li>
            <?php
        }
    }

    public function get_cart_shop_web (){

        $user = $this->get_info_user() ;
        
        if($user === false){
            if(isset($_COOKIE['guest_user'])){
                $user = $_COOKIE['guest_user'] ; 
            }else{
                $user = $this->InsertInput("str" , "guest_" . rand(10, 10000000), "%", "") ;
                setcookie("guest_user", $user , time() + 60 * 60 * 24 * 30, '/'); 
            }
        }else{
            $user = $user->email ; 
        }

        $carts = DB::select("SELECT * FROM `cart` JOIN `product` ON `cart`.`product_id` = `product`.`product_id` WHERE `cart`.`user` = '$user' "); 

        if(count($carts)){

            ?>
                <div class="fl-mini-cart-content" style="opacity: 1;">
                    <div class="products list-style small-list site-scroll woocommerce-mini-cart cart_list product_list_widget ps">
                        
                        <?php 
                                $sub_total = 0 ; 
                                $total = 0 ; 
                                $_SESSION['carts_count'] = count($carts) ; 
                                foreach($carts as $cart){
                                
                                    $images = explode("_", $cart->images);
                                    $sub_total += $cart->product_price * $cart->cart_quantity ; 
                                                                    
        
                                    $total = ($sub_total )  ; 
                                    ?>
                            
                                    <div class="product woocommerce-mini-cart-item mini_cart_item" data-count="<?= count($carts)?>">
                                        <div class="product-wrapper">
                                            <div class="product-content">
                                                <div class="thumbnail-wrapper entry-media">
                                                    <a href="<?= route('product', ['id' => $cart->product_id])?> ">
                                                        <img width="300" height="300" src="<?= url("images/product/$images[0]")?>"class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" > </a>
                                                </div>
                                                <div class="content-wrapper">
                                                    <h3 class="product-title">
                                                        <a href="<?= route('product', ['id' => $cart->product_id])?> ">
                                                            <?= $cart->product_name?>
                                                        <a>

                                                    </h3>
                                                    <span class="price">
                                                        <span class="quantitysa">
                                                            <?= $cart->cart_quantity?> × 
                                                            <span class="woocommerce-Price-amountamount">
                                                                <bdi>
                                                                    <span class="woocommerce-Price-currencySymbol">EGP </span><?= $cart->product_price?></bdi>
                                                            </span>
                                                        </span>
                                                    </span><!-- price -->
                                                </div><!-- content-wrapper -->
                                                <a style="cursor: pointer;" onclick="remove_cart('<?= $cart->id_cart?>') " class="removeremove_from_cart_button" aria-label="Remove VISION® - 147 DAYTONA Hyper Silver fromcart"data-product_id="3132"data-cart_item_key="fb2606a5068901da92473666256e6e5b" data-product_sku="AG3KO9ED" ><i class="klbth-icon-xmark"></i></a>
                                            </div><!-- product-content -->
                                        </div><!-- product-wrapper -->
                                    </div>
                                    <?php
                                    }
                                ?>
                    
                    </div>
                    <p class="woocommerce-mini-cart__total total">
                        <strong><?= trans("lan.Subtotal")?>:</strong> 
                        <span class="woocommerce-Price-amount amount">
                            <bdi>
                                <span class="woocommerce-Price-currencySymbol">EGP</span>
                                <?= $total?>
                            </bdi>
                        </span>
                    </p>
                
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="<?= route("cart")?>" class="button wc-forward"><?= trans("lan.view cart")?></a>
                        <a href="<?= route("checkout")?>" class="button checkout wc-forward"><?= trans("lan.checkout")?></a>
                    </p>
                </div>
            <?php

        }else{
            ?>
                <div class="fl-mini-cart-content">

                    <div class="cart-empty">
                        <div class="empty-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 231.523 231.523" style="enable-background:new 0 0 231.523 231.523" xml:space="preserve">
                                <path d="M107.415 145.798a7.502 7.502 0 0 0 8.231 6.69 7.5 7.5 0 0 0 6.689-8.231l-3.459-33.468a7.5 7.5 0 0 0-14.92 1.542l3.459 33.467zM154.351 152.488a7.501 7.501 0 0 0 8.231-6.69l3.458-33.468a7.499 7.499 0 0 0-6.689-8.231c-4.123-.421-7.806 2.57-8.232 6.689l-3.458 33.468a7.5 7.5 0 0 0 6.69 8.232zM96.278 185.088c-12.801 0-23.215 10.414-23.215 23.215 0 12.804 10.414 23.221 23.215 23.221s23.216-10.417 23.216-23.221c0-12.801-10.415-23.215-23.216-23.215zm0 31.435c-4.53 0-8.215-3.688-8.215-8.221 0-4.53 3.685-8.215 8.215-8.215 4.53 0 8.216 3.685 8.216 8.215 0 4.533-3.686 8.221-8.216 8.221zM173.719 185.088c-12.801 0-23.216 10.414-23.216 23.215 0 12.804 10.414 23.221 23.216 23.221 12.802 0 23.218-10.417 23.218-23.221 0-12.801-10.416-23.215-23.218-23.215zm0 31.435c-4.53 0-8.216-3.688-8.216-8.221 0-4.53 3.686-8.215 8.216-8.215 4.531 0 8.218 3.685 8.218 8.215 0 4.533-3.686 8.221-8.218 8.221z"></path>
                                <path d="M218.58 79.08a7.5 7.5 0 0 0-5.933-2.913H63.152l-6.278-24.141a7.5 7.5 0 0 0-7.259-5.612H18.876a7.5 7.5 0 0 0 0 15h24.94l6.227 23.946c.031.134.066.267.104.398l23.157 89.046a7.5 7.5 0 0 0 7.259 5.612h108.874a7.5 7.5 0 0 0 7.259-5.612l23.21-89.25a7.502 7.502 0 0 0-1.326-6.474zm-34.942 86.338H86.362l-19.309-74.25h135.895l-19.31 74.25zM105.556 52.851a7.478 7.478 0 0 0 5.302 2.195 7.5 7.5 0 0 0 5.302-12.805L92.573 18.665a7.501 7.501 0 0 0-10.605 10.609l23.588 23.577zM159.174 55.045c1.92 0 3.841-.733 5.306-2.199l23.552-23.573a7.5 7.5 0 0 0-.005-10.606 7.5 7.5 0 0 0-10.606.005l-23.552 23.573a7.5 7.5 0 0 0 5.305 12.8zM135.006 48.311h.002a7.5 7.5 0 0 0 7.5-7.498l.008-33.311A7.5 7.5 0 0 0 135.018 0h-.001a7.5 7.5 0 0 0-7.501 7.498l-.008 33.311a7.5 7.5 0 0 0 7.498 7.502z"></path>
                            </svg>
                        </div>
                        <div class="empty-text"><?= trans("lan.No products in the cart")?></div>
                    </div>

                </div>
            <?php 
        }
        
    }

    public function cart_shop_data(){



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

        $carts = DB::select("SELECT * FROM `cart` JOIN `product` ON `cart`.`product_id` = `product`.`product_id` WHERE `cart`.`user` = '$user' "); 
        $sub_total  = 0 ; 


        if(count($carts) >= 1){
            ?>
            <div class="eltd-container eltd-default-page-template">
                <div class="eltd-container-inner clearfix">
                        <div class="eltd-grid-row">
                                <div class="eltd-page-content-holder eltd-grid-col-12">
                                        <div class="woocommerce">
                                                <div class="woocommerce-notices-wrapper"></div>
                                                <form class="woocommerce-cart-form"  method="post" style="margin-bottom: 30px;">
                                                        <h3 style="text-align: center;"><?= trans("lan.ADDED TO cart")?></h3>
                                                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                                <thead>
                                                                       
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                        foreach($carts as $cart){                                                                            
                                                                            
                                                                                $images = explode("_", $cart->images);
                                                                                $sub_total += $cart->product_price * $cart->cart_quantity ; 
                                                                            
                
                                                                                $total = ($sub_total )  ; 
                                                                                ?>
                                                                                    <tr class="woocommerce-cart-form__cart-item cart_item">
            
                                                                                        <td class="product-remove">
                                                                                                <a href="<?= route("cart")?>" onclick="remove_cart('<?= $cart->id_cart?>', 'cart')"  
                                                                                                class="remove" aria-label="Remove Black Backpack from cart" data-product_id="2400" data-product_sku="102">×</a>
                                                                                        </td>

                                                                                        <td class="product-thumbnail">
                                                                                            <a href="<?= route("product", ["id" => $cart->product_id])?>"><img style="width: 65px; object-fit: cover;" width="300" height="300" 
                                                                                                src="<?= url("images/product/$images[0]")?>" 
                                                                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="v" decoding="async" 
                                                                                                srcset="<?= url("images/product/$images[0]")?> 300w, 
                                                                                                <?= url("images/product/$images[0]")?> 150w, 
                                                                                                <?= url("images/product/$images[0]")?> 768w, 
                                                                                                <?= url("images/product/$images[0]")?> 1024w, 
                                                                                                <?= url("images/product/$images[0]")?> 550w, 
                                                                                                <?= url("images/product/$images[0]")?> 606w, 
                                                                                                <?= url("images/product/$images[0]")?> 100w, 
                                                                                                <?= url("images/product/$images[0]")?> 1100w" sizes="(max-width: 300px) 100vw, 300px" loading="eager">
                                                                                            </a>
                                                                                        </td>

                                                                                        <td class="product-name" data-title="Product">
                                                                                                <a href="<?= route("product", ["id" => $cart->product_id])?>"><?= $cart->product_name?></a>
                                                                                        </td>

                                                                                        <td class="product-price" data-title="Price">
                                                                                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">EGP </span><?= $cart->product_price?></bdi></span>
                                                                                        </td>

                                                                                        <td class="product-quantity" data-title="Quantity">
                                                                                                <div class="eltd-quantity-buttons quantity">
                                                                                                        <label class="screen-reader-text" for="quantity_66844caa639d8<?= $cart->id_cart?>"><?= $cart->product_name?></label>
                                                                                                        <span class="eltd-quantity-minus fa fa-angle-down"></span>
                                                                                                        <input type="number" onchange="change_count_cart(this, '<?= $cart->id_cart?>', '<?= $cart->product_id?>')" id="quantity_66844caa639d8<?= $cart->id_cart?>" class="input-text qty text eltd-quantity-input" 
                                                                                                        name="" 
                                                                                                        value="<?= $cart->cart_quantity?>" aria-label="Product quantity" size="4" data-min="0" data-max="" data-step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                                                                                        <span class="eltd-quantity-plus fa fa-angle-up"></span>
                                                                                                </div>
                                                                                        </td>

                                                                                        <td class="product-subtotal" data-title="Subtotal">
                                                                                                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">EGP </span><?= $cart->product_price?></bdi></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                <?php

                                                                        }

                                                                    ?>
        
                                                                    
                                                                  
        
        
                                                                </tbody>
                                                        </table>
                                                        
                                                </form>
        
        
                                                <div class="cart-collaterals" style="    margin-bottom: 30px;">
                                                        <div class="cart_totals ">
        
        
                                                                <h2><?=  trans("lan.total")?></h2>
        
                                                                <table cellspacing="0" class="shop_table shop_table_responsive">
        
                                                                        <tbody>
                                                                            <tr class="cart-subtotal">
                                                                                    <th><?= trans("lan.Subtotal")?></th>
                                                                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">EGP </span><?= $total?></bdi></span></td>
                                                                            </tr>
                                                                            <tr class="cart-subtotal">
                                                                                    <th><?= trans("lan.Shipping")?></th>
                                                                                    <td data-title="Subtotal">
                                                                                        <span class="woocommerce-Price-amount amount">
                                                                                            <bdi>
                                                                                                Calculated in next step
                                                                                            </bdi>
                                                                                        </span>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr class="order-total">
                                                                                    <th><?= trans("lan.total")?></th>
                                                                                    <td data-title="Total">
                                                                                        <strong>
                                                                                            <span class="woocommerce-Price-amount amount">
                                                                                                <bdi>
                                                                                                    <span class="woocommerce-Price-currencySymbol">
                                                                                                        EGP </span>
                                                                                                        <?= $total ?>
                                                                                                </bdi>
                                                                                            </span>
                                                                                        </strong> 
                                                                                    </td>
                                                                            </tr>

                                                                        </tbody>
                                                                </table>
        
                                                                <div class="wc-proceed-to-checkout">
        
                                                                    <a href="<?= route("checkout")?>" class="checkout-button button alt wc-forward">
                                                                        <?= trans("lan.Proceed to checkout")?>
                                                                    </a>
                                                                </div>
        
        
                                                        </div>
                                                        
                                                </div>


                                                <div class="" style="    margin-bottom: 30px;" >
                                                        <a itemprop="url" href="<?= route('shop')?>" target="_self" class="eltd-btn eltd-btn-small eltd-btn-solid eltd-btn-icon eltd-cart-go-back eltd-btn-icon-position-left"> 
                                                            <span class="eltd-btn-text-holder"> <span style="font-size: 12px">
                                                                <i class="eltd-icon-font-awesome fa fa fa-chevron-left "></i>
                                                            </span> 
                                                            <span class="eltd-btn-text">
                                                                <?= trans("lan.Return to shop")?>
                                                            </span> 
                                                            </span> 
                                                            <span class="eltd-btn-additional-text-holder"> 
                                                                <span style="font-size: 12px">
                                                                    <i class="eltd-icon-font-awesome fa fa fa-chevron-left "></i>
                                                            </span> 
                                                            <span class="eltd-btn-text">
                                                                <?= trans("lan.Return to shop")?>
                                                            </span> 
                                                            </span> 
                                                        </a>
                                                </div>
        
                                        </div>
                                </div>
                        </div>
                </div>
                
            
            </div>
            <?php
        }else{
            ?>
            <div class="eltd-container eltd-default-page-template">
                <div class="eltd-container-inner clearfix">
                    <div class="eltd-grid-row">
                        <div class="eltd-page-content-holder eltd-grid-col-12">
                            <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <div class="eltd-empty-cart-image-holder">
                                        <img src="<?= url("website/wp-content/themes/trackstore/assets/img/empty-cart.png")?>" />
                                    </div>
                                    <p class="cart-empty">
                                        <?= trans("lan.YOUR CART IS EMPTY")?>
                                    </p>
                                    <p>
                                        <?= trans("lan.YOUR CART IS EMPTY_info")?>
                                    </p>
                                    <p class="return-to-shop">
                                        <a class="button wc-backward" href="<?= route("shop")?>">
                                            <?= trans("lan.Return to shop")?>
                                        </a>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    
    function remove_cart_web ( Request $request ){
        if(isset($request->id)){

            $id = $this->InsertInput("int", $request->id) ; 

            ModelsCart::where('id_cart', $id)->delete() ;


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


    function change_count_cart ( Request $request ){
        if(isset($request->id, $request->value, $request->product_id)){

            $id = $this->InsertInput("int", $request->id) ; 
            $product_id = $this->InsertInput("int", $request->product_id) ; 
            $value = $this->InsertInput("str", $request->value) ; 


            $product = product::where("product_id", $product_id )->first();
            
            if($product){
                if($product->quantity >= $value){
                    ModelsCart::where('id_cart', $id)->update([
                        "cart_quantity" => $value
                    ]) ;
                }else{
                    return response()->json([
                        'status_code' => 400,
                        'msg' => trans("lan.The requested quantity is not available")
                    ]);
                }
            }else{
                return response()->json([
                    'status_code' => 400,
                    'msg' => trans("lan.The requested quantity is not available")
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
    

    public function add_cart (Request $request){
        if(isset($request->product_id, $request->value)){
            $product_id = $this->InsertInput('int', $request->product_id) ; 
            $value = $this->InsertInput('int', $request->value) ; 
            $user = $this->get_info_user(); 

                
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


            
            
            $cart = ModelsCart::where("product_id", $product_id)->where("user", $user)->first();
            $product = product::where("product_id", $product_id)->first();
            
            if($product){
                if($product->quantity >= $value){
                    if($cart){
                        $cart_quantity =  $value ; 
                        ModelsCart::where('product_id', $product_id)->update([
                            "cart_quantity" => $cart_quantity
                        ]);
                        return response()->json([
                            'status_code' => 200,
                            "msg" => trans("lan.success")
                        ]);
                    }else{
                       
                        ModelsCart::create([
                            "cart_quantity" =>  $value,
                            "product_id" => $product_id,
                            "user" => $user
                        ]);
                       
                        return response()->json([
                            'status_code' => 200,
                            "msg" => trans("lan.success")
                        ]);
                    }
                }else{
                    return response()->json([
                        'status_code' => 400,
                        'msg' => trans("lan.The requested quantity is not available")
                    ]);
                }
            }else{
                return response()->json([
                    'status_code' => 400,
                    'msg' => trans("lan.product is not found")
                ]);
            }
         

        }else{
            $user = $this->get_info_admin(); 
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $user->email,
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


    public function shop_add_cart (Request $request){

        if(isset($request->product_id)){
            $product_id = $this->InsertInput('int', $request->product_id) ; 
            $user = $this->get_info_user(); 

                
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


            
            
            $cart = ModelsCart::where("product_id", $product_id)->where("user", $user)->first();
            $product = product::where("product_id", $product_id)->first();

            
            if($product){
                
                if($cart){
                    
                    $cart_quantity = $cart->cart_quantity + 1 ; 
                    if($product->quantity <= 1){
                        return response()->json([
                            'status_code' => 400,
                            'msg' => trans("lan.The requested quantity is not available")
                        ]);
                    }
                    if($product->quantity >= $cart->cart_quantity){
                        ModelsCart::where('product_id', $product_id)->update([
                            "cart_quantity" => $cart_quantity
                        ]);
                        return response()->json([
                            'status_code' => 200,
                            "msg" => trans("lan.success")
                        ]);
                    }else{
                        return response()->json([
                            'status_code' => 400,
                            'msg' => trans("lan.The requested quantity is not available")
                        ]);
                    }

                }else{


                    if($product->quantity >= 1){
                        ModelsCart::create([
                            "cart_quantity" =>  1,
                            "product_id" => $product_id,
                            "user" => $user
                        ]);                 
                       
                        return response()->json([
                            'status_code' => 200,
                            "msg" => trans("lan.success")
                        ]);
                    }else{
                        return response()->json([
                            'status_code' => 400,
                            'msg' => trans("lan.The requested quantity is not available")
                        ]);
                    }


                }
            }else{
                return response()->json([
                    'status_code' => 400,
                    'msg' => trans("lan.product is not found")
                ]);
            }
         

        }else{
            $user = $this->get_info_admin(); 
            $ip = $_SERVER['REMOTE_ADDR'] ;
            BlockUser::create([
                "email" => $user->email,
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
}
