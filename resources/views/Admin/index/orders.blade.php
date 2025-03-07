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
    <title>orders</title>
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
                    <h4 class="fw-semibold mb-8">
                      Orders 
                      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      @if(Lang::locale() != $localeCode)
                   
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" aria-current="page">{{ $properties['native'] }}</a>
                          @endif
                      @endforeach
                    </h4>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a class="text-muted text-decoration-none" href="{{route('Dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Orders</li>
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
            <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row">



              <li class="nav-item">
                <a href="javascript:void(0)" class="
                      nav-link
                     gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      active
                      px-3 px-md-3
                    " id="All">
                  <i class="ti ti-list fill-white"></i>
                  <span class="d-none d-md-block fw-medium">All</span>
                </a>
              </li>


              <li class="nav-item">
                <a href="javascript:void(0)" class="
                      nav-link
                     gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      px-3 px-md-3
                    " id="payment_check">
                  <i class="ti ti-list fill-white"></i>
                  <span class="d-none d-md-block fw-medium">Payment check</span>
                </a>
              </li>


              <li class="nav-item">
                <a href="javascript:void(0)" class="
                      nav-link
                    gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      px-3 px-md-3
                    " id="under_process">
                  <i class="ti ti-briefcase fill-white"></i>
                  <span class="d-none d-md-block fw-medium">Waiting for confirmation</span>
                </a>
              </li>


              <li class="nav-item">
                <a href="javascript:void(0)" class="
                      nav-link
                    gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      px-3 px-md-3
                    " id="confirm">
                  <i class="ti ti-share fill-white"></i>
                  <span class="d-none d-md-block fw-medium">Confirm</span>
                </a>
              </li>


              <li class="nav-item">
                <a href="javascript:void(0)" class="
                      nav-link
                    gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      px-3 px-md-3
                    " id="Out_for_Delivery">
                  <i class="ti ti-star fill-white"></i>
                  <span class="d-none d-md-block fw-medium">Out for Delivery</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="javascript:void(0)" class="
                      nav-link
                    gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      px-3 px-md-3
                    " id="Delivered">
                  <i class="ti ti-star fill-white"></i>
                  <span class="d-none d-md-block fw-medium">Delivered</span>
                </a>
              </li>




            </ul>
            <div class="tab-content">
              <div id="note-full-container" class="note-has-grid row">



                
                
              </div>
            </div>
            <!-- Modal Add notes -->
           
          </div>
        </div>
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
    <script src="{{url('admin/assets/libs/fullcalendar/index.global.min.js')}}"></script>
    <script src="{{url('admin/assets/js/apps/notes.js')}}"></script>





    <script>


      function get_orders  (){
        const div = document.getElementById("note-full-container") ; 
        $.ajax({
            type:"post",
            url: "{{   route('get_orders')   }}",
            data: {
            "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
              div.innerHTML = data ; 
            },
        });
      }
      get_orders(); 





      function change_status (id, token){
        if(id == "3"){
          let link = prompt("Tracking link", "https://mylerz.net/track");
          let number = prompt("Tracking number", "");
          
          if(link != ""){
            $.ajax({
                type:"post",
                url: "{{   route('change_status_order')   }}",
                data: {
                "_token" : "{{csrf_token()}}",
                "link" : link,
                "number" : number,
                "token" : token,
                "id" : id
                },            
                success: function (data){
                  if(data.status_code == 200){
                      MessageBox( "success", data.msg, 'success');
                      get_orders(); 
  
                    }else{
                      MessageBox( "error", data.msg, 'error');
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
                      MessageBox( "success", data.msg, 'success');
                      get_orders(); 
  
                    }else{
                      MessageBox( "error", data.msg, 'error');
                  }
                },
            });
          }
        }

        
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
                console.log(data);
                
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


    </script>








  </body>
  
</html>
