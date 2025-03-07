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

  <title>User details</title>
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
                  <h4 class="fw-semibold mb-8">User details</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{route('index')}}">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">User details</li>
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
                <div class="col-lg-4 order-lg-1 order-2">
                  <div class="d-flex align-items-center justify-content-around m-4">
                    <div class="text-center">
                    </div>
                    <div class="text-center">
                    </div>
                    <div class="text-center">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                  <div class="mt-n5">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <div class="d-flex align-items-center justify-content-center round-110">
                        <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100">
                          <img src="{{url("images/profile/$user->image")}}" alt="modernize-img" class="w-100 h-100">
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <h5 class="mb-0">{{$user->username}}</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 order-last">
                  <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-end my-3 mx-4 pe-xxl-4 gap-3">
                   
                    @if($user->email_verified_at != "")
                      <li>
                        <span class="mb-1 badge text-bg-success">Verifed</span>
                      </li>
                    @else
                      <li>
                        <button onclick="send_mail_verify('{{$user->email}}')" class="btn btn-primary text-nowrap">Send mail to verify</button>
                      </li>
                    @endif
                  </ul>
                </div>
              </div>
              <ul class="nav nav-pills user-profile-tab justify-content-end mt-2 bg-primary-subtle rounded-2 rounded-top-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active hstack gap-2 rounded-0 py-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                    <i class="ti ti-user-circle fs-5"></i>
                    <span class="d-none d-md-block">Profile</span>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-followers-tab" data-bs-toggle="pill" data-bs-target="#pills-followers" type="button" role="tab" aria-controls="pills-followers" aria-selected="false">
                    <i class="ti ti-heart fs-5"></i>
                    <span class="d-none d-md-block">Followers</span>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-friends-tab" data-bs-toggle="pill" data-bs-target="#pills-friends" type="button" role="tab" aria-controls="pills-friends" aria-selected="false">
                    <i class="ti ti-user-circle fs-5"></i>
                    <span class="d-none d-md-block">Friends</span>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link hstack gap-2 rounded-0 py-6" id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery" type="button" role="tab" aria-controls="pills-gallery" aria-selected="false">
                    <i class="ti ti-photo-plus fs-5"></i>
                    <span class="d-none d-md-block">Gallery</span>
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
                      <h4 class="mb-3">Information</h4>
                      <p class="card-subtitle"></p>
                      <div class="vstack gap-3 mt-4">
                        <div class="hstack gap-6">
                          <i class="ti ti-briefcase text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->username}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-mail text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->email}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-device-desktop text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->device_name}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-device-desktop text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->device_type}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-device-desktop text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->auto_location}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-device-desktop text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->ip_device}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->street}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->apartment}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->city}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->area}}</h6>
                        </div>
                        <div class="hstack gap-6">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class=" mb-0">{{$user->country}}</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                
                </div>
                <div class="col-lg-8">


                  <div class="card">








                    @php 
                      $id = 0 ; 
                    @endphp

                    @foreach ($comments as $comment)
                    {{! $images = explode("_", $comment->images); }}
                      @if($comment->product_id != $id) 
                        @php  $id = $comment->product_id @endphp 
                        <div class="card-body border-bottom">
                          <div class="d-flex align-items-center gap-6 flex-wrap">
                            <img src="{{url("images/profile/$user->image")}}" alt="modernize-img" class="rounded-circle" width="40" height="40">
                            <h6 class="mb-0">{{$user->username}}</h6>
                            
                          </div>
                          <p class="text-dark my-3">
                            Nu kek vuzkibsu mooruno ejepogojo uzjon gag fa ezik disan he nah. Wij wo pevhij tumbug rohsa
                            ahpi ujisapse lo vap labkez eddu suk.
                          </p>
                          <img src="{{url("images/product/$images[0]")}}" style="object-fit: contain !important" alt="modernize-img" height="360" class="rounded-4 w-100 object-fit-cover">
                          <div class="d-flex align-items-center my-3">
                          </div>
                          <div class="position-relative">


                            @foreach ($comments as $comment_)

                              @if($comment_->product_id == $id)
                                <div class="p-4 rounded-4 text-bg-light mb-3">
                                  <div class="d-flex align-items-center gap-6 flex-wrap">
                                    <img src="{{url("images/profile/$user->image")}}" alt="modernize-img" class="rounded-circle" width="33" height="33">
                                    <h6 class="mb-0">{{$user->username}}</h6>
                                    <span class="fs-2">
                                    </span>
                                  </div>
                                  <p class="my-3">{{$comment_->comment}}
                                  </p>
                                  <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                      <a class="round-32 rounded-circle btn btn-primary p-0 hstack justify-content-center" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like">
                                        <i class="ti ti-thumb-up"></i>
                                      </a>
                                      <span class="text-dark fw-semibold">{{$comment_->rating}}</span>
                                    </div>
                                
                                  </div>
                                </div>
                              @endif


                            @endforeach


                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-6 flex-wrap p-3 flex-lg-nowrap">
                          <img src="{{url("images/profile/$user->image")}}" alt="modernize-img" class="rounded-circle" width="33" height="33">
                          <input type="text" class="form-control py-8" id="exampleInputtext{{$comment->id_review}}" aria-describedby="textHelp" placeholder="You will comment based on {{$user->username}} ( Please dont ask me why )">
                          <input type="number" style="width: 54px;" id="exampleInputtext2{{$comment->id_review}}" max="5" placeholder="rate">
                          <button class="btn btn-primary" onclick="set_comment('{{$comment->id_review}}', '{{$comment->user}}', '{{$comment->product_id}}')">Comment</button>
                        </div>
                      @endif      
                    @endforeach







                 
                  </div>
                
           
                </div>
              </div>
            </div>
    
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

  <script>
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



      function set_comment (id, user, product_id) {
        let ele = document.getElementById("exampleInputtext" + id) ; 
        let rate = document.getElementById("exampleInputtext2" + id) ; 
        if(ele.value != ""){
          $.ajax({
              type:"post",
              url: "{{   route('set_comment_admin')   }}",
              data: {
                "_token" : "{{csrf_token()}}",
                "product_id" : product_id,
                "comment" : ele.value,
                "rating" : rate.value,
                "user" : user,
                "id" : id
              },            
              success: function (data){
                if(data.status_code == 200){
                  MessageBox( "success", data.msg, 'success');
                  location.reload() ; 
              }else{
                MessageBox( "error", data.msg, 'error');
            }
              },
          });
        }
      }



  </script>
</body>

</html>