

<link rel="stylesheet" href="{{url('website2/assets/css/vendor/flaticon/flaticon.css')}}">

@include("website.layouts.noti")

<?php
session_start(); 
?>

<style>
    .swiper {
  width: 100%;
  height: auto;
  margin: 20px auto;
  }

  .swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  }

  .append-buttons {
  text-align: center;
  margin-top: 20px;
  }

  .append-buttons a {
  display: inline-block;
  border: 1px solid #007aff;
  color: #007aff;
  text-decoration: none;
  padding: 4px 10px;
  border-radius: 4px;
  margin: 0 10px;
  font-size: 13px;
  }
</style>

<header class="site-header header-type-1 shadow-enable" id="masthead">
    <div class="header-border"></div>

    <div class="header-row header-topbar border-bottom-full hide-below-1200">
        <div class="container">
            <div class="header-inner">

                <div class="column left align-center">

                    <nav class="klbth-menu-wrapper horizontal topbar shadow-enable">
                        <ul id="topbar-left" class="klbth-menu">
                            <li id="menu-item-3859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3859"><a href="https://klbtheme.com/partdo/about-us/">About Us</a></li>
                            <li id="menu-item-3861" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3861"><a href="https://klbtheme.com/partdo/my-account/">My account</a></li>
                            <li id="menu-item-3862" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3862"><a href="https://klbtheme.com/partdo/order-tracking/">Order Tracking</a></li>
                            <li id="menu-item-3860" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3860"><a href="https://klbtheme.com/partdo/wishlist/">Wishlist</a></li>
                        </ul>
                    </nav>

                </div>

                <div class="column right align-center">

                    <div class="header-notice">
                        <p>{{__("lan.Need help")}} <span>{{__("lan.Call us")}}:</span> <a href="tel:01144755549">01144755549</a> 
                            <span>{{__("lan.or")}}</span> 
                            <a href="mailto:info@company.com">info@company.com</a></p>
                    </div>


                    <div class="header-switcher">
                        <nav class="klbth-menu-wrapper horizontal topbar shadow-enable">
                            <ul id="topbar-right" class="klbth-menu">

                                <li id="menu-item-3655" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3655">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if(Lang::locale() != $localeCode)
                                            <a class="btn_header menu-item" rel="alternate" hreflang="{{ $localeCode }}" 
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" aria-current="page" >
                                            {{ $properties['native'] }}
                                            </a>
                                        @endif
                                        @endforeach
                                        <ul class="sub-menu">
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                            <li id="menu-item-3662" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3662">
                                                <a class="btn_header menu-item" rel="alternate" hreflang="{{ $localeCode }}" 
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" aria-current="page" >
                                                {{ $properties['native'] }}
                                                </a>
                                            </li>
                                            @endforeach

                                        </ul>
                                </li>
                                <li id="menu-item-3659" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-3659"><a href="#">EGP</a>
                                    
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="header-row header-main spacing hide-below-1200">
        <div class="container">
            <div class="header-inner">

                <div class="column left align-center">

                    <div class="quick-button toggle-button">
                        <div class="quick-button-inner">
                            <div class="quick-icon"><i class="klbth-icon-menu"></i></div>
                        </div>
                    </div>


                    <div class="site-brand">
                        <a href="{{route('index')}}" title="قطع غيار سيارات">
                            <img src="{{url('images/logos/logo.png')}}" style="width: 63px; object-fit:contain; " alt="قطع غيار سيارات">
                        </a>
                    </div><!-- site-brand -->
                </div>

                <div class="column center align-center">

                    <div class="quick-button custom-button">
                        <div class="quick-button-inner">
                            <div class="quick-icon" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="partdo-tooltip white arrow-hide" data-bs-title="Find the Right Parts Faster" data-klbth-modal="service-modal"><i class="klbth-icon-garage-house"></i></div>
                            <div class="klbth-modal-holder" id="service-modal" tabindex="-1" aria-labelledby="service-modal" aria-modal="true" role="dialog">
                                <div class="klbth-modal-inner size--sm">
                                    <div class="klbth-modal-header">
                                        <h3 class="entry-title">Find the Right Parts Faster</h3>
                                        <div class="site-close"> <a href="#" aria-hidden="false"> <i class="klbth-icon-xmark"></i></a></div>
                                    </div>
                                    <div class="klbth-modal-body">
                                        <div class="service-search-modal">
                                            <img src="{{url('website/wp-content/uploads/2022/11/car-service-vector.png')}}" alt="search">

                                            <div class="entry-description">
                                                <p>Having the right automotive parts and car accessories will help you to boost your travel comfort and go on the long-distance journey comfortably that you have been planning.</p>
                                            </div>

                                            <form class="service-search-form" id="klb-attribute-filter" action="https://klbtheme.com/partdo/shop/" method="get">
                                                <div class="form-column"><select class="theme-select select2-hidden-accessible" name="filter_make" id="filter_make" tax="pa_make" data-placeholder="Select Make" data-search="true" data-searchplaceholder="Search item..." data-select2-id="select2-data-filter_make" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="select2-data-2-9msd">Select Make</option>
                                                        <option id="83" value="audi">Audi</option>
                                                        <option id="84" value="bmw">BMW</option>
                                                        <option id="85" value="chevrolet">Chevrolet</option>
                                                        <option id="86" value="dodge">Dodge</option>
                                                        <option id="87" value="fiat">Fiat</option>
                                                        <option id="88" value="ford">Ford</option>
                                                        <option id="89" value="honda">Honda</option>
                                                        <option id="90" value="hyundai">Hyundai</option>
                                                        <option id="91" value="jaguar">Jaguar</option>
                                                        <option id="92" value="kia">Kia</option>
                                                    </select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="select2-data-1-7gd0" style="width: 460px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-filter_make-container" aria-controls="select2-filter_make-container"><span class="select2-selection__rendered" id="select2-filter_make-container" role="textbox" aria-readonly="true" title="Select Make"><span class="select2-selection__placeholder">Select Make</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                                <div class="form-column"><select class="child-attr theme-select select2-hidden-accessible" id="child_filter_make" name="filter_make" data-placeholder="Select Model" data-search="true" data-searchplaceholder="Search item..." disabled="" data-select2-id="select2-data-child_filter_make" tabindex="-1" aria-hidden="true">
                                                        <option value="0" data-select2-id="select2-data-4-1crd">Select make First</option>
                                                    </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="rtl" data-select2-id="select2-data-3-42ix" style="width: 460px;"><span class="selection"><span class="select2-selection select2-selection--single select2-selection--clearable" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-child_filter_make-container" aria-controls="select2-child_filter_make-container"><button type="button" class="select2-selection__clear" tabindex="-1" title="Remove all items" aria-label="Remove all items" aria-describedby="select2-child_filter_make-container" data-select2-id="select2-data-5-5qzd"><span aria-hidden="true">×</span></button><span class="select2-selection__rendered" id="select2-child_filter_make-container" role="textbox" aria-readonly="true" title="Select make First">Select make First</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div><input type="text" id="klb_filter_make" name="filter_make" value="" hidden="">
                                                <div class="form-column"><select class="theme-select select2-hidden-accessible" name="filter_year-attr" id="filter_year-attr" tax="pa_year-attr" data-placeholder="Select Year" data-search="true" data-searchplaceholder="Search item..." data-select2-id="select2-data-filter_year-attr" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="select2-data-7-4mko">Select Year</option>
                                                        <option id="98" value="1990">1990</option>
                                                        <option id="99" value="1991">1991</option>
                                                        <option id="100" value="1992">1992</option>
                                                        <option id="101" value="1993">1993</option>
                                                        <option id="102" value="1994">1994</option>
                                                        <option id="103" value="1995">1995</option>
                                                        <option id="110" value="2002">2002</option>
                                                        <option id="111" value="2003">2003</option>
                                                        <option id="112" value="2004">2004</option>
                                                        <option id="113" value="2005">2005</option>
                                                        <option id="114" value="2006">2006</option>
                                                        <option id="115" value="2007">2007</option>
                                                        <option id="116" value="2008">2008</option>
                                                        <option id="117" value="2009">2009</option>
                                                        <option id="118" value="2010">2010</option>
                                                        <option id="119" value="2011">2011</option>
                                                        <option id="120" value="2012">2012</option>
                                                        <option id="121" value="2013">2013</option>
                                                        <option id="122" value="2014">2014</option>
                                                        <option id="123" value="2015">2015</option>
                                                        <option id="124" value="2016">2016</option>
                                                        <option id="125" value="2017">2017</option>
                                                        <option id="126" value="2018">2018</option>
                                                        <option id="127" value="2019">2019</option>
                                                        <option id="128" value="2020">2020</option>
                                                        <option id="129" value="2021">2021</option>
                                                        <option id="130" value="2022">2022</option>
                                                    </select><span class="select2 select2-container select2-container--default" dir="rtl" data-select2-id="select2-data-6-f30x" style="width: 460px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-filter_year-attr-container" aria-controls="select2-filter_year-attr-container"><span class="select2-selection__rendered" id="select2-filter_year-attr-container" role="textbox" aria-readonly="true" title="Select Year"><span class="select2-selection__placeholder">Select Year</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div><input type="text" id="klb_filter_year-attr" name="filter_year-attr" value="" hidden="">
                                                <div class="form-column"><button class="btn primary">Find Auto Parts</button></div>
                                            </form>
                                            <div class="service-description">
                                                <p>Please fill in the criteria you are looking for</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="klbth-modal-overlay"></div>
                            </div>
                        </div>
                    </div>



                    <div class="search-form-wrapper">
                        <div class="search-form-inner">
                            <form class="search-form klb-ajax-search" action="https://klbtheme.com/partdo/"><input class="form-control search-input" type="search" 
                                value="" name="s" placeholder="{{__("lan.Search for products")}}" autocomplete="off"><button class="btn" type="submit"><i class="klbth-icon-search"></i>
                                </button><input type="hidden" name="post_type" value="product"></form><!-- search-form -->
                        </div>
                    </div>
                </div>

                <div class="column right align-center">

                    <div class="quick-button login-button">
                        <div class="quick-button-inner">
                            <div class="quick-text">
                                <p class="primary-text">{{__("lan.My Account")}}</p><span class="sub-text">{{__("lan.Hello")}}, {{__("lan.Sign In")}}</span>
                            </div>
                            <div class="arrow">
                                <i class="klbth-icon-chevron-down"></i>
                            </div>
                        </div>

                        <div class="login-dropdown">
                            <div class="login-dropdown-wrapper">
                                <div class="login-text">
                                    <p>{{__("lan.Sign up now and enjoy discounted shopping!")}}</p>
                                </div>
                                <a class="btn secondary wide" href="https://klbtheme.com/partdo/my-account/">{{__("lan.login")}}</a>
                                <div class="new-customer"> {{__("lan.New Customer?")}}
                                    <a href="https://klbtheme.com/partdo/my-account/#register">{{__("lan.Sign Up")}} </a>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="quick-button wishlist-button">
                        <a class="quick-button-inner" href="https://klbtheme.com/partdo/wishlist/">
                            <div class="quick-icon"><i class="klbth-icon-heart-round"></i></div>
                        </a>
                        <div class="count"><a href="https://klbtheme.com/partdo/wishlist/" name="wishlist" aria-label="Wishlist -" 
                            class="wishlist_products_counter top_wishlist-heart top_wishlist-">
                                <span class="wishlist_products_counter_text">{{__("lan.Wishlist")}} -</span>
                                <span class="wishlist_products_counter_number">0</span>
                            </a>
                        </div>
                    </div>





                    <div class="quick-button cart-button">
                        <a class="quick-button-inner" href="https://klbtheme.com/partdo/cart/">
                            <div class="quick-icon"><i class="klbth-icon-shopping-bag-large"></i>

                                <span class="cart-count count">
                                    @if(isset( $_SESSION["carts_count"]))
                                    {{ $_SESSION["carts_count"] }}
                                    @else
                                        0
                                    @endif
                                </span>





                            </div>
                            <div class="quick-text">

                            </div>
                        </a>
                        <div class="cart-dropdown hide">
                            <div class="cart-dropdown-wrapper">


                                <div class="fl-mini-cart-content">

                                    <div class="cart-empty">
                                        <div class="empty-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 231.523 231.523" style="enable-background:new 0 0 231.523 231.523" xml:space="preserve">
                                                <path d="M107.415 145.798a7.502 7.502 0 0 0 8.231 6.69 7.5 7.5 0 0 0 6.689-8.231l-3.459-33.468a7.5 7.5 0 0 0-14.92 1.542l3.459 33.467zM154.351 152.488a7.501 7.501 0 0 0 8.231-6.69l3.458-33.468a7.499 7.499 0 0 0-6.689-8.231c-4.123-.421-7.806 2.57-8.232 6.689l-3.458 33.468a7.5 7.5 0 0 0 6.69 8.232zM96.278 185.088c-12.801 0-23.215 10.414-23.215 23.215 0 12.804 10.414 23.221 23.215 23.221s23.216-10.417 23.216-23.221c0-12.801-10.415-23.215-23.216-23.215zm0 31.435c-4.53 0-8.215-3.688-8.215-8.221 0-4.53 3.685-8.215 8.215-8.215 4.53 0 8.216 3.685 8.216 8.215 0 4.533-3.686 8.221-8.216 8.221zM173.719 185.088c-12.801 0-23.216 10.414-23.216 23.215 0 12.804 10.414 23.221 23.216 23.221 12.802 0 23.218-10.417 23.218-23.221 0-12.801-10.416-23.215-23.218-23.215zm0 31.435c-4.53 0-8.216-3.688-8.216-8.221 0-4.53 3.686-8.215 8.216-8.215 4.531 0 8.218 3.685 8.218 8.215 0 4.533-3.686 8.221-8.218 8.221z"></path>
                                                <path d="M218.58 79.08a7.5 7.5 0 0 0-5.933-2.913H63.152l-6.278-24.141a7.5 7.5 0 0 0-7.259-5.612H18.876a7.5 7.5 0 0 0 0 15h24.94l6.227 23.946c.031.134.066.267.104.398l23.157 89.046a7.5 7.5 0 0 0 7.259 5.612h108.874a7.5 7.5 0 0 0 7.259-5.612l23.21-89.25a7.502 7.502 0 0 0-1.326-6.474zm-34.942 86.338H86.362l-19.309-74.25h135.895l-19.31 74.25zM105.556 52.851a7.478 7.478 0 0 0 5.302 2.195 7.5 7.5 0 0 0 5.302-12.805L92.573 18.665a7.501 7.501 0 0 0-10.605 10.609l23.588 23.577zM159.174 55.045c1.92 0 3.841-.733 5.306-2.199l23.552-23.573a7.5 7.5 0 0 0-.005-10.606 7.5 7.5 0 0 0-10.606.005l-23.552 23.573a7.5 7.5 0 0 0 5.305 12.8zM135.006 48.311h.002a7.5 7.5 0 0 0 7.5-7.498l.008-33.311A7.5 7.5 0 0 0 135.018 0h-.001a7.5 7.5 0 0 0-7.501 7.498l-.008 33.311a7.5 7.5 0 0 0 7.498 7.502z"></path>
                                            </svg>
                                        </div>
                                        <div class="empty-text">{{__("lan.No products in the cart")}}</div>
                                    </div>

                                </div>




                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="header-nav hide-below-1200">
        <div class="container">
            <div class="header-inner justify-content-start">
                <div class="column left align-center col-md-3">

                    <div class="dropdown-cats dropdown">
                        <a class="dropdown-toggle" href="#">
                            <span class="text">{{__("lan.Categories")}}</span>
                            <span class="icon"> <i class="klbth-icon-caret-down"></i></span>
                        </a>


                        <div class="dropdown-menu collapse show">
                            <nav class="klbth-menu-wrapper vertical">
                                <ul id="category-menu" class="klbth-menu ">
                                  
                                    
                                  
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
                <div class="column left align-center">
                    <nav class="klbth-menu-wrapper horizontal primary shadow-enable">
                        <ul id="primary-menu" class="klbth-menu">
                            
                            <li id="menu-item-3847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-40 current_page_item  menu-item-3847">
                                <a href="{{route('index')}}">{{__("lan.home")}}</a>
                            </li>

                            <li id="menu-item-3836" class="mega-menu menu-item menu-item-type-post_type menu-item-object-page  menu-item-3836">
                                <a href="{{route('shop', ['category' => 'all'])}}">{{__("lan.Shop")}}</a>
                            </li>

                            <li id="menu-item-3673" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3673">
                                <a href="https://klbtheme.com/partdo/product-category/tires-wheels/">{{__("lan.Our branches")}}</a>
                            </li>

                            <li id="menu-item-3674" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3674">
                                <a href="https://klbtheme.com/partdo/product-category/interior-accessories/">{{__("lan.services")}}</a>
                            </li>

                            
                            <li id="menu-item-3843" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3843">
                                <a href="https://klbtheme.com/partdo/blog/">{{__("lan.about")}}</a>
                            </li>


                            <li id="menu-item-3844" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3844">
                                <a href="https://klbtheme.com/partdo/contact/">{{__("lan.Contact")}}</a>
                            </li>

                        </ul>
                    </nav>




                    <div class="mega-items">
                        <div class="mega-item">
                            <a href="#"> <span class="menu-icon">
                                    <i class="klbth-icon-ecommerce-discount-black"></i>
                                </span>{{__("lan.Top Offers")}} </a>
                            <div class="sub-item">
                                <div class="discount-products-header">
                                    <h4 class="entry-title">{{__("lan.Items on sale this week")}}</h4>
                                    <p>{{__("lan.Top picks this week. Up to 50% off the best selling products")}}</p>
                                </div><!-- discount-products-header -->


                                <div class="products column-5">

                                    <div class="product">
                                        <div class="product-wrapper">
                                            <div class="product-content">
                                                <div class="thumbnail-wrapper entry-media"><a href="https://klbtheme.com/partdo/product/vision-147-daytona-hyper-silver/"><img src="{{url('website/wp-content/uploads/2022/10/1-37-500x500.jpg')}}" alt="VISION® – 147 DAYTONA Hyper Silver"></a></div><!-- thumbnail-wrapper -->
                                                <div class="content-wrapper">
                                                    <h3 class="product-title"> <a href="https://klbtheme.com/partdo/product/vision-147-daytona-hyper-silver/">VISION® – 147 DAYTONA Hyper Silver</a></h3>
                                                    <div class="product-rating">
                                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                                        <div class="rating-count"> <span class="count-text">1 review</span></div>
                                                    </div><span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>254.00</bdi></span></del> <span class="screen-reader-text">Original price was: $254.00.</span><ins aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>209.00</bdi></span></ins><span class="screen-reader-text">Current price is: $209.00.</span></span><!-- price -->
                                                </div><!-- content-wrapper -->
                                            </div><!-- product-content -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="notice-button">
                        <a class="notice-link" href="https://klbtheme.com/partdo/contact"> <span class="notice-icon"> <i class="klbth-icon-circle-info-fill"></i></span><span class="notice-text">{{__("lan.Help Center")}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-row header-mobile hide-above-1200">
        <div class="container">
            <div class="header-inner">
                <div class="column left align-center">
                    <div class="quick-button toggle-button">
                        <div class="quick-button-inner">
                            <div class="quick-icon"><i class="klbth-icon-menu"></i></div>
                        </div>
                    </div>
                </div>
                <div class="column center align-center">
                    <div class="site-brand">
                        <a href="{{route('index')}}" title="Partdo – Tools Shop eCommerce Theme">
                            <img src="{{url('website/wp-content/themes/partdo/assets/img/logo-dark.png')}}" alt="Partdo – Tools Shop eCommerce Theme">
                        </a>
                    </div><!-- site-brand -->
                </div>
                <div class="column right align-center">

                    <div class="quick-button cart-button"><a class="quick-button-inner" href="{{route('cart')}}">
                            <div class="quick-icon"><i class="klbth-icon-shopping-bag-large"></i>

                                <span class="cart-count count">
                                    @if(isset( $_SESSION["carts_count"]))
                                    {{ $_SESSION["carts_count"] }}
                                    @else
                                        0
                                    @endif

                                </span>

                            </div>
                        </a>
                        <div class="cart-dropdown hide">
                            <div class="cart-dropdown-wrapper">


                                <div class="fl-mini-cart-content">



                                    <div class="cart-empty">
                                        <div class="empty-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 231.523 231.523" style="enable-background:new 0 0 231.523 231.523" xml:space="preserve">
                                                <path d="M107.415 145.798a7.502 7.502 0 0 0 8.231 6.69 7.5 7.5 0 0 0 6.689-8.231l-3.459-33.468a7.5 7.5 0 0 0-14.92 1.542l3.459 33.467zM154.351 152.488a7.501 7.501 0 0 0 8.231-6.69l3.458-33.468a7.499 7.499 0 0 0-6.689-8.231c-4.123-.421-7.806 2.57-8.232 6.689l-3.458 33.468a7.5 7.5 0 0 0 6.69 8.232zM96.278 185.088c-12.801 0-23.215 10.414-23.215 23.215 0 12.804 10.414 23.221 23.215 23.221s23.216-10.417 23.216-23.221c0-12.801-10.415-23.215-23.216-23.215zm0 31.435c-4.53 0-8.215-3.688-8.215-8.221 0-4.53 3.685-8.215 8.215-8.215 4.53 0 8.216 3.685 8.216 8.215 0 4.533-3.686 8.221-8.216 8.221zM173.719 185.088c-12.801 0-23.216 10.414-23.216 23.215 0 12.804 10.414 23.221 23.216 23.221 12.802 0 23.218-10.417 23.218-23.221 0-12.801-10.416-23.215-23.218-23.215zm0 31.435c-4.53 0-8.216-3.688-8.216-8.221 0-4.53 3.686-8.215 8.216-8.215 4.531 0 8.218 3.685 8.218 8.215 0 4.533-3.686 8.221-8.218 8.221z"></path>
                                                <path d="M218.58 79.08a7.5 7.5 0 0 0-5.933-2.913H63.152l-6.278-24.141a7.5 7.5 0 0 0-7.259-5.612H18.876a7.5 7.5 0 0 0 0 15h24.94l6.227 23.946c.031.134.066.267.104.398l23.157 89.046a7.5 7.5 0 0 0 7.259 5.612h108.874a7.5 7.5 0 0 0 7.259-5.612l23.21-89.25a7.502 7.502 0 0 0-1.326-6.474zm-34.942 86.338H86.362l-19.309-74.25h135.895l-19.31 74.25zM105.556 52.851a7.478 7.478 0 0 0 5.302 2.195 7.5 7.5 0 0 0 5.302-12.805L92.573 18.665a7.501 7.501 0 0 0-10.605 10.609l23.588 23.577zM159.174 55.045c1.92 0 3.841-.733 5.306-2.199l23.552-23.573a7.5 7.5 0 0 0-.005-10.606 7.5 7.5 0 0 0-10.606.005l-23.552 23.573a7.5 7.5 0 0 0 5.305 12.8zM135.006 48.311h.002a7.5 7.5 0 0 0 7.5-7.498l.008-33.311A7.5 7.5 0 0 0 135.018 0h-.001a7.5 7.5 0 0 0-7.501 7.498l-.008 33.311a7.5 7.5 0 0 0 7.498 7.502z"></path>
                                            </svg>
                                        </div>
                                        <div class="empty-text">{{__("lan.No products in the cart")}}</div>
                                    </div>


                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="site-drawer">
    <div class="site-scroll ps ps__rtl ps--active-y">
        <div class="site-drawer-row site-drawer-header">
            <div class="site-brand">
                <a href="{{route('index')}}" title="Partdo – Tools Shop eCommerce Theme">
                    <img src="{{url('website/wp-content/uploads/2022/10/logo-dark.png')}}" alt="Partdo – Tools Shop eCommerce Theme">
                </a>
            </div><!-- site-brand -->
            <div class="site-close"> <a href="#" aria-hidden="false"> <i class="klbth-icon-xmark"></i></a></div>
        </div>
        <div class="site-drawer-row site-drawer-body"><span class="drawer-heading">Main Menu</span>
            <nav class="klbth-menu-wrapper vertical drawer-primary">
                <ul id="menu-menu-1" class="klbth-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-40 current_page_item  menu-item-3847">
                        <a href="{{route('index')}}">
                            {{__("lan.home")}}
                        </a>
                    </li>
                    <li class="mega-menu menu-item menu-item-type-post_type menu-item-object-page  menu-item-3836">
                        <a href="{{route('index')}}">
                            {{__("lan.Shop")}}
                        </a>
                    </li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3673"><a href="https://klbtheme.com/partdo/product-category/tires-wheels/">Tires &amp; Wheels</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-3674"><a href="https://klbtheme.com/partdo/product-category/interior-accessories/">Interior Accessories</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3843"><a href="https://klbtheme.com/partdo/blog/">Blog</a></li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3844"><a href="https://klbtheme.com/partdo/contact/">Contact</a></li>
                </ul>
            </nav>
            <span class="drawer-heading">{{__("lan.Category Menu")}}</span>
            <nav class="klbth-menu-wrapper vertical">
                <span class="offcanvas-heading"></span>
                <nav class="site-nav vertical categories">
                    <ul id="category-menu2" class="klbth-menu ">
                        
                    </ul>
                </nav><!-- site-nav -->
            </nav>

            <span class="drawer-heading">CONTACT DETAILS</span>
            <nav class="drawer-contacts">
                <ul>
                    <li class="contact-item"> <span class="contact-icon"> <i class="klbth-icon-phone-squared"></i></span>
                        <p class="contact-detail">555-555-5555</p>
                        <div class="contact-description">You can call anytime from 9 am to 6 pm.</div>
                    </li>
                    <li class="contact-item"> <span class="contact-icon"> <i class="klbth-icon-envelope-filled"></i></span>
                        <p class="contact-detail">info@partdotheme.com</p>
                        <div class="contact-description">The e-mail you sent will be returned as soon as possible.</div>
                    </li>

                </ul>
            </nav>

        </div>
        <div class="site-drawer-row site-drawer-footer">
            <div class="site-copyright">
                <p>Copyright 2024 © Partdo WordPress Theme. All right reserved. Powered by KLBTheme.</p>
            </div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 438px; left: 334px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 153px;"></div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 438px; right: -5px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 153px;"></div>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 438px; right: -5px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 153px;"></div>
        </div>
    </div>
</div>


<style>
    .btn_header{
        transition: .6s ;
    }
    .btn_header:hover{
        letter-spacing: 1.5px; 
        transition: .6s ;
    }
    /* From Uiverse.io by neerajbaniwal */ 
    .btn-shine {
        padding: 12px 0px;
        text-transform: capitalize ; 
        color: #0089c5;
        background: linear-gradient(to right, white 0, #0089c5 10%, #0089c5 20%);
        background-position: 0;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: shine 3s infinite linear;
        animation-fill-mode: forwards;
        -webkit-text-size-adjust: none;
        font-weight: 600;
        font-size: 16px;
        text-decoration: none;
        white-space: nowrap;
        font-family: "Poppins", sans-serif;
    }

    
    /* From Uiverse.io by neerajbaniwal */ 
    .btn-shine2 {
        padding: 12px 0px;
        text-transform: capitalize ; 
        color: #ffffff;
        background: linear-gradient(to right, white 0, #0089c5 10%, #ffffff 20%);
        background-position: 0;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: shine 3s infinite linear;
        animation-fill-mode: forwards;
        -webkit-text-size-adjust: none;
        font-weight: 600;
        font-size: 16px;
        text-decoration: none;
        white-space: nowrap;
        font-family: "Poppins", sans-serif;
    }
    @-moz-keyframes shine {
    0% {
        background-position: 0;
    }
    60% {
        background-position: 180px;
    }
    100% {
        background-position: 180px;
    }
    }
    @-webkit-keyframes shine {
    0% {
        background-position: 0;
    }
    60% {
        background-position: 180px;
    }
    100% {
        background-position: 180px;
    }
    }
    @-o-keyframes shine {
    0% {
        background-position: 0;
    }
    60% {
        background-position: 180px;
    }
    100% {
        background-position: 180px;
    }
    }
    @keyframes shine {
    0% {
        background-position: 0;
    }
    60% {
        background-position: 180px;
    }
    100% {
        background-position: 180px;
    }
    }

</style>


<script src="{{url('jquery-3.6.1.js')}}"></script>



<script>
  
    
    function cart_shop (){
        const div = document.querySelectorAll(".cart-dropdown-wrapper") ; 
        $.ajax({
            type:"post",
            url: "{{   route('get_cart_shop_web')   }}",
            data: {
            "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
                for (let i = 0; i < div.length; i++) {
                    div[i].innerHTML = data ;
                }
                
            },
        });
   }
  

  
    function categories (){
     const div = document.querySelector("#category-menu") ; 
     const div2 = document.querySelector("#category-menu2") ; 
     $.ajax({
         type:"post",
         url: "{{   route('categories')   }}",
         data: {
           "_token" : "{{csrf_token()}}"
         },            
         success: function (data){
            div.innerHTML = data ;
            div2.innerHTML = data ;
         },
     });
   }

  




    function shop_add_cart (id){
        
        const div = document.getElementById("product_shop") ; 
        if(id != ""){
            $.ajax({
                type:"post",
                url: "{{   route('shop_add_cart')   }}",
                data: {
                    "_token" : "{{csrf_token()}}",
                    "product_id" : id
                },            
                success: function (data){
                    console.log(data);
                    
                    if(data.status_code == 200){
                        ask("{{__('msg.Cart product')}}" , "{{__('msg.success add product')}}", "{{__('lan.Proceed to checkout')}}", "{{__('msg.continue shopping')}}", "{{route('checkout')}}");
                        cart_shop(); 
                    }else{
                        msg(data.msg , "{{__('msg.alert')}}", 'error');
                    }
                },
            });
        }
    }

   
   
    function remove_cart (id, page = "cart_header"){
        $.ajax({
            type:"post",
            url: "{{   route('remove_cart_web')   }}",
            data: {
            "_token" : "{{csrf_token()}}",
            "id" : id
            },            
            success: function (data){
                if(page == 'cart_header'){
                    cart_shop();
                }else{
                    cart_shop_data();
                }
            },
        });
    }    


   cart_shop(); 
   categories();

</script>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script>
    AOS.init();
</script>




