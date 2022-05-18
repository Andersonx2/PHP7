<?php

/*

<Classe: É um conjunto de "assuntos"  para organizar o codigo com atributos e métodos>
Atributos =  É onde você consegue guardar a informação - variavel que ganha recursos
Metodos= São as formas de executar uma classe --- > FUnão que ganha recursos

Objeto -->  Variavel que representa ou tira uma copia da class

Instancia é um objeto que representa uma class
<> */

class Pessoa
{

    public $nome; /*atributo*/

    public function falar()
    { //metodo

        return "O meu nome é: " . $this->nome;

    }

}

$anderson = new Pessoa();
$anderson->nome = "anderson Gonçalves";
echo $anderson->falar();

?>
