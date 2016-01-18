<?php
session_start();
require_once 'includes_fns.php';

       $db=  db_connect();
       check_session_registered($_SESSION);      
       echo count($_SESSION['step']);          
       
       if(count($_POST)>7)
       {
        $firstname_ar=$_POST['firstname_ar'];
        $fathername_ar=$_POST['fathername_ar'];
        $grandfathername_ar=$_POST['grandfathername_ar'];
        $familiyname_ar=$_POST['familyname_ar'];
        $firstname_en=$_POST['firstname_en'];
        $fathername_en=$_POST['fathername_en'];
        $grandfathername_en=$_POST['grandfathername_en'];
        $familiyname_en=$_POST['familyname_en'];       
         
        $query="update student2 set  name=? ,fathername=?,  grandfathername=?"
                . ",familyname=?,  nameEN=?,fathernameEN=?,  grandfathernameEN=? "
                 . ",familynameEN=? "                  
                 . " WHERE studentID=?";
        
        if($stmt=$db->prepare($query)){
            $stmt->bind_param('ssssssssi', $firstname_ar,$fathername_ar,
            $grandfathername_ar, $familiyname_ar, $firstname_en, $fathername_en,
            $grandfathername_en, $familiyname_en,$_SESSION['registered']);
            $stmt->execute();
            $stmt->close();
        }
        else {  throw new Exception($db->error);  }
         
        if(!in_array(3, $_SESSION['step']))
            $_SESSION['step'][] = 3;

       }
       
       checkStep(3);
     
     $query='Select nationalityindex,nationalid,passport,birthday,phone,phoneindex,'
      .'mobile,gender from student2 where StudentID=?';
      $stmt = $db->prepare($query);
    if($stmt){      
      $stmt->bind_param("i",$_SESSION['registered']);
      $stmt->bind_result($nationalityindex,$nationalid,$passport,$birthday,$phone,$phoneindex,
      $mobile,$gender);
      $stmt->execute();
      $stmt->store_result();
      $row = $stmt->fetch();
      $db->close();
    } else {throw new Exception($db->error);};


    
    
       
      $isSaudi=$nationalityindex == 1;
       
       $checked="checked=";
    
       
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:o="urn:schemas-microsoft-com:office:office" __expr-val-dir="rtl" lang="ar-sa" dir="rtl"  style="height:100%">
    <head><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="GENERATOR" content="Microsoft SharePoint" /><meta name="progid" content="SharePoint.WebPartPage.Document" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="google-site-verification" content="D3iDvrZpg6sVLAKpG-bijoQPrV_rKm21B5ZIGP0lhOo" /><meta name="google-site-verification" content="CBYk0JSQoTPTpfh1z40KSjeN93mFnMWcY-krGytD0AU" /><meta http-equiv="Expires" content="0" /><title>

            أدلة الجامعة

        </title>
        <script type="text/javascript">
            if (top != self)
            {
                top.location.href = self.location.href;
            }
            

        </script>
        
        <script src="js/jquery-1.7.1.min.js"></script>

<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
        <link rel="stylesheet" type="text/css" href="css/controls.css"/>
        <link rel="stylesheet" type="text/css" href="css/page-layouts-21.css"/>
        <link rel="stylesheet" type="text/css" href="css/rca.css"/>
        <link rel="stylesheet" type="text/css" href="css/search.css?rev=YoeYLQqfzVFYQ/ivcfC5gA=="/>
        <link rel="stylesheet" type="text/css" href="css/corev4.css?rev=0gesJ60o8209ESdd3vwOuA=="/>
        <link rel="stylesheet" type="text/css" href="css/login.css"/>
   

        <meta name="keywords" content=''/>
        <meta name="Description" content='أدلة الجامعة
              الدليل التعليمي الكامل 
              دليل الاستاذ 
              دليل الطالب 
              الهيكل التنظيمي 
              الخطة الاستراتيجية '/>
        <meta name="fbDescription" content='أدلة الجامعة
              الدليل التعليمي الكامل 
              دليل الاستاذ 
              دليل الطالب 
              الهيكل التنظيمي 
              الخطة الاستراتيجية '/>
        <meta name="fbTitle" content='أدلة الجامعة'/>

        <link rel="shortcut icon" href="qu.ico" type="image/vnd.microsoft.icon" />

        <!-- ===== Custom ===== -->
        <link rel="stylesheet" type="text/css" href="css/style.css" /><link rel="stylesheet" type="text/css" href="css/menu.css" />

        <script type="text/javascript" src="js/site.js"></script>
        <!-- === End Custom ==== -->
        </head> 
    <body style="height:100%">

<?php My_header(); ?>

<div align="center">
<BUTTON class="btn1"> الخطوة الأولى</BUTTON>
<BUTTON class="btn1"> الخطوة الثانية</BUTTON>
<BUTTON class="btn2"> الخطوة الثالثة</BUTTON>
<BUTTON class="btn2"> الخطوة الرابعة</BUTTON>
<BUTTON class="btn2"> الخطوة الخامسة</BUTTON>
<BUTTON class="btn2"> الخطوة السادسة</BUTTON>
<BUTTON class="btn2"> الخطوة السابعة</BUTTON>

