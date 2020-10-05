<?php

require_once('funcao-calculo.php');

$valor_total = 800;
$desconto = 10;

$valor_total_com_desconto = calculo_desconto($valor_total, $desconto);
?>

Valor total: R$ <?= $valor_total?> <br>
Valor do desconto: <?= $desconto ?>% 
<br>---------------------------------<br>
Valor total com desconto: R$<?=$valor_total_com_desconto?>