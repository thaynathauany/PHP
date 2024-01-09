<?php

$telefones = ['(24) 99999 - 9999', '(11) 99999 - 9999', '(13) 99999 - 9999'];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match( //verifica expressoes regulares
        '/\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}/',
         $telefone,
         $correspondencia
    ); 

    var_dump($correspondencia);
    if ($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }

    echo preg_replace(
        '/\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})^$/',
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}

