<?php 

abstract class Animal { 

    public function falar (){ 
        return "som";
    } 

    public function mover(){ 
        return "anda";
    }


}

class Cachorro extends Animal {
    public function falar (){ 
        return "late";
    }
}


class gato extends animal { 
    public function falar(){ 
        return "Mia";
    }
}

class passaro extends Animal {
    public function falar(){ 
        return "canta";
      
 }
    public function mover(){ 
        return "voa e " .parent::mover();
         
    }
}

$picapal =new Passaro();

$galfid =new Gato ();

$pluto = new Cachorro ();

echo $pluto -> mover() . "<br/>"; 
echo $pluto -> falar(). "<br/>";

echo "======================". "<br/>"; 

echo $galfid ->falar() . "<br/>";
echo $galfid ->mover(). "<br/>";

echo "======================". "<br/>"; 

echo $picapal ->falar() ."<br/>";
echo $picapal->mover() ."<br/>";



?> 