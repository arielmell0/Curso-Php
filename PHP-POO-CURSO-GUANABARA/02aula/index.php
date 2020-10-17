<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>
    <?php

        require_once 'classCaneta.php';
        $caneta1 = new caneta();
        $caneta1->cor = 'Azul';
        $caneta1->ponta = 0.7;
        $caneta1->tampada = false;
        print_r($caneta1);
        

    ?>
</body>

</html>