<?php

echo '<h2>funcoes sem retorno</h2><br>';

function exibir_boas_vindas($nome='indefinido') {

	echo 'Bem vindo ao curso de PHP '.$nome;

}

exibir_boas_vindas('Camily'); //ele executa o trecho de codigo acima


echo '<br><br><br>';
echo '<h2>funcoes com retorno</h2><br>';

function calcular_soma() {

	return 2+3;

}

echo "A soma de 2 + 3: é igual a ".calcular_soma();

?>