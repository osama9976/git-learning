<?php 
 session_start();
include_once 'includes_fns.php';


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:o="urn:schemas-microsoft-com:office:office" __expr-val-dir="rtl" lang="ar-sa" dir="rtl"  
      
      >
<head><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="GENERATOR" content="Microsoft SharePoint" /><meta name="progid" content="SharePoint.WebPartPage.Document" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="google-site-verification" content="D3iDvrZpg6sVLAKpG-bijoQPrV_rKm21B5ZIGP0lhOo" /><meta name="google-site-verification" content="CBYk0JSQoTPTpfh1z40KSjeN93mFnMWcY-krGytD0AU" /><meta http-equiv="Expires" content="0" /><title>
	
جامعة القصيم

</title>
	<script type="text/javascript">
	if (top != self) 
	{
	    top.location.href = self.location.href;
	}
	</script>


<link rel="stylesheet" type="text/css" href="css/controls.css"/>
<link rel="stylesheet" type="text/css" href="css/page-layouts-21.css"/>
<link rel="stylesheet" type="text/css" href="css/rca.css"/>
<link rel="stylesheet" type="text/css" href="css/search.css?rev=YoeYLQqfzVFYQ/ivcfC5gA=="/>
<link rel="stylesheet" type="text/css" href="css/corev4.css?rev=0gesJ60o8209ESdd3vwOuA=="/>
<link rel="stylesheet" type="text/css" href="css/login.css"/>


		

<link rel="shortcut icon" href="qu.ico" type="image/vnd.microsoft.icon" />
	
		<!-- ===== Custom ===== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" /><link rel="stylesheet" type="text/css" href="css/menu.css" />
    
	<script type="text/javascript" src="js/site.js"></script>
</head> 
<body >
<?php My_header() ?>


<div class="clear"></div>

	
	<table class="s4-wpTopTable" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td ></td>
	</tr>
</table>
<!--Slider-->
<div class="clear" ></div>   
<!--Contain-->

			<div id="printable" class="article article-body" style="width:900px; clear:none;">		
				<div class="article-content" clear:none;">
               <div style="padding-right: 30px; padding-left:30px; margin-top:25px; margin-bottom:25px;">
<h1>تسجيل الدخول</h1>
<p>&nbsp;</p>

<br>

    <form  method="post" action="show_registered_students.php">
<table>
   <div id="loginMain"> 
   <tr><td width="168">اسم المستخدم القديم*</td><td width="500"><input class="css-input" type="text" id="username" name="username" onchange="set_majors();"  ></td>
      <td width="363">&nbsp;</td>
</tr>
<tr><td>كلمة المرور القديمة*</td><td><input class="css-input"  type="password" name="password" id="password" onclick="set_majors();"></td>
  <td>&nbsp;</td>


<tr>
  <td colspan="2"><a href="#" onclick="showUpdatePassword();" > تغيير إسم المستخدم وكلمة المرور</a></td>
  </tr>
  
  
<tr><td></td>
<td align="left"></td>
<td align="left"><button   class="btn" value = "مسح الحقول" type="reset">مسح الحقول</button>&nbsp;&nbsp;<input type="submit" value="التالي" class="btn">
</td>
</tr>
    <tr>  <td> </td> <td>
            <?php  
      $faild='تأكد من كلمة المرور او الايميل';
      
             
      $failedlebel="<label  style='color:red;font:12px'> $faild  </lable>";

     if(isset($_SESSION['failed'])){
        echo $failedlebel;
        unset($_SESSION['failed']);
     }
    

    ?>
            
            </td></tr>
</table>
</form>
</div>
                

            
                
				</div>
				</div>


	  <script type="text/javascript">
             
           </script>  
<?php My_footer(); 


?>
</body>

</html>
