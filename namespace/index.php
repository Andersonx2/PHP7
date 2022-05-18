<?php

require_once ("config.php");

$cad = new Cadastro();

$cad->setNome  ("Anderson goncalves");
$cad->setEmail("anderson_150@hotmail.com");
$cad-> setSenha("125");

echo $cad;


?>