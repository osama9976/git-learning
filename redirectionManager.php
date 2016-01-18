<?php
   require_once  'Include.php';
   require_once 'config.php';
          header('Content-Type:  text/plain; charset=utf-8');
          if(isset($_GET['className']) && !empty($_GET['className'])){
              try{
                $classname = new $_GET['className']($conn,$_GET);
				              
              }
              catch (Exception $e){
                 header($e->getMessage());
                 exit();
              }
            $result= $classname->getFormHtml();         
            echo $result;               
           
          }
          
          ?>