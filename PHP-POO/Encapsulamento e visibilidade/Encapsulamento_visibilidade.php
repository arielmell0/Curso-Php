<?php

class Veiculo {

/*
public / é possivel acessar o valor do atributo fora da classe
private / não é possivel acessar o valor do atributo fora da classe / não pode ser alterado em outras classes (exemplo casses filhas)
protected / não é possivel acessar o valor do atributo fora da classe
*/

private $placa;
public $cor;
protected $tipo;

//criando funções publicas para acessar o valor da placa
public function setPlaca($parametro_placa){

    $this -> placa = $parametro_placa;

}

public function getPlaca(){

    return $this -> placa;

}


}

$veiculo = new Veiculo();

$veiculo -> setPlaca('JMV386');
echo $veiculo -> getPlaca('');

?>