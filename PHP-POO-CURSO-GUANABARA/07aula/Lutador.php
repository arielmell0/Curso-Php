<?php

class Lutador{
    //Atributos

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas; 
    private $empates;

    //Métodos

    public function apresentar(){
        echo '<p>------------------------------------</p>';
        echo '<p>CHEGOU A HORA! O lutador ' . $this -> getNome();
        echo 'Veio diretamente de ' . $this -> getNacionalidade();
        echo 'Tem ' . $this -> getIdade() . 'anos e pesa ' . $this -> getPeso() . 'kg';
        echo '<br>Ele tem ' . $this -> getVitorias() . ' vitórias';
        echo $this->getDerrotas() . 'derrotas e ' . $this -> getEmpates() . 'empates';
    }

    public function status(){
        echo '<p>-------------------------------------</p>';
        echo '<p>' . $this -> getNome() . ' é um peso ' . $this -> getCategoria();
        echo ' e já ganhou ' . $this -> getVitorias() . ' vezes,';
        echo ' perdeu ' . $this->getDerrotas() . ' vezes e ';
        echo ' empatou ' . $this -> getEmpates() . ' vezes';
    }

    public function ganharLuta(){
        $this -> setVitorias($this -> getVitorias() + 1);
    }

    public function perderLuta(){
        $this -> setDerrotas($this -> getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this -> setEmpates($this -> getEmpates() + 1);
    }

    //Métodos especiais

    public function __construct($no, $na, $ida, $alt, $pe, $vit, $der, $emp){
        $this -> nome = $no;
        $this -> nacionalidade = $na;
        $this -> idade = $ida;
        $this -> altura = $alt;
        $this -> setPeso($pe);
        $this -> vitorias = $vit;
        $this -> derrotas = $der;
        $this -> empates = $emp;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function getNome(){
        return $this -> nome;
    }

    //

    public function setNacionalidade($nacionalidade){
        $this -> nacionalidade = $nacionalidade;
    }

    public function getNacionalidade(){
        return $this -> nacionalidade;
    }

    //

    public function setIdade($idade){
        $this -> idade = $idade;
    }
    public function getIdade(){
        return $this -> idade;
    }

    //

    public function setAltura($altura){
        $this -> altura = $altura;
    }
    public function getAltura(){
        return $this -> altura;
    }

    //

    public function setPeso($peso){
        $this -> peso = $peso;
        $this ->setCategoria();
    }
    public function getPeso(){
        return $this -> peso;
    }

    //

    private function setCategoria(){
        if($this -> peso < 52.2){
            $this -> categoria = 'Inválido';
        } elseif($this -> peso <= 70.3){
            $this -> categoria = 'Leve';
        } elseif($this -> peso <= 83.9){
            $this -> categoria = 'Médio';
        } elseif($this -> peso <= 120.2){
            $this -> categoria = 'Pesado';
        } else {
            $this -> categoria = 'Inválido';
        }
    }
    public function getCategoria(){
        return $this -> categoria;
    }

    //

    public function setVitorias($vitorias){
        $this -> vitorias = $vitorias;
    }
    public function getVitorias(){
        return $this -> vitorias;
    }

    //

    public function setDerrotas($derrotas){
        $this -> derrotas = $derrotas;
    }
    public function getDerrotas(){
        return $this -> derrotas;
    }

    //

    public function setEmpates($empates){
        $this -> empates = $empates;
    }
    public function getEmpates(){
        return $this -> empates;
    }

}