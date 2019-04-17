<?php


$s = "arquivo.txt";

if (file_exists($s)) {
    echo "<p>Arquivo EXISTE $s.</p>";
    
    $f = fopen($s, 'r');
    if ($f) {
        $conteudo = fread($f, filesize($s));
        echo "<p>Conteúdo do arquivo.</p>";
        echo $conteudo;

        fclose($f);
    }
} else {
    echo "<p>Arquivo NÃO EXISTE $f.</p>";
}

