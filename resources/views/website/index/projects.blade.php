<!DOCTYPE html>


@if(Lang::locale() == 'ar')
    <html lang="ar" dir="rtl" style="direction: rtl; text-align:start;">
@else
    <html lang="en" dir="ltr" style="direction: ltr; text-align:start;">
@endif


<head>
    <title>{{__("lan.projects")}}</title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="projects" name="description" >
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
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="{{url('website/images/background/11.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">El-Shora</div>
                            <h1>{{__("lan.Our Projects")}}</h1>
                            <ul class="crumb">
                                <li><a href="{{route('index')}}">{{__("lan.home")}}</a></li>
                                <li class="active">{{__("lan.Our Projects")}}</li>
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
                <div class="border-white-6 text-center bg-color text-white w-84px h-80px p-3 circle absolute abs-center sm-hide">
                    <i class="icofont-image fs-36"></i>
                </div>
            </div>

            @php
                $title = "title_" . Lang::locale() ;  
                $desc = "desc_" . Lang::locale() ;  
            @endphp

            <section id="section-products" style="background-size: cover; background-repeat: no-repeat;">
                <div class="container" style="background-size: cover; background-repeat: no-repeat;">

                    <div style="display: flex;justify-content: center; ">
                        <div class="col-lg-6 offset-lg-3 text-center" style="background-size: cover; background-repeat: no-repeat; margin:0px;">
                           <div class="subtitle bg-color-3 wow fadeInUp mb-3 animated"
                              style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-name: fadeInUp;">{{__("lan.Complete solutions")}}</div>
                           <h2 class="wow fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">{{__("lan.Our Projects")}}
                           </h2>
                           <p class="lead wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">{{__("lan.about14")}}</p>
                        </div>
                    </div>

                   <div class="row g-4" style="background-size: cover; background-repeat: no-repeat;">


                    @foreach ($projects as $project)
                      {{ !$images = explode("_", $project->images); }}
                      <div class="col-lg-4 col-md-6" style="background-size: cover; background-repeat: no-repeat;">
                          <div class="bg-color-3 relative hover overflow-hidden rounded-20px" style="background-size: cover; background-repeat: no-repeat;">
                              <div class="absolute w-100 h-100 padding30 bg-light hover-op-1 hover-mt-40" style="background-size: cover; background-repeat: no-repeat;">
                              <h4>{{$project->$title}}</h4>
                              <p><?= html_entity_decode($project->$desc); ?></p>
                              @if($project->content_ar != "<p>	</p>" && $project->content_ar != "<p><br></p>" && $project->content_ar != "<p>المحتوي (Arabic)</p>")
                                  <a class="btn-main" href="{{route('project_details', ['id' => $project->id])}}">{{__("lan.Read more")}}</a>
                              @endif
                              </div>
                              <div class="text-center py-3" style="background-size: cover; background-repeat: no-repeat;">
                              <img src="{{url("images/projects/$images[0]")}}" style="width: 422px; height:422px; object-fit:cover" class="w-80" alt="">
                              <h4>{{$project->$title}}</h4>
                              </div>
                          </div>
                      </div>
                    @endforeach
                      
                  
                      
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