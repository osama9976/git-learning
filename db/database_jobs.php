<?php

  //this class for all database needs such as connect, disconnect, insert, update, delete,and select
  // for now just the connect, disconnect, insert are working 
class DataBase {
    public $connection;
    private $hostName;
    private $userName;
    private $pasWord;
    private $db; 
    private $link; 
    public $osama=0;
	
    //this method for making the conncetion with database
	public function connect()
     {
        $this->hostName= "localhost";
        $this->userName = "root";
        $this->password ="";
        $this->db_name   = "courses_documentation";
      //  echo $this->db_name;
        $conn = mysql_connect($this->hostName, $this->userName,$this->password) or die('localhost connection problem'.mysql_error());
         mysql_select_db($this->db_name,$conn);//echo'connected..!';
    }//end of method connection
	
	 //this method for inserting data in to the database
     public function insert($fields, $data, $table) 
     {
        try 
        {
            $queryFields = implode(",",$fields);
            $queryValues = implode('","',$data);
            $insert = 'INSERT INTO '.$table.'('.$queryFields.') VALUES ("'.$queryValues.'")';
            $sql = mysql_query ($insert);
       // echo $insert."<br />";
          
      
            return $sql;             
        } catch (Exception $ex) 
        {
            echo "Some Exception Occured " . $ex;
        }
        
        $staus="inserted..1";
		 $con->disconnect();
      return  $staus;
    }//end of method insert
    
    
     
        
    
   //this method for make sure of is the table Exists in the Database or NOT
 
public function tableExists($DB_name,$table)
    {
        $check_table='SHOW TABLES FROM '.$DB_name.' LIKE "'.$table.'"';
        //echo $check_table;
        $tablesInDb = @mysqli_query($check_table);
	//	echo   $tablesInDb;
 //echo $tablesInDb."sd";   
        if($tablesInDb)
        {//echo"asdasd";
            if(mysql_num_rows($tablesInDb)==1)
            {
                return true; 
            }
            else
            { 
                return false; 
            }
        }
    }//end of table check method 
    
	
	         
    
	
	
	
    //this method for disconnect 
	public function disconnect()
	{
    if($this->db_name)
    {
        if(@mysql_close())
        {//echo'closed';
                       $this->db_name = false; 
            return true; 
        }
        else
        {
            return false; 
        }
    }
}//end of method disconnect

}//end of the database class



$con=new DataBase();//creating opject
 $con->connect();//call connect(host name,username,password,database name)method by $con object
 //$con->disconnect()
 
 //here we recive all the POST from the form and save them in variables 
 //then we put all these variables in values  array()
 if(isset($_POST['pleace']))
 {
	$course_or_event=$_POST['course_or_event'];
	$course_name =$_POST['course_name'];
	$course_id =$_POST['course_id'];
	$pleace = $_POST['pleace'];
	$collage = $_POST['collage'];
	$dept = $_POST['dept'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$target = $_POST['target'];
	$how_long =$_POST['how_long'];
	$at_least = $_POST['at_least'];
	$start_date =  $_POST['start_date'];
	$at_most =  $_POST['at_most'];
	$start_time = $_POST['start_time'];
	$end_time =  $_POST['end_time'];
	$course_about =  $_POST['course_about'];
	$language = $_POST['language'];
	$goals = $_POST['goals'];
	$description =  $_POST['description'];
	$notes = $_POST['notes'];
	mkdir("images/". $_POST['course_id'] ."/");
	
	$fields = array('c_id','course_or_event','c_name','c_num','c_location','c_collage_index','c_dept'
	,'c_price','c_gender','c_target_group','c_duration','c_req_num','c_reg_time','c_max_num',
	'c_time_from','c_time_to','c_major','c_languate','c_goals','c_doc_desc','c_notes');//here we write the attribute or fields which is in the table insid the 		 database
	
	$values = array('',$course_or_event,$course_name, $course_id, $pleace,$collage,$dept,$price,$type,$target,$how_long,$at_least,$start_date,$at_most,$start_time,$end_time,$course_about,$language,$goals,$description,$notes);//put all  variables in values  array()
	
	$con->insert($fields, $values, 'documentation');//call insert(all fields or attribute , value array,table name)
	$sql = "SELECT c_id FROM documentation where c_num='".$course_id."' ";
	$result = mysql_query($sql);
	 
		while($row = mysql_fetch_array($result)) 
		{$get_decument_id=$row{'c_id'};}
	
	for($i=0; $i<count($_FILES['upload']['name']); $i++) 
	{
	  //Get the temp file path
	  	$tmpFilePath = $_FILES['upload']['tmp_name'][$i];
	  //Make sure we have a filepath
	if ($tmpFilePath != "")
	 {
	//Setup our new file path
	//move_uploaded_file($_FILES["upload"]["tmp_name"], "Proposals/". $_SESSION["FirstName"] ."/". $_FILES["upload"]["name"]);
		$newFilePath = "./images/".$_POST['course_id']."/" . $_FILES['upload']['name'][$i];
	   
		//Upload the file into the temp dir
	 if(move_uploaded_file($tmpFilePath, $newFilePath))
		{
			$folder = "images/".$_POST['course_id']."/";
			$fields = array('img_id', 'img_loc', 'img_des', 'doc_id');//here we write the attribute or fields which is in the table insid the database
			$values = array('',$folder.$_FILES['upload']['name'][$i],'test',$get_decument_id);//put all  variables in values  array()
			$con->insert($fields, $values, 'doc_imgs');//call insert(all fields or attribute , value array,table name)
		}//end of if statament if(move_uploaded_file($tmpFilePath, $newFilePath))
	  }//end of if ($tmpFilePath != "")
	}//end of for loop
		$sql = "SELECT img_loc FROM doc_imgs where doc_imgs.doc_id='".$get_decument_id."' ";
		$data= mysql_query($sql);
	   $con->disconnect();
}//end of if statment  if(isset($_POST['pleace']))
    ?>