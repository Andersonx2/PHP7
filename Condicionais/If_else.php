<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Digite algo <input type="text" name="carac">
        <input type="submit" name="submit" value="testar">
    </form>

    <?php

    $meucaractere = $_GET['carac'];
    if (ctype_digit($meucaractere))
        echo "é digito";
    else
        echo "nao é digito";
    ?>
    <article>
        <div class="calcular nota">
            <h1> Faça o calculo de notas, e verifique quem tirou a maior nota: </h1>
            <form action="" method="get">

                Digite a primeira nota <input type="text" name="01"> </br>

                Digite a primeira nota <input type="text" name="02"> </br>


                Digite a primeira nota <input type="text" name="03"> </br>
                <input type="submit" name="submit" value="Calcular">
            </form>
    </article>

    <?php

    $Not1 = $_GET['01'];
    $Not2 = $_GET['02'];
    $Not3 = $_GET['03'];

    $Soma = ($Not1 + $Not2 + $Not3);

    if ($Soma >= 7)
        echo  "você passou de ano";
    else
        echo "você é um perdedor";




    ?>


</body>

</html>
