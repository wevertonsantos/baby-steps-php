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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($contaCorrentes as $cpf => $conta)
    { 
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
    ?>
        <dl>
            <dt><h3>Conta correntes</h3></dt>
            <dd><?= "$titular - $cpf" ?></dd>
            <dd><?= "Saldo : $saldo" ?></dd>
        </dl>
    <?php 
    } ?>
</body>
</html>