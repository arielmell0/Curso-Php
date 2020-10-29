<?php

class caneta {
    private $modelo;
    private $ponta;
    private $cor;
    private $tampada;

    public function caneta($m, $p, $c){ //Método construtor pode ter o mesmo nome da classe => __construct = caneta
        $this -> setModelo($m);
        $this -> setPonta($p);
        $this -> setCor($c);
        $this -> tampar();
    }

    public function tampar(){
        $this -> tampada = true;
    }

    public function getModelo(){
        return $this -> modelo;
    }

    public function setModelo($modelo){
        $this -> modelo = $modelo;
    }

    public function getPonta(){
        return $this -> ponta;
    }

    public function setPonta($ponta){
        $this -> ponta = $ponta;
    }

    public function setCor($c){
        $this -> cor = $c;
    }

    public function getCor(){
        return $this -> cor;
    }

}

?>