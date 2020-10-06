<?php

if(isset($_POST['nome']) && empty($_POST['nome'])){
    echo 'Nome completo obrigatório<br>';
}

if(isset($_POST['cpf']) && empty($_POST['cpf'])){
    echo 'CPF obrigatório<br>';
}

if(isset($_POST['cpf']) && is_numeric($_POST['cpf'])){
    echo 'Apenas números no CPF<br>';
}

?>

<form action="" method="post">
    <label for="">
        Nome completo:
        <input type="text" name="nome">
    </label>

    <label for="">
        Cpf:
        <input type="text" name="cpf">
    </label>

    <input type="submit" value="Cadastrar">
</form>