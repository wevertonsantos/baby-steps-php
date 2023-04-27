<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacarSaldo( array $conta, float $valorASacar) : array{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar");
    }
    else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositarSaldo(array $conta, float $valorADepositar) : array {
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }
    else{
        exibeMensagem("Você somente pode depositar valores positivos");
    }
    return $conta;
}
