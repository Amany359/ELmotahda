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

    <title>Dashboard</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{url('admin/assets/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}" />




</head>

<body>


    
    <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body hstack align-items-start gap-6">
            <i class="ti ti-alert-circle fs-6"></i>
            <div>
                <h5 class="text-white fs-3 mb-1">Welcome back {{$admin->username}}</h5>
                <h6 class="text-white fs-2 mb-0">Easy to use!!!</h6>
            </div>
            <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
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
                    <!--  Owl carousel -->
                    <div class="owl-carousel counter-carousel owl-theme">
                        <div class="item">
                            <div class="card border-0 zoom-in bg-primary-subtle shadow-none">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{url('admin/assets/images/svgs/icon-user-male.svg')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                        <p class="fw-semibold fs-3 text-primary mb-1">
                                            {{__("lan.Employees")}}
                                        </p>
                                        <h5 class="fw-semibold text-primary mb-0">{{count($admins)}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 zoom-in bg-warning-subtle shadow-none">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{url('admin/assets/images/svgs/icon-briefcase.svg')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                        <p class="fw-semibold fs-3 text-warning mb-1">{{__("lan.Clients")}}</p>
                                        <h5 class="fw-semibold text-warning mb-0">{{count($users)}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{url('admin/assets/images/svgs/icon-mailbox.svg')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                        <p class="fw-semibold fs-3 text-info mb-1">{{__("lan.products")}}</p>
                                        <h5 class="fw-semibold text-info mb-0">{{count($products)}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card border-0 zoom-in bg-success-subtle shadow-none">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{url('admin/assets/images/svgs/icon-speech-bubble.svg')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                        <p class="fw-semibold fs-3 text-success mb-1">{{__("lan.Gallery")}}</p>
                                        <h5 class="fw-semibold text-success mb-0">{{count($Gallary)}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card border-0 zoom-in bg-info-subtle shadow-none">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{url('admin/assets/images/svgs/icon-connect.svg')}}" width="50" height="50" class="mb-3" alt="modernize-img" />
                                        <p class="fw-semibold fs-3 text-info mb-1">{{__("lan.Orders")}}</p>
                                        <h5 class="fw-semibold text-info mb-0">{{count($orders)}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--  Row 1 -->

                    <div class="row">

                        <div class="col-lg-8 d-flex align-items-stretch">
                          <div class="card w-100 bg-primary-subtle overflow-hidden shadow-none">
                            <div class="card-body position-relative">
                              <div class="row">
                                <div class="col-sm-7">
                                  <div class="d-flex align-items-center mb-7">
                                    <div class="rounded-circle overflow-hidden me-6">
                                      <img src="{{url('admin/assets/images/profile/user-1.jpg')}}" alt="modernize-img" width="40" height="40">
                                    </div>
                                    <h5 class="fw-semibold mb-0 fs-5">{{__("lan.Technical support info")}}</h5>
                                  </div>
                                  <div class="d-flex align-items-center">
                                    <div class="border-end pe-4 border-muted border-opacity-10">
                                      <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">
                                        <a href="https://yossry.com" style="font-size:21px; " target="_blank">
                                            Yossry.com
                                        </a>
                                      </h3>
                                      <p class="mb-0 text-dark">My Website</p>
                                    </div>
                                    <div class="ps-4">
                                      <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">
                                            <a href="https://api.whatsapp.com/send?phone=201122488083" style="font-size:21px; " target="_blank">
                                                Whatsapp
                                            </a>
                                      </h3>
                                      <p class="mb-0 text-dark">My Whatsapp</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-5">
                                  <div class="welcome-bg-img mb-n7 text-end">
                                    <img src="{{url('admin/assets/images/backgrounds/welcome-bg.svg')}}" alt="modernize-img" class="img-fluid">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <div class="card bg-primary-subtle shadow-none">
                              <div class="card-body p-4">
                                <div class="d-flex align-items-center">
                                  <div class="round rounded text-bg-primary d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                                        <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                                    </svg>
                                  </div>
                                  <h6 class="mb-0 ms-3">{{__("lan.Shop")}}</h6>
                                  <div class="ms-auto text-primary d-flex align-items-center">
                                    <i class="ti ti-trending-up text-primary fs-6 me-1"></i>
                                    <span class="fs-2 fw-bold">{{__("lan.Month")}} {{$curent_month}}</span>
                                  </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                  <h3 class="mb-0 fw-semibold fs-7" id="comming_soon">
                                    <div class="card2" style="    width: 9rem;" > 
                                        <div class="card2__skeleton card2__title"></div>
                                    </div>
                                  </h3>
                                  <span class="fw-bold">
                                    <a href="">
                                        {{__("lan.For more details")}}
                                    </a>
                                  </span>
                                </div>
                              </div>
                            </div>
                        </div>

                    </div>



                    <div class="row">



           

                        <div class="col-lg-4 d-flex align-items-stretch flex-column">
                            <div class="row">
                                <!-- visitors -->
                                <div class="col-sm-6 d-flex align-items-stretch">
                                    <div class="card w-100">
                                        <div class="card-body pb-0 mb-xxl-4 pb-1">
                                            <p class="mb-1 fs-3 ">{{__("lan.visitors")}}</p>
                                            <h4 class="fw-semibold fs-7 visitors">
                                                <div>
                                                    <div class="card2" style="    width: 9rem;" > 
                                                        <div class="card2__skeleton card2__title"></div>
                                                    </div>
                                                </div>
                                            </h4>
                                            <div class="d-flex align-items-center mb-3 rate_vistors">
                                              
                                            </div>
                                        </div>
                                        <div id="visitors"></div>
                                    </div>
                                </div>
                                <!-- reviews -->
                                <div class="col-sm-6 d-flex align-items-stretch">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <p class="mb-1 fs-3">{{__("lan.Reviews")}}</p>
                                            <h4 class="fw-semibold fs-7 reviews">
                                                <div class="card2" style="    width: 9rem;" > 
                                                    <div class="card2__skeleton card2__title"></div>
                                                </div>
                                            </h4>
                                            <div class="d-flex align-items-center mb-3 rate_reviews">
                                                
                                            </div>
                                            <div id="reviews"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Comming Soon -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-7 pb-2">
                                        <div class="me-3 pe-1">
                                            <img src="{{url('admin/assets/images/profile/user-2.jpg')}}" class="shadow-warning rounded-2" alt="modernize-img" width="72" height="72" />
                                        </div>
                                        <div>
                                            <h5 class="fw-semibold fs-5 mb-2">
                                                {{__("lan.New Members")}}
                                            </h5>
                                            <p class="fs-3 mb-0">{{__("lan.Month")}} {{$curent_month}}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <ul class="hstack mb-0 all_users">
                                           
                                         
                                        </ul>
                                        <a href="javascript:void(0)" class="text-bg-light rounded py-1 px-8 d-flex align-items-center text-decoration-none">
                                            <i class="ti ti-message-2 fs-6 text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-stretch">
                            <div class="card text-bg-primary border-0 w-100">
                                <div class="card-body pb-0">
                                    <h5 class="fw-semibold mb-1 text-white card-title">
                                        {{__("lan.Total income per year")}}
                                    </h5>
                                    <p class="fs-3 mb-3 text-white">{{__("lan.Overview")}} {{$curent_year}}</p>
                                    <div class="text-center mt-3">
                                        <img src="{{url('admin/assets/images/backgrounds/piggy.png')}}" class="img-fluid" alt="modernize-img" />
                                    </div>
                                </div>
                                <div class="card mx-2 mb-2 mt-n2">
                                    <div class="card-body">
                                        <div class="mb-7 pb-1">
                                            <div class="d-flex justify-content-between align-items-center mb-6">
                                                <div>
                                                    <h6 class="mb-1 fs-4 fw-semibold">{{__("lan.Total monthly income")}}</h6>
                                                    <div class="fs-3 mb-0" id="total_monthly">
                                                        <div class="card2" style="    width: 9rem;" > 
                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="badge bg-primary-subtle text-primary fw-semibold fs-3" id="total_monthly_percent" >0%</span>
                                                </div>
                                            </div>
                                            <div class="progress bg-primary-subtle h-4">
                                                <div class="progress-bar w-0" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex justify-content-between align-items-center mb-6">
                                                <div>
                                                    <h6 class="mb-1 fs-4 fw-semibold">{{__("lan.Annual income")}}</h6>
                                                    <div class="fs-3 mb-0" id="annual_income">
                                                        <div class="card2" style="    width: 9rem;" > 
                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div>
                                                    <span class="badge bg-secondary-subtle text-secondary fw-bold fs-3" id="annual_income_percent" >0%</span>
                                                </div>
                                            </div>
                                            <div class="progress bg-secondary-subtle h-4">
                                                <div class="progress-bar text-bg-secondary w-0" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold">{{__("lan.Weekly Stats")}}</h5>
                                    <p class="card-subtitle mb-0">{{__("lan.Overview")}} {{$curent_year}}</p>
                                    <div id="stats" class="my-4"></div>
                                    <div class="position-relative">


                                        <div class="d-flex align-items-center justify-content-between mb-7">
                                            <div class="d-flex">
                                                <div class="p-6 bg-primary-subtle rounded me-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-grid-dots text-primary fs-6"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fs-4 fw-semibold">{{__("lan.Engineering Management")}}</h6>
                                                    <p class="fs-3 mb-0">{{__("lan.statistics")}} {{__("lan.Month")}} {{$curent_month}}</p>
                                                </div>
                                            </div>
                                            <div class="bg-primary-subtle badge">
                                                <div class="fs-3 text-primary fw-semibold mb-0 Engineering">
                                                    <div class="card2" style="    width: 3rem;padding: 0px;" > 
                                                        <div class="card2__skeleton card2__title"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex align-items-center justify-content-between mb-7">
                                            <div class="d-flex">
                                                <div class="p-6 bg-success-subtle rounded me-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-grid-dots text-success fs-6"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fs-4 fw-semibold">{{__("lan.Find the right")}}</h6>
                                                    <p class="fs-3 mb-0">{{__("lan.statistics")}} {{__("lan.Month")}} {{$curent_month}}</p>
                                                </div>
                                            </div>
                                            <div class="bg-success-subtle badge">
                                                <div class="fs-3 text-success fw-semibold mb-0 Find">
                                                    <div class="card2" style="    width: 3rem;padding: 0px;" > 
                                                        <div class="card2__skeleton card2__title"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex">
                                                <div class="p-6 bg-primary-subtle rounded me-6 d-flex align-items-center justify-content-center">
                                                    <i class="ti ti-grid-dots text-primary fs-6"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 fs-4 fw-semibold">
                                                        {{__("lan.Contact")}}
                                                    </h6>
                                                    <p class="fs-3 mb-0">{{__("lan.statistics")}} {{__("lan.Month")}} {{$curent_month}}</p>
                                                </div>
                                            </div>
                                            <div class="bg-primary-subtle badge">
                                                <div class="fs-3 text-primary fw-semibold mb-0 Contact">
                                                    <div class="card2" style="    width: 3rem;padding: 0px;" > 
                                                        <div class="card2__skeleton card2__title"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        <div class="col-lg-16 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
                                        <div class="mb-3 mb-sm-0">
                                            <h4 class="card-title fw-semibold">{{__("lan.Recent Orders")}}</h4>
                                            <p class="card-subtitle">{{__("lan.company_name")}}</p>
                                        </div>
                                        <div>
                                            <select class="form-select" name="month" onchange="change_month(this)" >
                                                <option value="">{{__('lan.Select month')}}</option>
                                                <option value="01">{{__('lan.Jan')}}</option>
                                                <option value="02">{{__('lan.Feb')}}</option>
                                                <option value="03">{{__('lan.Mar')}}</option>
                                                <option value="04">{{__('lan.Apr')}}</option>
                                                <option value="05">{{__('lan.May')}}</option>
                                                <option value="06">{{__('lan.Jun')}}</option>
                                                <option value="07">{{__('lan.Jul')}}</option>
                                                <option value="08">{{__('lan.Aug')}}</option>
                                                <option value="09">{{__('lan.Sep')}}</option>
                                                <option value="10">{{__('lan.Oct')}}</option>
                                                <option value="11">{{__('lan.Nov')}}</option>
                                                <option value="12">{{__('lan.Dec')}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-middle text-nowrap mb-0">
                                            <thead>
                                                <tr class="text-muted fw-semibold">
                                                    <th scope="col" class="ps-0">{{__("lan.image")}}</th>
                                                    <th scope="col">{{__("lan.order quantity")}}</th>
                                                    <th scope="col">{{__("lan.Process")}}</th>
                                                    <th scope="col">{{__("lan.total")}}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="border-top" id="last_orders">

                                                <tr>
                                                    <td class="ps-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="card2" style="    width: 9rem;" > 
                                                                <div class="card2__skeleton card2__title" style="width:40px ;height:40px;     border-radius: 50%;"></div>
                                                            </div>

                                                            <div>
                                                                <div class="card2" style="    width: 9rem;" > 
                                                                    <div class="card2__skeleton card2__title" style="margin-bottom: 10px;"></div>
                                                                    <div class="card2__skeleton card2__title"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="card2" style="    width: 9rem;" > 

                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card2" style="    width: 9rem;" > 
                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card2" style="    width: 9rem;" > 
                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-0">
                                                        <div class="d-flex align-items-center">
                                                            
                                                            
                                                            <div class="card2" style="    width: 9rem;" > 
                                                                <div class="card2__skeleton card2__title" style="width:40px ;height:40px;     border-radius: 50%;"></div>
                                                            </div>

                                                            <div>
                                                                <div class="card2" style="    width: 9rem;" > 
                                                                    <div class="card2__skeleton card2__title" style="margin-bottom: 10px;"></div>
                                                                    <div class="card2__skeleton card2__title"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="card2" style="    width: 9rem;" > 

                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card2" style="    width: 9rem;" > 
                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card2" style="    width: 9rem;" > 
                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-0">
                                                        <div class="d-flex align-items-center">
                                                            
                                                            
                                                            <div class="card2" style="    width: 9rem;" > 
                                                                <div class="card2__skeleton card2__title" style="width:40px ;height:40px;     border-radius: 50%;"></div>
                                                            </div>

                                                            <div>
                                                                <div class="card2" style="    width: 9rem;" > 
                                                                    <div class="card2__skeleton card2__title" style="margin-bottom: 10px;"></div>
                                                                    <div class="card2__skeleton card2__title"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <div class="card2" style="    width: 9rem;" > 

                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card2" style="    width: 9rem;" > 
                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="card2" style="    width: 9rem;" > 
                                                            <div class="card2__skeleton card2__title"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                              
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>

                function handleColorTheme(e) {
                    localStorage.setItem("handleColorTheme", e);
                    document.documentElement.setAttribute("data-color-theme", e);
                }

                if(localStorage.getItem("handleColorTheme") != undefined && localStorage.getItem("handleColorTheme") != null ){
                    handleColorTheme(`${localStorage.getItem("handleColorTheme")}`);
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
    <script src="{{url('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{url('admin/assets/js/dashboards/dashboard.js')}}"></script>


    <script>
        
        function change_month(ele){
            ele.setAttribute("disabled", "disabled");
            $.ajax({
                type:"post",
                url: "{{   route('get_orders_month')   }}",
                data: {
                    "_token" : "{{csrf_token()}}",
                    "month" : ele.value
                },
                error: function(){
                    alert("برجاء تنبية الدعم التقني 01122488083"); 
                },
                success: function (data){
                    ele.removeAttribute("disabled");                                                         
                    document.getElementById("last_orders").innerHTML = data ;
                },
            });
        }


        function get_analysis(){
            $.ajax({
                type:"post",
                url: "{{   route('dashboard_analysis')   }}",
                data: {
                    "_token" : "{{csrf_token()}}",
                },
                error: function(){
                    
                    alert("برجاء تنبية الدعم التقني 01122488083"); 
                },
                success: function (data){                                                            
                    document.getElementById("total_monthly").innerHTML = data.total_monthly + " EGP" ;
                    document.getElementById("annual_income").innerHTML = data.annual_income + " EGP" ;
                    document.querySelector(".visitors").innerHTML = data.visitors ; 
                    document.querySelector(".Engineering").innerHTML = data.engineering_management + "+" ; 
                    document.querySelector(".Contact").innerHTML = data.contact_us + "+" ; 
                    document.querySelector(".all_users").innerHTML = data.users ; 
                    document.querySelector(".Find").innerHTML = data.find_air + "+" ; 
                    document.querySelector(".reviews").innerHTML = data.reviews ; 
                    document.getElementById("comming_soon").innerHTML = data.comming_soon + "+" + " {{__('lan.visitors')}}" ; 
                    if(data.rate_vistors >= 50){
                        document.querySelector(".rate_vistors").innerHTML = 
                        `<span class="me-1 rounded-circle bg-success-subtle round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                        </span>
                            <p class="text-dark fs-3 mb-0 " >
                            +${data.rate_vistors}%
                            </p>
                        ` ; 
                    }else{
                        document.querySelector(".rate_vistors").innerHTML = 
                        `<span class="me-2 rounded-circle bg-danger-subtle round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-down-right text-danger"></i>
                        </span>
                            <p class="text-dark fs-3 mb-0 " >
                            -${data.rate_vistors}%
                            </p>
                        ` ; 
                    }
                    if(data.rate_reviews >= 50){
                        document.querySelector(".rate_reviews").innerHTML = 
                        `<span class="me-1 rounded-circle bg-success-subtle round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                        </span>
                            <p class="text-dark fs-3 mb-0 " >
                            +${data.rate_reviews}%
                            </p>
                            
                        ` ; 
                    }else{
                        document.querySelector(".rate_reviews").innerHTML = 
                        `<span class="me-2 rounded-circle bg-danger-subtle round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-down-right text-danger"></i>
                        </span>
                            <p class="text-dark fs-3 mb-0 " >
                            -${data.rate_reviews}%
                            </p>
                        ` ; 
                    }
                    visitors(data.list_visitors);
                    reviews(data.list_reviews);                
                    profit(data.list_profit);                
                },
            });
        }

        function visitors (list){
            
            var visitors = {
                chart: {
                id: "sparkline3",
                type: "area",
                fontFamily: "inherit",
                foreColor: "#adb0bb",
                height: 60,
                sparkline: {
                    enabled: true,
                },
                group: "sparklines",
                },
                series: [
                {
                    name: "visitors",
                    color: "var(--bs-secondary)",
                    data: list,
                },
                ],
                stroke: {
                curve: "smooth",
                width: 2,
                },
                fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 0,
                    inverseColors: false,
                    opacityFrom: 0.12,
                    opacityTo: 0,
                    stops: [20, 180],
                },
                },

                markers: {
                size: 0,
                },
                tooltip: {
                theme: "dark",
                fixed: {
                    enabled: true,
                    position: "right",
                },
                x: {
                    show: false,
                },
                },
            };
            new ApexCharts(document.querySelector("#visitors"), visitors).render();

        }
        
        function reviews (list){
            // reviews            
            if(list.length < 2){
                list = [1, 2] ; 
            }
            var reviews = {
                series: [
                {
                    name: "",
                    data: list,
                },
                ],
                chart: {
                type: "bar",
                fontFamily: "inherit",
                foreColor: "#adb0bb",
                height: 70,

                resize: true,
                barColor: "#fff",
                toolbar: {
                    show: false,
                },
                sparkline: {
                    enabled: true,
                },
                },
                colors: ["var(--bs-primary)"],
                grid: {
                show: false,
                },
                plotOptions: {
                bar: {
                    horizontal: false,
                    startingShape: "flat",
                    endingShape: "flat",
                    columnWidth: "60%",
                    barHeight: "20%",
                    endingShape: "rounded",
                    distributed: true,
                    borderRadius: 2,
                },
                },
                dataLabels: {
                enabled: false,
                },
                stroke: {
                show: true,
                width: 2.5,
                colors: ["rgba(0,0,0,0.01)"],
                },
                xaxis: {
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                },
                },
                yaxis: {
                labels: {
                    show: false,
                },
                },
                axisBorder: {
                show: false,
                },
                fill: {
                opacity: 1,
                },
                tooltip: {
                theme: "dark",
                style: {
                    fontSize: "12px",
                },
                x: {
                    show: false,
                },
                },
            };

            var chart_column_basic = new ApexCharts(
                document.querySelector("#reviews"),
                reviews
            );
            chart_column_basic.render();

        }

        function profit (list){
            
            if(list.length < 2){
                list.push(22);
                list.push(22);
                list.push(22);
            }
            var stats = {
                chart: {
                id: "sparkline3",
                type: "area",
                height: 180,
                sparkline: {
                    enabled: true,
                },
                group: "sparklines",
                fontFamily: "inherit",
                foreColor: "#adb0bb",
                },
                series: [
                {
                    name: "Weekly Stats",
                    color: "var(--bs-primary)",
                    data: list,
                },
                ],
                stroke: {
                curve: "smooth",
                width: 2,
                },
                fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 0,
                    inverseColors: false,
                    opacityFrom: 0.2,
                    opacityTo: 0,
                    stops: [20, 180],
                },
                },

                markers: {
                size: 0,
                },
                tooltip: {
                theme: "dark",
                fixed: {
                    enabled: true,
                    position: "right",
                },
                x: {
                    show: false,
                },
                },
            };
            new ApexCharts(document.querySelector("#stats"), stats).render();
        }
        
        function last_orders(){
            $.ajax({
                type:"post",
                url: "{{   route('last_orders')   }}",
                data: {
                    "_token" : "{{csrf_token()}}",
                },
                error: function(){
                    alert("برجاء تنبية الدعم التقني 01122488083"); 
                },
                success: function (data){
                    
                    document.getElementById("last_orders").innerHTML = data ;
                },
            });
        }

        setTimeout(() => {
            get_analysis(); 
            last_orders(); 
        }, 100);
    </script>
</body>

</html>