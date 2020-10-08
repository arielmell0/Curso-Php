<?php

echo '<h1>Exemplo 1</h1>';
//Exemplo 1
//explode

$string = '08/10/2020';
$retorno = explode('/', $string);

var_export($retorno);

echo '<h1>Exemplo 1</h1>';
//Exemplo 2
//implode

$nova_string = implode('-', $retorno);
echo $nova_string;

?>