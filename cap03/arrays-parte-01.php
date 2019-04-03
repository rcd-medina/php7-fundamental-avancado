<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operações com Arrays</title>
</head>
<body>

<?php

//
// Criando e preenchendo um array.
$a = [10, 20, 30, 40, 50, 60, 70];

// Outra forma de preencher um array.
$a[] = 80;

// Outra forma, indicando em qual índice.
$a[8] = 90;

//
// Imprime as informações do arrays.
var_dump($a);

//
// Retorna a quantidade de elementos (valores) do array.
$c = count($a);
echo "<br><br>";
echo "Tamanho do array a: $c <br><br>";

//
// Verifica se no índice (posição) 9 do array há algum valor.
// O retorno será falso, pois só há valores até o índice 8.
$b = isset($a[9]);
echo "isset(a[9]) = ";
var_dump($b);

//
// Funções para trabalhar com arrays.
//

//
// array_keys() ==> Retorna os índices do array.
$a_keys = array_keys($a);
echo "<br><br>";
echo "índices do array array_keys(a): ";
var_dump($a_keys);

//
// Exemplo com array associativo.
$a2 = ["key1" => "Valor 1", "key2" => "valor 2"];
$a2_keys = array_keys($a2);
echo "<br><br>";
echo "array_keys(a2) = ";
var_dump($a2_keys);

//
// array_merge() ==> "Junta" dois arrays, a função funde os dois arrays passados como parâmetro.
$a = array("vermelho", "verdde");
$a2 = array("azul", "amarelo");
$a3 = array_merge($a, $a2);

echo "<br><br>";
echo "array_merge(a, a2) = ";
var_dump($a3);

//
// array_fill() ==> Preecnhe um array com um determinado valor inciando em uma posição
// qualquer, não precisa ser a primeira (0) e terminando e outra.
// No exemplo, da posição 0 (zero) até a posição 4, serão preenchidos com valor blue.
$a = array_fill(0, 4, "blue");
echo "<br><br>";
echo "array_fill(0, 4, blue) = ";
var_dump($a);

//
// array_reverse() ==> Inverte a ordem dos valores do array.
$a = [10, 20, 30, 40, 50];
$b = array_reverse($a);
echo "<br><br>";
echo "array_reverse(a) = ";
var_dump($b);

//
// array_sum() ==> Soma todos os valores do array.
$a = [10, 20, 30, 40, 50];
$res = array_sum($a);
echo "<br><br>";
echo "Soma dos valores = $res";

//
// array_search() ==> Procura um determinado valor no array.
$a = [10, 20, 30, 40, 50];
$i = array_search(40, $a);
echo "<br><br>";
echo "índice do valor 40 no a = $i";

//
// array_values() ==> Retorna apenas os valores do array.
$a2 = ["key1" => "Valor 1", "key2" => "valor 2"];
$a3 = array_values($a2);
echo "<br><br>";
echo "Valores do a2 = ";
var_dump($a3);

//
// sort()  ==> Ordena, de maneira crescente, um array desordenado.
$a = [40, 10, 50, 20, 70, 90, 80];
sort($a);
echo "<br><br>";
echo "sort(a): ";
var_dump($a);

//
// rsort() ==> Ordena no modo reverso, descrescente.
$a = [40, 10, 50, 20, 70, 90, 80];
rsort($a);
echo "<br><br>";
echo "rsort(a): ";
var_dump($a);

//
// asort() ==> Ordena, de maneira crescente, um array associativo que esteja desordenado.
// Esta função mantém as chaves associadas aos seus respectivos valores, isso não ocorre com sort().
$a = ['key1' => 13, 'key2' => 8, 'key3' => 5, 'key4' => 3];
asort($a);
echo "<br><br>";
echo "asort(a): ";
var_dump($a);

//
// arsort() ==> Ordena no modo reverso, descrescente, um array associativo.
// Esta função mantém as chaves associadas aos seus respectivos valores, isso não ocorre com rsorte()
$a = ['key1' => 13, 'key2' => 8, 'key3' => 5, 'key4' => 3];
arsort($a);
echo "<br><br>";
echo "arsort(a): ";
var_dump($a);

//
// array_multisort() ==> Ordena de maneira crescente
$a = array("maça", "pera", "abacate", "melancia", "laranja", "limao");
echo "<br><br>";
array_multisort($a);
echo "array_multisort(a): ";
var_dump($a);

//
// array_multisort() ==> Ordena de maneira decrescente
echo "<br><br>";
array_multisort($a, SORT_DESC);
echo "array_multisort(a, SORT_DESC): ";
var_dump($a);

//
// array_multisort() ==> Com mais de um array.
$a = array("maça", "pera", "abacate", "melancia", "laranja", "limao");
$a2 = array("vermelho", "verde", "verde", "vermelho", "laranja", "amarelo");
array_multisort($a, $a2);
echo "<br><br>";
echo "array_multisort(a): ";
var_dump($a); echo "<br>";

echo "array_multisort(a2): ";
var_dump($a2);
?>

</body>
</html>