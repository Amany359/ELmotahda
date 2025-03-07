<!DOCTYPE html>
<html lang="en">

<head>
	<title>Coming Soon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

    
	<link rel="stylesheet" type="text/css" href="{{url('coming/vendor/bootstrap/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{url('coming/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{url('coming/vendor/animate/animate.css')}}">

	<link rel="stylesheet" type="text/css" href="{{url('coming/vendor/select2/select2.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{url('coming/css/util.css')}}">

	<link rel="stylesheet" type="text/css" href="{{url('coming/css/main.css')}}">

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
    <link rel="icon" href="{{url('images/logos/icon.png')}}" type="image/gif" sizes="16x16">

    <meta name="robots" content="noindex, follow">

<body>
	
	@include("website.layouts.noti")

	<div class="bg-img1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url('{{url('coming/images/bg01.jpg')}}');">
	{{-- <div class="bg-img1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url('{{url('coming/1.png')}}');"> --}}
		<div class="wsize1 bor1 bg1 p-t-175 p-b-45 p-l-15 p-r-15 respon1">
			<div class="wrappic1">
                <a href="{{route('index')}}">
                    <img src="{{url('images/logos/blue_logo.png')}}" style="width: 190px;" alt="LOGO">
                </a>
			</div>

			<p class="txt-center m1-txt1 p-t-33 ">
				{{__("lan.Get notified when")}}
			</p>

            @if(Lang::locale() == 'ar')
                {{!$dir = 'rtl'}}
            @else
                {{!$dir = 'ltr'}}
            @endif

			
            
			<form class="flex-w flex-c-m contact100-form validate-form p-t-55  p-b-20" id="get_notified" style="direction: {{$dir}};">
				@csrf
                <div class="wrap-input100 validate-input where1" data-validate = "Email is required: ex@abc.xyz">
					<input class="s1-txt2 placeholder0 input100 get_notified" type="text" name="email" placeholder="{{__("lan.email")}}">
					<span class="focus-input100"></span>
				</div>

				
				<button type="button" style="cursor: pointer;" onclick="get_notified(this)" class="flex-c-m s1-txt3 size3 how-btn trans-04 where1">
					{{__("lan.Get Notified")}}
				</button>
				
			</form>
			<p class="s1-txt4 txt-center p-t-10  p-b-68">

                @if(Lang::locale() == 'ar')
                    أعرف <a href="{{route('find')}}" style="cursor: pointer; text-decoration: underline;" >التكييف</a>  المناسب ليك
                @else
                    Find the right <a href="{{route('find')}}" style="cursor: pointer;text-decoration: underline;"> air conditioner</a> for you
                @endif
			</p>

			
		</div>
	</div>


    <script src="{{url('jquery-3.6.1.js')}}"></script>

    
    <script>
        function get_notified (ele) {
            let get_notified = document.querySelectorAll(".get_notified");
			let count_get_notified =  0 ; 
            
			for (let i = 0; i < get_notified.length; i++) {
                if(get_notified[i].value != ""){
					get_notified[i].style.cssText = "border: 1px solid #ffffff; border-radius: 6px;" ;
					count_get_notified += 1 ;
					if(count_get_notified == get_notified.length){
                        let data_form = new FormData($("#get_notified")[0]);
                        ele.setAttribute("disabled", "");
						$.ajax({
							type:"post",
							enctype : "multipart/form-data",
							url: "{{   route('get_notified')   }}",
							data: data_form,
							contentType: false,
							cache: false ,
							processData: false,
							success: function (data){
                                console.log(data);
                                                                
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
					get_notified[i].style.cssText = "border: 1px solid red; border-radius: 6px;" ;
				}
			}
		}
    </script>

	

	
	<script src="{{url('coming/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

	<script src="{{url('coming/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('coming/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="{{url('coming/vendor/select2/select2.min.js')}}"></script>

	<script src="{{url('coming/vendor/countdowntime/moment.min.js')}}"></script>
	<script src="{{url('coming/vendor/countdowntime/moment-timezone.min.js')}}"></script>
	<script src="{{url('coming/vendor/countdowntime/moment-timezone-with-data.min.js')}}"></script>
	<script src="{{url('coming/vendor/countdowntime/countdowntime.js')}}"></script>


	<script src="{{url('coming/vendor/tilt/tilt.jquery.min.js')}}"></script>


	<script src="{{url('coming/js/main.js')}}"></script>

    