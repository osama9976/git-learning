<?php
session_start();
require_once 'includes_fns.php';
$db = db_connect();

$get_username=trim(strtolower($_GET['username']));
$get_password=trim(strtolower($_GET['password']));
$get_newusername=trim(strtolower($_GET['newusername']));
$get_newpassword=trim(strtolower($_GET['newpassword']));

//$get_username=$_POST['username'];
//$get_username="coma";
//$get_password="sharia1234";

 $query4='SELECT `deptID` FROM `login`
  WHERE `username`="'.$get_username.'"';
	         $stmt = $db->prepare($query4);
		   if($stmt){	   
			 $stmt->bind_result($get_deptID);
			 $stmt->execute();
			 $stmt->store_result();
			 $stmt->fetch();  
           //echo "username".$get_username."//"; echo "pass".$get_password;
	             } else { throw new Exception($db->error); echo"1";}
		
		 $query5='SELECT count(password) FROM `login`
  WHERE `username`="'.$get_username.'" and  password="'.$get_password.'" ';
	         $stmt = $db->prepare($query5);
		   if($stmt){	   
			 $stmt->bind_result($get_password_count);
			 $stmt->execute();
			 $stmt->store_result();
			 $stmt->fetch();  
           //echo "username".$get_username."//"; echo "pass".$get_password_count;
	             } else { throw new Exception($db->error); echo"1";}
		 $insert = 'update table login set username ="'.$get_newusername.'" 
		 password="'.$get_newpassword.'" 
		 where username="'.$get_username.'" and password="'.$get_password.'"';
         $sql = mysql_query ($insert);
			 




	
?>