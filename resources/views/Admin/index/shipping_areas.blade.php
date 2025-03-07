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
                        <h4 class="fw-semibold mb-8">Shipping area</h4>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                 <a class="text-muted text-decoration-none" href="{{route('index')}}">Home</a>
                              </li>
                              <li class="breadcrumb-item" aria-current="page">Shipping area</li>
                           </ol>
                        </nav>
                     </div>
                     <div class="col-3">
                        <div class="text-center mb-n5">
                           <img src="{{url('admin/assets/images/breadcrumb/ChatBc.png')}}" alt="modernize-img" class="img-fluid mb-n4">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
             
              <form id="areas">
                @csrf

                <div class="col-12">
                   <!-- start Input groups -->
                   <div class="card card-body">
                      <h4 class="card-title">Inputs</h4>
                     
                      <div class="row">
                         <div class="col-sm-12 col-xs-12">
                               <div class="input-group mb-3">
                                  <input type="text" name="city" class="form-control" placeholder="city" aria-label="city" aria-describedby="basic-addon1">
                               </div>
 
 
                              
                               <div class="input-group mb-3">
                                  <input type="text" class="form-control" name="zone" placeholder="Zone" aria-label="Amount (to the nearest dollar)">
                                  <span class="input-group-text">Zone</span>
                               </div>
 
                              
                               <div class="input-group mb-3">
                                  <span class="input-group-text">EGP</span>
                                  <input type="number" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
                                  <span class="input-group-text">.00</span>
                               </div>
 
                              
                               <div class="input-group mb-3">
                                  <select name="countrs" id="countrs" class="form-control">
                                  </select>

                               </div>
 
                               
 
 
                               <!-- mb-3 -->
                         </div>
                         
                         <div class="col-sm-12 col-xs-12">
                            <label class="form-label mt-3">Areas</label>
                               <div class="row">
                                 
                                  <div class="col-lg-6">
                                     <div class="input-group mb-3">
                                        <div>
                                           <button class="btn bg-primary-subtle text-primary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                           Exists area
                                           </button>
                                           <br>
                                           <br>
                                           <a class="btn btn-outline-success " onclick="create_area()" type="button" 
                                             aria-expanded="false">
                                             Create
                                           </a>
                                           <div class="dropdown-menu" id="note-full-container">
                                              

                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                         </div>
                      </div>
                   </div>
                   <!-- end Input groups -->
                </div>
              </form>
             
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
      
      <!--  Search Bar -->
      @include("Admin.layouts.cart")
    </div>
    <script src="{{url('jquery-3.6.1.js')}}"></script>

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


      function get_areas  (){
        const div = document.getElementById("note-full-container") ; 
        $.ajax({
            type:"post",
            url: "{{   route('get_areas')   }}",
            data: {
            "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
              div.innerHTML = data ; 
            },
        });
      }

      function get_countrs  (){
        const div = document.getElementById("countrs") ; 
        $.ajax({
            type:"post",
            url: "{{   route('get_countrs')   }}",
            data: {
            "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
              div.innerHTML = data ; 
            },
        });
      }
      get_areas(); 
      get_countrs(); 



      function remove_area (id){
        $.ajax({
            type:"post",
            url: "{{   route('remove_area')   }}",
            data: {
            "_token" : "{{csrf_token()}}",
            "id" : id
            },            
            success: function (data){
              if(data.status_code == 200){
                  MessageBox(data.msg, "success", 'success');
                  get_areas(); 
                  get_countrs(); 
                }else{
                  MessageBox(data.msg, "error", 'error');
              }
            },
        });
      }


      function create_area (){
        let data_form = new FormData($("#areas")[0]);

        $.ajax({
            type:"post",
            url: "{{   route('create_area')   }}",
            data: data_form,         
            contentType: false,
            cache: false ,
            processData: false,   
            success: function (data){
              console.log(data);
              
              if(data.status_code == 200){
                  MessageBox(data.msg, "success", 'success');
                  get_areas(); 
                  get_countrs(); 
                }else{
                  MessageBox(data.msg, "error", 'error');
              }
            },
        });
        
      }


    </script>








  </body>
  
</html>
