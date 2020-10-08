<?php

echo '<h1>Exemplo 1</h1><br><br>';
//Exemplo 1
//is_array

$nao_array = 'String';

$retorno = is_array($nao_array);

if($retorno){
    echo 'True: É um array.<br>';
}else{
    echo 'False: Não é um array.<br>';
}

?>

<?php

echo '<h1>Exemplo 2</h1><br><br>';
//Exemplo 2
//is_array

$array = [0 => 'amora', 1 => 'banana', 2 => 'carambola']; //aceita array() sem conteúdo

$retorno2 = is_array($array);

if($retorno2){
    echo 'True: É um array.<br>';
} else {
    echo 'False: não é um array.<br>';
}

?>