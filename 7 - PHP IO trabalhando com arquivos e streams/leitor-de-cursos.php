<?php

//$arquivo = fopen('lista-cursos.txt', 'r'); //abre o arquivo 'lista-cursos.txt' para ler

//while( !feof($arquivo)) {//enquanto eu nao tiver alcançado o fim desse arquivo, leio uma linha e essa linha será armazenada na variavel $curso
//    $curso = fgets($arquivo);
//    echo $curso;
//}

//$tamanhoDoArquivo = filezize('lista-cursos.txt');
//$cursos = fread($arquivo, $tamanhoDoArquivo);

//echo $cursos;

//fclose($arquivo); //fecha o arquivo


$cursos = file_get_contents('lista-cursos.txt'); //abre o arquivo, busca o conteudo desse arquivo, retorna como uma string e fecha o arquivo
echo $cursos;