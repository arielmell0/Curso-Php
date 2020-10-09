<?php

class Produto
{

    var $nome_produto;
    var $peso_produto;
    var $validade_produto;

    function setNome($nome_definido)
    {

        $this->nome_produto = $nome_definido;
        
    }

    function getNome()
    {

        return $this->nome_produto.'<br>';
        
    }


    function setPeso($peso_definido)
    {

        $this->peso_produto = $peso_definido;

    }

    function getPeso()
    {
  
        return $this->peso_produto.'<br>';

    }


    function setValidade($validade_definida)
    {

        $this->validade_produto = $validade_definida;

    }

    function getValidade()
    {

        return $this->validade_produto.'<br>';

    }
}

$produto = new Produto();

$produto -> setNome('Carro');
$produto -> setPeso('700kg');
$produto -> setValidade('Validade indeterminada');

echo $produto -> getNome();
echo $produto -> getPeso();
echo $produto -> getValidade();


?>