</div>

        <div class="clear"></div>


        <table class="s4-wpTopTable" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td ></td>
            </tr>
        </table>
        <!--Slider-->
        <div class="clear" ></div>   
        <!--Contain-->

        <div id="printable" class="article article-body" style="width:950px; height:60% !important ;clear:none;">		
            <div class="article-content"  style="height:60%;clear:none;">
                <div style="padding-right: 30px; padding-left:30px; margin-top:25px; margin-bottom:25px;">

                    <h1>بيانات الطالب/ة الأساسية</h1>
                    <form method="post" action="addmision04.php" id="nationality" >
                        <table>
                                                           <tr><td >الجنسية*</td><td colspan="2">

                                        <select id="ddlViewBy" onchange="changeTest()" name = "nationality" required class="css-input"> 
                                          <?php 
                                            echo getContries($nationalityindex);
                                          ?>
                                        </select>


                                    </td><td></td></tr>

                                <tr><td>
        <div <?php if(!$isSaudi) echo 'hidden'  ?> class="nationalid"  >السجل المدني *</div></td><td colspan="3">
            <input  <?php if(!$isSaudi) echo 'hidden'  ?>   name="nationalid" value="<?php echo $nationalid; ?>"  id="nationalid" class="css-input nationalid"   > 
                <label hidden  id="nat_error"  style="color:red;"> يجب أن يبدأ السجل المدني بالرقم 1 وأن  يتكون من عشر خانات </label></td></tr>

                          <tr>
                                  <td><div  align="right"  >تاريخ الميلاد</div></td>
                                  <td><input  id="brithday" type="text" value="<?php //echo $birthday;?>" name="birthday"  required   ></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                          </tr>
                          <tr><td><div  class="passport" <?php if($isSaudi) echo 'hidden'  ?> >رقم الجواز او الإقامة لغير السعوديين</div></td><td>
        <input  <?php if($isSaudi) echo 'hidden'  ?> value="<?php echo $passport;?>"  name="passport"  type="text" class=" passport css-input" ></td>
<td></td><td>

</td></tr>

                                <tr><td>الهاتف</td><td>
                                     <input value="<?php echo $phone;?>" name="phone"  class="css-input"></td><td>
                                         <select name = "key" class="css-input" >
                                      <?php echo getPhoneIndex($phoneindex); ?></select></td><td></td></tr>

                                <tr><td>جوال*</td><td><input value="<?php echo $mobile;?>" id="mobile" name="mobile" required="required" class="css-input" 
                                                             ><label   id="phone_error" hidden style="color: red; font: 12px">   يجب أن يبأ الجوال ب00 وأن يتكون من أكثر من عشر خانات</label>  </td><td colspan="2" style="color:red;">&nbsp;&nbsp;يجب ان يكون الرقم بالصيغة الدولية , مثال : السعودية 009665xxxxxxxx*</td></tr>

                                <tr><td>الجنس*</td><td>
                                           <input value="1" <?php  if($gender) echo $checked.'checked';?> name="sex" type="radio" required="required" class="css-input" >ذكر
                                            <input name="sex" <?php  if(!$gender) echo $checked.'checked';?>  type="radio" class="css-input" value="0" >انثى</td><td></td><td></td></tr>
                                                <tr><td> <input type="button"  onclick="location.href='addmision02.php';"  class="btn" value = "رجوع" ></td><td></td><td></td><td><button type = "reset" class="btn" value = "">مسح الحقول</button>&nbsp;&nbsp;<button type = "submit" class="btn" value = "">التالي</button></td></tr>
                                                </table>
                      
                                                </form>
              </div>              
                                                </div>
                                                </div>
        <p>Date: <input type="text" id="datepicker"></p>


<script type="text/javascript">
      $(function() {
    $( "#datepicker" ).datepicker();
  });
$(function() {
    $( "#brithday" ).datepicker();
  });
  
$('#nationality').validate({
    ignore:":not(:visible)",
    onkeyup: false,
  rules: {
     nationalid:{required:true},
     passport: { required:true},
     birthday: { required:true},
     mobile:{required:true}
  },
  messages: {
       nationalid:{required: "هذا الحق مطلوب"} ,
       passport:{required: "هذا الحق مطلوب"},
       birthday:{required: "هذا الحق مطلوب"},
       mobile:{required: "هذا الحق مطلوب"}

  }
});

 

$("#ddlViewBy").change(function() {
   var val= $("#ddlViewBy").val();
     if(val==1){
       $(".nationalid").show();
         $(".passport").hide();
        
     }
     else
     {
         $(".nationalid").hide();
         $(".passport").show();
         
         

     }
});

$( "#nationality" ).submit(function( event ) {
  var natinoalid=document.getElementById("nationalid").value;
 
   var val=1;
  for (i = 0; i < natinoalid.length; i++) {
      if(!$.isNumeric(natinoalid[i]))
          val=0;
  }

  if((natinoalid.length!=10 || natinoalid[0]!='1' || !val )&& $("#nationalid").css('display') == 'inline-block'){
      $("#nat_error").show();
      event.preventDefault();
  }
  else{
      $("#nat_error").hide();
  }
 
  
    var mobile=document.getElementById("mobile").value;
    
  var val=1;
  for (i = 0; i < mobile.length; i++) {
      if(!$.isNumeric(mobile[i]))
          val=0;
  }
    
     if(mobile.length<=10 || mobile[0]!='0' & mobile[1]!='0' || !val){
      $("#phone_error").show();
      event.preventDefault();
  }
  else{
      $("#phone_error").hide();
  }

  });
  
});

//$.each(('#printable').html().match(\/*\g), function(){
//    $(this).css('color', 'red');
//});
</script>

                                             







<?php My_footer(); ?>
                                                </body> 
                                                </html>
