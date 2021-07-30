<?php
 
 $conn = new PDO("mysql:dbname=hcode; host=127.0.0.1:3306","ANDERSON", "Passoword123#@!");  

 $stmt = $conn -> prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES(:LOGIN, :PASSWORD)");

$login = "anderson";
$passoword = "123123"; 

$stmt-> bindParam(":LOGIN", $login);

$stmt-> bindParam(":PASSWORD", $passoword);

$stmt-> execute();

echo "Dados cadastrados";
teste 
 ?> 