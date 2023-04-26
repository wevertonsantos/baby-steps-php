<?php
function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacarSaldo($conta, $valorASacar){
    if($valorASacar > $conta){
        echo "Você não pode sacar" . PHP_EOL;
    }
    else{
        $conta['saldo'] -= $valorASacar;
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

foreach ($contaCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf - $conta[titular] : $conta[saldo]");
}