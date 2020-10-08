<?php

echo '<h1>Exemplo 1</h1>';
//Exemplo 1
//array_keys

$produtos = array(10=>'Notebook', 11=>'Teclado');
$chaves_array = array_keys($produtos);

var_export($chaves_array);//foi criado um novo array com as chaves
//novo array >> array ( 0 => 10, 1 => 11, )

?>