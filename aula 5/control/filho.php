<?php

include_once "pai.php";

class Filho extends Pai{

    public $curso = "Sistemas de Informação";

    function exibir(){
        echo "Nome: ".$this->nome."<br>";
        echo "Idade: ".$this->idade."<br>";
        echo "Curso: ".$this->curso."<br>";
    }

}
?>