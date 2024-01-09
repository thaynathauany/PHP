<?php
use \Alura\Banco\Modelo\CPF;
use \Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'Marcio fraga',
    new CPF ('123.456.789-22'),
    '10000'
);

$autenticador->tentaLogin($umDiretor, '4321');
