<?php
if(isset($_POST['user_name'])){
	 $user_name =$_POST['user_name'];
	 $password=$_POST['password'];
	 echo $user_name;
	  $query = "SELECT * FROM  login  WHERE user_name ='".$user_name."' AND password ='".$password."'";

    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());

    $count = mysql_num_rows($result);


	//$sql=("SELECT COUNT('id') as counter  FROM login  WHERE user_name ='".$user_name."' AND password ='".$password."' ");
//$result=mysql_query($sql);
//$row=fetch_object($result);
//$row_cnt=$result->num_rows;

//echo $row_cnt; 
 if($count==1){
	$_SESSION['loggedIn']=1;
 }else{$_SESSION['loggedIn']=0;}

echo $_SESSION['loggedIn']."ksdhkfj";
}
echo 'asdasas';

?>