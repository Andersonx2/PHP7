<?php 

class Pessoa{ 

public $nome = "Anderson"; //todos tem acesso
protected $idade = 29; // Se houve ruma herança pode acessar atravez dela 
private $senha ="123123";//Só é acessada pelo objeto

public function verDados() { 
    echo $this -> nome . "<br/>";
    echo $this -> idade . "<br/>";
    echo $this -> senha .  "<br>";

}


}

$objeto = new Pessoa();

//echo $objeto -> idade. "<br/>";





?>