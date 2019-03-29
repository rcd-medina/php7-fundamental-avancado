<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operações com Strings</title>
</head>
<body>

<?php

//
// Atribui se a frase Meu texto à variável $s.
$s = "Meu texto";
printf("<p>s: %s</p>", $s);

//
// Concatenação de strings.
$s = $s . ": Concatenando...";
printf("<p>s: %s</p>", $s);

//
// Concatena números.
$i = 1000;
$s = $s . " - Agora concatena o número: " . $i;
printf("<p>s: %s</p>", $s);

//
// Contagem de caracteres de strings.
$s = "Hello world!";
$i = strlen($s);
printf("<p>Tamanho de s = %d</p>", $i);

//
// Transforma strings em caixa alta (para maiúsculas).
$u = strtoupper($s);
printf("<p>Caixa Alta s = %s</p>", $u);

//
// Transforma strings em caixa baixa (para minúsculas).
$s = "HelLO wOLd";
$l = strtolower($s);
printf("<p>Caixa Baixa l = %s</p>", $l);

//
// Strings em PHP tem o mesmo comportamento de arrays.
// Logo: Hello ... H (posição 0), e (posição 1), l (posição 2)...
// strpos() realiza uma busca dentro de uma string.
// Primeiro parâmetro: onde será realizada a busca.
// Segundo parâmetro : o que está sendo procurado.
// Retorno da função é a posição onde foi encontrado a string.
// Quando a função strpos não encontra o que está sendo procurado, ele retorna false
// que pose ser interpretado como 0 (zero).
$s = "Hello World";
$t = "Wor";
$p = strpos($s, $t);
printf("<p>strpos = %d</p>", $p);

//
// stripos() faz o mesmo que strpos(), com a diferença que stripos() ignora se as letras
// estão em caixa alta ou baixa, ou seja, a função stripos() é case insensitive.
$s = "Hello World";
$t = "wor";
$p = stripos($s, $t);
printf("<p>strpos = %d</p>", $p);

//
// Função trim() remove os espaços no começo e fim da string.
$s = "     hello world  ";
printf("<p>%s</p>", $s);

$s = trim($s);
printf("<p>%s</p>", $s);

//
// Função trim() pode receber um segundo parâmetro informando qual caractere deve
// ser removido no inicio e fim da string.
$s = "_________hello world___";
printf("<p>%s</p>", $s);

$s = trim($s, '_');
printf("<p>%s</p>", $s);

//
// Função strcmp() serve para comparar strings e saber "quem vem primeiro".
// Esta função é case-sensitive, diferencia letras maiúsculas e minúsculas.
// Em contra partida, também existe a versão insensitive, strcasecmp().
// Funciona como um dicionário, ex.: "minha string" começa com a letra "m" e "string" começa
// com a letra "s", no dicionário "m" vem antes de "s".
// Se o resultado da função strcmp() é < 0, $s1 vem antes que str2.
// Se o resultado da função strcmp() é > 0, $s2 vem antes que str1.
// Se o resultado da função strcmp() é = 0, $s1 e str2 são iguais.
$s1 = "minha string";
$s2 = "string";
$r = strcasecmp($s1, $s2);
printf("<p>Resultado do strcmp(s1, s2) = %d</p>", $r);

$r = strcasecmp($s2, $s1);
printf("<p>Resultado do strcmp(s2, s1) = %d</p>", $r);

$r = strcasecmp($s2, $s2);
printf("<p>Resultado do strcmp(s2, s2) = %d</p>", $r);

//
// Função exlode() transforma uma strging em array.
$computador = "mouse teclado monitor memoria cpu impressora";
$pecas = explode(" ", $computador);
print_r($pecas);

?>

</body>
</html>