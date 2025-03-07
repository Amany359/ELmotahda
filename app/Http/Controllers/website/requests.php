<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Traits\CleanInput;
use App\Http\Traits\GetuserInfo;
use App\Models\Contact_us;
use App\Models\country;
use App\Models\product;
use App\Models\shipping;
use App\Models\user_info;
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\DB;


class requests extends Controller
{

    use CleanInput ; 
    use GetuserInfo ; 


   

    public function product_shop (){
        $product = product::where("status", '1')->where("publish", '1')->get() ; 
        $aos = "fade-right" ;


        foreach($product as $pro){
            $images = explode("_", $pro->images);
           

                ?>
                    <div class="eltd-pli eltd-item-space eltd-woo-image-normal-width" data-aos="<?= $aos?>" style="padding: 0px 2px;">
                        <div class="eltd-pli-inner">
                            <div class="eltd-pli-image" style="overflow: hidden;">
                                <a itemprop="url" href="<?= route('product', ['id' => $pro->product_id])?>">
                                    <?php
                                    if($pro->quantity <= 0 ){
                                        echo "<span  class='eltd-pli-out-of-stock' style='color: red;'>Out of Stock</span>";
                                    }elseif($pro->discount >= 1 && $pro->discount != ""){
                                     ?>
                                        <span  class="eltd-pli-onsale" style="color:#c8ff0b"><?= $pro->discount?></span>
                                     <?php   
                                    }
                                    ?>
                                    <img width="1100" height="1098" src="<?= url("images/product/$images[0]")?>" style="height: 562px; width:562px; object-fit:contain" class="attachment-full size-full wp-post-image" alt="c" decoding="async" 
                                    srcset="<?= url("images/product/$images[0]")?> 1100w, 
                                    <?= url("images/product/$images[0]")?> 150w,
                                    <?= url("images/product/$images[0]")?> 300w, 
                                    <?= url("images/product/$images[0]")?> 768w, 
                                    <?= url("images/product/$images[0]")?> 1024w, 
                                    <?= url("images/product/$images[0]")?> 550w, 
                                    <?= url("images/product/$images[0]")?> 606w, 
                                    <?= url("images/product/$images[0]")?> 100w" sizes="(max-width: 1100px) 100vw, 1100px" loading="eager" /> </a>
                            </div>
                            <div class="eltd-pli-overlay" style="position: static">
                                    <a href="<?= route('product', ['id' => $pro->product_id])?>" class="" >
                                        <div class="eltd-pli-add-to-cart eltd-default-skin">
                                            <div class="eltd-yith-wcqv-holder" >
                                                <span style="color:white;fill:white" class="yith-wcqv-button-icon ion-ios-eye"></span>
                                                <span style="color: white;">
                                                    <?= trans("lan.View Details")?>
                                                </span>
                                            </div>
                                        </div>
                                    </a>

                                    <?php 

                                        if($pro->quantity >= 1 ){
                                            ?>
                                                <div class=" eltd-pli-quicklook" onclick="shop_add_cart('<?= $pro->product_id?>')">

                                                    <a rel="nofollow" style="cursor: pointer;"   data-quantity="1" data-product_id="870" data-product_sku="28" class="button add_to_cart_button eltd-button">
                                                        <span class="eltd-add-to-cart-button-icon ion-ios-cart"></span>
                                                        <?= trans("lan.add cart")?>
                                                    </a>
                                                </div>
                                                
                                                <?php
                                        }else{
                                            ?>
                                            <div class="eltd-pli-quicklook">
                                            <i class="eltd-icon-ion-icon ion-android-stopwatch eltd-icon-element" style="    font-size: 19px;color: #c8ff0b;"></i>
                                                <a rel="nofollow" style="cursor: pointer;"   data-quantity="1" data-product_id="870" data-product_sku="28" class="button add_to_cart_button eltd-button">
                                                    <?= trans("lan.Alert me")?>
                                                </a>
                                            </div>
                                            <?php
                                        }

                                    ?>
                               
                                    


                            </div>
                        </div>
                        <div class="eltd-pli-text-wrapper">
                            <div class="eltd-pli-text-wrapper-info-top-holder clearfix">
                                <div class="eltd-pli-text-wrapper-info-top-holder-left">
                                    <h3 itemprop="name" class="entry-title eltd-pli-title">
                                        <a itemprop="url" style="font-size: 21px;font-weight: bold; color: #000000;" href="<?= route('product', ['id' => $pro->product_id])?>"><?= $pro->product_name?></a>
                                    </h3>
                                </div>
                                <div class="eltd-pli-text-wrapper-info-top-holder-right">
                                   
                                    <div class="eltd-pli-price">



                                        <?php 
                                            if($pro->discount >= 1 ){
                                                ?>

                                                    <del aria-hidden="true" style="color: red; " >
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>
                                                                <span style="color: black;" class="woocommerce-Price-currencySymbol">
                                                                    <?php
                                                                        if(strpos($pro->discount, "%") !== false){
                                                                            $discount_number = str_ireplace("%", "", $pro->discount);
                                                                            $per = (100 - $discount_number) / 100 ; 
                                                                            echo "EGP" . $pro->product_price / $per ; 
                                                                        }else{
                                                                            echo "EGP" . $pro->discount + $pro->product_price ; 
                                                                        }
                                                                    ?></span>
                                                            </bdi>
                                                        </span>
                                                    </del>
                                                <?php
                                            }
                                        ?>




                                        <ins>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">EGP<?= $pro->product_price?></span>
                                            </span>
                                        </ins>

                                        
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="eltd-pli-text-wrapper-info-bottom-holder clearfix">
                                <div class="eltd-pli-text-wrapper-info-bottom-holder-left">
                                    <p class="eltd-pli-category"><a href="<?= route('product', ['id' => $pro->product_id])?>" rel="tag"><?= trans("lan.Sport")?></a></p>
                                </div>
                                <div class="eltd-pli-text-wrapper-info-bottom-holder-right">
                                    <div class="eltd-pli-rating-holder">
                                        <div class="eltd-pli-rating" title="Rated %s out of 5">
                                            <span style="width: 80%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                <?php

                 
            if($aos == "fade-right"){
                $aos = "fade-left" ;
            }else{
                $aos = "fade-right" ;
            }
                
        }
    }


