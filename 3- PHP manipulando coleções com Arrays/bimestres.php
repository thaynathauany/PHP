<?php

$notasBimestre1 = [
    'João' => '10',
    'Ana' => 8, 
    'Vinicius' => 6,
    'Maria' => 9,
    'Roberto' => 7
];

$notasBimestre2 = [
    'João' => '10',
    'Ana' => 6, 
    'Vinicius' => 6,
    'Maria' => 10,
    'Roberto' => 7
];
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);
var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));

//var_dump(array_keys($alunosFaltantes)); //recebe um array e devolve suas chaves
//var_dump(array_values($alunosFaltantes)); //ve a nota do 1º bimestre dos alunos que faltaram
//var_dump(array_diff($notasBimestre1, $notasBimestre2)); //retorna um novo array contendo os elementos que existem no primeiro mas n nos outros
//var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));  //verifica tanto a chava quanto o valor

