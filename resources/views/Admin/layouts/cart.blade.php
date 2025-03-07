    <!--  Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content rounded-1">
                <div class="modal-header border-bottom">
                    <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
                    <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                        <i class="ti ti-x fs-5 ms-3"></i>
                    </a>
                </div>
                <div class="modal-body message-body" data-simplebar="">
                    <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                    <ul class="list mb-0 py-2">
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Modern</span>
                                <span class="text-muted d-block">/dashboards/dashboard1</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Dashboard</span>
                                <span class="text-muted d-block">/dashboards/dashboard2</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Contacts</span>
                                <span class="text-muted d-block">/apps/contacts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Posts</span>
                                <span class="text-muted d-block">/apps/blog/posts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Detail</span>
                                <span class="text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Shop</span>
                                <span class="text-muted d-block">/apps/ecommerce/shop</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Modern</span>
                                <span class="text-muted d-block">/dashboards/dashboard1</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Dashboard</span>
                                <span class="text-muted d-block">/dashboards/dashboard2</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Contacts</span>
                                <span class="text-muted d-block">/apps/contacts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Posts</span>
                                <span class="text-muted d-block">/apps/blog/posts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Detail</span>
                                <span class="text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="javascript:void(0)">
                                <span class="d-block">Shop</span>
                                <span class="text-muted d-block">/apps/ecommerce/shop</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--  Shopping Cart -->
    <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        
    </div>


<script>
    function get_cart_shop (){
     const div = document.getElementById("offcanvasRight") ; 
     $.ajax({
         type:"post",
         url: "{{   route('get_cart_shop')   }}",
         data: {
           "_token" : "{{csrf_token()}}"
         },            
         success: function (data){
           div.innerHTML = data ;
           count_cart_shop(); 
         },
     });
   }


   function count_cart_shop (){
        $.ajax({
            type:"post",
            url: "{{   route('count_cart_shop')   }}",
            data: {
            "_token" : "{{csrf_token()}}"
            },            
            success: function (data){
                document.getElementById("count_cart_shop").innerHTML = data.count ; 
            },
        });

   }

   
   function quantity_product (product_id, ele, page="none"){
        if(ele.value >= 1){
            ele.setAttribute("disabled", '') ; 
            $.ajax({
                type:"post",
                url: "{{   route('quantity_product')   }}",
                data: {
                "_token" : "{{csrf_token()}}",
                "product_id" : product_id,
                'value' : ele.value
                },            
                success: function (data){
                    ele.removeAttribute("disabled", '') ; 
                    if(page === 'none'){
                        get_cart_shop() ; 

                    }else{
                        products_check_out(); 
                        get_order_sum(); 9
                    }
                },
            });
        }else{
            remove_cart(product_id);
        }

   }

   

   function add_product_cart (product_id){
        $.ajax({
            type:"post",
            url: "{{   route('add_product_cart')   }}",
            data: {
              "_token" : "{{csrf_token()}}",
              'product_id' : product_id
            },            
            success: function (data){
              console.log(data);
              if(data.status_code == 200){
                get_cart_shop(); 
                document.getElementById('open_cart').click() ; 
              }
            },
        });
      }

        
    function remove_product (id){
        let conf = confirm("Confrim this action") ;
        if(conf === true){
            $.ajax({
                type:"post",
                url: "{{   route('remove_product')   }}",
                data: {
                "_token" : "{{csrf_token()}}",
                "product_id" : id
                },            
                success: function (data){
                    location.reload();
                },
            });
        }
    }

   function remove_cart (product_id, page = "none"){

        $.ajax({
            type:"post",
            url: "{{   route('remove_cart')   }}",
            data: {
            "_token" : "{{csrf_token()}}",
            "product_id" : product_id
            },            
            success: function (data){
                if(page === "none"){
                    get_cart_shop() ; 
                }else{
                    products_check_out(); 
                    get_order_sum(); 
                }
            },
        });

   }
   get_cart_shop() ; 

</script>