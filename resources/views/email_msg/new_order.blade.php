
  <!--module-->
  <table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody>
      <tr>
        <td bgcolor="#F4F4F4" align="center">
  
          <!--container-->
          <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody>
              <tr>
                <td bgcolor="#282828" align="center">
  
                  <!--wrapper-->
                  <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                      <tr>
                        <td class="container-padding" align="center">
  
  
                          <!-- content container -->
                          <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                            <tbody>
                              <tr>
                                <td align="center">
  
                                  <!-- content -->
                                  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                    <tbody>
                                      <tr>
                                        <td height="25">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                              <tr>
                                                <td width="80" align="left">
                                                  <img width="80" style="display:block;width:100%;max-width:70px;" alt="img" src="https://seveneg.com/images/logos/white_logo.png">
                                                </td>
                                                <td>&nbsp;</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="25">&nbsp;</td>
                                      </tr>
                                    </tbody>
                                  </table>
  
                                </td>
                              </tr>
                            </tbody>
                          </table>
  
  
                        </td>
                      </tr>
                    </tbody>
                  </table>
  
                </td>
              </tr>
            </tbody>
          </table>
  
        </td>
      </tr>
    </tbody>
  </table>
  <!--module-->
  <table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody>
      <tr>
        <td bgcolor="#F4F4F4" align="center">
  
          <!--container-->
          <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody>
              <tr>
                <td bgcolor="#f6f6f4" align="center">
  
                  <!--wrapper-->
                  <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                      <tr>
                        <td class="container-padding" align="center">
  
  
                          <!-- content container -->
                          <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                            <tbody>
                              <tr>
                                <td align="center">
  
                                  <!-- content -->
                                  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                    <tbody>
                                      <tr>
                                        <td height="40">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="center"><img width="100" style="display:block;width:100%;max-width:100px;" alt="img" src="http://emailmug.com/premium-template/emailpaws/notif/sh.png"></td>
                                      </tr>
                                      <tr>
                                        <td height="20">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="center" style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 30px;color: #282828;">New order</td>
                                      </tr>
                                      <tr>
                                        <td height="18">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="center" style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 24px;color: #282828;">
                                            Good news ! A new order is on the way at a cost 
                                            
                                            @php
                                            $sub_total_  = 0 ; 
                                            $total_ = 0  ; 
                                            @endphp 

                                            @foreach ($carts as $cart)                                          
                                                @php
                                                    $sub_total_ += $cart->product_price * $cart->cart_quantity ; 
                                                    $total_ = ($sub_total_ + $shipping)  ; 
                                                @endphp
                                            @endforeach
                                            {{$total_}} EGP 
                                        </td>
                                      </tr>
  
                                      <tr>
                                        <td height="30">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="center">
  
                                          <!--button-->
                                          <table height="30" border="0" bgcolor="#9c8563" cellpadding="0" cellspacing="0">
                                            <tbody>
                                              <tr>
  
                                                <td align="center" height="40" width="170" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #ffffff;font-weight: 600;letter-spacing: 0.5px;">
  
  
                                                  <a href="{{route('confrim_order_admin', ['order_token' => $order_id])}}" target="_blank" style="color: #ffffff">Confirmation</a>
                                                </td>
  
                                              </tr>
                                            </tbody>
                                          </table>
  
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="18">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="center" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 15px;color: #282828;">Click this button if you are confirmed</td>
                                      </tr>
                                      <tr>
                                        <td height="40">&nbsp;</td>
                                      </tr>
                                    </tbody>
                                  </table>
  
                                </td>
                              </tr>
                            </tbody>
                          </table>
  
  
                        </td>
                      </tr>
                    </tbody>
                  </table>
  
                </td>
              </tr>
            </tbody>
          </table>
  
        </td>
      </tr>
    </tbody>
  </table>
  <!--module-->
  <table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody>
      <tr>
        <td bgcolor="#F4F4F4" align="center">
  
          <!--container-->
          <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody>
              <tr>
                <td bgcolor="#FFFFFF" align="center">
  
                  <!--wrapper-->
                  <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                      <tr>
                        <td class="container-padding" align="center">
  
  
                          <!-- content container -->
                          <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                            <tbody>
                              <tr>
                                <td align="center">
  
                                  <!-- content -->
                                  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                    <tbody>
                                      <tr>
                                        <td height="30">&nbsp;</td>
                                      </tr>
  
  
                                      <tr>
                                        <td align="center">
  
                                          <!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td><![endif]-->
  
                                          <!-- column -->
                                          <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                            <tbody>
                                              <tr>
                                                <td align="center">
                
                                                  <!-- content -->
                                                  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                                    <tbody>
                                                      <tr>
                                                        <td style="line-height: 15px;height: 15px;font-size: 0px;">&nbsp;</td>
                                                      </tr>
                
                
                                                      <tr>
                                                        <td align="center">
                                
                                                          <!-- gap -->
                                                          <table class="row" style="width:50px;max-width:50px;" width="50" cellspacing="0" cellpadding="0" border="0" align="left">
                                                            <tbody>
                                                              <tr>
                                                                <td height="30"></td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                
                                                          <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->
                
                                                          <!-- column -->
                                                          <table class="row" style="width:230px;max-width:230px;" width="230" cellspacing="0" cellpadding="0" border="0" align="right">
                                                            <tbody>
                                                              <tr>
                                                                <td align="center">
                
                                                                  <!-- content -->
                                                                  <table width="230" style="width:230px;max-width:230px;" cellspacing="0" cellpadding="0" border="0" align="center">
                
                                                                    <tbody>
                                                                      <tr>
                                                                        <td height="30">&nbsp;</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;">Shipping Address</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td height="18">&nbsp;</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;line-height: 22px;">
                                                                          {{$order->country}}
                                                                          <br> 
                                                                          {{$order->town}} 
                                                                                    <br>{{$order->address1}} 
                                                                                    <br>{{$order->address2}}
                                                                        </td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td height="30">&nbsp;</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;">{{__("lan.Payment Method")}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td height="18">&nbsp;</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;">
                                                                           {{$order->payment}}</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td height="30">&nbsp;</td>
                                                                      </tr>
                
                
                
                                                                    </tbody>
                                                                  </table>
                
                                                                </td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                
                
                
                
                
                                                          <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td height="30">&nbsp;</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->
  
                                          <!-- gap -->
                                          <table class="row" style="width:50px;max-width:50px;" width="50" cellspacing="0" cellpadding="0" border="0" align="left">
                                            <tbody>
                                              <tr>
                                                <td height="30"></td>
                                              </tr>
                                            </tbody>
                                          </table>
  
                                          <!--[if (gte mso 9)|(IE)]></td><td><![endif]-->
  
  
                                          <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="line-height: 15px;height: 15px;font-size: 0px;">&nbsp;</td>
                                      </tr>
                                    </tbody>
                                  </table>
  
                                </td>
                              </tr>
                            </tbody>
                          </table>
  
  
                        </td>
                      </tr>
                    </tbody>
                  </table>
  
                </td>
              </tr>
            </tbody>
          </table>
  
        </td>
      </tr>
    </tbody>
  </table>
  <!--module-->
  <table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody>
      <tr>
        <td bgcolor="#F4F4F4" align="center">
  
          <!--container-->
          <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody>
              <tr>
                <td bgcolor="#FFFFFF" align="center">
  
                  <!--wrapper-->
                  <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                      <tr>
                        <td class="container-padding" align="center">
  
  
                          <!-- content container -->
                          <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                            <tbody>
                              <tr>
                                <td align="center">
  
                                  <!-- content -->
                                  <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                    <tbody>
                                      <tr>
                                        <td style="line-height: 15px;height: 15px;font-size: 0px;">&nbsp;</td>
                                      </tr>
  
                                      <tr>
                                        <td>
                                          <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                            <tbody>
                                              <tr>
                                                <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;">Items Shipped</td>
                                                <td width="30">&nbsp;</td>
                                                <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;">Items Price</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="line-height: 8px;height: 8px;font-size: 0px;">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td bgcolor="#e7e6e2" style="line-height: 8px;height: 8px;font-size: 0px;">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td height="20">&nbsp;</td>
                                      </tr>




                                        @php
                                        $sub_total  = 0 ; 
                                        $Discount = 0  ; 
                                        $total = 0  ; 
                                        @endphp 

                                        @foreach ($carts as $cart)                                          
                                            {{! $images = explode("_", $cart->images); }}
                                            @php
                                            


                                            $sub_total += $cart->product_price * $cart->cart_quantity ; 
            
                        
                                            if(strpos($cart->discount, "%") !== false){
                                                $discount_number = str_ireplace("%", "", $cart->discount);
                                                $Discount += (($cart->product_price * $cart->cart_quantity) * $discount_number)  / 100 ; 
                                
                                            }elseif($cart->discount >= 1){
                                                $Discount += $cart->discount * $cart->cart_quantity ; 
                                            }else{
                                                $Discount += $cart->discount * $cart->cart_quantity ; 
                                            }
                                            $total = ($sub_total + $shipping)  ; 
                                            @endphp
                                        
                                            <tr>
                                            <td>
                                                <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                                <tbody>
                                                    <tr>
                                                    <td width="130">
                                                        <a href="{{route("product", ['id' => $cart->product_id])}}">
                                                            <img width="130" style="display:block;width:100%;max-width:130px;" alt="img" src="{{url("images/product/$images[0]")}}">
                                                        </a>
                                                    </td>
                                                    <td width="20">&nbsp;</td>
                                                    <td width="250">
                                                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                            <td style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;line-height: 21px;">{{$cart->product_name}}</td>
                                                            </tr>
                                                            <tr>
                                                            <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;">{{__("lan.Quantityproducts")}} : {{$cart->cart_quantity}}</td>
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td align="right" width="60">
                                                        <table border="0" width="60" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                            <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;">{{$cart->product_price}} EGP</td>
                                                            </tr>        
                                                        </tbody>
                                                        </table>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td height="20" style="border-bottom: 1px solid #e0e0e0">&nbsp;</td>
                                            </tr>
                                            <tr>
                                            <td height="20">&nbsp;</td>
                                            </tr>
                                            
                                        
                                        @endforeach






                                     
                                      <tr>
                                        <td height="20">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td bgcolor="#e7e6e2" style="line-height: 8px;height: 8px;font-size: 0px;">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td height="30">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="right">
  
                                            <table border="0" width="280" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 24px;">{{__("lan.Subtotal")}}</td>
                                                    <td>&nbsp;</td>
                                                    <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;">{{$sub_total}} EGP</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 24px;">{{__("lan.Shipping")}}</td>
                                                    <td>&nbsp;</td>
                                                    <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;">{{$shipping}} EGP</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 24px;">{{__("lan.discount")}}</td>
                                                    <td>&nbsp;</td>
                                                    <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;text-decoration: ">-{{$Discount}} EGP</td>
                                                  </tr>
                                                  <tr>
                                                    <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;font-weight: 600;line-height: 24px;">{{__("lan.total")}}</td>
                                                    <td>&nbsp;</td>
                                                    <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;"><strong>{{$total}} EGP</strong></td>
                                                  </tr>
                                                  <tr>
                                                    <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 24px;">&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;text-decoration: ">{{__("lan.you saved")}} <strong>{{$Discount}} EGP</strong></td>
                                                  </tr>
                                                </tbody>
                                            </table>



                                            
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="30">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td bgcolor="#e7e6e2" style="line-height: 8px;height: 8px;font-size: 0px;">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td style="line-height: 15px;height: 15px;font-size: 0px;">&nbsp;</td>
                                      </tr>
                                    </tbody>
                                  </table>
  
                                </td>
                              </tr>
                            </tbody>
                          </table>
  
  
                        </td>
                      </tr>
                    </tbody>
                  </table>
  
                </td>
              </tr>
            </tbody>
          </table>
  
        </td>
      </tr>
    </tbody>
  </table>
  
