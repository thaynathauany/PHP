<?php

namespace Alura\Banco\Modelo;

///**
// * @package Alura\Banco\Modelo
// * @property-read string $cidade
// * @property-read string $bairro
// * @property-read string $rua
// * @property-read string $numero
// */

final class Endereco
{
    use AcessoPropriedades;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero) //o construtor inicializa os atributos
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    //os metódos getters abaixo dao acesso aos construtores
    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __set(string $name, string $value): void
    {
        $this->$name = $value;
    }
}
