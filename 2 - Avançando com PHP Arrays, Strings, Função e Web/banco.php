<?php

//E_WARNING | E_NOTICE | E_ERROR;

require_once 'funcoesBanco.php'; //inclui um arquivo verificando se ele ja foi incluído

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 800
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 100
    ],
    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.256.789-12'] = sacar($contasCorrentes['123.256.789-12'], valorASacar: 100);
$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], valorASacar: 200);
$contasCorrentes['123.456.789-11'] = depositar($contasCorrentes['123.456.789-11'], valorADepositar: 900);

//unset($contasCorrentes['123.456.789-10']); //exclui a variavel

titularComLetrasMaiusculas ($contasCorrentes['123.456.789-11']);
//
// foreach ($contasCorrentes as $cpf => $conta) {
//     exibeMensagem(
//         mensagem: "$cpf $conta[titular] $conta[saldo]"
//     );
// }
//
// foreach ($contasCorrentes as $cpf => $conta) {
//     exibeMensagem(
//         mensagem: "$cpf {$conta['titular']} {$conta['saldo']}"
//     );
// }
//
// foreach ($contasCorrentes as $cpf => $conta) {
//     list('titular' => $titular, 'saldo' => $saldo) = $conta;
//     exibeMensagem(
//         mensagem: "$cpf $titular $saldo"
//     );
// }
//
// foreach ($contasCorrentes as $cpf => $conta) {
//     ['titular' => $titular, 'saldo' => $saldo] = $conta;
//     exibeMensagem(
//         mensagem: "$cpf $titular $saldo"
//     );
// }

//Uma função retorna um valor, ou seja, a chamada da função representa um valor após sua execução.
//Uma subrotina apenas executa um código isolado.

 echo "<ul>";
 foreach ($contasCorrentes as $cpf => $conta) {
     exibeConta($conta);
 }
 echo "</ul>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP WEB</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3> <?php echo $conta['titular']; ?> - CPF: <?php echo $cpf ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo'] ?>R$;
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
