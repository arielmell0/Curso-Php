<?php

$num = 1;

do{

	//o codigo será executado pelo menos uma vez e depois será verificado a condição

	echo 'Teste:  '.$num. '<br>';
	$num = $num + 1;

} while ( $num < 10 /*condicao*/ );






$num2 = 11; //(false)

do{

	//o codigo será executado pelo menos uma vez e depois será verificado a condição

	echo '<br><br> Teste 2 (false):  '.$num2. '<br>';
	$num = $num2 + 1;

} while ( $num2 < 10 /*condicao*/ );







?>