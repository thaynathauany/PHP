<?php

// 'nowdock'
// "heredock"

function geraEmail($nome): void {
    $conteudoEmail = <<<"FINAL"
    Olá, $nome!

    Estamos entrando em contato para 
    {motivo do contato}

    {assinatura} 
    FINAL;

    echo $conteudoEmail ;
}

geraEmail('Thayná Thauany');