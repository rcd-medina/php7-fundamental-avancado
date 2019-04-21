<?php

// ====================================================================================================
// Faz o download (neste a leitura) das informações de um arquivo no servidor e apresenta no navegador
// ====================================================================================================

/*
$conteudo = file_get_contents('../cap11/arquivo.txt');

if ($conteudo) {
    echo $conteudo;
} else {
    echo "Erro ao abrir o arquivo.";
}
*/

// ====================================================================================================
// Realiza o download da página apresentada no link e apresenta na página do nosso servidor local.
// Em seguida grava o conteúdo em um arquivo no servidor local.
// ====================================================================================================

$url = 'https://php.net/support.php';
$conteudo = file_get_contents($url);

if ($conteudo) {
    echo $conteudo;
    file_put_contents('support.html', $conteudo);
} else {
    echo "Erro ao abrir o arquivo.";
}

