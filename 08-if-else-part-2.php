<?php

//combinação de operadores lógicos com operadores de comparação


	//f e v
	//&& só retorna true se todos os valores forem verdadeiros

	if(5 == 3 && 5 > 4){
		echo'Verdadeiro';
	}else{
		echo'Falso';
	}

	echo'<br><br>';


	//() é usado para dar preferencia ou isolar.

	//(v e v) => v or f = v

	if((2 == 2 && 3 == 3) || 5 <> 5){
		echo'Entrou no bloco if';
	}else{
		echo'Entrou no bloco else';
	}

?>