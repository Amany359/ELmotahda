<!DOCTYPE html>

<html lang="ar" dir="rtl">

<body>
    




    <table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody>
           <tr>
              <td bgcolor="#F4F4F4" align="center">
                 
                 <!--container-->
                 <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody>
                       <tr>
                          <td bgcolor="#ffffff" style="    direction: rtl;" align="center">
                             
                             <!--wrapper-->
                             <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                   <tr>
                                      <td class="container-padding" align="center">
                                         
                                         
                                         
                                         <!-- content container -->
                                         <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row"
                                            style="width:540px;max-width:540px;">
                                            <tbody>
                                               <tr>
                                                  <td align="center">
                                                     
                                                     <!-- content -->
                                                     <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center"
                                                        style="width:100%; max-width:100%;">
                                                        <tbody>
                                                           <tr>
                                                              <td height="40">&nbsp;</td>
                                                           </tr>
                                                           <tr>
                                                              <td>
                                                                 
                                                                 <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                                                    <tbody>
                                                                       <tr style="display: flex; justify-content: space-between;">
                                                                          <td width="100" align="left">
                                                                             <img align="left" width="150" style="display:block;width:100%;max-width:100px;"
                                                                                alt="img" src="{{url("images/logos/blue_logo.png")}}">
                                                                          </td>
                                                                          <td width="30">&nbsp;</td>
                                                                          <td align="right"
                                                                             style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;">
                                                                             الإدارة الهندسية</td>
                                                                       </tr>
                                                                    </tbody>
                                                                 </table>
                                                                 
                                                              </td>
                                                           </tr>
                                                           <tr>
                                                              <td height="40">&nbsp;</td>
                                                           </tr>
                                                           <tr>
                                                              <td align="center"><img width="100" style="display:block;width:100%;max-width:100px;" alt="img"
                                                                    src="http://emailmug.com/premium-template/emailpaws/notif/notif_label.png"></td>
                                                           </tr>
                                                           <tr>
                                                              <td height="20">&nbsp;</td>
                                                           </tr>
                                                           <tr>
                                                              <td align="center"
                                                                style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 30px;color: #282828;">
                                                                طلب عرض سعر جديد
                                                            </td>
                                                           </tr>
                                                           
                                                           <tr>
                                                              <td height="18">&nbsp;</td>
                                                           </tr>
                                                           <tr>
                                                              <td
                                                                 style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 22px;">
                                                                 الرسالة : 
                                                                </td>
                                                                <td>
                                                                    {{$message2}}
                                                                </td>
                                                           </tr>
                                                           <tr>
                                                              <td height="20">&nbsp;</td>
                                                           </tr>
                                                           
                                                           <tr>
                                                              <td align="center">
                                                                 
                                                                 <!--button-->
                                                                 <table height="30" border="0" bgcolor="#282828" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                       <tr>
                                                                          
                                                                          <td align="center" height="50" width="220"
                                                                             style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #ffffff;font-weight: 600;letter-spacing: 0.5px;">
                                                                             
                                                                             
                                                                                <a href="{{url("images/projects_file/$file")}}" target="_blank" style="color: #ffffff">
                                                                                    عرض الملف
                                                                                </a>
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
                                                              <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;">
                                                                 
                                                                 <strong>جميع البيانات</strong> <br>
                                                                 <ol style="line-height: 25px;">
                                                                    <li>أسم الشركة : {{$company}}</li>
                                                                    <li>
                                                                        رقم الهاتف : {{$phone}}
                                                                    </li>
                                                                    <li>
                                                                        البريد الالكتروني : {{$email}}
                                                                    </li>
                                                                    <li>
                                                                        الموقع : {{$location}}
                                                                    </li>
                                                                    <li>
                                                                        @if($project == '1')
                                                                        نوع المشروع : الفندق
                                                                        @elseif($project == '2')
                                                                        نوع المشروع : مطاعم
                                                                        @elseif($project == '3')
                                                                        نوع المشروع : مبني اداري
                                                                        @elseif($project == '5')
                                                                        نوع المشروع : وحدة سكنية
                                                                        @elseif($project == '6')
                                                                        نوع المشروع : كمبوند
                                                                        @elseif($project == '7')
                                                                        نوع المشروع : مول
                                                                        @elseif($project == '8')
                                                                        نوع المشروع : صيدلية
                                                                        @endif
                                                                    </li>
                                                                 </ol>
                                                                 
                                                              </td>
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


    
</body>
</html>