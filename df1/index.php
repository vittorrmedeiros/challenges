<?php

    if($_POST){
       $numero1 = $_POST['numero1'];
       $numero2 = $_POST['numero2'];

       if($numero1 > $numero2){
        $resultado = "O maior número é: " . $numero1;
       } else {
        $resultado = "O maior número é: " . $numero2;
       }
       
    }
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
</head>
<body>
    <form method="POST">

        <p>
            <label for="numero1">Número 1</label>
            <input type="number" name="numero1" id="numero1">
        </p>

        <p>
            <label for="numero2">Número 2</label>
            <input type="number" name="numero2" id="numero2">
        </p>

        <p>
            <input type="submit" value="Enviar">
        </p>

        <p>
            <?php
                if($_POST) {
                    echo $resultado;
                }
            ?>
        </p>
        
    </form>
</body>
</html>