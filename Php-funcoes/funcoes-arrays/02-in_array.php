<?php

echo '<h1>Exemplo 1</h1>';
//Exemplo 1
//in_array

$array = array('mac', 'linux', 'windows'); //aceita array() sem conteúdo

$retorno = in_array('mac', $array);//o mac está no $array ??

if($retorno){
    echo 'True: Sim mac esta no array.<br>';
} else {
    echo 'False: mac não esta no array.<br>';
}

?>