<?php
function sacar(array $conta, float $valorASacar) : array 
{
    if ($valorASacar > $conta ['saldo']) {
        exibeMensagem(mensagem: "Você não tem saldo para sacar este valor.");
    } else {
       $conta ['saldo'] -= $valorASacar; 
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . '<br>';
}

function titularComLetrasMaiusculas(array &$conta) //& significa que estou alterando a conta em sí, e nao a cópia da conta (PASSAGEM POR REFERÊNCIA)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    echo "<li>Títular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
}

    


