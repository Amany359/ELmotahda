<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\Gallary;
use App\Models\Photo_bar;
use App\Models\product;
use App\Models\projects;

class get_data extends Controller
{
    public function get_banners_html (){
        $banners = Photo_bar::all() ; 

        foreach($banners as $banner){
                ?>
                <div class="swiper-slide" data-swiper-title="See our new air collection ">
                    <div class="eltd-slide-background-image-holder">
                        <div class="eltd-slide-background-image">
                            <img width="1058" height="498" src="<?= url( "images/Photo_bar/$banner->image" )?>" class="attachment-full size-full" alt="d" decoding="async" fetchpriority="high" srcset="<?= url( "images/Banners/$banner->image" )?> 1058w, <?= url( "images/Banners/$banner->image" )?> 300w, htt<?= url( "images/Banners/$banner->image" )?> 768w, <?= url( "images/Banners/$banner->image" )?> 1024w, <?= url( "images/Banners/$banner->image" )?> 606w" sizes="(max-width: 1058px) 100vw, 1058px" loading="eager" />
                        </div>
                    </div>
                    <div class="eltd-slide-foreground-image-holder">
                        <div class="eltd-slide-foreground-image" data-swiper-parallax="-50%">
                            <img width="817" height="400" src="<?= url( "images/Photo_bar/$banner->image" )?>" class="attachment-full size-full" alt="f" decoding="async" srcset="<?= url( "images/Banners/$banner->image" )?> 817w, <?= url( "images/Banners/$banner->image" )?> 300w, <?= url( "images/Banners/$banner->image" )?> 768w, <?= url( "images/Banners/$banner->image" )?> 606w" sizes="(max-width: 817px) 100vw, 817px" loading="eager" />
                        </div>
                    </div>
                </div>
            <?php
        }

    }


    public function good_categories (){
        $categories = categories::limit("6")->get() ; 

        foreach($categories as $category){
            $products = product::where("category", $category->category_id)->where("status", "1")->get() ; 
            ?>
                <div class="category-item">
                    <a class="category-inner" href="<?= route("shop", ['category' => $category->category_id])?>">
                        <div class="entry-media">
                            <img decoding="async" src="<?= url("images/categories/$category->image")?>" alt="Garage Tools">
                        </div>
                        <div class="entry-content">
                            <h3 class="category-name"><?= $category->category_name?></h3><span class="counter"><?= trans("msg.item_product") . " " . count($products) ?></span>
                        </div>
                    </a>
                </div>
            <?php
        }

    }


    public function get_gallary_html (){
        $Gallary = Gallary::all()->sortBy("category")  ; 

        foreach($Gallary as $ph){
                ?>
                <article data-aos="fade-down-right" class="eltd-pl-item eltd-item-space  post-1189 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry  <?= $ph->category?> portfolio-category-all portfolio-tag-black portfolio-tag-outerwear portfolio-tag-run portfolio-tag-sport">
                    <div class="eltd-pl-item-inner">
                        <div class="eltd-pli-image">
                            <img  width="800" height="570" src="<?= url("images/Gallary/$ph->image")?>" class="attachment-full size-full wp-post-image" sizes="(max-width: 800px) 100vw, 800px" loading="lazy" />
                        </div>
                        <div class="eltd-pli-text-holder">
                            <div class="eltd-pli-text-wrapper">
                                <div class="eltd-pli-text">
                                    <h4 itemprop="name" class="eltd-pli-title entry-title">
                                    <?= $ph->category?> </h4>
                                    <div class="eltd-pli-category-holder">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a itemprop="url" class="eltd-pli-link eltd-block-drag-link" target="_blank" href="<?= url("images/Gallary/$ph->image")?>" target="_self"></a>
                    </div>
                </article>


            <?php
            
        }

    }

    
    public function get_category_html (){
        $Gallary = Gallary::all() ; 

   
        // portfolio-category-all

        $list_category = [] ; 

        ?>
            <li class="eltd-pl-filter"  data-filter=".portfolio-category-all">
                <span><?= trans("lan.All")?></span>
            </li>

        <?php
        foreach($Gallary as $ph){
            if(!in_array($ph->category, $list_category)){

            ?>
                <li class="eltd-pl-filter"  data-filter=".<?= $ph->category?>">
                    <span><?= $ph->category?></span>
                </li>

            <?php
            array_push($list_category, $ph->category); 
            }
        }

    }
}
