<?php

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')) {//verifica se a minha URL começa com HTTPS
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}

echo PHP_EOL;

if (str_ends_with($url, 'br')) {//verifica se a minha URL termina com br
    echo 'É uma URL Brasileira';
} else {
    echo 'Não é uma URL Brasileira';
}