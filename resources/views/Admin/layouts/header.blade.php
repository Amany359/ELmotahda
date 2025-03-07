@include("Admin.layouts.Message")
<aside class="left-sidebar with-vertical">
    <div><!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{route('Dashboard')}}" class="text-nowrap logo-img" style="    transform: rotateY(0deg);">
                <img src="{{url('images/logos/blue_logo.png')}}" style="direction: ltr ; width:100px; object-fit:contain" class="dark-logo" alt="Logo-Dark" />
                <img src="{{url('images/logos/none_logo.png')}}" style= "direction: ltr ;  width:100px; object-fit:contain" class="light-logo" alt="Logo-light" />
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                <i class="ti ti-x"></i>
            </a>
        </div>


        
    <style>
        
        .card2 {
            justify-content: center;
            align-items: center;
            width: 35rem;
            padding: 1rem;
            text-align: center;
            border-radius: .8rem;
            background: none;
            border: none;
        }

        .card2__skeleton {
        background-image: linear-gradient(90deg, #ccc 0px, rgb(64 61 61 / 90%) 40px, #cccccce8 80px);
        background-size: 300%;
        background-position: 100% 0;
        border-radius: inherit;
        animation: shimmer 1.5s infinite;
        }

        .card2__title {
            width: 80%;
            height: 15px;
        }

        .card2__description {
            width: 100%;
        height: 100px;
        margin-bottom: 15px;

        }

        @keyframes shimmer {
        to {
            background-position: -100% 0;
        }
        }

    </style>





        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">

                
                
                <!-- ---------------------------------- -->
                <!-- USER -->
                <!-- ---------------------------------- -->

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">{{__("lan.users")}}</span>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('users')}}" aria-expanded="false">
                        <i class="ti ti-user-circle"></i>
                        <span class="hide-menu">{{__("lan.Clients")}}</span>
                    </a>
                </li>
               


                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('sign_up_admin')}}" aria-expanded="false">
                        <i class="ti ti-user-circle"></i>
                        <span class="hide-menu">{{__("lan.Create an account")}}</span>
                    </a>
                </li>
                
                <!-- ---------------------------------- -->
                <!-- statistics -->
                <!-- ---------------------------------- -->

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">{{__("lan.statistics")}}</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-layout-grid"></i>
                        </span>
                        <span class="hide-menu">{{__("lan.statistics")}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('all_quote')}}" aria-expanded="false">
                                <i class="ti ti-notes"></i>
                                <span class="hide-menu">{{__("lan.All quote requests")}}</span>
                            </a>
                        </li>
                       
        
        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('conditioning_statistics')}}" aria-expanded="false">
                                <i class="ti ti-notes"></i>
                                <span class="hide-menu">{{__("lan.Your Air Conditioning Statistics")}}</span>
                            </a>
                        </li>
                       
        
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('contact_us_admin')}}" aria-expanded="false">
                                <i class="ti ti-notes"></i>
                                <span class="hide-menu">{{__("lan.Contact")}}</span>
                            </a>
                        </li>
                
                    </ul>
                </li>


                
                <!-- ---------------------------------- -->
                <!-- Home -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">{{__("lan.home")}}</span>
                </li>
             
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-layout-grid"></i>
                        </span>
                        <span class="hide-menu">{{__("lan.home")}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('banner')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Banner</span>
                            </a>
                        </li>
                
                        <li class="sidebar-item">
                            <a href="{{route('Photo_bar')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Photo bar</span>
                            </a>
                        </li>
                
                    </ul>
                </li>


                <!-- ---------------------------------- -->
                <!-- Gallary -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">{{__("lan.gallary")}}</span>
                </li>
          

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('gallary')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout"></i>
                        </span>
                        <span class="hide-menu">{{__("lan.gallary")}}</span>
                    </a>
                </li>

                <!-- ---------------------------------- -->
                <!-- projects -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">{{__("lan.projects")}}</span>
                </li>
          

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('add_project_page')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout"></i>
                        </span>
                        <span class="hide-menu">{{__("lan.Add Project")}}</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('porjects_admin')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout"></i>
                        </span>
                        <span class="hide-menu">{{__("lan.Our Projects")}}</span>
                    </a>
                </li>

                <!-- ---------------------------------- -->
                <!-- services -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">{{__("lan.services")}}</span>
                </li>
          

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('add_service_page')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout"></i>
                        </span>
                        <span class="hide-menu">{{__("lan.Add service")}}</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('services_admin')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout"></i>
                        </span>
                        <span class="hide-menu">{{__("lan.service")}}</span>
                    </a>
                </li>


                <!-- ---------------------------------- -->
                <!-- order -->
                <!-- ---------------------------------- -->

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">{{__("lan.Order")}}</span>
                </li>
          

                <li class="sidebar-item">
                    {{-- {{route('orders_admin')}} --}}
                    <a class="sidebar-link" href="" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="2"><rect width="14" height="17" x="5" y="4" rx="2"/><path stroke-linecap="round" d="M9 9h6m-6 4h6m-6 4h4"/></g></svg>                        </span>
                        <span class="hide-menu">{{__("lan.Orders")}}</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    {{-- {{route('shipping_areas')}} --}}
                    <a class="sidebar-link" href="" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="2"><rect width="14" height="17" x="5" y="4" rx="2"/><path stroke-linecap="round" d="M9 9h6m-6 4h6m-6 4h4"/></g></svg>                        </span>
                        <span class="hide-menu">{{__("lan.shipping area")}}</span>
                    </a>
                </li>

               
                <!-- ---------------------------------- -->
                <!-- Producat -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">E-commerce</span>
                </li>
          
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <span class="d-flex">
                        <i class="ti ti-basket"></i>
                      </span>
                      <span class="hide-menu">{{__("lan.Ecommerce")}}</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">


                        <li class="sidebar-item">
                            {{--  --}}
                            <a href="{{route('product_page')}}" class="sidebar-link">
                              <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                              </div>
                              <span class="hide-menu">{{__("lan.Add Product")}}</span>
                            </a>
                        </li>
    
                        <li class="sidebar-item">
                            {{-- --}}
                            <a href="{{route('shop_page')}}" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">{{__("lan.Shop")}}</span>
                            </a>
                        </li>


                        <li class="sidebar-item">
                            {{--  --}}
                            <a href="{{route('check_out')}}" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">{{__("lan.checkout")}}</span>
                            </a>
                        </li>



                    </ul>
                </li>

                <!-- ---------------------------------- -->
                <!-- Privacy -->
                <!-- ---------------------------------- -->

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">{{__("lan.Privacy Policy")}}</span>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('privacy')}}" aria-expanded="false">
                        <i class="ti ti-help"></i>
                        <span class="hide-menu">{{__("lan.All Policies")}}</span>
                    </a>
                </li>
               


            
            
            </ul>
        </nav>

        <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
            <div class="hstack gap-3">
                <div class="john-img">
                    <img src="{{url('admin/assets/images/profile/user-9.jpg')}}" class="rounded-circle" width="40" height="40" alt="modernize-img" />
                </div>
                <div class="john-title">
                    <h6 class="mb-0 fs-4 fw-semibold">{{$admin->username}}</h6>
                    <span class="fs-2">
                      @if($admin->permation == '1')
                        Admin
                      @endif
                    </span>
                </div>
                <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </div>
        </div>

  
    </div>
</aside>

