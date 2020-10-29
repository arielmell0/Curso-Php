<?php

class caneta {
    var $cor;
    var $ponta;
    var $modelo;
    var $carga;
    var $tampada;

    public function tampar(){
        $this->tampada = true;
    }

    public function destampar(){
        $this->tampada = false;
    }

    public function rabiscar(){
        if($this->tampada == true){
            echo 'Não posso rabiscar com a caneta tampada...';
        } else {
            echo 'Estou rabiscando...';
        }
    }
}

?>