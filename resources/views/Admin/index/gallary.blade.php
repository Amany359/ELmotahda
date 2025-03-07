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
  <link rel="stylesheet" href="{{url('admin/assets/libs/magnific-popup/dist/magnific-popup.css')}}">
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
                  <h4 class="fw-semibold mb-8">Gallery</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{url('admin/main/index.html')}}">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Gallery</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="{{url('admin/assets/images/breadcrumb/ChatBc.png')}}" alt="modernize-img" class="img-fluid mb-n4" />
                  </div>
                </div>
              </div>
            </div>
          </div>




          <div class="row">
            <div class="col-12">
              <!-- start Default Form Elements -->
              <div class="card card-body">
                <h4 class="card-title">Add new photo</h4>
               
                <form class="form-horizontal" id="new_gallary_photo">
                    @csrf
                  <div class="mb-3">
                    <label class="form-label">Categories</label>
                    <select class="form-select" name="exists_category" id="inlineFormCustomSelect">
                      
                    </select>
                  </div>


                  <div class="mb-3">
                    <label class="form-label">New Category</label>
                    <input type="text" class="form-control" placeholder="New Category" name="category" />
                    <span class="help-block">
                      <small>If you have added this category before
                        Please select the category from above</small>
                    </span>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Upload Image</label>
                    <input type="file" name="image" id="image_gallary" class="form-control" />
                  </div>

                  <div class="mb-3 col-2">
                    <button type="button" onclick="new_gallary()" class="justify-content-center w-100 btn mb-1 btn-rounded btn-secondary d-flex align-items-center">
                      <i class="ti ti-send fs-4 me-2"></i>
                      Send
                    </button>
                  </div>


                


                </form>
              </div>
              <!-- end Default Form Elements -->
            </div>
          </div>





          <div class="row el-element-overlay" id="photo_gallary">

        

              

          </div>








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
  <script src="{{url('admin/assets/js/vendor.min.js')}}"></script>
  <!-- Import Js Files -->
  <script src="{{url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/app.init.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/theme.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/app.min.js')}}"></script>
  <script src="{{url('admin/assets/js/theme/sidebarmenu.js')}}"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="{{url('admin/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('admin/assets/js/plugins/meg.init.js')}}"></script>

  <script src="{{url('jquery-3.6.1.js')}}"></script>



  <script>
      function get_category (){
            $.ajax({
                type:"post",
                url: "{{   route('get_categories')   }}",
                data: {
                    "_token" : "{{csrf_token()}}"
                },
                success: function (data){
                    document.getElementById("inlineFormCustomSelect").innerHTML = data ; 
                },
            });
        }
        get_category();

      function get_gallary (){
            $.ajax({
                type:"post",
                url: "{{   route('get_gallary')   }}",
                data: {
                    "_token" : "{{csrf_token()}}"
                },
                success: function (data){
                    document.getElementById("photo_gallary").innerHTML = data ; 
                },
            });
        }
        get_gallary();
        
        function delete_gallery (id){
              $.ajax({
                  type:"post",
                  url: "{{   route('delete_gallery')   }}",
                  data: {
                      "_token" : "{{csrf_token()}}",
                      "id" : id
                  },
                  success: function (data){
                    if(data.status_code == 200){
                            MessageBox("Good Job!", data.msg, "success");
                            get_category();
                            get_gallary();
                        }else{
                            MessageBox("Good Job!", data.msg, "error");
                        }
                  },
              });
          }


        function new_gallary (){
            let data_form = new FormData($("#new_gallary_photo")[0]);
            if(document.getElementById("image_gallary").value != ""){
                $.ajax({
                    type:"post",
                    enctype : "multipart/form-data",
                    url: "{{   route('add_gallary')   }}",
                    data: data_form,
                    contentType: false,
                    cache: false ,
                    processData: false,
                    success: function (data){
                        if(data.status_code == 200){
                            MessageBox("Good Job!", data.msg, "success");
                            get_category();
                            get_gallary();
                        }else{
                            MessageBox("Good Job!", data.msg, "error");
                        }
                    },
                });
            }
        }
  </script>




</body>

</html>