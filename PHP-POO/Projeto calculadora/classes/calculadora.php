<?php

class Calculadora{

    private $numero1;
    private $numero2;
    private $total;

    public function __construct()
    {
        $this -> total = 0;
        $this -> numero1 = 0;
        $this -> numero2 = 0;
    }

    //getters e setters
    public function setNumero1($parametro_numero1){

        $this -> numero1 = $parametro_numero1;

    }

    public function setNumero2($parametro_numero2){

        $this -> numero2 = $parametro_numero2;

    }

}

?>