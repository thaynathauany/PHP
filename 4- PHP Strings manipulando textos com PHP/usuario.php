<?php

// $email = 'vinicius@alura.com.br';
// echo substr($email, 0, 8) .PHP_EOL; 
// echo substr($email, 9) .PHP_EOL; 

$nome = 'Thayná Thauany';
$email = 'thayna@alura.com.br';
$senha = 'áéíóú';

echo mb_strlen($senha) . PHP_EOL ;//mede o tamanho da string

if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' .PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); //busca a posição de '@' dentro de '$email'

$usuario = substr($email, 0, $posicaoDoArroba); //pega do inicio até o inicio da posição '@'

echo mb_strtoupper($usuario) .PHP_EOL; //mb_ permite que as alterações funcionem em strings complexas "ç í ã"
echo substr($email, $posicaoDoArroba + 1) .PHP_EOL; //pega depois do arroba

list($nome, $sobrenome) = (explode(' ', $nome)); //separa as variaveis em arrays

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Thayná Thauany,24,thayna98@alura.com.br';
var_dump(explode(',' ,  $csv));

echo trim($email, '') . PHP_EOL; //apara as string removendo os espaços