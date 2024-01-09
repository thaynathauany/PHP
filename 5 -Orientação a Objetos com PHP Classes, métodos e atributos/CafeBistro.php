<?php
class Produto {
    private $nome;
    private $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $this->calcularDesconto($preco);
    }

    private function calcularDesconto($preco) {
        $desconto = 0.1; // Desconto de 10%
        $valorDescontado = $preco * $desconto;
        $precoComDesconto = $preco - $valorDescontado;

        return $precoComDesconto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}

// Utilizando da classe
$produto = new Produto("Camiseta", 50);
echo "Nome: " . $produto->getNome() .PHP_EOL;
echo "Preço: " . $produto->getPreco();