<?php

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

$contaCorrentes['123.456.789-13'] = [
    'titular' => 'Alencar',
    'saldo' => 2000
];

foreach ($contaCorrentes as $cpf => $conta) {
    echo $cpf . ' - ' . $conta['titular'] . PHP_EOL;
}