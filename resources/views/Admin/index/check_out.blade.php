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

  <title>Check out</title>
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
                  <h4 class="fw-semibold mb-8">checkout</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="{{url('admin/main/index.html')}}">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">checkout</li>
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
          <div class="checkout">
            <div class="card">
              <div class="card-body p-4">
                <div class="wizard-content">
                  <form id="request_order" class="tab-wizard wizard-circle">
                    @csrf
                    <!-- Step 1 -->
                    <h6>Cart</h6>
                    <section>
                      <div class="table-responsive">
                        <table class="table align-middle text-nowrap mb-0">
                          <thead class="fs-2">
                            <tr>
                              <th>Product</th>
                              <th>Quantity</th>
                              <th class="text-end">Price</th>
                            </tr>
                          </thead>

                          
                          <tbody id="check_out_products">



                          </tbody>


                        </table>
                      </div>
                      <div class="order-summary border rounded p-4 my-4">
                        <div class="p-3 get_order_sum_" id="">
                          
                        </div>
                      </div>
                    </section>
                    <!-- Step 2 -->
                    <h6>Billing & address</h6>
                    <section>
                      <div class="billing-address-content">
                        {{-- <div class="row">


                          <div class="col-lg-4">
                            <div class="card shadow-none border">
                              <div class="card-body p-4">
                                <h6 class="mb-3 fs-4 fw-semibold">Johnathan Doe</h6>
                                <p class="mb-1 fs-2">E601 Vrundavan Heights, godrej garden city - 382481</p>
                                <h6 class="d-flex align-items-center gap-2 my-4 fw-semibold fs-4">
                                  <i class="ti ti-device-mobile fs-7"></i>9999501050
                                </h6>
                                <a href="javascript:void(0)" class="btn btn-outline-primary  billing-address">Deliver To
                                  this address</a>
                              </div>
                            </div>
                          </div>


                          <div class="col-lg-4">
                            <div class="card shadow-none border">
                              <div class="card-body p-4">
                                <h6 class="mb-3 fs-4 fw-semibold">ParleG Doe</h6>
                                <p class="mb-1 fs-2">D201 Galexy Heights, godrej garden city - 382481</p>
                                <h6 class="d-flex align-items-center gap-2 my-4 fw-semibold fs-4">
                                  <i class="ti ti-device-mobile fs-7"></i>9999501050
                                </h6>
                                <a href="javascript:void(0)" class="btn btn-outline-primary  billing-address">Deliver To
                                  this address</a>
                              </div>
                            </div>
                          </div>


                          <div class="col-lg-4">
                            <div class="card shadow-none border">
                              <div class="card-body p-4">
                                <h6 class="mb-3 fs-4 fw-semibold">Guddu Bhaiya</h6>
                                <p class="mb-1 fs-2">Mumbai khao gali, Behind shukan, godrej garden city - 382481</p>
                                <h6 class="d-flex align-items-center gap-2 my-4 fw-semibold fs-4">
                                  <i class="ti ti-device-mobile fs-7"></i>9999501050
                                </h6>
                                <a href="javascript:void(0)" class="btn btn-outline-primary  billing-address">Deliver To this address</a>
                              </div>
                            </div>
                          </div>

                          
                        </div> --}}
              
                      </div>


                      <div class="payment-method-list payment-method" style="display: block">



                        <div class="delivery-option btn-group-active  card shadow-none border">
                          <div class="card-body p-4">
                            <h6 class="mb-3 fw-semibold fs-4">Delivery Info</h6>
                            <div class="btn-group flex-row gap-3 w-100" role="group" aria-label="Basic radio toggle button group">

                              <div class="position-relative form-check btn-custom-fill flex-fill ps-0">
                                <input type="text" name="name" class="form-control check_input" placeholder="name" style="width:50%; margin:10px 0px;">
                                <input type="number" name="phone" class="form-control check_input" placeholder="Phone" style="width:50%; margin:10px 0px;">
                                <input type="email" name="email" class="form-control " placeholder="Email (optional)" style="width:50%; margin:10px 0px;">
                              </div>

                              {{-- <div class="position-relative form-check btn-custom-fill flex-fill ps-0">
                                <input type="radio" class="form-check-input ms-4 round-16" name="deliveryOpt1" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio1">
                                  <div class="text-start ps-2">
                                    <h6 class="fs-4 fw-semibold mb-0">Free delivery</h6>
                                    <p class="mb-0 text-muted">Delivered on Firday, May 10</p>
                                  </div>
                                </label>
                              </div> --}}


                              {{-- <div class="position-relative form-check btn-custom-fill flex-fill ps-0">
                                <input type="radio" class="form-check-input ms-4 round-16" name="deliveryOpt1" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio2">
                                  <div class="text-start ps-2">
                                    <h6 class="fs-4 fw-semibold mb-0">Fast delivery ($2,00)</h6>
                                    <p class="mb-0 text-muted">Delivered on Wednesday, May 8</p>
                                  </div>
                                </label>
                              </div> --}}


                            </div>
                          </div>
                        </div>



                        <div class="delivery-option btn-group-active  card shadow-none border">
                          {{-- <div class="card-body p-4">
                            <h6 class="mb-3 fw-semibold fs-4">Delivery Option</h6>
                            <div class="btn-group flex-row gap-3 w-100" role="group" aria-label="Basic radio toggle button group">
                              <div class="position-relative form-check btn-custom-fill flex-fill ps-0">
                                <input type="radio" class="form-check-input ms-4 round-16" name="deliveryOpt1" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio1">
                                  <div class="text-start ps-2">
                                    <h6 class="fs-4 fw-semibold mb-0">Free delivery</h6>
                                    <p class="mb-0 text-muted">Delivered on Firday, May 10</p>
                                  </div>
                                </label>
                              </div>
                              <div class="position-relative form-check btn-custom-fill flex-fill ps-0">
                                <input type="radio" class="form-check-input ms-4 round-16" name="deliveryOpt1" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio2">
                                  <div class="text-start ps-2">
                                    <h6 class="fs-4 fw-semibold mb-0">Fast delivery ($2,00)</h6>
                                    <p class="mb-0 text-muted">Delivered on Wednesday, May 8</p>
                                  </div>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div> --}}


                        
                        <div class="payment-option btn-group-active  card shadow-none border">
                          <div class="card-body p-4">
                            <h6 class="mb-3 fw-semibold fs-4">Payment Option</h6>
                            <div class="row">
                              <div class="col-lg-8">
                                <div class="btn-group flex-column" role="group" aria-label="Basic radio toggle button group">
                                  <div class="position-relative mb-3 w-100 form-check btn-custom-fill ps-0">

                                    <input type="radio" class="form-check-input ms-4 round-16" name="payment" id="btnradio3" value="Paypal" autocomplete="off" checked>

                                    <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio3">
                                      <div class="d-flex align-items-center">
                                        <div class="text-start ps-2">
                                          <h6 class="fs-4 fw-semibold mb-0">Pay with Paypal</h6>
                                          <p class="mb-0 text-muted">You will be redirected to PayPal website to
                                            complete your purchase securely.</p>
                                        </div>
                                        <img src="{{url('admin/assets/images/svgs/paypal.svg')}}" alt="matdash-img" class="img-fluid ms-auto">
                                      </div>
                                    </label>
                                  </div>
                                  <div class="position-relative mb-3 form-check btn-custom-fill ps-0">
                                    <input type="radio" class="form-check-input ms-4 round-16" name="payment" id="btnradio4" value="Credit / Debit Card" autocomplete="off">
                                    <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio4">
                                      <div class="d-flex align-items-center">
                                        <div class="text-start ps-2">
                                          <h6 class="fs-4 fw-semibold mb-0">Credit / Debit Card</h6>
                                          <p class="mb-0 text-muted">We support Mastercard, Visa, Discover and Stripe.
                                          </p>
                                        </div>
                                        <img src="{{url('admin/assets/images/svgs/mastercard.svg')}}" alt="matdash-img" class="img-fluid ms-auto">
                                      </div>
                                    </label>
                                  </div>
                                  <div class="position-relative form-check btn-custom-fill ps-0">
                                    <input type="radio" class="form-check-input ms-4 round-16" name="payment" id="btnradio5" value="Cash on Delivery" autocomplete="off">
                                    <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100" for="btnradio5">
                                      <div class="text-start ps-2">
                                        <h6 class="fs-4 fw-semibold mb-0">Cash on Delivery</h6>
                                        <p class="mb-0 text-muted">Pay with cash when your order is delivered.</p>
                                      </div>
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <img src="{{url('admin/assets/images/products/payment.svg')}}" alt="matdash-img" class="img-fluid">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="order-summary border rounded p-4 my-4">
                          <div class="p-3 get_order_sum_">
                           
                        </div>
                      </div>
                    </section>
                    <!-- Step 3 -->
                    <h6>Payment</h6>
                    <section class="payment-method text-center">
                      <h5 class="fw-semibold fs-5">Thank you for your purchase!</h5>
                      <h6 class="fw-semibold text-primary mb-7">Your request has now been registered</h6>
                      <img src="{{url('admin/assets/images/products/payment-complete.svg')}}" alt="matdash-img" class="img-fluid mb-4" width="350">
                      <p class="mb-0 fs-2">
                      </p>
                      <div class="d-sm-flex align-items-center justify-content-between my-4">
                        <a href="{{route('shop_page')}}" class="btn btn-success d-block mb-2 mb-sm-0">Continue Shopping</a>
                        <a href="javascript:void(0)" class="btn btn-primary d-block">Download Receipt</a>
                      </div>
                    </section>
                  </form>
                </div>
              </div>
            </div>
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
  <script src="{{url('admin/assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
  <script src="{{url('admin/assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{url('admin/assets/js/forms/form-wizard.js')}}"></script>
  <script src="{{url('admin/assets/js/apps/ecommerce.js')}}"></script>


  <script>


    function submit_order(){
      let data_form = new FormData($("#request_order")[0]);
      let check_input = document.querySelectorAll(".check_input");
      let count_ = 0; 
      for (let i = 0; i < check_input.length; i++) {
        if(check_input[i].value != ""){
          check_input[i].style.cssText = " margin: 10px 0px;    width: 50%; border-color:rgb(51, 63, 85)!important;";
          count_ += 1; 
          if(count_ == check_input.length){
            $.ajax({
              type:"post",
              enctype : "multipart/form-data",
              url: "{{   route('request_order')   }}",
              data: data_form,
              contentType: false,
              cache: false ,
              processData: false,
              success: function (data){
                  console.log(data)
                  if(data.status_code == 200){
                      get_cart_shop();
                      MessageBox("Good Job!", data.msg, "success");
                    }else{
                      MessageBox("Good Job!", data.msg, "error");
                  }
              },
            });
          }else{
            document.getElementById("request_order-t-1").click() ;
          }
        }else{
          MessageBox("Good Job!", "Delivery Info required", "success");
          check_input[i].style.cssText = "    margin: 10px 0px; width: 50%;border-color:red !important;";
        }
      }
    }
    
   function products_check_out (){
        const div = document.getElementById("check_out_products") ; 

        $.ajax({
            type:"post",
            url: "{{   route('product_check_out')   }}",
            data: {
            "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
              div.innerHTML = data ; 
            },
        });

   }

   function get_order_sum (){
      const div = document.querySelectorAll(".get_order_sum_") ; 
      $.ajax({
          type:"post",
          url: "{{   route('get_order_sum')   }}",
          data: {
          "_token" : "{{csrf_token()}}"
          },            
          success: function (data){
            for (let i = 0; i < div.length; i++) {
              div[i].innerHTML = data ; 
            }
          },
      });

   }


   products_check_out(); 
   get_order_sum(); 
  </script>






</body>

</html>