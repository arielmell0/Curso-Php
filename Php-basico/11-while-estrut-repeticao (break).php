<?php


/*
while( condicao ){

}
*/

//exemplo

$num = 1;

while( $num < 10 ){

	echo $num;
	echo '<br>';
	$num = $num + 1;

	if($num > 7){
		break; //se maior que 7,pare
	}
}






?>