    public function related_products (){



        $product = product::where("status", '1')->where("publish", '1')->take(4)->get() ; 


        foreach($product as $pro){
            $images = explode("_", $pro->images);
                ?>
                <a href="<?= route("product", ['id' => $pro->product_id])?>" style="cursor: pointer;">

                    <li class="product type-product post-879 status-publish instock product_cat-sport product_tag-equipment product_tag-sport has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="eltd-pl-inner">
                            <div class="eltd-pl-image">
                                <img width="300" height="300" style="    height: 315px;object-fit: contain;" src="<?= url("images/product/$images[0]")?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="d" 
                                decoding="async" srcset="<?= url("images/product/$images[0]")?> 300w, <?= url("images/product/$images[0]")?> 150w, <?= url("images/product/$images[0]")?> 550w, <?= url("images/product/$images[0]")?> 100w" 
                                sizes="(max-width: 300px) 100vw, 300px" loading="eager" />
                                <?php 
                                if($pro->quantity <= 0){
                                    ?>
                                        <span class="eltd-out-of-stock" style="color: red;"><?= trans("lan.OUT OF STOCK")?></span>
                                    
                                    <?php
                                }elseif($pro->discount >= 1 && $pro->discount != ""){
                                    ?>
                                        <span  class="eltd-out-of-stock"><?= $pro->discount?></span>

                                    <?php
                                }?>

                                <div class="eltd-pl-text" style="position: static">


                               
                                    <?php 
                                        if($pro->quantity >= 1 ){
                                            ?>
                                                <div class="eltd-pl-text-outer" style="cursor: pointer;" onclick="shop_add_cart('<?= $pro->product_id?>')">
                                                    <div class="eltd-pl-text-inner">
                                                        <div class="eltd-pl-add-to-cart">
                                                            <a rel="nofollow"  data-quantity="1" data-product_id="879" data-product_sku="32" class="button add_to_cart_button ajax_add_to_cart eltd-button">
                                                                <span class="eltd-add-to-cart-button-icon ion-ios-cart"></span><?= trans("lan.add cart")?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php
                                        }else{
                                            ?>
                                            <div class="eltd-pl-text-outer" style="cursor: pointer;" >
                                                    <div class="eltd-pl-text-inner">
                                                        <div class="eltd-pl-add-to-cart">
                                                            <a rel="nofollow"  data-quantity="1" data-product_id="879" data-product_sku="32" class="button add_to_cart_button ajax_add_to_cart eltd-button">
                                                            <i class="eltd-icon-ion-icon ion-android-stopwatch eltd-icon-element" style="    font-size: 19px;color: #c8ff0b;"></i>
                                                            <?= trans("lan.Alert me")?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    
                                    
                                    ?>





                                    
                                </div>
                            </div>
                            <a href="<?= route("product", ['id' => $pro->product_id])?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                        </div>
                        <div class="eltd-pl-text-wrapper">
                            <div class="eltd-pl-text-wrapper-info-top-holder clearfix">
                                <h4 class="eltd-product-list-title"><a href="<?= route("product", ['id' => $pro->product_id])?>"><?= $pro->product_name?></a></h4>
                                <span class="price">

                                    <?php 
                                    if($pro->discount >= 1 ){
                                        ?>

                                            <del aria-hidden="true">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">
                                                            EGP
                                                        </span>
                                                        <?php
                                                            if(strpos($pro->discount, "%") !== false){
                                                                $discount = str_ireplace("%", "", $pro->discount) ;
                                                                $per = (100 - $discount) / 100 ; 
                                                                echo $pro->product_price / $per ; 
                                                            }else{
                                                                echo $pro->discount + $pro->product_price ; 
                                                            }
                                                        ?>
                                                    </bdi>
                                                </span>
                                            </del>
                                        <?php
                                    }
                                    ?>
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">
                                                    EGP
                                                </span>
                                                <?= $pro->product_price?>
                                            </bdi>
                                        </span>
                                    </ins>



                                </span>
                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-879  wishlist-fragment on-first-load" data-fragment-ref="879" >
                                    <div class="yith-wcwl-add-button">
                                        <a href="" class="add_to_wishlist single_add_to_wishlist"  data-title="<?= trans("lan.Wishlist")?>" rel="nofollow">
                                            <span><?= trans("lan.Wishlist")?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="eltd-pl-text-wrapper-info-bottom-holder clearfix">
                                <div class="eltd-pl-categories"><a href="{{url('website/product-category/sport/index.html')}}" rel="tag"><?= trans("lan.Sport")?></a></div>
                                <div class="eltd-pl-rating-holder">
                                    <div class="star-rating" role="img" aria-label="Rated 3.00 out of 5"><span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span></div>
                                </div>
                            </div>
                        </div><a href="#" class="button yith-wcqv-button" data-product_id="879">Quick View</a>
                    </li>
                </a>
                                        
                <?php
            


                
        }
    }


    public function subtotal_checkout (Request $request){



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
        // $images = explode("_", $pro->images);
        $sub_total  = 0 ; 
        $total = 0  ; 


        if(isset($request->country)){

            $country = $this->InsertInput("str", $request->country);
            $shipping = shipping::where("city", $country)->first();

            if($shipping){

                $total = 0 ; 
        

                ?>     
                    <section class="_1fragem2i _1fragempf">
                       <div class="_1ip0g651 _1fragempf _1fragem4q _1fragem73 _1fragem3c">
                          <div class="_1ip0g651 _1fragempf _1fragem4q _1fragem73 _1fragem3c">
                             <section class="_1fragem2i _1fragempf">
                                <div class="_1fragemwh">
                                   <h4 id="ResourceList0" class="n8k95w1 _1fragempf n8k95w5">Shopping cart</h4>
                                </div>
                                <div role="table" aria-labelledby="ResourceList0" class="_6zbcq55 _1fragem2s _1fragemrj _6zbcq56">
                                   <div role="row" class="_6zbcq51d _1fragem2s _1fragemq8 _1fragemsd _6zbcq51b">
                                      <div role="columnheader" class="_6zbcq51e">
                                         <div class="_1fragemwh">Product image</div>
                                      </div>
                                      <div role="columnheader" class="_6zbcq51e">
                                         <div class="_1fragemwh">Description</div>
                                      </div>
                                      <div role="columnheader" class="_6zbcq51e">
                                         <div class="_1fragemwh">Quantity</div>
                                      </div>
                                      <div role="columnheader" class="_6zbcq51e">
                                         <div class="_1fragemwh">Price</div>
                                      </div>
                                   </div>

                                    <?php 
                                        $total = 0 ; 

                                        foreach($carts as $cart){
                                            $images = explode("_", $cart->images);
                            
                                            $sub_total = $cart->product_price * $cart->cart_quantity ; 
                                            $total += ($sub_total ) ; 

                                            ?>

                                                <div role="row" class="_6zbcq524 _1fragem2s _1fragem2d _6zbcq52b">
                                                    <div role="cell" class="_6zbcq53s _1fragem2s _1fragemrj _1fragem8w">
                                                        <div class="_1m6j2n32 _1fragempf _1fragemxg _1m6j2n33" style="--_1m6j2n30: 1;">
                                                            <div class="_1h3po421 _1h3po423 _1fragempf" style="--_1h3po420: 1;">
                                                                <picture>
                                                                <source media="(min-width: 0px)"
                                                                    srcset="<?= url("images/product/$images[0]")?>?v=1711624905 1x, <?= url("images/product/$images[0]")?>?v=1711624905 2x, <?= url("images/product/$images[0]")?>?v=1711624905 4x">
                                                                <img
                                                                    src="<?= url("images/product/$images[0]")?>?v=1711624905"
                                                                    style="    object-fit: cover;"
                                                                    alt="Energy Gel"
                                                                    class="_1h3po424 _1fragem2i _1fragemog _1fragemsu _1fragemsz _1fragemt9 _1fragemt4 _1fragemaf _1fragem9v _1fragemaz _1fragem9b _1fragemcs _1fragemc3 _1fragemdh _1fragembe _1fragemov">
                                                                </picture>
                                                            </div>
                                                            <div class="_1m6j2n3e _1fragemp5 _1fragemub _1fragemuu">
                                                                <div
                                                                class="_99ss3s1 _1fragem37 _1fragemq8 _1fragem8h _99ss3s7 _99ss3s4 _1fragemlj _1fragemj6 _1fragemrp _99ss3sc">
                                                                <div><?= $cart->cart_quantity?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="cell" class="_6zbcq53s _1fragem2s _1fragemrj _1fragem8h _1fragemrm">
                                                        <div class="_1fragem2i _1fragempf dDm6x">
                                                            <p class="_1x52f9s1 _1fragempf _1x52f9sv _1fragemrq"><?= $cart->product_name?></p>
                                                            <div class="_1ip0g651 _1fragempf _1fragem5z _1fragem8c _1fragem3c">
                                                                <!-- <p class="_1x52f9s1 _1fragempf _1x52f9st _1fragemrp _1x52f9sp">Variety Pack / 6 Pack</p> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="cell" class="_6zbcq53s _1fragem2s _1fragemrj _1fragem8h _6zbcq53q">
                                                        <div class="_1fragemwh"><span class="_19gi7yt0 _19gi7ytt _1fragemrq">1<span aria-hidden="true"
                                                            class="_19gi7yt0 _19gi7ytt _1fragemrq"> x</span></span></div>
                                                    </div>
                                                    <div role="cell" class="_6zbcq53s _1fragem2s _1fragemrj _1fragem8w">
                                                        <div class="_1fragemrj _1fragemqa _1fragem2s _1fragem8h _1fragempf _16s97g741 Byb5s"
                                                            style="--_16s97g73w: 6.4rem;    direction: ltr; "><span translate="no"
                                                            class="_19gi7yt0 _19gi7ytt _1fragemrq notranslate"><?= $sub_total?> EGP</span></div>
                                                    </div>
                                                </div>

                                            <?php
                                        }
                                    ?>

                                   

                                </div>
                             </section>
                          </div>
                          <div class="_1ip0g651 _1fragempf _1fragem4q _1fragem73 _1fragem3c">
                             <section class="_1fragem2i _1fragempf">
                                <div class="_1ip0g651 _1fragempf _1fragem4g _1fragem6t _1fragem3c">
                                   <form action="" method="POST" novalidate="" id="Form0" class="_1fragem2n">
                                      <div class="_1fragempf">
                                         <div
                                            class="_1fragempf _1fragem3c _1fragem3w _1fragem6t _1fragempz _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
                                            style="--_16s97g7a: 1fr; --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr) minmax(auto, max-content); --_16s97g71o: minmax(auto, max-content);">
                                            <div
                                               class="_7ozb2u2 _1fragem3w _1fragem69 _1fragempf _1fragem3c _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemr7">
                                               <div class="_1fragempf">
                                                  <label id="ReductionsInput0-label" for="ReductionsInput0"
                                                     class="cektnc3 _1fragemp5 _1fragemwg _1fragemvz _1fragemx7 _1fragemwu _1fragemwp _1fragemx3 _1fragemx4"><span
                                                     class="cektnc9"><span class="rermvf1 _1fragemnr _1fragemo1 _1fragem2i"><?= trans("lan.Coupon code")?></span></span></label>
                                                  <div
                                                     class="_7ozb2u6 _1fragempf _1fragem3c _1fragemrh _1fragemwu _1fragemwp _1fragemx3 _1fragemx6 _1fragemr7 _1fragemxc _7ozb2ul _7ozb2uh">
                                                     <input id="ReductionsInput0" name="reductions" placeholder="<?= trans("lan.Coupon code")?>" type="text"
                                                        aria-labelledby="ReductionsInput0-label"
                                                        class="_7ozb2uq _1fragempf _1fragemx7 _1fragemsd _1fragemwf _7ozb2ur _7ozb2u11 _7ozb2u1h">
                                                  </div>
                                               </div>
                                            </div>
                                            <button type="submit" disabled="" aria-label="Apply Discount Code"
                                               class="_1m2hr9ge _1fragemx4 _1fragempf _1fragemrg _1fragem32 _1fragemwk _1fragemwv _1fragemwz _1fragemwp _1m2hr9g16 _1fragemsp _1fragemsn _1fragemsr _1fragemsl _1fragemtl _1fragemth _1fragemtp _1fragemtd _1fragemcs _1fragemc3 _1fragemdh _1fragembe _1fragemwp _1m2hr9g1q _1m2hr9g1o _1m2hr9g10 _1m2hr9gx _1m2hr9g29 _1fragemwg _1fragemwl _1m2hr9g25"><span
                                               class="_1m2hr9gr _1fragemwg _1fragemwy _1fragemwq _1fragemwz _1fragem2s _1fragem8h _1fragemwi"><?= trans("lan.Apply coupon")?></span></button>
                                         </div>
                                      </div>
                                      <div class="_1fragemwh _1fragem2i _1fragempf"><button type="submit" tabindex="-1"
                                         aria-hidden="true">Submit</button></div>
                                   </form>
                                </div>
                             </section>
                          </div>
                          <section class="_1fragem2i _1fragempf">
                             <div role="table" aria-labelledby="MoneyLine-Heading0" class="nfgb6p0">
                                <div role="row" class="_1qy6ue61 _1fragem3c _1qy6ue65">
                                   <div role="rowheader" class="_1qy6ue67"><span class="_19gi7yt0 _19gi7ytt _1fragemrq"><?= trans("lan.Subtotal")?></span></div>
                                   <div role="cell" class="_1qy6ue68" style="direction: ltr;"><span translate="no"
                                      class="_19gi7yt0 _19gi7ytt _1fragemrq notranslate"><?= $total?> EGP</span></div>
                                </div>
                                <div role="row" class="_1qy6ue61 _1fragem3c _1qy6ue65">
                                   <div role="rowheader" class="_1qy6ue67">
                                      <div class="_1ip0g651 _1fragempf _1fragem3w _1fragem69 _1fragem3c">
                                         <div class="_1fragempf _1fragem2s _1fragem8w">
                                            <div class="_5uqybw2 _1fragem2s _1fragemol _1fragem3w _1fragem69 _1fragemq4 _1fragemq8 _1fragem8w">
                                               <span class="_19gi7yt0 _19gi7ytt _1fragemrq"><?= trans("lan.Shipping")?></span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div role="cell" style="direction: ltr;" class="_1qy6ue68"><span translate="no"
                                      class="_19gi7yt0 _19gi7ytt _1fragemrq _19gi7ytn notranslate"><?= $shipping->price?> EGP</span></div>
                                </div>
                                <div role="row" class="_1x41w3p1 _1fragem3c _1fragemq8 _1x41w3p5">
                                   <div role="rowheader" class="_1x41w3p7"><span class="_19gi7yt0 _19gi7ytx _1fragemrs _19gi7yt2"><?= trans("lan.total")?></span>
                                   </div>
                                   <div role="cell" class="_1x41w3p8">
                                      <div class="_1fragempf _1fragem2s _1fragem8w">
                                         <div style="direction: ltr;" class="_5uqybw2 _1fragem2s _1fragemol _1fragem46 _1fragem6j _1fragemq7 _1fragem8w"><strong
                                            translate="no" class="_19gi7yt0 _19gi7ytz _1fragemrt _19gi7yt2 notranslate"><?= $total + $shipping->price?> EGP</strong>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                              
                             </div>
                          </section>
                       </div>
                    </section>
                <?php
                
            }else{
                return response()->json([
                    "status_code" => 400
                ]);
            }




        }else{

        
        
            
                ?>     
                    <section class="_1fragem2i _1fragempf">
                       <div class="_1ip0g651 _1fragempf _1fragem4q _1fragem73 _1fragem3c">
                          <div class="_1ip0g651 _1fragempf _1fragem4q _1fragem73 _1fragem3c">
                             <section class="_1fragem2i _1fragempf">
                                <div class="_1fragemwh">
                                   <h4 id="ResourceList0" class="n8k95w1 _1fragempf n8k95w5">Shopping cart</h4>
                                </div>
                                <div role="table" aria-labelledby="ResourceList0" class="_6zbcq55 _1fragem2s _1fragemrj _6zbcq56">
                                   <div role="row" class="_6zbcq51d _1fragem2s _1fragemq8 _1fragemsd _6zbcq51b">
                                      <div role="columnheader" class="_6zbcq51e">
                                         <div class="_1fragemwh">Product image</div>
                                      </div>
                                      <div role="columnheader" class="_6zbcq51e">
                                         <div class="_1fragemwh">Description</div>
                                      </div>
                                      <div role="columnheader" class="_6zbcq51e">
                                         <div class="_1fragemwh">Quantity</div>
                                      </div>
                                      <div role="columnheader" class="_6zbcq51e">
                                         <div class="_1fragemwh">Price</div>
                                      </div>
                                   </div>

                                    <?php 
                                        $total = 0 ; 

                                        foreach($carts as $cart){
                                            $images = explode("_", $cart->images);
                            
                                            $sub_total = $cart->product_price * $cart->cart_quantity ; 
                                            $total += ($sub_total) ; 
                    
                                            ?>

                                                <div role="row" class="_6zbcq524 _1fragem2s _1fragem2d _6zbcq52b">
                                                    <div role="cell" class="_6zbcq53s _1fragem2s _1fragemrj _1fragem8w">
                                                        <div class="_1m6j2n32 _1fragempf _1fragemxg _1m6j2n33" style="--_1m6j2n30: 1;">
                                                            <div class="_1h3po421 _1h3po423 _1fragempf" style="--_1h3po420: 1;">
                                                                <picture>
                                                                <source media="(min-width: 0px)"
                                                                    srcset="<?= url("images/product/$images[0]")?>?v=1711624905 1x, <?= url("images/product/$images[0]")?>?v=1711624905 2x, <?= url("images/product/$images[0]")?>?v=1711624905 4x">
                                                                <img
                                                                    src="<?= url("images/product/$images[0]")?>?v=1711624905"
                                                                    style="    object-fit: cover;"
                                                                    alt="Energy Gel"
                                                                    class="_1h3po424 _1fragem2i _1fragemog _1fragemsu _1fragemsz _1fragemt9 _1fragemt4 _1fragemaf _1fragem9v _1fragemaz _1fragem9b _1fragemcs _1fragemc3 _1fragemdh _1fragembe _1fragemov">
                                                                </picture>
                                                            </div>
                                                            <div class="_1m6j2n3e _1fragemp5 _1fragemub _1fragemuu">
                                                                <div
                                                                class="_99ss3s1 _1fragem37 _1fragemq8 _1fragem8h _99ss3s7 _99ss3s4 _1fragemlj _1fragemj6 _1fragemrp _99ss3sc">
                                                                <div><?= $cart->cart_quantity?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="cell" class="_6zbcq53s _1fragem2s _1fragemrj _1fragem8h _1fragemrm">
                                                        <div class="_1fragem2i _1fragempf dDm6x">
                                                            <p class="_1x52f9s1 _1fragempf _1x52f9sv _1fragemrq"><?= $cart->product_name?></p>
                                                            <div class="_1ip0g651 _1fragempf _1fragem5z _1fragem8c _1fragem3c">
                                                                <!-- <p class="_1x52f9s1 _1fragempf _1x52f9st _1fragemrp _1x52f9sp">Variety Pack / 6 Pack</p> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div role="cell" class="_6zbcq53s _1fragem2s _1fragemrj _1fragem8h _6zbcq53q">
                                                        <div class="_1fragemwh"><span class="_19gi7yt0 _19gi7ytt _1fragemrq">1<span aria-hidden="true"
                                                            class="_19gi7yt0 _19gi7ytt _1fragemrq"> x</span></span></div>
                                                    </div>
                                                    <div role="cell" class="_6zbcq53s _1fragem2s _1fragemrj _1fragem8w">
                                                        <div class="_1fragemrj _1fragemqa _1fragem2s _1fragem8h _1fragempf _16s97g741 Byb5s"
                                                            style="--_16s97g73w: 6.4rem;    direction: ltr; "><span translate="no"
                                                            class="_19gi7yt0 _19gi7ytt _1fragemrq notranslate"><?= $sub_total?> EGP</span></div>
                                                    </div>
                                                </div>

                                            <?php
                                        }
                                    ?>

                                   

                                </div>
                             </section>
                          </div>
                          <div class="_1ip0g651 _1fragempf _1fragem4q _1fragem73 _1fragem3c">
                             <section class="_1fragem2i _1fragempf">
                                <div class="_1ip0g651 _1fragempf _1fragem4g _1fragem6t _1fragem3c">
                                   <form action="" method="POST" novalidate="" id="Form0" class="_1fragem2n">
                                      <div class="_1fragempf">
                                         <div
                                            class="_1fragempf _1fragem3c _1fragem3w _1fragem6t _1fragempz _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
                                            style="--_16s97g7a: 1fr; --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr) minmax(auto, max-content); --_16s97g71o: minmax(auto, max-content);">
                                            <div
                                               class="_7ozb2u2 _1fragem3w _1fragem69 _1fragempf _1fragem3c _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemr7">
                                               <div class="_1fragempf">
                                                  <label id="ReductionsInput0-label" for="ReductionsInput0"
                                                     class="cektnc3 _1fragemp5 _1fragemwg _1fragemvz _1fragemx7 _1fragemwu _1fragemwp _1fragemx3 _1fragemx4"><span
                                                     class="cektnc9"><span class="rermvf1 _1fragemnr _1fragemo1 _1fragem2i"><?= trans("lan.Coupon code")?></span></span></label>
                                                  <div
                                                     class="_7ozb2u6 _1fragempf _1fragem3c _1fragemrh _1fragemwu _1fragemwp _1fragemx3 _1fragemx6 _1fragemr7 _1fragemxc _7ozb2ul _7ozb2uh">
                                                     <input id="ReductionsInput0" name="reductions" placeholder="<?= trans("lan.Coupon code")?>" type="text"
                                                        aria-labelledby="ReductionsInput0-label"
                                                        class="_7ozb2uq _1fragempf _1fragemx7 _1fragemsd _1fragemwf _7ozb2ur _7ozb2u11 _7ozb2u1h">
                                                  </div>
                                               </div>
                                            </div>
                                            <button type="submit" disabled="" aria-label="Apply Discount Code"
                                               class="_1m2hr9ge _1fragemx4 _1fragempf _1fragemrg _1fragem32 _1fragemwk _1fragemwv _1fragemwz _1fragemwp _1m2hr9g16 _1fragemsp _1fragemsn _1fragemsr _1fragemsl _1fragemtl _1fragemth _1fragemtp _1fragemtd _1fragemcs _1fragemc3 _1fragemdh _1fragembe _1fragemwp _1m2hr9g1q _1m2hr9g1o _1m2hr9g10 _1m2hr9gx _1m2hr9g29 _1fragemwg _1fragemwl _1m2hr9g25"><span
                                               class="_1m2hr9gr _1fragemwg _1fragemwy _1fragemwq _1fragemwz _1fragem2s _1fragem8h _1fragemwi"><?= trans("lan.Apply coupon")?></span></button>
                                         </div>
                                      </div>
                                     
                                   </form>
                                </div>
                             </section>
                          </div>
                          <section class="_1fragem2i _1fragempf">
                             <div role="table" aria-labelledby="MoneyLine-Heading0" class="nfgb6p0">
                                <div role="row" class="_1qy6ue61 _1fragem3c _1qy6ue65">
                                   <div role="rowheader" class="_1qy6ue67">
                                      <div class="_1ip0g651 _1fragempf _1fragem3w _1fragem69 _1fragem3c">
                                         <div class="_1fragempf _1fragem2s _1fragem8w">
                                            <div class="_5uqybw2 _1fragem2s _1fragemol _1fragem3w _1fragem69 _1fragemq4 _1fragemq8 _1fragem8w">
                                               <span class="_19gi7yt0 _19gi7ytt _1fragemrq"><?= trans("lan.Shipping")?></span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div role="cell" style="direction: ltr;" class="_1qy6ue68"><span translate="no"
                                      class="_19gi7yt0 _19gi7ytt _1fragemrq _19gi7ytn notranslate"> </span></div>
                                </div>
                                <div role="row" class="_1x41w3p1 _1fragem3c _1fragemq8 _1x41w3p5">
                                   <div role="rowheader" class="_1x41w3p7"><span class="_19gi7yt0 _19gi7ytx _1fragemrs _19gi7yt2"><?= trans("lan.total")?></span>
                                   </div>
                                   <div role="cell" class="_1x41w3p8">
                                      <div class="_1fragempf _1fragem2s _1fragem8w">
                                         <div class="_5uqybw2 _1fragem2s _1fragemol _1fragem46 _1fragem6j _1fragemq7 _1fragem8w" style="direction: ltr;">
                                            <strong
                                            translate="no" class="_19gi7yt0 _19gi7ytz _1fragemrt _19gi7yt2 notranslate"><?= $total?> EGP</strong>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                            
                             </div>
                          </section>
                       </div>
                    </section>
                <?php

        }



    }


    public function shipping_method (Request $request){


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

  
        if(isset($request->country)){

            $country = $this->InsertInput("str", $request->country);
            $shipping = shipping::where("city", $country)->first();

            if($shipping){

          

                ?>
              
          
                    <div class="yyi4nyc yyi4nye yyi4nyf">
                       <div class="yyi4nyh yyi4nyj yyi4nyl yyi4nyq _1fragemr7 _1fragemxc">
                          <div
                             class="yyi4nyw _1fragempf _1fragem3c _1fragem6o _1fragemrg yyi4ny10 yyi4ny11 _1fragemr8 _1fragemxc yyi4ny1i yyi4nyy">
                             <div>
                                <h4 class="yyi4ny18">
                                   <div class="_1fragem2i _1fragempf Is9PW">
                                      <p
                                         class="_1x52f9s1 _1fragempf _1x52f9sv _1fragemrq">
                                         Zone <?= $shipping->type?>
                                      </p>
                                   </div>
                                </h4>
                                <div></div>
                             </div>
                             <div><span translate="no"
                                class="_19gi7yt0 _19gi7ytt _1fragemrq _19gi7yt2 notranslate"><?= $shipping->price?> EGP</span>
                             </div>
                          </div>
                       </div>
                    </div>

                 
                <?php
                
            }else{
                return response()->json([
                    "status_code" => 400
                ]);
            }




        }else{
          
            ?>
                <tr style="border: none;" class="order-shipping">
                    <td colspan="2">
                        <div class="input-group" style=" margin: 4px 0px; display: flex; justify-content: space-between; align-items: center; padding: 12px 20px;    border: 1px solid #00000054;border-radius: 6px;">
                            <span class="title">Zone </span>
                            <label for="radio1">EGP</label>
                        </div>
                    
                    </td>
                </tr>

            <?php

        }



    }

  
    public function details_form_old(){

        $user = $this->get_info_user() ;
        $shippings = shipping::all();
        $countrys = country::all();


        if($user !== false){


            $user_info = user_info::where('user', $user->email)->first();


            ?>   

            <h4 class="title mb--40"><?= trans('lan.Billing details')?></h4>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><?= trans('lan.Type Full Name')?> <span>*</span></label>
                            <input type="text" required class="check_input2" required name="name" value="<?= $user->username?>" id="first-name" >
                        </div>
                    </div>
                </div>

                <div class="form-group">

                    <label><?= trans('lan.Street Address')?> <span>*</span></label>
                    <input type="text" required name="address1" id="address1" value="<?=  $user_info->street?>" class="mb--15 check_input2" required placeholder="<?= trans('lan.House number and street name')?>">
                    <input type="text" required name="address2" id="address2" value="<?=  $user_info->apartment?>" placeholder="<?= trans('lan.Apartment_suite')?>">

                </div>

                <div class="form-group">

                    <label><?= trans('lan.Country')?></label>
                    
                    <select required name="country" id="country" class="state_select check_input2" autocomplete="address-level1" data-placeholder="Select an option…" data-input-classes="" data-label="State / County" tabindex="-1" aria-hidden="true">
                        <option value="">Select an country...</option>

                        <?php 
                            foreach($countrys as $country){
                                ?>
                                    <option value="<?= $country->country?>"><?= $country->country?></option>
                                <?php
                            }
                        ?>
                    </select>


                </div>


                <div class="form-group">
                    <label><?= trans('lan.City')?></label>


                    <select required name="town" onclick="country_price(this)" onchange="country_price(this)" id="town" class="state_select check_input2" autocomplete="address-level1" data-placeholder="Select an option…" data-input-classes="" data-label="State / County" tabindex="-1" aria-hidden="true">

                        <option value="">Select an city...</option>


                        <?php 
                            $ip = $_SERVER['REMOTE_ADDR'] ;
                            $city = '';
                            try {
                                $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                                $city =  $details->city;
                                //code...
                            } catch (\Throwable $th) {
                                //throw $th;
                            }

                            foreach($shippings as $shipping){
                                if($city == $shipping->city){
                                    ?>  
                                        <option selected value="<?= $shipping->city?>"><?= $shipping->city?></option>
                                    <?php
                                }else{

                                    ?>  
                                        <option value="<?= $shipping->city?>"><?= $shipping->city?></option>
                                    <?php
                                }
                            }
                        ?>
 
                    </select>
                </div>


                <div class="form-group">
                    <label><?= trans('lan.Area')?> <span>*</span></label>
                    <input required name="area" required class="check_input2" type="text" value="<?= $user_info->area?>" placeholder="Zahraa al Maadi - Agouza …" id="area">
                </div>


                <div class="form-group">
                    <label><?= trans('lan.phone')?> <span>*</span></label>
                    <input required name="phone" required class="check_input2" value="<?=  $user->phone?>" type="tel" id="phone">
                </div>


                <div class="form-group">
                    <label><?= trans('lan.Email Address')?> <span>*</span></label>
                    <input required name="email2" required class="check_input2" type="email" value="<?=  $user->email?>" id="email">
                </div>

 


            
            <?php
        }else{
            ?>
                
                <h4 class="title mb--40"><?= trans('lan.Billing details')?></h4>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><?= trans('lan.Type Full Name')?> <span>*</span></label>
                            <input required type="text" required class="check_input2" name="name" id="first-name" >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label><?= trans('lan.Street Address')?> <span>*</span></label>
                    <input required type="text" name="address1" id="address1" required class="mb--15 check_input2" placeholder="<?= trans('lan.House number and street name')?>">
                    <input type="text" name="address2" id="address2" placeholder="<?= trans('lan.Apartment_suite')?> ">
                </div>

                <div class="form-group">

                    <label><?= trans('lan.Country')?></label>
                    
                    <select name="country" id="country" class="state_select check_input2" required autocomplete="address-level1" data-placeholder="Select an option…" data-input-classes="" data-label="State / County" tabindex="-1" aria-hidden="true">
                        <option value="">Select an country...</option>

                        <?php 
                            
 
                             foreach($countrys as $country){
                                ?>
                                    <option value="<?= $country->country?>"><?= $country->country?></option>
                                <?php
                             }
                        ?>
                    </select>


                </div>

              

                <div class="form-group">
                    <label><?= trans('lan.City')?> <span>*</span></label>
                    <select name="town" onchange="country_price(this)" id="town" class="state_select check_input2" required autocomplete="address-level1" data-placeholder="Select an option…" data-input-classes="" data-label="State / County" tabindex="-1" aria-hidden="true">
                        <option value="">Select an city...</option>

                        <?php 
                            $ip = $_SERVER['REMOTE_ADDR'] ;
                            $city = '';
                            try {
                                $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                                $city =  $details->city;
                                //code...
                            } catch (\Throwable $th) {
                                //throw $th;
                            }
                            foreach($shippings as $shipping){
                                if($city == $shipping->city){
                                    ?>  
                                        <option selected value="<?= $shipping->city?>"><?= $shipping->city?></option>
                                    <?php
                                }else{

                                    ?>  
                                        <option value="<?= $shipping->city?>"><?= $shipping->city?></option>
                                    <?php
                                }
                             
                            }
                        ?>
                    </select>
                
                    <!-- 
                    <select name="town" onchange="country_price(this)" id="town" class="state_select check_input2" autocomplete="address-level1"  data-placeholder="Select an option…" data-input-classes="" data-label="State / County" tabindex="-1" aria-hidden="true">
                        <option value="">Select an city...</option>
                        <option value="Alexandria"><?php // trans("lan.Alexandria") ?></option>
                        <option value="Aswan"><?php // trans("lan.Aswan") ?></option>
                        <option value="Asyut"><?php // trans("lan.Asyut") ?></option>
                        <option value="Red Sea"><?php // trans("lan.Red Sea") ?></option>
                        <option value="Beheira"><?php // trans("lan.Beheira")?></option>
                        <option value="Beni Suef"><?php // trans("lan.Beni Suef")?></option>
                        <option value="Cairo"><?php // trans("lan.Cairo")?></option>
                        <option value="Dakahlia"><?php // trans("lan.Dakahlia")?></option>
                        <option value="Damietta"><?php // trans("lan.Damietta")?></option>
                        <option value="Faiyum"><?php // trans("lan.Faiyum")?></option>
                        <option value="Gharbia"><?php // trans("lan.Gharbia")?></option>
                        <option value="Giza"><?php // trans("lan.Giza")?></option>
                        <option value="Ismailia"><?php // trans("lan.Ismailia")?></option>
                        <option value="South Sinai"><?php // trans("lan.South Sinai")?></option>
                        <option value="Qalyubia"><?php // trans("lan.Qalyubia")?></option>
                        <option value="Kafr el-Sheikh"><?php // trans("lan.Kafr el-Sheikh")?></option>
                        <option value="Qena"><?php // trans("lan.Qena")?></option>
                        <option value="Luxor"><?php // trans("lan.Luxor")?></option>
                        <option value="Minya"><?php // trans("lan.Minya")?></option>
                        <option value="Monufia"><?php // trans("lan.Monufia")?></option>
                        <option value="Matrouh"><?php // trans("lan.Matrouh")?></option>
                        <option value="Port Said"><?php // trans("lan.Port Said")?></option>
                        <option value="Sohag"><?php // trans("lan.Sohag")?></option>
                        <option value="Al Sharqia"><?php // trans("lan.Al Sharqia")?></option>
                        <option value="North Sinai"><?php // trans("lan.North Sinai")?></option>
                        <option value="Suez"><?php // trans("lan.Suez")?></option>
                        <option value="New Valley"><?php // trans("lan.New Valley")?></option>

                    </select> -->
                </div>


                <div class="form-group">
                    <label><?= trans('lan.Area')?> <span>*</span></label>
                    <input name="area" required class="check_input2" placeholder="Zahraa al Maadi - Agouza …" type="text" id="area">
                </div>


                <div class="form-group">
                    <label><?= trans('lan.phone')?> <span>*</span></label>
                    <input  required name="phone" class="check_input2" type="tel" id="phone">
                </div>


                <div class="form-group">
                    <label><?= trans('lan.Email Address')?> <span>*</span></label>
                    <input required name="email2" class="check_input2" type="email" id="email">
                </div>

            <?php

        }
    }
 
  
    public function details_form(){

        $user = $this->get_info_user() ;
        $shippings = shipping::all();
        $countrys = country::all();


            ?>
                
                <div>
                    <div id="shippingAddressForm">
                      <div aria-hidden="false" class="r62YW">
                         <div class="_1ip0g651 _1fragempf _1fragem4g _1fragem6t _1fragem3c">
                            
                            <div class="_1fragempf _1fragem4g _1fragem6t _1fragem3c _1fragempz _1fragempv _16s97g7f _16s97g7p _16s97g71j _16s97g71t" style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);">
                               <div
                                  class="_7ozb2u2 _1fragem3w _1fragem69 _1fragempf _1fragem3c _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemr7">
                                  <div class="_1fragempf">
                                     <label id="TextField0-label" for="TextField0"
                                        class="cektnc3 _1fragemp5 _1fragemwg _1fragemvz _1fragemx7 _1fragemwu _1fragemwp _1fragemx3 _1fragemx4"><span
                                        class="cektnc9"><span
                                        class="rermvf1 _1fragemnr _1fragemo1 _1fragem2i"><?= trans("lan.Type Full Name")?></span></span></label>
                                     <div
                                        class="_7ozb2u6 _1fragempf _1fragem3c _1fragemrh _1fragemwu _1fragemwp _1fragemx3 _1fragemx6 _1fragemr7 _1fragemxc _7ozb2ul _7ozb2uh">
                                        <input id="TextField0" name="name" placeholder="<?= trans("lan.Type Full Name")?>"
                                           required="" required type="text" aria-required="true"
                                           aria-labelledby="TextField0-label"
                                           autocomplete="shipping given-name"
                                           class="check_input2 _7ozb2uq _1fragempf _1fragemx7 _1fragemsd _1fragemwf _7ozb2ur _7ozb2u11 _7ozb2u1h">
                                     </div>
                                  </div>
                               </div>
                              
                            </div>
                            <div
                               class="_1fragempf _1fragem4g _1fragem6t _1fragem3c _1fragempz _1fragempv _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
                               style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);">
                               <div class="wfKnD">
                                  <div class="_1ip0g651 _1fragempf _1fragem46 _1fragem6j _1fragem3c">
                                     <div
                                        class="_7ozb2u2 _1fragem3w _1fragem69 _1fragempf _1fragem3c _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemr7">
                                        <div class="_1fragempf">
                                           <label id="TextField2-label"
                                              for="TextField2"
                                              class="cektnc3 _1fragemp5 _1fragemwg _1fragemvz _1fragemx7 _1fragemwu _1fragemwp _1fragemx3 _1fragemx4"><span
                                              class="cektnc9"><span
                                              class="rermvf1 _1fragemnr _1fragemo1 _1fragem2i"><?= trans("lan.Street Address")?></span></span></label>
                                           <div
                                              class="_7ozb2u6 _1fragempf _1fragem3c _1fragemrh _1fragemwu _1fragemwp _1fragemx3 _1fragemx6 _1fragemr7 _1fragemxc _7ozb2ul _7ozb2uh">
                                              <input id="TextField2" name="address1" placeholder="<?= trans("lan.Street Address")?>"
                                                 required="" type="text" aria-required="true"
                                                 aria-labelledby="TextField2-label"
                                                 autocomplete="shipping address-line1"
                                                 class="check_input2 _7ozb2uq _1fragempf _1fragemx7 _1fragemsd _1fragemwf _7ozb2ur _7ozb2u11 _7ozb2u1h">
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div
                               class="_1fragempf _1fragem4g _1fragem6t _1fragem3c _1fragempz _1fragempv _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
                               style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);">
                               <div
                                  class="_7ozb2u2 _1fragem3w _1fragem69 _1fragempf _1fragem3c _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemr7">
                                  <div class="_1fragempf">
                                     <label id="TextField3-label" for="TextField3"
                                        class="cektnc3 _1fragemp5 _1fragemwg _1fragemvz _1fragemx7 _1fragemwu _1fragemwp _1fragemx3 _1fragemx4"><span
                                        class="cektnc9"><span
                                        class="rermvf1 _1fragemnr _1fragemo1 _1fragem2i"><?= trans("lan.Apartment_suite")?></span></span></label>
                                     <div
                                        class="_7ozb2u6 _1fragempf _1fragem3c _1fragemrh _1fragemwu _1fragemwp _1fragemx3 _1fragemx6 _1fragemr7 _1fragemxc _7ozb2ul _7ozb2uh">
                                        <input id="TextField3" name="address2"
                                           placeholder="<?= trans("lan.Apartment_suite")?>" type="text"
                                           aria-required="false" aria-labelledby="TextField3-label"
                                           autocomplete="shipping address-line2"
                                           class="check_input2 _7ozb2uq _1fragempf _1fragemx7 _1fragemsd _1fragemwf _7ozb2ur _7ozb2u11 _7ozb2u1h">
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div
                               class="_1fragempf _1fragem4g _1fragem6t _1fragem3c _1fragempz _1fragempv _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
                               style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);">
                               <div class="RD23h _1fragemr7 _10vrn9p1 _10vrn9p0 _10vrn9p4">
                                  <div>
                                     <div class="VZudx _1fragemr7">
                                        <label for="Select2"
                                           class="QCxaD A9HkF"><span class="XDBWz"><span
                                           class="rermvf1 _1fragemnr _1fragemo1 _1fragem2i"><?= trans("lan.Country")?></span></span></label>
                                        <select name="country" id="Select2" required="" autocomplete="shipping address-level1" class="check_input2 ZHJU6 _1fragemxc oAlPg IWR5K tu1VS">
                                            <option value=""><?= trans("lan.Select a country")?></option>

                                            <?php 
                                                foreach($countrys as $country){
                                                    ?>
                                                        <option value="<?= $country->country?>"><?= $country->country?></option>
                                                    <?php
                                                }
                                            ?>
                                           
                                        </select>
                                        <div class="VXrUd">
                                           <span
                                              class="_1fragemsd _1fragem2d _1fragemog _1fragemo6 a8x1wu9 _1fragem2i a8x1wum a8x1wul a8x1wuy">
                                              <svg
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"
                                                 focusable="false" aria-hidden="true"
                                                 class="a8x1wu10 _1fragem2i _1fragemsd _1fragemog _1fragemo6 _1fragemri">
                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6">
                                                 </path>
                                              </svg>
                                           </span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="RD23h _1fragemr7 _10vrn9p1 _10vrn9p0 _10vrn9p4">
                                  <div>
                                     <div class="VZudx _1fragemr7">
                                        <label for="Select1" class="QCxaD A9HkF"><span class="XDBWz"><span class="rermvf1 _1fragemnr _1fragemo1 _1fragem2i"><?= trans("lan.City")?></span></span></label>
                                            <select name="town" id="Select1" required="" onchange="country_price(this)" autocomplete="shipping address-level1" class="check_input2 ZHJU6 _1fragemxc oAlPg IWR5K tu1VS">
                                                <option value=""><?= trans("lan.Select an city")?></option>

                                                <?php 
                                                    $ip = $_SERVER['REMOTE_ADDR'] ;
                                                    $city = '';
                                                    try {
                                                        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                                                        $city =  $details->city;
                                                        //code...
                                                    } catch (\Throwable $th) {
                                                        //throw $th;
                                                    }
                                                    foreach($shippings as $shipping){
                                                        if($city == $shipping->city){
                                                            ?>  
                                                                <option selected value="<?= $shipping->city?>"><?= $shipping->city?></option>
                                                            <?php
                                                        }else{

                                                            ?>  
                                                                <option value="<?= $shipping->city?>"><?= $shipping->city?></option>
                                                            <?php
                                                        }
                                                    
                                                    }
                                                ?>
                                            </select>
                                        <div class="VXrUd">
                                           <span
                                              class="_1fragemsd _1fragem2d _1fragemog _1fragemo6 a8x1wu9 _1fragem2i a8x1wum a8x1wul a8x1wuy">
                                              <svg
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"
                                                 focusable="false" aria-hidden="true"
                                                 class="a8x1wu10 _1fragem2i _1fragemsd _1fragemog _1fragemo6 _1fragemri">
                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6">
                                                 </path>
                                              </svg>
                                           </span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                             
                            </div>
                            
                            

                            
                         </div>
                      </div>
                   </div>
                </div>
            
                
            <?php

    }


    public function cart_user(){
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
        

        $orders = DB::select("SELECT * FROM `orders` JOIN `product` ON `orders`.`product_id` = `product`.`product_id` WHERE `orders`.`user` = '$user' ");
        $list = [];



        foreach ($orders as $order){
            if(!in_array($order->token, $list)){
                
                array_push($list, $order->token) ; 
                
                ?>
                    <tr style="    border: none;">
                        <td >#<?= $order->count_id_order ?></td>
                        <td ><?= $order->order_quantity?></td>
                        <td><?= $order->created_at?></td>
                        <td>
                            
                            <?php
                                if($order->process == '1'){
                                    echo trans("lan.under process") ;
                                }else if($order->process == '2'){
                                    echo trans("lan.confirm") ;
                                }else{
                                    echo trans("lan.order done") ;
                                }
                            
                            ?>
                    
                        </td>
                        <td><?= $order->payment?></td>
                        <td><?= $order->total?> EGP</td>
                    </tr>



                <?php

            }

        }
    }


    public function Confirm_Request (Request $request){
        if(isset($request->email, $request->token)){

            $email = $this->InsertInput("email", $request->email);
            $token = $this->InsertInput("str", $request->token);
            $Contact_us = Contact_us::where("token", $token)->where("email", $email)->first(); 

            if($Contact_us){

                if($token == $Contact_us->token && $email == $Contact_us->email){


                    Contact_us::where("token", $token)->where("email", $email)->update([
                        "confirm" => "1"
                    ]);

                    return redirect()->route("index")->with("success", "success") ; 
                    
                }else{
                    return redirect()->route("index")->with("error", "error") ; 
                }


            }else{
                return 0 ; 
            }

        }else{
            return redirect()->route("index")->with("error", "error") ; 
        }
    }

}
