<!DOCTYPE html>

@if(Lang::locale() == 'ar')
    <html lang="ar" dir="rtl" style="direction: rtl; text-align:start;">
@else
    <html lang="en" dir="ltr" style="direction: ltr; text-align:start;">
@endif


<head>
    <title>{{__("lan.about")}}</title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="About" name="description" >
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
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="{{url('website/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{url('website/css/plugins.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{url('website/css/swiper.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{url('website/css/style.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{url('website/css/coloring.css')}}" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="{{url('website/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" >
    <link rel="icon" href="{{url('images/logos/icon.png')}}" type="image/gif" sizes="16x16">

</head>

<body>
    <div id="wrapper">
        <div class="float-text show-on-scroll">
            <span><a href="#">{{__("lan.Scroll to top")}}</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>
        
        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        @include("website.layouts.header")
        <!-- header close -->
        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader" class="relative jarallax text-light">
                <img src="{{url('website/images/background/7.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">{{__("lan.service")}}</div>
                            <h1>{{__("lan.about")}}</h1>
                            <ul class="crumb">
                                <li><a href="{{route('index')}}">{{__("lan.home")}}</a></li>
                                <li class="active">{{__("lan.about")}}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <div class="fs-20 fw-600 no-bottom sm-hide">
                                <a href="{{route('find')}}" class="btn-shine2 ">{{__("lan.Air Conditioning_contact")}} </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="de-overlay"></div>
            </section>
            <!-- section close -->

            <div class="bg-color relative z-index-1000 mt-40 mb40">
                <div class="border-white-6 text-center bg-color text-white w-84px h-80px p-3 circle absolute abs-center sm-hide" alt="">
                    <i class="icofont-users-alt-3 fs-36"></i>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp mb-3">{{__("lan.welcome")}}</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">{{__("lan.History of Our Company")}}</h2>
                            <p style="font-size: 21px; color:black;">{{__("lan.about9")}}</p>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-6">
                                    <img src="{{url('images/Gallary/131444035_233603531445815_7501723270820130416_n.jpg')}}" class="img-fluid rounded-10 mb-4 wow zoomIn" alt="">
                                    <div class="col-12 text-center">
                                        <div class="bg-color-2 text-light px-4 pt30 pb10 rounded-10">
                                            <div class="de_count wow fadeInUp">
                                                <h3><span class="timer" data-to="850" data-speed="3000"></span>+</h3>
                                                <h4>{{__("lan.Projects Completed")}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="spacer-double sm-hide"></div>
                                    <div class="col-12 text-center">
                                        <div class="bg-color text-light px-4 pt30 pb10 rounded-10">
                                            <div class="de_count wow fadeInUp">
                                                <h3><span class="timer" data-to="99" data-speed="3000"></span>%</h3>
                                                <h4>{{__("lan.Customer Satisfaction")}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{url('images/Gallary/171541622_300911258048375_463301614034122204_n.jpg')}}" class="img-fluid rounded-10 mt-4 wow zoomIn" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            {{-- <section class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="p-5 bg-color text-white rounded-20px">
                                <div class="row" style="justify-content: center; ">
                                    <div class="col-lg-6 offset-lg-3 text-center" style="margin: 0px;">
                                        <div class="bg-color-2 text-light subtitle wow fadeInUp mb-3">{{__("lan.Behind the Scene")}}</div>
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s">{{__("lan.Our Team")}}</h2>
                                        <p class="lead">{{__("lan.about11")}}</p>
                                        <div class="spacer-single"></div>
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <img src="{{url('website/images/team/1.webp')}}" class="img-fluid rounded-10px" alt="">
                                        <div class="p-3 text-center
                                        ">
                                            <h4 class="mb-0">Jeffery Mussman</h4>
                                            <p class="mb-2">Founder &amp;  CEO</p>
                                            <div class="social-icons">
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <img src="{{url('website/images/team/2.webp')}}" class="img-fluid rounded-10px" alt="">
                                        <div class="p-3 text-center
                                        ">
                                            <h4 class="mb-0">Sophia Jenkins</h4>
                                            <p class="mb-2">Founder &amp;  CEO</p>
                                            <div class="social-icons">
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <img src="{{url('website/images/team/3.webp')}}" class="img-fluid rounded-10px" alt="">
                                        <div class="p-3 text-center
                                        ">
                                            <h4 class="mb-0">Ethan Reynolds</h4>
                                            <p class="mb-2">Founder &amp;  CEO</p>
                                            <div class="social-icons">
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <img src="{{url('website/images/team/4.webp')}}" class="img-fluid rounded-10px" alt="">
                                        <div class="p-3 text-center
                                        ">
                                            <h4 class="mb-0">Noah Anderson</h4>
                                            <p class="mb-2">Founder &amp;  CEO</p>
                                            <div class="social-icons">
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="bg-white id-color bg-hover-2 text-hover-white fa-brands fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <section class="no-top">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="mb-2 text-center">
                                <div class="bg-color-3 inline-block w-25 p-3 py-4 rounded-10px m-2 wow fadeInUp" data-wow-delay=".0s">
                                    <img src="{{url('website/images/logo/1.webp')}}" class="img-fluid">
                                </div>
                                <div class="bg-color-3 inline-block w-25 p-3 py-4 rounded-10px m-2 wow fadeInUp" data-wow-delay=".2s">
                                    <img src="{{url('website/images/logo/2.webp')}}" class="img-fluid">
                                </div>
                                <div class="bg-color-3 inline-block w-25 p-3 py-4 rounded-10px m-2 wow fadeInUp" data-wow-delay="1.2s">
                                    <img src="{{url('images/icons/samsung.png')}}"  class="img-fluid px-4" alt="">
                                </div>

                                <div class="mb-2 sm-hide"></div>

                                
                                <div class="bg-color-3 inline-block w-25 p-3 py-4 rounded-10px m-2 wow fadeInUp" data-wow-delay=".6s">
                                    <img src="{{url('website/images/logo/4.webp')}}" class="img-fluid">
                                </div>
                                <div class="bg-color-3 inline-block w-25 p-3 py-4 rounded-10px m-2 wow fadeInUp" data-wow-delay=".8s">
                                    <img src="{{url('website/images/logo/5.webp')}}" class="img-fluid">
                                </div>
                                
                                <div class="bg-color-3 inline-block w-25 p-3 py-4 rounded-10px m-2 wow fadeInUp" data-wow-delay="1s">
                                    <img src="{{url('images/icons/lg.png')}}" class="img-fluid px-4" alt="">
                                </div>

                                <div class="mb-2 sm-hide"></div>

                                <div class="bg-color-3 inline-block w-25 p-3 py-4 rounded-10px m-2 wow fadeInUp" data-wow-delay="1.2s">
                                    <img src="{{url('website/images/logo/1.webp')}}" class="img-fluid">
                                </div>
                          
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="subtitle wow fadeInUp mb-3">{{__("lan.Brands we working with")}}</div>
                            <h2>{{__("lan.about12")}}</h2>
                            <div class="spacer-10"></div>
                            <p style="color:black;">{{__("lan.about6")}}</p>
                            <a class="btn-main" href="{{route('contact')}}">{{__("lan.Contact")}}</a>
                        </div>
                    </div>
                </div>
            </section>

          
        </div>
        <!-- content close -->
        <!-- footer begin -->
        @include("website.layouts.footer")
        <!-- footer close -->
    </div>

    
    <!-- Javascript Files
    ================================================== -->
    <script src="{{url('website/js/plugins.js')}}"></script>
    <script src="{{url('website/js/designesia.js')}}"></script>
   
</body>


</html>