<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0050)http://eservice.qu.edu.sa/coursedcs/MyCourses.aspx -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
lang="ar" xmlns="http://www.w3.org/1999/xhtml"><HEAD><META content="IE=11.0000" 
http-equiv="X-UA-Compatible">

<META http-equiv="X-UA-Compatible" content="IE=edge">
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<META name="viewport" content="width=device-width, initial-scale=1">
<TITLE>عمادة خدمة المجتمع </TITLE>
<LINK href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<LINK href="css/Style.css" rel="stylesheet" type="text/css">
<LINK href="css/style2.css" rel="stylesheet" type="text/css">
<LINK href="css/bootstrap-rtl.css" rel="stylesheet" type="text/css">
<LINK href="css/mainstyle.css" rel="stylesheet" type="text/css"> 
    
<SCRIPT src="js/jquery-1.7.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="js/bootstrap.js" type="text/javascript"></SCRIPT>
     
<META name="GENERATOR" content="MSHTML 11.00.9600.18098"></HEAD> 
<BODY style="direction: rtl;">
<SCRIPT type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</SCRIPT>
 
<SCRIPT src="js/WebResource.js" type="text/javascript"></SCRIPT>
<SCRIPT src="js/WebResource(1).js" type="text/javascript"></SCRIPT>
<SCRIPT type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</SCRIPT>
 
<HEADER>
<DIV class="container">
<DIV class="row">
<DIV class="col-md-12">
<DIV class="col-lgoin login"><A class="login2" id="userloginbtn" href="http://eservice.qu.edu.sa/coursedcs/Login.aspx?ReturnUrl=/coursedcs/mycourses.aspx">تسجيل 
الدخول</A>                                                                       
            | <A class="login2" id="userNewbtn" href="http://eservice.qu.edu.sa/coursedcs/NewUser.aspx">مستخدم 
جديد</A>                         
<DIV class="userlogin hide" id="ctl00_Panel1" onKeyPress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_lnkLogin')">
<DIV class="arrow"></DIV>
<CENTER>
<TABLE class="log" id="LoginUser" style="border-collapse: collapse;" 
cellspacing="0" cellpadding="0">
  <TBODY>
  <TR>
    <TD>
      <DIV class="accountInfo">
      <P><SPAN class="failureNotification"></SPAN>                               
                            </P>
      <P><LABEL id="ctl00_UserNameLabel" for="ctl00_UserName">اسم 
      الدخول:</LABEL>                                                         
<INPUT name="ctl00$UserName" class="textEntry" id="ctl00_UserName" style="width: 100px;" type="text"> 
                                                              <SPAN title="اسم الدخول مطلوب." 
      class="Validator failureNotification" id="ctl00_UserNameRequired" style="visibility: hidden;">*</SPAN> 
                                                          </P>
      <P><LABEL id="ctl00_PasswordLabel" for="ctl00_Password">كلمة 
      المرور:</LABEL>                                                         
<INPUT name="ctl00$Password" class="passwordEntry" id="ctl00_Password" style="width: 100px;" type="password"> 
                                                              <SPAN title="كلمة المرور مطلوبة." 
      class="Validator failureNotification" id="ctl00_PasswordRequired" style="visibility: hidden;">*</SPAN> 
                                                          </P></DIV>
      <P class="submitButton"><A class="btn btn-default" id="ctl00_lnkLogin" 
      href='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$lnkLogin", "", true, "userlogin", "", false, true))'>دخول</A> 
                                                          <A class="btn btn-default" 
      id="loginCancel" href="http://eservice.qu.edu.sa/coursedcs/MyCourses.aspx#">إلغاء</A> 
                                                      
</P></TD></TR></TBODY></TABLE></CENTER></DIV></DIV>
<DIV class="logo ">
<DIV class="col-sm-4  hidden-xs">
<DIV><IMG id="ctl00_Image1" 
src="img/logo.png"></DIV></DIV>
<DIV class="col-sm-4">
<DIV class="text-center">
<P style="margin-bottom: 6px;">عمادة خدمة المجتمع</P>
<P style="font-size: 18px; margin-bottom: 0px;">                                 
   دورات العمادة</P></DIV></DIV>
<DIV class="col-sm-4  hidden-xs">
<DIV class="pull-left"><IMG id="ctl00_Image2" src="img/logo2.png"></DIV></DIV></DIV></DIV></DIV><!--class="row" --> 
        </DIV></HEADER>
<DIV class="container">
<DIV class="header wel1l">
<DIV class="row">
<br /><br /><br />
</DIV>
<DIV class="clearfix"></DIV><!-- End col-lg-8 -->             <!-- End col-lg-4 --> 
    </DIV>
