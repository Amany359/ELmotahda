<!doctype html>


@if(Lang::locale() == 'ar')
<html class="no-js" style="text-align: start; " lang="ar" dir="rtl"> 
@else
<html class="no-js" lang="en">
@endif


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{__("lan.Find the right")}}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

    
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


    <style>
        .radio-inputs {
        display: flex;
        align-items: center;
        max-width: 350px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        .radio-inputs > * {
        margin: 6px;
        }

        .radio-input:checked + .radio-tile {
        border-color: #2260ff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        color: #2260ff;
        }

        .radio-input:checked + .radio-tile:before {
        transform: scale(1);
        opacity: 1;
        background-color: #2260ff;
        border-color: #2260ff;
        }

      

        .radio-input:checked + .radio-tile .radio-label {
        color: #2260ff;
        }

        .radio-input:focus + .radio-tile {
        border-color: #2260ff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
        }

        .radio-input:focus + .radio-tile:before {
        transform: scale(1);
        opacity: 1;
        }

        .radio-tile {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 80px;
        min-height: 80px;
        border-radius: 0.5rem;
        border: 2px solid #b5bfd9;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        transition: 0.15s ease;
        cursor: pointer;
        position: relative;
        }

        .radio-tile:before {
        content: "";
        position: absolute;
        display: block;
        width: 0.75rem;
        height: 0.75rem;
        border: 2px solid #b5bfd9;
        background-color: #fff;
        border-radius: 50%;
        top: 0.25rem;
        left: 0.25rem;
        opacity: 0;
        transform: scale(0);
        transition: 0.25s ease;
        }

        .radio-tile:hover {
        border-color: #2260ff;
        }

        .radio-tile:hover:before {
        transform: scale(1);
        opacity: 1;
        }

  
        .radio-label {
        color: #707070;
        transition: 0.375s ease;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        }

        .radio-input {
        clip: rect(0 0 0 0);
        -webkit-clip-path: inset(100%);
        clip-path: inset(100%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        white-space: nowrap;
        width: 1px;
        }
        /* From Uiverse.io by vinodjangid07 */ 
        .faq-button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: none;
        background-color: #ffe53b;
        background-image: linear-gradient(147deg, #ffe53b 0%, #ff2525 74%);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.151);
        position: relative;
        }
        .faq-button svg {
        height: 1.5em;
        fill: white;
        }
        .faq-button:hover svg {
        animation: jello-vertical 0.7s both;
        }
        @keyframes jello-vertical {
        0% {
            transform: scale3d(1, 1, 1);
        }
        30% {
            transform: scale3d(0.75, 1.25, 1);
        }
        40% {
            transform: scale3d(1.25, 0.75, 1);
        }
        50% {
            transform: scale3d(0.85, 1.15, 1);
        }
        65% {
            transform: scale3d(1.05, 0.95, 1);
        }
        75% {
            transform: scale3d(0.95, 1.05, 1);
        }
        100% {
            transform: scale3d(1, 1, 1);
        }
        }

        .tooltip {
        position: absolute;
        top: -20px;
        opacity: 0;
        background-color: #ffe53b;
        background-image: linear-gradient(147deg, #ffe53b 0%, #ff2525 74%);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition-duration: 0.2s;
        pointer-events: none;
        letter-spacing: 0.5px;
        }

        .tooltip::before {
        position: absolute;
        content: "";
        width: 10px;
        height: 10px;
        background-color: #ff2525;
        background-size: 1000%;
        background-position: center;
        transform: rotate(45deg);
        bottom: -15%;
        transition-duration: 0.3s;
        }

        .faq-button:hover .tooltip {
        top: -40px;
        opacity: 1;
        transition-duration: 0.3s;
        }
        .another_way{
        display: flex; 
        justify-content: center; 
        align-items: center; 
        margin: 54px 0px;
        position: relative;
        }
        .another_way::after{
            content: ""; 
            position: absolute;
            width: 30%;
            height: 2px;
            top: 112%;
            border-radius: 5px;
            box-shadow: 0 7px 14px 0px rgb(0 0 0 / 100%);
        }


        .card {
            justify-content: center;
            align-items: center;
            width: 35rem;
            padding: 1rem;
            text-align: center;
            border-radius: .8rem;
            background: none;
            border: none;
        }

        .card__skeleton {
        background-image: linear-gradient(
                90deg,
                #ccc 0px,
                rgb(229 229 229 / 90%) 40px,
                #ccc 80px
            );
        background-size: 300%;
        background-position: 100% 0;
        border-radius: inherit;
        animation: shimmer 1.5s infinite;
        }

        .card__title {
            width: 80%;
            height: 15px;
        }

        .card__description {
            width: 100%;
        height: 100px;
        margin-bottom: 15px;

        }

        @keyframes shimmer {
        to {
            background-position: -100% 0;
        }
        }

    </style>

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

</head>


<body class="sticky-header overflow-md-visible">
    
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->

    
    @include('website.layouts.header_store')
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
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area bg-color-white">
            <div class="single-product-thumb axil-section-gap pb--20 pb_sm--0 bg-vista-white">
                <div class="container">
                    <div class="row row--25" style="flex-direction: column; ">
                        <div class="col-lg-12 mb--40">
                            <div class="h-100">
                                <div class="position-sticky sticky-top">
                                    <div class="row row--10 air_found" style="justify-content: center; ">
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">
                                                <div class="thumbnail" style="    display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                                    <button class="faq-button" onclick="find_air(this)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                          <path
                                                            d="M80 160c0-35.3 28.7-64 64-64h32c35.3 0 64 28.7 64 64v3.6c0 21.8-11.1 42.1-29.4 53.8l-42.2 27.1c-25.2 16.2-40.4 44.1-40.4 
                                                            74V320c0 17.7 14.3 32 32 32s32-14.3 32-32v-1.4c0-8.2 4.2-15.8 11-20.2l42.2-27.1c36.6-23.6 58.8-64.1 
                                                            58.8-107.7V160c0-70.7-57.3-128-128-128H144C73.3 32 16 89.3 16 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm80 
                                                            320a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"
                                                          ></path>
                                                        </svg>
                                                        <span class="tooltip">ElShora</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                 
                                     
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        
                        <div class="col-lg-12 mb--40" style="text-align: center;">
                            <div class="contact-form">
                               <h3 style="margin: 16px 0px; " class="title mb--10">{{__("lan.Find the right")}}</h3>
                               <form id="steps" method="POST"  class="axil-contact-form">
                                    @csrf
                                  <div class="row row--10" style="flex-direction: column;     align-items: center;">



                                    
                                        <div class="col-lg-4">
                                            <div class="form-group" >
                                                <label for="space">{{__("lan.Space")}}  <span>*</span></label>
                                                <input type="number" style="line-height: 0px; font-size:20px;" onkeypress="space_chooes('1')" name="space" class="fin_air" id="space">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group" style="    text-align: center;">
                                                <h5 style="margin: 0px 10px ;"> {{__("lan.or")}} </h5>
                                            </div>
                                        </div>    
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="height">{{__("lan.height")}} <span>*</span></label>
                                                <input type="number" style="line-height: 0px; font-size:20px;" onkeypress="space_chooes('2')" class="fin_air" name="height" id="height">
                                            </div>
                                         </div>
                                         <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="width">{{__("lan.width")}}  <span>*</span></label>
                                                <input type="number" style="line-height: 0px; font-size:20px;" name="width" onkeypress="space_chooes('2')" class="fin_air" id="width">
                                             </div>
                                         </div>
                                         
                                     </div>

                                     <script>
                                        function space_chooes (chooes){
                                            if(chooes == '1'){
                                                document.getElementById("height").value = "" ; 
                                                document.getElementById("width").value = "" ;

                                                document.getElementById("height").classList.remove("fin_air") ; 
                                                document.getElementById("width").classList.remove("fin_air") ; 
                                                document.getElementById("space").classList.add("fin_air") ; 

                                                document.getElementById("height").style.background = "#ffffff36" ; 
                                                document.getElementById("width").style.background = "#ffffff36" ; 
                                                document.getElementById("space").style.background = "white" ; 
                                            }else{
                                                document.getElementById("height").style.background = "white" ; 
                                                document.getElementById("width").style.background = "white" ; 
                                                document.getElementById("space").style.background = "#ffffff36" ; 
                                                document.getElementById("space").value = "" ; 
                                                document.getElementById("space").classList.remove("fin_air") ;
                                                document.getElementById("height").classList.add("fin_air") ; 
                                                document.getElementById("width").classList.add("fin_air") ; 
 
                                            }
                                            
                                        }
                                     </script>



                                     <div class="col-lg-12" style="margin-bottom: 15px; ">
                                        <div class="">
                                           <p style="font-weight: bold; margin:5px 0px; ">{{__("lan.top floor")}} <span>*</span></p>

                                           <div class="radio-inputs" style="justify-content: center;max-width:100%;">
                                            <label>
                                                <input class="radio-input" type="radio" value="1" name="service">
                                                    <span class="radio-tile">
                                                        <span class="radio-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                                                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M5 12l5 5l10 -10" />
                                                              </svg>
                                                            
                                                        </span>
                                                        <span class="radio-label">{{__("lan.Yes")}}</span>
                                                    </span>
                                            </label>
                                            <label>
                                                <input checked="" class="radio-input" type="radio" value="0" name="service">
                                                <span class="radio-tile">
                                                    <span class="radio-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-ban">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                            <path d="M5.7 5.7l12.6 12.6" />
                                                          </svg>
                                                    </span>
                                                    <span class="radio-label">{{__("lan.No")}}</span>
                                                </span>
                                            </label>
                                         
                                        </div>


                                        </div>
                                     </div>





                                     <div class="col-lg-12" style="margin-bottom: 15px; ">
                                        <div class="">
                                           <p style="font-weight: bold; margin:5px 0px; ">{{__("lan.Residential")}} <span>*</span></p>

                                           <div class="radio-inputs" style="justify-content: center; max-width:100%;">
                                            <label>
                                                <input checked class="radio-input" type="radio" value="1" name="building">
                                                    <span class="radio-tile">
                                                        <span class="radio-icon">
                                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2" 
                                                             stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building">
                                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                             <path d="M3 21l18 0" /><path d="M9 8l1 0" /><path d="M9 12l1 0" /><path d="M9 16l1 0" /><path d="M14 8l1 0" /><path d="M14 12l1 0" />
                                                             <path d="M14 16l1 0" /><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" /></svg>
                                                            
                                                        </span>
                                                        <span class="radio-label">{{__("lan.Administrative building")}}</span>
                                                    </span>
                                            </label>
                                            <label>
                                                <input class="radio-input" type="radio" value="0" name="building">
                                                <span class="radio-tile">
                                                    <span class="radio-icon">
                                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  
                                                        stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                                                    </span>
                                                    <span class="radio-label">{{__("lan.Residential building")}}</span>
                                                </span>
                                            </label>
                                         
                                        </div>


                                        </div>
                                     </div>

                                     <div class="col-lg-12" style="justify-content: center;  display : flex;">
                                        <div class="form-group col-lg-6" >
                                           <label for="contact-email">{{__("lan.email")}} <span>{{__("lan.optional")}}</span></label>
                                           <input type="email" name="email" id="contact-email">
                                        </div>
                                     </div>
                                     
                                     <div class="col-lg-12" style="justify-content: center;  display : flex;">
                                        <div class="form-group col-lg-6" >
                                           <label for="contact-phone">{{__("lan.phone")}} <span>{{__("lan.optional")}}</span></label>
                                           <input type="text" name="phone" id="contact-phone">
                                        </div>
                                     </div>
                                     


                                     <div class="col-12" style="justify-content: center;  display : flex;">
                                        <div class="form-group mb--0 col-6">
                                           <button type="button" onclick="find_air(this)" class="axil-btn btn-bg-primary">{{__("lan.Send Message")}}</button>
                                        </div>
                                     </div>
                                  </div>
                               </form>
                            </div>
                        </div>
                         
                       
                        
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->

        </div>
        <!-- End Shop Area  -->

      
    </main>


    <!-- JS
============================================ -->
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

        function find_air (ele) {
            let fin_air = document.querySelectorAll(".fin_air");
            let count_fin_air =  0 ; 
            
            for (let i = 0; i < fin_air.length; i++) {
                if(fin_air[i].value != ""){
                    fin_air[i].style.borderColor = 'black' ; 
                    count_fin_air += 1 ;
                    if(count_fin_air == fin_air.length){
                        document.querySelector(".air_found").innerHTML = `
                        <div class="card">
                            <div class="card__skeleton card__description"></div>
                            <div class="card__skeleton card__title"></div>
                        </div>
                        ` ; 

                        let data_form = new FormData($("#steps")[0]);
                        ele.setAttribute("disabled", "");
                        $.ajax({
                            type:"post",
                            enctype : "multipart/form-data",
                            url: "{{   route('find_air')   }}",
                            data: data_form,
                            contentType: false,
                            cache: false ,
                            processData: false,
                            success: function (data){
                                ele.removeAttribute("disabled");
                                if(data.status_code == 200){
                                    document.querySelector(".air_found").innerHTML = data.data ; 
                                    window.scrollTo({
                                        top: 0, // Y-axis position
                                        left: 0, // X-axis position
                                        behavior: "smooth", // Determines whether scrolling animates smoothly
                                    });
                                }else if(data.status_code == 400){
                                    msg(data.msg, "error", 'error');
                                }else if(data.status_code == 500){
                                    questions(
                                        "{{__('lan.Engineering Management')}}",
                                        "{{__('lan.Engineering Management_info')}}",
                                        '{{__("lan.You will be redirected now")}}',
                                        "success",
                                        "{{route('engineering')}}",
                                        btn = "{{__('lan.I agree')}}",
                                        btn2 = "{{__('lan.No')}}"
                                    );
                                }
                            },
                        });
                    }
                }else{
                    fin_air[i].style.borderColor = "red" ;
                    window.scrollTo({
                        top: engineering[i].getBoundingClientRect().top,
                        left: 0,
                        behavior: "smooth",
                    });
                }
            }
        }

        
        function some_floor (ele){
            if(ele.value == "1"){
                document.querySelector('.services0').checked = false
            }else{
                document.querySelector('.services1').checked = false
            }
        }

        function residential (ele){
            if(ele.value == "1"){
                document.querySelector('.residential0').checked = false
            }else{
                document.querySelector('.residential1').checked = false
            }
        }




    </script>
</body>


</html>