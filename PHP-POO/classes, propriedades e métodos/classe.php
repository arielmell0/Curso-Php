<?php

class Pessoa {

    //Atributos
    var $nome; //usar a palavra var para atributos

    //Métodos
    //setters 
    function setNome($nome_definido){//define um valor para a variavel $nome

        $this -> nome = $nome_definido;   
        //$this serve para acessar um atributo ou método dentro de uma classe
        //-> (seta) utilizado para acessar atributos e métodos
    }

    //getters ()
    function getNome(){
        return $this->nome;
    }

}

//Como instanciar a classe
$pessoa = new Pessoa();

$pessoa -> setNome('Jamilton');//Jamilson seria o parametro $nome_definido
echo $pessoa -> getNome();

?>