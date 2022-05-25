<?php
 
 $conn = new PDO("mysql:dbname=hcode; host=127.0.0.1:3306","ANDERSON", "Anderson123#@!");  

 $stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 5;

$stmt-> bindParam(":ID", $id);

$stmt-> execute();

echo "Dados deletados";
 


 ?> 