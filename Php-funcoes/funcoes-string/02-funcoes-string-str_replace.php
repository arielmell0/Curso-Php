<?php

//string_replace
$valor_monetario = '12.40';
echo str_replace('.', ',', $valor_monetario); //substituindo . por , para valores monetários

echo '<br><br>';

//Exemplo: mandando somente os números do cpf para o banco de dados 
$cpf_usuario = '843.681.950-00'; //cpf do usuario 
$cpf_banco_de_dados = str_replace('.', '', $cpf_usuario); //tratamento do cpf do usuario para o cpf do bd
$cpf_banco_de_dados = str_replace('-', '', $cpf_banco_de_dados); //tratamento final do cpf do usuario

echo $cpf_banco_de_dados; //cpf armazenado no bd sem pontos e virgulas

?>
