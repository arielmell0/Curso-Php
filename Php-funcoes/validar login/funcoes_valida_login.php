<?php

function valida_login($login, $senha){
    //Validar direto de um banco de dados
    $login_bd = 'ariel1132';
    $senha_bd = 'mariobr231';

    if($login == $login_bd && $senha == $senha_bd){
        return true;
    }

    return false;
    
}


?>