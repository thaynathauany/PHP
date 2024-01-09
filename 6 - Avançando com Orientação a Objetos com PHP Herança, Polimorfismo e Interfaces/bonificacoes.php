<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{EditorVideo, Funcionario, Diretor, Gerente, Desenvolvedor};

//$umaFuncionaria = new Funcionario(
//    "Thayná Santos",
//    new CPF ('444.777.333-22'),
//    'Desenvolvedora',
//    '1000'
//);

$umFuncionario = new Gerente(
    "Paolo Posso",
    new CPF ('777.666.555-44'),
    '3000'
);

$umDiretor = new Diretor(
    'Cléber',
    new CPF ('111.444.555-22'),
    '5000'
);

$umDesenvolvedor = new Desenvolvedor(
    'Augusto',
    new CPF('222.444.333-55'),
    '8000'
);

$umDesenvolvedor->sobeDeNivel();

$umEditor = new EditorVideo(
    'Claudio',
    new CPF('222.555.777-33'),
    '1500'
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
//$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();