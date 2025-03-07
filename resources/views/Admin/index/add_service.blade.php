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

  <title>{{__("lan.Add service")}}</title>
  <link href="{{url('dash/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('dash/assets/libs/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('dash/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />

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
                  <h4 class="fw-semibold mb-8">{{__("lan.Add service")}}</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{route('Dashboard')}}">{{__("lan.home")}}</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">{{__("lan.Add service")}}</li>
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


          <form action="" id="add_service">
            @csrf
            <div class="row">
              <div class="col-lg-8 ">

      
  
  
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-7">
                      <h4 class="card-title">{{__("lan.GENERAL")}}</h4>
  
                      <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="ti ti-menu fs-5 d-flex"></i>
                      </button>
                    </div>
  
  
                      <div class="mb-4">
                        <label class="form-label">{{__("lan.title")}} (Arabic)<span class="text-danger">*</span>
                        </label>
                        <input type="text" name="name_ar" class="form-control data_inputs" placeholder="{{__("lan.title")}}">
                        <p class="fs-2">{{__("lan.field is required")}}</p>
                      </div>
                      
                      <div class="mb-4">
                        <label class="form-label">{{__("lan.title")}} (English)<span class="text-danger">*</span>
                        </label>
                        <input type="text" name="name_en" class="form-control data_inputs" placeholder="{{__("lan.title")}}">
                        <p class="fs-2">{{__("lan.field is required")}}</p>
                      </div>
                 
  
                  </div>
                </div>
  
                <style>
                  .file-upload-form {
                    width: fit-content;
                    height: fit-content;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  }
                  .file-upload-label input {
                    display: none;
                  }
                  .file-upload-label svg {
                    height: 40px;
                    fill: rgb(82, 82, 82);
                    margin-top: 20px;
                  }
                  .file-upload-label {
                    cursor: pointer;
                    background-color: #ddd;
                    padding: 50px 50px;
                    border-radius: 40px;
                    border: 2px dashed rgb(82, 82, 82);
                    box-shadow: 0px 0px 200px -50px rgba(0, 0, 0, 0.719);
                  }
                  .file-upload-design {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    gap: 5px;
                  }
                  .browse-button {
                    background-color: rgb(82, 82, 82);
                    padding: 5px 15px;
                    border-radius: 10px;
                    color: white;
                    font-size: 11px;
                    transition: all 0.3s;
                  }
                  .browse-button:hover {
                    background-color: rgb(14, 14, 14);
                  }

                </style>
  
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-7">{{__("lan.Media")}}</h4>


                      <input id="image1_" type="file"  name="file" style="display: none" onchange="setImage(this, 'image1')"/>
                    
                      <label for="image1_" class="file-upload-label" multiple="multiple" id="image1">
                        <div class="file-upload-design">
                          <svg viewBox="0 0 640 512" height="1em">
                            <path
                              d="M144 480C64.5 480 0 415.5 0 336c0-62.8 
                              40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 
                              71.6-160 160-160c59.3 0 111 32.2 138.7 
                              80.2C409.9 102 428.3 96 448 96c53 0 96 
                              43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 
                              640 352c0 70.7-57.3 128-128 
                              128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 
                              0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 
                              39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 
                              0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                            </path>
                          </svg>
                          <span class="browse-button">{{__("lan.Browse file")}}</span>
                        </div>
                      </label>

                  </div>
                </div>
  
  
  
  
  
  


                <div class="form-actions mb-5" style="display: flex; justify-content: flex-start; align-items: center;">
                  <button type="button" onclick="add_service()" class="btn btn-primary" style="    margin: 0px 17px;">
                    {{__("lan.Save Changes")}}
                  </button>



                  <style>
                    .dots {
                      width: var(--size);
                      height: var(--size);
                      position: relative;
                      display:none;
                    }

                    .dot {
                      width: var(--size);
                      height: var(--size);
                      animation: dwl-dot-spin calc(var(--speed) * 5) infinite linear both;
                      animation-delay: calc(var(--i) * var(--speed) / (var(--dot-count) + 2) * -1);
                      rotate: calc(var(--i) * var(--spread) / (var(--dot-count) - 1));
                      position: absolute;
                    }

                    .dot::before {
                      content: "";
                      display: block;
                      width: var(--dot-size);
                      height: var(--dot-size);
                      background-color: var(--color);
                      border-radius: 50%;
                      position: absolute;
                      transform: translate(-50%, -50%);
                      bottom: 0;
                      left: 50%;
                    }

                    @keyframes dwl-dot-spin {
                      0% {
                        transform: rotate(0deg);
                        animation-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
                        opacity: 1;
                      }

                      2% {
                        transform: rotate(20deg);
                        animation-timing-function: linear;
                        opacity: 1;
                      }

                      30% {
                        transform: rotate(180deg);
                        animation-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
                        opacity: 1;
                      }

                      41% {
                        transform: rotate(380deg);
                        animation-timing-function: linear;
                        opacity: 1;
                      }

                      69% {
                        transform: rotate(520deg);
                        animation-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
                        opacity: 1;
                      }

                      76% {
                        opacity: 1;
                      }

                      76.1% {
                        opacity: 0;
                      }

                      80% {
                        transform: rotate(720deg);
                      }

                      100% {
                        opacity: 0;
                      }
                    }
                  </style>


                  <div style="   --size: 49px; --dot-size: 6px; --dot-count: 4; --color: #c8ff0b; --speed: 1s; --spread: 60deg;" class="dots">
                    <div style="--i: 0;" class="dot"></div>
                    <div style="--i: 1;" class="dot"></div>
                    <div style="--i: 2;" class="dot"></div>
                    <div style="--i: 3;" class="dot"></div>
                    <div style="--i: 4;" class="dot"></div>
                    <div style="--i: 5;" class="dot"></div>
                  </div>



                </div>

              </div>
              
            </div>
          </form>
       



    
    
        </div>
      </div>


      <script>
        function handleColorTheme(e) {
          document.documentElement.setAttribute("data-color-theme", e);
        }
      </script>


      @include("Admin.layouts.theme")
    </div>
    
  </div>
  
  <div class="dark-transparent sidebartoggler"></div>
  <script src="{{url('jquery-3.6.1.js')}}"></script>

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
  {{-- <script src="{{url('admin/assets/libs/quill/dist/quill.min.js')}}"></script> --}}
  {{-- <script src="{{url('admin/assets/js/forms/quill-init.js')}}"></script> --}}
  <script src="{{url('admin/assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{url('admin/assets/js/forms/select2.init.js')}}"></script>
  <script src="{{url('admin/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{url('admin/assets/js/forms/repeater-init.js')}}"></script>

        <!-- ckeditor -->
        <script src="{{url('dash/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>
        <!-- quill js -->
        <script src="{{url('dash/assets/libs/quill/quill.min.js')}}"></script>
        <!-- init js -->
        <script src="{{url('dash/assets/js/pages/form-editor.init.js')}}"></script>
    


  <script>
    let id = 1 ; 
    let options = '';  

    function add_service(){
      document.querySelector(".dots").style.display = "inline-block" ;
      
      let data_inputs = document.querySelectorAll(".data_inputs");
      let count = 0 ; 
      for (let i = 0; i < data_inputs.length; i++) {
        if(data_inputs[i].value != ""){
          count += 1 ; 
          data_inputs[i].style.cssText = "border-color: #333f55 !important;";

          if(count == data_inputs.length){
            let data_form = new FormData($("#add_service")[0]);
              $.ajax({
                  type:"post",
                  enctype : "multipart/form-data",
                  url: "{{   route('add_service')   }}",
                  data: data_form,
                  contentType: false,
                  cache: false ,
                  processData: false,
                  success: function (data){         
                    console.log(data);
                               
                      document.querySelector(".dots").style.display = "none" ;
                      if(data.status_code == 200){
                          MessageBox("Good Job!", data.msg, "success");
                      }else{
                          MessageBox("Good Job!", data.msg, "error");
                      }
                  },
            });
          }
        }else{
          data_inputs[i].scrollIntoView({
            behavior: 'smooth', // 'smooth' for smooth animation, 'instant' for immediate jump
            block: 'end', // vertical alignment: 'start', 'center', 'end', or 'nearest'
            inline: 'nearest' // horizontal alignment: 'start', 'center', 'end', or 'nearest'
          });
          document.querySelector(".dots").style.display = "none" ;
          data_inputs[i].style.cssText = "    border-color: red !important;";
        }
      }
    }

    function setImage (e, id){
      if(e.value != ""){
        const reader = new FileReader();
        reader.onload = function () {
          document.getElementById(id).style.cssText = `background: url('${reader.result}') ;background-size: contain; background-repeat: no-repeat; `;
        }
        reader.readAsDataURL(e.files[0]);
      }
    
    }




  </script>

  
</body>

</html>