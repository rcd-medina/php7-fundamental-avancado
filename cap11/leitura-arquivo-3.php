<?php


$s = "arquivo.txt";

if (file_exists($s)) {
    echo "<p>Arquivo EXISTE $s.</p>";
    
    $f = fopen($s, 'r');
    if ($f) {
        /*$conteudo = fgets($f);
        echo "<p>Conteúdo do arquivo.</p>";
        echo $conteudo;*/

        $linha = 1;
        while (! feof($f)) {
            $meuByte = fgetc($f);
            echo "$meuByte";
        }
        fclose($f);
    }
} else {
    echo "<p>Arquivo NÃO EXISTE $f.</p>";
}

