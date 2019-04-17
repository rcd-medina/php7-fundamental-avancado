<?php


$nome = "escrevendo.txt";

$f = fopen($nome, 'w');

if ($f) {
    fwrite($f, "1 Texto a ser escrito.\r\n");
    fwrite($f, "2 Texto a ser escrito.\r\n");
    fwrite($f, "3 Texto a ser escrito.\r\n");
    fclose($f);
}

$f = fopen($nome, 'r+');
if ($f) {
    $linha = fgets($f);
    echo "<p>Primeira linha do arquivo: $linha </p>";
    fwrite($f, "4 Nova linha escrita.\r\n");
    fclose($f);
}

