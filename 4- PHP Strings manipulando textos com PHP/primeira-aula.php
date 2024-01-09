<?php

$nome = 'Thayná Thauany';

$ehDaMinhaFamilia = str_contains($nome, 'Saudade');//verifica se uma string existe dentro da outra

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família";
} else {
    echo "$nome não é da minha família";
}