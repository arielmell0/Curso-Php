<?php

//chamados de métodos mágicos __(2 underlines)
Class Pessoa{

    private $nome;

    public function correr(){
        echo $this -> nome . ' correndo <br>';
    }

    public function __construct($parametro_nome)
    {
        
        echo 'Construtor iniciado <br>';
        $this -> nome = $parametro_nome;

    }

    public function __destruct()
    {
        echo 'Objeto removido <br>';
    }

}

$pessoa = new Pessoa('Ariel');
$pessoa -> correr();

?>