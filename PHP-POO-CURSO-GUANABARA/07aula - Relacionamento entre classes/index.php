<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 07</title>
</head>
<body>
    <?php

    require_once('Lutador.php');

    $l = new Lutador('Pretty boy', 'França', 31, 1.75, 68.9, 11, 2, 1);

    $l -> status();

    ?>
</body>
</html>