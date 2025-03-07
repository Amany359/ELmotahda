<!doctype html>

@if(Lang::locale() == 'ar')
<html class="no-js" lang="ar" dir="rtl">
@else
<html class="no-js" lang="en">
@endif


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{__("lan.Engineering Management")}}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <meta name="keywords" content="
        air conditioner,
        best air conditioner,
        portable air conditioner,
        window air conditioner,
        best portable air conditioner,
        best portable air conditioners,
        midea air conditioner,
        air conditioning,
        best air conditioner 2023,
        best portable air conditioners 2023,
        best window air conditioner,
        midea window air conditioner,
        best portable air conditioner 2023,
        portable air conditioners,
        best window air conditioners,
        u air conditioner,
        mini air conditioner,
        u shaped air conditioner,
        تكييف,
        تكييف كاريير,
        تكييف شارب,
        افضل تكييف,
        تكييف ميديا,
        تكييفات,
        افضل تكييف في مصر,
        احسن تكييف,
        تكييف صحراوي,
        سعر تكييف شارب,
        احسن تكييفات في مصر,
        تكييف كاريير اوبتى ماكس,
        تكييف فريش,
        تكييف كارير,
        تكييف كاريير 1.5 حصان,
        افضل سعر تكييف,
        تكييف تورنيدو,
        افضل تكييف موفر للكهرباء,
        تكييف كاريير optimax pro,
        سعر تكييف كاريير 1.5 حصان,
        مميزات وعيوب تكييف ميديا,
        تكييف كاريير optimax 2.25,
        تكييف ميديا ميشن,
        افضل تكييفات,
        تكييف شارب انفرتر,
        افضل تكييف انفرتر,
        تكييف مركزي,تكييف,
        التكييف المركزي,
        مؤسسة تكييف مركزي,
        مكييف مركزي,
        تكبيف مركزي,
        مؤسسة تكييف,
        تكييف صحراوي مركزي,
        مركزي,
        تعلم التكييف المركزي,
        تكييف شارب,
        التكييف,
        المركزي,
        للتكييف,
        التكييف الصحراوي المركزي,
        صرف الطاقة في التكييف المركزي,
        افضل قناة لتعلم التكييف المركزي,
        دكت التكييف,
        هندسة التكييف,
        تكييف مخفي,
        تكييف منفصل,
        مقاولات التكييف,
        افضل تكييف,
        تكييف شباك,
        تكييف اسبلت,
        مركزى,
        تكييف صحراوي,
        تكييف اسبليت,
        كنترول مركزي,
        افضل تكييف 2021,
        تكييف صحراوي جاك
    ">
    
    <!-- CSS
    ============================================ -->

  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('store/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('store/assets/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('store/assets/css/vendor/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('store/assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{url('store/assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{url('store/assets/css/vendor/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('store/assets/css/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{url('store/assets/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('store/assets/css/vendor/base.css')}}">
    <link rel="stylesheet" href="{{url('store/assets/css/style.min.css')}}">
    <link rel="icon" href="{{url('images/logos/icon.png')}}" type="image/gif" sizes="16x16">

</head>


<style>
    /* From Uiverse.io by abrahamcalsin */ 
    .dot-spinner {
    --uib-size: 2.8rem;
    --uib-speed: .9s;
    --uib-color: #ffffff;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    height: var(--uib-size);
    width: var(--uib-size);
    margin: 0px 10px ;
    display: none;
    }

    .dot-spinner__dot {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    height: 100%;
    width: 100%;
    }

    .dot-spinner__dot::before {
    content: '';
    height: 20%;
    width: 20%;
    border-radius: 50%;
    background-color: var(--uib-color);
    transform: scale(0);
    opacity: 0.5;
    animation: pulse0112 calc(var(--uib-speed) * 1.111) ease-in-out infinite;
    box-shadow: 0 0 20px rgba(18, 31, 53, 0.3);
    }

    .dot-spinner__dot:nth-child(2) {
    transform: rotate(45deg);
    }

    .dot-spinner__dot:nth-child(2)::before {
    animation-delay: calc(var(--uib-speed) * -0.875);
    }

    .dot-spinner__dot:nth-child(3) {
    transform: rotate(90deg);
    }

    .dot-spinner__dot:nth-child(3)::before {
    animation-delay: calc(var(--uib-speed) * -0.75);
    }

    .dot-spinner__dot:nth-child(4) {
    transform: rotate(135deg);
    }

    .dot-spinner__dot:nth-child(4)::before {
    animation-delay: calc(var(--uib-speed) * -0.625);
    }

    .dot-spinner__dot:nth-child(5) {
    transform: rotate(180deg);
    }

    .dot-spinner__dot:nth-child(5)::before {
    animation-delay: calc(var(--uib-speed) * -0.5);
    }

    .dot-spinner__dot:nth-child(6) {
    transform: rotate(225deg);
    }

    .dot-spinner__dot:nth-child(6)::before {
    animation-delay: calc(var(--uib-speed) * -0.375);
    }

    .dot-spinner__dot:nth-child(7) {
    transform: rotate(270deg);
    }

    .dot-spinner__dot:nth-child(7)::before {
    animation-delay: calc(var(--uib-speed) * -0.25);
    }

    .dot-spinner__dot:nth-child(8) {
    transform: rotate(315deg);
    }

    .dot-spinner__dot:nth-child(8)::before {
    animation-delay: calc(var(--uib-speed) * -0.125);
    }

    @keyframes pulse0112 {
    0%,
    100% {
        transform: scale(0);
        opacity: 0.5;
    }

    50% {
        transform: scale(1);
        opacity: 1;
    }
    }




    /* From Uiverse.io by Smit-Prajapati */ 
    .file-upload-form {
    width: fit-content;
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 16px;
    }
    .file-upload-label input {
    display: none;
    }
    .file-upload-label svg {
    height: 50px;
    fill: rgb(82, 82, 82);
    margin-bottom: 20px;
    }
    .file-upload-label {
    cursor: pointer;
    background-color: #ddd;
    padding: 30px 25px;
    height: 100%;
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
    transition: all 0.3s;
    }
    .browse-button:hover {
    background-color: rgb(14, 14, 14);
    }

</style>

<body class="sticky-header">
    
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    @include("website.layouts.header_store")
    <!-- End Header -->
    <div class="header-top-campaign" style="direction: ltr;background: #234982; ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="header-campaign-activation axil-slick-arrow arrow-both-side header-campaign-arrow">


                        <div class="slick-slide">
                            <div class="campaign-content">
                                <p style="color: white; font-size:20px;letter-spacing: 0.6px;  ">{{__("lan.Air Conditioning_contact")}}</p>
                            </div>
                        </div>
                        <div class="slick-slide">
                            <div class="campaign-content">
                                <p style="color: white; font-size:20px; letter-spacing: 0.6px; ">{{__("lan.Air Conditioning_contact")}}</p>
                            </div>
                        </div>
             


                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="{{route('index')}}">{{__("lan.home")}}</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">{{__("lan.Engineering Management")}}</li>
                            </ul>
                            <h1 class="title">{{__("lan.Engineering Management")}}</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="" style="    text-align: end;">
                                <img src="{{url('images/icons/air-conditioner_9047815.png')}}" alt="Image" style="width: 90px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->

        <!-- Start Contact Area  -->
        <div class="axil-contact-page-area axil-section-gap">
            <div class="container">
                <div class="axil-contact-page">
                    <div class="row row--30" style="justify-content: center;">
                        <div class="col-lg-8">
                            <div class="contact-form" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                                <h3 class="title mb--10">{{__("lan.Get a quote for your project")}}</h3>
                                <p>{{__("lan.Get a quote_info")}}</p>
                                <form id="contact-form" method="POST" class="axil-contact-form">
                                    @csrf
                                    
                                    
                                    <div class="row row--10">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="contact-name" style="left:44%;">{{__("lan.company")}} <span>*</span></label>
                                                <input type="text" class="engineering" name="company" id="contact-name">
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-location">{{__("lan.location")}} <span>*</span></label>
                                                <textarea id="contact-location" name="location" class="engineering" style="    min-height: 54px; padding: 0px 14px; padding-top: 17px;" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-phone">{{__("lan.phone")}} <span>*</span></label>
                                                <input style="line-height: 0px;" class="engineering" name="phone" type="number" id="contact-phone"  >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="contact-email">{{__("lan.email")}} <span></span></label>
                                                <input type="email" name="email" id="contact-email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="project" style="left:44%;">{{__("lan.project")}} <span>*</span></label>
                                                <select class="engineering" name="project" id="project" style="padding-right: 62px;">
                                                    <option style="font-size: 15px;" value="">{{__("lan.Project selection")}}</option>
                                                    <option style="font-size: 15px;" value="1">{{__("lan.hotel")}}</option>
                                                    <option style="font-size: 15px;" value="2">{{__("lan.Restaurants")}}</option>
                                                    <option style="font-size: 15px;" value="3">{{__("lan.office building")}}</option>
                                                    <option style="font-size: 15px;" value="5">{{__("lan.Residential unit")}}</option>
                                                    <option style="font-size: 15px;" value="6">{{__("lan.Compound")}}</option>
                                                    <option style="font-size: 15px;" value="7">{{__("lan.Mall")}}</option>
                                                    <option style="font-size: 15px;" value="8">{{__("lan.pharmacy")}}</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="type-company">{{__("lan.Type Your Message")}}</label>
                                                <textarea name="message" id="type-company" cols="1" rows="2"></textarea>
                                            </div>
                                        </div>



                                        <div class="file-upload-form">
                                            <label for="file" class="file-upload-label" id="file2">
                                                <div class="file-upload-design">
                                                <svg viewBox="0 0 640 512" height="1em">
                                                    <path
                                                    d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
                                                    ></path>
                                                </svg>
                                                <span class="browse-button">{{__("lan.Click to upload image")}}</span>
                                                </div>
                                                <input type="file" name="file" id="file" onchange="setImage(this, 'file2')" style="display: none;">

                                            </label>
                                        </div>

                                        

                                        
                                        <div class="col-12">
                                            <div class="form-group mb--0">
                                                <button name="button" onclick="engineering_management(this)" type="button" style="width: 100%; display: flex; justify-content: center; align-items: center; " id="submit" class="axil-btn btn-bg-primary">
                                                    {{__("lan.send")}}
                                                    <div class="dot-spinner">
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                    </div>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                     
                        
                        
                    </div>
                </div>
            </div>
            <!-- Start Google Map Area  -->
            <div class="axil-google-map-wrap axil-section-gap pb--0">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe style="width: 100%;border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4306.633477599554!2d30.94670592378728!3d29.97634852179275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145856f85118f2ed%3A0x867dac84a43adb7b!2zMTAxOCDYp9mE2YXYrdmI2LEg2KfZhNmF2LHZg9iy2YrYjCDZgtiz2YUg2KPZiNmEIDYg2KPZg9iq2YjYqNix2Iwg2YXYrdin2YHYuNipINin2YTYrNmK2LLYqSAzMjMyNDYz!5e1!3m2!1sar!2seg!4v1727657943810!5m2!1sar!2seg" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        
                    </div>
                </div>
            </div>
            <!-- End Google Map Area  -->
        </div>
        <!-- End Contact Area  -->
    </main>


    <!-- Modernizer JS -->
    <script src="{{url('store/assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{url('store/assets/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{url('store/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/js.cookie.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/sal.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/counterup.js')}}"></script>
    <script src="{{url('store/assets/js/vendor/waypoints.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{url('store/assets/js/main.js')}}"></script>


    <script>
        function engineering_management (ele) {
            let engineering = document.querySelectorAll(".engineering");
            let count_engineering =  0 ; 
            
            for (let i = 0; i < engineering.length; i++) {
                if(engineering[i].value != ""){
                    engineering[i].style.borderColor = 'black' ; 
                    count_engineering += 1 ;
                    if(count_engineering == engineering.length){
                    

                        let data_form = new FormData($("#contact-form")[0]);
                        document.querySelector(".dot-spinner").style.display = "flex";
                        ele.setAttribute("disabled", "");
                        $.ajax({
                            type:"post",
                            enctype : "multipart/form-data",
                            url: "{{   route('engineering_management')   }}",
                            data: data_form,
                            contentType: false,
                            cache: false ,
                            processData: false,
                            success: function (data){
                                console.log(data);
                                
                                ele.removeAttribute("disabled");
                                document.querySelector(".dot-spinner").style.display = "none";
                                if(data.status_code == 200){
                                    msg(data.msg, "success", 'success');
                                }else if(data.status_code == 400){
                                    msg(data.msg, "error", 'error');
                                }
                            },
                        });
                    }
                }else{
                    engineering[i].style.borderColor = "red" ;
                    window.scrollTo({
                        top: engineering[i].getBoundingClientRect().top,
                        left: 0,
                        behavior: "smooth",
                    });
                    // engineering[i].scrollIntoView();
                    

                }
            }
        }

        function setImage (e, id){
        
            
            if(e.value != ""){
                const reader = new FileReader();
                
               
                reader.onload = function () {
                    document.getElementById(id).style.cssText = `background-image: url('${reader.result}') ;background-size: cover; background-repeat: no-repeat; `;
                }
                reader.readAsDataURL(e.files[0]);
            

            }
         }
    </script>

</body>


</html>