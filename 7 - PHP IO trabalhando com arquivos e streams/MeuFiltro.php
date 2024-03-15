<?php

class MeuFiltro extends  php_user_filter
{ 

    public $stream;
    public function onCreate():bool //esse método é executado sempre que for criado essa classe de filtro
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this-> stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing):int
    {
        $saida = '';
        //sempre que tiver um fluxo de dados entrando, eu tento buscar ele
        while ($bucket = stream_bucket_make_writeable($in)) {
            $linhas = explode("\n", $bucket->data); //pego os dados de $linhas e explidir (separar em um array onde cada índice é uma linha)
    

            //stripos - tenta encontrar uma string dentro da outra
            foreach ($linhas as $linha) {
                if (stripos($linha, 'Parte') !== false ){ //pra cada uma dessas linhas se eu encontrar uma linha com 'parte' 
                    $saida .= "$linha\n"; //eu adiciono esssa linha e uma quebra de linha em %$saida
                    //$saida = $saida . "$linha\n";

                    //.=.Esse operador realiza uma concatenação da string $linha com o conteúdo já existente na variável $saida, enquanto no código original estava sendo utilizado apenas o operador de atribuição =, o que fazia com que a variável $saida fosse substituída pela última linha que continha a palavra "Parte". Com a utilização de .= na correção, as linhas que contêm "Parte" são adicionadas uma após a outra no resultado de saída.
                }
            }
        }

        $bucketSaida = stream_bucket_new($this->stream, $saida);
        stream_bucket_append($out, $bucketSaida);
        
        return PSFS_PASS_ON;
    }
   
}