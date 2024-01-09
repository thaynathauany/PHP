<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

list($idadeThayna, $idadePaolo, $idadeMaria) = $idadeList;

$idadeList[] = 20; //adiciona o 20 no final da lista

//count é uma funcionalidade do PHP que recebe uma lista e conta quantos itens tem em uma  lista
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}