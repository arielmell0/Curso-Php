<?php 

class contaBanco{

    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    /* Abrir conta:
    Nova conta corrente(CC) -> ganha 50 R$
    Nova conta poupança(CP) -> ganha 150 R$
    
    Fechar conta:
    Não pode fechar a conta se estiver com débitos pendentes,
    ou dinheiro acumulado nela ou seja o saldo deve ser igual a zero para fechá-la.
    
    Depositar:
    A conta deve estar aberta (status).
    
    Sacar:
    A conta deve estar aberta (status) e também ter saldo suficiente para sacar.
    
    Mensalidade:
    Conta corrente 12 R$ de mensalidade.
    Conta poupança 20 R$ de mensalidade. */

    //Método construtor (Métodos especiais)

    public function __construct(){
        $this -> setSaldo(0);
        $this -> setStatus(false);
    }

    //Métodos
    public function abrirConta($tipo){
        $this -> setTipo($tipo);
        $this -> setStatus(true);

        if($this -> getTipo() == 'CC'){
            $this -> setSaldo(50);
        }elseif($this -> getTipo() == 'CP'){
            $this -> setSaldo(150);
        }
    }

    public function fecharConta(){
        if($this -> getSaldo() == 0){
            $this -> setStatus(false);
            echo '<p>Você fechou a sua conta.</p>';
        } elseif($this -> getSaldo() > 0){
            echo '<p>Conta ainda possui dinheiro!</p>';
        } else {
            echo '<p>Você precisa quitar as suas dividas</p>';
        }
        
    }

    public function depositar($valor){
        if($this -> getStatus()){
            $this -> setSaldo($this -> saldo + $valor);
            echo "<p>Você adicionou '$valor'R$ a sua conta.</p>";
        }
    }

    public function sacar($valor){
        if($this -> getStatus() == true && $this -> getSaldo() >= $valor){
            $this -> setSaldo($this -> saldo - $valor);
            echo "<p>Você sacou '$valor'R$!</p>";
        } elseif($this -> getStatus() == true && $this -> getSaldo() < $valor){
            echo 'Você não possui saldo suficiente!';
        } else {
            echo 'Você não pode sacar de uma conta fechada!';
        }
    }

    public function pagarMensal(){
        if($this -> getTipo() == 'CC'){
            $valor = 12; 
        } elseif($this -> getTipo() == 'CP') {
            $valor = 20;
        }
        
        if($this -> getStatus()){
            if($this -> getSaldo() > $valor){
                $this -> setSaldo($this -> getSaldo() - $valor);
            } else {
                echo 'Saldo insuficiente';
            }
        } else {
            echo 'Essa conta está fechada, impossivel fazer a cobrança!';
        }

    }

    //Getters e setters (Métodos especiais)

    public function setNumConta($numConta){
        $this -> numConta = $numConta;
    }

    public function getNumConta(){
        return $this -> numConta;
    }

    public function setTipo($tipo){
        $this -> tipo = $tipo;
    }

    public function getTipo(){
        return $this -> tipo;
    }

    public function setDono($dono){
        $this -> dono = $dono;
    }

    public function getDono(){
        return $this -> dono;
    }

    public function setSaldo($saldo){
        $this -> saldo = $saldo;
    }

    public function getSaldo(){
        return $this -> saldo;
    }

    public function setStatus($status){
        $this -> status = $status;
    }

    public function getStatus(){
        return $this -> status;
    }

}