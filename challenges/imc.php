<?php

$peso = 72;
$altura = 1.80;

$resultado = $peso / $altura ** 2;

echo "Resultado do IMC = " . round($resultado, 2) . PHP_EOL;

if ($resultado < 18.4){
    echo "Classificação : Abaixo do peso" . PHP_EOL;
}else if ($resultado < 24.9){
    echo "Classificação : Peso normal" . PHP_EOL;
}else{
    echo "Classificação : Acima do peso" . PHP_EOL;
}