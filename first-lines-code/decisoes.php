<?php

$idade = 12;
$numeroDePessoas = 3;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "se tiver 16 anos e estiver acompanhado" . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Pode entrar" . PHP_EOL;
}else if($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos e está acompanhado(a), pode entrar!" . PHP_EOL;
}else{
    echo "Você tem $idade anos e não está acompanhado(a), ";
    echo "não pode entrar!" . PHP_EOL;   
}
