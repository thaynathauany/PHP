<?php

$notas = [
    'João' => 8,
    'Ana' => 10, 
    'Vinicius' => 6,
    'Maria' => 9,
    'Roberto' => 7
];

ksort($notas); //ordena utilizando as chaves
krsort($notas); //ordena utilizando as chaves ao contrario
arsort($notas); //tras as chaves
rsort($notas); //não trás as chaves
var_dump($notas);