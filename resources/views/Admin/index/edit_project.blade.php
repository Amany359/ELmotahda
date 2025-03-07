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

  <title>{{__("lan.Edit project")}}</title>
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
                  <h4 class="fw-semibold mb-8">{{__("lan.Edit project")}}</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{route('Dashboard')}}">{{__("lan.home")}}</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">{{__("lan.Edit project")}}</li>
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


          <form action="" id="edit_project">
            @csrf
            <input type="hidden" id="content_ar" name="content_ar">
            <input type="hidden" id="content_en" name="content_en">
            <input type="hidden" id="desc_ar" name="desc_ar">
            <input type="hidden" id="desc_en" name="desc_en">
            <input type="hidden" value="{{$project->id}}" name="id">
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
                        <input type="text" name="title_ar" value="{{$project->title_ar}}" class="form-control data_inputs" placeholder="{{__("lan.title")}}">
                        <p class="fs-2">{{__("lan.field is required")}}</p>
                      </div>
                      
                      <div class="mb-4">
                        <label class="form-label">{{__("lan.title")}} (English)<span class="text-danger">*</span>
                        </label>
                        <input type="text" name="title_en" value="{{$project->title_ar}}" class="form-control data_inputs" placeholder="{{__("lan.title")}}">
                        <p class="fs-2">{{__("lan.field is required")}}</p>
                      </div>
                      
                      <div class="snow-editor" style="height: 300px;">
                        <?= html_entity_decode($project->desc_ar); ?> 
                      </div>
              
                 
                      <div class="snow-editor" style="height: 300px;">
                        <?= html_entity_decode($project->desc_en); ?> 
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
                  <form action=""></form>

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-7">{{__("lan.Media")}}</h4>
                      {{ !$image = explode("_", $project->images) }}


                        @if(isset($image[0]))
                          <form style="display:inline" id="form{{$project->id}}1">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="{{$image[0]}}">
                            <input name="image" onchange="change_photo( {{$project->id}},this,'1')" id="image1_" type="file"  style="display: none" />
                          </form>
                          <label for="image1_" style="background: url('{{url("images/projects/$image[0]")}}'); background-size: contain; background-repeat: no-repeat;" class="file-upload-label" multiple="multiple" id="image1">
                        @else
                          <form style="display:inline" action="" id="form{{$project->id}}1">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="none_">
                            <input name="image" onchange="change_photo( {{$project->id}},this,'1')"  id="image1_" type="file"   style="display: none;" />
                          </form>
                          <label for="image1_" class="file-upload-label" multiple="multiple" id="image1">
                        @endif
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
                            <span class="browse-button">Browse file</span>
                            <button onclick="remove_photo({{$project->id}},this,'1')" type="button" class="btn waves-effect waves-light btn-rounded bg-danger-subtle text-danger">
                              Remove
                            </button>                        
                          </div>
                        </label>


                      

                        @if(isset($image[1]))
                          <form style="display:inline" action="" id="form{{$project->id}}2">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="{{$image[1]}}">
                            <input name="image" onchange="change_photo( {{$project->id}},this,'2')" id="image2_" type="file"  style="display: none" />
                          </form>
                        <label for="image2_" style="background: url('{{url("images/projects/$image[1]")}}'); background-size: contain; background-repeat: no-repeat;" class="file-upload-label" multiple="multiple" id="image2">
                        @else
                          <form style="display:inline" action="" id="form{{$project->id}}2">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="none_">
                            <input name="image" onchange="change_photo( {{$project->id}},this, '2')" id="image2_" type="file"  style="display: none" />
                          </form>
                        <label for="image2_" class="file-upload-label" multiple="multiple" id="image2">
                        @endif
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
                            <span class="browse-button">Browse file</span>
                            <button onclick="remove_photo( {{$project->id}},this, '2')" type="button" class="btn waves-effect waves-light btn-rounded bg-danger-subtle text-danger">
                              Remove
                            </button>   
                          </div>
                        </label>
                  


                      
                        @if(isset($image[2]))
                          <form style="display:inline" action="" id="form{{$project->id}}3">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="{{$image[2]}}">
                            <input name="image" onchange="change_photo( {{$project->id}},this, '3')" id="image3_" type="file"  style="display: none" />
                          </form>

                          <label for="image3_" style="background: url('{{url("images/projects/$image[2]")}}'); background-size: contain; background-repeat: no-repeat;"  class="file-upload-label" multiple="multiple" id="image3">
                        @else
                          <form style="display:inline" action="" id="form{{$project->id}}3">

                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="none_">
                            <input name="image" onchange="change_photo( {{$project->id}},this, '3')" id="image3_" type="file"  style="display: none" />
                          </form>

                          <label for="image3_" class="file-upload-label" multiple="multiple" id="image3">
                        @endif
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
                            <span class="browse-button">Browse file</span>
                            <button onclick="remove_photo( {{$project->id}},this,'3')" type="button" class="btn waves-effect waves-light btn-rounded bg-danger-subtle text-danger">
                              Remove
                            </button>   
                          </div>
                        </label>
                  


                      
                        @if(isset($image[3]))
                          <form style="display:inline" action="" id="form{{$project->id}}4">

                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="{{$image[3]}}">
                            <input name="image" onchange="change_photo( {{$project->id}},this, '4')" id="image4_" type="file"  style="display: none" />
                          </form>

                          <label for="image4_" style="background: url('{{url("images/projects/$image[3]")}}'); background-size: contain; background-repeat: no-repeat;"  class="file-upload-label" multiple="multiple" id="image4">
                        @else
                          <form style="display:inline" action="" id="form{{$project->id}}4">

                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="none_">
                            <input name="image" onchange="change_photo( {{$project->id}},this, '4')" id="image4_" type="file"  style="display: none" />
                          </form>

                          <label for="image4_" class="file-upload-label" multiple="multiple" id="image4">
                        @endif
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
                            <span class="browse-button">Browse file</span>
                            <button onclick="remove_photo({{$project->id}},this, '4')" type="button" class="btn waves-effect waves-light btn-rounded bg-danger-subtle text-danger">
                              Remove
                            </button>   
                          </div>
                        </label>
                  


                      
                        @if(isset($image[4]))
                          <form style="display:inline" action="" id="form{{$project->id}}5">

                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="{{$image[4]}}">
                            <input name="image" onchange="change_photo( {{$project->id}},this, '5')" id="image5_" type="file"  style="display: none" />
                          </form>
                        
                          <label for="image5_" style="background: url('{{url("images/projects/$image[4]")}}'); background-size: contain; background-repeat: no-repeat;" class="file-upload-label" multiple="multiple" id="image5">
                            @else
                            <form style="display:inline" action="" id="form{{$project->id}}5">

                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="none_">
                              <input name="image" onchange="change_photo( {{$project->id}},this, '5')" id="image5_" type="file"  style="display: none" />
                            </form>
                          <label for="image5_" class="file-upload-label" multiple="multiple" id="image5">
                        @endif
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
                            <span class="browse-button">Browse file</span>
                            <button onclick="remove_photo({{$project->id}},this, '5')" type="button" class="btn waves-effect waves-light btn-rounded bg-danger-subtle text-danger">
                              Remove
                            </button>   
                          </div>
                        </label>
                  


                      
                        @if(isset($image[5]))
                          <form style="display:inline" action="" id="form{{$project->id}}6">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="{{$image[5]}}">
                            <input name="image" onchange="change_photo( {{$project->id}},this, '6')" id="image6_" type="file"  style="display: none" />
                          </form>

                          <label for="image6_" style="background: url('{{url("images/projects/$image[5]")}}'); background-size: contain; background-repeat: no-repeat;" class="file-upload-label" multiple="multiple" id="image6">
                        @else
                          <form style="display:inline" action="" id="form{{$project->id}}6">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <input type="hidden" name="index" value="none_">
                            <input name="image" onchange="change_photo( {{$project->id}},this, '6')" id="image6_" type="file"  style="display: none" />
                          </form>

                          <label for="image6_" class="file-upload-label" multiple="multiple" id="image6">
                        @endif
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
                            <span class="browse-button">Browse file</span>

                            <button onclick="remove_photo({{$project->id}}, this, '6')" type="button" class="btn waves-effect waves-light btn-rounded bg-danger-subtle text-danger">
                              Remove
                            </button>   

                          </div>
                        </label>

                


                
                  </div>
                </div>
  
  
  
  
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-7">{{__("lan.content")}}</h4>
  
                      <div class="email-repeater mb-3">

                
                        <div class="snow-editor" style="height: 300px;">
                          <?= html_entity_decode($project->content_ar); ?> 
                        </div>
                
                   
                        <div class="snow-editor" style="height: 300px;">
                          <?= html_entity_decode($project->content_en); ?> 
                        </div>
                
    
                        
                      </div>
                  </div>
                </div>
  
  
  


                <div class="form-actions mb-5" style="display: flex; justify-content: flex-start; align-items: center;">
                  <button type="button" onclick="edit_project()" class="btn btn-primary" style="    margin: 0px 17px;">
                    {{__("lan.Edit project")}}
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
              <div class="col-lg-4">
                <div class="offcanvas-md offcanvas-end overflow-auto" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">


                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between mb-7">
                        <h4 class="card-title">{{__("lan.status")}}</h4>
                        <div class="p-2 h-100 bg-success rounded-circle"></div>
                      </div>
                        <div>
                          <select class="form-select mr-sm-2  mb-2" id="inlineFormCustomSelect" name="status">
                            @if($project->status == "1")
                              <option selected value="1">{{__("lan.active")}}</option>
                              <option value="0">{{__("lan.Hidden")}}</option>
                            @else
                            <option selected value="0">{{__("lan.Hidden")}}</option>
                              <option value="1">{{__("lan.active")}}</option>
                            @endif
                          </select>
                          <p class="fs-2 mb-0">
                            {{__("lan.Set the product status")}}
                          </p>
                        </div>
                    </div>
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

    function edit_project(){
      document.querySelector(".dots").style.display = "inline-block" ;
      let desc_ar = document.querySelectorAll(".snow-editor .ql-editor")[0];
      let desc_en = document.querySelectorAll(".snow-editor .ql-editor")[1];
      let content_ar = document.querySelectorAll(".snow-editor .ql-editor")[2];
      let content_en = document.querySelectorAll(".snow-editor .ql-editor")[3];
      
      document.getElementById("content_ar").value = content_ar.innerHTML ;
      document.getElementById("content_en").value = content_en.innerHTML ;
      document.getElementById("desc_en").value = content_en.innerHTML ;
      document.getElementById("desc_ar").value = desc_ar.innerHTML ;
      let data_inputs = document.querySelectorAll(".data_inputs");
      let count = 0 ; 
      for (let i = 0; i < data_inputs.length; i++) {
        if(data_inputs[i].value != ""){
          count += 1 ; 
          data_inputs[i].style.cssText = "border-color: #333f55 !important;";

          if(count == data_inputs.length){
            let data_form = new FormData($("#edit_project")[0]);
              $.ajax({
                  type:"post",
                  enctype : "multipart/form-data",
                  url: "{{   route('request_edit_project')   }}",
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

    
    function remove_photo (id, ele, id_){
      document.querySelector(".dots").style.display = "inline-block" ;

      let data_form = new FormData($(`#form${id}${id_}`)[0]);
      $.ajax({
        type:"post",
        enctype : "multipart/form-data",
        url: "{{   route('remove_photo_project')   }}",
        data: data_form,
        contentType: false,
        cache: false ,
        processData: false,
        success: function (data){
            document.querySelector(".dots").style.display = "none" ;
          
            if(data.status_code == 200){
                location.reload(); 
                MessageBox("Good Job!", data.msg, "success");
            }else{
                MessageBox("Good Job!", data.msg, "error");
            }
        },
      });
    }

    function change_photo (id, ele, id_){
      
      document.querySelector(".dots").style.display = "inline-block" ;
      
      let data_form = new FormData($(`#form${id}${id_}`)[0]);
      console.log(id, ele, id_);
      console.log(document.getElementById(`form${id}${id_}`));
      console.log(`form${id}${id_}`);
      $.ajax({
        type:"post",
        enctype : "multipart/form-data",
        url: "{{   route('change_edit_photo_project')   }}",
        data: data_form,
        contentType: false,
        cache: false ,
        processData: false,
        success: function (data){
          console.log(data);
          
          document.querySelector(".dots").style.display = "none" ;

            if(data.status_code == 200){
              setImage(ele, `image${id_}`);
              MessageBox("Good Job!", data.msg, "success");
            }else{
              MessageBox("Good Job!", data.msg, "error");
            }
        },
      });
    }



  </script>

  
</body>

</html>