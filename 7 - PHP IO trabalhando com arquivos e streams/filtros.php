<?php

require_once 'MeuFiltro.php';

$arquivoCursos = fopen ('lista-cursos.txt', 'r'); //abre o arquivo lista-cursos no modo de leitura

//MeuFiltro

stream_filter_register('thayna.partes', MeuFiltro::class );
stream_filter_prepend($arquivoCursos, 'thayna.partes');
echo fread($arquivoCursos, filesize('lista-cursos.txt'));


// php -a 
// php var_dump(stream_get_filters());  //MOSTRA TODOS OS FILTROS DISPONÍVEIS 
//stream_filter_append($arquivoCursos, 'string.toupper'); //Aplica o filtro para tranformar todas as letras em MAIÚSCULAS
//echo fread($arquivoCursos, filesize('lista-cursos.txt'));


/*Em PHP, os filtros são usados para modificar ou filtrar dados ao ler ou gravar em streams. Eles oferecem uma maneira flexível de manipular dados durante operações de entrada e saída, como leitura de arquivos, conexões de rede, fluxos de entrada padrão e saída padrão. Aqui estão alguns dos filtros mais comuns utilizados em PHP:

    1. **`string.rot13`**: Este filtro aplica a cifra ROT13 (Rotate by 13 places) a uma string. É usado para obscurecer texto simples, substituindo cada letra por outra que esteja 13 lugares à frente ou atrás no alfabeto.
    
    2. **`string.toupper`**: Este filtro converte todas as letras em maiúsculas em uma string.
    
    3. **`string.tolower`**: Este filtro converte todas as letras em minúsculas em uma string.
    
    4. **`convert.*`**: Esses filtros são usados para converter entre diferentes conjuntos de caracteres (encodings), como `convert.iconv.*` e `convert.mbstring.*`.
    
    5. **`zlib.*`**: Esses filtros são usados para compressão e descompressão de dados usando a biblioteca zlib. Por exemplo, `zlib.deflate` para compressão e `zlib.inflate` para descompressão.
    
    6. **`bzip2.*`**: Semelhante aos filtros zlib, esses filtros são usados para compressão e descompressão de dados usando a biblioteca bzip2.
    
    7. **`string.strip_tags`**: Remove todas as tags HTML e PHP de uma string.
    
    8. **`convert.base64-encode`**: Codifica uma string em base64.
    
    9. **`convert.base64-decode`**: Decodifica uma string de base64.
    
    10. **`mcrypt.*`**: Esses filtros são usados para criptografia e descriptografia de dados usando a extensão mcrypt, que está obsoleta a partir do PHP 7.1 e removida no PHP 7.2.
    
    Esses são apenas alguns exemplos dos filtros disponíveis em PHP. Eles podem ser usados individualmente ou em conjunto, permitindo uma ampla gama de manipulações de dados durante operações de I/O. Além disso, você pode criar seus próprios filtros personalizados para atender às necessidades específicas do seu aplicativo.
    */
?>

