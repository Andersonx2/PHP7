<?php

$pessoas = array ();

array_push($pessoas, array (
'nome' => 'Jon', 
'idade'=> 18

));


array_push($pessoas, array (

    'nome'  => 'anderson', 
    'idade' => 18
    
));





echo json_encode($pessoas);
echo "<br>";

//$json = '[{"nome":"Jo\u00e3o","idade":18},{"nome":"anderson","idade":18}]';

//$data = json_decode ($json, true);

//var_dump($data);