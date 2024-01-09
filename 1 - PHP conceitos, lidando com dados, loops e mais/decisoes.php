<?php

$idade = 15;
$nome = 'TT';
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos e chamar TT" . PHP_EOL;

// if ($idade >= 18 && $nome == 'TT') {
//     echo "Você tem $idade anos e chama TT"  . PHP_EOL;
//     echo "Pode entrar" . PHP_EOL;
// }

// if ($idade == 18  || $idade > 18) {
//     echo "Você tem $idade anos bolota."  . PHP_EOL;
//     echo "Pode entrar";
// } else {
//     echo "Você só tem $idade anos. Você não pode entrar" . PHP_EOL;
// }

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho";
}   else if ($idade >= 16 && $numeroDePessoas > 1) {   
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
     }
    else {
        echo "Você só tem $idade anos. Você não pode entrar.";
    }

echo PHP_EOL;
echo "Adeus!";