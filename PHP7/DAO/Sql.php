<?php 

class Sql extends PDO { 
    private $conn;
    
    public function __construct(){ 
       
     $this-> con = new PDO("mysql:dbname=hcode; host=127.0.0.1:3306","ANDERSON", "Passoword123#@!"); 
    }

    private function setParams($statment,$parameters=array())
    public function query ($rawQuery, $params = array()){

     $stmt = $this-> conn->prepare ($RawQuery);
     
     foreach ($params as $key => $value) { 

    $stmt -> bindParam ($key, $value); 

    } 
    
    }    
    


}
?> 