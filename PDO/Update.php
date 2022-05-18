<?php
 
 $conn = new PDO("mysql:dbname=hcode; host=127.0.0.1:3306","ANDERSON", "Passoword123#@!");  

 $stmt = $conn -> prepare("UPDATE INTO tb_usuarios SET deslogin = :LOGIN, desenha = :PASSOWORD WHERE idusuario = :ID");

$login = "teste";
$passoword = "849123"; 
$id = 2;

$stmt-> bindParam(":LOGIN", $login);
$stmt-> bindParam(":PASSWORD", $passoword);
$stmt-> bindParam(":ID", $id);

$stmt-> execute();

echo "Dados alterados";
 


 ?>  