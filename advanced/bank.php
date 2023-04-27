<?php

require_once 'functions.php';

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
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf - $titular : $saldo");
}