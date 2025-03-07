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
                $count = 0 ; 
                $title = "title_" . Lang::locale() ; 
                $desc = "desc_" . Lang::locale() ; 
                $content = "content_" . Lang::locale() ; 
              @endphp
            @foreach ($projects as $project)

              {{ !$image = explode("_", $project->images) }}
              @if($count == 2)
                <div class="col-md-6 col-lg-4">
                  <div class="card overflow-hidden hover-img" >
                      <div class="position-relative">
                        <a href="{{route('edit_project', ['id' => $project->id])}}">
                            <img src="{{url("images/projects/$image[0]")}}" class="card-img-top" alt="modernize-img">
                        </a>

                      
                      </div>
                      <div class="card-body p-4">
                        
                        <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary"
                            href="{{route('edit_project', ['id' => $project->id])}}"><?= html_entity_decode($project->$title); ?>
                            </a>
                            
                        <div class="d-flex align-items-center gap-4">
                            <div class="d-flex align-items-center gap-2">
                              <i class="ti ti-eye text-dark fs-5"></i>{{$project->seen}}
                            </div>

                            <a onclick="delete_project('{{$project->id}}')" style="cursor: pointer;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="    color: red;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M4 7l16 0" />
                              <path d="M10 11l0 6" />
                              <path d="M14 11l0 6" />
                              <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                              <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                              </svg>
    
                            </a>
                          
                            <div class="d-flex align-items-center fs-2 ms-auto">
                              <i class="ti ti-point text-dark"></i>{{$project->created_at}}
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              @elseif($count == 0)
                {{!$count = 1}}
                <div class="col-md-6 col-lg-8">
                  <div class="card blog blog-img-one position-relative overflow-hidden hover-img" style="background: url({{url("images/projects/$image[0]")}});     background-repeat: no-repeat; background-size: cover;">
                      <div class="card-body position-relative">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div class="d-flex align-items-start justify-content-between">
                              <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mollie Underwood">
                                  <img src="{{url('admin/assets/images/profile/user-5.jpg')}}" alt="modernize-img"
                                    class="rounded-circle img-fluid" width="40" height="40">
                              </div>
                              <span class="badge text-bg-primary fs-2 fw-semibold">{{__("lan.last one")}}</span>
                            </div>
                            <div>
                              <a href="{{route('edit_project', ['id' => $project->id])}}"
                                  class="fs-7 my-4 fw-semibold text-white d-block lh-sm text-primary"><?= html_entity_decode($project->$title); ?> </a>
                              <div class="d-flex align-items-center gap-4">
                                  <div class="d-flex align-items-center gap-2 text-white fs-3 fw-normal">
                                    <i class="ti ti-eye fs-5"></i>
                                    {{$project->seen}}
                                  </div>
                                  <a onclick="delete_project('{{$project->id}}')" style="cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="    color: red;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
          
                                  </a>
                                  
                                  <div class="d-flex align-items-center gap-1 text-white fw-normal ms-auto">
                                    <i class="ti ti-point"></i>
                                    <small>{{$project->created_at}}</small>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              @else()
                {{!$count = 2}}
                <div class="col-md-6 col-lg-4">
                  <div class="card blog blog-img-two position-relative overflow-hidden hover-img" style="background: url({{url("images/projects/$image[0]")}});     background-repeat: no-repeat; background-size: cover;">
                      <div class="card-body position-relative">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div class="d-flex align-items-start justify-content-between">
                              <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Francisco Quinn">
                                  <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-5.jpg" alt="modernize-img"
                                    class="rounded-circle img-fluid" width="40" height="40">
                              </div>
                              <span class="badge text-bg-primary fs-2 fw-semibold"></span>
                            </div>
                            <div>
                              <a href="{{route('edit_project', ['id' => $project->id])}}"
                                  class="fs-7 my-4 fw-semibold text-white d-block lh-sm"><?= html_entity_decode($project->$title); ?> </a>
                              <div class="d-flex align-items-center gap-4">
                                  <div class="d-flex align-items-center gap-2 text-white fs-3 fw-normal">
                                    <i class="ti ti-eye fs-5"></i>
                                    {{$project->seen}}
                                  </div>
                                  <a onclick="delete_project('{{$project->id}}')" style="cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" style="    color: red;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
          
                                  </a>
                                
                                  <div class="d-flex align-items-center gap-1 text-white fw-normal ms-auto">
                                    <i class="ti ti-point"></i>
                                    <small>{{$project->created_at}}</small>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              @endif
                
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
      function delete_project (id){
        let conf = confirm("{{__('lan.Confirm this action')}}");
        if(conf === true){
          $.ajax({
            type:"post",
            url: "{{   route('delete_project')   }}",
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