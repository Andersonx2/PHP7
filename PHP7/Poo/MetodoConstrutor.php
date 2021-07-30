<?php 

class endereco { 
    private $logadouro;  
    private $numero; 
    private $cidade; 

    public function __construct($a, $b, $c){ 

        $this -> logadouro = $a; 
        $this -> numero = $b;
        $this -> cidade = $c; 
 
}


public function __destruct()
{
     
var_dump("destruir");


}

public function __toString()
{
    return $this -> logadouro. "," .$this -> numero. "-" .$this->cidade;
}

}



$meuEndereco = new endereco("rua saraiva leal", "122","santos");

//unset($meuEndereco);

echo $meuEndereco;

?>