<DIV class="clearfix"></DIV>
<DIV class="content ">
<SCRIPT>
        $(function () {
            $("body").delegate(".show-more", "click", function (event) {
                event.preventDefault();
                if ($(this).parent().parent().prev('.details').is(":visible")) {
                    $(this).parent().parent().prev('.details').slideUp();
                    return;
                }

                $('.details').not($(this).parent().parent().prev('.details')).slideUp();
                $(this).parent().parent().prev('.details').slideDown();
            });


            if ($('.custom-width tr:first-child td').length == 1) {
                $('.custom-width tr:first-child').append("<td></td><td></td><td></td>");
            }
            if ($('.custom-width tr:first-child td').length == 2) {
                $('.custom-width tr:first-child').append("<td></td><td></td>");
            }
            if ($('.custom-width tr:first-child td').length == 3) {
                $('.custom-width tr:first-child').append("<td></td>");
            }
        });
    </SCRIPT>
<!-- Start Body -->
                                         <div class='col-md-3 col-sm-6 notavaliable'>
                                    <div class="custom-item">  

											
<?php
$sql = "SELECT * FROM test";
$result = $db->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
											
											
											
						echo "<ul class='ul-panel'>
 
                                <li><h3>". $row['course_name']."</h3><h5></h5></li>
								<li><p><i class='fa fa-calendar'></i>بداية الدورة : ".$row['start_date']."</p></li>
								<li><p><i class='fa fa-clock-o'></i>مدة الدورة : ".$row['how_long']."</p></li>
								<li><p><i class='fa  fa-user'></i>عدد المسجلين : ".$row['at_least']."</p></li>
								<li style='height: 55px; overflow: hidden'><p><i class='fa fa-location-arrow'></i>".$row['pleace']."</p</li>
								<li><a href='#' class='btn btn-default' data-toggle='modal' data-target='#myModal382'>التفاصيل</a></li>
											</ul>										
                                            <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </div>
                                </div>";}}
?>
<!-- End Body -->
</DIV>
<!-- End main-containt -->     </DIV><!-- End container -->     
<FOOTER>
<DIV class="container">
<DIV class="fot-content">
<DIV class="col-md-3 col-md-offset-9">
<P>© جميع الحقوق محفوظة لجامعة القصيم 2015</P></DIV></DIV></DIV></FOOTER>
<SCRIPT type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_UserNameRequired"), document.getElementById("ctl00_PasswordRequired"));
//]]>
</SCRIPT>
 
<SCRIPT type="text/javascript">
//<![CDATA[
var ctl00_UserNameRequired = document.all ? document.all["ctl00_UserNameRequired"] : document.getElementById("ctl00_UserNameRequired");
ctl00_UserNameRequired.controltovalidate = "ctl00_UserName";
ctl00_UserNameRequired.errormessage = "اسم الدخول مطلوب.";
ctl00_UserNameRequired.validationGroup = "userlogin";
ctl00_UserNameRequired.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_UserNameRequired.initialvalue = "";
var ctl00_PasswordRequired = document.all ? document.all["ctl00_PasswordRequired"] : document.getElementById("ctl00_PasswordRequired");
ctl00_PasswordRequired.controltovalidate = "ctl00_Password";
ctl00_PasswordRequired.errormessage = "كلمة المرور مطلوبة.";
ctl00_PasswordRequired.validationGroup = "userlogin";
ctl00_PasswordRequired.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_PasswordRequired.initialvalue = "";
//]]>
</SCRIPT>
 
<SCRIPT type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        
theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
//]]>
</SCRIPT>
<SCRIPT language="javascript" type="text/javascript">
        function popCenter() {
            var center = function () {
                var T = $(window).height() / 2 - $('.popup').height() / 2 + $(window).scrollTop(),
                L = $(window).width() / 2 - $('.popup').width() / 2;
                $('.popup').css({
                    top: T,
                    left: L
                });
            };
            $(window).scroll(center);
            $(window).resize(center);
            center();

        }

        $(function () {
            $('.show-add').click(function () {
                $('.insert .modal').modal();
            });

            $('.edit .modal').on('hidden.bs.modal', function (e) {
                $('.edit .modal .cancel').click();
            });

            $('.insert .reset').click(function () { $('.insert .modal').modal('hide') });

            //loing
            //            $("#userloginbtn,#loginCancel").click(function (event) {
            //                event.preventDefault();
            //                $('.userlogin').toggleClass('hide');
            //            });

        });

        $(document).ready(function () {
            var str = location.href.toLowerCase();
            $(".header li a").each(function () {
                if (str.indexOf(this.href.toLowerCase()) > -1) {
                    $("li.selected").removeClass("selected");
                    $(this).closest('li').addClass("selected");
                }
            });
            if ($(".header li.selected").length < 1)
                $(".header li:first-child").addClass("selected");
        });


    </SCRIPT>
     

 </BODY></HTML>