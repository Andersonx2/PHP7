<?php
//*
$diaDaSemana = date("w");

switch ($diaDaSemana) {
    case 0;
        echo "domingo";
        break;

    case 1;
        echo "segunda";
        break;

    case 2;
        echo "terça";
        break;

    case 4;
        echo "quarta";
        break;

    case 6;
        echo "quarta";
        break;

    case 5;
        echo "quinta";
        break;

    case 6;
        echo "sexta";
        break;

    default;
        echo "data invalida";
}
echo "</br>";
echo "</br>";
echo "</br>";
?>

------------------------------------
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <article>
        Em um programa de televisão o expectador deve escolher números de 1 a 5 para um sorteio
        de prêmios, em que cada número representa um prêmio. Então faremos:
        1. Ler a entrada, o número que o expectador escolheu
        2. De acordo com o número que o expectador escolheu retornar um prêmio
        3. Se escolher um número que não seja de 1 a 5 retornar uma mensagem de erro.
    </article>

    <form action="" method="Get">

        Digite aqui seu número da sorte: <input type="text" name="sort">
        <input type="submit" name="submit" value="Calcular">

    </form>
</body>

</html>

<?php

$Num = $_GET['sort'];


echo "</br>";
echo "</br>";
echo "</br>";
switch ($Num) {

    case 1;
        echo "UMA BICICLETA";
        break;

    case 2;
        echo "20mil baras de ouro";
        break;

    case 3;
        echo "uma casa";
        break;

    case 4;
        echo "conjunto de panelas";
        break;

    case 5;
        echo "um caro zero";
        break;

    default;

        echo "Você perdeu sua chance";
}

echo "</br>";
echo "</br>";
echo "</br>";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <article>

    </article>

    <form action="" method="Get">
        <ul>
            <li>Codigo 100 Cachorro quente de R$1,70</li>
            <li>Codigo 101 Bauru Simples de R$2,30</li>
            <li>Codigo 102 Bauru com ovo de R$2,60</li>
            <li>Codigo 103 Hamburguer de R$2,60</li>
            <li>Codigo 104 Cheeseburguer de R$1,70</li>
            <li>Codigo 105 Refrigerante de R$1,70</li>
        </ul>
        
        Digite a primeira nota <input type="text" name="01"> </br>

        Digite a primeira nota <input type="text" name="02"> </br>


        Digite a primeira nota <input type="text" name="03"> </br>

    </form>
</body>

</html>