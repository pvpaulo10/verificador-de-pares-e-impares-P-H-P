<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>impar ou par</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero1">Digite o primeiro numero: </label>
        <input type="number" name="numero1">
        <br>
        <br>
        <label for="numero2">Digite o segundo numero: </label>
        <input type="number" name="numero2">
        <br><br>
        <input type="submit">
        <label for="resultado">resultado: </label>
        <br><br>

        <input type="text" name="resultado" value="<?php
    if ($_POST){
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $resultado = $_POST['resultado'];
    if($numero1 % 2== 0)
    echo" $numero1 é par ";
    else
    echo" $numero1 é impar ";
    if($numero2 % 2== 0)
    echo" $numero2 é par ";
    else
    echo" $numero2 é impar ";
    }
?>" >

    </form>
 
</body>
</html>