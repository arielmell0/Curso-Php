<?php

require_once('Lutador.php');

class Luta{
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;

    //Métodos
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2){
            $this -> aprovada = true;
            $this -> desafiado = $l1;
            $this -> desafiante = $l2;
        } else {
            $this -> aprovada = false;
            $this -> desafiado = null;
            $this -> desafiante = null;
        }
    }

    public function lutar(){
        if($this -> aprovada){
            $this -> desafiado -> apresentar();
            $this -> desafiante -> apresentar();
            $vencedor = rand(0, 2);
            switch($vencedor){
                case 0: //Empate
                    echo '<hr><br>O lutador '.$this->desafiado->getNome().' empatou com o lutador '.$this->desafiante->getNome().'.</br>';
                    $this -> desafiado -> empatarLuta();
                    $this -> desafiante -> empatarLuta();
                break;

                case 1: //Desafiado vence
                    Echo '<hr><br>O desafiado '. $this->desafiado->getNome().' Venceu o desafiante '.$this->desafiante->getNome().'.</br>';
                    $this ->desafiado -> ganharLuta();
                    $this -> desafiante -> perderLuta();
                break;

                case 2: //Desafiante vence
                    echo '<hr><br>O desafiante '. $this->desafiante->getNome().' venceu o desafiado '.$this->desafiado->getNome().'.</br>';
                    $this -> desafiado -> perderLuta();
                    $this -> desafiante -> ganharLuta();
                break;
            }
        } else {
            echo '<hr><br>Luta não pode acontecer</br>';
        }
    }

    //Métodos especiais
    public function setDesafiado($lutador){
        $this -> desafiado = $lutador;
    }

    public function getDesafiado(){
        return $this -> desafiado;
    }

    //

    public function setDesafiante($lutador){
        $this -> desafiante = $lutador;
    }

    public function getDesafiante(){
        return $this -> desafiante;
    }

    //

    public function setRounds($valor){
        $this -> rounds = $valor;
    }

    public function getRounds(){
        return $this -> rounds;
    }

    public function setAprovado($valor){
        $this -> aprovado = $valor;
    }

    public function getAprovado(){
        return $this -> aprovado;
    }


}