<form>
    <input type="text" name="nome">

    <input type="date" name="nome">

    <input type="submit" name="nome">



</form>

<?php

foreach ($_GET as $key => $value) {


    echo "Nome do campo: " . $key;
    echo "<br>";

    echo "valor do campo " . $value;
    echo "<br>";
}





/*
$meses = array (
    "Janeiro","feveriro","Marco","Abril"
    ,"Maio","Junho","julho","Agosto","Setembro",
    //"Outubro","novembro","Dezembro"
    );
    foreach ($meses as $index => $mes ) {
    
    
    echo "indice:" .$index; "</br>";
    echo "o mês é: " .$mes."</br>";
    }
*/
    ?>

