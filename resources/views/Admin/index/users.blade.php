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
    
    <title>{{__("lan.users")}}</title>
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
                    <h4 class="fw-semibold mb-8">{{__("lan.users")}}</h4>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a class="text-muted text-decoration-none" href="{{route('index')}}">{{__("lan.home")}}</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">{{__("lan.users")}}</li>
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



            <div class="row" >
              <h4 class="mb-3 mt-4 fs-5">{{__("lan.users")}}</h4>

              <div id="users" style="    display: flex;    flex-wrap: wrap;">

              </div>
              

            </div>



            <h4 class="mb-3 mt-4 fs-5">{{__("lan.admins")}}</h4>

            <div class="row" id="admins">



              


            </div>


            <script src="{{url('jquery-3.6.1.js')}}"></script>


              
            <script>
              function all_users () {
                const div = document.getElementById("users") ; 
                $.ajax({
                    type:"post",
                    url: "{{   route('all_users')   }}",
                    data: {
                    "_token" : "{{csrf_token()}}"
                    },            
                    success: function (data){
                      div.innerHTML = data ; 
                    },
                });
              }


              function all_admins () {
                const div = document.getElementById("admins") ; 
                $.ajax({
                    type:"post",
                    url: "{{   route('all_admins')   }}",
                    data: {
                    "_token" : "{{csrf_token()}}"
                    },            
                    success: function (data){
                      div.innerHTML = data ; 
                    },
                });
              }

              
              function block_user (id) {
                $.ajax({
                    type:"post",
                    url: "{{   route('block_user')   }}",
                    data: {
                      "_token" : "{{csrf_token()}}",
                      "id" : id
                    },            
                    success: function (data){
                      if(data.status_code == 200){
                        MessageBox( "success", data.msg, 'success');
                        all_users();
  
                    }else{
                      MessageBox( "error", data.msg, 'error');
                  }
                    },
                });
              }

              function block_admin (id) {
                $.ajax({
                    type:"post",
                    url: "{{   route('block_admin')   }}",
                    data: {
                      "_token" : "{{csrf_token()}}",
                      "id" : id
                    },            
                    success: function (data){
                      if(data.status_code == 200){
                        MessageBox( "success", data.msg, 'success');
                        all_admins();
                    }else{
                      MessageBox( "error", data.msg, 'error');
                  }
                    },
                });
              }


              function active_user (id) {
                $.ajax({
                    type:"post",
                    url: "{{   route('active_user')   }}",
                    data: {
                      "_token" : "{{csrf_token()}}",
                      "id" : id
                    },            
                    success: function (data){
                      if(data.status_code == 200){
                        MessageBox( "success", data.msg, 'success');
                        all_users();
  
                    }else{
                      MessageBox( "error", data.msg, 'error');
                  }
                    },
                });
              }

              function active_admin (id) {
                $.ajax({
                    type:"post",
                    url: "{{   route('active_admin')   }}",
                    data: {
                      "_token" : "{{csrf_token()}}",
                      "id" : id
                    },            
                    success: function (data){
                      if(data.status_code == 200){
                        MessageBox( "success", data.msg, 'success');
                        all_admins();
  
                    }else{
                      MessageBox( "error", data.msg, 'error');
                  }
                    },
                });
              }


              function send_mail_verify (email) {
                $.ajax({
                    type:"post",
                    url: "{{   route('send_mail_verify')   }}",
                    data: {
                      "_token" : "{{csrf_token()}}",
                      "email" : email
                    },            
                    success: function (data){
                      console.log(data);
                      if(data.status_code == 200){
                        MessageBox( "success", data.msg, 'success');
                        all_users();
                    }else{
                      MessageBox( "error", data.msg, 'error');
                  }
                    },
                });
              }
              all_users(); 
              all_admins(); 
            </script>



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
    <!-- Import Js Files -->
    <script src="{{url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('admin/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/app.init.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/theme.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/app.min.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/sidebarmenu.js')}}"></script>
    
    <!-- solar icons -->
    <script src="{{url('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{url('admin/assets/js/widget/card-custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  </body>
  
</html>
