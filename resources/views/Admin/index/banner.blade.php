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

    <title>Modernize Bootstrap Admin</title>
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
                                    <h4 class="fw-semibold mb-8">Banners</h4>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a class="text-muted text-decoration-none" href="{{route('Dashboard')}}">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item" aria-current="page">Banners</li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="col-3">
                                    <form id="banner">
                                        @csrf
                                        <input type="file" id="add_banner" name="image" onchange="add_banners()" class="btn btn-secondary" style="display: none" >
                                    </form>
                                    <label for="add_banner">
                                        <a class="btn btn-secondary" style="cursor: pointer">Add banner</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-12" id="banners_request">

                                




                        </div>
                                     
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <script>
                function handleColorTheme(e) {
                    document.documentElement.setAttribute("data-color-theme", e);
                }
            </script>
            @include("Admin.layouts.theme")

        </div>
        @include("Admin.layouts.cart")

    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="{{url('jquery-3.6.1.js')}}"></script>
    @include("Admin.layouts.Message")

    <!-- Import Js Files -->
    <script src="{{url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('admin/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/app.init.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/theme.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/app.min.js')}}"></script>
    <script src="{{url('admin/assets/js/theme/sidebarmenu.js')}}"></script>

    <script defer>
        function add_banners (){
            let data_form = new FormData($("#banner")[0]);
            if(document.getElementById("add_banner").value != ""){
                $.ajax({
                    type:"post",
                    enctype : "multipart/form-data",
                    url: "{{   route('add_banner')   }}",
                    data: data_form,
                    contentType: false,
                    cache: false ,
                    processData: false,
                    success: function (data){
                        console.log(data)
                        if(data.status_code == 200){
                            MessageBox("Good Job!", data.msg, "success");
                            get_banners();
                        }else{
                            MessageBox("Good Job!", data.msg, "error");
                        }
                    },
                });
            }
        }
        function get_banners (){
            $.ajax({
                type:"post",
                url: "{{   route('get_banner')   }}",
                data: {
                    "_token" : "{{csrf_token()}}"
                },
                success: function (data){
                    document.getElementById("banners_request").innerHTML = data ; 
                },
            });
        }
        get_banners();
        function delete_banner (id){
            $.ajax({
                type:"post",
                url: "{{   route('delete_banner')   }}",
                data: {
                    "_token" : "{{csrf_token()}}",
                    "id" : id
                },
                success: function (data){
                    if(data.status_code == 200){
                        MessageBox("Good Job!", data.msg, "success");
                        get_banners();
                    }else{
                        MessageBox("Good Job!", data.msg, "error");
                    }
                },
            });
        }
    </script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
