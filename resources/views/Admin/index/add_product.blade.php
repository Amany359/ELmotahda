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

  <title>Add Product</title>

  <link rel="stylesheet" href="{{url('admin/assets/libs/quill/dist/quill.snow.css')}}">
  <link rel="stylesheet" href="{{url('admin/assets/libs/dropzone/dist/min/dropzone.min.css')}}">
  <link rel="stylesheet" href="{{url('admin/assets/libs/select2/dist/css/select2.min.css')}}">
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
                  <h4 class="fw-semibold mb-8">Add Product</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{url('admin/main/index.html')}}">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Add Product</li>
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


          <form action="" id="add_product_form">
            @csrf
            <input type="hidden" id="content_ar" name="content_ar">
            <input type="hidden" id="content_en" name="content_en">
            <div class="row">
              <div class="col-lg-8 ">

      
  
  
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-7">
                      <h4 class="card-title">General</h4>
  
                      <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="ti ti-menu fs-5 d-flex"></i>
                      </button>
                    </div>
  
  
                      <div class="mb-4">
                        <label class="form-label">Product Name <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="product_name" class="form-control data_inputs" placeholder="Product Name">
                        <p class="fs-2">A product name is required and recommended to be unique.</p>
                      </div>
                      <div>
                        <label class="form-label">Description (Arabic)<span class="text-danger">*</span></label>
                        <div id="editor"></div>
                      </div>
  
                      <div>
                        <label class="form-label">Description (English)<span class="text-danger">*</span></label>
                        <div id="editor2"></div>
                      </div>
  
  
                  </div>
                </div>
  
                <style>
                  .file-upload-form {
                    width: fit-content;
                    height: fit-content;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  }
                  .file-upload-label input {
                    display: none;
                  }
                  .file-upload-label svg {
                    height: 40px;
                    fill: rgb(82, 82, 82);
                    margin-top: 20px;
                  }
                  .file-upload-label {
                    cursor: pointer;
                    background-color: #ddd;
                    padding: 50px 50px;
                    border-radius: 40px;
                    border: 2px dashed rgb(82, 82, 82);
                    box-shadow: 0px 0px 200px -50px rgba(0, 0, 0, 0.719);
                  }
                  .file-upload-design {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    gap: 5px;
                  }
                  .browse-button {
                    background-color: rgb(82, 82, 82);
                    padding: 5px 15px;
                    border-radius: 10px;
                    color: white;
                    font-size: 11px;
                    transition: all 0.3s;
                  }
                  .browse-button:hover {
                    background-color: rgb(14, 14, 14);
                  }

                </style>
  
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-7">Media</h4>


                      <input id="image1_" type="file"  name="file[]" style="display: none" onchange="setImage(this, 'image1')"/>
                    
                      <label for="image1_" class="file-upload-label" multiple="multiple" id="image1">
                        <div class="file-upload-design">
                          <svg viewBox="0 0 640 512" height="1em">
                            <path
                              d="M144 480C64.5 480 0 415.5 0 336c0-62.8 
                              40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 
                              71.6-160 160-160c59.3 0 111 32.2 138.7 
                              80.2C409.9 102 428.3 96 448 96c53 0 96 
                              43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 
                              640 352c0 70.7-57.3 128-128 
                              128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 
                              0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 
                              39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 
                              0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                            </path>
                          </svg>
                          <span class="browse-button">Browse file</span>
                        </div>
                      </label>


                      <input id="image2_" type="file" name="file[]" style="display: none" onchange="setImage(this, 'image2')"/>
                    
                      <label for="image2_" class="file-upload-label" multiple="multiple" id="image2">
                        <div class="file-upload-design">
                          <svg viewBox="0 0 640 512" height="1em">
                            <path
                              d="M144 480C64.5 480 0 415.5 0 336c0-62.8 
                              40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 
                              71.6-160 160-160c59.3 0 111 32.2 138.7 
                              80.2C409.9 102 428.3 96 448 96c53 0 96 
                              43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 
                              640 352c0 70.7-57.3 128-128 
                              128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 
                              0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 
                              39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 
                              0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                            </path>
                          </svg>
                          <span class="browse-button">Browse file</span>
                        </div>
                      </label>
                


                      <input id="image3_" type="file" name="file[]" style="display: none" onchange="setImage(this, 'image3')"/>
                    
                      <label for="image3_" class="file-upload-label" multiple="multiple" id="image3">
                        <div class="file-upload-design">
                          <svg viewBox="0 0 640 512" height="1em">
                            <path
                              d="M144 480C64.5 480 0 415.5 0 336c0-62.8 
                              40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 
                              71.6-160 160-160c59.3 0 111 32.2 138.7 
                              80.2C409.9 102 428.3 96 448 96c53 0 96 
                              43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 
                              640 352c0 70.7-57.3 128-128 
                              128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 
                              0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 
                              39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 
                              0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                            </path>
                          </svg>
                          <span class="browse-button">Browse file</span>
                        </div>
                      </label>
                


                      <input id="image4_" type="file" name="file[]" style="display: none" onchange="setImage(this, 'image4')"/>
                    
                      <label for="image4_" class="file-upload-label" multiple="multiple" id="image4">
                        <div class="file-upload-design">
                          <svg viewBox="0 0 640 512" height="1em">
                            <path
                              d="M144 480C64.5 480 0 415.5 0 336c0-62.8 
                              40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 
                              71.6-160 160-160c59.3 0 111 32.2 138.7 
                              80.2C409.9 102 428.3 96 448 96c53 0 96 
                              43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 
                              640 352c0 70.7-57.3 128-128 
                              128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 
                              0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 
                              39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 
                              0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                            </path>
                          </svg>
                          <span class="browse-button">Browse file</span>
                        </div>
                      </label>
                


                      <input id="image5_" type="file" name="file[]" style="display: none" onchange="setImage(this, 'image5')"/>
                    
                      <label for="image5_" class="file-upload-label" multiple="multiple" id="image5">
                        <div class="file-upload-design">
                          <svg viewBox="0 0 640 512" height="1em">
                            <path
                              d="M144 480C64.5 480 0 415.5 0 336c0-62.8 
                              40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 
                              71.6-160 160-160c59.3 0 111 32.2 138.7 
                              80.2C409.9 102 428.3 96 448 96c53 0 96 
                              43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 
                              640 352c0 70.7-57.3 128-128 
                              128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 
                              0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 
                              39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 
                              0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                            </path>
                          </svg>
                          <span class="browse-button">Browse file</span>
                        </div>
                      </label>
                


                      <input id="image6_" type="file" name="file[]" style="display: none" onchange="setImage(this, 'image6')"/>
                    
                      <label for="image6_" class="file-upload-label" multiple="multiple" id="image6">
                        <div class="file-upload-design">
                          <svg viewBox="0 0 640 512" height="1em">
                            <path
                              d="M144 480C64.5 480 0 415.5 0 336c0-62.8 
                              40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 
                              71.6-160 160-160c59.3 0 111 32.2 138.7 
                              80.2C409.9 102 428.3 96 448 96c53 0 96 
                              43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 
                              640 352c0 70.7-57.3 128-128 
                              128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 
                              0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 
                              39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 
                              0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                            </path>
                          </svg>
                          <span class="browse-button">Browse file</span>
                        </div>
                      </label>
                
                  </div>
                </div>
  
  
  
  
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-7">Variation</h4>
  
                      <label class="form-label">Add Product Variations</label>
                      <div class="email-repeater mb-3">


                        <div id="repeater-group">

                          <div class="row mb-3" id="back123">
                            <div class="col-md-4">
                              <select class="form-control data_inputs" name="variation_key[]" id="select_start" style="border-color: #333f55 !important; background-color: #202936; border-color: #333f55 !important; color: #7c8fac; background-color: #202936;">


                              </select>
                            </div>
                            <div class="col-md-4 mt-3 mt-md-0">
                              <input type="text" name="variation_value[]" class="form-control data_inputs" placeholder="Variation" />
                            </div>
                            <div class="col-md-2 mt-3 mt-md-0">
                              <button class="btn bg-danger-subtle text-danger" type="button" onclick="delete_variation('back123')">
                                <i class="ti ti-x fs-5 d-flex"></i>
                              </button>
                            </div>
                          </div>
              
              
              
                        </div>
                        <button type="button" onclick="variation()"  class="btn bg-primary-subtle text-primary fs-3 fw-bold p-2">
                          <span class="fs-4 me-1">+</span>
                          Add another variation
                        </button>
                      </div>
                  </div>
                </div>
  
  
  


                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-7">Pricing</h4>
  
                      <div class="mb-7">
                        <label class="form-label"> Price <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control data_inputs" placeholder="Product Price" name="price">
                        <p class="fs-2">Set the product price.</p>
                      </div>


                      <div class="mb-7">
                        <label class="form-label">Discount Type</label>


                        <nav>
                          <div class="nav nav-tabs justify-content-between align-items-center gap-9" id="nav-tab" role="tablist">
                            <label for="radio1" class=" p-3  border gap-2 rounded-2 d-flex flex-fill justify-content-center cursor-pointer" id="" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" aria-controls="nav-home">
                              <input type="radio" class="form-check-input" name="discount" value="non" id="radio1" checked>
                              <span class="fs-4 fw-bold text-dark">No Discount</span>
                            </label>
                            <label for="radio2" class=" p-3 border gap-2 rounded-2 d-flex flex-fill justify-content-center cursor-pointer" id="" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" aria-controls="nav-profile">
                              <input type="radio" class="form-check-input" name="discount" value="customrange"  id="radio2">
                              <span class="fs-4 fw-bold text-dark" id="customrange_">Percentage %</span>
                            </label>
                            <label for="radio3" class=" p-3 border gap-2 rounded-2 d-flex flex-fill justify-content-center cursor-pointer" id="" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" aria-controls="nav-contact">
                              <input type="radio" class="form-check-input" name="discount" value="fixed_price" id="radio3">
                              <span class="fs-4 fw-bold text-dark">Fixed Price</span>
                            </label>
                          </div>
                        </nav>

                        
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade mt-7" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                              <div class="form-group">
                                <label class="form-label">Set Discount Percentage <span class="text-danger">*</span>
                                </label>
                                <input type="range" class="form-range" id="customRange1" onchange="set_number_range(this)" name="customrange" min="0" max="100" step="5">
                                <p class="fs-2">Set a percentage discount to be applied on this product.</p>
                              </div>
                          </div>
                          <div class="tab-pane fade mt-7" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="mb-7">
                              <label class="form-label">Fixed Discounted Price <span class="text-danger">*</span>
                              </label>
                              <input type="text" class="form-control " name="fixed_price" placeholder="Discounted Price">
                              <p class="fs-2">Set the discounted product price. The product will be reduced at the
                                determined fixed price.</p>
                            </div>
                          </div>
                        </div>

                      </div>


                      <script>
                        function set_number_range (ele){
                          document.getElementById("customrange_").innerHTML = `Percentage ${ele.value}%`;
                        }
                      </script>



                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-4">
                            <label class="form-label">VAT Amount (%) <span class="text-danger">*</span>
                            </label>
                            <input type="number" name="vat" class="form-control data_inputs" value="0">
                            <p class="fs-2">Set the product VAT about.</p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-4">
                            <label class="form-label">Quantity <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control data_inputs" name="quantity" value="1">
                            <p class="fs-2">Set the product Quantity</p>
                          </div>
                        </div>
                      </div>




                  </div>
                </div>
  
  
                <div class="form-actions mb-5" style="display: flex; justify-content: flex-start; align-items: center;">
                  <button type="button" onclick="add_product()" class="btn btn-primary" style="    margin: 0px 17px;">
                    Save changes
                  </button>



                  <style>
                    .dots {
                      width: var(--size);
                      height: var(--size);
                      position: relative;
                      display:none;
                    }

                    .dot {
                      width: var(--size);
                      height: var(--size);
                      animation: dwl-dot-spin calc(var(--speed) * 5) infinite linear both;
                      animation-delay: calc(var(--i) * var(--speed) / (var(--dot-count) + 2) * -1);
                      rotate: calc(var(--i) * var(--spread) / (var(--dot-count) - 1));
                      position: absolute;
                    }

                    .dot::before {
                      content: "";
                      display: block;
                      width: var(--dot-size);
                      height: var(--dot-size);
                      background-color: var(--color);
                      border-radius: 50%;
                      position: absolute;
                      transform: translate(-50%, -50%);
                      bottom: 0;
                      left: 50%;
                    }

                    @keyframes dwl-dot-spin {
                      0% {
                        transform: rotate(0deg);
                        animation-timing-function: cubic-bezier(0.390, 0.575, 0.565, 1.000);
                        opacity: 1;
                      }

                      2% {
                        transform: rotate(20deg);
                        animation-timing-function: linear;
                        opacity: 1;
                      }

                      30% {
                        transform: rotate(180deg);
                        animation-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
                        opacity: 1;
                      }

                      41% {
                        transform: rotate(380deg);
                        animation-timing-function: linear;
                        opacity: 1;
                      }

                      69% {
                        transform: rotate(520deg);
                        animation-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
                        opacity: 1;
                      }

                      76% {
                        opacity: 1;
                      }

                      76.1% {
                        opacity: 0;
                      }

                      80% {
                        transform: rotate(720deg);
                      }

                      100% {
                        opacity: 0;
                      }
                    }
                  </style>


                  <div style="   --size: 49px; --dot-size: 6px; --dot-count: 4; --color: #c8ff0b; --speed: 1s; --spread: 60deg;" class="dots">
                    <div style="--i: 0;" class="dot"></div>
                    <div style="--i: 1;" class="dot"></div>
                    <div style="--i: 2;" class="dot"></div>
                    <div style="--i: 3;" class="dot"></div>
                    <div style="--i: 4;" class="dot"></div>
                    <div style="--i: 5;" class="dot"></div>
                  </div>



                </div>

              </div>
              <div class="col-lg-4">
                <div class="offcanvas-md offcanvas-end overflow-auto" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">


                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between mb-7">
                        <h4 class="card-title">Status</h4>
                        <div class="p-2 h-100 bg-success rounded-circle"></div>
                      </div>
                        <div>
                          <select class="form-select mr-sm-2  mb-2" id="inlineFormCustomSelect" name="status">
                            <option value="1">Active</option>
                            <option value="0">Hidden</option>
                          </select>
                          <p class="fs-2 mb-0">
                            Set the product status.
                          </p>
                        </div>
                    </div>
                  </div>



                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-7">Product Details</h4>
                      <div class="mb-3">
                        <label class="form-label">Categories</label>
                        <select class="select2 form-control" name="categories[]" id="categories" multiple="multiple">
                        </select>
                        <p class="fs-2 mb-0">
                          Add product to a category.
                        </p>
                      </div>
                      <button type="button" class="btn bg-primary-subtle text-primary fs-3 fw-bold p-2">
                        <span class="fs-4 me-1">+</span>
                        Create New Category
                      </button>
                      <div class="mt-7">
                        <label class="form-label">Tags</label>
                        <select class="select2 form-control" name="tags[]" id="tags"  multiple="multiple" >
                         
                        </select>
                        <p class="fs-2 mb-0">
                          Add product to a category.
                        </p>
                      </div>
                    </div>
                  </div>



             


                </div>
              </div>
            </div>
          </form>






        </div>
      </div>


      <script>
        function handleColorTheme(e) {
          document.documentElement.setAttribute("data-color-theme", e);
        }
      </script>


      @include("Admin.layouts.theme")
    </div>
    
  </div>
  
  <div class="dark-transparent sidebartoggler"></div>
  <script src="{{url('jquery-3.6.1.js')}}"></script>

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
  <script src="{{url('admin/assets/libs/quill/dist/quill.min.js')}}"></script>
  <script src="{{url('admin/assets/js/forms/quill-init.js')}}"></script>
  <script src="{{url('admin/assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/select2/dist/js/select2.min.js')}}"></script>
  <script src="{{url('admin/assets/js/forms/select2.init.js')}}"></script>
  <script src="{{url('admin/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{url('admin/assets/js/forms/repeater-init.js')}}"></script>



  <script>
    let id = 1 ; 
    let options = '';  

    function add_product(){
      document.querySelector(".dots").style.display = "inline-block" ;
      let content_ar = document.querySelector("#editor .ql-editor");
      let content_en = document.querySelector("#editor2 .ql-editor");
      document.getElementById("content_ar").value = content_ar.innerHTML ;
      document.getElementById("content_en").value = content_en.innerHTML ;
      let data_inputs = document.querySelectorAll(".data_inputs");
      let count = 0 ; 
      for (let i = 0; i < data_inputs.length; i++) {
        if(data_inputs[i].value != ""){
          count += 1 ; 
          data_inputs[i].style.cssText = "border-color: #333f55 !important;";

          if(count == data_inputs.length){
            let data_form = new FormData($("#add_product_form")[0]);
              $.ajax({
                  type:"post",
                  enctype : "multipart/form-data",
                  url: "{{   route('add_product')   }}",
                  data: data_form,
                  contentType: false,
                  cache: false ,
                  processData: false,
                  success: function (data){
                      document.querySelector(".dots").style.display = "none" ;
                      if(data.status_code == 200){
                          MessageBox("Good Job!", data.msg, "success");
                      }else{
                          MessageBox("Good Job!", data.msg, "error");
                      }
                  },
            });
          }
        }else{
          document.querySelector(".dots").style.display = "none" ;
          data_inputs[i].style.cssText = "    border-color: red !important;";
        }
      }
    }

    function setImage (e, id){
      const reader = new FileReader();
      reader.onload = function () {
        document.getElementById(id).style.cssText = `background: url('${reader.result}') ;background-size: contain; background-repeat: no-repeat; `;
      }
      reader.readAsDataURL(e.files[0]);
    
    }

    function variation (){
      const div = document.getElementById("repeater-group") ; 
      const div_ = document.createElement("div") ; 
      div_.className = 'row mb-3' ; 
      div_.id = `variation${id}` ; 
      div_.innerHTML = `
       <div class="col-md-4">
              <select class="form-control" name="variation_key[]" style="border-color: #333f55 !important; background-color: #202936; border-color: #333f55 !important; color: #7c8fac; background-color: #202936;">
                ${options}
              </select>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
              <input type="text" name="variation_value[]" class="form-control data_inputs" placeholder="Variation" />
            </div>
            <div class="col-md-2 mt-3 mt-md-0">
              <button onclick="delete_variation('variation${id}')" class="btn bg-danger-subtle text-danger" type="button">
                <i class="ti ti-x fs-5 d-flex"></i>
              </button>
          </div>
      `
      div.appendChild(div_); 
      id += 1 ; 
    }

    function get_variation (){
      const select = document.getElementById("select_start") ; 
      $.ajax({
            type:"post",
            url: "{{   route('get_variation')   }}",
            data: {
              "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
              select.innerHTML = data ;
              options = data ;
            },
        });
    }

    function get_categories (){
      const select = document.getElementById("categories") ; 
      $.ajax({
            type:"post",
            url: "{{   route('get_category')   }}",
            data: {
              "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
              select.innerHTML = data ;
            },
        });
    }

    function get_tags (){
      const select = document.getElementById("tags") ; 
      $.ajax({
            type:"post",
            url: "{{   route('get_tags')   }}",
            data: {
              "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
              select.innerHTML = data ;
            },
        });
    }

    function delete_variation(id){
      const div = document.getElementById(id).remove() ; 
    }

    get_tags() ; 
    get_categories() ; 
    get_variation() ; 

  </script>

  
</body>

</html>