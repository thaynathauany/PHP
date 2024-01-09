<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected static function percentualTarifa(): float
    {
        return 0.03;
    }
}