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

  <title>{{__("lan.projects")}}</title>
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
                      <h4 class="fw-semibold mb-8">{{__("lan.projects")}}</h4>
                      <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                               <a class="text-muted text-decoration-none" href="{{route('Dashboard')}}">{{__("lan.home")}}</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">{{__("lan.projects")}}</li>
                         </ol>
                      </nav>
                   </div>
                   <div class="col-3">
                      <div class="text-center mb-n5">
                         <img src="{{url('admin/assets/images/breadcrumb/ChatBc.png')}}" alt="modernize-img"
                            class="img-fluid mb-n4">
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">

              @php 
                $name = "name_" . Lang::locale() ; 
              @endphp


            @foreach ($services as $service)

              <div class="col-md-6 col-lg-3">
                <div class="card overflow-hidden">
                  <div class="position-relative">
                      <a >
                        <img src="{{url("images/services/$service->image")}}" style="    width: 100%; height: 250px; ovject-fit:cover;" class="card-img-top" alt="modernize-img">
                      </a>
                      
                  </div>
                  <div class="card-body p-4">
                      <h4 class="card-title" style="text-align: center;">{{$service->$name}}</h4>
                      <button type="button" onclick="delete_service('{{$service->id}}')" class="btn waves-effect waves-light btn-rounded bg-danger-subtle text-danger">
                        {{__("lan.delete")}}
                      </button>
                  </div>
                </div>
              </div>
           
                
            @endforeach

       




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
      function delete_service (id){
        let conf = confirm("{{__('lan.Confirm this action')}}");
        if(conf === true){
          $.ajax({
            type:"post",
            url: "{{   route('delete_service')   }}",
            data: {
              "_token" : "{{csrf_token()}}",
              "id" : id
            },
            success: function (data){
                if(data.status_code == 200){
                    MessageBox("Good Job!", data.msg, "success");
                    setTimeout(() => {
                      location.reload(); 
                    }, 1000);
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