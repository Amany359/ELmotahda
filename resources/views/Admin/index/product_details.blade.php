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

  <title>Product Details</title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{url('admin/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}">
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
      <!--  Header Start -->
      @include("Admin.layouts.full_header")

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Product Detail</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{route('Dashboard')}}">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Product Detail</li>
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




          {{ !$images = explode("_", $product->images) }}


          <div class="shop-detail">
            <div class="card shadow-none border">
              <div class="card-body p-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div id="sync1" class="owl-carousel owl-theme">
                      @for($i =0; $i < count($images); $i++)
                        <div class="item rounded-4 overflow-hidden">
                          <img src="{{url("images/product/$images[$i]")}}" alt="modernize-img" class="img-fluid">
                        </div>
                      @endfor
                      
                      
                    </div>
                    
                    <div id="sync2" class="owl-carousel owl-theme">
                      @for($i =0; $i < count($images); $i++)
                        <div class="item rounded-4 overflow-hidden">
                          <img src="{{url("images/product/$images[$i]")}}" alt="modernize-img" class="img-fluid">
                        </div>
                        
                      @endfor
                    
                      
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="shop-content">
                      <div class="d-flex align-items-center gap-2 mb-2">
                        @if($product->quantity >= 1)
                          <span class="badge text-bg-success fs-2 fw-semibold">
                            In Stock
                          </span>
                          @else
                          <span class="badge text-bg-danger fs-2 fw-semibold">
                            Out of stock
                          </span>
                        @endif
                      </div>
                      <h4>  {{ $product->product_name }} </h4>
                      <h4 class="mb-3">
                        <del class="fs-5 text-muted">
                          @if(strpos($product->discount, "%") !== false)
                            {{!$discount = str_ireplace("%", "", $product->discount) }} 
                            {{ ! $per = (  100 -  $discount ) / 100 }}
                            {{ $product->product_price / $per }}
                          @elseif($product->discount != "0")
                              {{ $product->discount + $product->product_price }}
                          @endif
                        </del>
                        {{$product->product_price}}
                      </h4>
                      <div class="d-flex align-items-center gap-8 pb-4 border-bottom">
                        <ul class="list-unstyled d-flex align-items-center mb-0">
                          <li>
                            <a class="me-1" href="javascript:void(0)">
                              <i class="ti ti-star text-warning fs-4"></i>
                            </a>
                          </li>
                          <li>
                            <a class="me-1" href="javascript:void(0)">
                              <i class="ti ti-star text-warning fs-4"></i>
                            </a>
                          </li>
                          <li>
                            <a class="me-1" href="javascript:void(0)">
                              <i class="ti ti-star text-warning fs-4"></i>
                            </a>
                          </li>
                          <li>
                            <a class="me-1" href="javascript:void(0)">
                              <i class="ti ti-star text-warning fs-4"></i>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)">
                              <i class="ti ti-star text-warning fs-4"></i>
                            </a>
                          </li>
                        </ul>
                        <a href="javascript:void(0)">(236 reviews)</a>
                      </div>

                      <br>

                        <div class="d-flex align-items-center gap-8 " style="padding-bottom: 22px;">
                          @foreach ($options as $option)
                          @if($option->option_key == "color")
                              <h6 class="mb-0 fs-4" style="text-transform: capitalize">{{$option->option_key}}:</h6>
                              <a class="rounded-circle d-block text-bg-primary p-6" style="background-color: {{$option->value}} !important ; " href="javascript:void(0)"></a>
                            @else                              
                                <h6 class="mb-0 fs-4" style="text-transform: capitalize">{{str_ireplace( "_", " ", $option->option_key)}}:</h6>
                                <a class="d-block p-6" >{{$option->value}}</a>
                            @endif
                            @endforeach
                        </div>




                      <div class="d-flex align-items-center gap-7 pb-7 mb-7 border-bottom">
                        <h6 class="mb-0 fs-4">QTY:</h6>
                        <div class="input-group input-group-sm rounded">


                          <input style="width: 70px !important" type="number" class=" flex-grow-0 border border-muted text-muted fs-4 fw-semibold form-control " value="1" onchange="quantity_product('{{$product->product_id}}', this)">

                          
                        </div>
                      </div>


                      <div class="d-sm-flex align-items-center gap-6 pt-8 mb-7">
                        <a href="javascript:void(0)" class="btn d-block btn-primary px-5 py-8 mb-6 mb-sm-0" onclick="add_product_cart('{{$product->product_id}}')" >Add to Cart</a>
                        <a href="javascript:void(0)" class="btn d-block btn-danger px-7 py-8" onclick="remove_product('{{$product->product_id}}')" >Delete Product</a>
                      </div>
                      @foreach($categories as $category)
                        <p class="mb-0">{{str_ireplace( "_", " ", $category->category_name)}}</p>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="card shadow-none border">
              <div class="card-body p-4">
                <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">
                      Description
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button disabled class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">
                      Reviews
                    </button>
                  </li>
                </ul>
                <div class="tab-content pt-4" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab" tabindex="0">
                    <?php echo html_entity_decode($product->desc_en); ?>
                  </div>


                  <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab" tabindex="0">
                    <div class="row">
                      <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                          <div class="card-body text-center p-4 d-flex flex-column justify-content-center">
                            <h6 class="mb-3">Average Rating</h6>
                            <h2 class="text-primary mb-3 fw-semibold fs-9">4/5</h2>
                            <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                              <li>
                                <a class="me-1" href="javascript:void(0)">
                                  <i class="ti ti-star text-warning fs-6"></i>
                                </a>
                              </li>
                              <li>
                                <a class="me-1" href="javascript:void(0)">
                                  <i class="ti ti-star text-warning fs-6"></i>
                                </a>
                              </li>
                              <li>
                                <a class="me-1" href="javascript:void(0)">
                                  <i class="ti ti-star text-warning fs-6"></i>
                                </a>
                              </li>
                              <li>
                                <a class="me-1" href="javascript:void(0)">
                                  <i class="ti ti-star text-warning fs-6"></i>
                                </a>
                              </li>
                              <li>
                                <a href="javascript:void(0)">
                                  <i class="ti ti-star text-warning fs-6"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                          <div class="card-body p-4 d-flex flex-column justify-content-center">
                            <div class="d-flex align-items-center gap-9 mb-3">
                              <span class="flex-shrink-0 fs-2">1 Stars</span>
                              <div class="progress bg-primary-subtle w-100 h-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                              </div>
                              <h6 class="mb-0">(485)</h6>
                            </div>
                            <div class="d-flex align-items-center gap-9 mb-3">
                              <span class="flex-shrink-0 fs-2">2 Stars</span>
                              <div class="progress bg-primary-subtle w-100 h-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                              </div>
                              <h6 class="mb-0">(215)</h6>
                            </div>
                            <div class="d-flex align-items-center gap-9 mb-3">
                              <span class="flex-shrink-0 fs-2">3 Stars</span>
                              <div class="progress bg-primary-subtle w-100 h-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                              </div>
                              <h6 class="mb-0">(110)</h6>
                            </div>
                            <div class="d-flex align-items-center gap-9 mb-3">
                              <span class="flex-shrink-0 fs-2">4 Stars</span>
                              <div class="progress bg-primary-subtle w-100 h-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                              </div>
                              <h6 class="mb-0">(620)</h6>
                            </div>
                            <div class="d-flex align-items-center gap-9">
                              <span class="flex-shrink-0 fs-2">5 Stars</span>
                              <div class="progress bg-primary-subtle w-100 h-4">
                                <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%;"></div>
                              </div>
                              <h6 class="mb-0">(160)</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                          <div class="card-body p-4 d-flex flex-column justify-content-center">
                            <button type="button" class="btn btn-outline-primary d-flex align-items-center gap-2 mx-auto">
                              <i class="ti ti-pencil fs-7"></i>Write an Review
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
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
  <div class="dark-transparent sidebartoggler"></div>
  <script src="{{url('admin/assets/js/vendor.min.js')}}"></script>
  <!-- Import Js Files -->
  <script src="{{url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/app.init.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/theme.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/app.min.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/sidebarmenu.js')}}"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="{{url('admin/assets/libs/owl.carousel/dist/owl.carousel.min.js')}}"></script>
  <script src="{{url('admin/assets/js/apps/productDetail.js')}}"></script>
</body>

</html>