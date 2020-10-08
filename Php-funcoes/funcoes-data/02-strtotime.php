<?php

//strtotime
$inicial = '05-10-2020';
$final = '08-10-2020';

$time_inicial = strtotime($inicial);
$time_final = strtotime($final);

echo $time_inicial.'<br>';
echo $time_final.'<br>';

$diferenca_time = $time_final - $time_inicial;
echo $diferenca_time.'<br>'; //diferença em segundos

$dias_segundos = 24*60*60; //quantidades de seg 1 dia
$diferenca_dias = $diferenca_time / $dias_segundos;
echo $diferenca_dias.' dias'; //diferença em dias

?>