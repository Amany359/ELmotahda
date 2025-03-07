<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign In</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/logos/black_logo.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('website2/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('website2/assets/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('website2/assets/css/vendor/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('website2/assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{url('website2/assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{url('website2/assets/css/vendor/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('website2/assets/css/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{url('website2/assets/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('website2/assets/css/vendor/base.css')}}">
    <link rel="stylesheet" href="{{url('website2/assets/css/style.min.css')}}">

</head>


<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <a href="{{route('index')}}" class="site-logo"><img src="{{url('images/logos/black_logo.png')}}" style="width:80px;"  alt="logo"></a>
                </div>
                <div class="col-sm-8" style="background: white">
                    <div class="singin-header-btn">
                        <p>{{__("lan.Dont_have_ac")}}</p>
                        <a href="{{route('sign_up')}}" style="color: black" class="axil-btn btn-bg-secondary sign-up-btn">{{__("lan.Sign Up")}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--9">
                    <h3 class="title">{{__("lan.We Offer the Best Products")}}</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">{{__("lan.welcome_to")}}</h3>
                        <p class="b2 mb--55">{{__("lan.Enter your detail below")}}</p>
                        <form class="singin-form" id="signin">
                            @csrf
                            <div class="form-group">
                                <label>{{__("lan.email")}}</label>
                                <input type="email" class="form-control login_inputs" name="email" placeholder="example@example.com">
                            </div>
                            <div class="form-group">
                                <label>{{__("lan.placeholder password")}}</label>
                                <input type="password" class="form-control login_inputs" name="password" placeholder="*******">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <button type="button" onclick="singin(this)" class="axil-btn btn-bg-primary submit-btn">{{__("lan.Sign In")}}</button>
                                <a href="forgot-password.html" class="forgot-btn">{{__("lan.Forgot Password")}}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{url('website2/assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{url('website2/assets/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{url('website2/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/js.cookie.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/sal.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/counterup.js')}}"></script>
    <script src="{{url('website2/assets/js/vendor/waypoints.min.js')}}"></script>
    <script src="{{url('jquery-3.6.1.js')}}"></script>

    <!-- Main JS -->
    <script src="{{url('website2/assets/js/main.js')}}"></script>

    
    @include("website.layouts.noti")


<script>
    function singin (ele){
        let login_inputs = document.querySelectorAll(".login_inputs");
        let check_login_inputs = 0 ;
        for (let i = 0; i < login_inputs.length; i++) {
            if(login_inputs[i].value != ""){
                login_inputs[i].style.borderColor = 'rgb(231, 231, 231)' ;
                check_login_inputs += 1; 
                if(login_inputs.length == check_login_inputs){
                    let data_form = new FormData($("#signin")[0]);
                    ele.setAttribute("disabled", "disabled");

                    $.ajax({
                        type:"post",
                        enctype : "multipart/form-data",
                        url: "{{   route('login')   }}",
                        data: data_form,
                        contentType: false,
                        cache: false ,
                        processData: false,
                        success: function (data){
                            ele.removeAttribute("disabled");

                            if(data.status_code == 200){
                                alert("{{__('lan.success_process')}}");
                                location.href = "{{route('index')}}"
                            }else{
                                msg(data.msg , "Login", 'error');
                            }
                        },
                    });
                }
            }else{
                login_inputs[i].style.borderColor = 'red' ;
            }
        }
    }


</script>

</body>


</html>