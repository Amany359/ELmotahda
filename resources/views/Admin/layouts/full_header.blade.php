      <!--  Header Start -->
      <header class="topbar">
        <div class="with-vertical"><!-- ---------------------------------- -->
            <!-- Start Vertical Layout Header -->
            <!-- ---------------------------------- -->
            <nav class="navbar navbar-expand-lg p-0">
                <ul class="navbar-nav">
                    <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                        <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav quick-links d-none d-lg-flex align-items-center">
         
                    {{-- <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="{{url('Admin/main/app-chat.html')}}">Chat</a>
                    </li>
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="{{url('Admin/main/app-calendar.html')}}">Calendar</a>
                    </li>
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="{{url('Admin/main/app-email.html')}}">Email</a>
                    </li> --}}

                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if(Lang::locale() != $localeCode)
                        <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" aria-current="page" >
                            {{ $properties['native'] }}
                        </a>

                        
                        @endif
                        @endforeach
                    </li>
                </ul>

                <div class="d-block d-lg-none py-4">
                    <a href="{{url('Admin/main/index.html')}}" class="text-nowrap logo-img">
                        <img src="{{url('admin/assets/images/logos/dark-logo.svg')}}" class="dark-logo" alt="Logo-Dark" />
                        <img src="{{url('admin/assets/images/logos/light-logo.svg')}}" class="light-logo" alt="Logo-light" />
                    </a>
                </div>
                <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti ti-dots fs-7"></i>
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                            <i class="ti ti-align-justified fs-7"></i>
                        </a>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                    

                            <!-- ------------------------------- -->
                            <!-- start shopping cart Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item nav-icon-hover-bg rounded-circle">
                                <a class="nav-link position-relative" href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <i class="ti ti-basket"></i>
                                    <span class="popup-badge rounded-pill bg-danger text-white fs-2" id="count_cart_shop">0</span>
                                </a>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end shopping cart Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start notification Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                                <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                    <i class="ti ti-bell-ringing"></i>
                                    <div class="notification bg-primary rounded-circle"></div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                                    </div>
                                    <div class="message-body" data-simplebar>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-9.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-3.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                                <span class="fs-2 d-block text-body-secondary">Salma sent you new message</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-4.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">Check your earnings</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-5.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
                                                <span class="fs-2 d-block text-body-secondary">Assign her new tasks</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-6.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">$230 deducted from account</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-7.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="py-6 px-7 mb-1">
                                        <button class="btn btn-outline-primary w-100">See All Notifications</button>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end notification Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start profile Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="user-profile-img">
                                            <img src="{{url('admin/assets/images/profile/user-9.jpg')}}" class="rounded-circle" width="35" height="35" alt="modernize-img" />
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                    <div class="profile-dropdown position-relative" data-simplebar>
                                        <div class="py-3 px-7 pb-0">
                                            <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                        </div>
                                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                            <img src="{{url('admin/assets/images/profile/user-9.jpg')}}" class="rounded-circle" width="80" height="80" alt="modernize-img" />
                                            <div class="ms-3">
                                                <h5 class="mb-1 fs-3">{{$admin->username}}</h5>
                                                <span class="mb-1 d-block">
                                                    @if($admin->permation == '1')
                                                        Admin
                                                    @endif
                                                </span>
                                                <p class="mb-0 d-flex align-items-center gap-2">
                                                    <i class="ti ti-mail fs-4"></i> {{$admin->email}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="{{url('Admin/main/page-user-profile.html')}}" class="py-8 px-7 mt-8 d-flex align-items-center">
                                                <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{url('admin/assets/images/svgs/icon-account.svg')}}" alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Account Settings</span>
                                                </div>
                                            </a>
                                            <a href="{{url('Admin/main/app-email.html')}}" class="py-8 px-7 d-flex align-items-center">
                                                <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{url('admin/assets/images/svgs/icon-inbox.svg')}}" alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Messages & Emails</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-grid py-4 px-7 pt-8">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end profile Dropdown -->
                            <!-- ------------------------------- -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ---------------------------------- -->
            <!-- End Vertical Layout Header -->
            <!-- ---------------------------------- -->

            <!-- ------------------------------- -->
            <!-- apps Dropdown in Small screen -->
            <!-- ------------------------------- -->
            <!--  Mobilenavbar -->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
                <nav class="sidebar-nav scroll-sidebar">
                    <div class="offcanvas-header justify-content-between">
                        <img src="{{url('admin/assets/images/logos/favicon.ico')}}" alt="modernize-img" class="img-fluid" />
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body h-n80" data-simplebar="" data-simplebar>
                        <ul id="sidebarnav">
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-apps"></i>
                                    </span>
                                    <span class="hide-menu">Apps</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level my-3">
                                    <li class="sidebar-item py-2">
                                        <a href="{{url('Admin/main/app-chat.html')}}" class="d-flex align-items-center">
                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="{{url('admin/assets/images/svgs/icon-dd-chat.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div>
                                                <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                                <span class="fs-2 d-block text-muted">New messages arrived</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="{{url('Admin/main/app-invoice.html')}}" class="d-flex align-items-center">
                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="{{url('admin/assets/images/svgs/icon-dd-invoice.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div>
                                                <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                                <span class="fs-2 d-block text-muted">Get latest invoice</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="{{url('Admin/main/app-cotact.html')}}" class="d-flex align-items-center">
                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="{{url('admin/assets/images/svgs/icon-dd-mobile.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div>
                                                <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                                <span class="fs-2 d-block text-muted">2 Unsaved Contacts</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="{{url('Admin/main/app-email.html')}}" class="d-flex align-items-center">
                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="{{url('admin/assets/images/svgs/icon-dd-message-box.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div>
                                                <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                                <span class="fs-2 d-block text-muted">Get new emails</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="{{url('Admin/main/page-user-profile.html')}}" class="d-flex align-items-center">
                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="{{url('admin/assets/images/svgs/icon-dd-cart.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div>
                                                <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                                <span class="fs-2 d-block text-muted">learn more information</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="{{url('Admin/main/app-calendar.html')}}" class="d-flex align-items-center">
                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="{{url('admin/assets/images/svgs/icon-dd-date.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div>
                                                <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                                <span class="fs-2 d-block text-muted">Get dates</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="{{url('Admin/main/app-contact2.html')}}" class="d-flex align-items-center">
                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="{{url('admin/assets/images/svgs/icon-dd-lifebuoy.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div>
                                                <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                                <span class="fs-2 d-block text-muted">Add new contact</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sidebar-item py-2">
                                        <a href="{{url('Admin/main/app-notes.html')}}" class="d-flex align-items-center">
                                            <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                <img src="{{url('admin/assets/images/svgs/icon-dd-application.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                            </div>
                                            <div>
                                                <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                                <span class="fs-2 d-block text-muted">To-do and Daily tasks</span>
                                            </div>
                                        </a>
                                    </li>
                                    <ul class="px-8 mt-7 mb-4">
                                        <li class="sidebar-item mb-3">
                                            <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark" href="{{url('Admin/main/page-pricing.html')}}">Pricing Page</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark" href="{{url('Admin/main/authentication-login.html')}}">Authentication
                                                Design</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark" href="{{url('Admin/main/authentication-register.html')}}">Register Now</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark" href="{{url('Admin/main/authentication-error.html')}}">404 Error Page</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark" href="{{url('Admin/main/app-notes.html')}}">Notes App</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark" href="{{url('Admin/main/page-user-profile.html')}}">User Application</a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a class="fw-semibold text-dark" href="{{url('Admin/main/page-account-settings.html')}}">Account Settings</a>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{url('Admin/main/app-chat.html')}}" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-message-dots"></i>
                                    </span>
                                    <span class="hide-menu">Chat</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{url('Admin/main/app-calendar.html')}}" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                    <span class="hide-menu">Calendar</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{url('Admin/main/app-email.html')}}" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-mail"></i>
                                    </span>
                                    <span class="hide-menu">Email</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="app-header with-horizontal">
            <nav class="navbar navbar-expand-xl container-fluid p-0">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item nav-icon-hover-bg rounded-circle d-flex d-xl-none ms-n2">
                        <a class="nav-link sidebartoggler" id="sidebarCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-xl-block">
                        <a href="{{url('Admin/main/index.html')}}" class="text-nowrap nav-link">
                            <img src="{{url('admin/assets/images/logos/dark-logo.svg')}}" class="dark-logo" width="180" alt="modernize-img" />
                            <img src="{{url('admin/assets/images/logos/light-logo.svg')}}" class="light-logo" width="180" alt="modernize-img" />
                        </a>
                    </li>
                    <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-xl-flex">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="ti ti-search"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav quick-links d-none d-xl-flex align-items-center">
                    <!-- ------------------------------- -->
                    <!-- start apps Dropdown -->
                    <!-- ------------------------------- -->
                    <li class="nav-item nav-icon-hover-bg rounded w-auto dropdown d-none d-lg-flex">
                        <div class="hover-dd">
                            <a class="nav-link" href="javascript:void(0)">
                                Apps<span class="mt-1">
                                    <i class="ti ti-chevron-down fs-3"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="ps-7 pt-7">
                                            <div class="border-bottom">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="position-relative">
                                                            <a href="{{url('Admin/main/app-chat.html')}}" class="d-flex align-items-center pb-9 position-relative">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="{{url('admin/assets/images/svgs/icon-dd-chat.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 fw-semibold fs-3">
                                                                        Chat Application
                                                                    </h6>
                                                                    <span class="fs-2 d-block text-body-secondary">New messages arrived</span>
                                                                </div>
                                                            </a>
                                                            <a href="{{url('Admin/main/app-invoice.html')}}" class="d-flex align-items-center pb-9 position-relative">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="{{url('admin/assets/images/svgs/icon-dd-invoice.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 fw-semibold fs-3">Invoice App</h6>
                                                                    <span class="fs-2 d-block text-body-secondary">Get latest invoice</span>
                                                                </div>
                                                            </a>
                                                            <a href="{{url('Admin/main/app-contact2.html')}}" class="d-flex align-items-center pb-9 position-relative">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="{{url('admin/assets/images/svgs/icon-dd-mobile.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 fw-semibold fs-3">
                                                                        Contact Application
                                                                    </h6>
                                                                    <span class="fs-2 d-block text-body-secondary">2 Unsaved Contacts</span>
                                                                </div>
                                                            </a>
                                                            <a href="{{url('Admin/main/app-email.html')}}" class="d-flex align-items-center pb-9 position-relative">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="{{url('admin/assets/images/svgs/icon-dd-message-box.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                                                                    <span class="fs-2 d-block text-body-secondary">Get new emails</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="position-relative">
                                                            <a href="{{url('Admin/main/page-user-profile.html')}}" class="d-flex align-items-center pb-9 position-relative">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="{{url('admin/assets/images/svgs/icon-dd-cart.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 fw-semibold fs-3">
                                                                        User Profile
                                                                    </h6>
                                                                    <span class="fs-2 d-block text-body-secondary">learn more information</span>
                                                                </div>
                                                            </a>
                                                            <a href="{{url('Admin/main/app-calendar.html')}}" class="d-flex align-items-center pb-9 position-relative">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="{{url('admin/assets/images/svgs/icon-dd-date.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 fw-semibold fs-3">
                                                                        Calendar App
                                                                    </h6>
                                                                    <span class="fs-2 d-block text-body-secondary">Get dates</span>
                                                                </div>
                                                            </a>
                                                            <a href="{{url('Admin/main/app-contact.html')}}" class="d-flex align-items-center pb-9 position-relative">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="{{url('admin/assets/images/svgs/icon-dd-lifebuoy.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 fw-semibold fs-3">
                                                                        Contact List Table
                                                                    </h6>
                                                                    <span class="fs-2 d-block text-body-secondary">Add new contact</span>
                                                                </div>
                                                            </a>
                                                            <a href="{{url('Admin/main/app-notes.html')}}" class="d-flex align-items-center pb-9 position-relative">
                                                                <div class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                    <img src="{{url('admin/assets/images/svgs/icon-dd-application.svg')}}" alt="modernize-img" class="img-fluid" width="24" height="24" />
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-1 fw-semibold fs-3">
                                                                        Notes Application
                                                                    </h6>
                                                                    <span class="fs-2 d-block text-body-secondary">To-do and Daily tasks</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center py-3">
                                                <div class="col-8">
                                                    <a class="fw-semibold d-flex align-items-center lh-1" href="javascript:void(0)">
                                                        <i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <div class="d-flex justify-content-end pe-4">
                                                        <button class="btn btn-primary">Check</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 ms-n4">
                                        <div class="position-relative p-7 border-start h-100">
                                            <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                            <ul class="">
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary" href="{{url('Admin/main/page-pricing.html')}}">Pricing Page</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary" href="{{url('Admin/main/authentication-login.html')}}">Authentication
                                                        Design</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary" href="{{url('Admin/main/authentication-register.html')}}">Register Now</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary" href="{{url('Admin/main/authentication-error.html')}}">404 Error Page</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary" href="{{url('Admin/main/app-notes.html')}}">Notes App</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary" href="{{url('Admin/main/page-user-profile.html')}}">User Application</a>
                                                </li>
                                                <li class="mb-3">
                                                    <a class="fw-semibold bg-hover-primary" href="{{url('Admin/main/page-account-settings.html')}}">Account Settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ------------------------------- -->
                    <!-- end apps Dropdown -->
                    <!-- ------------------------------- -->
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="{{url('Admin/main/app-chat.html')}}">Chat</a>
                    </li>
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="{{url('Admin/main/app-calendar.html')}}">Calendar</a>
                    </li>
                    <li class="nav-item dropdown-hover d-none d-lg-block">
                        <a class="nav-link" href="{{url('Admin/main/app-email.html')}}">Email</a>
                    </li>
                </ul>
                <div class="d-block d-xl-none">
                    <a href="{{url('Admin/main/index.html')}}" class="text-nowrap nav-link">
                        <img src="{{url('admin/assets/images/logos/dark-logo.svg')}}" width="180" alt="modernize-img" />
                    </a>
                </div>
                <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="p-2">
                        <i class="ti ti-dots fs-7"></i>
                    </span>
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                        <a href="javascript:void(0)" class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                            <i class="ti ti-align-justified fs-7"></i>
                        </a>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        

                            <!-- ------------------------------- -->
                            <!-- start shopping cart Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item nav-icon-hover-bg rounded-circle">
                                <a class="nav-link position-relative" id="open_cart" href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <i class="ti ti-basket"></i>
                                    <span class="popup-badge rounded-pill bg-danger text-white fs-2">2</span>
                                </a>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end shopping cart Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start notification Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                                <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                    <i class="ti ti-bell-ringing"></i>
                                    <div class="notification bg-primary rounded-circle"></div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                                    </div>
                                    <div class="message-body" data-simplebar>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-9.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-3.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">New message</h6>
                                                <span class="fs-2 d-block text-body-secondary">Salma sent you new message</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-4.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Bianca sent payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">Check your earnings</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-5.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Jolly completed tasks</h6>
                                                <span class="fs-2 d-block text-body-secondary">Assign her new tasks</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-6.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">John received payment</h6>
                                                <span class="fs-2 d-block text-body-secondary">$230 deducted from account</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                            <span class="me-3">
                                                <img src="{{url('admin/assets/images/profile/user-7.jpg')}}" alt="user" class="rounded-circle" width="48" height="48" />
                                            </span>
                                            <div class="w-100">
                                                <h6 class="mb-1 fw-semibold lh-base">Roman Joined the Team!</h6>
                                                <span class="fs-2 d-block text-body-secondary">Congratulate him</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="py-6 px-7 mb-1">
                                        <button class="btn btn-outline-primary w-100">See All Notifications</button>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end notification Dropdown -->
                            <!-- ------------------------------- -->

                            <!-- ------------------------------- -->
                            <!-- start profile Dropdown -->
                            <!-- ------------------------------- -->
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <div class="user-profile-img">
                                            <img src="{{url('admin/assets/images/profile/user-9.jpg')}}" class="rounded-circle" width="35" height="35" alt="modernize-img" />
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                    <div class="profile-dropdown position-relative" data-simplebar>
                                        <div class="py-3 px-7 pb-0">
                                            <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                        </div>
                                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                            <img src="{{url('admin/assets/images/profile/user-9.jpg')}}" class="rounded-circle" width="80" height="80" alt="modernize-img" />
                                            <div class="ms-3">
                                                <h5 class="mb-1 fs-3">{{$admin->username}}</h5>
                                                <span class="mb-1 d-block">
                                                    @if($admin->permation == '1')
                                                        Admin
                                                    @endif
                                                </span>
                                                <p class="mb-0 d-flex align-items-center gap-2">
                                                    <i class="ti ti-mail fs-4"></i> {{$admin->email}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="message-body">
                                            <a href="{{url('Admin/main/page-user-profile.html')}}" class="py-8 px-7 mt-8 d-flex align-items-center">
                                                <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{url('admin/assets/images/svgs/icon-account.svg')}}" alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Account Settings</span>
                                                </div>
                                            </a>
                                            <a href="{{url('Admin/main/app-email.html')}}" class="py-8 px-7 d-flex align-items-center">
                                                <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                    <img src="{{url('admin/assets/images/svgs/icon-inbox.svg')}}" alt="modernize-img" width="24" height="24" />
                                                </span>
                                                <div class="w-100 ps-3">
                                                    <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                                    <span class="fs-2 d-block text-body-secondary">Messages & Emails</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-grid py-4 px-7 pt-8">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- ------------------------------- -->
                            <!-- end profile Dropdown -->
                            <!-- ------------------------------- -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--  Header End -->


<aside class="left-sidebar with-horizontal">
    <!-- Sidebar scroll-->
    <div>
        <!-- Sidebar navigation-->
        <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span>
                            <i class="ti ti-home-2"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{url('Admin/main/index.html')}}" class="sidebar-link">
                                <i class="ti ti-aperture"></i>
                                <span class="hide-menu">Modern</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{url('Admin/main/index2.html')}}" class="sidebar-link">
                                <i class="ti ti-shopping-cart"></i>
                                <span class="hide-menu">eCommerce</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{url('Admin/main/index3.html')}}" class="sidebar-link">
                                <i class="ti ti-currency-dollar"></i>
                                <span class="hide-menu">NFT</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{url('Admin/main/index4.html')}}" class="sidebar-link">
                                <i class="ti ti-cpu"></i>
                                <span class="hide-menu">Crypto</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{url('Admin/main/index5.html')}}" class="sidebar-link">
                                <i class="ti ti-activity-heartbeat"></i>
                                <span class="hide-menu">General</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{url('Admin/main/index6.html')}}" class="sidebar-link">
                                <i class="ti ti-playlist"></i>
                                <span class="hide-menu">Music</span>
                            </a>
                        </li>
                    </ul>
                </li>
          
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->

</aside>