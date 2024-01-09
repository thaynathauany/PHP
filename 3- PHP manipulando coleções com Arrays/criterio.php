<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Ademir',
        'nota' => 7,
    ],
    [
        'aluno' => 'Marleide',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }
    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }
    return 0;
}
//essa funcao precisa retornar um inteiro. 
//O inteiro precisa ser -1 se o primeiro parâmetro precisar vir antes desse array ordenado.
//Retorna 1 se o segundo paramêtro precisar vir primeiro desse array ordendo.
//Retorna 0 se eles forem iguais

usort(array:$notas, callback:'ordenaNotas');
var_dump($notas);
