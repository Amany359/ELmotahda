<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/logos/black_logo.png')}}">

    <!-- CSS
    ============================================ -->

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
                <div class="col-md-6">
                    <a href="{{route('index')}}" class="site-logo"><img src="{{url('images/logos/black_logo.png')}}" style="width:80px;"  alt="logo"></a>
                </div>
                <div class="col-md-6" style="background: white">
                    <div class="singin-header-btn">
                        <p>{{__("lan.Have_an_account")}}</p>
                        <a href="{{route('sign_in')}}" class="axil-btn btn-bg-secondary sign-up-btn" style="color: black">{{__("lan.Sign In")}}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--10">
                    <h3 class="title">{{__("lan.We Offer the Best Products")}}</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">{{__("lan.welcome_to")}}</h3>
                        <p class="b2 mb--55">{{__("lan.Enter your detail below")}}</p>
                        <form class="singin-form" id="register" style="padding-bottom: 100px; ">
                            @csrf
                            <div class="form-group">
                                <label>{{__("lan.placeholder username")}}</label>
                                <input type="text" class="register_inputs form-control" name="username" placeholder="example">
                            </div>
                            <div class="form-group">
                                <label>{{__("lan.email")}}</label>
                                <input type="email" class="register_inputs form-control" name="email" placeholder="example@example.com">
                            </div>
                            <div class="form-group">
                                <label>{{__("lan.phone")}}</label>
                                <input type="number" class="register_inputs form-control" name="phone" placeholder="00000000">
                            </div>
                            <div class="form-group">
                                <label>{{__("lan.placeholder password")}}</label>
                                <input type="password" class="register_inputs form-control" name="password" placeholder="123456789">
                            </div>
                            <div class="form-group">
                                <label>{{__("lan.Confirm_Password")}}</label>
                                <input type="password" class="register_inputs form-control" name="conf_password" placeholder="123456789">
                            </div>
                            <div class="form-group">
                                <button type="button"  onclick="register(this)" class="axil-btn btn-bg-primary submit-btn">{{__("lan.Create an account")}}</button>
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

</body>


@include("website.layouts.noti")

<script>
    
    function register (ele){
        let register_inputs = document.querySelectorAll(".register_inputs");
        let check_register_inputs = 0 ;
        for (let i = 0; i < register_inputs.length; i++) {
            if(register_inputs[i].value != ""){
                register_inputs[i].style.borderColor = 'rgb(231, 231, 231)' ;
                check_register_inputs += 1; 
                if(register_inputs.length == check_register_inputs){
                    let data_form = new FormData($("#register")[0]);
                    ele.setAttribute("disabled", "disabled");
                    $.ajax({
                        type:"post",
                        enctype : "multipart/form-data",
                        url: "{{   route('register')   }}",
                        data: data_form,
                        contentType: false,
                        cache: false ,
                        processData: false,
                        success: function (data){
                            ele.removeAttribute("disabled");
                            if(data.status_code == 200){
                                alert("{{__('lan.success_process')}}");
                                location.href = "{{route('sign_in')}}"
                            }else{
                                msg(data.msg , "register", 'error');
                            }
                        },
                    });
                }
            }else{
                register_inputs[i].style.borderColor = 'red' ;
            }
        }
    }
</script>



</html>