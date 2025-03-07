<script src="{{url('jquery-3.6.1.js')}}"></script>


<div class="eltd-login-register-holder">
    <div class="eltd-login-register-content">
        <ul>
            <li><a href="#eltd-login-content">{{__("lan.login")}}</a></li>
            <li><a href="#eltd-register-content">{{__("lan.Register")}}</a></li>
        </ul>
        <div class="eltd-login-content-inner" id="eltd-login-content">
            <div class="eltd-wp-login-holder">
                <div class="eltd-social-login-holder">
                    <div class="eltd-social-login-holder-inner">
                        <form method="post" class="eltd-login-form" id="signin">
                            @csrf
                            <fieldset>
                                <div>
                                    <input style="text-align: start" type="email" class="login_inputs" name="email" id="user_login_name" placeholder="{{__("lan.email")}}" value required />
                                </div>
                                <div>
                                    <input style="text-align: start" class="login_inputs" type="password" name="password" id="user_login_password" placeholder="{{__("lan.placeholder password")}}" value required />
                                </div>
                                <div class="eltd-lost-pass-remember-holder clearfix">
                                    <span class="eltd-login-remember" id="login_message_area_topbar">
                                        
                                    </span>
                                </div>
                                <div class="eltd-login-button-holder">
                                    <a href="{{route('forgetpassword')}}" class="eltd-login-action-btn" data-el="#eltd-reset-pass-content" data-title="Lost Password?">{{__("lan.Forgot Password")}}</a>
                                    <button type="button" onclick="singin()" class="eltd-btn eltd-btn-small eltd-btn-solid eltd-btn-icon-position-right"> 
                                        <span class="eltd-btn-text-holder"> 
                                            <span class="eltd-btn-text" style="color:  rgb(213, 240, 12)">
                                                {{__("lan.login")}}
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="eltd-membership-response-holder clearfix"></div>
                    <script type="text/template" class="eltd-membership-response-template">
                        <div class="eltd-membership-response <%= messageClass %> ">
                    <div class="eltd-membership-response-message">
                    </div>
                </div>
            </script>
                </div>
            </div>
        </div>




        <div class="eltd-register-content-inner" id="eltd-register-content">
            <div class="eltd-wp-register-holder">
                <div class="eltd-register-notice">
                    <form method="post" class="eltd-login-form" id="register">
                        @csrf
                        <fieldset>
                            <div>
                                <input style="text-align: start" type="text" class="register_inputs" name="username"  placeholder="{{__("lan.placeholder username")}}" value required />
                            </div>
                            <div>
                                <input style="text-align: start" type="email" class="register_inputs" name="email" placeholder="{{__("lan.email")}}" value required />
                            </div>
                            <div>
                                <input style="text-align: start" type="text" class="register_inputs" name="phone" placeholder="{{__("lan.phone")}}" value required />
                            </div>
                            <div>
                                <input style="text-align: start" class="register_inputs" type="password" name="password"  placeholder="{{__("lan.placeholder password")}}" value required />
                            </div>
                            <div>
                                <input style="text-align: start" class="register_inputs" type="password" name="conf_password" placeholder="{{__("lan.Confirm_Password")}}" value required />
                            </div>
                            <div class="eltd-lost-pass-remember-holder clearfix">
                                <span class="eltd-login-remember" id="register_message_area_topbar">
                                    
                                </span>
                            </div>
                            <div class="eltd-login-button-holder">
                                <button type="button" onclick="register()" class="eltd-btn eltd-btn-small eltd-btn-solid eltd-btn-icon-position-right"> 
                                    <span class="eltd-btn-text-holder"> 
                                        <span class="eltd-btn-text" style="color:  rgb(213, 240, 12)">
                                            {{__("lan.Register")}}
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>








    </div>
</div>



<script>
    function singin (){
        let login_inputs = document.querySelectorAll(".login_inputs");
        let check_login_inputs = 0 ;
        for (let i = 0; i < login_inputs.length; i++) {
            if(login_inputs[i].value != ""){
                login_inputs[i].style.borderColor = 'rgb(231, 231, 231)' ;
                check_login_inputs += 1; 
                if(login_inputs.length == check_login_inputs){
                    let data_form = new FormData($("#signin")[0]);
                    $.ajax({
                        type:"post",
                        enctype : "multipart/form-data",
                        url: "{{   route('login')   }}",
                        data: data_form,
                        contentType: false,
                        cache: false ,
                        processData: false,
                        success: function (data){
                            console.log(data)
                            if(data.status_code != 200){
                                document.getElementById("login_message_area_topbar").innerHTML  =  `
                                <div class="login-alert" style="font-weight: bold; text-transform: capitalize; font-size: 14px; color:red;">
                                    ${data.msg}
                                </div>
                                `;
                            }else{
                                location.reload();
                            }
                        },
                    });
                }
            }else{
                login_inputs[i].style.borderColor = 'red' ;
            }
        }
    }



    function register (){
        let register_inputs = document.querySelectorAll(".register_inputs");
        let check_register_inputs = 0 ;
        for (let i = 0; i < register_inputs.length; i++) {
            if(register_inputs[i].value != ""){
                register_inputs[i].style.borderColor = 'rgb(231, 231, 231)' ;
                check_register_inputs += 1; 
                if(register_inputs.length == check_register_inputs){
                    let data_form = new FormData($("#register")[0]);
                    $.ajax({
                        type:"post",
                        enctype : "multipart/form-data",
                        url: "{{   route('register')   }}",
                        data: data_form,
                        contentType: false,
                        cache: false ,
                        processData: false,
                        success: function (data){
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