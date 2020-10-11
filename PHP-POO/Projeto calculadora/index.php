<html>

<head>
    <title>Calculadora em PHP</title>
</head>

<body>
    <form method="post" action="calcular.php">
        <label for="">
            Primeiro numero:
            <input type="text" name="numero1">
        </label>

        <label method="post" for="calcular.php">
            Segundo numero:
            <input type="text" name="numero2">
        </label>

        <br> Operação: <br>

        <label method="post" for="calcular.php">
            <input type="radio" name="operacao" value="somar">
            Somar
        </label>
        <label method="post" for="calcular.php">
            <input type="radio" name="operacao" value="subtrair">
            Subtrair
        </label>
        <label method="post" for="calcular.php">
            <input type="radio" name="operacao" value="multiplicar">
            Multiplicar
        </label>
        <label method="post" for="calcular.php">
            <input type="radio" name="operacao" value="dividir">
            Dividir
        </label><br>

        <Input type="submit" value="Calcular"></Input>

    </form>
</body>

</html>