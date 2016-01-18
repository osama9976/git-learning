<?php
//define('DB_SERVER','localhost');
//define('DB_USER','root');
//define('DB_PASS' ,'');
//define('DB_NAME', 'comunity service');
 

 //$table_name="login";
 
class DB_con
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  mysql_select_db(DB_NAME, $conn);
 }
 
 public function insert($username,$password,$type)
 {
  $res = mysql_query("INSERT into login
  VALUES('','$username','$password','$type')");
 // echo $res;
  
  return $res;
 }
}

//$calcu_obj=new DB_con();
//$calcu_obj->insert($username,$password,$type);

?>