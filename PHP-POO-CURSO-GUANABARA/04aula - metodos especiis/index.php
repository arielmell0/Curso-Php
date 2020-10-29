<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>
    <pre>
    <?php

    require_once 'classCaneta.php';

    $caneta1 = new caneta('Bic cristal', 05, 'Azul');
    $caneta2 = new caneta('Stabilo', 0.3, 'Preta');

    print_r($caneta1);
    print_r($caneta2);

    ?>
    </pre>
</body>

</html>