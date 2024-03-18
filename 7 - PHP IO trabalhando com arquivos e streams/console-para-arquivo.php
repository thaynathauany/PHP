<?php

//$teclado = fopen('php://stdin', 'r'); //standard input = teclado

//$novoCurso = trim(fgets($teclado)); //fgts - Lê uma linha do teclado. trim - evita a quebra de linha no final

$novoCurso = trim(fgets(STDIN)); // STDIN = fopen('php://stdin', 'r');

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND); //FILE_APPEND -  não apaga o conteúdo que já existe;

