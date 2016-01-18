<?php

  
class DataBase {
    public $connection;
    private $hostName;
    private $userName;
    private $pasWord;
    private $db; 
    private $link; 
    public $osama=0;
    public function connect($host,$user,$pass,$dtb)
     {
        $this->hostName= $host;
        $this->userName = $user;
        $this->password = $pass;
        $this->db_name   = $dtb;
      //  echo $this->db_name;
        $conn = mysql_connect($this->hostName, $this->userName,$this->password) or die('localhost connection problem'.mysql_error());
         mysql_select_db($this->db_name,$conn);echo'connected..!';
    } 
     public function insert($fields, $data, $table,$link) 
     {
        try 
        {
            $queryFields = implode(",",$fields);
            $queryValues = implode('","',$data);
            $insert = 'INSERT INTO '.$table.'('.$queryFields.') VALUES ("'.$queryValues.'")';
            $sql = mysql_query ($insert);echo"inserted";
        
            $this->link= $link;
          if($sql){
         $this->redirect($this->link);
            }
            return $sql;             
        } catch (Exception $ex) 
        {
            echo "Some Exception Occured " . $ex;
        }
        
        
        
    }
    
    
     
        public function select($DB_name,$table, $rows , $where = null, $order = null)
    {
        $q = 'SELECT '.$rows.' FROM '.$table;
        if($where != null)
            $q .= ' WHERE '.$where;
        if($order != null)
            $q .= ' ORDER BY '.$order;
        if($this->tableExists($DB_name,$table))
       {
        $query = @mysql_query($q);
        if($query)
        {
            $this->numResults = mysql_num_rows($query);
            for($i = 0; $i < $this->numResults; $i++)
            {
                $r = mysql_fetch_array($query);
                $key = array_keys($r); 
                for($x = 0; $x < count($key); $x++)
                {
                    // Sanitizes keys so only alphavalues are allowed
                    if(!is_int($key[$x]))
                    {
                        if(mysql_num_rows($query) > 1)
                            $this->result[$i][$key[$x]] = $r[$key[$x]];
                        else if(mysql_num_rows($query) < 1)
                            $this->result = null; 
                        else
                            $this->result[$key[$x]] = $r[$key[$x]]; 
                    }
                }
            }            
            return true; 
        }
        else
        {
            return false; 
        }
        }
else
      return false; 
    }
    
    
 
    public function redirect($link)
    {
        
         $this->link =$link;
         header( "Location: $this->link" );
        
    }
    
    private $result = array(); 
 
public function tableExists($DB_name,$table)
    {
        $check_table='SHOW TABLES FROM '.$DB_name.' LIKE "'.$table.'"';
        echo $check_table;
        $tablesInDb = @mysql_query($check_table);
 //echo $tablesInDb."sd";   
        if($tablesInDb)
        {echo"asdasd";
            if(mysql_num_rows($tablesInDb)==1)
            {
                return true; 
            }
            else
            { 
                return false; 
            }
        }
    }
     public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }
    public function update($DB_name,$table,$rows,$where)
    {echo"here update";
        if($this->tableExists($DB_name,$table))
        {echo"here update";
            // Parse the where values
            // even values (including 0) contain the where rows
            // odd values contain the clauses for the row
            for($i = 0; $i < count($where); $i++)
            {
                if($i%2 != 0)
                {
                    if(is_string($where[$i]))
                    {
                        if(($i+1) != null)
                            $where[$i] = '"'.$where[$i].'" AND ';
                        else
                            $where[$i] = '"'.$where[$i].'"';
                    }
                }
            }
            $where = implode('=',$where);
             
             
            $update = 'UPDATE '.$table.' SET ';
            $keys = array_keys($rows); 
            for($i = 0; $i < count($rows); $i++)
           {
                if(is_string($rows[$keys[$i]]))
                {
                    $update .= $keys[$i].'="'.$rows[$keys[$i]].'"';
                }
                else
                {
                    $update .= $keys[$i].'='.$rows[$keys[$i]];
                }
                 
                // Parse to add commas
                if($i != count($rows)-1)
                {
                    $update .= ','; 
                }
            }
            $update .= ' WHERE '.$where;
            echo $update;
            $query = @mysql_query($update);
            if($query)
            {
                return true; 
            }
            else
            {
                return false; 
            }
        }
        else
        {
            return false; 
        }
    }
    public function delete($DB_name,$table,$where = null)
    {
        if($this->tableExists($DB_name,$table))
        {
            if($where == null)
            {
                $delete = 'DELETE '.$table; 
            }
            else
            {
                $delete = 'DELETE FROM '.$table.' WHERE '.$where; 
                echo $delete;
            }
            $del = @mysql_query($delete);
 
            if($del)
            {
                return true; 
            }
            else
            {
               return false; 
            }
        }
        else
        {
            return false; 
        }
    }
    
    public function disconnect()
{
    if($this->db_name)
    {
        if(@mysql_close())
        {echo'closed';
                       $this->db_name = false; 
            return true; 
        }
        else
        {
            return false; 
        }
    }
}
public function escapeString($data){
        return $this->myconn->real_escape_string($data);
    }
     public function getSql(){
        $val = $this->myQuery;
        $this->myQuery = array();
        return $val;
    }
}

$obj=new DataBase();

 //
$obj->connect("localhost","root","","comunity_service");
//$obj->update('comunity_service','login',array('username'=>'Bernard!'),array('ID',3));
//$obj->tableExists("comunity_service",'login')
// $con=new DataBase();
// $con->connect("localhost","root","","comunity_service");
//select($table, $rows = '*', $where = null, $order = null);
    $obj->delete('comunity_service','login','id=6');
 $obj->select('comunity_service','login','*','ID="1"','id DESC');
 $res = $obj->getResult();
 echo"<br/>";
print_r($res);
//$obj->getSql();
 

?>