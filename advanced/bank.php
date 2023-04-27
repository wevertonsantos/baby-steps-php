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

$contaCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Weverton',
        'saldo' => 1000
    ], 
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '123.456.789-12' => [
        'titular' => 'Mário',
        'saldo' => 300
    ]
];

$contaCorrentes['123.456.789-11'] = sacarSaldo(
    $contaCorrentes['123.456.789-11'],
    500
);

$contaCorrentes['123.456.789-11'] = depositarSaldo(
    $contaCorrentes['123.456.789-11'],
    10
);

foreach ($contaCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf - {$conta['titular']} : {$conta['saldo']}");
}