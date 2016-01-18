<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="get_and_post.js"></script>
    <?php
//include_once 'insert2.php';
/**

 * if(isset($_POST['save']))
 * { 
 *  $con=new DataBase();
 *  $con->connect("localhost","root","","comunity_service");
 *  //$con->disconnect()
 *  
 *  
 *  
 * $username = $_POST['username'];
 * $password = $_POST['password'];
 * $type = $_POST['type'];
 * $fields = array('ID','username','password','type');
 * $values = array('',$username, $password, $type);

 *  $con=new DataBase();
 *  $con->insert($fields, $values, 'login',"login.php");
 */
 //$obj->update('database name','table name',array(set username=>Bernard!),array(where ID=3));
 //$obj->update('comunity_service','login',array('username'=>'Bernard!'),array('ID',3));
//$obj->select('comunity_service','login','*','ID="1"','id DESC');
//$obj->delete('comunity_service','login','id=4,id=5');
// $res = $obj->getResult();

//}

// data insert code starts here.


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="395" border="1">
  <tr>
    <td width="56"><form id="form" name="form" method="post" >
      <label for="textfield"></label>
      user
    </td>
    <td width="323"><input type="text" name="username" id="textfield" /></td>
  </tr>
  <tr>
    <td>pass</td>
    <td><input type="text" name="password" id="textfield2" /></td>
  </tr>
  <tr>
    <td>type</td>
    <td>
      <p align="center">
        <label for="radio2"></label>
        <input name="type" type="radio" id="Yes" value="Yes" checked="checked" />
        <label for="Yes">Yes</label>
      </p>
      <p align="center">
        <input type="radio" name="type" id="No" value="No" />
        No</p>
     
    </td>
  </tr>
  
  
</table>
<div class="form_result">..</div>
<button onclick="submitForm('inserted.php','POST','')">jqurey submet</button>  <input type="submit" name="save" id="button" value="Submit" /></form>
</body>
</html>