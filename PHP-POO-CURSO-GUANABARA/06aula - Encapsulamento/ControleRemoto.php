<?php


require_once('Controlador.php');

class ControleRemoto implements Controlador {
    //Atributos

    private $volume;
    private $ligado;
    private $tocando;

    //Métodos especiais

    public function __construct(){
       $this -> setVolume(50);
       $this -> setLigado(false);
       $this -> setTocando(false);
    }

    public function setVolume($valor){
        $this -> volume = $valor;
    }

    public function getVolume(){
        return $this -> volume;
    }

    public function setLigado($valor){
        $this -> ligado = $valor;
    }

    public function getLigado(){
        return $this -> ligado;
    }

    public function setTocando($valor){
        $this -> tocando = $valor;
    }

    public function getTocando(){
        return $this -> tocando;
    }

    //Métodos

    public function ligar(){
        $this -> setLigado(true);
    }

    public function desligar(){
        $this -> setLigado(false);
    }

    public function abrirMenu(){
        echo '<br>Está ligado? ' . ($this -> getLigado() ? 'Sim' : 'Não');
        echo '<br>Está tocando? ' . ($this -> getTocando() ? 'Sim' : 'Não');
        echo '<br>Volume: ' . $this -> getVolume();
        for($i = 0; $i <= $this -> getVolume(); $i +=10){
            echo '|';
        }   
        echo '<br>';
    }

    public function fecharMenu(){
        echo '<br>Fechando menu...'
    }

    public function maisVolume(){

    }

    public function menosVolume(){

    }

    public function ligarMudo(){

    }

    public function desligarMudo(){

    }

    public function play(){

    }

    public function pause(){

    }


}