<?php

$texto = 'Texto com qualquer coisa poxa e caramba';
echo str_replace(
    ['poxa', 'caramba'],
    '***',
    $texto) . PHP_EOL; //retorna uma outra string com os valores substituidos
