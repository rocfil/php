<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style2.css">
    <title>Calcular média</title>
</head>
<body>
    <form action="funcao.php" method="get">
        <h2>NOTA 1</h2>
        <input name="nota1" value="nota1" type="number">
        <h2>NOTA 2</h2>
        <input name="nota2" value="nota2" type="number">
        <div>
        <button style="margin-top: 20px; margin-bottom: 20px" type="submit">Calcular média</button>
        </div>
    </form>
</body>
</html>

<?php

ini_set('display_errors', 0);

function media(){
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $media = ($nota1 + $nota2) / 2;
    echo " A média calculada é: $media";
    return;
}

media();