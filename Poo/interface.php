<?php 

interface Veiculo { 

    public function acelerar ($velocidade);
    public function frenar ($velocidade);
    public function trocarMacha ($marcha);
    
}

class DelRay implements veiculo{ 

    public function acelerar($velocidade){ 
        
        echo "o veiculo acelerou até ". $velocidade ."km/h";

    }

    public function frenar($velocidade){ 
        
        echo "o veiculo frenou  até ". $velocidade ."km/h";
        
    }

    public function trocarMacha($marcha)
    {
        echo "o veiculo acelerou até ". $marcha ."km/h";
 
    } 
}


$carro =new DelRay();

$carro -> trocarMacha(500000)




?>