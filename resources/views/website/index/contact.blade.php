<!DOCTYPE html>

@if(Lang::locale() == 'ar')
<html lang="ar" dir="rtl" style="text-align: start; ">
@else
<html lang="en" dir="ltr">
@endif


<head>
    <title>{{__("lan.Contact")}}</title>

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="Contact us" name="description" >

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
                <img src="{{url('website/images/background/8.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="container relative z-index-1000">
                        <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">{{__("lan.service")}}</div>
                            <h1>{{__("lan.Get in Touch")}}</h1>
                            <ul class="crumb">
                                <li><a href="{{route('index')}}">{{__("lan.home")}}</a></li>
                                <li class="active">{{__("lan.Contact")}}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            
                            <div class="fs-20 fw-600 no-bottom sm-hide">
                                <a href="{{route('find')}}" class="btn-shine2 ">{{__("lan.Air Conditioning_contact")}} </a>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="de-overlay"></div>
            </section>
            <!-- section close -->

            <div class="bg-color relative z-index-1000 mt-40 mb40">
                <div class="border-white-6 text-center bg-color text-white w-84px h-80px p-3 circle absolute abs-center sm-hide" alt="">
                    <i class="icofont-envelope fs-36"></i>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-8">
                          
                            <p style="    font-weight: bold;font-size: 20px;color: black;text-align: justify; ">{{__("lan.about10")}}</p>

                            
                            <form id="contact_us" class="position-relative z1000" method="post" action="#">
                                @csrf
                                <div class="row gx-4">
                                    <div class="col-lg-6 col-md-6 mb10">
                                        <div class="field-set">
                                            <span class="d-label">{{__("lan.name")}}</span>
                                            <input type="text" name="username" id="name" class="form-control contact_us" placeholder="{{__("lan.name")}}" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">{{__("lan.email")}}</span>
                                            <input type="text" name="email" id="email" class="form-control contact_us" placeholder="{{__("lan.email")}}" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">{{__("lan.phone")}}</span>
                                            <input type="text" name="phone" id="phone" class="form-control contact_us" placeholder="{{__("lan.phone")}}" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="field-set mb20">
                                            <span class="d-label">{{__("lan.message")}}</span>
                                            <textarea name="msg"  id="message" class="form-control contact_us" placeholder="{{__("lan.message")}}" required></textarea>
                                        </div>
                                        <div class="field-set mb20">
                                            <span class="d-label">{{__("lan.Choose Section")}}</span>

                                            
                                            <select name="section" class="form-control contact_us" id="">
                                                <option value="">{{__("lan.Choose Section")}}</option>
                                                <option value="Sales">{{__("lan.Sales")}}</option>
                                                <option value="Marketing">{{__("lan.Marketing")}}</option>
                                                <option value="Engineering_Management">{{__("lan.Engineering Management")}}</option>
                                                <option value="Free_Consultation">{{__("lan.Free Consultation")}}</option>
                                            </select>
                                        </div>
                                    </div>


                                    

                                    
                                </div>
                                    
                                
                                <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                <div id='submit' class="mt20">
                                    <input type='button' onclick="contact_us(this)" id='send_message' value='{{__("lan.Send Message")}}' class="btn-main">
                                </div>

                            </form>

                            </div>

                        <div class="col-lg-4">
                            <h4>{{__("lan.Our Office")}}</h4>
                            <div class="img-with-cap mb20">
                                <div class="d-title">El-Shora</div>
                                <div class="d-overlay"></div>
                                <img src="{{url('images/Gallary/367720553_767079562090348_6917550814998285150_n.jpg')}}" class="img-fullwidth rounded-1" alt="">
                            </div>

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark">{{__("lan.Office Location")}}<i class="icofont-location-pin me-2 id-color-2"></i></div>
                            Egypt

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark">{{__("lan.Contact Email")}}<i class="icofont-envelope me-2 id-color-2"></i></div>
                            info@el-shora.com

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark">
                                {{__("lan.Contact Phone")}}
                                <i class="icofont-phone me-2 id-color-2"></i>
                            </div>
                            01100574656 - 01065933550
                            <br>
                            01117708955 - 0236914695
                            

                            <div class="spacer-single"></div>
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

    <script src="{{url('jquery-3.6.1.js')}}"></script>

    
    <script>
        function contact_us (ele) {
            let contact_us = document.querySelectorAll(".contact_us");
			let count_contact_us =  0 ; 
            
			for (let i = 0; i < contact_us.length; i++) {
                if(contact_us[i].value != ""){
                    contact_us[i].style.borderColor = 'black' ; 
					count_contact_us += 1 ;
					if(count_contact_us == contact_us.length){
                        let data_form = new FormData($("#contact_us")[0]);
                        ele.setAttribute("disabled", "");
						$.ajax({
							type:"post",
							enctype : "multipart/form-data",
							url: "{{   route('contact_us_req')   }}",
							data: data_form,
							contentType: false,
							cache: false ,
							processData: false,
							success: function (data){
                                ele.removeAttribute("disabled");
                                
                                if(data.status_code == 200){
                                    msg(data.msg, "success", 'success');
                                }else{
                                    msg(data.msg, "error", 'error');
                                }
							},
						});
					}
				}else{
					contact_us[i].style.borderColor = "red" ;
				}
			}
		}
    </script>
    <!-- Javascript Files
    ================================================== -->
    <script src="{{url('website/js/plugins.js')}}"></script>
    <script src="{{url('website/js/designesia.js')}}"></script>
</body>


</html>