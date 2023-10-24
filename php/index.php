<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
</head>
<body>

    <form action="">
        <label>Valor do dolar</label>
        <input type="text" name="dolar">
        <input type="submit" value="Calcular a conversão para o real">
    </form>

    <?php

        if (isset($_GET["dolar"]))
        {
            $dol = $_GET["dolar"];

            echo $dol * 5.01;
        }

    ?>



</body>
</html>