<!--
<?php

//o que é strlen??
$texto = 'Curso completo PHP';

//String length (calcula comprimento da str)
echo 'Quantidade de caracteres da string (contando espaços) '.strlen($texto);

?>
-->


<?php
//validar cpf
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$total_strings_cpf = strlen($cpf);

if($total_strings_cpf != 11 && $cpf != '' && is_numeric($cpf) ){
    echo 'CPF inválido!';
}

?>

<!--Exemplo validar cpf-->
<form action="" method="post">

    <label for="">
        CPF:
        <input type="text" name="cpf">

        <input type="submit" value="Enviar">
    </label>

</form>