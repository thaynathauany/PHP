<?php

$alunos2021 = [
    0 => 'João',
    1 => 'Ana', 
    2 => 'Vinicius',
    3 => 'Maria',
    4 => 'Roberto'
];

$novosAlunos = [
    5 => 'Patricia',
    6 => 'Nico',
    7 => 'Gael',
    8 => 'Reinaldo',
    9 => 'Daiane'
];

//$alunos2022 = array_merge($alunos2021, $novosAlunos);

// $alunos2022 = $alunos2021 + $novosAlunos;

$alunos2022 = [...$alunos2021, 'Carlos Thayná', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'TT');
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'TTzera', 'Paolera') . PHP_EOL; //adiciona no inicio do array


echo array_shift($alunos2022); //reordena os elementos em caso de arrays numericos reordenando o primeiro

echo array_pop($alunos2022) . PHP_EOL;//reordena os elementos em caso de arrays numericos reordenando o primeiro 

var_dump($alunos2022);

//O operador + sempre usa as chaves do primeiro array e nunca sobrescreve seus valores com o do segundo.

//Se temos apenas um elemento para adicionar, usar o operador [] não só oferece uma sintaxe mais interessante como também tem um ínfimo ganho de performance já que não há uma chamada de função e sim somente uma operação.