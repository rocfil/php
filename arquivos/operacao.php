<html>
    <link rel="stylesheet" href="./css/style2.css">
    <form action="operacao.php" method="$_GET">
            <p>Número 1</p>
        <input placeholder="número 1" name="n1" type="number">
            <p>Número 2</p>
        <input placeholder="número 2" name="n2" type="number">
           
        <select name="sinal" id="">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
            <option value="exponenciar">Exponeciar</option>
        </select>
        <label for="">
            <button type="submit">Calcular <br></button>
        </label>
            
            
    </form>

</html>

<?php

//  <p>Sinal ( + - * /)</p>
// <input placeholder="sinal" name="sinal" type="text">

ini_set('display_errors', 0);

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$sinal = $_GET["sinal"];
// $resultado = ($n1 + $n2) / 2;

if ($sinal == 'somar') {
    $soma = $n1 + $n2;
    echo "Resultado: $soma";
} else if ($sinal == 'subtrair') {
    $subtracao = $n1 - $n2;
    echo "Resultado: $subtracao";
} else if ($sinal == 'multiplicar') {
    $multiplicacao = $n1 * $n2;
    echo "Resultado: $multiplicacao"; 
} else if ($sinal == 'dividir') {
    $divisao = $n1 / $n2;
    echo "Resultado: $divisao";
} else if ($sinal == 'exponenciar') {
    $exponenciacao = $n1 ** $n2;
    echo "Resultado: $exponenciacao";
}
/*
echo "Nota 1: $n1 <br>";

echo "Nota 2: $n2 <br>";

echo "O resultado do cálculo é: $resultado";

if ($resultado > 6) {if ($resultado = 10) {echo "Nota máxima. vai pra harvard. <br>";} echo "Parabéns você passou!";}
 else {echo "Você foi reprovado";}
*/