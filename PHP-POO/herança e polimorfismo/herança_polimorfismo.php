<?php

//Classe mãe ou super-classe
class Felino{

    var $mamifero = 'sim'. '<br>';

    function correr(){

        echo 'Correr como felino'. '<br>';

    }

}

//classe filha ou sub-classe
class Chita extends Felino{



}

class Gato extends Felino{

//Poliformismo
function correr(){

    echo 'Correr como gato'. '<br>';

}

}

$chita = new Chita();

echo $chita -> mamifero;
$chita -> correr() ;

$gato = new Gato();
$gato -> correr();

?>