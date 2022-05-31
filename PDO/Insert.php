<?php
 
 $conn = new PDO("mysql:dbname=hcode; host=127.0.0.1:3306","anderson", "Anderson123#@!");  
 $stmt = $conn->prepare("SELECT * FROM  tb_contats ORDER BY  deslogin");
 $stmt->execute();
 $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

foreach ($result as $row)
{ 
  foreach ($row as $key => $value) { 
      echo "<strong>".$key.":</strong>".$value."</br>"; 
  }
  echo "====================<br>";
}

?> 
