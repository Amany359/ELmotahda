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
      
      <link rel="stylesheet" href="{{url('admin/assets/libs/quill/dist/quill.snow.css')}}">
      <link rel="stylesheet" href="{{url('admin/assets/libs/dropzone/dist/min/dropzone.min.css')}}">
      <link rel="stylesheet" href="{{url('admin/assets/libs/select2/dist/css/select2.min.css')}}">
      <title>Privacy</title>
      
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
              <form action="" method="post" id="add_product_form">
                @csrf
                <input type="hidden" id="content_ar" name="content_ar">
                <input type="hidden" id="content_en" name="content_en">
                <input type="hidden" id="type_" name="type">

                <div class="container-fluid">
                   <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                      <div class="card-body px-4 py-3">
                         <div class="row align-items-center">
                            <div class="col-9">
                               <h4 class="fw-semibold mb-8">Privacy</h4>
                               <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                     <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="{{route('index')}}">Home</a>
                                     </li>
                                     <li class="breadcrumb-item" aria-current="page">Privacy</li>
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
 
 
                   <div  style=" justify-content: center !important; align-items: center !important; margin: 37px 0px;" class="action-btn layout-top-spacing mb-7 d-flex align-items-center justify-content-between flex-wrap gap-6">
                     <h5 class="mb-0 fs-5">Privacy policy</h5>
                   </div>
 
                   <div>
                     <label class="form-label">Description (Arabic)<span class="text-danger">*</span></label>
                     <div id="editor"><?= html_entity_decode($privacy->text_ar); ?></div>
                   </div>
 
 
                   <div>
                     <label class="form-label">Description (English)<span class="text-danger">*</span></label>
                     <div id="editor2"><?= html_entity_decode($privacy->text_en); ?></div>
                   </div>
 
 
                   <div  style=" justify-content: center !important; align-items: center !important; margin: 37px 0px;" class="action-btn layout-top-spacing mb-7 d-flex align-items-center justify-content-between flex-wrap gap-6">
                     <a onclick="update_privacy('1')" class="btn btn-outline-success">
                       Update privacy policy
                     </a>
                   </div>
 
                   <hr>
                   <br>
                   <br>
 
 
 
                   <div  style=" justify-content: center !important; align-items: center !important; margin: 37px 0px;" class="action-btn layout-top-spacing mb-7 d-flex align-items-center justify-content-between flex-wrap gap-6">
                     <h5 class="mb-0 fs-5">Terms and Conditions</h5>
                   </div>
 
                   <div>
                     <label class="form-label">Description (Arabic)<span class="text-danger">*</span></label>
                     <div id="editor3"><?= html_entity_decode($privacy->desc_ar); ?></div>
                   </div>
 
 
                   <div>
                     <label class="form-label">Description (English)<span class="text-danger">*</span></label>
                     <div id="editor4"><?= html_entity_decode($privacy->desc_en); ?></div>
                   </div>
 
                   <div  style=" justify-content: center !important; align-items: center !important; margin: 37px 0px;" class="action-btn layout-top-spacing mb-7 d-flex align-items-center justify-content-between flex-wrap gap-6">
                     <a onclick="update_privacy('2')" class="btn btn-outline-success">
                       Update terms and Conditions
                     </a>
                   </div>
 
                   <hr>
                   <br>
                   <br>
 
 
 
                   <div  style=" justify-content: center !important; align-items: center !important; margin: 37px 0px;" class="action-btn layout-top-spacing mb-7 d-flex align-items-center justify-content-between flex-wrap gap-6">
                     <h5 class="mb-0 fs-5">Delivery returns</h5>
                   </div>
 
                   <div>
                     <label class="form-label">Description (Arabic)<span class="text-danger">*</span></label>
                     <div id="editor5"><?= html_entity_decode($privacy->delivery_ar); ?></div>
                   </div>
 
 
                   <div>
                     <label class="form-label">Description (English)<span class="text-danger">*</span></label>
                     <div id="editor6"><?= html_entity_decode($privacy->delivery_en); ?></div>
                   </div>
 
                   <div  style=" justify-content: center !important; align-items: center !important; margin: 37px 0px;" class="action-btn layout-top-spacing mb-7 d-flex align-items-center justify-content-between flex-wrap gap-6">
                     <a onclick="update_privacy('3')" class="btn btn-outline-success">
                       Update delivery returns
                     </a>
                   </div>
 
                 
 
 
                </div>
              </form>
            </div>
            <script>


               function handleColorTheme(e) {
                  document.documentElement.setAttribute("data-color-theme", e);
               }
               
            </script>
            <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button"
               data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
               <i class="icon ti ti-settings fs-7"></i>
            </button>
            
          @include("Admin.layouts.theme")
          
         @include("Admin.layouts.cart")
      </div>
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
      <script src="{{url('admin/assets/libs/tinymce/tinymce.min.js')}}"></script>
      <script src="{{url('admin/assets/libs/quill/dist/quill.min.js')}}"></script>
      <script src="{{url('admin/assets/js/forms/quill-init.js')}}"></script>

      <script>
        
        function update_privacy(type){
        
  
          let conf = confirm("Confirm this action");

          if(conf === true){

            if(type == "1"){

              let content_ar = document.querySelector("#editor .ql-editor");
              let content_en = document.querySelector("#editor2 .ql-editor");
              document.getElementById("type_").value = "1" ;
              document.getElementById("content_ar").value = content_ar.innerHTML ;
              document.getElementById("content_en").value = content_en.innerHTML ;
              
            }else if(type == "2"){
              
              document.getElementById("type_").value = "2" ;
              let content_ar = document.querySelector("#editor3 .ql-editor");
              let content_en = document.querySelector("#editor4 .ql-editor");
              document.getElementById("content_ar").value = content_ar.innerHTML ;
              document.getElementById("content_en").value = content_en.innerHTML ;
              
            }else{
              
              document.getElementById("type_").value = "3" ;
              let content_ar = document.querySelector("#editor5 .ql-editor");
              let content_en = document.querySelector("#editor6 .ql-editor");
              document.getElementById("content_ar").value = content_ar.innerHTML ;
              document.getElementById("content_en").value = content_en.innerHTML ;

            }


            let data_form = new FormData($("#add_product_form")[0]);

            $.ajax({
              type:"post",
              enctype : "multipart/form-data",
              url: "{{   route('edit_policy')   }}",
              data: data_form,
              contentType: false,
              cache: false ,
              processData: false,
              success: function (data){
                  if(data.status_code == 200){
                      MessageBox("Good Job!", data.msg, "success");
                  }else{
                      MessageBox("Good Job!", data.msg, "error");
                  }
              },
            });
          }
        }

      </script>










   </body>
   
</html>
