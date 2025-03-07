<!DOCTYPE html>

@if(Lang::locale() == 'ar')
<html lang="ar" dir="rtl">
@else
<html lang="en" dir="ltr">
@endif


<head>
    <title>{{__('lan.project details')}}</title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="{{__('lan.project details')}}" name="description" >
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
    ">    <meta content="" name="author" >
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

    @php 
        $title = "title_" . Lang::locale() ; 
        $desc = "desc_" . Lang::locale() ; 
        $content = "content_" . Lang::locale() ; 
        if(Lang::locale() == 'ar'){
            $dir = "rtl" ;
        }else{
            $dir = "ltr" ;
        }
    @endphp
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


        <section id="subheader" class="jarallax text-light" style="direction:{{$dir}}; z-index: 0; background-size: cover; background-repeat: no-repeat;     ">
   
            <div class="container relative z-index-1000" style="background-size: cover; background-repeat: no-repeat;">
               <div class="row align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                  <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                     <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2 animated"
                        style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">El-Shora</div>
                     <h1>{{__("lan.project details")}}</h1>
                     <ul class="crumb">
                        <li><a href="http://127.0.0.1:8000/ar">{{__("lan.home")}}</a></li>
                        <li class="active">{{__("lan.project details")}}</li>
                     </ul>
                  </div>
                  <div class="col-lg-6 text-lg-end" style="background-size: cover; background-repeat: no-repeat;">
                     <div class="fs-20 fw-600 no-bottom sm-hide" style="background-size: cover; background-repeat: no-repeat;">متخصصون في تكييف الهواء والتدفئة</div>
                  </div>
               </div>
            </div>
            <div class="de-overlay" style="background-size: cover; background-repeat: no-repeat;"></div>
            <div id="jarallax-container-0"
               style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%); background-size: cover; background-repeat: no-repeat;">
               <img src="http://127.0.0.1:8000/website/images/background/11.webp" class="jarallax-img" alt=""
                  style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1740.91px; height: 627.741px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 121.129px; transform: translate3d(0px, -121.129px, 0px);">
            </div>
         </section>
         

        <!-- header close -->
        {{!$images = explode("_", $project->images);}}
        <!-- content begin -->
        <div class="no-bottom no-top" id="content" style="direction: ltr;">
            <div id="top"></div>
            <!-- section begin -->
            <section id="subheader">
                <div class="container relative z-index-1000">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">{{__("lan.Our Projects")}}</div>
                            <h1>{{$project->$title}} </h1>
                        </div>

                        <div class="spacer-double"></div>

                        <div class="col-lg-6">
                            <div class="bg-color-3 relative hover overflow-hidden rounded-20px">
                               <div class="text-center py-3">
                                   
                                   <link rel="stylesheet" href="{{url('website/css/swiper.css')}}" />
                                   <style>
                                       div.swiper-button-next, div.swiper-button-prev {
                                           top: 50%
                                       }
                                   </style>
                                   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                                   <div class="swiper mySwiper">
                                       <div class="swiper-wrapper">
                                           @if(isset($images[0]))
                                               <div class="swiper-slide slide_1">
                                                <img src="{{url("images/projects/$images[0]")}}" style="    height: 500px; object-fit: cover; width:100%; " class="" alt="">
                                               </div>
                                           @endif
                                           @if(isset($images[1]))
                                            <div class="swiper-slide slide_2">
                                                <img src="{{url("images/projects/$images[1]")}}" style="    height: 500px; object-fit: cover; width:100%; " class="" alt="">

                                            </div>

                                           @endif
                                           @if(isset($images[2]))
                                           <div class="swiper-slide slide_3">
                                            <img src="{{url("images/projects/$images[1]")}}" style="    height: 500px; object-fit: cover; width:100%; " class="" alt="">

                                           </div>

                                           @endif
                                           @if(isset($images[3]))
                                           <div class="swiper-slide slide_4">
                                             <img src="{{url("images/projects/$images[2]")}}" style="    height: 500px; object-fit: cover; width:100%; " class="" alt="">

                                           </div>

                                           @endif
                                           @if(isset($images[4]))

                                           <div class="swiper-slide slide_5">
                                            <img src="{{url("images/projects/$images[3]")}}" style="    height: 500px; object-fit: cover; width:100%; " class="" alt="">
                                           </div>
                                           @endif
                                           @if(isset($images[5]))

                                           <div class="swiper-slide slide_5">
                                            <img src="{{url("images/projects/$images[4]")}}" style="    height: 500px; object-fit: cover; width:100%; " class="" alt="">
                                           </div>
                                           @endif
                                       </div>
                                       <div class="swiper-pagination"></div>
                                   </div>
                                   
                                   
                                   <script >
                                       let swiper = new Swiper(".mySwiper", {
                                           pagination: {
                                               el: ".swiper-pagination",
                                           },
                                       });
                                   </script>
                                   <h4>{{$project->$title}} </h4>
                               </div>
                            </div>
                        </div>

                        <div class="col-lg-6" >
                            <div class="row g-4 relative z-1000">
                                <div class="col-4">
                                    <div class="bg-color h-100 text-light rounded-10 p-4">
                                        <div class="fw-bold">12,000 BTU</div>
                                        <div class="fs-14">Cooling Capacity</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-color h-100 text-light rounded-10 p-4">
                                        <div class="fw-bold">30 dB(A)</div>
                                        <div class="fs-14">Noise Level</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="bg-color h-100 text-light rounded-10 p-4">
                                        <div class="fw-bold">35 x 12 x 10</div>
                                        <div class="fs-14">Dimensions</div>
                                    </div>
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                            <p><?= html_entity_decode($project->$desc); ?> </p>

                            <div class="spacer-half"></div>

                            <h4>{{__("lan.How to request a quote")}}</h4>
                            <div class="spacer-10"></div>
                            <ol class="ol-style-1 fs-16">
                                <li><span class="fw-bold text-dark me-2">{{__("lan.Go to comparison page")}}</li>
                                <li><span class="fw-bold text-dark me-2">{{__("lan.Fill out the form")}}</li>
                                <li><span class="fw-bold text-dark me-2">{{__("lan.Make an appointment")}}</li>
                                <li><span class="fw-bold text-dark me-2">{{__("lan.Make an appointment")}}</li>
                            </ol>

                            <div class="spacer-half"></div>

                            <a class="btn-main" href="{{route('contact')}}">{{__("lan.Contact")}}</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->
            
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