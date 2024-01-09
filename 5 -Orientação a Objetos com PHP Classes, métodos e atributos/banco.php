<?php

//require_once 'src/Conta.php';
//require_once 'src/Titular.php';
//
//$primeiraConta = new Conta(new CPF('476.358.738-22', 'Thayná Thauany dos Santos'));
//$primeiraConta->deposita(500);
//$primeiraConta->saca(300);
//
//echo $primeiraConta->recuperaNomeTitular(). PHP_EOL;
//echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
//echo $primeiraConta->recuperaSaldo() . PHP_EOL;
//
//$segundaConta = new Conta(new CPF('990.489.148-68', 'Paolo Victor'));
//$segundaConta->deposita(8000);
//$segundaConta->saca(780);
//var_dump($segundaConta);
//
//echo $segundaConta->recuperaNomeTitular(). PHP_EOL;
//echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
//echo $segundaConta->recuperaSaldo() . PHP_EOL;
//
//$terceiraConta = new Conta(new CPF('990.014.588-68', 'Tekão'));
//unset($segundaConta);
//
//echo Conta::recuperaNumeroDeContas();

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123'), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();