<?php

//Criando variaveis 
$nome = "Hcode";
var_dump($nome);
echo "</br>";

echo "</br><h2>TIPOS DE DADOS</h2> </br>";

$anoNascimento = 1995;
$nomeCompleto = "anderson santos";

//concatenação de variavies 
$nomeIdade = $nomeCompleto . " e sua idade é  $anoNascimento";
echo $nomeIdade;
echo "</br>";
echo "</br>";
//parada
//exit;

//Verificando a variavel nome existe `isset`
if (isset($nomeCompleto)) {
    echo "variavel nomeCompleto é  existente";
}
///////////////////////////////////////////////////////////
echo "</br>";
echo "</br>";

$frutas = array("abaxaxi","banana","teste",);

echo $frutas[1];

$nascimento= new DateTime();

var_dump($nascimento);
