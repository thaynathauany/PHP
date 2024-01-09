<?php

require_once  'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Conta, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaCorrente //uma conta precisa de um títular e um títular precisar de cpf, nome e endereço
    (new Titular
        (new CPF('123.456.789-10'),
        'Thayná boboca',
        new Endereco('Santo André', 'Vila Valparaíso', 'Rio Preto', '23b')
        ),
    );

$conta->transfere();
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();