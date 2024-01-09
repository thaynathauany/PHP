<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('São Caetano', 'Centro', 'Primeiro de Maio', '226');
$outroEndereco = new Endereco('Rio de Janeiro', 'São Gonçalo', 'Benedito II', '44B');

//$umEndereco->rua;
//echo $umEndereco->numero;
//exit();

echo "Antes de Alterar: " . $umEndereco->cidade . PHP_EOL;

$umEndereco->cidade = "Galileia";

echo "Depois de alterar: " . $umEndereco->cidade . PHP_EOL;

//echo $outroEndereco;

//->recuperaRua() . "," . $umEndereco->recuperaNumero(). "," .$umEndereco->recuperaBairro(). "," .$umEndereco->recuperaCidade();
