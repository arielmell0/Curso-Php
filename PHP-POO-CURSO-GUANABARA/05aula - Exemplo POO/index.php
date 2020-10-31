<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php

    require_once('Classes.php');
    $creusa = new contaBanco();
    $creusa->abrirConta('CC');
    $creusa->setNumConta(5000);
    $creusa->setDono('Creuza');

    $jubileu = new contaBanco();
    $jubileu -> abrirConta('CP');
    $jubileu -> setNumConta(6000);
    $jubileu -> setDono('Jubileu');

    $creusa -> depositar(500);
    $jubileu -> depositar(300);

    print_r($creusa);
    print_r($jubileu);

    ?>
    </pre>
</body>

</html>