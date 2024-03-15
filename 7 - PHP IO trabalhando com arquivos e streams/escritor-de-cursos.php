<?php

//$arquivo = fopen('cursos-php.txt', 'a'); //modo de abertura 'a' faz a mesma coisa que o 'w' (write), porém coloca o cursor no final do arquivo, nao sobrescrevendo o que estava escrito
$curso = "Aprendendo a usar o PHP matagal\n";

//fwrite($arquivo, $curso);
//
//fclose($arquivo);

file_put_contents('cursos-php.txt', $curso, FILE_APPEND); //FILE_APPEND, não sobrescreve o que já estava escrito. Adicona no final do cursor