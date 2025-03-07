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

  <title>Order Details</title>
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
                  <h4 class="fw-semibold mb-8">Order details</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{route('index')}}">home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Order details</li>
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




          <div class="card overflow-hidden">
            <div class="card-body p-0">
              <img src="{{url('admin/assets/images/backgrounds/profilebg.jpg')}}" alt="modernize-img" class="img-fluid">
              <div class="row align-items-center">



                @php 
                  $total = 0;
                  $order_quantity = 0;
                @endphp

                @foreach ($orders as $order_)
                  @php 
                    $order_quantity += $order_->order_quantity ; 
                    $total += $order_->product_price * $order_->order_quantity;
                  @endphp
                @endforeach


                @php 
                  $total += $order->shipping;
                @endphp


                <div class="col-lg-4 order-lg-1 order-2">
                  <div class="d-flex align-items-center justify-content-around m-4">
                    <div class="text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-receipt-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                        <path d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5" />
                      </svg>                      
                      <h4 class="mb-0 lh-1">{{$total}}</h4>
                      <p class="mb-0 ">Total</p>
                    </div>
                    <div class="text-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-discount">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 15l6 -6" />
                        <circle cx="9.5" cy="9.5" r=".5" fill="currentColor" />
                        <circle cx="14.5" cy="14.5" r=".5" fill="currentColor" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                      </svg>
                      <h4 class="mb-0 lh-1">{{count($orders)}}</h4>
                      <p class="mb-0 ">Count the products</p>
                    </div>
                    <div class="text-center">
                      <i class="ti ti-user-check fs-6 d-block mb-2"></i>
                      <h4 class="mb-0 lh-1">{{$order_quantity}}</h4>
                      <p class="mb-0 ">Order quantity</p>
                    </div>
                  </div>
                </div>


                
                <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                  <div class="mt-n5">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <div class="d-flex align-items-center justify-content-center round-110">
                        <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100">
                          @if($info_user != "")
                          <img src="{{url("images/profile/$info_user->image")}}" alt="modernize-img" class="w-100 h-100">
                          @else
                          <img src="{{url("images/profile/customer.png")}}" alt="modernize-img" class="w-100 h-100">
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <h5 class="mb-0">{{$order->name}}</h5>
                      <p class="mb-0">{{$order->user}}</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 order-last">
                  <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-end my-3 mx-4 pe-xxl-4 gap-3">
                    <li>
                      @if($order->process == '1')
                        <a onclick="change_status(2, '<?= $order->order_token?>')" class='justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center'>
                          <i class='ti ti-send fs-4 me-2'></i>
                          Confirm
                        </a>
                      @elseif($order->process == '2')
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
                      @elseif($order->process == '3')
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
                      @elseif($order->process == '4')
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-dasharray="24" stroke-dashoffset="24" stroke-linecap="round" 
                          stroke-linejoin="round" stroke-width="2" d="M5 11L11 17L21 7">
                              <animate  fill="freeze" attributeName="stroke-dashoffset" dur="0.48s" values="24;0"/>
                          </path>
                        </svg>
                      @elseif($order->process == '0')
                        <a href="javascript:void(0)" onclick="delete_order('<?= $order->order_token?>')" class="link text-danger ms-2">
                          <i class="ti ti-trash fs-4 remove-note"></i>
                        </a>
                      @endif
                    </li>
                  </ul>
                </div>
              </div>



              <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active hstack gap-2 rounded-0 py-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                    <i class="ti ti-user-circle fs-5"></i>
                    <span class="d-none d-md-block">info order</span>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers" type="button" role="tab" aria-controls="pills-followers" aria-selected="false">
                    <i class="ti ti-heart fs-5"></i>
                    <span class="d-none d-md-block">purchases</span>
                  </button>
                </li>
             
              </ul>



            </div>
          </div>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card shadow-none border">
                    <div class="card-body">
                      <h4 class="mb-3">Order shipping</h4>
                      <p>
                        {{$order->notif}}
                      </p>
                      <div class="vstack gap-3 mt-4">

                        <div class="hstack gap-6">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-grid-3x3">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 8h18" />
                            <path d="M3 16h18" />
                            <path d="M8 3v18" />
                            <path d="M16 3v18" />
                          </svg>
                          <h6 class=" mb-0">{{$order->order_token}}</h6>
                        </div>


                        <div class="hstack gap-6">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" 
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-month">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M7 14h.013" />
                            <path d="M10.01 14h.005" />
                            <path d="M13.01 14h.005" />
                            <path d="M16.015 14h.005" />
                            <path d="M13.015 17h.005" />
                            <path d="M7.01 17h.005" />
                            <path d="M10.01 17h.005" />
                          </svg>
                          <h6 class=" mb-0">{{$order->created_at}}</h6>
                        </div>

                        <div class="hstack gap-6">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-truck">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                          </svg>
                          <h6 class=" mb-0">{{$order->shipping}} EGP</h6>
                        </div>
                        
                        <div class="hstack gap-6">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
                            <path d="M3 10h18" />
                            <path d="M16 19h6" />
                            <path d="M19 16l3 3l-3 3" />
                            <path d="M7.005 15h.005" />
                            <path d="M11 15h2" />
                          </svg>
                          <h6 class=" mb-0">{{$order->payment}}</h6>
                        </div>

                        <div class="hstack gap-6">
                          <i class="ti ti-mail text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$order->email2}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                          </svg>
                          <h6 class=" mb-0">{{$order->phone}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$order->address1}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$order->address2}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$order->country}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$order->town}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$order->area}}</h6>
                        </div>
                      
                          <div class="hstack gap-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-screenshot">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M7 19a2 2 0 0 1 -2 -2" />
                              <path d="M5 13v-2" />
                              <path d="M5 7a2 2 0 0 1 2 -2" />
                              <path d="M11 5h2" />
                              <path d="M17 5a2 2 0 0 1 2 2" />
                              <path d="M19 11v2" />
                              <path d="M19 17v4" />
                              <path d="M21 19h-4" />
                              <path d="M13 19h-2" />
                            </svg>
                            <h6 class=" mb-0">
                              @if($order->screen_shot != "")
                                <a href="{{url("images/payment_screenshot/$order->screen_shot")}}" target="_blank">
                                  <img style="width: 65px;height: 65px;object-fit: contain;" src="{{url("images/payment_screenshot/$order->screen_shot")}}" alt="">
                                </a>
                              @else
                                none
                              @endif
                            </h6>
                          </div>
                      
                      </div>
                    </div>
                  </div>
                  <div class="card shadow-none border">
                    <div class="card-body">
                      <h4 class="fw-semibold mb-3">Products</h4>
                      <div class="row">


                        @foreach ($orders as $order_)
                            
                          <div class="col-4">
                            <img src="{{url("images/product/$order_->product_image")}}" style="width:86px; height:86px; object-fit:contain;" alt="modernize-img" class="rounded-1 img-fluid mb-9">
                          </div>

                        @endforeach

             

                      </div>
                    </div>
                  </div>
                </div>

                
                <div class="col-lg-8">
                
                  <div class="card">
                    <div class="card-body border-bottom" id="reviews">
                    

                      

                    </div>

                  
                 
                  </div>
                
                
                </div>
              </div>
            </div>







            <div class="tab-pane fade" id="pills-followers" role="tabpanel" aria-labelledby="pills-followers-tab" tabindex="0">
              





         






            </div>








          </div>
        </div>
      </div>






        
      <script>
                      
                      
      function change_status (id, token){
        if(id == "3"){
          let link = prompt("Tracking link", "{{route('user_profile')}}");
          
          if(link != ""){
            $.ajax({
                type:"post",
                url: "{{   route('change_status_order')   }}",
                data: {
                "_token" : "{{csrf_token()}}",
                "link" : link,
                "token" : token,
                "id" : id
                },            
                success: function (data){
                  if(data.status_code == 200){
                      MessageBox(data.msg, "success", 'success');
                      location.reload(); 
  
                    }else{
                      MessageBox(data.msg, "error", 'error');
                  }
                },
            });
          }
        }else{
          let conf = confirm("Confirm this action");
          if(conf === true){
            $.ajax({
                type:"post",
                url: "{{   route('change_status_order')   }}",
                data: {
                "_token" : "{{csrf_token()}}",
                "token" : token,
                "id" : id
                },            
                success: function (data){
                  console.log(data);
                  if(data.status_code == 200){
                      MessageBox(data.msg, "success", 'success');
                    location.reload(); 
                    }else{
                      MessageBox(data.msg, "error", 'error');
                  }
                },
            });
          }
        }

        
      }

        function get_reviews  (token){
          const div = document.getElementById("reviews") ; 
          $.ajax({
              type:"post",
              url: "{{   route('get_reviews')   }}",
              data: {
              "_token" : "{{csrf_token()}}",
              'token' : token
              },            
              success: function (data){
                div.innerHTML = data ; 
              },
          });
        }
                      
        function purchases  (user){
          const div = document.getElementById("pills-followers") ; 
          $.ajax({
              type:"post",
              url: "{{   route('purchases_user')   }}",
              data: {
              "_token" : "{{csrf_token()}}",
              'user' : user
              },            
              success: function (data){
                div.innerHTML = data ; 
              },
          });
        }

        function delete_order (token){
          let reason = prompt("reason", "");

          if(reason != ""){
            $.ajax({
                type:"post",
                url: "{{   route('delete_order')   }}",
                data: {
                "_token" : "{{csrf_token()}}",
                "reason" : reason,
                "token" : token,
                },            
                success: function (data){
                  if(data.status_code == 200){
                      MessageBox(data.msg, "success", 'success');
                      get_orders(); 

                    }else{
                      MessageBox(data.msg, "error", 'error');
                  }
                },
            });
          }
        }


        function remove_comment (id){
          let conf = confirm("Confirm this action");
          
          if(conf === true){
            $.ajax({
              type:"post",
              url: "{{   route('remove_comment')   }}",
              data: {
              "_token" : "{{csrf_token()}}",
              'id' : id
              },            
              success: function (data){
                if(data.status_code == 200){
                  MessageBox(data.msg, "success", 'success');
                  get_reviews("{{$order->order_token}}"); 
                }else{
                  MessageBox(data.msg, "error", 'error');
                }
              },
            });
          }
        }
        get_reviews("{{$order->order_token}}"); 
        purchases("{{$order->user}}"); 
      </script>

      <script>
        function handleColorTheme(e) {
          document.documentElement.setAttribute("data-color-theme", e);
        }
      </script>
      @include("Admin.layouts.theme")
    </div>

    <!--  Search Bar -->
    @include("Admin.layouts.cart")
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->
  <script src="{{url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/app.init.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/theme.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/app.min.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/sidebarmenu.js')}}"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>