<?php

$notas = [
    'João' => '10',
    'Ana' => 8, 
    'Vinicius' => null,
    'Maria' => 9,
    'Roberto' => 10
];

krsort($notas);  //ordena utilizando as chaves ao contrario
var_dump($notas);


$notas = 1;
 if (gettype($notas) === 'array') {
     echo 'Sim, é um array';
 } else {
     echo 'Não é um array';
 }

//formas de verificar se determinada variavel é um array
if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
} else {
    echo 'Não é um array';
}

echo gettype($notas);

var_dump(array_is_list($notas)); //retorna verdadeiro se todas as sua chaves forem números

 foreach ($notas as $aluno => $nota) {
     if($aluno === 'Vinicius') {
         return true;
     }
 } //verifica se existe essa chave dentro do array

 echo 'Vincius fez a prova!' . PHP_EOL;
 var_dump(array_key_exists('Vinicius', $notas)); //verifica se existe essa chave dentro do array

 echo 'Vincius fez a prova: ';
 var_dump(isset($notas['Vinicius'])); //verifica se existe essa chave dentro do array e se esse indice não é nulo

 echo 'Alguém tirou 10? ' .PHP_EOL;
 var_dump(in_array(10, $notas, true)); //verifica se o valor existe

echo 'Quem tirou 10? ' . PHP_EOL;
var_dump(array_search(6, $notas)); //retorna a chave se o valor for encontrado, ou falso caso contrário

