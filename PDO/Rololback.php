<?php
 
 $conn = new PDO("mysql:dbname=hcode; host=127.0.0.1:3306","ANDERSON", "Passoword123#@!");  

 $conn-> beginTransaction(); 
 $stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 5;

$stmt-> bindParam(":ID", $id);

$stmt-> execute(array($id));
//$conn -> rollBack();


echo "Dados deletados";
 


 ?> 