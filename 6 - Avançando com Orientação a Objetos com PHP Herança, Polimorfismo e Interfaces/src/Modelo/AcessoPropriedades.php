<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades //trait copia o código de algum local e injetá na classe desejada
{
    public function __get(string $nomeAtributo)
    {
        //rua -> recuperaRua
        $metodo = 'recupera' . ucfirst($nomeAtributo); //Upper Case First
        return $this->$metodo();
    }
}