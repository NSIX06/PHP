<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
        
    <form action="">
        <label>IMC <br> </label>
        <label>Peso</label>
        <input type="text" name="peso">
        <label>Altura</label>
        <input type="text" name="altura">
        <input type="submit" value="Calcular o IMC">
    </form>

    <?php

        if (isset($_GET["peso"]) && isset($_GET["altura"]))
        {
            $peso = $_GET["peso"];
            $altura = $_GET["altura"];


            $IMC = $peso / ($altura * $altura);

            echo $IMC;
        }
            ?>



</body>
</html>