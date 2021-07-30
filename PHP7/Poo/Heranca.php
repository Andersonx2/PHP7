<?php

class Documento{ 
    private $numero;
    
    public function getNubero(){ 
    return $this -> numero;
    }

    public function setNumero($n){ 
      $this -> numero = $n;
    
    } 

}

 class CPF extends Documento { 


    public function validar():bool { 

       // $numeroCPF = $this-> getNumero();

      ///validacao cpf 
        return false; } 
           
}



$doc = new CPF();


$doc -> setNumero('12312312');

var_dump ($doc -> validar());

//echo $doc-> getNumero();



?>