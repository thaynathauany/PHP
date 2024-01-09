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
    //return $nota1['nota'] <=> $nota2['nota'];
    return $nota2['nota'] <=> $nota1['nota'];
}

usort(array:$notas, callback:'ordenaNotas');
var_dump($notas);
