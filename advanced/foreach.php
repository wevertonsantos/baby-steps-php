<?php

$contaCorrentes = [
    12345678910 => [
        'titular' => 'Weverton',
        'saldo' => 1000
    ], 
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12345678912 => [
        'titular' => 'Mário',
        'saldo' => 300
    ]
];

foreach ($contaCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}