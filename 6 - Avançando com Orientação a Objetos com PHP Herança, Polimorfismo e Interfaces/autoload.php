<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) { //autoload recebe como parametro uma outra funcao e essa função recebe um parametro que é uma string que é o nome completo da classe, então, quando tentar instanciar um endereco, ele verá que não existe e criara a partir do autoload
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse); //substitui o Alura\\Banco, gerado pelo replace, por 'src' + o nome completo da classe
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo); //directory_separaror ajusta o separador de acordo com o sistema operacional
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) { //se o arquivo existir, transforma o require dele
        require_once $caminhoArquivo;
    }
});

// o autoload é um processo que busca as classes automaticamente, sem que seja necessário informar cada arquivo separadamente.