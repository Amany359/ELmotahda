<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{url('admin/assets/images/logos/favicon.png')}}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{url('admin/assets/css/styles.css')}}" />

    <title>Shop</title>
</head>

<body class="link-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{url('admin/assets/images/logos/favicon.png')}}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        @include("Admin.layouts.header")
        <!--  Sidebar End -->
        <div class="page-wrapper">
          @include("Admin.layouts.full_header")
            

            <div class="body-wrapper">
                <div class="container-fluid">
                    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                        <div class="card-body px-4 py-3">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <h4 class="fw-semibold mb-8">Shop</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none" href="{{route('index')}}">Home</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Shop</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-3">
                                    <div class="text-center mb-n5">
                                        <img src="{{url('admin/assets/images/breadcrumb/ChatBc.png')}}" alt="modernize-img" class="img-fluid mb-n4" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card position-relative overflow-hidden">
                        <div class="shop-part d-flex w-100">
                            <div class="shop-filters flex-shrink-0 border-end d-none d-lg-block" id="filter_options">

                              

                            </div>
                            <div class="card-body p-4 pb-0">
                                <div class="d-flex justify-content-between align-items-center gap-6 mb-4">
                                    <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas" href="#filtercategory" role="button" aria-controls="filtercategory">
                                        <i class="ti ti-menu-2 fs-6"></i>
                                    </a>
                                    <h5 class="fs-5 mb-0 d-none d-lg-block">Products</h5>
                                    <form class="position-relative">
                                        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Product">
                                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                                    </form>
                                </div>
                                <div class="row" id="product_shop">

                                
                                </div>
                            </div>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="filtercategory" aria-labelledby="filtercategoryLabel">
                                <div class="offcanvas-body shop-filters w-100 p-0">
                                    <ul class="list-group pt-2 border-bottom rounded-0">
                                        <h6 class="my-3 mx-4">Filter by Category</h6>
                                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                                                <i class="ti ti-circles fs-5"></i>All
                                            </a>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                                                <i class="ti ti-hanger fs-5"></i>Fashion
                                            </a>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                                                <i class="ti ti-notebook fs-5"></i>
                                                </i>Books
                                            </a>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                                                <i class="ti ti-mood-smile fs-5"></i>Toys
                                            </a>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                                                <i class="ti ti-device-laptop fs-5"></i>Electronics
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-group pt-2 border-bottom rounded-0">
                                        <h6 class="my-3 mx-4">Sort By</h6>
                                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                                                <i class="ti ti-ad-2 fs-5"></i>Newest
                                            </a>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                                                <i class="ti ti-sort-ascending-2 fs-5"></i>Price: High-Low
                                            </a>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                                                <i class="ti ti-sort-descending-2 fs-5"></i>
                                                </i>Price: Low-High
                                            </a>
                                        </li>
                                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1" href="javascript:void(0)">
                                                <i class="ti ti-ad-2 fs-5"></i>Discounted
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="by-gender border-bottom rounded-0">
                                        <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Gender</h6>
                                        <div class="pb-4 px-4">
                                            <div class="form-check py-2 mb-0">
                                                <input class="form-check-input p-2" type="radio" name="exampleRadios" id="exampleRadios10" value="option1" checked>
                                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios10">
                                                    All
                                                </label>
                                            </div>
                                            <div class="form-check py-2 mb-0">
                                                <input class="form-check-input p-2" type="radio" name="exampleRadios" id="exampleRadios11" value="option1">
                                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios11">
                                                    Men
                                                </label>
                                            </div>
                                            <div class="form-check py-2 mb-0">
                                                <input class="form-check-input p-2" type="radio" name="exampleRadios" id="exampleRadios12" value="option1">
                                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios12">
                                                    Women
                                                </label>
                                            </div>
                                            <div class="form-check py-2 mb-0">
                                                <input class="form-check-input p-2" type="radio" name="exampleRadios" id="exampleRadios13" value="option1">
                                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios13">
                                                    Kids
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="by-pricing border-bottom rounded-0">
                                        <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Pricing</h6>
                                        <div class="pb-4 px-4">
                                            <div class="form-check py-2 mb-0">
                                                <input class="form-check-input p-2" type="radio" name="exampleRadios" id="exampleRadios14" value="option1" checked>
                                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios14">
                                                    All
                                                </label>
                                            </div>
                                            <div class="form-check py-2 mb-0">
                                                <input class="form-check-input p-2" type="radio" name="exampleRadios" id="exampleRadios15" value="option1">
                                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios15">
                                                    0-50
                                                </label>
                                            </div>
                                            <div class="form-check py-2 mb-0">
                                                <input class="form-check-input p-2" type="radio" name="exampleRadios" id="exampleRadios16" value="option1">
                                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios16">
                                                    50-100
                                                </label>
                                            </div>
                                            <div class="form-check py-2 mb-0">
                                                <input class="form-check-input p-2" type="radio" name="exampleRadios" id="exampleRadios17" value="option1">
                                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios17">
                                                    100-200
                                                </label>
                                            </div>
                                            <div class="form-check py-2 mb-0">
                                                <input class="form-check-input p-2" type="radio" name="exampleRadios" id="exampleRadios18" value="option1">
                                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios18">
                                                    Over 200
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="by-colors border-bottom rounded-0">
                                        <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Colors</h6>
                                        <div class="pb-4 px-4">
                                            <ul class="list-unstyled d-flex flex-wrap align-items-center gap-2 mb-0">
                                                <li class="shop-color-list">
                                                    <a class="shop-colors-item rounded-circle d-block shop-colors-1" href="javascript:void(0)"></a>
                                                </li>
                                                <li class="shop-color-list">
                                                    <a class="shop-colors-item rounded-circle d-block shop-colors-2" href="javascript:void(0)"></a>
                                                </li>
                                                <li class="shop-color-list">
                                                    <a class="shop-colors-item rounded-circle d-block shop-colors-3" href="javascript:void(0)"></a>
                                                </li>
                                                <li class="shop-color-list">
                                                    <a class="shop-colors-item rounded-circle d-block shop-colors-4" href="javascript:void(0)"></a>
                                                </li>
                                                <li class="shop-color-list">
                                                    <a class="shop-colors-item rounded-circle d-block shop-colors-5" href="javascript:void(0)"></a>
                                                </li>
                                                <li class="shop-color-list">
                                                    <a class="shop-colors-item rounded-circle d-block shop-colors-6" href="javascript:void(0)"></a>
                                                </li>
                                                <li class="shop-color-list">
                                                    <a class="shop-colors-item rounded-circle d-block shop-colors-7" href="javascript:void(0)"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <a href="javascript:void(0)" class="btn btn-primary w-100">Reset Filters</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function handleColorTheme(e) {
                    document.documentElement.setAttribute("data-color-theme", e);
                }
            </script>
            @include("Admin.layouts.theme")
        </div>
        
        @include("Admin.layouts.cart")
        
        
    </div>

    <style>
        .removed {
        transition: 1s;
        width: 0px;
        }
    </style>


    <div class="dark-transparent sidebartoggler"></div>
    <script src="{{url('jquery-3.6.1.js')}}"></script>
    <!-- Import Js Files -->
    <script src="{{url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('admin/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/app.init.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/theme.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/app.min.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/sidebarmenu.js')}}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>


    <script>

      function get_products (){
     
        const div = document.getElementById("product_shop") ; 
        $.ajax({
            type:"post",
            url: "{{   route('get_products')   }}",
            data: {
              "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
              div.innerHTML = data ;
            },
        });
      }

      function filter_options (){
        const div = document.getElementById("filter_options") ; 
        $.ajax({
            type:"post",
            url: "{{   route('filter_options')   }}",
            data: {
              "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
              div.innerHTML = data ;
            },
        });
      }

      filter_options();
      get_products();
      let keys = {};

      function product_filter (key, value, element = "ss"){
        if(key in keys && keys[key] == value){
            delete keys[key];
            if(element != "ss"){
                element.style.cssText = 'border: none'; 
            }
        }else{
            let fil_  = document.querySelectorAll(".fil_" + key) ; 
            for (let x = 0; x < fil_.length; x++) {
                fil_[x].style.cssText = 'border:none ; '
            }


            keys[key] = value ; 
            if(element != "ss"){
                element.style.cssText = 'border: 1px solid red !important'; 
            }
        }
    
   
        let product_filter = document.querySelectorAll(".product_filter"); 
        for (let i = 0; i < product_filter.length; i++) {
            product_filter[i].style.display = "block" ;
            for (let [key_, value_] of Object.entries(keys)) {
                if(product_filter[i].getAttribute("data-" + key_) == value_){
                    product_filter[i].style.display = "block" ;
                    break ;
                }else{
                    product_filter[i].style.display = "none" ;
                }
            }
        }
        

      }


      function reset_products (){
        let rounded = document.querySelectorAll(".rounded") ; 
        for (let x = 0; x < rounded.length; x++) {
            rounded[x].style.cssText = 'border:none;' ; 
            
        }

        let product_filter = document.querySelectorAll(".product_filter"); 
        for (let i = 0; i < product_filter.length; i++) {
            product_filter[i].style.display = "block" ;

        }
      }



    </script>
</body>

</html>