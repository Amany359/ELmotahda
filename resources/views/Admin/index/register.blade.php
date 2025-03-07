<!DOCTYPE html>


@if(Lang::locale() == 'ar')
{{!$dir = "rtl"}}
<html lang="ar"  dir="rtl" >
@else
{{!$dir = "ltr"}}
<html lang="en" dir="ltr" >
@endif

@include("Admin.layouts.Message")

   
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
      <!-- Favicon icon-->
      <link rel="shortcut icon" type="image/png" href="{{url('admin/assets/images/logos/favicon.png')}}" />
      
      <!-- Core Css -->
      <link rel="stylesheet" href="{{url('admin/assets/css/styles.css')}}" />
      
      <title>{{__("lan.Register")}}</title>
   </head>
   
   <body>
      <!-- Preloader -->
      <div class="preloader">
         <img src="{{url('admin/assets/images/logos/favicon.png')}}" alt="loader" class="lds-ripple img-fluid" />
      </div>

      <div id="main-wrapper" class="auth-customizer-none">
         <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
               <div class="row justify-content-center w-100">
                  <div class="col-md-8 col-lg-6 col-xxl-3 auth-card" >
                     <div class="card mb-0">
                        <div class="card-body">
                           <a href="{{route('Dashboard')}}" style="display: flex !important; justify-content: center; align-items: center;" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                              <img src="{{url('images/logos/blue_logo.png')}}" style="width:170px;" class="dark-logo" alt="Logo-Dark" />
                              <img src="{{url('images/logos/none_logo.png')}}" style="width:170px;" class="light-logo" alt="Logo-light" />
                           </a>
                           
                           <form  id="register_admin">
                            @csrf
                              <div class="mb-3">
                                 <label for="exampleInputEmail1" class="form-label">{{__("lan.placeholder username")}}</label>
                                 <input type="text" class="data_inputs form-control" name="username" id="exampleInputtext" aria-describedby="textHelp">
                              </div>
                              <div class="mb-3">
                                 <label for="exampleInputEmail1" class="form-label">{{__("lan.email")}}</label>
                                 <input type="email" class="data_inputs form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-4">
                                 <label for="exampleInputPassword1" class="form-label">{{__("lan.placeholder password")}}</label>
                                 <input type="password" class="data_inputs form-control" name="password" id="exampleInputPassword1">
                              </div>
                              <div class="mb-4">
                                 <label for="exampleInputPassword1" class="form-label">{{__("lan.Confirm_Password")}}</label>
                                 <input type="password" class="data_inputs form-control" name="conf_password" id="exampleInputPassword1">
                              </div>
                              <a onclick="sign_up(this)" class="btn btn-primary w-100 py-8 mb-4 rounded-2">
                                {{__("lan.Sign Up")}}
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
                              </a>
                              <div class="d-flex align-items-center">
                                 <p class="fs-4 mb-0 text-dark">{{__("lan.Have_an_account")}}</p>
                                 <a class="text-primary fw-medium ms-2" href="../main/authentication-login.html">{{__("lan.Sign In")}}</a>
                              </div>
                           </form>
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
    
      </div>
      <div class="dark-transparent sidebartoggler"></div>
      <!-- Import Js Files -->
      <script src="{{url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('admin/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
      <script src="{{url('admin/assets/js/theme/app.init.js')}}"></script>
      <script src="{{url('admin/assets/js/theme/theme.js')}}"></script>
      <script src="{{url('admin/assets/js/theme/app.min.js')}}"></script>
      
      <!-- solar icons -->


      <script>
          function sign_up(){
            let data_inputs = document.querySelectorAll(".data_inputs");
            let count = 0 ; 
            for (let i = 0; i < data_inputs.length; i++) {
              if(data_inputs[i].value != ""){
                count += 1 ; 
                data_inputs[i].style.cssText = "border-color: #333f55 !important;";

                if(count == data_inputs.length){
                  let data_form = new FormData($("#register_admin")[0]);
                    $.ajax({
                        type:"post",
                        enctype : "multipart/form-data",
                        url: "{{   route('register_admin')   }}",
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
      </script>



   </body>
   
</html>
