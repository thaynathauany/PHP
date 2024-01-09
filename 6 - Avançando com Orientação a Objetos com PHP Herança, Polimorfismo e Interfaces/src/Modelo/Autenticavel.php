<?php

namespace Alura\Banco\Modelo;

interface Autenticavel //interface é basicamente uma classe abstrata com todos os métodos abstratos
{
    public function podeAutenticar(string $senha): bool;
}