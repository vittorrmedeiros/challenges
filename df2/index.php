<?php

    if($_POST){
        $numero = $_POST['numero'];

        if($numero >= 0){
            $resultado = "O número é positivo!";
        } else {
            $resultado = "O número é negativo!";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
</head>
<body>
    <form method="POST">
        <p>
            <label for="numero">Número</label> <br> <br>
            <input type="number" name="numero" id="numero">
        </p>

        <input type="submit" value="Enviar">
    </form>

    <p>
        <?php
            if($_POST){
                echo $resultado;
            }
        ?>
    </p>
</body>
</html>