<?php
require_once 'db\database_jobs.php';
//onClick="submitForm('inserted.php','POST','')"
//$con->select("ID","collage");

// select($DB_name,$table, $rows , $where = null, $order = null)
 
//mysql_query($con->connect(),$sql);
//$result=$con->query("select * from collage");
//echo$resulr;


?>


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
<style>
	#selectedFiles img {
		max-width: 125px;
		max-height: 125px;
		float: left;
		margin-bottom:10px;
	}
</style>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="get_and_post.js"></script>

<SCRIPT src="js/jquery-1.7.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="js/bootstrap.js" type="text/javascript"></SCRIPT>
     
<META name="GENERATOR" content="MSHTML 11.00.9600.18098"></HEAD> 
<BODY style="direction: rtl;">
 
</DIV>
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
<form id="form" name="form" method="post" enctype="multipart/form-data">

<h3>معلومات توثيق الدورة :</h3>

<div align="center">
<div id="output"></div>
<table width="500" align="center">
<tr> <td> <input type="text" name="course_or_event" value="1" id="course_or_event" hidden /> </td></tr>
<tr>
<td width="250">اسم الدورة :</td>
<td width="250"><input class="css-input" type="text" size="20" name="course_name" id="course_name" /></td>
</tr>
<tr>
<td width="250">رقم الدورة :</td>
<td width="250"><input class="css-input" type="text" size="20" name="course_id" id="course_id" /></td>
</tr>
<tr>
<td width="250">مقر الدورة :</td>
<td width="250"><input class="css-input" type="text" size="20" name="pleace" id="pleace" /></td>
</tr>
<tr>
<td width="250">الكلية :</td>
<td width="250"><select id="collage" name="collage"  class="css-input">
<?php 
	$con=new DataBase();//creating opject
	$con->connect();
	$sql = "SELECT * FROM collage";
	$result = mysql_query($sql);
echo $result;  
while($row = mysql_fetch_array($result)) {
echo"<option value=".$row{'ID'}.">" . $row{'name'} . "</option><br>";
}$con->disconnect();  
?>
</select></td>
</tr>
<tr>
<td width="250">القسم :</td>
<td width="250"><input class="css-input" type="text" size="20" name="dept" id="dept" /></td>
</tr>
<tr>
<td width="250">حالة الدورة :</td>
<td width="250">منتهيه</td>
</tr>
<tr>
<td>سعر الدورة :</td>
<td><input class="css-input" type="text" size="20" name="price" id="price" /></td>
</tr>
<tr>
<td>نوع الملتحقين :</td>
<td><input class="css-input" type="text" size="20" name="type" id="type" /></td>
</tr>
<tr>
<td>الفئات المستهدفه :</td>
<td><input class="css-input" type="text" size="20" name="target" id="target" /></td>
</tr>
<tr>
<td>مدة الدورة (يوم) :</td>
<td><input class="css-input" type="text" size="20" name="how_long" id="how_long" /></td>
</tr>
<tr>
<td>العدد المطلوب لبداية الدورة :</td>
<td><input class="css-input" type="text" size="20" name="at_least" id="at_least" /></td>
</tr>
<tr>
<td>تاريخ بداية التسجيل :</td>
<td><input class="css-input" type="date" size="20" name="start_date" id="start_date" /></td>
</tr>
<tr>
<td>الطاقة الاستيعابية :</td>
<td><input class="css-input" type="text" size="20" name="at_most" id="at_most" /></td>
</tr>
<tr>
<td>وقت الدوام (من الساعة) :</td>
<td><input class="css-input" type="text" size="20" name="start_time" id="start_time" /></td>
</tr><tr>
<td>وقت الدوام (إلى الساعة) :</td>
<td><input class="css-input" type="text" size="20" name="end_time" id="end_time" /></td>
</tr>
<tr>
<td>مجال الدورة :</td>
<td><input class="css-input" type="text" size="20" name="course_about" id="course_about" /></td>
</tr>
<tr>
<td>لغة الدورة :</td>
<td><input class="css-input" type="text" size="20" name="language" id="language" /></td>
</tr>
<tr>
<td>الأهداف :</td>
<td><textarea class="css-input" cols="19" rows="6" name="goals" id="goals"></textarea></td>
</tr>
<tr>
<td>الوصف :</td>
<td><textarea class="css-input" cols="19" rows="6" name="description" id="description"></textarea></td>
</tr>
<tr>
<td>ملاحظات :</td>
<td><textarea class="css-input" cols="19" rows="6" name="notes" id="notes"></textarea></td>
</tr>
<tr>
<td>تحميل الصور :</td>
<td><input class="css-input" type="file" size="20" value="" name="upload[]" id="files" accept="image/*" onchange="loadFile(event)" ></td>
</tr>
 <tr><td></td><td><div id = "FileUploadContainer"> </div></td></tr>

    <tr><td></td><td>  <input class="btn" id="Button1" type="button" value="إضافة صوره" accept="image/*"  onclick = "AddFileUpload()" /></td></tr>

<img id="output1"/>
<script>
  </script>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><div align="left"><button class="btn" type="button" name="submet" onClick="submitForm('inserted.php','POST','');" >&nbsp;&nbsp;حفظ&nbsp;&nbsp;</button> 
</div></td></tr>
</table>
</div>
</form> 
<script type = "text/javascript">
var counter = 0;
function AddFileUpload()
{
     var div = document.createElement('DIV');
     div.innerHTML = '<input class="css-input" id="files' + counter + '"  name="upload[]"  type="file" /><br>' ;
     document.getElementById("FileUploadContainer").appendChild(div);
    
	  counter++;
	 var loadFile = function(event) {
    var output = document.getElementById('output1');
    output.src = URL.createObjectURL(event.target.upload[1]);
  };

}

</script>


  <input type="file" accept="image/*" onchange="loadFile(event)">
<img id="output2"/>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output2');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
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
     
<STYLE>
        .logo
        {
            clear: both;
        }
        header .container
        {
            border: none;
        }
    </STYLE>
 </BODY></HTML>
