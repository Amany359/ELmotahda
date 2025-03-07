<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">
  
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{url('admin/assets/images/logos/favicon.png')}}" />
    
    <!-- Core Css -->
    <link rel="stylesheet" href="{{url('admin/assets/css/styles.css')}}" />
    
    <title>{{__("lan.All quote requests")}}</title>
  </head>
  
  <body class="link-sidebar">
    <!-- Preloader -->
    <div class="preloader">
      <img src="{{url('admin/assets/images/logos/favicon.png')}}" alt="loader" class="lds-ripple img-fluid" />
    </div>


    <div id="main-wrapper">
      <!-- Sidebar Start -->
      @include("Admin.layouts.header")
      <!--  Sidebar End -->
      <div class="page-wrapper">
        <!--  Header Start -->
        @include("Admin.layouts.full_header")
        
        <div class="body-wrapper">
            <div class="container-fluid">
               <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                  <div class="card-body px-4 py-3">
                     <div class="row align-items-center">
                        <div class="col-9">
                           <h4 class="fw-semibold mb-8">{{__("lan.All quote requests")}}</h4>
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="{{route("index")}}">{{__("lan.home")}}</a>
                                 </li>
                                 <li class="breadcrumb-item" aria-current="page">{{__("lan.All quote requests")}}</li>
                              </ol>
                           </nav>
                        </div>
                        <div class="col-3">
                           <div class="text-center mb-n5">
                              <img src="{{url('admin/assets/images/breadcrumb/ChatBc.png')}}" alt="modernize-img" class="img-fluid mb-n4">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              
                  <div class="card">
                     <div class="card-body">
                     <h4 class="card-title">{{__("lan.All quote requests")}}</h4>
                     <div id="chart-line-gradient" class="mx-n3"></div>
                     <div id="number_monthly" style="font-size: 25px; color: white; font-weight: bold;">
                        <div class="card2" style="width: 9rem;" > 
                           <div class="card2__skeleton card2__title"></div>
                           </div>
                        </div>
                     </div>
                  </div>



                  <div class="card card-body">
                     <div class="table-responsive">
                        <table class="table search-table align-middle text-nowrap">
                           <thead class="header-item">
                              <tr>
                                  <th>{{__("lan.delete")}}</th>
                                 <th>{{__("lan.company")}}</th>
                                 <th>{{__("lan.email")}}</th>
                                 <th>{{__("lan.location")}}</th>
                                 <th>{{__("lan.message")}}</th>
                                 <th>{{__("lan.Project Type")}}</th>
                                 <th>{{__("lan.phone")}}</th>
                                 <th>{{__("lan.file")}}</th>
                                 <th>{{__("lan.created_at")}}</th>
                              </tr>
                           </thead>
                           <tbody id="all_quote">


                            <!-- start row -->
                            
                            <!-- end row -->
                           
                              
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
        </div>
         

        <script src="{{url('jquery-3.6.1.js')}}"></script>


              
        <script>


         function all_quote () {
            const div = document.getElementById("all_quote") ; 
            $.ajax({
                type:"post",
                url: "{{   route('get_all_quote')   }}",
                data: {
                "_token" : "{{csrf_token()}}"
                },            
                success: function (data){
                  div.innerHTML = data.engineerings ; 
                  document.getElementById("number_monthly").innerHTML = data.month_count   + " {{__('lan.Month')}} " + data.curent_month ; 
                  find_air_list(data.list_engineerings);
                },
            });
         }

          function find_air_list (list){
              // Gradient Line Chart -------> LINE CHART
                var options_gradient = {
                    series: [
                    {
                        name: "",
                        data: list,
                    },
                    ],
                    chart: {
                    fontFamily: "inherit",
                    height: 350,
                    type: "line",
                    toolbar: {
                        show: false,
                    },
                    },
                    stroke: {
                    width: 7,
                    curve: "smooth",
                    },
                    xaxis: {
                    type: "line",
                    categories: [
                        "",
                        "{{__('lan.Jan')}}",
                        "{{__('lan.Feb')}}",
                        "{{__('lan.Mar')}}",
                        "{{__('lan.Apr')}}",
                        "{{__('lan.May')}}",
                        "{{__('lan.Jun')}}",
                        "{{__('lan.Jul')}}",
                        "{{__('lan.Aug')}}",
                        "{{__('lan.Sep')}}",
                        "{{__('lan.Oct')}}",
                        "{{__('lan.Nov')}}",
                        "{{__('lan.Dec')}}",
                    ],
                    labels: {
                        style: {
                        colors: [
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                        ],
                        },
                    },
                    },
                    grid: {
                    borderColor: "transparent",
                    },
                    colors: ["#39b69a"],
                    fill: {
                    type: "gradient",
                    gradient: {
                        shade: "dark",
                        gradientToColors: ["var(--bs-primary)"],
                        shadeIntensity: 1,
                        type: "horizontal",
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100, 100, 100],
                    },
                    },
                    markers: {
                    size: 4,
                    colors: ["var(--bs-primary)"],
                    strokeColors: "#fff",
                    strokeWidth: 2,
                    hover: {
                        size: 7,
                    },
                    },
                    yaxis: {
                    min: 0,
                    max: (Math.max(...list) + 50 ),
                    labels: {
                        style: {
                        colors: [
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#a1aab2",
                            "#fff",
                        ],
                        },
                    },
                    },
                    tooltip: {
                    theme: "dark",
                    },
               };
               var chart_line_gradient = new ApexCharts(
                   document.querySelector("#chart-line-gradient"),
                   options_gradient
               );
               chart_line_gradient.render();

          }



















          function delete_quote (id) {
            let conf = confirm("Confirm this action");

            if(conf === true){
                $.ajax({
                    type:"post",
                    url: "{{   route('delete_quote')   }}",
                    data: {
                        "_token" : "{{csrf_token()}}",
                        "id" : id    
                    },            
                    success: function (data){
                        all_quote() ; 
                    },
                });
            }
          }




          function handleColorTheme(e) {
            document.documentElement.setAttribute("data-color-theme", e);
          }


          all_quote();
        </script>
          @include("Admin.layouts.theme")
      </div>
      
      <!--  Search Bar -->
      @include("Admin.layouts.cart")
    </div>

    
    <div class="dark-transparent sidebartoggler"></div>
    <!-- Import Js Files -->
    <script src="{{url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('admin/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/app.init.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/theme.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/app.min.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/sidebarmenu.js')}}"></script>
    
    <!-- solar icons -->
    <script src="{{url('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{url('admin/assets/js/widget/card-custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  </body>
  
</html>
