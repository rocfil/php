<?php

$media = 10;


while($media >= 0) {
    if($media >= 6) {
        echo "Nota: $media - Aprovado <br>";
    } else if ($media < 6) {
        echo "Nota: $media - Reprovado <br>";
    }
    $media--;
}

/*
for($y = 0; $y <=50; $y++) {
    echo "Valor de y em for: $y <br>";
}
*/