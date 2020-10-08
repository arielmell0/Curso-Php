<?php

echo '<h1>Exemplo 1</h1>';
//Exemplo 1
//array_merge
$array1 = array('mac', 'linux');
$array2 = array('windows');

$novo_array = array_merge($array1, $array2);
var_export($novo_array);

?>