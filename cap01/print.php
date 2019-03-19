<?php

//===========================================================================================================
// Arquivo com exemplos de como imprimir mensagens na tela (navegador).
//===========================================================================================================

// Impressão com uso da função echo.
// No fim da linha foi adicionada a tage HTML para inserir uma quebra de linha.
echo "Mensagem impressa com o uso da função echo do PHP. <br>";
echo "Segunda mensagem com a função echo.";

// Impressão com o uso de variáveis.
// 1º ==> Declara uma variável e depois atribui um valor a ela, neste exemplo um texto.
// 2º ==> Em seguida a função echo "imprime" o conteúdo.
// Toda variável inicia com um $ (cifrão) no nome.
$mensagem = "Conteúdo da variável.";
echo "<br><br>" . $mensagem;

// Impressão com uso da função printf().
// Esta função permite o uso de algumas funções para formatação de texto e números.
// Quebra de linha no navegador só funciona com uso das tags <br> e <p>. A opção \n
// do PHP só permite a quebra de linha quando se está editando arquivos de texto e
// conteúdo gerado para uma página HTML.
printf("<p>Testando a função printf()</p>");

// Impressão com uso da função printf().
// O sinal de %s (porcento) e s indica que naquele local será feita a impressão de um texto
// que está na variável $mensagem.
printf("<br> <strong> %s </strong>", $mensagem);

// %d significa que queremos imprimir um número inteiro.
// Esse número inteiro está na variável $n, que é passada após a vírgula.
$n = 130;
printf("<h3> %d </h3>", $n);

// Agora é um pouco diferente.
// Neste exemplo será impresso um número com uma quantidade de strings, de maneira geral,
// 8 casas (caracteres) são "guardados" para uso.
// Vamos esses espaços com o caractere 0 (zero).
printf("<h3> %08d </h3>", $n);
printf("<h3> %08d </h3>", 5);
printf("<h3> %08d </h3>", 80000);

// f ==> float, número de ponto flutuante.
// Na segunda linha imprime um número com 2 casas decimais.
$d = 15.10;
printf("<p> %8f </p>", $d);
printf("<p> %5.2f </p>", $d);

// 1º Linha, apenas imprime o texto.
// 2º Linha, imprime o texto reservando 25 espaços para o texto.
// 3º Linha, imprime somente os 5 primeiros caracteres.
$t = "testando mais textos";
printf("%s", $t);
printf("<p>Texto: %25s </p>", $t);
printf("<p>Texto: %.5s </p>", $t);

// Imprime o valor de $t, o tamanho e o tipo de dado contido.
var_dump($t);
echo "<br>";

var_dump($d);
echo "<br>";

var_dump($n);

