
<style>
  .card2 {
   width: 20%;
   background: #353535;
   position: fixed ; 
   bottom: -125px; 
   left: 10px;
   border-radius: 20px;
   display: flex;
   align-items: center;
   justify-content: left;
   backdrop-filter: blur(10px);
   transition: 0.5s ease-in-out;
   z-index: 200;
   padding: 20px 20px 20px 0px;
 }
 
 .card2:hover {
   cursor: pointer;
   transform: scale(1.05);
 }
 
 .img {
   width: 86px;
   height: 56px;
   margin-left: 10px;
   border-radius: 10px;
   background: url('{{url("images/logos/black_logo.png")}}');
   background-size: contain;
   background-repeat: no-repeat;
 }
 
 .card2:hover > .img {
   transition: 0.5s ease-in-out;
 }
 
 .textBox {
   margin-left: 10px;
   color: white;
 
 }
 
 .textContent {
   display: flex;
   align-items: center;
   justify-content: space-between;
 }
 
 .span {
   font-size: 10px;
 }
 
 .h1 {
   font-size: 16px;
   font-weight: bold;
   color: white ; 
   margin: 0px; 
 }
 
 .p {
   font-size: 12px;
   font-weight: lighter;
   color: white ; 
   margin: 0px; 
 }
 
 .error{
   color: red; 
 }
 
 </style>
 
 {{-- 
 <div id="msg" style="  position: fixed ; bottom:20px;  z-index: 200;">
 
   
 </div>
  --}}
 
  
  <style>
   
   
   @font-face {
       font-family: 'Kagemasha_Italic';
       src: url('{{url("fonts/Kagemasha Italic.otf")}}') format('woff'),
       url('{{url("fonts/Kagemasha Italic.otf")}}') format('truetype');
       font-display: swap;
   }
   
   
   @font-face {
       font-family: 'OverusedGrotesk-Light';
       src: url('{{url("fonts/otf/OverusedGrotesk-Light.otf")}}') format('woff'),
       url('{{url("fonts/otf/OverusedGrotesk-Light.otf")}}') format('truetype');
       font-display: swap;
   }
 
 
 
   @font-face {
       font-family: 'OverusedGrotesk-Medium';
       src: url('{{url("fonts/otf/OverusedGrotesk-Medium.otf")}}') format('woff'),
       url('{{url("fonts/otf/OverusedGrotesk-Medium.otf")}}') format('truetype');
       font-display: swap;
   }
                         
   
   @font-face {
       font-family: 'OverusedGrotesk-SemiBold';
       src: url('{{url("fonts/otf/OverusedGrotesk-SemiBold.otf")}}') format('woff'),
       url('{{url("fonts/otf/OverusedGrotesk-SemiBold.otf")}}') format('truetype');
       font-display: swap;
   }
                         
   
   @font-face {
       font-family: 'OverusedGrotesk-ExtraBold';
       src: url('{{url("fonts/otf/OverusedGrotesk-ExtraBold.otf")}}') format('woff'),
       url('{{url("fonts/otf/OverusedGrotesk-ExtraBold.otf")}}') format('truetype');
       font-display: swap;
   }
   @font-face {
       font-family: 'OverusedGrotesk-Bold';
       src: url('{{url("fonts/otf/OverusedGrotesk-Bold.otf")}}') format('woff'),
       url('{{url("fonts/otf/OverusedGrotesk-Bold.otf")}}') format('truetype');
       font-display: swap;
   }
                         
   *{
     font-family: "OverusedGrotesk-Medium" !important  ; 
   }
   i, .fa{
     font-family: FontAwesome !important;
   }
   .fas{
     font-family: "Font Awesome 5 Pro" !important;
   }
 </style>
 
 <link rel="stylesheet" href="{{url('admin/assets/libs/sweetalert2/dist/sweetalert2.min.css')}}">
 
 <div class="col-sm-6 col-lg-3" style="display: none">
     <div class="card">
       <div class="border-bottom title-part-padding">
         <h4 class="card-title">Success Message</h4>
         <h6 class="card-subtitle">(Click on image)</h6>
       </div>
       <div class="card-body p-3">
         <img src="{{url('admin/assets/images/alert/alert3.png')}}" alt="alert" class="img-fluid model_img" data-title="" data-msg="" id="sa-success">
       </div>
     </div>
 </div>
 
   <script src="{{url('admin/assets/js/vendor.min.js')}}"></script>
 
   <script src="{{url('admin/assets/libs/sweetalert2/dist/sweetalert2.min.js')}}"></script>
   <script src="{{url('admin/assets/js/forms/sweet-alert.init.js')}}"></script>
   
 
   <style>
     .swal2-popup{
         font-size: 16px !important ; 
     }
   </style>
   
   
 
   <script>
     function get_value(id, title){
       Swal.fire({
         title: title,
         input: "text",
         inputAttributes: {
           autocapitalize: "off",
         },
         showCancelButton: true,
         confirmButtonText: "Done",
         showLoaderOnConfirm: true,
         preConfirm: (email) => {
           alert_me_out(id, email)
         },
         allowOutsideClick: () => !Swal.isLoading(),
       }).then((result) => {
         // if (result.value) {
         //   Swal.fire({
         //     title: `${result.value.login}'s avatar`,
         //     imageUrl: result.value.avatar_url,
         //   });
         // }
       });
     }
 
 
     
     function ask (title, text, yes, no, url){
       Swal.fire({
         title: title,
         text: text,
         type: "success",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#000",
         confirmButtonText: yes,
         cancelButtonText: no,
       }).then((result) => {
         if (result.value) {
           location.href = url ; 
         }
       });
     }
     function msg (msg, title, status){
         if(status == 'success'){
             Swal.fire(
             title,
             msg,
             'success'
           );
 
         }else{
           Swal.fire({
             type: "error",
             title: title,
             text: msg,
           });
         }
     }
   </script>
 
 
 