<?php

//classe Conta é a forma do bolo
//$umaNovaConta é a instancia/objeto que é o "bolo" em sí. Tem um único valor/endereço que aponta pra onde esa conta foi criada.
//abstração - pega somente o conceito real, que é a conta, e extrai pro sistema somente os dados necessárioa
//A partir de uma classe, pode-se criar vários objetos.

//Classe é a forma de bolo.
//Objeto é o bolo em si.
//Quando criamos uma variável a partir de uma classe, estamos criando um objeto, e a classe é apenas o tipo deste objeto

class Conta //variavel tipo conta. Criar uma forma 
{//definir dados da conta - atributos da conta
    private  $titular;
    private float $saldo = 0;

    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        Conta::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void //Função que está dentro de uma classe é chamada de método
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo Indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    //$this se refere ao objeto que "chamou" o método
    //No código $umaConta->depositar(500), dentro do método depositar, $this possui a referência para o mesmo objeto que $umaConta.

    public function deposita(float $valorADepositar): void //Função que está dentro de uma classe é chamada de método
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar(($valorATransferir));
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    } //exibe o saldo


    public static function recuperaNumeroDeContas(): int
    {
        return Conta::$numeroDeContas;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }
    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }
}

