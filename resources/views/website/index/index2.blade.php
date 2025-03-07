<!DOCTYPE html>


@if(Lang::locale() == 'ar')
    <html lang="ar" dir="rtl" style="direction: rtl; text-align:start;">
@else
    <html lang="en" dir="ltr" style="direction: ltr; text-align:start;">
@endif


<head>
    <title>El-shora</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="El-shora" name="description" >
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
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="section-dark text-light no-top no-bottom position-relative overflow-hidden z-1000">
                <div class="v-center">
                    <div class="swiper">
                      <div class="video">
                        <video autoplay="" loop="" muted="" playsinline="" defaultmuted="" preload="auto" 
                        autobuffer="" id="main_video" 
                        style="pointer-events: none;position: absolute; width: 100%;height: 100%;object-fit: cover; " src="https://publicfiles.info/air.mp4"> 

                        </video>
                   
                      </div>
                      <style>
                        .video::after{
                            content: "" ; 
                            position: absolute;
                            width: 100%; 
                            height: 100%;
                            background: #00000047; 
                            /* backdrop-filter: blur(1px); */
                        }
                        
                        
                      </style>
                    </div>
                </div>
            </section>

            <section class="pt50">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <img src="https://publicfiles.info/images/el-shora/handy-man.webp" class="img-fluid wow scaleIn" alt="">
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="subtitle wow fadeInUp mb-3">{{__("lan.welcome")}}</div>
                            <h2 class="wow fadeInUp">{{__("lan.title1")}}</h2>
                            <p class="wow fadeInUp" style="    color: black; font-weight: bold; text-align: justify;">{{__("lan.about1")}}</p>
                            <div class="spacer-10"></div>
                            <a class="btn-main wow fadeInUp" href="{{route('about')}}">{{__("lan.about company")}}</a>
                        </div>
                    </div>

                    {{-- <div class="spacer-double"></div> --}}

                    {{-- <div class="row gx-5">
                        <div class="col-lg-2 col-6">
                            <img src="{{url('website/images/awards/1.webp')}}" class="p-2 img-fluid wow scaleIn" data-wow-delay=".0s" alt="">
                        </div>

                        <div class="col-lg-2 col-6">
                            <img src="{{url('website/images/awards/2.webp')}}" class="p-2 img-fluid wow scaleIn" data-wow-delay=".2s" alt="">
                        </div>

                        <div class="col-lg-2 col-6">
                            <img src="{{url('website/images/awards/3.webp')}}" class="p-2 img-fluid wow scaleIn" data-wow-delay=".4s" alt="">
                        </div>

                        <div class="col-lg-2 col-6">
                            <img src="{{url('website/images/awards/4.webp')}}" class="p-2 img-fluid wow scaleIn" data-wow-delay=".6s" alt="">
                        </div>

                        <div class="col-lg-2 col-6">
                            <img src="{{url('website/images/awards/5.webp')}}" class="p-2 img-fluid wow scaleIn" data-wow-delay=".8s" alt="">
                        </div>

                        <div class="col-lg-2 col-6">
                            <img src="{{url('website/images/awards/6.webp')}}" class="p-2 img-fluid wow scaleIn" data-wow-delay="1s" alt="">
                        </div>
                    </div> --}}
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="row" style="    justify-content: center;">
                            <div class="col-lg-6 offset-lg-3 text-center" style="margin:0px; ">
                                <div class="subtitle bg-color-3 wow fadeInUp mb-3">{{__("lan.Complete solutions")}}</div>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">{{__("lan.services")}}</h2>
                                <p class="lead wow fadeInUp">{{__("lan.about3")}}</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="0s">
                            <div style="height: 100%;" class="rounded-20px overflow-hidden">
                                <div class="relative">
                                    <img src="{{url('website/images/svg/air-conditioner-svgrepo-com.svg')}}" class="w-70px mb20 top-30px start-30px p-2 bg-color-3 rounded-10px absolute" alt="">
                                    <img src="https://publicfiles.info/images/el-shora/Frame 1.png" class="img-fluid" alt="">
                                </div>
                                <div style="height: 55%;" class="padding40 bg-color-3">
                                    <h4>{{__("lan.Sales")}}</h4>
                                    <p style="    text-align: justify;color: black ;font-weight: bold;" class="no-bottom">{{__("lan.eSales_info")}}</p>
                                    <div class="spacer-20"></div>
                                    <a class="btn-main btn-light-trans" href="{{route('contact')}}">{{__("lan.order now")}}</a>
                                </div>
                            </div>
                        </div>
 
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                            <div style="height: 100%;" class="rounded-20px overflow-hidden">
                                <div class="relative">
                                    <img src="{{url('website/images/svg/wrench-line-svgrepo-com.svg')}}" class="w-70px mb20 top-30px start-30px p-2 bg-color-2 rounded-10px absolute" alt="">
                                    <img src="https://publicfiles.info/images/el-shora/services-2.webp" class="img-fluid" alt="">
                                </div>
                                <div style="height: 55%;" class="padding40 bg-color-2 text-light">                                
                                    <h4>{{__("lan.projects")}}</h4>
                                    <p style="    text-align: justify;color: white ;font-weight: bold;" class="no-bottom">{{__("lan.projects_info")}}</p>
                                    <div class="spacer-20"></div>
                                    <a class="btn-main btn-dark-trans" href="{{route('engineering')}}">{{__("lan.Request A Quote")}}</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".4s">
                            <div style="height: 100%;" class="rounded-20px overflow-hidden">
                                <div class="relative">
                                    <img src="{{url('website/images/svg/completed-order-svgrepo-com.svg')}}" class="w-70px mb20 top-30px start-30px p-2 bg-color rounded-10px absolute" alt="">
                                    <img src="https://publicfiles.info/images/el-shora/services-3.webp" class="img-fluid" alt="">
                                </div>
                                <div style="height: 55%;" class="padding40 bg-color text-light">                                
                                    <h4>{{__("lan.Customer Service")}}</h4>
                                    <p style="    text-align: justify;color: white ;font-weight: bold;" class="no-bottom">{{__("lan.customer_services_info")}}</p>
                                    <div class="spacer-20"></div>
                                    <a class="btn-main btn-dark-trans" href="{{route('contact')}}">{{__("lan.Maintenance request")}}</a>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4" style="justify-content: center; ">
                        
               
                        <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".4s">
                            <div style="height: 100%;" class="rounded-20px overflow-hidden">
                                <video src="https://publicfiles.info/Elshora WebsiteF (1).mp4" style="min-width:0px;  border-radius: 7px; height:100vh;" autoplay controls loop="" muted="" playsinline="" defaultmuted="" preload="auto" 
                                    autobuffer="" class="img-fluid rounded-20px" alt=""></video>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>


            {{-- <section class="pt70" style="background-size: cover; background-repeat: no-repeat;">
                <div class="container" style="background-size: cover; background-repeat: no-repeat;">
                   <div class="spacer-double sm-hide" style="background-size: cover; background-repeat: no-repeat;"></div>
                   <div class="row g-4 gx-5 align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                      <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;    display: flex; justify-content: flex-end; align-items: center;">
                         <video src="{{url('images/Elshora WebsiteF.mp4')}}" style="min-width:0px;  height: 640px; border-radius: 7px;" autoplay="" loop="" muted="" playsinline="" defaultmuted="" preload="auto" 
                         autobuffer="" class="img-fluid rounded-20px" alt=""></video>
                      </div>
                      <div class="col-lg-6 relative" style="background-size: cover; background-repeat: no-repeat;">
                         <div class="relative z-index-1000" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="subtitle wow fadeInUp mb-3 animated"
                               style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">Welcome</div>
                            <h1>Did you experience one of situations below?</h1>
                            
                            <ol class="ol-style-1">
                               <li>Air Conditioning Not Cooling</li>
                               <li>Heating System Not Working</li>
                               <li>Poor Airflow</li>
                               <li>Strange Noises</li>
                               <li>Leaking Refrigerant</li>
                            </ol>
                         </div>
                         
                         <img src="{{url('website/images/misc/6.webp')}}" class="absolute top-50 end-0 w-50 " alt="">
                         
                      </div>
                      
                   </div>
                </div>
             </section> --}}

            <section class="no-top">
                <div class="container">
                    <div class="row  gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle wow fadeInUp mb-3">{{__("lan.Our Specialize")}}</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">{{__("lan.title2")}}</h2>
                            <p class="wow fadeInUp" style="    font-weight: bold; font-size: 20px;">{{__("lan.about7")}}</p>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-6">
                                    <img src="{{url('images/Gallary/366741989_762286749236296_5234305074401777930_n.jpg')}}" class="img-fluid rounded-10 mb-4 wow scaleIn animated" alt="" style="visibility: visible; animation-name: scaleIn;">
                                    <div class="col-12 text-center">
                                        <div class="bg-color text-light px-4 pt30 pb10 rounded-10 wow fadeInLeft">
                                            <div class="de_count">
                                                <h3><span class="timer" data-to="850" data-speed="3000"></span>+</h3>
                                                <h4>{{__("lan.Projects Completed")}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="spacer-double sm-hide"></div>
                                    <div class="col-12 text-center">
                                        <div class="bg-color-3 px-4 pt30 pb10 rounded-10 wow fadeInRight">
                                            <div class="de_count">
                                                <h3><span class="timer" data-to="99" data-speed="3000"></span>%</h3>
                                                <h4>{{__("lan.Customer Satisfaction")}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{url('website/images/misc/8.webp')}}" class="img-fluid rounded-10 mt-4 wow scaleIn" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <br>
            <br>
             
            

            <section class="bg-color-3">
                <div class="container">
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-6 offset-lg-3 text-center" style="margin: 0px; ">
                            <div class="subtitle bg-color-2 text-white wow fadeInUp mb-3">{{__("lan.Top 6 Reasons")}}</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">{{__("lan.Why Choose")}}</h2>
                            <p class="lead wow fadeInUp">{{__("lan.about5")}}</p>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".0s">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="{{url("images/logos/icon.png")}}" alt="" style="width: 45px; ">
                                <div class="pl-80" style="    padding: 0px 60px;">
                                    <h4>{{__("lan.why_chosse_us1")}}</h4>
                                    <p class="mb-0" style="color: black; ">{{__("lan.why_chosse1")}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="{{url("images/logos/icon.png")}}" alt="" style="width: 45px; ">
                                <div class="pl-80" style="    padding: 0px 60px;">
                                    <h4>{{__("lan.why_chosse_us2")}}</h4>
                                    <p class="mb-0" style="color: black; ">{{__("lan.why_chosse2")}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="{{url("images/logos/icon.png")}}" alt="" style="width: 45px; ">
                                <div class="pl-80" style="    padding: 0px 60px;">
                                    <h4>{{__("lan.why_chosse_us3")}}</h4>
                                    <p class="mb-0" style="color: black; ">{{__("lan.why_chosse3")}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="{{url("images/logos/icon.png")}}" alt="" style="width: 45px; ">
                                <div class="pl-80" style="    padding: 0px 60px;">
                                    <h4>{{__("lan.why_chosse_us4")}}</h4>
                                    <p class="mb-0" style="color: black; ">{{__("lan.why_chosse4")}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="{{url("images/logos/icon.png")}}" alt="" style="width: 45px; ">
                                <div class="pl-80" style="    padding: 0px 60px;">
                                    <h4>{{__("lan.why_chosse_us5")}}</h4>
                                    <p class="mb-0" style="color: black; ">{{__("lan.why_chosse5")}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="{{url("images/logos/icon.png")}}" alt="" style="width: 45px; ">
                                <div class="pl-80" style="    padding: 0px 60px;">
                                    <h4>{{__("lan.why_chosse_us6")}}</h4>
                                    <p class="mb-0" style="color: black; ">{{__("lan.why_chosse6")}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-double"></div>
                    </div>
                </div>
            </section>

            <section class="no-top mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding60 rounded-1 sm-padding40 overflow-hidden position-relative jarallax text-light">
                                <img src="https://publicfiles.info/images/el-shora/9.webp" class="jarallax-img" alt="">
                                <div class="row align-items-center g-4 gx-5 relative z-index-1000">
                                    <div class="col-lg-8">
                                        <div class="subtitle s2 wow fadeInUp mb-3" style="    letter-spacing: 1.4px;">{{__("lan.title2")}}</div>
                                        <h2 class="mb20 wow fadeInUp" data-wow-delay=".2s" style="font-size: 31px; ">{{__("lan.about6")}}</h2>
                                        <a class="btn-main" href="{{route('contact')}}">{{__("lan.Contact")}}</a>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <img src="https://publicfiles.info/images/el-shora/DSC_9867 copy.jpg" style="    width: 296px; height: 441px; visibility: inherit; animation-name: scaleIn; object-fit: contain;" class="img-fluid rounded-10px wow scaleIn" alt="">
                                        <h5 class="mt-3 mb-0">{{__("lan.name company")}}</h5>
                                        <p class="small mb-2">{{__("lan.Founder & CEO")}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

            <section class="no-top">
                <div class="container">
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-6 offset-lg-3 text-center" style="margin: 0px; ">
                            <div class="subtitle wow fadeInUp mb-3">{{__("lan.Services Process")}}</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">{{__("lan.How to request a quote")}}</h2>
                            <p class="lead wow fadeInUp">{{__("lan.about8")}}</p>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row g-4 arrow-divider" style="direction: ltr; ">
                            <div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".2s">
                                <div class="de-step-s1 text-light">
                                    <div class="d-number wow fadeInRight" data-wow-delay=".2s"> {{__("lan.Step")}} 1</div>
                                    <h4>{{__("lan.Go to comparison page")}}</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".6s">
                                <div class="de-step-s1 text-light">
                                    <div class="d-number wow fadeInRight" data-wow-delay=".6s"> {{__("lan.Step")}} 2</div>
                                    <h4>{{__("lan.Fill out the form")}}</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay=".8s">
                                <div class="de-step-s1 text-light">
                                    <div class="d-number wow fadeInRight" data-wow-delay=".8s"> {{__("lan.Step")}} 3</div>
                                    <h4>{{__("lan.Make an appointment")}}</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 wow fadeInRight" data-wow-delay="1s">
                                <div class="de-step-s1 text-light">
                                    <div class="d-number wow fadeInRight" data-wow-delay="1s"> {{__("lan.Step")}} 4</div>
                                    <h4>{{__("lan.Contact you")}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            

            {{-- <section class="no-top text-center">
                <div class="container">
                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-6 offset-lg-3 text-center" style="margin: 0px;">
                            <div class="subtitle wow fadeInUp mb-3">Testimonials</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Our Happy Customers</h2>
                            <p class="lead wow fadeInUp">Qui culpa qui consequat officia cillum quis irure aliquip ut dolore sit eu culpa ut irure nisi occaecat dolore adipisicing do pariatur.</p>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" style="direction: ltr;">
                    <div class="row">
                        <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel" style="width:80%">
                            <div class="item">
                                <div class="de_testi s2">
                                    <blockquote>
                                        <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                        <div class="de_testi_by">
                                            <img class="bg-white p-2 circle" alt="" src="{{url('website/images/testimonial/1.jpg')}}"> <div>Michael S.<span>Customer</span></div>
                                        </div>
                                        <p>"Their technicians are always prompt,
                                             professional, and knowledgeable. From regular maintenance to emergency repairs, they've got us covered. Highly recommend!""
                                        </p>
                                        <div class="de-rating-ext">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi s2">
                                    <blockquote>
                                        <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                        <div class="de_testi_by">
                                            <img class="bg-white p-2 circle" alt="" src="{{url('website/images/testimonial/2.jpg')}}"> <div>Robert L.<span>Customer</span></div>
                                        </div>
                                        <p>"They responded promptly and had a technician at my door in no time. Within a few hours, my AC was back up and running smoothly. I'm incredibly grateful for their quick response and expert repair work."</p>
                                        <div class="de-rating-ext">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi s2">
                                    <blockquote>
                                        <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                        <div class="de_testi_by">
                                            <img class="bg-white p-2 circle" alt="" src="{{url('website/images/testimonial/3.jpg')}}"> <div>Jake M.<span>Customer</span></div>
                                        </div>
                                        <p>"Their commitment to customer satisfaction is unmatched. Whether it's a routine maintenance visit or a complex repair job, I know I can count on them to deliver exceptional service every time. "</p>
                                        <div class="de-rating-ext">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi s2">
                                    <blockquote>
                                        <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                        <div class="de_testi_by">
                                            <img class="bg-white p-2 circle" alt="" src="{{url('website/images/testimonial/4.jpg')}}"> <div>Alex P.<span>Customer</span></div>
                                        </div>
                                        <p>"From the initial consultation to the final installation, their team demonstrated professionalism, expertise, and a commitment to excellence. Our new HVAC system is performing flawlessly."</p>
                                        <div class="de-rating-ext">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi s2">
                                    <blockquote>
                                        <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                        <div class="de_testi_by">
                                            <img class="bg-white p-2 circle" alt="" src="{{url('website/images/testimonial/5.jpg')}}"> <div>Carlos R.<span>Customer</span></div>
                                        </div>
                                        <p>"Their technicians quickly diagnosed the problem and recommended a cost-effective solution. Thanks to their expertise and efficient repair work, our home is now consistently comfortable."</p>
                                        <div class="de-rating-ext">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi s2">
                                    <blockquote>
                                        <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                        <div class="de_testi_by">
                                            <img class="bg-white p-2 circle" alt="" src="{{url('website/images/testimonial/6.jpg')}}"> <div>Edward B.<span>Customer</span></div>
                                        </div>
                                        <p>"Their attention to detail, dedication to customer satisfaction, and commitment to quality set them apart from the competition. Trust it whether it's a routine maintenance visit or a complex repair job."</p>
                                        <div class="de-rating-ext">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi s2">
                                    <blockquote>
                                        <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                        <div class="de_testi_by">
                                            <img class="bg-white p-2 circle" alt="" src="{{url('website/images/testimonial/7.jpg')}}"> <div>Daniel H.<span>Customer</span></div>
                                        </div>
                                        <p>"From start to finish, their team provided top-notch service, guiding me through the selection process, handling the installation with precision, and ensuring everything was in perfect working order."</p>
                                        <div class="de-rating-ext">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="de_testi s2">
                                    <blockquote>
                                        <i class="icofont-quote-left absolute start-30px top-30px id-color-2"></i>
                                        <div class="de_testi_by">
                                            <img class="bg-white p-2 circle" alt="" src="{{url('website/images/testimonial/8.jpg')}}"> <div>Bryan G.<span>Customer</span></div>
                                        </div>
                                        <p>"Their technicians are knowledgeable, courteous, and always go the extra mile to ensure customer satisfaction. Whether it's a routine tune-up or a major repair."</p>
                                        <div class="de-rating-ext">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <section class="bg-color-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">                            
                            <div class="subtitle bg-color-2 text-light wow fadeInUp mb-3">{{__("lan.Do you have")}}</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">{{__("lan.Any questions")}}</h2>
                        </div>
                    </div>

                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 mb-sm-20 position-relative">
                            <div class="relative p-4">
                                <div class="absolute start-50px top-50px">
                                    <i class="bg-color text-light  fs-48 p-2  id-color icofont-headphone-alt rounded-10px mb-2 wow scaleIn"></i><br>
                                </div>
                                <img src="https://publicfiles.info/images/el-shora/Frame 2.png" class="img-fluid rounded-20px wow zoomIn" data-wow-delay="0s" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="accordion s2 wow fadeInUp">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-a1">
                                        {{__("lan.question1")}}
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a1">
                                        <p>{{__("lan.value_que1")}}</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a2">
                                        {{__("lan.question2")}}
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a2">
                                        <p>{{__("lan.value_que2")}}</p>
                                    </div>                                        
                                    <div class="accordion-section-title" data-tab="#accordion-a3">
                                        {{__("lan.question3")}}
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a3">
                                        <p>{{__("lan.value_que3")}}</p>
                                    </div>
                                    {{-- <div class="accordion-section-title" data-tab="#accordion-a4">
                                        Is there a warranty on your repairs?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a4">
                                        <p>Absolutely. All our repairs come with a warranty to give you peace of mind. The specific warranty duration may vary depending on the type of repair and the device.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-a5">
                                        How do I get a quote for my repair?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-a5">
                                        <p>You can get a quote by visiting our website or contacting our customer service. We provide transparent pricing with no hidden fees.</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <section>
                <div class="container">
                    <div class="row g-4" style="justify-content: center;">
                        <div class="col-lg-6 offset-lg-3 text-center" style="margin:0px;">
                            <div class="subtitle wow fadeInUp mb-3">Latest Post</div>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Stay update with us</h2>
                            <p class="lead wow fadeInUp">Qui culpa qui consequat officia cillum quis irure aliquip ut dolore sit eu culpa ut irure nisi occaecat dolore adipisicing do pariatur.</p>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 mb10">
                            <div class="bloglist rounded-20px">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="d-tagline">
                                                <span>tips &amp; tricks</span>
                                            </div>
                                            <img alt="" src="{{url('website/images/news/1.webp')}}" class="lazy">
                                        </div>
                                        <div class="post-text padding40 pt-2 h-100">
                                            <h4><a href="blog-single.html">Tips for Optimizing Your Air Conditioning System</a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur consequat...</p>
                                            <a class="btn-main btn-light-trans mt-3" href="blog-single.html">Read more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mb10">
                            <div class="bloglist rounded-20px">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="d-tagline">
                                                <span>tips &amp; tricks</span>
                                            </div>
                                            <img alt="" src="{{url('website/images/news/2.webp')}}" class="lazy">
                                        </div>
                                        <div class="post-text padding40 pt-2 h-100">
                                            <h4><a href="blog-single.html">Harnessing Technology for Energy-Efficient AC</a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur consequat...</p>
                                            <a class="btn-main btn-light-trans mt-3" href="blog-single.html">Read more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mb10">
                            <div class="bloglist rounded-20px">
                                    <div class="post-content">
                                        <div class="post-image">
                                            <div class="d-tagline">
                                                <span>tips &amp; tricks</span>
                                            </div>
                                            <img alt="" src="{{url('website/images/news/3.webp')}}" class="lazy">
                                        </div>
                                        <div class="post-text padding40 pt-2 h-100">
                                            <h4><a href="blog-single.html">The Impact of Air Conditioning on Indoor Air Quality</a></h4>
                                            <p>Dolore officia sint incididunt non excepteur ea mollit commodo ut enim reprehenderit cupidatat labore ad laborum consectetur consequat...</p>
                                            <a class="btn-main btn-light-trans mt-3" href="blog-single.html">Read more</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <section class="no-top relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="rounded-20px bg-color  overflow-hidden">
                                <div class="row align-items-center g-0">
                                    <div class="col-lg-6">
                                        <div class="h-100 padding60 sm-padding40 overflow-hidden position-relative text-light jarallax">
                                            <div class="spacer-double"></div>
                                            <img src="{{url('images/Gallary/148343470_265879541551547_7591013303747131142_n.jpg')}}" class="jarallax-img" alt="">
                                            <div class="spacer-double"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 text-center">
                                        <div class="h-100 text-light">
                                            <div class="spacer-double"></div>
                                            <div class="subtitle s2 mb-2">{{__("lan.Hotline")}}</div>
                                            <h2 class="phone mb0 wow fadeInUp" data-wow-delay=".2s">0236914695<i class="icofont-phone-circle"></i></h2>
                                            <div class="spacer-double"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-12 text-center wow fadeInUp">
                            <h4 class="wow fadeInUp" data-wow-delay=".2s">{{__("lan.Brands we working with")}}</h4>
                        </div>
                        <div class="col-md-12 wow fadeInUp" style="direction: ltr;">
                            <div id="owl-logo" class="logo-carousel no-alpha owl-carousel owl-theme">
                                <img src="{{url('website/images/logo/1.webp')}}" class="img-fluid px-4" alt="">
                                <img src="{{url('website/images/logo/2.webp')}}" class="img-fluid px-4" alt="">
                                <img src="{{url('website/images/logo/4.webp')}}" class="img-fluid px-4" alt="">
                                <img src="{{url('website/images/logo/5.webp')}}" class="img-fluid px-4" alt="">
                                <img src="{{url('images/icons/lg.png')}}" style="height: 78px; " class="img-fluid px-4" alt="">
                                <img src="{{url('images/icons/samsung.png')}}" style="height: 78px; " class="img-fluid px-4" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-color text-light pt40 pb40">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-9">
                            <h3 class="mb-1">
                                {{__("lan.Air Conditioning_contact")}}
                                <i class="icofont-check-circled fs-32 me-3 id-color-2"></i>
                            </h3>
                        </div>

                        <div class="col-lg-3 text-lg-end text-start">
                            <a class="btn-main bg-color-2" href="{{route('engineering')}}">{{__("lan.Request A Quote")}}</a>
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
    <script src="{{url('website/js/swiper.js')}}"></script>
    <script src="{{url('website/js/custom-marquee.js')}}"></script>
    <script src="{{url('website/js/custom-swiper-1.js')}}"></script>

</body>


</html>